<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class covernote extends CI_Controller {


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
        $filter = "_id = '".$_id."' ";
        $data = $this->DoList->m_sWhere('tb_order',$filter)->Data[0]->no_akta;
        $this->load->view("order/berkasorder/covernote",array("MASTER_ID_ORDER" => $_id, 'no_akta' => $data)); 
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

    public function DUinsup($tbl,$data,$sort,$limit,$filter,$id,$where)
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
        }else
        {
            
            $output = $this->updateData($tbl,
                                        $data,
                                        "",
                                        "",
                                        "id_order = '".$where['id_order']."'",
                                        "",
                                        "");
        }


        return $output;
    }

    public function TPinsup($tbl,$data,$sort,$limit,$filter,$id,$where)
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
        }
        else{

            $output = $this->insertData($tbl,
                                        $data,
                                        "",
                                        "",
                                        "",
                                        "",
                                        "");
        }

        return $output;
    }


//Table 


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
                        $return .= "<td>{$result->identitas}</td>";
                        $return .= "<td>{$result->catatan}</td>";
                    $return .= "</tr>";
        }

        return $return;
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

//mySyntak3 v1.0.0



}
?>