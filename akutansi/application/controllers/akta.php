<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class akta extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
        //helpers
       $this->load->helper('url');
       $this->load->model('api');
       $this->load->library('session');
            $this->publicmodel->checkPermission();
            $this->publicmodel->accessPermission("3");
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
            
            $this->load->view('akta/index');   
        }
        
        
    }

    /*public function dataklien()
    {
        $data = $this->input->post("param");
        $arr = array("Target"   => "notarisklien", 
                   "Activity"   => "get", 
                   "Page"       => $data['page']);
        

        $filter = "";
        if(!empty($data['kywd'])) {
            $flt =  $data['kywd'];
            $filter .= "(nama LIKE '%{$flt}%')";
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
                    $return .= "<tr id='{$result->id}' onclick='set_klien(this);' style='cursor:pointer' data-klien='{$result->nama}' data-id='{$result->_id}'>";
                        $return .= "<td>{$result->nama}</td>";
                        $return .= "<td>{$result->notelp}</td>";
                        $return .= "<td>{$result->tgl_daftar}</td>";
                    $return .= "</tr>";
                }
            } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
        } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
        
        echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
    }

    public function datalayanan()
    {
        $data = $this->input->post("param");
        $arr = array("Target"   => "notarislayanan", 
                   "Activity"   => "get", 
                   "Page"       => $data['page']);
        

        $filter = "";
        if(!empty($data['kywd'])) {
            $flt =  $data['kywd'];
            $filter .= "(nama LIKE '%{$flt}%')";
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
                    $return .= "<tr id='{$result->id}' onclick='set_layanan(this);' style='cursor:pointer' data-layanan='{$result->nama}' data-id='{$result->_id}'>";
                        $return .= "<td>{$result->id_layanan}</td>";
                        $return .= "<td>{$result->nama}</td>";
                    $return .= "</tr>";
                }
            } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
        } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
        
        echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
    }*/

    public function detail($id)
    {
        $dataOrder = $this->selectWhere("tb_order",$id);
        $this->load->view('billing/detail', ['dataOrder' => $dataOrder]);
    }

    public function deleteBilling($id)
    {
        $a = $this->m_delete_o("orderbilling",$id);
        echo json_encode($a);
    }

    public function tambahBilling()
    {
        $param = $this->input->post('param');

        $param['tgl'] = date("Y-m-d", strtotime($param['tgl']));

        $a = $this->m_insert_o("orderbilling",$param);

        echo json_encode($a);
    }



    public function loadbilling($_id)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => "orderbilling" , "Activity" => "get" ,"ParamsFilter" => "id_order = ".$_id." " ));
        $output = $this->api->execute(true);
        
        $return = "";
        if(!empty($output)) {
            if($output->IsError == false) {
                $n = 1;
                foreach($output->Data as $result) { 
                    if($result->dk == "K")
                    {
                        $dk = '<li><a role="button" data-jml="'.$result->jml.'" data-uraian="'.$result->uraian.'" data-tgl="'.date("y-M-d", strtotime($result->tgl)).'" onclick="bayar(this)"><i class="fa fa-money"></i> Bayar Billing</a></li>';
                    }else
                    {
                        $dk = '';
                    }
                    $return .= "<tr>";
                        $return .= '<td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                '.$dk.'
                                                <li><a role="button" href="'.base_url("order/editdokumen/".$result->_id).'"><i class="fa fa-print"></i> Cetak </a></li>
                                                <li><a role="button" data-id="'.$result->_id.'" data-nama="'.$result->_id.'" onclick="fdelete(this)" data-id="'.$result->_id.'"><i class="fa fa-trash"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>';
                        $return .= "<td>".date("d M Y", strtotime($result->tgl))."</td>";
                        $return .= "<td>{$result->uraian}</td>";
                        $return .= "<td>".($result->dk == 'K' ? 'Tagihan' : 'Bayar')."</td>";
                        $return .= "<td data-jenis='".$result->dk."' class='jumlah'>{$result->jml}</td>";
                    $return .= "</tr>";
                }
            } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
        } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
        
        echo json_encode(["list_result" => $return]);
    }

    public function m_insert_o($tbl,$data)
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "insert", "ParamsData" => json_encode($data), "GetLastId" => "1"));
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
        $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = ".$_id." " ));
        $data = $this->api->execute(true);
        return $data;
    }

    public function updateO($tbl,$field,$id,$data)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "update", "ParamsData" => json_encode($data),"ParamsFilter" => "".$field." = ".$id));
        $output = $this->api->execute(true);
        return $output;
    }

    public function m_delete_o($tbl,$id)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "delete", "ParamsFilter" => "_id = '".$id."' "));
        $data = $this->api->execute(true);
        return $data;
    
    }
    //Index
        public function hitungtagian($id_order)
        {
            $tagihan = $this->sWhere2("orderbilling","id_order",$id_order);
            $total;
            foreach ($tagihan->Data as $data) {
                $jml = $data->jml;
                $total = ($data->dk == "K" ? $total-$jml : $total+$jml );
            }

            return $total;
        }
    //

    //detail
        public function orderStatus($id)
        {
            $data = array("sdh_billing" => "1");
            $a = $this->updateO('tb_order','_id',$id,$data);
            echo json_encode($a) ;
        }
    //

    public function update($_id)
    {

            $this->api->setAction("Execute");
            $data = $this->input->post("param");
            $data["tgl_menghadap"] = date("Y-m-d", strtotime($data["tgl_menghadap"]));
            $this->api->setParam(array("Target" => "tb_order", "Activity" => "update", "ParamsData" => json_encode($data), "ParamsFilter" => "_id = ".$_id." " ,"GetLastId" => "1"));
            $data = $this->api->execute("array");
            $log = $this->DoList->user_log("orderproses","Update Akta",$_id,"Update Akta ".$_id);
            echo json_encode($data) ;
    }


////////// AJAX ////////////////
    protected function show_table(){

        $arr = array("Target"   => "tb_order", 
                   "Activity"   => "get", 
                   "Page"       => $this->param["page"]);

        //if(!empty($this->param["kywd"])) {
            $flt =  $this->param["kywd"];
            $filter .= "((nama_klien LIKE '%{$flt}%' or nama_layanan LIKE '%{$flt}%' or nama_officer LIKE '%{$flt}%') and !(layanan LIKE '%74%' or layanan LIKE '%73%' or layanan LIKE '%71%' or layanan LIKE '%72%'))";
        //}

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
                    //Hitung
                        $tagihan= $this->hitungtagian($result->_id);
                    //
                    $return .= "<tr id='{$result->_id}'>";
                        $return .= '<td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a role="button" data-id='.$result->_id.' onclick="editData(this);"> Edit </a></li>
                                                <li><a role="button" href="'.base_url("order/orderdokumen/".$result->_id).'"><i class=""></i> Kelengkapan Dokumen</a></li>
                                                <li><a role="button" href="'.base_url("order/berkasorder/".$result->_id).'"><i class=""></i> Berkas Order</a></li>
                                                <li><a role="button" href="'.base_url("order/order-proses/".$result->_id).'"><i class=""></i> Monitoring Proses</a></li>
                                                <li><a role="button" href="'.base_url("billing/detail/".$result->_id).'"><i class=""></i> Billing</a></li>
                                                <li><a role="button" href="'.base_url("efiling/index/".$result->_id).'"><i class=""></i> e-Filing</a></li>
                                                <li><a role="button" href="'.base_url("datatransaksi/index/".$result->_id).'"><i class=""></i> Keuangan</a></li>
                                            </ul>
                                        </div>
                                    </td>';
                        $return .= "<td><a href='order/detail/".$result->_id."'>{$result->_id}</a></td>";
                        $return .= "<td>".date("d M Y", strtotime($result->tgl_order))."</td>";
                        $return .= "<td><a href='".base_url("klien/detail/".$result->id_klien)."'>{$result->nama_klien}</a></td>";
                        $return .= "<td>{$result->sifat_akta}</td>";
                        $return .= "<td>".($result->sdh_buatakta == '0' ? 'Belum' : 'Sudah')."</td>";
                        $return .= "<td>".($result->sdh_cetakakta == '0' ? 'Belum' : 'Sudah')."</td>";
                        $return .= "<td>".($result->sdh_realisasi == '0' ? 'Belum' : 'Sudah')."</td>";
                    $return .= "</tr>";
                }
            } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
        } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
        
        return json_encode(["paging" => $output->Paging, "list_result" => $return]);
    }

    protected function get_databyid() {
        if(!empty($this->param)) {
            $this->api->setAction("Execute");
            $this->api->setParam(array("Target"       => "tb_order", 
                                       "Activity"     => "get", 
                                       "ParamsFilter" => "_id = ".$this->param["id"])); 
                                       
            $data = $this->api->execute();  
            return $data;
        }
    }


}

?>
