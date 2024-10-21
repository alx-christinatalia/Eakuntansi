<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class fidusia_perorangan extends CI_Controller {

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
        $sortpelanggan = "ID ASC";
        $sortpekerjaan = "nama ASC";
        $pelanggan = $this->DoList->m_sWhere_l_s("t_fidusia_penerima",$filter,"1000",$sortpelanggan);
        $progres = $this->DoList->m_sWhere_l_s("t_progres",$filter,"1000",$sortprogres);
        $pekerjaan = $this->DoList->m_sWhere_l_s("t_pekerjaan",$filter,"1000",$sortpekerjaan);
        $this->load->view("order/berkasorder/fidusia_perorangan",array("MASTER_ID_ORDER" => $_id,
                                                                       "akta_order" => $pelanggan , "akta_progres" => $progres , "pf" => $pekerjaan)); 
    }

    public function simpanakta(){
            $value = $this->input->post("param");
            $_id = $this->input->post("id");

            $value["tgl_masuk"] = date("Y-m-d H:i:s", strtotime($value["tgl_masuk"]));
            $value["janji_tgl_pk"] = date("Y-m-d H:i:s", strtotime($value["janji_tgl_pk"]));
            $value["janji_tgl_surat_kuasa"] = date("Y-m-d H:i:s", strtotime($value["janji_tgl_surat_kuasa"]));
            $value["tgl"] = date("Y-m-d H:i:s", strtotime($value["tgl"]));
            $value["ahu_tgl_pendaftaran"] = date("Y-m-d H:i:s", strtotime($value["ahu_tgl_pendaftaran"]));
            $value["ahu_tgl_sertifikat"] = date("Y-m-d H:i:s", strtotime($value["ahu_tgl_sertifikat"]));
            $value["tgl_selesai"] = date("Y-m-d H:i:s", strtotime($value["tgl_selesai"]));

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
            echo json_encode($result);
    }

    public function simpanpemberi(){
            $value = $this->input->post("param");
            $_id = $this->input->post("id");

            $value["pemberi_tgl_lahir"] = date("Y-m-d H:i:s", strtotime($value["pemberi_tgl_lahir"]));

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
            echo json_encode($result);
    }

    public function carinamaprov(){
        $id = $this->input->post("id");
        $nama = $this->sWhere('t_propinsi','kode',$id)->Data[0]->nama;
        echo json_encode($nama);
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
        
        $arr = array_merge($arr, array("Limit" => 10000));

        
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

    public function sWhere($tb,$field,$_id)
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = '".$_id."' " ));
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
}
?>