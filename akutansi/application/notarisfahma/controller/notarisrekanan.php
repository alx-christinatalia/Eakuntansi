<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notarisrekanan extends CI_Controller {

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

			$this->api->setAction("Execute");
		    $this->api->setParam(array("Target" => "provinces", "Activity" => "get", "Limit" => "33" , "ParamsSort" => "name asc"));
		    $data['prov'] = $this->api->execute("object");

			$this->api->setAction("Execute");
		    $this->api->setParam(array("Target" => "regencies", "Activity" => "get", "Limit" => "33" , "ParamsSort" => "name asc"));
		    $data['kota'] = $this->api->execute("object");

			$this->load->view('administrator/notarisrekanan/index',$data);

		}	
		
		
	}

	public function kota()
	{
					$this->param = $this->input->post("provinsi");
					$return = "";
					$this->api->setAction("Execute");
					$this->api->setParam(array("Target" 	=> "regencies", 
									   "Activity"		=> "get", 
									   "Limit"  		=> 	"600",
										"ParamsFilter"	=> "province_id = '". $this->param["provinsi"]."'",
										"ParamsSort" => "name asc"  ));	
										   
					$output = $this->api->execute(true);
					foreach ($output->Data as $out) {
						$return .= "<option value='{$out->id}' data-kota='{$out->name}'> {$out->name} </option>";
					}
					echo json_encode(["list_result" => $return]);
	}

	public function prov()
	{
		if($this->input->post("provinsi"))
		{		
					$this->param = $this->input->post("prov");
					$return = "";
					$this->api->setAction("Execute");
					$this->api->setParam(array("Target" 	=> "provinces", 
									   "Activity"		=> "get", 
									   "Limit"  		=> 	"600",
										"ParamsFilter"	=> "name = '". $this->param["prov"]."'",
										"ParamsSort" => "name asc"  ));	
										   
					$output = $this->api->execute(true);
					foreach ($output->Data as $out) {
						$return .= "<option value='{$out->id}' data-provinsi='{$out->name}'> {$out->name} </option>";
					}
					echo json_encode(["list_result" => $return]);
		}
	}

	public function datakota()
	{
		if($this->input->post("kota"))
		{		
					$this->param = $this->input->post("kota");
					$return = "";
					$this->api->setAction("Execute");
					$this->api->setParam(array("Target" 	=> "regencies", 
									   "Activity"		=> "get", 
									   "Limit"  		=> 	"600",
										"ParamsFilter"	=> "name = '". $this->param["kota"]."'",
										"ParamsSort" => "name asc"  ));	
										   
					$output = $this->api->execute(true);
					foreach ($output->Data as $out) {
						$return .= "<option value='{$out->id}' data-kota='{$out->name}'> {$out->name} </option>";
					}
					echo json_encode(["list_result" => $return]);
		}
	}

	public function tambah()
	{
			$this->api->setAction("Execute");
		    $this->api->setParam(array("Target" => "provinces", "Activity" => "get", "Limit" => "33" , "ParamsSort" => "name asc"));
		    $data['prov'] = $this->api->execute("object");

			$this->api->setAction("Execute");
		    $this->api->setParam(array("Target" => "regencies", "Activity" => "get", "Limit" => "33" , "ParamsSort" => "name asc"));
		    $data['kota'] = $this->api->execute("object");
			
			$this->load->view('administrator/notarisrekanan/tambah',$data);
	}

	public function edit($id)
	{
		if(!empty($this->input->post("param")))
		{
			$value = $this->input->post("param");
			$_id = $this->input->post("id");

			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "notarisrekanan", "Activity" => "update", "ParamsData" => json_encode($value), "ParamsFilter" => "_id = '".$_id."' ", "GetLastId" => "1"));
			$data = $this->api->execute("array");

			echo json_encode($data);

		}else
		{
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "notarisrekanan", "Activity" => "get","ParamsFilter"	=> "_id = '". $id."'" ));
			$data["nr"] = $this->api->execute("object");

			$this->api->setAction("Execute");
		    $this->api->setParam(array("Target" => "provinces", "Activity" => "get", "Limit" => "33" , "ParamsSort" => "name asc"));
		    $data['prov'] = $this->api->execute("object");

			$this->api->setAction("Execute");
		    $this->api->setParam(array("Target" => "regencies", "Activity" => "get", "Limit" => "80000" , "ParamsSort" => "name asc"));
		    $data['kota'] = $this->api->execute("object");
		    
			$this->load->view("administrator/notarisrekanan/edit",$data);	
		}
		
	}

	public function simpan()
	{

			$this->api->setAction("Execute");
			$value = $this->input->post("param");
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "notarisrekanan", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
			$data = $this->api->execute("array");
			echo json_encode($data);

	}

	public function update($_id)
	{

		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		
		$this->api->setParam(array("Target" => "notarisrekanan", "Activity" => "update", "ParamsData" => json_encode($value),"ParamsFilter" => "_id = '".$_id."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");

		echo "<pre>";
		print_r($data);
		echo "</pre>";	
	}

	public function delete($id){
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "notarisrekanan", "Activity" => "delete", "ParamsFilter" => "_id = '".$id."' ", "GetLastId" => "1"));
		$data = $this->api->execute("array");
		redirect("notarisrekanan");

	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "notarisrekanan", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);	

		$filter = "";
		
		if(!empty($this->param["kywd"])) {
			$flt = $this->param["kywd"];
			$filter .= "(nama LIKE '%{$flt}%' or nama_kabkota LIKE '%{$flt}%' or nama_prov LIKE '%{$flt}%' or alamat_kantor LIKE '%{$flt}%')";
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
										<div class="btn-group">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fa fa-bars"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a role="button" href="'.base_url("notarisrekanan/edit/".$result->_id).'">
													 Edit </a></li>
												<li><a role="button" onclick="hapusData(this);" data-id="'.$result->_id.'" data-nama="'.$result->nama.'">Hapus Data</a></li>
											</ul>
										</div>
										</td>';
							$return .= "<td>{$result->nama}</td>";
							$return .= "<td>{$result->nama_kabkota}</td>";
							$return .= "<td>{$result->alamat_kantor}</td>";
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
			$this->api->setParam(array("Target" 	  => "notarisrekanan", 
									   "Activity"	  => "get", 
									   "ParamsFilter" => "_id = ".$this->param["id"]));	
									   
			$data = $this->api->execute();	
			return $data;
		}
	}
}
?>
