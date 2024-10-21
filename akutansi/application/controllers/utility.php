<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class utility extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
        //helpers
       $this->load->helper('url');
       $this->load->model('api');
       $this->load->library('session');
            $this->publicmodel->checkPermission();
            $this->publicmodel->accessPermission("11");
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
            $this->api->setAction("Execute");
             $this->api->setParam(array("Target" => "notarisnomor", "Activity" => "get", "Limit" => "33"));
             $data['nomor'] = $this->api->execute("object");
            $this->load->view('administrator/utility/index',$data);   
        }
        
        
    }


    //Update
        public function closeOrder($id)
        {
            $close = date("Y-m-d");
            $data = array('is_closed'  => "1",
                          'tgl_closed' => $close );
            $output = $this->update('tb_order','_id',$id,$data);

            $filter = "_id = '".$id."'";
            $getOrder = explode("-",$this->DoList->m_sWhere('tb_order',$filter)->Data[0]->tgl_order);

            $filter = "t = '".$getOrder[0]."' AND b='".$getOrder[1]."' ";
            $getStat  = $this->DoList->m_sWhere('statorder',$filter)->Data[0];
            $o = "o".$getOrder[2];
            $c = "c".date("d");
            $m_data = array("jml_open" => intval($getStat->jml_open)-1,
                            "jml_closed" => ($getStat->jml_closed == null ? 1 : intval($getStat->jml_closed)+1),
                            $o          => intval($getStat->$o)-1,
                            $c          => intval($getStat->$c)+1 );

            $updateData = $this->DoList->m_update('statorder',$filter,$m_data);

            echo json_encode($updateData);
        }


        public function update($tbl,$field,$id,$data)
        {

            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tbl, "Activity" => "update", "ParamsData" => json_encode($data),"ParamsFilter" => "".$field." = ".$id));
            $output = $this->api->execute(true);
            return $output;
        }
    //End

    //Get Data
    public function getData($id)
    {
        $output = $this->sWhere('tb_order','_id',$id);

        echo json_encode($output);
    }

    public function tagihan($id)
    {
        $output = $this->sWhere('orderbilling','id_order',$id);
        $debit = 0;
        $kredit = 0;
        $cek= 0;
        foreach ($output->Data as $result) {
            ($result->dk == "D" ? $debit += $result->jml : $kredit += $result->jml);
            $cek++;
        }
        $return = $kredit-$debit;

        echo json_encode($return);
    }

    public function sWhere($tb,$field,$_id)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = '".$_id."' " ));
        $data = $this->api->execute(true);
        return $data;
    }
    //

    public function setnomor($nomor)
    {
        $value = $this->input->post("param");
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => "notarisnomor", "Activity" => "update", "ParamsData" => json_encode($value),"ParamsFilter" => "repertorium = '".$nomor."' " , "GetLastId" => "1"));
        $data = $this->api->execute("object");
        echo json_encode($data);

    }

    public function hitungulang(){
        $bln = $this->input->post('bln');
        $thn = $this->input->post('thn');
    }

}

?>
