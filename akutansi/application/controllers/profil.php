<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profil extends CI_Controller {

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
			$this->load->view('administrator/profilnotarisppat/edit');
		}	
		
		
	}

	public function edit($id)
	{
			$value = $this->input->post("param");
			$value["tgl_sk_notaris"] = date("Y-m-d", strtotime($value["tgl_sk_notaris"]));
			$value["tgl_sk_ppat"] = date("Y-m-d", strtotime($value["tgl_sk_ppat"]));
			$value["tgl_accounting"] = date("Y-m-d", strtotime($value["tgl_accounting"]));
			$_id = $this->input->post("id");

				$this->api->setAction("Execute");
				$this->api->setParam(array("Target" => "notaris", "Activity" => "update", "ParamsData" => json_encode($value), "ParamsFilter" => "_id = '".$_id."' ", "GetLastId" => "1"));
				$data = $this->api->execute("array");

				$log = $this->DoList->user_log("notaris","Update Notaris ",$value['nama'],"Email  ".$value['email']);

			echo json_encode($value);
	}

	public function datakota()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "regencies", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

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
					$return .= "<tr id='{$result->id}' onclick='set_kota(this);' style='cursor:pointer' data-kota='{$result->name}' data-provinsi='{$c}' id-kota='{$result->id}' id-prov='{$result->province_id}'>";
						$return .= "<td>{$result->name}</td>";
						$return .= "<td>{$c}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function test1($id)
	{
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" 	=> "provinces", 
								   "Activity"		=> "get", 
									"ParamsFilter"	=> "id = '". $id."'" 
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
