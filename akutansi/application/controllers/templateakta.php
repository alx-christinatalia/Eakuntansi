<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class templateakta extends CI_Controller {

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
			$this->api->setParam(array("Target" => "masterlayanan", "Activity" => "get","Limit" => "200", "ParamsSort" => "id_layanan asc"));
			$data["kategori"] = $this->api->execute("object");
	
			$this->load->view('administrator/templateakta/index', $data);
			
		}	
	}

	public function simpan()
	{
		$value = $this->input->post("param");
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "notaristempakta", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
		$data = $this->api->execute("array");
		echo json_encode($data);

	}

	public function delete($id){
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "notaristempakta", "Activity" => "delete", "ParamsFilter" => "_id = '".$id."' ", "GetLastId" => "1"));
		$data = $this->api->execute("array");
		redirect("templateakta");

	}

	public function update($_id)
	{
		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$this->api->setParam(array("Target" => "notaristempakta", "Activity" => "update", "ParamsData" => json_encode($value),"ParamsFilter" => "_id = '".$_id."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");

		echo "<pre>";
		print_r($data);
		echo "</pre>";	
	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "notaristempakta", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);
		

		$filter = "";

		if(!empty($this->param["filter"]["kategori"])) {
			$flt = "layanan = '". $this->param["filter"]["kategori"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

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
				$n = 1;
				foreach($output->Data as $result) { 
					if(($result->id_notaris) == "enotarisdotcom"){
						$aksi='
								<ul class="dropdown-menu">
									<li><a onclick="copyData(this);" data-layanan="'.$result->layanan.'" data-nama="'.$result->nama.'" data-isi="'.$result->isi.'" role="button">
													<i class="fa fa-copy"></i> Copy Template</a></li>
								</ul>';
					}else{
						$aksi='
								<ul class="dropdown-menu">
									<li><a onclick="copyData(this);" data-layanan="'.$result->layanan.'" data-nama="'.$result->nama.'" data-isi="'.$result->isi.'" role="button">
													<i class="fa fa-copy"></i> Copy Template</a></li>
									<li><a onclick="editData(this);" data-id="'.$result->_id.'" role="button">
													<i class="fa fa-pencil-square-o"></i> Edit Template </a></li>
									<li><a role="button" onclick="hapusData(this);" data-id="'.$result->_id.'" data-nama="'.$result->nama.'"> 
													<i class="fa fa-trash"></i> Hapus Template </a></li>
								</ul>';
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
						$return .= "<td>{$result->nama} -- ({$result->id_notaris})</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		return json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}
	
	protected function get_databyid() {
		if(!empty($this->param)) {
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" 	  => "notaristempakta", 
									   "Activity"	  => "get", 
									   "ParamsFilter" => "_id = ".$this->param["id"]));	
									   
			$data = $this->api->execute();	
			return $data;
		}
	}
}
?>
