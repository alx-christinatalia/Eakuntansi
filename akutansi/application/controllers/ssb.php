<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ssb extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	    //helpers

	   $this->load->library('export2pdf');
	   $this->load->library('pdf');
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
		    $this->api->setParam(array("Target" => "taxssp", "Activity" => "get", "Limit" => "33" , "ParamsSort" => "name asc"));
		    $data['mod'] = $this->api->execute("object");

			$this->load->view('pajak/ssb/index', $data);
		}	
		
		
	}

	public function edit($id)
	{
		if(!empty($this->input->post("param")))
		{
			$value = $this->input->post("param");
			$_id = $this->input->post("id");

			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "taxssb", "Activity" => "update", "ParamsData" => json_encode($value), "ParamsFilter" => "_id = '".$_id."' ", "GetLastId" => "1"));
			$data = $this->api->execute("array");

			$flt = "_id = '".$_id."'";
			$lg = $this->DoList->log_data("taxssb",$flt);
			$log = $this->DoList->user_log("taxssb","Edit Pajak SSB ",$lg->no_ssb,"Nomor NPWP = ".$value['npwp']);

			echo json_encode($result);

		}else
		{
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "taxssb", "Activity" => "get","ParamsFilter"	=> "_id = '". $id."'" ));
			$data["ssb"] = $this->api->execute("object");
			$this->load->view("pajak/ssb/edit",$data);	
		}
		
	}

	public function datamap()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "maptaxssb", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(jenis LIKE '%{$flt}%')";
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
					$return .= "<tr id='{$result->id}' onclick='set_map(this);' style='cursor:pointer' data-map='{$result->kode}'>";
						$return .= "<td>{$result->kode}</td>";
						$return .= "<td>{$result->nama}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function tambah()
	{
		$this->load->view('pajak/ssb/tambah',$data);
	}

	public function bphtb()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "taxpengurangbphtb", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(kode LIKE '%{$flt}%' or alasan LIKE '%{$flt}%')";
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
					$return .= "<tr id='{$result->id}' onclick='set_pbphtb(this);' style='cursor:pointer' data-kode='{$result->kode}'>";
						$return .= "<td>{$result->kode}</td>";
						$return .= "<td>{$result->alasan}</td>";
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
					$return .= "<tr id='{$result->id}' onclick='set_npwp(this);' style='cursor:pointer' data-npwp='{$result->npwp}' data-nama='{$result->nama}' data-alamat='{$result->alamat}' data-desa='{$result->kelurahan}' data-kec='{$result->kec}' data-id='{$result->id}' data-kota='{$result->kabkota}' data-kp='{$result->kodepos}' data-nama='{$result->nama}'>";
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

	public function datakota1()
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
					$c=$this->test1($result->regency_id);
					$return .= "<tr id='{$result->id}' onclick='set_kota1(this);' style='cursor:pointer' data-kec='{$result->name}' data-kota='{$c}'>";
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

	public function datakota2()
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
					$c=$this->test2($result->regency_id);
					$return .= "<tr id='{$result->id}' onclick='set_kota2(this);' style='cursor:pointer' data-kec='{$result->name}' data-kota='{$c}'>";
						$return .= "<td>{$result->name}</td>";
						$return .= "<td>{$c}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function test2($id)
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

	public function datakota3()
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
					$c=$this->test3($result->province_id);
					$return .= "<tr id='{$result->id}' onclick='set_lp(this);' style='cursor:pointer' data-kota='{$result->name}'>";
						$return .= "<td>{$result->name}</td>";
						$return .= "<td>{$c}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function test3($id)
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

	public function delete($id){

		$flt = "_id = '".$id."'";
		$lg = $this->DoList->log_data("taxssb",$flt);

		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "taxssb", "Activity" => "delete", "ParamsFilter" => "_id = '".$id."' ", "GetLastId" => "1"));
		$data = $this->api->execute("array");

		$log = $this->DoList->user_log("taxssb","Hapus Pajak SSB ",$lg->no_ssb,"Nomor NPWP = ".$lg->npwp);

		redirect("ssb");

	}

	public function simpan()
	{
		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$value["tgl_byr"] = date("Y-m-d", strtotime($value["tgl_byr"]));

		$this->api->setParam(array("Target" => "taxssb", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
		$data = $this->api->execute("array");


		echo json_encode($data);

	}

	public function asimpan($id)
	{

		$this->api->setAction("Execute");
		$h1 = date("ym");
		$h2 = "000000";
		$h3 = $h1.$h2;
		$hasil = $h3 + $id;
		$hasil = "SSB".$hasil;

		$value = array("no_ssb" => $hasil);
		$this->api->setParam(array("Target" => "taxssb", "Activity" => "update", "ParamsData" => json_encode($value),"ParamsFilter" => "_id = '".$id."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");

		$ids = "no_ssb = '".$hasil."'";
		$lg = $this->DoList->log_data("taxssb",$ids);
		$log = $this->DoList->user_log("taxssb","Tambah Pajak SSB ",$hasil,"Nomor NPWP = ".$lg->npwp);

		echo json_encode("berhasil");
	}

	public function update($_id)
	{

		$flt = "_id = '".$_id."'";
		$lg = $this->DoList->log_data("taxssb",$flt);

		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$this->api->setParam(array("Target" => "taxssb", "Activity" => "update", "ParamsData" => json_encode($value),"ParamsFilter" => "_id = '".$_id."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");

		$log = $this->DoList->user_log("taxssb","Bayar Pajak SSB ",$lg->no_ssb,"Dibayar = ".$value['jmlbyr']);

		echo "<pre>";
		print_r($data);
		echo "</pre>";	
	}

	public function cetakdatassb(){
		$id = $this->input->post('id');
        
        $filter = "_id = '".$id."'";
        $data['data'] = $this->DoList->m_sWhere("taxssb",$filter)->Data[0];
           
        $this->pdf->load();
        $pdf = new MPDF('utf-8', array(216,340));
        $pdf->SetImportUse();
        $pagecount  = $pdf->SetSourceFile("./upload/SSB.pdf",true);
        $tplId = $pdf->ImportPage($pagecount,0,0,500,500);
        $actualsize = $pdf->UseTemplate($tplId);
        $html = $this->load->view("pajak/ssb/cetak", $data ,true);
        $pdf->WriteHTML($html);
        $pdf->AddPage();
        $actualsize = $pdf->UseTemplate($tplId);

        $pdf->Output();
	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "taxssb", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);
		

		$filter = "";
		if(!empty($this->param["kywd"])) {
			$flt = $this->param["kywd"];
			$filter .= "(npwp LIKE '%{$flt}%' or wp_nama LIKE '%{$flt}%' or wp_kec LIKE '%{$flt}%' or wp_kabkota LIKE '%{$flt}%' or jenis LIKE '%{$flt}%')";
		}

		if(!empty($this->param["filter"]["npwp"])) {
			$flt = "npwp = '". $this->param["filter"]["npwp"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["ssb"])) {
			$flt = "jenis = '". $this->param["filter"]["ssb"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["byr"])) {
			$flt = "sdh_byr = '". $this->param["filter"]["byr"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["tgl_mulai"])) {
			$explode= explode(" - ",$this->param["filter"]["tgl_mulai"]);
			$date1 = date("Y-m-d", strtotime($explode[0]));
			$date2 = date("Y-m-d", strtotime($explode[1]));
			$flt = "tgl_byr BETWEEN '". $date1 ."' and '". $date2 ."'";
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

					if(($result->jenis)=="1"){
						$jenis="Jual Beli";
					} else if (($result->jenis)=="2"){
						$jenis="Waris";
					} else if (($result->jenis)=="3"){
						$jenis="Hibah";
					} else if (($result->jenis)=="4"){
						$jenis="Pemberian Hak Pengelolaan";
					} 

					if(($result->sdh_byr) == "0"){
						$bayar='<li><a onclick="bayarData(this);" data-id="'.$result->_id.'" role="button">Bayar SSB </a></li>';
					}else{
						$bayar="";
					}

					if (($result->ntpn)==null){
						$ntpn="-";
					}else{
						$ntpn=$result->ntpn;
					}

					$return .= "<tr id='{$result->_id}'>";
						$return .= '<td>
										<div class="btn-group">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fa fa-bars"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a role="button" href="'.base_url("ssb/edit/".$result->_id).'">
													 Edit </a></li>
												<li><a onclick="cetakData(this);" data-id="'.$result->_id.'" role="button">
													 Cetak </a></li>
												'.$bayar.'
												<li><a role="button" onclick="hapusData(this);" data-id="'.$result->_id.'" data-nama="'.$result->nama_wp.'">Hapus Data</a></li>
											</ul>
										</div>
									</td>';
						$return .= "<td>".date("d M Y", strtotime($result->tgl_byr))."</td>";
						$return .= "<td>{$result->no_ssb}</td>";
						$return .= "<td>{$result->nama_wp}</td>";
						$return .= "<td>{$jenis}</td>";
						$return .= "<td>{$ntpn}</td>";
						$return .= "<td>{$result->jmlbyr}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		return json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}
	
	protected function get_databyid() {
		if(!empty($this->param)) {
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" 	  => "taxssb", 
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
