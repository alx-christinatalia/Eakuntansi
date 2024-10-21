<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class layanan extends CI_Controller {

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

			$this->load->view('administrator/layanan/index');

		}	
		
		
	}

	public function edit($id)
	{
		if(!empty($this->input->post("param")))
		{
			$value = $this->input->post("param");
			$_id = $this->input->post("id");

			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "notarislayanan", "Activity" => "update", "ParamsData" => json_encode($value), "ParamsFilter" => "_id = '".$_id."' ", "GetLastId" => "1"));
			$data = $this->api->execute("array");

			echo json_encode($result);

		}else
		{
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "notarislayanan", "Activity" => "get","ParamsFilter"	=> "_id = '". $id."'" ));
			$data["layanan"] = $this->api->execute("object");
			$this->load->view("administrator/layanan/edit",$data);	
		}
		
	}

	public function update($_id)
	{

		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		
		$this->api->setParam(array("Target" => "notarislayanan", "Activity" => "update", "ParamsData" => json_encode($value),"ParamsFilter" => "_id = '".$_id."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");

		$flt = "_id = '".$_id."'";
		$lg = $this->DoList->log_data("notarislayanan",$flt);
		$log = $this->DoList->user_log("notarislayanan","Update Layanan ",$_id,"Nama Layanan = ".$lg->nama);

		echo "<pre>";
		print_r($data);
		echo "</pre>";	
	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "notarislayanan", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);	

		$filter = "";
		
		if(!empty($this->param["kywd"])) {
			$flt = $this->param["kywd"];
			$filter .= "(id_layanan LIKE '%{$flt}%' or nama LIKE '%{$flt}%' or harga LIKE '%{$flt}%')";
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
					$a = ($result->aktif == "1" ? "Aktif" : "Tidak Aktif");
						$return .= "<tr id='{$result->_id}'>";
							$return .= '<td>
                                        <a onclick="editData(this);" data-id="'.$result->_id.'" role="button" class="btn btn-primary">
                                            <i class="fa fa-edit"></i>
                                        </a>
										</td>';
							$return .= "<td>{$result->id_layanan}</td>";
							$return .= "<td>{$result->nama}</td>";
							$return .= "<td>{$result->harga}</td>";
							$return .= "<td>{$a}</td>";
						$return .= "</tr>";

				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		return json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}
	
	protected function get_databyid() {
		if(!empty($this->param)) {
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" 	  => "notarislayanan", 
									   "Activity"	  => "get", 
									   "ParamsFilter" => "_id = ".$this->param["id"]));	
									   
			$data = $this->api->execute();	
			return $data;
		}
	}
}
?>
