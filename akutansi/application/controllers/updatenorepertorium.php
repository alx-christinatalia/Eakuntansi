<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class updatenorepertorium extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	    //helpers

	   $this->load->library('export2pdf');
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
			$this->load->view('administrator/updatenorepertorium/index');
		}	
		
		
	}

	public function update($_id)
	{

		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$this->api->setParam(array("Target" => "tb_order", "Activity" => "update", "ParamsData" => json_encode($value), "ParamsFilter" => "_id = '".$_id."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");

		//echo "<pre>";
		//print_r($data);
		//echo "</pre>";
		echo json_encode($data);	
	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);
		

		$filter = "";
		if(!empty($this->param["kywd"])) {
			$flt = $this->param["kywd"];
			$filter .= "(_id LIKE '%{$flt}%' or nama_klien LIKE '%{$flt}%' or nama_layanan LIKE '%{$flt}%' or deskripsi LIKE '%{$flt}%' or no_repertorium LIKE '%{$flt}%')";
		}

		$flt = "is_closed = '". 1 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;

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
				foreach($output->Data as $result) { 
					$a = ($result->is_closed == "1" ? "Closed" : "Open");
					$return .= "<tr id='{$result->_id}'>";
						$return .= "<td>{$result->_id}</td>";
						$return .= "<td>{$result->nama_klien}</td>";
						$return .= "<td>{$result->nama_layanan}</td>";
						$return .= "<td>{$result->deskripsi}</td>";
						$return .= "<td>{$a}</td>";
						$return .= "<td><input class=\"form-control nomer \" id='".$result->_id."' type=\"text\" name=\"no_repertorium[]\" value=\"$result->no_repertorium\"></input></td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		return json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}
}
?>
