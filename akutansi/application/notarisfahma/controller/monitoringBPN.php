<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class monitoringBPN extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
        //helpers
       $this->load->helper('url');
       $this->load->model('api');
       $this->load->library('session');
            $this->publicmodel->checkPermission();
            $this->publicmodel->accessPermission("2");
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
            
            $this->load->view('monitoringBPN/index');   
        }
    }
    
    public function cetak()
    {
        $data = $this->DoList->m_getData_l_s('monitoringbpn','20','id_order asc');
        $klien = "";
        foreach ($data->Data as $resp) {
            $filter = "_id = '".$resp->id_order."'";
            $klien["$resp->id_order"] = $this->DoList->m_sWhere('tb_order',$filter)->Data[0];
        }
        $this->load->view('monitoringbpn/cetak',array('data' => $data, "klien" => $klien));
    }
    public function formMonitoring($id){
        $this->load->view('monitoringbpn/form_monitoring',array('MASTER_ID_ORDER' => $id));
    }

    public function insert($id){
        $this->load->view('monitoringbpn/insup',array('id_order' => $id ,'id' => null));
    }


    public function update($id_order,$id){
        $this->load->view('monitoringbpn/insup',array('id_order' => $id_order,'id' => $id));
    }

    public function dataEdit($id)
    {
        $filter = "_id = '".$id."'";
        $data = $this->DoList->m_sWhere('monitoringbpn',$filter);
        echo json_encode($data);
    }

    public function insup()
    {
        $id = $this->input->post('id');
        $data = $this->input->post('param');
        $filter = "_id = '".$id."'";
        $return = "";
        if($id == null)
        {
            $return = $this->DoList->m_insert('monitoringbpn',$data);
            $log = $this->DoList->user_log("monitoringbpn","Tambah Data BPN",$data['id_order'],"BPN Dokumen ".$data['item_dokumen']);
        }else
        {
            $return = $this->DoList->m_update('monitoringbpn',$filter,$data);
            $log = $this->DoList->user_log("monitoringbpn","Update Data BPN",$data['id_order'],"BPN Dokumen ".$data['item_dokumen']);
        }
        echo json_encode($return);
    }

    public function bpnTable($id)
    {
        $do = $this->DoList;
        $filter =  "id_order =  '".$id."'";
        $data = $this->DoList->m_sWhere_l_s('monitoringbpn',$filter,'1000','_id desc');
        $return = "";
        foreach ($data->Data as $result) {
            $return .= "<tr>";
             $return .= '<td style=" text-align:center; vertical-align:middle;">
                                        <div class="btn-group">
                                            <a href="'.base_url("monitoringBPN/update/".$result->id_order.'/'.$result->_id).'">
                                            <button type="button" class="btn btn-default " aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            </a>
                                        </div>
                                    </td>';
                $return .="<td class='_pengurusan'>{$result->item_pengurusan}</td>";
                $return .="<td >{$do->tglView($result->tgl_dokumen_masuk)}</td>";
                $return .="<td >{$do->tglView($result->tgl_target_selesai)}</td>";
                $return .="<td class='_status'>{$result->status}</td>";
                $return .="<td >{$do->tglView($result->tgl_real_selesai)}</td>";
            $return .= "</tr>";
        }
        echo json_encode($return);
    }


////////// AJAX ////////////////
   protected function show_table()
    {
        $arr = array("Target"   => "tb_order", 
                   "Activity"   => "get", 
                   "Page"       => $this->param["page"]);
        

        $filter = "";
        if(!empty($this->param["kywd"])) {
            $flt =  $this->param["kywd"];
            $filter .= "(nama_klien LIKE '%{$flt}%' or nama_layanan LIKE '%{$flt}%' or nama_officer LIKE '%{$flt}%')";
        }
        //Buat filter PPAT
        $flt = "kategori = 'ppat'";
        $filter .= (empty($filter)) ? $flt : " and ". $flt;

        if(!empty($this->param["filter"]["tgl_order"])) {
            $explode= explode(" - ",$this->param["filter"]["tgl_order"]);
            $date1 = date("Y-m-d", strtotime($explode[0]));
            $date2 = date("Y-m-d", strtotime($explode[1]));
            $flt = "tgl_order BETWEEN '". $date1 ."' and '". $date2 ."'";
            $filter .= (empty($filter)) ? $flt : " and ". $flt;
        }

        if(!empty($this->param["filter"]["nama_klien"])) {
            $flt = "nama_klien = '". $this->param["filter"]["nama_klien"] ."'";
            $filter .= (empty($filter)) ? $flt : " and ". $flt;
        }
        if(!empty($this->param["filter"]["nama_layanan"])) {
            $flt = "nama_layanan = '". $this->param["filter"]["nama_layanan"] ."'";
            $filter .= (empty($filter)) ? $flt : " and ". $flt;
        }
        if(!empty($this->param["filter"]["nama_officer"])) {
            $flt = "nama_officer = '". $this->param["filter"]["nama_officer"] ."'";
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
        if(!empty($output)) {
            if($output->IsError == false) {
                $n = 1;
                foreach($output->Data as $result) { 
                    $return .= "<tr data-toggle='collapse' class='tbl' style='cursor:pointer' data-target='.".$result->_id."'>";
                        $return .= '<td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a role="button" href="'.base_url("order/orderdokumen/".$result->_id).'"><i class=""></i> Kelengkapan Dokumen</a></li>
                                                <li><a role="button" href="'.base_url("order/berkasorder/".$result->_id).'"><i class=""></i> Berkas Order</a></li>
                                                <li><a role="button" href="'.base_url("order/berkassaksi/".$result->_id).'"><i class=""></i> Berkas Saksi</a></li>
                                                <li><a role="button" href="'.base_url("order/order-proses/".$result->_id).'"><i class=""></i> Monitoring Proses</a></li>
                                                <li><a role="button" href="'.base_url("billing/detail/".$result->_id).'"><i class=""></i> Billing</a></li>
                                                <li><a role="button" href="'.base_url("dokumen/detail/".$result->_id).'"><i class=""></i> e-Filing</a></li>
                                                <li><a role="button" href="'.base_url("dokumen/detail/".$result->_id).'"><i class=""></i> Keuangan</a></li>
                                            </ul> 
                                        </div>
                                        <div class="btn-group">
                                            <a role="button" href="'.base_url("monitoringBPN/insert/".$result->_id).'">
                                            <button type="button" class="btn btn-default " aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                            </a>
                                        </div>
                                    </td>';
                        $return .= "<td>{$result->_id}</td>";
                        $return .= "<td>".date("d M Y", strtotime($result->tgl_order))."</td>";
                        $return .= "<td>{$result->nama_klien}</td>";
                        $return .= "<td>{$result->nama_layanan}</td>";
                        $return .= "<td>{$result->deskripsi}</td>";
                    $return .= "</tr>";
                    $return .= "<tr class='collapse ".$result->_id." collapse'>";
                        $return .= "<td colspan='7'>";
                            $return .= $this->dataMonitoring($result->_id);
                        $return .= "</td>";
                    $return .= "</tr>";

                }
            } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
        } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
        
        return json_encode(["paging" => $output->Paging, "list_result" => $return]);
    }



    public function dataMonitoring($id)
    {
            $filter = "id_order = '".$id."'";
            $output = $this->DoList->m_sWhere('monitoringbpn',$filter);
            $do = $this->DoList;
            $return = "";
                    if(!empty($output->Data))
                    {

                    $return .= "<table class='table table-responsive' onclick='location.href= \"monitoringBPN/Form-Monitoring/".$id."\"' >";   
                }else{
                    $return .= "<table class='table table-responsive' >";
                }
                        $return .= '<thead>
                                        <tr>
                                            <th style="width: 30%;">Perihal</th>
                                            <th style="width: 20%;">Tgl Dokumen Masuk</th>
                                            <th style="width: 20%;">Tgl Target Selesai</th>
                                            <th style="width: 10%;">Status</th>
                                            <th style="width: 20%;">Tgl Dokumen Selesai</th>
                                        </tr>
                                    </thead>';
                        $return .= "<tbody>";

                    if(!empty($output->Data)) {
                        foreach ($output->Data as $result) {
                            $return .= "<tr>";
                                $return .="<td class='_pengurusan'>{$result->item_pengurusan}</td>";
                                $return .="<td >{$do->tglView($result->tgl_dokumen_masuk)}</td>";
                                $return .="<td >{$do->tglView($result->tgl_target_selesai)}</td>";
                                $return .="<td class='_status'>{$result->status}</td>";
                                $return .="<td >{$do->tglView($result->tgl_real_selesai)}</td>";
                            $return .= "</tr>";
                        }
                    }else{
                        $return .= "<tr>";
                                $return .= "<td colspan='5' style='background-color:#dbdbdb'>Data kosong. Silahkan cek ulang filter pencarian datanya</td>";
                        $return .= "</tr>";
                    }
                        $return .= "</tbody>";
                    $return .= "</table>";
            
            return $return;
    }
}

?>
