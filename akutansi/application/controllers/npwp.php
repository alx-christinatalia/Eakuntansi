<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class npwp extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	    //helpers

	   $this->load->library('export2pdf');
	   $this->load->helper('url');
	   $this->load->model('api');
	   $this->load->library('session');
            $this->publicmodel->checkPermission();
            $this->publicmodel->accessPermission("9");
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
			$this->api->setParam(array("Target" => "taxnpwp", "Activity" => "get"));
			$data["npwp"] = $this->api->execute("object");

			$this->api->setAction("Execute");
		    $this->api->setParam(array("Target" => "provinces", "Activity" => "get", "Limit" => "33" , "ParamsSort" => "name asc"));
		    $data['prov'] = $this->api->execute("object");

			$this->api->setAction("Execute");
		    $this->api->setParam(array("Target" => "regencies", "Activity" => "get", "Limit" => "33" , "ParamsSort" => "name asc"));
		    $data['kota'] = $this->api->execute("object");

			$this->load->view('pajak/npwp/index', $data);
		}	
		
		
	}

	public function edit($id)
	{
		if(!empty($this->input->post("param")))
		{
			$value = $this->input->post("param");

			$_id = $this->input->post("id");
			$npwp = $this->input->post("npwp");

			$this->api->setAction("Execute");
			$value = $this->input->post("param");
			$this->api->setParam(array("Target" => "taxnpwp", "Activity" => "get", "ParamsFilter" => "npwp = '".$npwp."' " , "GetLastId" => "1"));
			$data = $this->api->execute("array");
			$data = $data->Data[0];	

			if($data == null && $data == ""){

				$this->api->setAction("Execute");
				$this->api->setParam(array("Target" => "taxnpwp", "Activity" => "update", "ParamsData" => json_encode($value), "ParamsFilter" => "_id = '".$_id."' ", "GetLastId" => "1"));
				$data = $this->api->execute("array");


				$log = $this->DoList->user_log("taxnpwp","Edit NPWP ",$value['npwp'],"Nama = ".$value['nama']);

				$result = "sukses";
			}else
			{
				$result = "gagal";
			}
			echo json_encode($result);

		}else
		{
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "taxnpwp", "Activity" => "get","ParamsFilter"	=> "_id = '". $id."'" ));
			$data["npwp"] = $this->api->execute("object");
			$this->load->view("pajak/npwp/edit",$data);	
		}
		
	}

	public function kota()
	{
		if($this->input->post("provinsi"))
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
						$return .= "<option value='{$out->id}'> {$out->name} </option>";
					}
					echo json_encode(["list_result" => $return]);
		}
	}

	public function kec()
	{
		if($this->input->post("kabkota"))
		{		
					$this->param = $this->input->post("kabkota");
					$return = "";
					$this->api->setAction("Execute");
					$this->api->setParam(array("Target" 	=> "districts", 
									   "Activity"		=> "get", 
									   "Limit"  		=> 	"1000",
										"ParamsFilter"	=> "regency_id = '". $this->param["kabkota"]."'",
										"ParamsSort" => "name asc"  ));	
										   
					$output = $this->api->execute(true);
					foreach ($output->Data as $out) {
						$return .= "<option value='{$out->name}'> {$out->name} </option>";
					}
					echo json_encode(["list_result" => $return]);
		}
	}

	public function datakota()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "districts", 
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
					$c=$this->test($result->regency_id);
					$return .= "<tr id='{$result->id}' onclick='set_kota(this);' style='cursor:pointer' data-kec='{$result->name}' data-kota='{$c}' data-id='{$result->id}'>";
						$return .= "<td>{$result->name}</td>";
						$return .= "<td>{$c}</td>";
						$return .= "<td>{$this->test2($result->id)}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function test($id)
	{
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" 	=> "regencies", 
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

	public function test2($id)
	{
		$a = str_split($id, 2);
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" 	=> "provinces", 
								   "Activity"		=> "get", 
									"ParamsFilter"	=> "id = '".$a[0]."'" 
									));	
							   
		$output = $this->api->execute(true);
		$result ="";
		foreach ($output->Data as $data) {
			$result .= $data->name;
		}
		//$result = $output->Data[0]->name;

		return $result;
	}

	public function tambah()
	{
		$this->load->view('pajak/npwp/tambah');
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

	public function delete($id){

		$flt = "_id = '".$id."'";
		$lg = $this->DoList->log_data("taxnpwp",$flt);
		$log = $this->DoList->user_log("taxnpwp","Hapus NPWP ",$lg->npwp,"Nama = ".$lg->nama);

		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "taxnpwp", "Activity" => "delete", "ParamsFilter" => "_id = '".$id."' ", "GetLastId" => "1"));
		$data = $this->api->execute("array");
		redirect("npwp");

	}

	public function simpan()
	{
		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$this->api->setParam(array("Target" => "taxnpwp", "Activity" => "get", "ParamsFilter" => "npwp = '".$value['npwp']."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");
		$data = $data->Data[0];	

		if($data == null && $data == ""){
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "taxnpwp", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
			$data = $this->api->execute("array");

			$log = $this->DoList->user_log("taxnpwp","Tambah NPWP ",$value['npwp'],"Nama = ".$value['nama']);

			$result = "sukses";
		}else
		{
			$result = "gagal";
		}
		echo json_encode($result);

	}

	public function update($_id)
	{

		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$this->api->setParam(array("Target" => "taxnpwp", "Activity" => "update", "ParamsData" => json_encode($value),"ParamsFilter" => "_id = '".$_id."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");

		echo "<pre>";
		print_r($data);
		echo "</pre>";	
	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "taxnpwp", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);
		

		$filter = "";
		if(!empty($this->param["kywd"])) {
			$flt = $this->param["kywd"];
			$filter .= "(nama LIKE '%{$flt}%' or npwp LIKE '%{$flt}%' or kec LIKE '%{$flt}%' or kabkota LIKE '%{$flt}%')";
		}

		if(!empty($this->param["filter"]["kec"])) {
			$flt = "kec = '". $this->param["filter"]["kec"] ."'";
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
					$return .= "<tr id='{$result->_id}'>";
						$return .= '<td>
										<div class="btn-group">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fa fa-bars"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a role="button" href="'.base_url("npwp/edit/".$result->_id).'">
													 Edit </a></li>
												<li><a onclick="cetakData(this);" data-id="'.$result->_id.'" role="button">
													 Cetak </a></li>
												<li><a role="button" onclick="hapusData(this);" data-id="'.$result->_id.'" data-nama="'.$result->nama.'">Hapus Data</a></li>
											</ul>
										</div>
									</td>';
						$return .= "<td>{$result->npwp}</td>";
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$result->kec}</td>";
						$return .= "<td>{$result->kabkota}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		return json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}
	
	protected function get_databyid() {
		if(!empty($this->param)) {
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" 	  => "taxnpwp", 
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
