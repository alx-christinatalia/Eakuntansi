<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class postingjurnal extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
        //helpers
       $this->load->helper('url');
       $this->load->model('api');
       $this->load->library('session');
            $this->publicmodel->checkPermission();
            $this->publicmodel->accessPermission("8");
    }

    public function index()
    {
        if($this->input->is_ajax_request() and $this->input->post("action") and $this->input->post("param")) {
            if(method_exists($this, $this->input->post("action"))) {
                $req = $this->input->post("action");
                $this->param = $this->input->post("param");
                print_r($this->$req());
            } else {
                print_r("Function not exist");
            }
        } else {
            $this->load->view('keuangan/postingjurnal/index');   
        }
        
        
    }



    // Pemalas
        public function combo_box_w($tb,$field,$id,$outval,$outht)
        {
            $a = $this->sWhere2($tb,$field,$id);
            $return = "";
            foreach ($a->Data as $data) {
                $return .= "<option value='".$data->$outval."'>".$data->$outval." - ".$data->$outht."</output>";
            }

            return $return;
        }

        public function m_insert_o($tbl,$data)
        {
            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tbl, "Activity" => "insert", "ParamsData" => json_encode($data)));
            $data = $this->api->execute(true);   
            return $data;
        }
        public function combo_box($tb,$outval,$outht)
        
        {
            $a = $this->getData($tb);
            $return = "";
            foreach ($a->Data as $data) {
                $return .= "<option value='".$data->$outval."'>".$data->$outval." - ".$data->$outht."</output>";
            }

            return $return;
        }

        public function getData($tb)
        {
            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tb , "Activity" => "get" , "Limit" => "200" , "ParamsSort" => "kode asc"));
            $data = $this->api->execute(true);
            return $data;        
        }

        public function selectWhere($tb,$_id)
        {

            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "_id = ".$_id." " ));
            $data = $this->api->execute("array");
            return $data;
        }

        public function sWhere2($tb,$field,$_id)
        {

            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = '".$_id."' " ));
            $data = $this->api->execute(true);
            return $data;
        }

        public function sWhere3($tb,$field,$_id,$sort)
        {

            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = '".$_id."' " 
            , "ParamsSort" => $sort ));
            $data = $this->api->execute(true);
            return $data;
        }



        public function updateO($tb,$field,$id,$data)
        {

            $this->api->setAction("Execute");
            $this->api->setParam(array( "Target"        => $tb , 
                                        "Activity"      => "update",
                                        "ParamsFilter"  => "".$field." = '".$id."'", 
                                        "ParamsData"    => json_encode($data)));
            $data = $this->api->execute(true);
            return $data;
        }
    // end pemalas
    //simpan
        public function posting()
        {
            $nomor = $this->input->post("data");
            $data = array('ispost' => "1");
            foreach ($nomor as $key => $value) {
                            $output = $this->updateO('fintransaksi','nomor', $value['nomor'] , $data);
                            $filter = "nomor = '".$nomor."' ";
                            $myData = $this->DoList->m_sWhere('fintransaksi',$filter);
                            $totalAkun = "";
                            $m_data = "";
                            $out1="";
                            foreach ($myData->Data as $resp) {
                                $anggaran = $this->DoList->anggaran($resp);
                                $a = $this->namaAkun($resp->akun);

                                $filter = "periode = '".$resp->periode."' AND akun = '".$resp->akun."'";
                                //Table akunanggaran
                                    $cekAkun = $this->DoList->m_sWhere("akunanggaran",$filter)->Data[0];
                                    if($cekAkun->_id == "")
                                    {       
                                        $m_data = array("periode"  => $resp->periode,
                                                        "kategori" => $resp->akun_k,
                                                        "akun"     => $resp->akun,
                                                        "nama"     => $a,
                                                        "debit"    => $resp->debit,
                                                        "kredit"   => $resp->kredit,
                                                        "total"    => intval($resp->debit)-intval($resp->kredit));


                                        $totalAkun = $this->DoList->m_insert('akunanggaran',$m_data);
                                    }else{

                                        $m_data = array("debit"    => intval($cekAkun->debit)+intval($resp->debit),
                                                        "kredit"   => intval($cekAkun->kredit)+intval($resp->kredit),
                                                        "total"    => (intval($cekAkun->debit)+intval($resp->debit))-(intval($cekAkun->kredit)+intval($resp->kredit)));

                                        $totalAkun = $this->DoList->m_update("akunanggaran",$filter,$m_data);
                                    }
                                //Table Hutang Piutang
                                    $utpi = $resp->akun_k; //kategori 
                                    if($utpi == "21" || $utpi == "13" || $utpi == "22"  ){
                                        $out1= $this->hutangpiutang($resp);
                                    }
                            }
                $log = $this->DoList->user_log("fintransaksi","Posting Jurnal",$value['nomor'],"Nomor Transaksi ".$value['nomor']);
            }
            

            echo json_encode($out1);

        }

        public function hutangpiutang($resp){
            $filter = "p ='".$resp->periode."' AND k = '".$resp->akun."' AND ko = '".$resp->kontak."' AND isk='".$resp->isklien."' ";
            $myData = $this->DoList->m_sWhere('finhutangpiutang',$filter)->Data[0];
            $return = "";
            if($myData->_id == ""){
                $jns = str_split($resp->akun_k, 1); //jesni
                $utangData = array("p" => $resp->periode,
                                   "t" => date("Y", strtotime($resp->tgl)),
                                   "b" => date("m", strtotime($resp->tgl)),
                                   "j" => $jns[0],
                                   "kt" => $resp->akun_k,
                                   "k"  => $resp->akun,
                                   "ko" => $resp->kontak,
                                   "isk" => $resp->isklien,
                                   "tb" => $resp->debit,
                                   "byr" => $resp->kredit,
                                   "s" => intval($resp->debit)-intval($resp->kredit));

                $return = $this->DoList->m_insert('finhutangpiutang',$utangData);
            }else{
                $c_tb = intval($myData->tb)+intval($resp->debit);
                $c_byr = intval($myData->byr)+intval($resp->kredit);
                $total = intval($c_tb)- intval($c_byr);
                $utangData = array("tb" => $c_tb,
                                   "byr" => $c_byr,
                                   "s" => $total);

                $return = $this->DoList->m_update("finhutangpiutang",$filter,$utangData);
            }      
            return $return;
        }

        public function namaAkun($akun)
        {
            $filter = "kode = '".$akun."'";
            $data = $this->DoList->m_sWhere('finakun',$filter)->Data[0]->nama;
            return $data;
        }

    //emd

    //table
        protected function show_table(){
            
            $arr = array("Target"   => "fintransaksi", 
                       "Activity"   => "get", 
                       "Page"       => $this->param["page"]);
            

            $filter = "";
            if(!empty($this->param["kywd"])) {
                $flt =  $this->param["kywd"];
                $filter .= "(nama LIKE '%{$flt}%')";
            }
            $filter .= (empty($filter)) ? "urutan = '0'" : "and urutan = '0'";
            $filter .= (empty($filter)) ? "ispost = '0'" : "and ispost = '0'";

            if(!empty($this->param["filter"]["nomor"])) {
                $flt = "nomor = '". $this->param["filter"]["nomor"] ."'";
                $filter .= (empty($filter)) ? $flt : " and ". $flt;
            }

             if(!empty($this->param["filter"]["ispost"])) {
                $flt = "ispost = '". $this->param["filter"]["ispost"] ."'";
                $filter .= (empty($filter)) ? $flt : " and ". $flt;
            }

            if(!empty($this->param["filter"]["tgl"])) {
                $explode= explode(" - ",$this->param["filter"]["tgl"]);
                $date1 = date("Y-m-d", strtotime($explode[0]));
                $date2 = date("Y-m-d", strtotime($explode[1]));
                $flt = "tgl BETWEEN '". $date1 ."' and '". $date2 ."'";
                $filter .= (empty($filter)) ? $flt : " and ". $flt;
            }


            $arr["ParamsFilter"] = $filter;
            

            if(!empty($this->param["filter"]["sort"])) {
                $sort = $this->param["filter"]["sort"];
                $arr["ParamsSort"] = $sort;
            }

            if(!empty($this->param["limit"])) {
                $limit = $this->param["limit"];
                $arr = array_merge($arr, array("Limit" => $limit));
            }
            
            $this->api->setAction("Execute");
            $this->api->setParam($arr); 
                                   
            $output = $this->api->execute(true);

            $return = "";
            if((!empty($output)) && $output->Data[0] != "") {
                if($output->IsError == false) {
                    $n = 1;
                    foreach($output->Data as $result) { 
                                                //awal
                            $jenisDatas = $result->jenis;
                            $jenis = "";
                            if($jenisDatas == "KM")
                            {
                                $jenis = "kasmasuk";
                            }else if ($jenisDatas == "KK")
                            {
                                $jenis = "kaskeluar";
                            }else if ($jenisDatas == "JU")
                            {
                                $jenis = "jurnalumum";
                            }else if ($jenisDatas == "JA")
                            {
                                $jenis = "jurnalpenyesuaian";
                            }else if ($jenisDatas == "SA")
                            {
                                $jenis = "saldoawal";
                            }else
                            {
                                $jenis = "hell";
                            }
                        //
                        $a = "";
                        $uang = "";
                        $m_jenis = $result->jenis;

                        $uang = $this->hitungUang($result->nomor);
                        

                        $return .= "<tr id='{$result->_id}' onclick='showJurnal(this);' style='cursor:pointer' data-jurnal='{$result->nomor}' data-id='{$result->_id}' >";
                            $return .= '<td style="text-align:center">
                                            <div class="md-checkbox ">
                                                <input type="checkbox" onclick="postingLogic(this)" id="'.$result->nomor.'" class="md-check check-all">
                                                <label for="'.$result->nomor.'">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> </label>
                                            </div>
                                        </td>';
                            $return .= "<td>{$result->nomor}</td>";
                            $return .= "<td>".date("d-M-Y", strtotime($result->tgl))."</td>";
                            $return .= "<td>{$result->nama}</td>";
                            $return .= "<td>{$result->uraian}</td>";
                            $return .= "<td class='changemoney' style='text-align:right' >{$uang}</td>";
                        $return .= "</tr>";
                    }
                } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
            } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";

            return json_encode(["paging" => $output->Paging, "list_result" => $return]);
        }

        public function jurnalData($kode)
        {

            $data = $this->sWhere2('fintransaksi','nomor',$kode);

            $return = "";
            foreach ($data->Data as $result) {
                $akunNama = $this->detail_d($result->akun);
                $return .= "<tr>";
                    $return .= "<td>";
                        $return .= $result->akun.' - '.$akunNama ; //Perbarui ini remember this   - 
                    $return .= "</td>";
                    $return .= "<td class='changemoney1' style='text-align:right' >";
                        $return .= $result->debit;
                    $return .= "</td>";
                    $return .= "<td class='changemoney1' style='text-align:right'>";
                        $return .= $result->kredit;
                    $return .= "</td>";
                $return .= "</tr>";
            }
            echo json_encode($return);
        }
        public function detail_d($kode)
        {
            $data = $this->sWhere2('finakun','kode',$kode);
            $data = $data->Data[0]->nama;
            return $data;
        }

        public function hitungUang($nomor)
        {
            $a = $this->sWhere2('fintransaksi','nomor',$nomor);
            $output = 0;
            foreach ($a->Data as $result) {
                $output += $result->debit;
            }
            return $output;
        }
    //end


}

?>
