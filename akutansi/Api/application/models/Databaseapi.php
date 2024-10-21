<?php

/**
 * Created by PhpStorm.
 * User: Dimas
 * Date: 11/21/2016
 * Time: 9:28 AM
 */
class Databaseapi extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->model("Logging");
    }

    /**
     * @param $Params
     * @return mixed
     */

    public function Execute($Params){
        $Hasil=array();
        $Hasil["IsError"]=true;

        switch ($Params["Activity"]){
            case "insert":
                return self::InsertData($Params);
            break;
            case "update":
                return self::UpdateData($Params);
            break;
            case "delete":
                return self::DeleteData($Params);
            break;
            case "get":
                return self::GetData($Params);
            break;
            case "login":
                if($Params["Target"]!="security"){
                    $Hasil["IsError"]=true;
                    $Hasil["ErrMessage"]="Unable run 'login' invalid Target";
                    return $Hasil;
                }
                return self::Login($Params);
            break;
            case "callstoredprocedure":
                if($Params["Target"]!="database"){
                    $Hasil["IsError"]=true;
                    $Hasil["ErrMessage"]="Unable run 'callstoredprocedure' invalid Target";
                    return $Hasil;
                }
                return self::CallProsedure($Params);
            break;

        }
    }

    /**
     * @param $Params
     * @return mixed
     */
    private function InsertData($Params){
        $NamaTabel=$Params["Target"];
        $GetLastID=(!empty($Params["GetLastId"]) && $Params["GetLastId"]==1?true:false);
        $ResultDB=$this->db->insert($NamaTabel,json_decode($Params["ParamsData"],true));
        $LastID=($GetLastID?$this->db->insert_id():"");
        $Hasil["Output"]=$LastID;

        if(!$ResultDB){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$this->db->error();
            return $Hasil;
        }

        $Hasil["IsError"]=false;

        // Log User.
        $this->Logging->InsertSysLogUser($NamaTabel,(!empty($LastID?$LastID:-1)),$Params["UserId"],"Insert",$Params["ParamsData"],"API-BO",$this->input->ip_address());

        return $Hasil;
    }

    /**
     * @param $Params
     * @return mixed
     */
    private function UpdateData($Params){

        $NamaTabel=$Params["Target"];
        $Filter=$Params["ParamsFilter"];
        $Colums=array();

        // Looping ParamsData
        $ParamsDataArr=json_decode($Params["ParamsData"],true);
        foreach ($ParamsDataArr as $key=>$value){
            $Colums[]=$key."='".$value."'";
        }

        $sql="update %s set %s where %s";
        $sql=sprintf($sql, $NamaTabel, implode(",",$Colums), $Filter);

        $query = $this->db->query($sql);
        $AffectedRow=$this->db->affected_rows();

        if(!$query){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$this->db->error();
            return $Hasil;
        }

        $Hasil["IsError"]=false;
        $Hasil["ErrMessage"]="";
        $Hasil["Output"]=$AffectedRow." row(s) affected";


        // Log User.
        $this->Logging->InsertSysLogUser($NamaTabel,(!empty($LastID?$LastID:-1)),$Params["UserId"],"Insert",$Params["ParamsData"],"API-BO",$this->input->ip_address());

        return $Hasil;

    }

    /**
     * @param $Params
     * @return mixed
     */
    private function DeleteData($Params){

        $NamaTabel=$Params["Target"];
        $Filter=$Params["ParamsFilter"];
        $Colums=array();


        $sql="delete from %s where %s";
        $sql=sprintf($sql, $NamaTabel, $Filter);

        $query = $this->db->query($sql);
        $AffectedRow=$this->db->affected_rows();

        if(!$query){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$this->db->error();
            return $Hasil;
        }

        $Hasil["IsError"]=false;
        $Hasil["ErrMessage"]="";
        $Hasil["Output"]=$AffectedRow." row(s) affected";
        return $Hasil;

    }

    /**
     * @param $Params
     * @return mixed
     */
    private function GetData($Params){
        $IsPaging=($Params["Page"]=="x"?false:true);
        $NamaTabel=$Params["Target"];
        $Sql="";

        $HalKe=(is_numeric($Params["Page"])?$Params["Page"]:1);


        $JumlahDataPerHal=(is_numeric($Params["Limit"])?$Params["Limit"]:10);
        $JmlDataTotal=0;
        $JmlHalTotal = 0;

        // Set ParamsField to SQL
        if (empty($Params["ParamsField"]) || $Params["ParamsField"]=="*"){
            $Sql="select * from ".$NamaTabel;
        }else{
            $Sql="select ".$Params["ParamsField"]." from ".$NamaTabel;
        }

        // Set ParamsFilter to SQL
        if (!empty($Params["ParamsFilter"])){
            $Sql.=" where ".$Params["ParamsFilter"];
        }

        // Set ParamsGroupBy to SQL
        if (!empty($Params["ParamsGroupBy"])){
            $Sql.=" group by ".$Params["ParamsGroupBy"];
        }

        // Set ParamsSort to SQL
        if (!empty($Params["ParamsSort"])){
            $Sql.=" order by ".$Params["ParamsSort"];
        }

        // Jika Paging TRUE
        if($IsPaging){

            // Count ke DB untuk hitung jumlah data
            preg_match("/from (.*)/", $Sql, $SplitSQL);
            $SqlCountData="select count(0) as count ".$SplitSQL[0];
            $CountDataDB = $this->db->query($SqlCountData);

            // Check Error DB
            if(!$CountDataDB){
                $Hasil["IsError"]=true;
                $Hasil["ErrMessage"]=$this->db->error();
                return $Hasil;
            }

            // Ambil jml data dan jml halaman
            $ResultDB=$CountDataDB->result();
            $JmlDataTotal=$ResultDB[0]->count;
            $JmlHalTotal = ceil($JmlDataTotal/$JumlahDataPerHal);

            //Jika minta ke halaman terakhir
            if($HalKe==-1){
                $HalKe=$JmlHalTotal;
            }

            //Set SQL finalnya
            $Limit=($HalKe-1) * $JumlahDataPerHal;
            $Sql.=" limit ". $Limit .", ". $JumlahDataPerHal;

        }

        // Access Ke DB
        $QueryDb = $this->db->query($Sql);

        // Check Error DB
        if(!$QueryDb){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$this->db->error();
            return $Hasil;
        }
        $HasilQueryDB=$QueryDb->result_array();

        // Set Array Paging
        $ArrayPaging=array();
        $ArrayPaging["IsPaging"]=$IsPaging;
        if($JmlDataTotal>0){
            $ArrayPaging["Total"]=(int)$JmlDataTotal;
            $ArrayPaging["Count"]=count($HasilQueryDB);
            $ArrayPaging["HalKe"]=(int)$HalKe;
            $ArrayPaging["JmlHalTotal"]=(int)$JmlHalTotal;
            $ArrayPaging["IsNext"]=($JmlDataTotal > ($JumlahDataPerHal*$HalKe)?true:false);
            $ArrayPaging["IsPrev"]=($HalKe>1?true:false);
            $ArrayPaging["DataDari"]=(($HalKe*$JumlahDataPerHal) - $JumlahDataPerHal) + (count($HasilQueryDB) > 0?1:0);
            $ArrayPaging["DataSampai"]=(count($HasilQueryDB) >= $JumlahDataPerHal? $ArrayPaging["DataDari"] + $JumlahDataPerHal -1:$ArrayPaging["DataDari"]+count($HasilQueryDB)-1);
            $ArrayPaging["InfoPage"]=self::Curency($ArrayPaging["DataDari"])." - ".self::Curency($ArrayPaging["DataSampai"])." from ".self::Curency($ArrayPaging["Total"]);
        }

        $Hasil["IsError"]=false;
        $Hasil["Data"]=$HasilQueryDB;
        $Hasil["Paging"]=$ArrayPaging;
        $Hasil["Output"]="Get data success";

        return $Hasil;
    }

    /**
     * @param $Params
     * @return mixed
     */
    private function Login($Params){
        $Hasil["Paging"]="";
        $NamaTabel=$Params["Target"];
        $xParamsData=json_decode($Params["ParamsData"],true);

        // Validasi Email
        $Email=$xParamsData["Email"];
        if(empty($Email)){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]="Email harus diisi";
            return $Hasil;
        }

        // Validasi Password
        $Password=$xParamsData["Password"];
        if(empty($Password)){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]="Password harus diisi";
            return $Hasil;
        }

        // Select ke DB dengan Email
        $query = $this->db->get_where('sys_users', array('email' => $Email), 1);
        $xData=$query->result_array();

        // Check Sukses Akses Db
        if(!$query){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$this->db->error();
            return $Hasil;
        }

        // Check Jumlah Data dari DB
        if($query->num_rows() < 1){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]="Email '".$Email."' is not registered";
            return $Hasil;
        }

        // Set Password
        $PasswordDB=$xData[0]["password"];
        $Pwd = base64_encode(hash("sha256", $Password));

        // Check Password
        if($PasswordDB != $Pwd){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]="Your password is not valid";
            return $Hasil;
        }

        // Check Status
        $Status=$xData[0]["status"];
        if($Status==0){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]="Your user is not active";
            return $Hasil;
        }

        // Sukses Login
        $Hasil["IsError"]=false;
        $Hasil["ErrMessage"]="Login success";
        $Hasil["Data"]=$xData;
        return $Hasil;


    }

    /**
     * @param $Params
     * @return mixed
     */
    private function CallProsedure($Params){
        $NamaProsedur=$Params["ParamsField"];
        $IsGetResult=($Params["GetLastId"]==1?true:false);

        $SqlProcedure=($IsGetResult?"SELECT":"CALL");

        $xParameter=json_decode($Params["ParamsData"],true);

        $data = $this->db->query($SqlProcedure." ". $NamaProsedur."(?" . str_repeat(",?", count($xParameter)-1) . ")".($IsGetResult?" as result":""),$xParameter);


        // Check Sukses Akses Db
        if(!$data){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$this->db->error();
            return $Hasil;
        }

        if(!$IsGetResult){
            $Hasil["Output"]=$this->db->affected_rows()."  row(s) affected";
        }else{
            $result = $data->result_array();
            $Hasil["Output"]=$result[0]["result"];
        }
        $Hasil["IsError"]=false;
        return $Hasil;

    }


    /**
     * Fungsi Format Angka ke Ribuan 10000 => 10.000
     * @param int $integer
     * @return int|string
     */
    private function Curency($integer=0){
        if(!is_numeric($integer)) return 0;
        return  number_format($integer, 0, ",", ".");
    }

}