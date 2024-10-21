<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_log extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
        //helpers
       $this->load->helper('url');
       $this->load->model('api');
       $this->load->library('session');
            $this->publicmodel->checkPermission();
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
            
            $this->load->view('administrator/userlog/index');   
        }        
    }

////////// AJAX ////////////////
    protected function show_table(){

        $arr = array("Target"   => "notarislog", 
                   "Activity"   => "get", 
                   "Page"       => $this->param["page"]);
        

        $filter = "";
        if(!empty($this->param["kywd"])) {
            $flt =  $this->param["kywd"];
            $filter .= "(jenis LIKE '%{$flt}%' or ket LIKE '%{$flt}%' or id_user LIKE '%{$flt}%')";
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
        if(!empty($output)) {
            if($output->IsError == false) {
                $n = 1;
                foreach($output->Data as $result) { 
                    //Hitung
                    //
                    $return .= "<tr id='{$result->_id}'>";
                        $return .= "<td>".date("d M Y", strtotime($result->tgl))."</td>";
                        $return .= "<td>{$result->id_user}</td>";
                        $return .= "<td>{$result->jenis}</td>";
                        $return .= "<td>{$result->ket}</td>";
                    $return .= "</tr>";
                }
            } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
        } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
        
        return json_encode(["paging" => $output->Paging, "list_result" => $return]);
    }


}

?>
