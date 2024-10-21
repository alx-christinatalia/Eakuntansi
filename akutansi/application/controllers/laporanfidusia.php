<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporanfidusia extends CI_Controller {

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
			$this->load->view('laporan/laporanfidusia/index', $data);
		}
	}	

	public function getPelanggan(){
    	$datapelanggan = $this->DoList->m_getData_l("t_fidusia_penerima",10000);
    	$return = "";
    	foreach($datapelanggan->Data as $resp)
		{
			$return .= "<option value='".$resp->nama."'>".$resp->nama." | ".$resp->pimpinan_nama."</option>";
		}
		echo json_encode($return);
	}

	public function getProgres(){
    	$dataprogres = $this->DoList->m_getData_l("t_progres",10000);
    	$return = "";
    	foreach($dataprogres->Data as $resp)
		{
			$return .= "<option value='".$resp->progres."'>".$resp->progres."</option>";
		}
		echo json_encode($return);
	}

	public function cetak(){

		$data = $this->input->post();
		$pilih = $data["laporan"];

		$berkasbulan;
		$explode = explode(" - ",$data["tgl_mulai"]);
		$date1 = date("Y-m-d", strtotime($explode[0]));
		$date2 = date("Y-m-d", strtotime($explode[1]));

		$arr = array("Target" 	=> "t_akta", 
				   "Activity"	=> "get");
		

		$filter = "";

		if(!empty($data["noakta1"])) {
			$flt = "nomor BETWEEN '". $data["noakta1"] ."' and '". $data["noakta2"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["pelanggan"])) {
			$flt = "pelanggan = '". $data["pelanggan"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["tgl_mulai"])) {
			$flt = "tgl BETWEEN '". $date1 ."' and '". $date2 ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}
		
		if(!empty($data["nobatch"])) {
			$flt = "no_batch = '". $data["nobatch"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["nojanjipk"])) {
			$flt = "janji_no_pk = '". $data["nojanjipk"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["progres"])) {
			$flt = "progres = '". $data["progres"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		$arr["ParamsFilter"] = $filter;
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);

		$penerima = $output->Data[0];

		$invoice =  $output->Data[0]->no_invoice; 

		$d1 = date("n", strtotime($explode[0]));
		$d2 = date("n", strtotime($explode[1]));

		if($d1 == $d2){
			$berkasbulan = $this->publicmodel->namabulan($d1);
		}else{
			$b1 = $this->publicmodel->namabulan($d1);
			$b2 = $this->publicmodel->namabulan($d2);

			$berkasbulan = $b1." sampai ".$b2;
		}

		//echo $berkasbulan;

		//echo date("n", strtotime($explode[1]));

		//echo "<pre>";
		//print_r($explode);

		$jmlberkas = count((array)$output->Data);
		$terbilang = $this->publicmodel->terbilang($jmlberkas);
		//echo $jml;
		//echo "</pre>";

		if ($pilih == "kwitansiapnotaris"){
			$this->load->view("laporan/laporanfidusia/kwitansiapnotaris",array('list' => $output, 'penerima' => $penerima, 'invoice' => $invoice));	
		}else if($pilih == "kwitansipnbp"){
			$this->load->view("laporan/laporanfidusia/kwitansipnbp",array('list' => $output, 'penerima' => $penerima, 'invoice' => $invoice));
		}else if($pilih == "perincianbiaya"){
			$this->load->view("laporan/laporanfidusia/perincianbiaya",array('list' => $output, 'penerima' => $penerima, 'invoice' => $invoice, 'jmlberkas' => $jmlberkas, 'terbilang' => $terbilang, 'berkasbulan' => $berkasbulan));
		}else if($pilih == "kwitansitandaterima"){
			$this->load->view("laporan/laporanfidusia/tandaterima",array('list' => $output, 'penerima' => $penerima, 'invoice' => $invoice));
		}
		
	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "t_akta", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);
		

		$filter = "";

		if(!empty($this->param["filter"]["noakta1"])) {
			$flt = "nomor BETWEEN '". $this->param["filter"]["noakta1"] ."' and '". $this->param["filter"]["noakta2"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["pelanggan"])) {
			$flt = "pelanggan = '". $this->param["filter"]["pelanggan"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["tgl"])) {
			$explode= explode(" - ",$this->param["filter"]["tgl"]);
			$date1 = date("Y-m-d", strtotime($explode[0]));
			$date2 = date("Y-m-d", strtotime($explode[1]));
			$flt = "tgl BETWEEN '". $date1 ."' and '". $date2 ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}
		
		if(!empty($this->param["filter"]["nobatch"])) {
			$flt = "no_batch = '". $this->param["filter"]["nobatch"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["nojanjipk"])) {
			$flt = "janji_no_pk = '". $this->param["filter"]["nojanjipk"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["progres"])) {
			$flt = "progres = '". $this->param["filter"]["progres"] ."'";
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
				$n=1;
				foreach($output->Data as $result) { 
					$a = ($result->selesai == "1" ? "<span class=\"badge badge-success\"> Selesai </span>" : "<span class=\"badge badge-danger\"> Belum Selesai </span>");

					$return .= "<tr id='{$result->ID}'>";
						$return .= "<td>{$result->ID}</td>";
						$return .= "<td>{$result->pelanggan}</td>";
						$return .= "<td>{$result->no_batch}</td>";
						$return .= "<td>{$result->janji_no_pk}</td>";
						$return .= "<td>{$result->nomor}</td>";
						$return .= "<td>".date("d M Y", strtotime($result->tgl))."</td>";
						$return .= "<td>{$result->pemberi_nama}</td>";
						$return .= "<td>{$result->ahu_no_voucher}</td>";
						$return .= "<td>{$result->ahu_no_sertifikat}</td>";
						$return .= "<td>{$result->progres}</td>";
						$return .= "<td>{$result->catatan}</td>";
						$return .= "<td>{$a}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='12'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='12'><center>Data tidak tersedia</center></td></tr>";
		
		return json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}
}