<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ssp extends CI_Controller {

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

			$this->load->view('pajak/ssp/index', $data);
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
			$this->api->setParam(array("Target" => "taxssp", "Activity" => "get", "ParamsFilter" => "npwp = '".$npwp."' " , "GetLastId" => "1"));
			$data = $this->api->execute("array");
			$data = $data->Data[0];	

			if($data == null && $data == ""){

				$this->api->setAction("Execute");
				$this->api->setParam(array("Target" => "taxssp", "Activity" => "update", "ParamsData" => json_encode($value), "ParamsFilter" => "_id = '".$_id."' ", "GetLastId" => "1"));
				$data = $this->api->execute("array");

				$lg = $this->DoList->log_data("taxssp",$_id);
				$log = $this->DoList->user_log("taxssp","Edit Pajak SSP ",$lg->no_ssp,$value['ket']);

				$result = "sukses";
			}else
			{
				$result = "gagal";
			}
			echo json_encode($result);

		}else
		{
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "taxssp", "Activity" => "get","ParamsFilter"	=> "_id = '". $id."'" ));
			$data["ssp"] = $this->api->execute("object");

			$this->api->setAction("Execute");
		     $this->api->setParam(array("Target" => "inf_provinsi", "Activity" => "get", "Limit" => "33" ));
		     $data['prov'] = $this->api->execute("object");
		     
			$this->load->view("pajak/ssp/edit",$data);	
		}
		
	}

	public function tambah()
	{
		$this->load->view('pajak/ssp/tambah',$data);
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

	public function datamap()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "taxjenisssp", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(map LIKE '%{$flt}%' or uraian LIKE '%{$flt}%')";
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
					$return .= "<tr id='{$result->id}' onclick='set_map(this);' style='cursor:pointer' data-map='{$result->map}' data-ket='{$result->ket}' data-uraian='{$result->uraian}' data-akun='{$result->akun}' data-setoran='{$result->setoran}' data-id='{$result->id}'>";
						$return .= "<td>{$result->map}</td>";
						$return .= "<td>{$result->uraian}</td>";
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
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "taxssp", "Activity" => "delete", "ParamsFilter" => "_id = '".$id."' ", "GetLastId" => "1"));
		$data = $this->api->execute("array");

		$lg = $this->DoList->log_data("taxssp",$id);
		$log = $this->DoList->user_log("taxssp","Hapus Pajak SSP ",$lg->no_ssp,$lg->ket);

		redirect("ssp");

	}

	public function simpan()
	{
		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$value["tgl_byr"] = date("Y-m-d", strtotime($value["tgl_byr"]));

		$this->api->setParam(array("Target" => "taxssp", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
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
		$hasil = "SSP".$hasil;

		$value = array("no_ssp" => $hasil);
		$this->api->setParam(array("Target" => "taxssp", "Activity" => "update", "ParamsData" => json_encode($value),"ParamsFilter" => "_id = '".$id."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");

		$log = $this->DoList->user_log("taxssp","Tambah Pajak SSP ",$hasil,"Nomor SSP ".$hasil);

		echo json_encode("berhasil");
	}


	public function update($_id)
	{


		$flt = "_id = '".$_id."'";
		$lg = $this->DoList->log_data("taxssp",$flt);

		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$value["tgl_byr"] = date("Y-m-d", strtotime($value["tgl_byr"]));
		
		$this->api->setParam(array("Target" => "taxssp", "Activity" => "update", "ParamsData" => json_encode($value),"ParamsFilter" => "_id = '".$_id."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");

		$log = $this->DoList->user_log("taxssp","Bayar Pajak SSP ",$lg->no_ssp,"Dibayar = ".$value['jml']);

		echo "<pre>";
		print_r($data);
		echo "</pre>";	
	}

	public function cetakdatassp(){
		$id = $this->input->post('id');
        
        $filter = "_id = '".$id."'";
        $data['data'] = $this->DoList->m_sWhere("taxssp",$filter)->Data[0];
           
        $this->pdf->load();
        $pdf = new MPDF('utf-8', array(240,350));
        $pdf->SetImportUse();
        $pagecount  = $pdf->SetSourceFile("./upload/SSP.pdf",true);
        $tplId = $pdf->ImportPage($pagecount,0,0,500,500);
        $actualsize = $pdf->UseTemplate($tplId);
        $html = $this->load->view("pajak/ssp/cetak", $data ,true);
        $pdf->WriteHTML($html);
        $pdf->AddPage();
		$pdf->WriteHTML($html);
        $actualsize = $pdf->UseTemplate($tplId);

        $pdf->Output();
	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "taxssp", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);
		

		$filter = "";
		if(!empty($this->param["kywd"])) {
			$flt = $this->param["kywd"];
			$filter .= "(no_ssp LIKE '%{$flt}%' or nama_wp LIKE '%{$flt}%' or map LIKE '%{$flt}%' or jml LIKE '%{$flt}%')";
		}

		if(!empty($this->param["filter"]["npwp"])) {
			$flt = "npwp = '". $this->param["filter"]["npwp"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["ssp"])) {
			$flt = "map = '". $this->param["filter"]["ssp"] ."'";
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

					if(($result->sdh_byr) == "0"){
						$bayar='<li><a onclick="bayarData(this);" data-id="'.$result->_id.'" role="button">Bayar SSP </a></li>';
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
												<li><a role="button" href="'.base_url("ssp/edit/".$result->_id).'">
													 Edit </a></li>
												<li><a onclick="cetakData(this);" data-id="'.$result->_id.'" role="button">
													 Cetak </a></li>
												'.$bayar.'
												<li><a role="button" onclick="hapusData(this);" data-id="'.$result->_id.'" data-nama="'.$result->nama_wp.'">Hapus Data</a></li>
											</ul>
										</div>
									</td>';
						$return .= "<td>".date("d M Y", strtotime($result->tgl_byr))."</td>";
						$return .= "<td>{$result->no_ssp}</td>";
						$return .= "<td>{$result->nama_wp}</td>";
						$return .= "<td>{$result->map}</td>";
						$return .= "<td>{$ntpn}</td>";
						$return .= "<td>{$result->jml}</td>";
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

	public function sWhere($tb,$field,$_id)
    {
	    $this->api->setAction("Execute");
	    $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = '".$_id."' " ));
	    $data = $this->api->execute(true);
	    return $data;
    }
}
?>
