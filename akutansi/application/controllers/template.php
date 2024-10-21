<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class template extends CI_Controller {

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
            
            $this->load->view('');   
        }
        
        
    }
    //view

    //

    //simpan
        public function insert($tbl,$data)
        {
            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tbl, "Activity" => "insert", "ParamsData" => json_encode($data)));
            $data = $this->api->execute(true);   
            return $data;
        }
    //

    //Update
        public function update($tbl,$field,$id,$data)
        {

            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tbl, "Activity" => "update", "ParamsData" => json_encode($data),"ParamsFilter" => "".$field." = ".$id));
            $output = $this->api->execute(true);
            return $output;
        }
    //End

    //Get Data
        public function sWhere($tb,$field,$_id)
        {

            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = '".$_id."' " ));
            $data = $this->api->execute(true);
            return $data;
        }

        public function sWhereLimit($tb,$field,$_id,$limit)
        {

            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = '".$_id."' ", "Limit" => $limit ));
            $data = $this->api->execute(true);
            return $data;
        }
    //

    //Delete Data
        public function delete($tbl,$colom,$id)
        {

            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tbl, "Activity" => "delete", "ParamsFilter" => "".$colom." = '".$id."' "));
            $data = $this->api->execute(true);
            return $data;
        
        }
    //

    //Index
            protected function show_table(){
                $arr = array("Target"   => "notarisdokumen", 
                           "Activity"   => "get", 
                           "Page"       => $this->param["page"]);   

                $filter = "";
                
                if(!empty($this->param["kywd"])) {
                    $flt = $this->param["kywd"];
                    $filter .= "( dokumen LIKE '%{$flt}%')";
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
                            $layanan = $this->getNamaLayanan($result->layanan);
                            $dokumen = str_replace(" ~ ",", ", $result->dokumen);

                                $return .= "<tr id='{$result->_id}'>";
                                    $return .= '<td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-bars"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a role="button" href="'.base_url("masternotarisdokumen/edit/".$result->_id).'"><i class="fa fa-pencil-square-o"></i> Edit </a></li>
                                                            <li><a role="button" onclick="deleteData(this);" data-id="'.$result->_id.'" data-layanan="'.$layanan.'"><i class="fa fa-trash" ></i> Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>';
                                    $return .= "<td>{$result->nama}</td>";
                                    $return .= "<td>{$layanan}</td>";
                                    $return .= "<td>{$dokumen}</td>";
                                $return .= "</tr>";

                        }
                    } else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
                } else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
                
                return json_encode(["paging" => $output->Paging, "list_result" => $return]);
            }      
    //

    


}

?>
