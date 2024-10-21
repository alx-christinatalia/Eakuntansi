<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datakontak extends CI_Controller {

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

	public function export_pdf()
	{
		//$this->api->setAction("Execute");
		//$this->api->setParam(array("Target" => "finakuntemplate", "Activity" => "get"));
		//$data = $this->api->execute(true);
		$this->load->view("_pdf");		

		$html = $this->output->get_output();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Data Siswa.pdf", array("Attachment" => 0));
		
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
			$this->api->setParam(array("Target" => "finkontak", "Activity" => "get"));
			$data["kontak"] = $this->api->execute("object");
	
			$this->load->view('keuangan/datakontak/index', $data);
		}	
		
		
	}

	public function cetakdatakontak(){

		$data = $this->input->post();

		$arr = array("Target" 	=> "finkontak", 
		   "Activity"	=> "get",
		   	"Limit" => "20");

		if(!empty($data["nama"])) {
			$flt = "nama = '". $data["nama"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["status"])) {
			$flt = "aktif = '". $data["status"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}


		$arr["ParamsFilter"] = $filter;

		if(!empty($data["sort"])) {
			$sort = $data["sort"];
			$arr["ParamsSort"] = $sort;
		}

		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output["datakontak"] = $this->api->execute("object");

		$this->load->view("keuangan/datakontak/cetak",$output);
		
		$html = $this->output->get_output();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Data Siswa.pdf", array("Attachment" => 0)); 
	}

	public function delete($id){
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "finkontak", "Activity" => "delete", "ParamsFilter" => "_id = '".$id."' ", "GetLastId" => "1"));
		$data = $this->api->execute("array");

		$log = $this->DoList->user_log("finkontak","Hapus Data Kontak",$id,"Id Data Kontak".$id);

		redirect("datakontak");

	}

	public function simpan()
	{
		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$this->api->setParam(array("Target" => "finkontak", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
		$data = $this->api->execute("array");

		$log = $this->DoList->user_log("finkontak","Tambah Data Kontak",$value['nama'],$value['catatan']);
		echo json_encode($data);
	}

	public function update($_id)
	{

		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$this->api->setParam(array("Target" => "finkontak", "Activity" => "update", "ParamsData" => json_encode($value),"ParamsFilter" => "_id = '".$_id."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");


		$log = $this->DoList->user_log("finkontak","Edit Data Kontak",$value['nama'],$value['catatan']);

		echo "<pre>";
		print_r($data);
		echo "</pre>";	
	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "finkontak", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);
		

		$filter = "";
		if(!empty($this->param["kywd"])) {
			$flt =  $this->param["kywd"];
			$filter .= "(nama LIKE '%{$flt}%' or catatan LIKE '%{$flt}%' or aktif LIKE '%{$flt}%')";
		}

		if(!empty($this->param["filter"]["kontak"])) {
			$flt = "nama = '". $this->param["filter"]["kontak"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["status"])) {
			$flt = "aktif = '". $this->param["filter"]["status"] ."'";
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
					$a = ($result->aktif == "1" ? "<span class=\"badge badge-success\"> Aktif </span>" : "<span class=\"badge badge-danger\"> Tidak Aktif </span>");
					$return .= "<tr id='{$result->_id}'>";
						$return .= '<td>
										<div class="btn-group">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fa fa-bars"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a onclick="editData(this);" data-id="'.$result->_id.'" role="button">
													<i class="fa fa-pencil-square-o"></i> Edit </a></li>
												<li><a role="button" onclick="hapusData(this);" data-id="'.$result->_id.'" data-nama="'.$result->nama.'">Hapus Data</a></li>
											</ul>
										</div>
									</td>';
						$return .= "<td><a onclick=\"editData(this);\" data-toggle=\"modal\" data-id=\"$result->_id\">{$result->nama}</a></td>";
						$return .= "<td>{$result->catatan}</td>";
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
			$this->api->setParam(array("Target" 	  => "finkontak", 
									   "Activity"	  => "get", 
									   "ParamsFilter" => "_id = ".$this->param["id"]));	
									   
			$data = $this->api->execute();	
			return $data;
		}
	}
}
?>
