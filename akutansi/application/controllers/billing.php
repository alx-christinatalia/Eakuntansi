<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class billing extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
        //helpers
       $this->load->helper('url');
       $this->load->model('api');
       $this->load->library('session');
            $this->publicmodel->checkPermission();
            $this->publicmodel->accessPermission("6");
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
            
            $this->load->view('billing/index');   
        }        
    }

    //cetak
        public function form_laporan()
        {
            $this->load->view('billing/form_laporan');
        }

        public function cetak_detail_billing()
        {
            $getData = $this->input->post();
            $id_order = $getData["id_order"];
            $filter = "id_order = '".$id_order."'";
            $data = $this->DoList->m_sWhere_l_s("orderbilling",$filter,"100","tgl asc");
            $filter = "_id = '".$id_order."'";
            $order = $this->DoList->m_sWhere('tb_order',$filter);
            $this->load->view('billing/cetak/detail',array("data" =>$data , 'order' => $order));
        }

        public function cetak_daftar_billing()
        {
            //Filter Data
                $arr = array("Target"   => "tb_order", 
                           "Activity"   => "get", 
                           "Page"       => $this->param["page"]);
                

                $filter = "";
                $param = $this->input->post();
                $param["id_klien"] = ($param["nama_klien"] == "" ? "" : $param["id_klien"]);
                $param["id_layanan"] = ($param["nama_layanan"] == "" ? "" : $param["id_layanan"]);
                if(!empty($param["tgl_order"])) {
                    $explode= explode(" - ",$param["tgl_order"]);
                    $date1 = date("Y-m-d", strtotime($explode[0]));
                    $date2 = date("Y-m-d", strtotime($explode[1]));
                    $flt = "tgl_order BETWEEN '". $date1 ."' and '". $date2 ."'";
                    $filter .= (empty($filter)) ? $flt : " and ". $flt;
                }

                if(!empty($param["id_klien"])) {
                    $flt = "id_klien = '". $param["id_klien"] ."'";
                    $filter .= (empty($filter)) ? $flt : " and ". $flt;
                }
                if(!empty($param["id_layanan"])) {
                    $flt = "layanan = '". $param["id_layanan"] ."'";
                    $filter .= (empty($filter)) ? $flt : " and ". $flt;
                }

                $arr["ParamsFilter"] = $filter;
                
                $limit = "1000";
                $arr = array_merge($arr, array("Limit" => $limit));
                
                $this->api->setAction("Execute");
                $this->api->setParam($arr); 
                $output = $this->api->execute(true);
            //Hitung Total
                $result = "";
                $i = 1;
                foreach($output->Data as $resp)
                {
                    $resp->tgl_order = date("d-m-Y", strtotime($resp->tgl_order));
                    $filter = "id_order = '".$resp->_id."'";
                    $data = $this->DoList->m_sWhere_l_s('orderbilling',$filter,"100","_id desc");
                    $result[$resp->_id]=0;
                    foreach($data->Data as $resp1)
                    {
                        $result[$resp->_id] += ($resp1->dk == "K" ? intval(-$resp1->jml) : intval(+$resp1->jml));   
                    }
                    $result[$resp->_id] *= -1;
                }
            echo "<pre>";
            print_r($output);
            echo "</pre>";
            //$this->load->view('billing/cetak/daftar',array("tagihan" =>$result , 'order' => $output));   
        }

        public function Cetak_Pembayaran($id)
        {
            $filter = "_id = '".$id."'";
            $data = $this->DoList->m_sWhere('orderbilling',$filter);
            $filter = "_id = '".$data->Data[0]->id_order."'";
            $namaKlien = $this->DoList->m_sWhere('tb_order',$filter)->Data[0]->nama_klien;
            $terbilang = intval($data->Data[0]->jml);
            $terbilang = $this->publicmodel->terbilang($terbilang);
            $terbilang = $terbilang." Rupiah";
            $this->load->view('billing/cetak/bayar',['data'=>$data, 'namaKlien'=>$namaKlien, 'terbilang' => $terbilang]);
        }

        public function Cetak_Tagihan($id)
        {
            $filter = "_id = '".$id."'";
            $data = $this->DoList->m_sWhere('orderbilling',$filter);
            $filter = "_id = '".$data->Data[0]->id_order."'";
            $namaKlien = $this->DoList->m_sWhere('tb_order',$filter)->Data[0]->nama_klien;
            $this->load->view('billing/cetak/tagihan',['data'=>$data, 'namaKlien'=>$namaKlien]);
        }

    public function detail($id)
    {

        $dataOrder = $this->selectWhere("tb_order",$id);
        $this->load->view('billing/detail', ['dataOrder' => $dataOrder]);
    }

    public function deleteBilling($id)
    {
        $id_order = $this->input->post("id_order");
        $a = $this->m_delete_o("orderbilling",$id);
        $log = $this->DoList->user_log("notarisklien","Tambah Klien",$id_order,"Hapus Billing ID ".$id);
        echo json_encode($a);
    }

    public function tambahBilling()
    {
        $cek = "";
        $param = $this->input->post('param');
        $param['tgl'] = date("Y-m-d", strtotime($param['tgl']));

        $idbil = $this->input->post('id');

        $data = $this->input->post('data'); 
        $bil = $this->selectWhere('tb_order',$param['id_order'])->Data[0]->sdh_billing;
        $sal = $this->selectWhere('tb_order',$param['id_order'])->Data[0]->saldo;

        if ($param['dk'] == "D"){
            switch ($bil) {
                 case '0': 
                    $data['sdh_billing'] = 2;
                    break;

                 case '1': 
                    $data['sdh_billing'] = 2;
                    break;

                 case '2':
                    $cek = $sal - $data['saldo'];
                        if($cek <= 0){
                            $data['sdh_billing'] = 3;
                        }else{
                            $data['sdh_billing'] = 2;
                        }
                    break;
                 
                 case '3':
                    break;

                 default:
                    $data['sdh_billing'] = 0;
                    $data['saldo'] = 0;
                    break;
             } 

            $data['saldo'] = $sal - $data['saldo'];
        }else{
            switch ($bil) {
                 case '0': 
                    $data['sdh_billing'] = 1;
                    break;

                 case '1': 
                    $data['sdh_billing'] = 1;
                    break;

                 case '2':
                    $data['sdh_billing'] = 2;
                    break;

                 case '3':
                    $data['sdh_billing'] = 2;
                    break;

                 default:
                    $data['sdh_billing'] = 0;
                    $data['saldo'] = 0;
                    break;
             } 
             
            $data['saldo'] = $sal + $data['saldo'];
        }

        if ($idbil == "" && $idbil == null){

            $b = $this->updateO('tb_order','_id',$param['id_order'],$data);
            $a = $this->m_insert_o("orderbilling",$param);
                if($param['dk'] == "D" ){
                    $log = $this->DoList->user_log("orderbilling","Bayar Billing",$param['id_order'],"Bayar Billing  ".$param['uraian']." Sebesar Rp. ".$this->publicmodel->rupiah($param['jml']));        
                }else{
                    $log = $this->DoList->user_log("orderbilling","Tagihan Billing",$param['id_order'],"Tagihan Billing  ".$param['uraian']." Sebesar Rp. ".$this->publicmodel->rupiah($param['jml']));        
                }
            echo json_encode($b);
        }else{
            $a = $this->updateO('orderbilling','_id',$idbil,$param);
            $b = $this->updateO('tb_order','_id',$param['id_order'],$data);

            echo json_encode($a) ;
        }
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
                                                <li><a role="button" data-id="'.$result->_id.'" onclick="fedit(this);"><i class="fa fa-pencil"></i> Edit </a></li>
                                                <li><a role="button" target="_BLANK" href="'.base_url("billing/".($result->dk == "K" ? "Cetak-Tagihan" : "Cetak-Pembayaran" )."/".$result->_id).'"><i class="fa fa-print"></i> Cetak </a></li>
                                                <li><a role="button" data-id="'.$result->_id.'" data-nama="'.$result->_id.'" onclick="fdelete(this)" data-id="'.$result->_id.'"><i class="fa fa-trash"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>';
                        $return .= '<td>
                                        <a data-id="'.$result->_id.'" onclick="fedit(this);">
                                            '.date("d M Y", strtotime($result->tgl)).'
                                        </a>
                                    </td>';
                        $return .= "<td>{$result->uraian}</td>";
                        $return .= "<td>".($result->dk == 'K' ? 'Tagihan' : 'Bayar')."</td>";
                        $return .= "<td data-jenis='".$result->dk."' class='jumlah'>{$result->jml}</td>";
                    $return .= "</tr>";
                }
            } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
        } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
        
        echo json_encode(["list_result" => $return]);
    }

    public function loadbillingdo($_id)
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
                                        <a data-id="'.$result->_id.'" onclick="fedit(this);">
                                            '.date("d M Y", strtotime($result->tgl)).'
                                        </a>
                                    </td>';
                        $return .= "<td>{$result->uraian}</td>";
                        $return .= "<td>".($result->dk == 'K' ? 'Tagihan' : 'Bayar')."</td>";
                        $return .= "<td data-jenis='".$result->dk."' class='jumlah'>{$result->jml}</td>";
                    $return .= "</tr>";
                }
            } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
        } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
        
        echo json_encode(["list_result" => $return]);
    }

    public function loaddatabilling(){
        $input = $this->input->post('param');
        $data = $this->selectWhere('orderbilling',$input);
        echo json_encode($data);
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


////////// AJAX ////////////////
    protected function show_table(){

        $arr = array("Target"   => "tb_order", 
                   "Activity"   => "get", 
                   "Page"       => $this->param["page"]);
        

        $filter = "";
        if(!empty($this->param["kywd"])) {
            $flt =  $this->param["kywd"];
            $filter .= "(nama_klien LIKE '%{$flt}%' or nama_layanan LIKE '%{$flt}%' or nama_officer LIKE '%{$flt}%')";
        }

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
                                                <li><a role="button" href="'.base_url("billing/detail/".$result->_id).'"><i class="fa fa-tasks"></i> Detail </a></li>
                                                <li><a role="button" href="'.base_url("billing/Form-Laporan/").'"><i class="fa fa-print"></i> Print</a></li>
                                            </ul>
                                        </div>
                                    </td>';
                        $return .= "<td>{$result->_id}</td>";
                        $return .= "<td>".date("d M Y", strtotime($result->tgl_order))."</td>";
                        $return .= "<td>{$result->nama_klien}</td>";
                        $return .= "<td>{$result->sifat_akta}</td>";

                        switch ($result->sdh_billing) {
                            case '0':
                                $statusBilling = "Belum Invoice";
                                break;

                            case '1':
                                $statusBilling = "Belum Bayar";
                                break;

                            case '2':
                                $statusBilling = "Belum Lunas";
                                break;
                            
                            case '3':
                                $statusBilling = "Lunas";
                                break;

                            default:
                            break;
                        }
                        $return .= "<td>{$statusBilling}</td>";
                        $return .= "<td onshow='toM2' >Rp".($this->publicmodel->rupiah($tagihan*-1))."</td>";
                    $return .= "</tr>";
                }
            } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
        } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
        
        return json_encode(["paging" => $output->Paging, "list_result" => $return]);
    }


}

?>
