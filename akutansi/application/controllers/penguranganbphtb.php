<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penguranganbphtb  extends CI_Controller {

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
			$this->api->setParam(array("Target" => "taxpengurangbphtb", "Activity" => "get"));
			$data["ssb"] = $this->api->execute("object");
	
			$this->load->view('pajak/penguranganbphtb/index', $data);
		}	
		
		
	}

	public function cetakpenguranganbphtb(){

		$data = $this->input->post();

		$arr = array("Target" 	=> "taxpengurangbphtb", 
		   "Activity"	=> "get",
		   	"Limit" => "20");

		if(!empty($data["kode"])) {
			$flt = "kode = '". $data["kode"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["prosentase"])) {
			$flt = "prosentase = '". $data["prosentase"] ."'";
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
							   
		$output["penguranganbphtb"] = $this->api->execute("object");

		$this->load->view("pajak/pengurangangbphtb/pdf/cetak",$output);
		
		$html = $this->output->get_output();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Data Siswa.pdf", array("Attachment" => 0)); 
	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "taxpengurangbphtb", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);
		

		$filter = "";
		if(!empty($this->param["kywd"])) {
			$flt = $this->param["kywd"];
			$filter .= "(kode LIKE '%{$flt}%' or prosentase LIKE '%{$flt}%' or alasan LIKE '%{$flt}%')";
		}

		if(!empty($this->param["filter"]["kode"])) {
			$flt = "kode = '". $this->param["filter"]["kode"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["prosentase"])) {
			$flt = "prosentase = '". $this->param["filter"]["prosentase"] ."'";
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
						$return .= "<td>{$result->kode}</td>";
						$return .= "<td>{$result->alasan}</td>";
						$return .= "<td>{$result->prosentase}</td>";
						$return .= "<td>{$a}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		return json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}
}
?>
