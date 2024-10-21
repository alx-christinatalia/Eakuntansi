<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class fidusia_lembaga extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
            //helpers
           $this->load->helper('url');
           $this->load->model('api');
           $this->load->library('session');
            $this->publicmodel->checkPermission();
    }

    public function index($_id)
    {
        $filter = "";
        $flttojb = "is_berseri = 1";
        $sorttojb = "nama ASC";
        $flttojtb = "is_berseri = 0";
        $sorttojtb = "nama ASC";
        $sortpelanggan = "ID ASC";
        $sortpekerjaan = "nama ASC";
        $pelanggan = $this->DoList->m_sWhere_l_s("t_fidusia_penerima",$filter,"1000",$sortpelanggan);
        $progres = $this->DoList->m_sWhere_l_s("t_progres",$filter,"1000",$sortprogres);
        $pekerjaan = $this->DoList->m_sWhere_l_s("t_pekerjaan",$filter,"1000",$sortpekerjaan);

        $tobyekwarna = $this->DoList->m_getData_l("t_obyek_warna","1000");
        $tobyekmerk = $this->DoList->m_getData_l("t_obyek_merek","1000");
        $tobyekjenisb = $this->DoList->m_sWhere_l_s("t_obyek_jenis",$flttojb,"1000",$sorttojb);
        $tobyekjenistb = $this->DoList->m_sWhere_l_s("t_obyek_jenis",$flttojtb,"1000",$sorttojtb);
        $tobdikeluarkan = $this->DoList->m_getData_l("t_obyek_bukti_dikeluarkan","1000");
        $tobukti = $this->DoList->m_getData_l("t_obyek_bukti","1000");
        $tmatauang = $this->DoList->m_getData_l("t_mata_uang","1000");
        $kategori = $this->DoList->m_getData_l("t_fidusia_biaya","1000");

        /*$kotapemberi = $this->DoList->m_getData_l("regencies","1000");
        $prov[]="";
        foreach ($kotapemberi->Data as $resp) {
            $prov[$resp->province_id]=$this->test1($resp->province_id);
        }*/

        $this->load->view("order/berkasorder/fidusia_lembaga",array("MASTER_ID_ORDER" => $_id,
                                                                       "akta_order" => $pelanggan , "akta_progres" => $progres , "pf" => $pekerjaan ,"tow" => $tobyekwarna ,"tom" => $tobyekmerk ,"tojb" => $tobyekjenisb ,"tojtb" => $tobyekjenistb ,"tobd" => $tobdikeluarkan ,"tob" => $tobukti ,"tmu" => $tmatauang ,"kt" => $kategori , "kotapemberi" => $kotapemberi/* , "prov" => $prov*/)); 
    }

    public function simpan(){            
            $dpenerima = $this->input->post("datapenerima");
            $value = $this->input->post("param");
            $_id = $this->input->post("id");
            $idpel = $this->input->post("idpel");

            $value["obyek_bukti_tgl"] = date("Y-m-d", strtotime($value["obyek_bukti_tgl"]));
            $value["penerima_tgl_lahir"] = date("Y-m-d", strtotime($value["penerima_tgl_lahir"]));
            $value["setuju_tgl_lahir"] = date("Y-m-d", strtotime($value["setuju_tgl_lahir"]));
            $value["setuju_dudajanda_tgl"] = date("Y-m-d", strtotime($value["setuju_dudajanda_tgl"]));
            $value["pemberi_tgl_lahir"] = date("Y-m-d", strtotime($value["pemberi_tgl_lahir"]));
            $value["tgl_masuk"] = date("Y-m-d", strtotime($value["tgl_masuk"]));
            $value["janji_tgl_pk"] = date("Y-m-d", strtotime($value["janji_tgl_pk"]));
            $value["janji_tgl_surat_kuasa"] = date("Y-m-d", strtotime($value["janji_tgl_surat_kuasa"]));
            $value["tgl"] = date("Y-m-d", strtotime($value["tgl"]));
            $value["ahu_tgl_pendaftaran"] = date("Y-m-d", strtotime($value["ahu_tgl_pendaftaran"]));
            $value["ahu_tgl_sertifikat"] = date("Y-m-d", strtotime($value["ahu_tgl_sertifikat"]));
            $value["tgl_selesai"] = date("Y-m-d", strtotime($value["tgl_selesai"]));
            $value["janji_tgl_jangka_waktu"] = date("Y-m-d", strtotime($value["janji_tgl_jangka_waktu"]));
            $value["janji_tgl_jangka_waktu_akhir"] = date("Y-m-d", strtotime($value["janji_tgl_jangka_waktu_akhir"]));

            $spenerima = $this->sWhere('t_fidusia_penerima','ID',$idpel)->Data[0];
            if($spenerima == null && $spenerima == ""){
                $ins = $this->DoList->insertData('t_fidusia_penerima',$dpenerima);
            }else{
                $flt = "ID = ".$idpel;
                $ins = $this->DoList->m_update('t_fidusia_penerima',$flt,$dpenerima);
            }

            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => "t_akta", "Activity" => "get", "ParamsFilter" => "id_order = '".$_id."' " , "GetLastId" => "1"));
            $data = $this->api->execute("array");
            $data = $data->Data[0]; 

            if($data == null && $data == ""){
                $this->api->setAction("Execute");
                $this->api->setParam(array("Target" => "t_akta", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
                $data = $this->api->execute("array");

                $result = "insert";
            }else
            {
                $this->api->setAction("Execute");
                $this->api->setParam(array("Target" => "t_akta", "Activity" => "update", "ParamsData" => json_encode($value), "ParamsFilter" => "id_order = '".$_id."' ", "GetLastId" => "1"));
                $data = $this->api->execute("array");

                $result = "update";
            }
            echo json_encode($ins);
    }

    public function carinamaprov(){
        $id = $this->input->post("id");
        $nama = $this->sWhere('t_propinsi','kode',$id)->Data[0]->nama;
        echo json_encode($nama);
    }

    public function getPelanggan(){
        $pelanggan = $this->input->post("pelanggan");
        $data = $this->sWhere('t_fidusia_penerima','nama',$pelanggan);
        echo json_encode($data);
    }

    public function set()
    {
        $val = $this->input->post("param");
        $nilai = $this->sWhere('t_setting_app','kode',$val)->Data[0]->nilai;
        echo json_encode($nilai);
    }

    public function penerima()
    {
        $val = $this->input->post("param");
        $penerima = $this->sWhere('t_fidusia_penerima','nama',$val);
        echo json_encode($penerima);
    }

    public function datakota()
    {
        $data = $this->input->post("param");
        $arr = array("Target"   => "regencies", 
                   "Activity"   => "get", 
                   "Page"       => $data['page']);
        

        $filter = "";
        if(!empty($data['kywd'])) {
            $flt =  $data['kywd'];
            $filter .= "(name LIKE '%{$flt}%')";
        }

        $arr["ParamsFilter"] = $filter;
        
        if(!empty($this->param["filter"]["sort"])) {
            $sort = $this->param["filter"]["sort"];
            $arr["ParamsSort"] = $sort;
        }

        
        $this->api->setAction("Execute");
        $this->api->setParam($arr); 
                               
        $output = $this->api->execute(true);

        $return = "";
        if(!empty($output)) {
            if($output->IsError == false) {
                $n = 1;
                foreach($output->Data as $result) { 
                    $c=$this->test1($result->province_id);
                    $return .= "<tr id='{$result->id}' onclick='set_kota(this);' style='cursor:pointer' data-kota='{$result->name}'>";
                        $return .= "<td>{$result->name}</td>";
                        $return .= "<td>{$c}</td>";
                    $return .= "</tr>";
                }
            } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
        } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
        
        echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
    }

    public function tlpemberi(){
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => "regencies" , "Activity" => "get", "Limit" => "1000"));
        $data = $this->api->execute(true); 
        foreach ($data->Data as $result) {
            $c=$this->test1($result->province_id);
            $return .= "<option value='".$result->name."'>" .$result->name." | ". $c. "</option>";
        }  
        echo json_encode($return);
    }

    public function datadesa()
    {
        $data = $this->input->post("param");
        $arr = array("Target"   => "t_desa_kel", 
                   "Activity"   => "get", 
                   "Page"       => $data['page']);
        

        $filter = "";
        if(!empty($data['kywd'])) {
            $flt =  $data['kywd'];
            $filter .= "(desa_kel LIKE '%{$flt}%' or kecamatan LIKE '%{$flt}%')";
        }

        $arr["ParamsFilter"] = $filter;
        
        if(!empty($this->param["filter"]["sort"])) {
            $sort = $this->param["filter"]["sort"];
            $arr["ParamsSort"] = $sort;
        }

        
        $this->api->setAction("Execute");
        $this->api->setParam($arr); 
                               
        $output = $this->api->execute(true);

        $return = "";
        if(!empty($output)) {
            if($output->IsError == false) {
                $n = 1;
                foreach($output->Data as $result) { 
                    $kab = $this->sWhere('t_kab_kota','kode',$result->kab_kota)->Data[0]->nama;
                    $prov = $this->sWhere('t_propinsi','kode',$result->provinsi)->Data[0]->nama;
                    $return .= "<tr id='{$result->id}' onclick='set_desa(this);' style='cursor:pointer' data-desa='{$result->desa_kel}' data-kec='{$result->kecamatan}' data-kab='{$kab}' data-prov='{$prov}' data-kodepos='{$result->kodepos}' data-idkab='{$result->kab_kota}' data-idprov='{$result->provinsi}'>";
                        $return .= "<td>{$result->desa_kel}</td>";
                        $return .= "<td>{$result->kecamatan}</td>";
                        $return .= "<td>{$kab}</td>";
                    $return .= "</tr>";
                }
            } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
        } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
        
        echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
    }

    public function datakota1()
    {
        $data = $this->input->post("param");
        $arr = array("Target"   => "regencies", 
                   "Activity"   => "get", 
                   "Page"       => $data['page']);
        

        $filter = "";
        if(!empty($data['kywd'])) {
            $flt =  $data['kywd'];
            $filter .= "(name LIKE '%{$flt}%')";
        }

        $arr["ParamsFilter"] = $filter;
        
        if(!empty($this->param["filter"]["sort"])) {
            $sort = $this->param["filter"]["sort"];
            $arr["ParamsSort"] = $sort;
        }

        
        $this->api->setAction("Execute");
        $this->api->setParam($arr); 
                               
        $output = $this->api->execute(true);

        $return = "";
        if(!empty($output)) {
            if($output->IsError == false) {
                $n = 1;
                foreach($output->Data as $result) { 
                    $c=$this->test1($result->province_id);
                    $return .= "<tr id='{$result->id}' onclick='set_kota1(this);' style='cursor:pointer' data-kota='{$result->name}'>";
                        $return .= "<td>{$result->name}</td>";
                        $return .= "<td>{$c}</td>";
                    $return .= "</tr>";
                }
            } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
        } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
        
        echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
    }

    public function datadesa1()
    {
        $data = $this->input->post("param");
        $arr = array("Target"   => "t_desa_kel", 
                   "Activity"   => "get", 
                   "Page"       => $data['page']);
        

        $filter = "";
        if(!empty($data['kywd'])) {
            $flt =  $data['kywd'];
            $filter .= "(desa_kel LIKE '%{$flt}%' or kecamatan LIKE '%{$flt}%')";
        }

        $arr["ParamsFilter"] = $filter;
        
        if(!empty($this->param["filter"]["sort"])) {
            $sort = $this->param["filter"]["sort"];
            $arr["ParamsSort"] = $sort;
        }

        
        $this->api->setAction("Execute");
        $this->api->setParam($arr); 
                               
        $output = $this->api->execute(true);

        $return = "";
        if(!empty($output)) {
            if($output->IsError == false) {
                $n = 1;
                foreach($output->Data as $result) { 
                    $kab = $this->sWhere('t_kab_kota','kode',$result->kab_kota)->Data[0]->nama;
                    $prov = $this->sWhere('t_propinsi','kode',$result->provinsi)->Data[0]->nama;
                    $return .= "<tr id='{$result->id}' onclick='set_desa1(this);' style='cursor:pointer' data-desa='{$result->desa_kel}' data-kec='{$result->kecamatan}' data-kab='{$kab}' data-prov='{$prov}' data-kodepos='{$result->kodepos}' data-idkab='{$result->kab_kota}' data-idprov='{$result->provinsi}'>";
                        $return .= "<td>{$result->desa_kel}</td>";
                        $return .= "<td>{$result->kecamatan}</td>";
                        $return .= "<td>{$kab}</td>";
                    $return .= "</tr>";
                }
            } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
        } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
        
        echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
    }

    public function datakota2()
    {
        $data = $this->input->post("param");
        $arr = array("Target"   => "regencies", 
                   "Activity"   => "get", 
                   "Page"       => $data['page']);
        

        $filter = "";
        if(!empty($data['kywd'])) {
            $flt =  $data['kywd'];
            $filter .= "(name LIKE '%{$flt}%')";
        }

        $arr["ParamsFilter"] = $filter;
        
        if(!empty($this->param["filter"]["sort"])) {
            $sort = $this->param["filter"]["sort"];
            $arr["ParamsSort"] = $sort;
        }

        
        $this->api->setAction("Execute");
        $this->api->setParam($arr); 
                               
        $output = $this->api->execute(true);

        $return = "";
        if(!empty($output)) {
            if($output->IsError == false) {
                $n = 1;
                foreach($output->Data as $result) { 
                    $c=$this->test1($result->province_id);
                    $return .= "<tr id='{$result->id}' onclick='set_kota2(this);' style='cursor:pointer' data-kota='{$result->name}'>";
                        $return .= "<td>{$result->name}</td>";
                        $return .= "<td>{$c}</td>";
                    $return .= "</tr>";
                }
            } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
        } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
        
        echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
    }

    public function datadesa2()
    {
        $data = $this->input->post("param");
        $arr = array("Target"   => "t_desa_kel", 
                   "Activity"   => "get", 
                   "Page"       => $data['page']);
        

        $filter = "";
        if(!empty($data['kywd'])) {
            $flt =  $data['kywd'];
            $filter .= "(desa_kel LIKE '%{$flt}%' or kecamatan LIKE '%{$flt}%')";
        }

        $arr["ParamsFilter"] = $filter;
        
        if(!empty($this->param["filter"]["sort"])) {
            $sort = $this->param["filter"]["sort"];
            $arr["ParamsSort"] = $sort;
        }

        
        $this->api->setAction("Execute");
        $this->api->setParam($arr); 
                               
        $output = $this->api->execute(true);

        $return = "";
        if(!empty($output)) {
            if($output->IsError == false) {
                $n = 1;
                foreach($output->Data as $result) { 
                    $kab = $this->sWhere('t_kab_kota','kode',$result->kab_kota)->Data[0]->nama;
                    $prov = $this->sWhere('t_propinsi','kode',$result->provinsi)->Data[0]->nama;
                    $return .= "<tr id='{$result->id}' onclick='set_desa2(this);' style='cursor:pointer' data-desa='{$result->desa_kel}' data-kec='{$result->kecamatan}' data-kab='{$kab}' data-prov='{$prov}' data-kodepos='{$result->kodepos}' data-idkab='{$result->kab_kota}' data-idprov='{$result->provinsi}'>";
                        $return .= "<td>{$result->desa_kel}</td>";
                        $return .= "<td>{$result->kecamatan}</td>";
                        $return .= "<td>{$kab}</td>";
                    $return .= "</tr>";
                }
            } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
        } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
        
        echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
    }

    public function sWhere($tb,$field,$_id)
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = '".$_id."' " ));
        $data = $this->api->execute(true);
        return $data;
    }

    public function sWhere2($tb,$filter)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => $filter ));
        $data = $this->api->execute(true);
        return $data;
    }

    public function sWherejs()
    {
        $val = $this->input->post("param");
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $val['tabel'] , "Activity" => "get" ,"ParamsFilter" => "".$val['field']." = '".$val['id']."' " ));
        $data = $this->api->execute(true);
        return $data;
    }

    public function test1($id)
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target"     => "provinces", 
                                   "Activity"       => "get", 
                                    "ParamsFilter"  => "id = '". $id."'" 
                                    )); 
                               
        $output = $this->api->execute(true);
        $result ="";
        foreach ($output->Data as $data) {
            $result .= $data->name;
        }
        //$result = $output->Data[0]->name;

        return $result;


    }

    public function get($tb)
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tb , "Activity" => "get"));
        $data = $this->api->execute(true);
        return $data;
    }
}
?>