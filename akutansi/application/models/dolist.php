<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class DoList extends CI_Model {
        
        public function __construct() {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('api');
            $this->load->library('session');
        }
        

//mySyntak1
    public function doSome($id = "")
    {
        $data   = $this->input->post("param");
        $tbl    = $this->input->post("tbl");
        $method = $this->input->post("method");
        $sort   = $this->input->post("sort");
        $limit  = $this->input->post("limit");        
        $filter = $this->input->post("filter");
        $where  = ($this->input->post("where") == "" ? "" : $this->input->post("where"));

        $output = $this->$method($tbl,$data,$sort,$limit,$filter,$id,$where);
        echo json_encode($output);
    }

    public function doSomeArr($param, $id = "")
    {
        $data   = $param("param");
        $tbl    = $param("tbl");
        $method = $param("method");
        $sort   = $param("sort");
        $limit  = $param("limit");
        $filter = $param("filter");


        $output = $this->$method($tbl,$data,$sort,$limit,$filter,$id,$where);
        echo json_encode($output);
    }

//mySyntak2 v1.0.2


    public function insertData($tbl,$data,$sort,$limit,$filter,$id,$where = "")
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, 
                                    "Activity" => "insert", 
                                    "ParamsData" => json_encode($data)));
        $data = $this->api->execute(true);   
        return $data;
    }

    public function insup($tbl,$data,$sort,$limit,$filter,$id,$where = "")
    {
        if($id == "")
        {
            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tbl, "Activity" => "insert", "ParamsData" => json_encode($data)));
            $output = $this->api->execute(true);     
        }
        else
        {
            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tbl, 
                                        "Activity" => "update", 
                                        "ParamsData" => json_encode($data),
                                        "ParamsFilter" => $filter));
            $output = $this->api->execute(true);
        }
        return $output;
    }
    
    public function deleteData($tbl,$data,$sort,$limit,$filter,$id,$where = "")
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, 
                                    "Activity" => "delete", 
                                    "ParamsFilter" => $filter));
        $data = $this->api->execute(true);
        return $data;
    }

    public function UpdateData($tbl,$data,$sort,$limit,$filter,$id,$where = "")
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, 
                                    "Activity" => "update", 
                                    "ParamsData" => json_encode($data),
                                    "ParamsFilter" => $filter));
        $output = $this->api->execute(true);
        return $output;
    }
    public function getData($tbl,$data,$sort,$limit,$filter,$id,$where = "")
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target"         => $tbl, 
                                    "Activity"      => "get", 
                                    "ParamsFilter"  => $filter,
                                    "ParamSort"     => $sort,
                                    "Limit"         => $limit));
        $data = $this->api->execute(true);
        return $data;
    }

    public function m_insert($tbl,$data)
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "insert", "ParamsData" => json_encode($data), "GetLastId" => "1"));
        $m_data = $this->api->execute(true);   
        return $m_data;
    }
    public function m_update($tbl,$filter,$data){

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "update","ParamsFilter" => $filter , "ParamsData" => json_encode($data)));
        $data = $this->api->execute(true);   
        return $data;
    }
    public function m_update2($tbl,$filter,$data){

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "update","ParamsFilter" => json_encode($filter) , "ParamsData" => json_encode($data)));
        $data = $this->api->execute(true);   
        return $data;
    }

    public function m_getData($tbl)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "get"));
        $data = $this->api->execute(true);
        return $data;
    }

    public function m_getData_l($tbl,$limit) //Limit
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "get", "Limit" => $limit));
        $data = $this->api->execute(true);
        return $data;
    }

    public function m_sWhere($tbl,$filter)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "get" , "ParamsFilter" => $filter));
        $data = $this->api->execute(true);
        return $data;
    }
    public function m_delete($tbl,$filter)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "delete" , "ParamsFilter" => $filter));
        $data = $this->api->execute(true);
        return $data;
    }

    public function m_sWhere_l_s($tbl,$filter,$limit,$sort)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "get" , "ParamsFilter" => $filter, "Limit" => $limit , "ParamsSort" => $sort));
        $data = $this->api->execute(true);
        return $data;
    }

    public function m_getData_l_s($tbl,$limit,$sort) //Limit
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "get", "Limit" => $limit , "ParamsSort" => $sort));
        $data = $this->api->execute(true);
        return $data;
    }


    public function anggaran($data)
    {
        $a = $data;
        $filter = "p = '".$a->periode."'";
        $cekperiode = $this->m_sWhere("finanggaran",$filter);
        $tahun = date("Y", strtotime($a->tgl));
        $bulan = date("m", strtotime($a->tgl));
        $data = null;
        if($cekperiode->Data[0]->_id == ""){
            $data = $this->m_getData_l("finakun","1000");
                foreach ($data->Data as $key => $value) {
                        if($value->kategori < 20 && $value->kategori > 10)
                        {
                            $j = 1;
                        }

                        if($value->kategori < 30 && $value->kategori > 20)
                        {
                            $j = 2;
                        }

                        if($value->kategori < 40 && $value->kategori > 30)
                        {
                            $j = 3;
                        }

                        if($value->kategori < 50 && $value->kategori > 40)
                        {
                            $j = 4;
                        }

                        if($value->kategori < 60 && $value->kategori > 50)
                        {
                            $j = 5;
                        }

                    $kirim = array("p" => $a->periode,
                                   "t" => $tahun,
                                   "b" => $bulan,
                                   "j" => $j,
                                   "kt" => $value->kategori,
                                   "k" => $value->kode);
                    //nb= Masih belum tau apa itu anggaran
                    $me = $this->m_insert('finanggaran',$kirim);
                }  
        }

        
        //nb= Masih belum tau apa itu anggaran
        $filter = "p = '".$a->periode."' AND k = '".$a->akun."' ";

        $anggaran = $this->m_sWhere("finanggaran",$filter)->Data[0]; //Current Anggaran
        $flt =  "kategori = '".$a->akun_k."'";
        $dk = $this->m_sWhere("finakunkategori",$flt)->Data[0]->debitkredit; 

        $total = 0;
        if($dk == "D"){
            $total = $a->debit - $a->kredit;   
        }else{
            $total = $a->kredit - $a->debit ;   
        }

        $debit = $anggaran->db + $a->debit;
        $kredit = $anggaran->kr + $a->kredit;



        $kirim = array( "db" => $debit ,
                        "kr" => $kredit,
                        );
        if($a->jenis == "KM" || $a->jenis == "KK" || $a->jenis == "JU") {
            $saldoBerjalan = $anggaran->sb + $total;
            $saldo = $anggaran->s + $saldoBerjalan;
            $kirim['sb'] = $saldoBerjalan;
        }

        if($a->jenis == "SA"){
            $saldoAwal = $anggaran->sa + $total;
            $saldo = $anggaran->s + $saldoAwal;
            $kirim['sa'] = $saldoAwal;
        }

        if($a->jenis == "JP"){
            $saldoPenyesuaian = $anggaran->sp + $total;
            $saldo = $anggaran->s + $saldoPenyesuaian;
            $kirim['sp'] = $saldoPenyesuaian;
        }
        
        $kirim['s'] = $saldo;

        $me = $this->m_update("finanggaran",$filter,$kirim);

        return $kirim;
    }

    public function editKeuangan($a)
    {
        $explode= explode("-",$a["tgl"]);
        $a['periode'] = $explode[0].$explode[1];

        $c = str_split($a['akun'], 2);

        $a['akun_k'] = $c[0];
        return $a;
    }

    public function user_log($tabel,$jenis,$no_ref,$ket)
    {
        $myData = $this->session->userdata("user");
        $data['id_user'] = $myData->nama;
        date_default_timezone_set('Asia/Jakarta');
        $data['tgl'] = date("Y-m-d h:i:s");
        $data['tabel'] = $tabel;
        $data['jenis'] = $jenis;
        $data['no_ref'] = $no_ref;
        $data['ket']    = $ket;
        $a = $this->m_insert('notarislog',$data);
        return $a;
    }

    public function log_data($tbl,$filter){
        $data = $this->m_sWhere_l_s($tbl,$filter,$limit,$sort);
        return $data->Data[0];
    }

    public function tglView($data)
    {
        return date("d-M-Y", strtotime($data));
    }

    public function convert($data)
    {
        $data = str_replace("[","\${",$data);
        $resp = str_replace("]","}",$data);
        return $resp;
    }


}
