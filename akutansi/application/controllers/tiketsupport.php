<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tiketsupport extends CI_Controller {

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
			$this->load->view('enotaris/tiketsupport/index');
		}	
		
		
	}

	public function tambah(){
		$this->load->view('enotaris/tiketsupport/tambah');
	}

	public function simpan()
	{
		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$value["tgl"] = date("Y-m-d", strtotime($value["tgl"]));

		$this->api->setParam(array("Target" => "tiketmsg", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
		$data = $this->api->execute("array");

		echo json_encode($data);

	}

	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "tiket", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);
		

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
				$n = 1;
				foreach($output->Data as $result) { 
					$a = ($result->is_closed == "1" ? "Closed" : "Open");
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
						$return .= "<td>".date("d M Y", strtotime($result->dibuat))."</td>";
						$return .= "<td>{$result->judul}</td>";
						$return .= "<td>{$result->bagian}</td>";
						$return .= "<td>{$a}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		return json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}
}
?>
