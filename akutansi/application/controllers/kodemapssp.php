<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kodemapssp extends CI_Controller {

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
			$this->api->setParam(array("Target" => "taxjenisssp", "Activity" => "get"));
			$data["ssp"] = $this->api->execute("object");
	
			$this->load->view('pajak/kodemapssp/index', $data);
		}	
		
		
	}

	public function cetakkodemapssp(){

		$data = $this->input->post();

		$arr = array("Target" 	=> "taxjenisssp", 
		   "Activity"	=> "get",
		   	"Limit" => "20");

		if(!empty($data["akun"])) {
			$flt = "akun = '". $data["akun"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["map"])) {
			$flt = "map = '". $data["map"] ."'";
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
							   
		$output["kodemapssp"] = $this->api->execute("object");

		$this->load->view("pajak/kodemapssp/pdf/cetak",$output);
		
		$html = $this->output->get_output();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Data Siswa.pdf", array("Attachment" => 0)); 
	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "taxjenisssp", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);
		

		$filter = "";
		if(!empty($this->param["kywd"])) {
			$flt = $this->param["kywd"];
			$filter .= "(map LIKE '%{$flt}%' or akun LIKE '%{$flt}%' or aktif LIKE '%{$flt}%' or setoran LIKE '%{$flt}%' or uraian LIKE '%{$flt}%')";
		}

		if(!empty($this->param["filter"]["akun"])) {
			$flt = "akun = '". $this->param["filter"]["akun"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["map"])) {
			$flt = "map = '". $this->param["filter"]["map"] ."'";
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
						$return .= "<td>{$result->map}</td>";
						$return .= "<td>{$result->akun}</td>";
						$return .= "<td>{$result->setoran}</td>";
						$return .= "<td>{$result->uraian}</td>";
						$return .= "<td>{$a}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		return json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}
}
?>
