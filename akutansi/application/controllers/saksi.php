<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class saksi extends CI_Controller {

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

			$this->load->view('administrator/saksi/index');

		}	
		
		
	}

	public function edit($id)
	{
		if(!empty($this->input->post("param")))
		{
			$value = $this->input->post("param");
			$_id = $this->input->post("id");

			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "notarissaksi", "Activity" => "update", "ParamsData" => json_encode($value), "ParamsFilter" => "_id = '".$_id."' ", "GetLastId" => "1"));
			$data = $this->api->execute("array");

			echo json_encode($result);

		}
	}

	public function simpan()
	{
		$this->api->setAction("Execute");
		$value = $this->input->post("param");

		$this->api->setParam(array("Target" => "notarissaksi", "Activity" => "get", "ParamsFilter" => "nama = '".$value['nama']."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");
		$data = $data->Data[0];	

		if($data == null && $data == ""){
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "notarissaksi", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
			$data = $this->api->execute("array");

			$log = $this->DoList->user_log("notarissaksi","Tambah Notaris Saksi ",$data->Output,"Nama = ".$value['nama']);

			$return = "sukses";
		}else
		{
			$return = "gagal";
		}
		echo json_encode($return);

	}

	public function update($_id)
	{

		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		
		$this->api->setParam(array("Target" => "notarissaksi", "Activity" => "update", "ParamsData" => json_encode($value),"ParamsFilter" => "_id = '".$_id."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");

		$log = $this->DoList->user_log("notarissaksi","Edit Notaris Saksi ",$_id,"Nama = ".$value['nama']);
		echo json_encode($data);
	}

	public function delete($id){

		$flt = "_id = '".$id."'";
		$lg = $this->DoList->log_data("notarissaksi",$flt);
		$log = $this->DoList->user_log("notarissaksi","Hapus Notaris Saksi ",$id,"Nama = ".$lg->nama);

		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "notarissaksi", "Activity" => "delete", "ParamsFilter" => "_id = '".$id."' ", "GetLastId" => "1"));
		$data = $this->api->execute("array");
		redirect("saksi");

	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "notarissaksi", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);	

		$filter = "";
		
		if(!empty($this->param["kywd"])) {
			$flt = $this->param["kywd"];
			$filter .= "(nama LIKE '%{$flt}%' or ket LIKE '%{$flt}%')";
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
												<li><a onclick="editData(this);" data-id="'.$result->_id.'" role="button">Edit</a></li>
												<li><a role="button" onclick="hapusData(this);" data-id="'.$result->_id.'" data-nama="'.$result->nama.'">Hapus Data</a></li>
											</ul>
										</div>
										</td>';
							$return .= "<td>{$result->nama}</td>";
							$return .= "<td>{$result->ket}</td>";
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
			$this->api->setParam(array("Target" 	  => "notarissaksi", 
									   "Activity"	  => "get", 
									   "ParamsFilter" => "_id = ".$this->param["id"]));	
									   
			$data = $this->api->execute();	
			return $data;
		}
	}
}
?>
