<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kirimblog extends CI_Controller {

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
			$this->api->setParam(array("Target" => "finakunkategori", "Activity" => "get","Limit" => "200", "ParamsSort" => "kategori asc"));
			$data["kategori"] = $this->api->execute("object");
	
			$this->load->view('enotaris/kirimblog/index', $data);
		}	
		
		
	}

	public function tambah(){
		$this->load->view('enotaris/kirimblog/tambah');
	}

	public function simpan()
	{
		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$value["tgl"] = date("Y-m-d", strtotime($value["tgl"]));

		$this->api->setParam(array("Target" => "enotraisblog", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
		$data = $this->api->execute("array");

		echo json_encode($data);

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


	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "enotraisblog", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);
		

		$filter = "";
		if(!empty($this->param["kywd"])) {
			$flt = $this->param["kywd"];
			$filter .= "(judul LIKE '%{$flt}%')";
		}
		
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
					if ($result->status == "0"){
						$a="Moderasi";
					}else if ($result->status == "1"){
						$a="Disetujui";
					}else if ($result->status == "2"){
						$a="Ditolak";
					}
					$return .= "<tr id='{$result->_id}'>";
						$return .= '<td>
										<div class="btn-group">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fa fa-bars"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a onclick="editData(this);" data-id="'.$result->_id.'" role="button">
													<i class="fa fa-pencil-square-o"></i> Edit </a></li>
											</ul>
										</div>
									</td>';
						$return .= "<td>".date("d M Y", strtotime($result->tgl))."</td>";
						$return .= "<td>{$result->judul}</td>";
						$return .= "<td>{$a}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		return json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}
}
?>
