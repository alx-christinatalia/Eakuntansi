<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dataakun extends CI_Controller {

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

	/*public function export_pdf()
	{
		//$this->api->setAction("Execute");
		//$this->api->setParam(array("Target" => "finakuntemplate", "Activity" => "get"));
		//$data = $this->api->execute(true);
		$this->load->view("pdf/dataakun");		

		$html = $this->output->get_output();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Data Siswa.pdf", array("Attachment" => 0));
		
	}*/

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
			$this->api->setParam(array("Target" => "finakunkategori", "Activity" => "get","Limit" => "200", "ParamsSort" => "kategori asc"));
			$data["kategori"] = $this->api->execute("object");
	
			$this->load->view('keuangan/dataakun/index', $data);
			//$this->load->view('cetak');
		}	
		
		
	}

	public function cetakdataakun(){

		$data = $this->input->post();

		$arr = array("Target" 	=> "finakun", 
		   "Activity"	=> "get",
		   	"Limit" => "20");

		if(!empty($data["kategori"])) {
			$flt = "kategori = '". $data["kategori"] ."'";
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
							   
		$output["dataakun"] = $this->api->execute("object");

		$this->load->view("keuangan/dataakun/cetak",$output);
		
		$html = $this->output->get_output();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Data Siswa.pdf", array("Attachment" => 0)); 
	}

	public function delete($id){
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "finakun", "Activity" => "delete", "ParamsFilter" => "_id = '".$id."' ", "GetLastId" => "1"));
		$data = $this->api->execute("array");
		$log = $this->DoList->user_log("finakun","Hapus Data Akun",$id,"ID Akun ".$id);
		redirect("dataakun");

	}

	public function simpan()
	{
		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$this->api->setParam(array("Target" => "finakun", "Activity" => "get", "ParamsFilter" => "kode = '".$value['kode']."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");
		$data = $data->Data[0];	

		if($data == null && $data == ""){
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "finakun", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
			$data = $this->api->execute("array");

			$log = $this->DoList->user_log("finakun","Tambah Data Akun",$value['kode'],$value['nama']);
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
		$this->api->setParam(array("Target" => "finakun", "Activity" => "update", "ParamsData" => json_encode($value),"ParamsFilter" => "_id = '".$_id."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");

		$log = $this->DoList->user_log("finakun","Edit Data Akun",$value['kode'],$value['nama']);

		echo "<pre>";
		print_r($data);
		echo "</pre>";	
	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "finakun", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);
		

		$filter = "";
		if(!empty($this->param["kywd"])) {
			$flt = $this->param["kywd"];
			$filter .= "(kode LIKE '%{$flt}%' or nama LIKE '%{$flt}%' or aktif LIKE '%{$flt}%')";
		}

		if(!empty($this->param["filter"]["kategori"])) {
			$flt = "kategori = '". $this->param["filter"]["kategori"] ."'";
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
												<li><a role="button" onclick="hapusData(this);" data-id="'.$result->_id.'" data-nama="'.$result->nama.'"><i class="fa fa-trash"></i> Hapus Data </a></li>
											</ul>
										</div>
									</td>';
						$return .= "<td><a onclick=\"editData(this);\" data-toggle=\"modal\" data-id=\"$result->_id\">{$result->kode}</a></td>";
						$return .= "<td>{$result->nama}</td>";
						
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
			$this->api->setParam(array("Target" 	  => "finakun", 
									   "Activity"	  => "get", 
									   "ParamsFilter" => "_id = ".$this->param["id"]));	
									   
			$data = $this->api->execute();	
			return $data;
		}
	}

	protected function get_kategori() {
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target"   => "finakunkategori", 
								   "Activity" => "get"));	
								   
		$data = $this->api->execute(true);	
		
		$sel = (empty($this->param["selected"])) ? "selected" : "";
		$return = "<option value='' {$sel}>{$this->param["item_pertama"]}</option>";
		foreach($data->Data as $result) {
			$sel = (!empty($this->param["selected"]) and $this->param["selected"] == $result->kategori) ? "selected" : "";
			$return .= "<option value='{$result->kategori}' {$sel}>{$result->kategori } - {$result->nama}</option>";
		}
		return $return;
	}
}
?>
