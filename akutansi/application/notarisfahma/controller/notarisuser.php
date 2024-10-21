<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notarisuser extends CI_Controller {

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

			$this->load->view('administrator/user/index');
		}	
		
		
	}

	public function tambah()
	{
		$this->load->view('administrator/user/tambah');
	}

	public function simpan()
	{
		$value = $this->input->post("param");
		$value["pwd"] = MD5($value["pwd"]);	
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "notarisuser", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
		$data = $this->api->execute("array");
		$log = $this->DoList->user_log("notarisuser","Tambah User ",$data->Output,"Nama User = ".$value['nama']);
		redirect("notarisuser");

	}

	public function edit($id)
	{
			$this->api->setAction("Execute");
		     $this->api->setParam(array("Target" => "notarisuser", "Activity" => "get", "ParamsFilter" => "_id = '".$id."' ", "Limit" => "33" ));
		     $data['user'] = $this->api->execute("object");
		     
			$this->load->view("administrator/user/edit",$data);
	}

	public function ganti($id)
	{
			$this->api->setAction("Execute");
		     $this->api->setParam(array("Target" => "notarisuser", "Activity" => "get", "ParamsFilter" => "_id = '".$id."' " , "Limit" => "33"));
		     $data['user'] = $this->api->execute("object");
		     
			$this->load->view("administrator/user/ganti",$data);
	}

	public function dataofficer()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "notarisofficer", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(nama LIKE '%{$flt}%')";
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
					$a = ($result->aktif == "1" ? "Aktif" : "Tidak Aktif");
					$return .= "<tr id='{$result->id}' onclick='set_officer(this);' style='cursor:pointer' data-nama='{$result->nama}' data-id='{$result->_id}'>";
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$a}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function datanpwp()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "taxnpwp", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(npwp LIKE '%{$flt}%' or nama LIKE '%{$flt}%' or kec LIKE '%{$flt}%' or kabkota LIKE '%{$flt}%')";
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
					$return .= "<tr id='{$result->id}' onclick='set_npwp(this);' style='cursor:pointer' data-npwp='{$result->npwp}' data-nama='{$result->nama}' data-alamat='{$result->alamat}' data-kota='{$result->kabkota}' data-kota='{$result->kabkota}' data-id='{$result->id}'>";
						$return .= "<td>{$result->npwp}</td>";
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$result->kec}</td>";
						$return .= "<td>{$result->kabkota}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function delete($id){

		$flt = "_id = '".$id."'";
		$lg = $this->DoList->log_data("notarisuser",$flt);
		$log = $this->DoList->user_log("notarisuser","Hapus User ",$id,"Nama User = ".$lg->nama);

		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "notarisuser", "Activity" => "delete", "ParamsFilter" => "_id = '".$id."' ", "GetLastId" => "1"));
		$data = $this->api->execute("array");
		redirect("notarisuser");

	}

	public function update($_id)
	{
		$value = $this->input->post("param");
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "notarisuser", "Activity" => "update", "ParamsData" => json_encode($value),"ParamsFilter" => "_id = '".$_id."' " , "GetLastId" => "1"));
		$data = $this->api->execute("object");


		$flt = "_id = '".$_id."'";
		$lg = $this->DoList->log_data("notarisuser",$flt);
		$log = $this->DoList->user_log("notarisuser","Edit User ",$_id,"Nama User = ".$lg->nama);

		echo json_encode($data);
	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "notarisuser", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);
		

		$filter = "";
		if(!empty($this->param["kywd"])) {
			$flt = $this->param["kywd"];
			$filter .= "(nama LIKE '%{$flt}%' or email LIKE '%{$flt}%' or nohp LIKE '%{$flt}%')";
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
					if(($result->is_admin) == 1){
						$aksi='
											<ul class="dropdown-menu">
												<li><a role="button" href="'.base_url("notarisuser/edit/".$result->_id).'">
													 Edit </a></li>
												<li><a role="button" href="'.base_url("notarisuser/ganti/".$result->_id).'">
													 Ganti Password </a></li>
											</ul>
								';
					}else{
						$aksi='
											<ul class="dropdown-menu">
												<li><a role="button" href="'.base_url("notarisuser/edit/".$result->_id).'">
													 Edit </a></li>
												<li><a role="button" href="'.base_url("notarisuser/ganti/".$result->_id).'">
													 Ganti Password </a></li>
												<li><a role="button" onclick="hapusData(this);" data-id="'.$result->_id.'" data-nama="'.$result->nama.'">Hapus Data</a></li>
											</ul>
								';
					}

					if (($result->aktif)==1){
						$status="Aktif";
					}else{
						$status="Tidak Aktif";
					}

					if (($result->is_admin)==1){
						$level="Administrator";
					}else{
						$level="User";
					}

					$return .= "<tr id='{$result->_id}'>";
						$return .= '<td>
										<div class="btn-group">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fa fa-bars"></i>
											</button>
											'.$aksi.'
										</div>
									</td>';
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$result->email}</td>";
						$return .= "<td>{$result->nohp}</td>";
						$return .= "<td>{$status}</td>";
						$return .= "<td>{$level}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		return json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}
	
	protected function get_databyid() {
		if(!empty($this->param)) {
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" 	  => "taxssp", 
									   "Activity"	  => "get", 
									   "ParamsFilter" => "_id = ".$this->param["id"]));	
									   
			$data = $this->api->execute();	
			return $data;
		}
	}
}
?>
