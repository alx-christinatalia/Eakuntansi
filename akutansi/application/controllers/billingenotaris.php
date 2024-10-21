<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class billingenotaris extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	    //helpers

	   $this->load->library('export2pdf');
	   $this->load->helper('url');
	   $this->load->model('api');
	   $this->load->library('session');
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
			$this->api->setParam(array("Target" => "billingjenis", "Activity" => "get","Limit" => "200", "ParamsSort" => "nama asc"));
			$data["jenis"] = $this->api->execute("object");

			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "billingtransaksi", "Activity" => "get","Limit" => "200", "ParamsSort" => "nama asc"));
			$data["transaksi"] = $this->api->execute("object");
	
			$this->load->view('enotaris/billingenotaris/index', $data);
		}	
		
		
	}

	public function tambah(){
		$this->load->view('enotaris/billingenotaris/tambahbilling');
	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "billingtransaksi", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);
		

		$filter = "";
		if(!empty($this->param["kywd"])) {
			$flt = $this->param["kywd"];
			$filter .= "(uraian LIKE '%{$flt}%')";
		}

		if(!empty($this->param["filter"]["tgl_mulai"])) {
			$explode= explode(" - ",$this->param["filter"]["tgl_mulai"]);
			$date1 = date("Y-m-d", strtotime($explode[0]));
			$date2 = date("Y-m-d", strtotime($explode[1]));
			$flt = "tgl BETWEEN '". $date1 ."' and '". $date2 ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["transaksi"])) {
			$flt = "jenis = '". $this->param["filter"]["transaksi"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["mutasi"])) {
			$flt = "mk = '". $this->param["filter"]["mutasi"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["posting"])) {
			$flt = "is_posting = '". $this->param["filter"]["posting"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		$arr["ParamsFilter"] = $filter;
		
		if(!empty($data["sort"])) {
			$sort = '_id desc';
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
				foreach($output->Data as $result) { 
					$a = ($result->mk == "m" ? "Masuk" : "Keluar");
					$return .= "<tr id='{$result->_id}'>";
						$return .= "<td>".date("d M Y", strtotime($result->tgl))."</td>";
						$return .= "<td>{$result->jenis}</td>";
						$return .= "<td><a href='".base_url("klien/detail/".$result->_id)."'>{$result->uraian}</a></td>";
						$return .= "<td>{$a}</td>";
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
