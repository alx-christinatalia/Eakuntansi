<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ctrl_public extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	    //helpers
	   $this->load->helper('url');
	   $this->load->model('api');
	   $this->load->library('session');
            $this->publicmodel->checkPermission();
	}
	public function cekdata()
	{
		   $gData = $this->input->post("param");
		   $field = $gData['field'];
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => $gData['tb'] , "Activity" => "get", "ParamsFilter" => $gData['field']." LIKE  '%".$gData['data']."%' "));
			$return = $this->api->execute(true);
			$return = $return->Data[0]->$field;

			$send = ($return == "" ? "gagal" : "berhasil" );

			echo json_encode($send);

	}



	public function data_klien()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "notarisklien", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(nama LIKE '%{$flt}%' or email LIKE '%{$flt}%' or alamat LIKE '%{$flt}%')";
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
					$return .= "<tr id='{$result->_id}' onclick='set_klien(this);' style='cursor:pointer' data-klien='{$result->nama}' data-id='{$result->_id}'>";
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$result->notelp}</td>";
						$newDate = date("d-M-Y", strtotime($result->tgl_daftar));
						$return .= "<td>{$newDate}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function data_layanan()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "masterlayanan", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(id_layanan LIKE '%{$flt}%' or nama LIKE '%{$flt}%')";
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
					$return .= "<tr id='{$result->_id}' onclick='set_layanan(this);' style='cursor:pointer' data-layanan='{$result->nama}' data-id='{$result->id_layanan}'>";
						$return .= "<td>{$result->id_layanan}</td>";
						$return .= "<td>{$result->nama}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}
	
	public function getdatabase()
	{
		$data = $this->input->post('table');

		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => $data , "Activity" => "get"));
		$return = $this->api->execute(true);
		foreach ($return->Data as $data) {
			$result .= $data->nama;
		}
		 


		echo json_encode($result);
	}


	public function data_officer()
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
					$return .= "<tr id='{$result->_id}' onclick='set_officer(this);' style='cursor:pointer' data-officer='{$result->nama}' data-id='{$result->id_layanan}'>";
						$return .= "<td>{$result->nama}</td>";
						$aktif = ($result->aktif == "1" ? "Aktif" : "Tidak Aktif");
						$return .= "<td>{$aktif}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function data_order()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "tb_order", 
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
					$return .= "<tr id='{$result->_id}' onclick='set_order(this);' style='cursor:pointer' data-order='{$result->nama_layanan}' data-id='{$result->_id}'>";
						$return .= "<td>{$result->_id}</td>";
						$return .= "<td>{$result->nama_klien}</td>";
						$return .= "<td>{$result->nama_layanan}</td>";
						$aktif = ($result->aktif == "1" ? "Close" : "Open");
						$return .= "<td>{$aktif}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}
	
	public function data_layanan()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "masterlayanan", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(id_layanan LIKE '%{$flt}%' or nama LIKE '%{$flt}%')";
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
					$return .= "<tr id='{$result->_id}' onclick='set_layanan(this);' style='cursor:pointer' data-layanan='{$result->nama}' data-id='{$result->id_layanan}'>";
						$return .= "<td>{$result->id_layanan}</td>";
						$return .= "<td>{$result->nama}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}
	
	public function nama_kota()
	{
		$data = $this->input->post("param");
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "inf_kota", "Activity" => "get", "ParamsFilter"	=> "lokasi_ID = '". $data["id_kabkota"]."'"));
		$kota = $this->api->execute(true);
		$kota = $kota->Data[0]->lokasi_nama;

		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "inf_provinsi", "Activity" => "get", "ParamsFilter"	=> "lokasi_propinsi = '". $data["id_prov"]."'"));
		$provinsi = $this->api->execute(true);
		$provinsi = $provinsi->Data[0]->lokasi_nama;



		echo json_encode(["kota" => $kota , "prov" =>$provinsi ]) ;
		
	}					
}
?>