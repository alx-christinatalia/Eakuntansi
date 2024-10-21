<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class suratkeluar extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	    //helpers

	   $this->load->library('export2pdf');
	   $this->load->helper('url');
	   $this->load->model('api');
	   $this->load->library('session');
            $this->publicmodel->checkPermission();
            $this->publicmodel->accessPermission("8");
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

			$this->load->view('agendasurat/suratkeluar/index');

		}	
		
		
	}

	public function edit($id)
	{
		if(!empty($this->input->post("param")))
		{
			$value = $this->input->post("param");
			$_id = $this->input->post("id");
			$value["tgl_surat"] = date("Y-m-d", strtotime($value["tgl_surat"]));

			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "notarisagendasurat", "Activity" => "update", "ParamsData" => json_encode($value), "ParamsFilter" => "_id = '".$_id."' ", "GetLastId" => "1"));
			$data = $this->api->execute("array");
			$log = $this->DoList->user_log("notarisagendasurat","Edit Surat Keluar",$_id,"No Surat Keluar ".$value['no_surat']);	

			echo json_encode($result);

		}else
		{
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "notarisagendasurat", "Activity" => "get","ParamsFilter"	=> "_id = '". $id."'" ));
			$data["suratkeluar"] = $this->api->execute("object");
			$this->load->view("agendasurat/suratkeluar/edit",$data);	
		}
		
	}

	public function tambah()
	{
		$this->load->view('agendasurat/suratkeluar/tambah');
	}

	public function cetakdatanpwp(){

		$data = $this->input->post();

		$arr = array("Target" 	=> "taxnpwp", 
		   "Activity"	=> "get",
		   	"Limit" => "20");

		if(!empty($data["nama"])) {
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
							   
		$output["npwp"] = $this->api->execute("object");

		$this->load->view("pajak/npwp/pdf/cetak",$output);
		
		$html = $this->output->get_output();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Data Siswa.pdf", array("Attachment" => 0)); 
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

	public function delete($id){
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "notarisagendasurat", "Activity" => "delete", "ParamsFilter" => "_id = '".$id."' ", "GetLastId" => "1"));
		$data = $this->api->execute("array");
		$log = $this->DoList->user_log("notarisagendasurat","Hapus Surat Keluar",$id,"Surat Keluar ID ".$id);
		redirect("suratkeluar");

	}

	public function simpan()
	{
		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$value["tgl_surat"] = date("Y-m-d", strtotime($value["tgl_surat"]));

		$this->api->setParam(array("Target" => "notarisagendasurat", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
		$data = $this->api->execute("array");
		$log = $this->DoList->user_log("notarisagendasurat","Tambah Surat Keluar",$data->Output,"No Surat Keluar ".$value['no_surat']);

		echo json_encode($data);
		return ($data);

	}

	public function update($_id)
	{

		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$value["tgl_byr"] = date("Y-m-d", strtotime($value["tgl_byr"]));
		
		$this->api->setParam(array("Target" => "taxssp", "Activity" => "update", "ParamsData" => json_encode($value),"ParamsFilter" => "_id = '".$_id."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");

		echo "<pre>";
		print_r($data);
		echo "</pre>";	
	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "notarisagendasurat", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);	

		$filter = "";
		
		if(!empty($this->param["kywd"])) {
			$flt = $this->param["kywd"];
			$filter .= "(nama_officer LIKE '%{$flt}%' or no_surat LIKE '%{$flt}%' or perihal LIKE '%{$flt}%' or asal_surat LIKE '%{$flt}%' or disposisi LIKE '%{$flt}%')";
		}

		if(!empty($this->param["filter"]["nama_officer"])) {
			$flt = "nama_officer = '". $this->param["filter"]["nama_officer"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["tgl_surat"])) {
			$explode= explode(" - ",$this->param["filter"]["tgl_surat"]);
			$date1 = date("Y-m-d", strtotime($explode[0]));
			$date2 = date("Y-m-d", strtotime($explode[1]));
			$flt = "tgl_surat BETWEEN '". $date1 ."' and '". $date2 ."'";
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

					if ($result->jenis_agenda == 2 ){

						$return .= "<tr id='{$result->_id}'>";
							$return .= '<td>
											<div class="btn-group">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-bars"></i>
												</button>
												<ul class="dropdown-menu">
													<li><a role="button" href="'.base_url("suratkeluar/edit/".$result->_id).'">
														 Edit </a></li>
													<li><a role="button" onclick="hapusData(this);" data-id="'.$result->_id.'">Hapus Data</a></li>
												</ul>
											</div>
										</td>';
							$return .= "<td>{$result->nama_officer}</td>";
							$return .= "<td>{$result->no_surat}</td>";
							$return .= "<td>".date("d M Y", strtotime($result->tgl_surat))."</td>";
							$return .= "<td>{$result->perihal}</td>";
							$return .= "<td>{$result->tujuan_surat}</td>";
						$return .= "</tr>";

					}
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
