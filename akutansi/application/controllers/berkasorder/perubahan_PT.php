<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class perubahan_PT extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
            //helpers
           $this->load->helper('url');
           $this->load->model('api');
           $this->load->library('session');
           $this->load->helper('file');
            $this->publicmodel->checkPermission();
    }

    public function index($_id)
    {
        $this->load->view("order/berkasorder/perubahan_pt",array("MASTER_ID_ORDER" => $_id)); 
    }

    public function simpantp(){
        $fid =  $this->input->post('id');
        $finput = $this->input->post('param');
        $filter = "_id = '".$fid."'";

        $config['upload_path'] = './upload/Order/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|zip';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);

        if(!$this->upload->do_upload('image_file'))
        {   
            if($fid == ""){
                $output = $this->m_insert_o('orderbhpihak',$finput);  
                echo json_encode($output);   
            }else{
                $output = $this->DoList->m_update("orderbhpihak",$filter,$finput);
                echo json_encode($output);   
            }          
        }else
        {
            $data = $this->upload->data();

            $a = array('Fsize' => $data['file_size'], 'nama' => $data['orig_name'], 'nama_acak' => $data['file_name'], 'kondisi' => 'sukses');
            $finput['file'] = $data['file_name'];

            if ($fid == ""){
                $output = $this->m_insert_o('orderbhpihak',$finput);
            }else{
                $output = $this->DoList->m_update("orderbhpihak",$filter,$finput);
            }
            echo json_encode($output);
        } 
    }

    public function getperubahan(){
        $du[] = "";
        $bu[] = "";
        $buo[] = "";
        $pu[] = "";
        $puo[] = "";
        $id = $this->input->post('id');
        $idpeb = $this->input->post('idpeb');
        $filter = "_id = '".$idpeb."'";

        //convert layanan dan nama layanan orderbhumum
        $du = $this->sWhere('orderbhumum','id_order',$id)->Data[0];
        $du->layanan_nama = 'Perubahan PT';
        $du->layanan = '12';
        $du->id_order = $idpeb;
        $du->_id = '';
        $duo = $this->m_insert_o('orderbhumum',$du);

        //convert _id dan id_order orderbhnama
        $bu = $this->sWhere('orderbhnama','id_order',$id);
        $jmlbu = 0;
        foreach ($bu->Data as $bud){
            $bud->_id = "";
            $bud->id_order = $idpeb;
            $jmlbu++;
        }
        for($i=0;$i<=$jmlbu-1;$i++){
            $buo = $this->m_insert_o('orderbhnama',$bu->Data[$i]);
        }

        //convert _id dan id_order orderbhnama
        $pu = $this->sWhere('orderbhpihak','id_order',$id);
        $jmlpu = 0;
        foreach ($pu->Data as $bud){
            $bud->_id = "";
            $bud->id_order = $idpeb;
            $bud->layanan = '12';
            $bud->layanan_nama = 'Perubahan PT';
            $jmlpu++;
        }
        for($i=0;$i<=$jmlpu-1;$i++){
            $puo = $this->m_insert_o('orderbhpihak',$pu->Data[$i]);
        }

        echo json_encode("sukses");
    }

    public function pilihNBU($tbl,$data,$sort,$limit,$filter,$id,$where)
    {
            $log = $this->UpdateData($tbl,
                                array("dipilih" => "0") ,
                                "",
                                "",
                                "id_order = '".$where['id_order']."'",
                                "",
                                "");
            $log = $this->updateData($tbl,
                                    array("dipilih" => "1") ,
                                    "",
                                    "",
                                    "_id = '".$where['dipilih']."'",
                                    "",
                                    "");
            return json_encode($log);
    }

    public function getKota($tbl,$data,$sort,$limit,$filter,$id,$where)
    {
        $kywd   = $this->getData('tb_order',
                                "",
                                "",
                                "200",
                                "_id = '".$where['id_order']."'",
                                "",
                                "");
        $kywd   = $kywd->Data[0]->id_klien;

        $klien  = $this->getData('notarisklien',
                                "",
                                "",
                                "200",
                                "_id = '".$kywd."'",
                                "",
                                "");
        $klien = $klien->Data[0]->id_prov;

        $prov   = $this->getData('inf_kota',
                                "",
                                "lokasi_nama asc",
                                "200",
                                "lokasi_propinsi = '".$klien."' and lokasi_kecamatan= '00' and lokasi_kelurahan='0000'",
                                "",
                                "");
        foreach ($prov->Data as $resp) {
            $return .= "<option value='".$resp->lokasi_ID."'>".$resp->lokasi_nama."</option>";
        }
        return $return;
    }

    public function DUinsup($tbl,$data,$sort,$limit,$filter,$id,$where,$jenis)
    {
        $check = $this->getData($tbl,
                            "",
                            "",
                            "",
                            "id_order = '".$where['id_order']."' ",
                            "",
                            "");
        if($check->Data[0]->id_order == "")
        {
            $output = $this->insertData($tbl,
                                        $data,
                                        "",
                                        "",
                                        "",
                                        "",
                                        "");
            $a=   $this->DoList->user_log($tbl,"Tambah ".$jenis." Data Umum",$where['id_order'],"Data Umum ".$where['id_order']);
        }else
        {
            
            $output = $this->updateData($tbl,
                                        $data,
                                        "",
                                        "",
                                        "id_order = '".$where['id_order']."'",
                                        "",
                                        "");

            $a=   $this->DoList->user_log($tbl,"Update ".$jenis." Data Umum",$where['id_order'],"Data Umum ".$where['id_order']);
        }


        return $output;
    }

    public function TPinsup($tbl,$data,$sort,$limit,$filter,$id,$where,$jenis)
    {
        if($where['_id'] != "")
        {
            $output = $this->updateData($tbl,
                                        $data,
                                        "",
                                        "",
                                        "_id = '".$where['_id']."'",
                                        "",
                                        "");

            $a=   $this->DoList->user_log($tbl,"Update ".$jenis." Para Pihak ",$where['id_order'],"Para Pihak ".$where['_id']);
        }
        else{

            $output = $this->insertData($tbl,
                                        $data,
                                        "",
                                        "",
                                        "",
                                        "",
                                        "");
            $a=   $this->DoList->user_log($tbl,"Tambah ".$jenis." Para Pihak",$where['id_order'],"Order ".$where['id_order']);

        }

        return $output;
    }


//Table 
    public function NBUtable ()
    {
        $_filter = $this->input->post('filter');
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => "orderbhnama" , "Activity" => "get" ,"ParamsFilter" => $_filter ));
        $data = $this->api->execute(true);

        foreach($data->Data as $result)
        {
            $pilih = $result->dipilih;
            $hide = ($pilih == "1" ? "hide" : "");
            $centang = ($pilih == "1" ? "" : "hide");
                $return .= "<tr>";
                        $return .= '<td style = "text-align: center; ">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a role="button" data-id="'.$result->_id.'" data-nama="'.$result->nama.'" onclick="NBUedit(this);"><i class="fa fa-download"></i> Edit </a></li>
                                                <li><a role="button" data-id="'.$result->_id.'" data-nama="'.$result->nama.'" onclick="NBUdel(this);"><i class="fa fa-trash"></i> Hapus</a></li>
                                                <li class="'.$hide.'"><a role="button" onclick="pilih(this);" data-id="'.$result->_id.'"><i class="fa fa-check"></i> Pilih</a></li>
                                            </ul>
                                        </div>
                                    </td>';
                        $return .= "<td>{$result->nama}</td>";
                        $return .= "<td style='text-align:center'><span><i  class='fa fa-check ".$centang."' ></i></span></td>";
                    $return .= "</tr>";
        }

        echo json_encode($return);
    }

    public function TPtable ($tbl,$data,$sort,$limit,$filter,$id,$where)
    {
        $data = $this->getData($tbl,
                                "",
                                "",
                                "",
                                $filter,
                                "",
                                "");
        $return = "";

        foreach($data->Data as $result)
        {
            $pilih = $result->dipilih;
            $hide = ($pilih == "1" ? "hide" : "");
            $centang = ($pilih == "1" ? "" : "hide");
            $file = ($result->file == "" ? " - " : $result->file);
                $return .= "<tr>";
                        $return .= '<td style = "text-align: center; ">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a role="button" data-id="'.$result->_id.'"  onclick="TPedit(this);"><i class="fa fa-download"></i> Edit </a></li>
                                                <li><a role="button" data-id="'.$result->_id.'" data-nama="'.$result->nama.'" onclick="TPdel(this);"><i class="fa fa-trash"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>';
                        $return .= "<td>{$result->nama}</td>";
                        $return .= "<td>{$result->ket}</td>";
                        $return .= "<td>{$result->komposisi}</td>";
                        $return .= "<td>{$result->nominal}</td>";
                        $return .= "<td>{$result->posisi}</td>";
                        $return .= "<td>{$file}</td>";
                    $return .= "</tr>";
        }

        return $return;
    }

//mySyntak1
    public function doSome($id = "")
    {
        $log = $this->DoList;
        $data   = $this->input->post("param");
        $tbl    = $this->input->post("tbl");
        $method = $this->input->post("method");
        $sort   = $this->input->post("sort");
        $limit  = $this->input->post("limit");
        $filter = $this->input->post("filter");
        $where  = ($this->input->post("where") == "" ? "" : $this->input->post("where"));
        $jenis = $this->input->post("jenis");
        
        $output = $this->$method($tbl,$data,$sort,$limit,$filter,$id,$where,$jenis);

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
    public function deleteData($tbl,$data,$sort,$limit,$filter,$id,$where = "",$jenis)
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, 
                                    "Activity" => "delete", 
                                    "ParamsFilter" => $filter));
        $data = $this->api->execute(true);

        $a= $this->DoList->user_log($tbl,"Delete ".$jenis." Para Pihak ",$where['id_order'], "Para Pihak ".$where['_id']);
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

    public function m_insert_o($tbl,$data)
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "insert", "ParamsData" => json_encode($data), "GetLastId" => "1"));
        $data = $this->api->execute(true);   
        return $data;
    }

    public function sWhere($tb,$field,$_id)
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = '".$_id."' " ));
        $data = $this->api->execute(true);
        return $data;
    }
}
?>