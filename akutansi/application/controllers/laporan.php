<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	    //helpers
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

			$this->api->setAction("Execute");
		    $this->api->setParam(array("Target" => "finakun", "Activity" => "get", "Limit" => "1000" , "ParamsSort" => "nama asc"));
		    $data['akun'] = $this->api->execute("object");

			$this->load->view('laporan/index', $data);
		}
	}	

	//////////fungsi get tabel\\\\\\\\\\\

	//ppat
	public function tb_ppat() {
		$data = $this->input->post('param');

		$array = array(
			"Target" => "tb_order", 
			"Activity" => "get", 
			"Page" => $this->param["page"],
			"ParamsSort" => "_id DESC",
			"Limit" => 10000
		);

		$tanggal = $data["tahun"].'-'.$data["bulan"];

		$flt = "(tgl_closed LIKE '%$tanggal%')";
		$filter .= (empty($filter)) ? $flt : " AND ". $flt;

		$flt = "is_closed = '1'";
		$filter .= (empty($filter)) ? $flt : " AND ". $flt;

		$flt = "(layanan = '21' OR layanan = '22' OR layanan = '23' OR layanan = '24' OR layanan = '25')";
		$filter .= (empty($filter)) ? $flt : " AND ". $flt;

		$array['ParamsFilter'] = $filter;

		$this->api->setAction("Execute");
		$this->api->setParam($array);
		$output = $this->api->execute(true);

		$kreditpihak1[] = "";
		$kreditpihak2[] = "";
		$ppatpihak1[] = "";
		$ppatpihak2[] = "";
		foreach ($output->Data as $resp) {
			$flt1 = "id_order =".$resp->_id."";
			$flt2 = "pihak = 1";
			$flt3 = "pihak = 2";
			$flt4 = "pihak_alias = 1";
			$flt5 = "pihak_alias = 2";

			$filterkr1 = "".$flt1." and ".$flt2."";
			$filterkr2 = "".$flt1." and ".$flt3."";

			$filterpp1 = "".$flt1." and ".$flt4."";
			$filterpp2 = "".$flt1." and ".$flt5."";

			$kreditpihak1[$resp->_id] = $this->sWhere2('orderkreditpihak',$filterkr1);
			$kreditpihak2[$resp->_id] = $this->sWhere2('orderkreditpihak',$filterkr2);
			$ppatpihak1[$resp->_id] = $this->sWhere2('orderppatpihak',$filterpp1);
			$ppatpihak2[$resp->_id] = $this->sWhere2('orderppatpihak',$filterpp2);
		}	

		$return = "";
		if (!empty($output)) {
			if ($output->IsError == false) {
				foreach($output->Data as $result) { 

					$kr1 = array();
					$kr2 = array();
					$pp1 = array();
					$pp2 = array();

					$return .= "<tr id='{$result->_id}'>";
					$return .= "<td>{$result->no_akta}</td>";
					($result->tgl_closed != '0000-00-00' ? $return .= "<td>".date("d M Y", strtotime($result->tgl_closed))."</td>" : "<td></td>");
					$return .= "<td>{$result->nama_layanan}</td>";

					if (($result->layanan == '23')||($result->layanan == '24')){
						foreach($kreditpihak1[$result->_id]->Data as $term){
						  $kr1[] = $term->nama;
						}
						$return .= "<td>".implode('; ', $kr1)."</td>";
					}else{
						foreach($ppatpihak1[$result->_id]->Data as $term){
						  $pp1[] = $term->nama;
						}
						$return .= "<td>".implode('; ', $pp1)."</td>";
					}

					if (($result->layanan == '23')||($result->layanan == '24')){
						foreach($kreditpihak2[$result->_id]->Data as $term){
						  $kr2[] = $term->nama;
						}
						$return .= "<td>".implode('; ', $kr2)."</td>";
					}else{
						foreach($ppatpihak2[$result->_id]->Data as $term){
						  $pp2[] = $term->nama;
						}
						$return .= "<td>".implode('; ', $pp2)."</td>";
					}					
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";

		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	//repertorium
	public function tb_repertorium(){
		$data = $this->input->post("param");

		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);

		$filter= "";

		$bulan = $data["bulan"];
		$tahun = $data["tahun"];
		$m_tgl = $data["tahun"].'-'.$data["bulan"];

		$flt = "(tgl_closed LIKE '%$m_tgl%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;	

		$flt = "(layanan LIKE '%51%' or layanan LIKE '%52%' or layanan LIKE '%53%' or layanan LIKE '%81%' or layanan LIKE '%21%' or layanan LIKE '%22%' or layanan LIKE '%23%' or kategori LIKE '%jualbelisewa%' or kategori LIKE '%kerjasama%' or kategori LIKE '%badanhukum%' or kategori LIKE '%fidusia%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;	

		$flt = "is_closed = '". 1 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;
		
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10000;
		$arr = array_merge($arr, array("Limit" => $limit));
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);		
		
		$return = "";
		if(!empty($output)) {
			if($output->IsError == false) {
				foreach($output->Data as $result) { 
					$return .= "<tr id='{$result->_id}'>";
						$return .= "<td>{$result->no_repertorium}</td>";
						$return .= "<td>".($result->tgl_closed != '0000-00-00' ? date("d M Y", strtotime($result->tgl_closed)) : "-")."</td>";
						$return .= "<td>{$result->sifat_akta}</td>";
						$return .= "<td>{$result->nama_klien}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	//waamerking
	public function tb_waamerking(){
		$data = $this->input->post("param");

		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);

		$filter= "";

		$bulan = $data["bulan"];
		$tahun = $data["tahun"];
		$m_tgl = $data["tahun"].'-'.$data["bulan"];

		$flt = "(tgl_order LIKE '%$m_tgl%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$flt = "layanan = '". 72 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
		
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10000;
		$arr = array_merge($arr, array("Limit" => $limit));
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);	

		$umum[] = "";
		$pihak[] = "";
		foreach ($output->Data as $resp) {
			$umum[$resp->_id] = $this->sWhere('orderwaarmarkingumum','id_order',$resp->_id)->Data[0];
			$pihak[$resp->_id] = $this->sWhere('orderwaarmarkingpihak','id_order',$resp->_id);
		}	

		$return = "";
		if(!empty($output)) {
			if($output->IsError == false) {
				$no=0;
				foreach($output->Data as $resp) { 
					$nama = array();
					$no++;
					$return .= "<tr id='{$result->_id}'>";
						$return .= "<td>{$no}</td>";
						$return .= "<td>{$resp->no_akta}</td>";
						$return .= "<td>".date("d M Y", strtotime($umum[$resp->_id]->tgl_surat))."</td>";
						$return .= "<td>".date("d M Y", strtotime($umum[$resp->_id]->tgl_daftar))."</td>";
						$return .= "<td>{$umum[$resp->_id]->sifat_waar}</td>";
						foreach($pihak[$resp->_id]->Data as $term){
						  $nama[] = $term->nama;
						}
						$return .= "<td>".implode('; ', $nama)."</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	//legalisasi
	public function tb_legalisasi(){
		$data = $this->input->post("param");

		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);

		$filter= "";

		$bulan = $data["bulan"];
		$tahun = $data["tahun"];
		$m_tgl = $data["tahun"].'-'.$data["bulan"];

		$flt = "(tgl_order LIKE '%$m_tgl%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$flt = "layanan = '". 71 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
		
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10000;
		$arr = array_merge($arr, array("Limit" => $limit));
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);	

		$umum[] = "";
		$pihak[] = "";
		foreach ($output->Data as $resp) {
			$umum[$resp->_id] = $this->sWhere('orderlegalisasiumum','id_order',$resp->_id)->Data[0];
			$pihak[$resp->_id] = $this->sWhere('orderlegalisasipihak','id_order',$resp->_id);
		}	

		$return = "";
		if(!empty($output)) {
			if($output->IsError == false) {
				$no=0;
				foreach($output->Data as $resp) { 
					$nama = array();
					$no++;
					$return .= "<tr id='{$resp->_id}'>";
						$return .= "<td>{$no}</td>";
						$return .= "<td>{$resp->no_akta}</td>";
						$return .= "<td>".date("d M Y", strtotime($umum[$resp->_id]->tgl_leg))."</td>";
						$return .= "<td>{$resp->sifat_akta}</td>";
						foreach($pihak[$resp->_id]->Data as $term){
						  $nama[] = $term->nama;
						}
						$return .= "<td>".implode('; ', $nama)."</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	//wasiat
	public function tb_wasiat(){
		$data = $this->input->post("param");

		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);

		$filter= "";

		$bulan = $data["bulan"];
		$tahun = $data["tahun"];
		$m_tgl = $data["tahun"].'-'.$data["bulan"];

		$flt = "(tgl_closed LIKE '%$m_tgl%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;	

		$flt = "is_closed = '". 1 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$flt = "layanan = '". 81 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
		
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10000;
		$arr = array_merge($arr, array("Limit" => $limit));
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);	

		$umum[] = "";
		$pihak[] = "";
		foreach ($output->Data as $resp) {
			$umum[$resp->_id] = $this->sWhere('orderwasiatumum','id_order',$resp->_id)->Data[0];
			$flt1 = "id_order =".$resp->_id."";
			$flt2 = "pihak_sbg =1";
			$filter = "".$flt1." and ".$flt2."";
			$pihak[$resp->_id] = $this->sWhere2('orderwasiatpihak',$filter)->Data[0];
		}	

		$return = "";
		if(!empty($output)) {
			if($output->IsError == false) {
				$no=0;
				foreach($output->Data as $resp) { 
					$no++;
					$return .= "<tr id='{$result->_id}'>";
						$return .= "<td>{$no}</td>";
						$return .= "<td>{$pihak[$resp->_id]->nama}</td>";
						$return .= "<td>{$pihak[$resp->_id]->nama_dahulu}</td>";
						$return .= "<td>{$pihak[$resp->_id]->tmp_lahir}</td>";
						$return .= "<td>".date("d-M-Y", strtotime($pihak[$resp->_id]->tgl_lahir))."</td>";
						$return .= "<td>{$pihak[$resp->_id]->pekerjaan}</td>";
						$return .= "<td>{$pihak[$resp->_id]->alamat_terahir}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	//protes
	public function tb_protes(){

		$data = $this->input->post("param");

		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);

		$filter= "";

		$bulan = $data["bulan"];
		$tahun = $data["tahun"];
		$m_tgl = $data["tahun"].'-'.$data["bulan"];

		$flt = "(tgl_order LIKE '%$m_tgl%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$flt = "layanan = '". 74 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
		
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10000;
		$arr = array_merge($arr, array("Limit" => $limit));
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);	

		$umum[] = "";
		$pihak[] = "";
		foreach ($output->Data as $resp) {
			$umum[$resp->_id] = $this->sWhere('orderprotesumum','id_order',$resp->_id)->Data[0];
			$pihak[$resp->_id] = $this->sWhere('orderprotespihak','id_order',$resp->_id)->Data[0];
		}	

		$return = "";
		if(!empty($output)) {
			if($output->IsError == false) {
				$no=0;
				foreach($output->Data as $result) { 
					$return .= "<tr id='{$result->_id}'>";
						$return .= "<td>".date("d-M-Y", strtotime($umum[$result->_id]->tgl_akta))."</td>";
						$return .= "<td>{$umum[$result->_id]->no_akta}</td>";
						$return .= "<td>{$umum[$result->_id]->sifat_akta}</td>";
						$return .= "<td>{$result->nama_officer}</td>";
						$return .= "<td>{$pihak[$result->_id]->nama}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	//covernote
	public function tb_covernote(){
		$data = $this->input->post("param");

		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);

		$filter= "";

		$bulan = $data["bulan"];
		$tahun = $data["tahun"];
		$m_tgl = $data["tahun"].'-'.$data["bulan"];

		$flt = "(tgl_order LIKE '%$m_tgl%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$flt = "layanan = '". 73 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
		
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10000;
		$arr = array_merge($arr, array("Limit" => $limit));
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);	

		$umum[] = "";
		foreach ($output->Data as $resp) {
			$umum[$resp->_id] = $this->sWhere('ordercovernote','id_order',$resp->_id)->Data[0];
		}	

		$return = "";
		if(!empty($output)) {
			if($output->IsError == false) {
				foreach($output->Data as $result) { 
					$no++;
					$return .= "<tr id='{$result->_id}'>";
						$return .= "<td>{$umum[$result->_id]->no_surat}</td>";
						$return .= "<td>".date("d-M-Y", strtotime($umum[$result->_id]->tgl_surat))."</td>";
						$return .= "<td>{$umum[$result->_id]->kepada}</td>";
						$return .= "<td>{$umum[$result->_id]->perihal}</td>";
						$return .= "<td>{$result->nama_officer}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	//daftar kekurangan dokumen
	public function tb_dkd(){
		$data = $this->input->post("param");

		$arr = array("Target" 	=> "orderdokumen", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);

		$filter= "";

		$flt = "status = '". 0 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
		
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10000;
		$arr = array_merge($arr, array("Limit" => $limit));
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);


		$bulan = $data["bulan"];
		$tahun = $data["tahun"];
		$m_tgl = $data["tahun"].'-'.$data["bulan"];	

		$order[] = "";
		foreach ($output->Data as $resp) {
			$flt1 = "_id =".$resp->id_order."";
			$order[$resp->id_order] = $this->sWhere2('tb_order',$flt1)->Data[0];
		}	

		$return = "";
		if(!empty($output)) {
			if($output->IsError == false) {
				$no=0;
				foreach($output->Data as $result) { 
					if ($order[$result->id_order] != null){
					$no++;
					$return .= "<tr id='{$result->_id}'>";
						$return .= "<td>{$order[$result->id_order]->_id}</td>";
						$return .= "<td>{$order[$result->id_order]->nama_klien}</td>";
						$return .= "<td>{$order[$result->id_order]->nama_layanan}</td>";
						$return .= "<td>".date("d-M-Y", strtotime($order[$result->id_order]->tgl_order))."</td>";
						$return .= "<td>{$order[$result->id_order]->nama_officer}</td>";
						$return .= "<td>{$result->nama}</td>";
					$return .= "</tr>";
					}
				}
			} else $return .= "<tr><td colspan='4'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='4'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	//////////fungsi cetak\\\\\\\\\

	public function cetakdaftarakta(){
		$data = $this->input->post();

		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);

		$filter= "";

		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];
		$m_tgl = $data["intahun"].'-'.$data["inbulan"];

		$flt = "(tgl_closed LIKE '%$m_tgl%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;	

		$flt = "(layanan LIKE '%51%' or layanan LIKE '%52%' or layanan LIKE '%53%' or layanan LIKE '%81%' or layanan LIKE '%21%' or layanan LIKE '%22%' or layanan LIKE '%23%' or kategori LIKE '%jualbelisewa%' or kategori LIKE '%kerjasama%' or kategori LIKE '%badanhukum%' or kategori LIKE '%fidusia%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;	

		$flt = "is_closed = '". 1 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;
		
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10000;
		$arr = array_merge($arr, array("Limit" => $limit));
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);			

		if($bulan == "01"){$nama = "Januari";}else if($bulan == "2"){$nama = "Februari";}else if($bulan == "3"){$nama = "Maret";}else if($bulan == "4"){$nama = "April";}else if($bulan == "5"){$nama = "Mei";}else if($bulan == "6"){$nama = "Juni";}else if($bulan == "7"){$nama = "Juli";}else if($bulan == "8"){$nama = "Agustus";}else if($bulan == "9"){$nama = "September";}else if($bulan == "10"){$nama = "Oktober";}else if($bulan == "11"){$nama = "November";}else if($bulan == "12"){$nama = "Desember";}
		$this->load->view("laporan/cetakdaftarakta",array('akta' => $output, 'bulan' => $nama, 'tahun' => $tahun));	
	}

	public function cetaklegalisasi(){
		$data = $this->input->post();

		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);

		$filter= "";

		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];
		$m_tgl = $data["intahun"].'-'.$data["inbulan"];

		$flt = "(tgl_order LIKE '%$m_tgl%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$flt = "layanan = '". 71 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
		
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10000;
		$arr = array_merge($arr, array("Limit" => $limit));
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);	

		$umum[] = "";
		$pihak[] = "";
		foreach ($output->Data as $resp) {
			$umum[$resp->_id] = $this->sWhere('orderlegalisasiumum','id_order',$resp->_id)->Data[0];
			$pihak[$resp->_id] = $this->sWhere('orderlegalisasipihak','id_order',$resp->_id);
		}	

		if($bulan == "01"){$nama = "Januari";}else if($bulan == "2"){$nama = "Februari";}else if($bulan == "3"){$nama = "Maret";}else if($bulan == "4"){$nama = "April";}else if($bulan == "5"){$nama = "Mei";}else if($bulan == "6"){$nama = "Juni";}else if($bulan == "7"){$nama = "Juli";}else if($bulan == "8"){$nama = "Agustus";}else if($bulan == "9"){$nama = "September";}else if($bulan == "10"){$nama = "Oktober";}else if($bulan == "11"){$nama = "November";}else if($bulan == "12"){$nama = "Desember";}

		$this->load->view("laporan/cetaklegalisasi",array('legalisasi' => $output, 'bulan' => $nama, 'tahun' => $tahun , 'umum' => $umum , 'pihak' => $pihak));	
	}

	public function cetakregister(){
		$data = $this->input->post();

		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);

		$filter= "";

		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];
		$m_tgl = $data["intahun"].'-'.$data["inbulan"];

		$flt = "(tgl_order LIKE '%$m_tgl%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$flt = "layanan = '". 72 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
		
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10000;
		$arr = array_merge($arr, array("Limit" => $limit));
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);	

		$umum[] = "";
		$pihak[] = "";
		foreach ($output->Data as $resp) {
			$umum[$resp->_id] = $this->sWhere('orderwaarmarkingumum','id_order',$resp->_id)->Data[0];
			$pihak[$resp->_id] = $this->sWhere('orderwaarmarkingpihak','id_order',$resp->_id);
		}	

		if($bulan == "01"){$nama = "Januari";}else if($bulan == "2"){$nama = "Februari";}else if($bulan == "3"){$nama = "Maret";}else if($bulan == "4"){$nama = "April";}else if($bulan == "5"){$nama = "Mei";}else if($bulan == "6"){$nama = "Juni";}else if($bulan == "7"){$nama = "Juli";}else if($bulan == "8"){$nama = "Agustus";}else if($bulan == "9"){$nama = "September";}else if($bulan == "10"){$nama = "Oktober";}else if($bulan == "11"){$nama = "November";}else if($bulan == "12"){$nama = "Desember";}

		$this->load->view("laporan/cetakwaamerking",array('register' => $output, 'bulan' => $nama, 'tahun' => $tahun , 'umum' => $umum , 'pihak' => $pihak));	
	}

	public function cetakdkd(){		
		$data = $this->input->post();

		$arr = array("Target" 	=> "orderdokumen", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);

		$filter= "";

		$flt = "status = '". 0 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
		
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10000;
		$arr = array_merge($arr, array("Limit" => $limit));
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);


		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];
		$m_tgl = $data["intahun"].'-'.$data["inbulan"];	

		$order[] = "";
		foreach ($output->Data as $resp) {
			$flt1 = "_id =".$resp->id_order."";
			$order[$resp->id_order] = $this->sWhere2('tb_order',$flt1)->Data[0];
		}	

		if($bulan == "01"){$nama = "Januari";}else if($bulan == "2"){$nama = "Februari";}else if($bulan == "3"){$nama = "Maret";}else if($bulan == "4"){$nama = "April";}else if($bulan == "5"){$nama = "Mei";}else if($bulan == "6"){$nama = "Juni";}else if($bulan == "7"){$nama = "Juli";}else if($bulan == "8"){$nama = "Agustus";}else if($bulan == "9"){$nama = "September";}else if($bulan == "10"){$nama = "Oktober";}else if($bulan == "11"){$nama = "November";}else if($bulan == "12"){$nama = "Desember";}

		$this->load->view("laporan/cetakdkd",array('dkd' => $output, 'bulan' => $nama, 'tahun' => $tahun , 'order' => $order));	
	}

	public function cetakdp(){
		$data = $this->input->post();

		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);

		$filter= "";

		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];
		$m_tgl = $data["intahun"].'-'.$data["inbulan"];

		$flt = "(tgl_order LIKE '%$m_tgl%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$flt = "layanan = '". 74 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
		
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10000;
		$arr = array_merge($arr, array("Limit" => $limit));
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);	

		$umum[] = "";
		$pihak[] = "";
		foreach ($output->Data as $resp) {
			$umum[$resp->_id] = $this->sWhere('orderprotesumum','id_order',$resp->_id)->Data[0];
			$pihak[$resp->_id] = $this->sWhere('orderprotespihak','id_order',$resp->_id)->Data[0];
		}	

		if($bulan == "01"){$nama = "Januari";}else if($bulan == "2"){$nama = "Februari";}else if($bulan == "3"){$nama = "Maret";}else if($bulan == "4"){$nama = "April";}else if($bulan == "5"){$nama = "Mei";}else if($bulan == "6"){$nama = "Juni";}else if($bulan == "7"){$nama = "Juli";}else if($bulan == "8"){$nama = "Agustus";}else if($bulan == "9"){$nama = "September";}else if($bulan == "10"){$nama = "Oktober";}else if($bulan == "11"){$nama = "November";}else if($bulan == "12"){$nama = "Desember";}

		$this->load->view("laporan/cetakprotes",array('protes' => $output, 'bulan' => $nama, 'tahun' => $tahun , 'umum' => $umum , 'pihak' => $pihak));	
	}

	public function cetakcovernote(){
		$data = $this->input->post();

		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);

		$filter= "";

		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];
		$m_tgl = $data["intahun"].'-'.$data["inbulan"];

		$flt = "(tgl_order LIKE '%$m_tgl%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$flt = "layanan = '". 73 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
		
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10000;
		$arr = array_merge($arr, array("Limit" => $limit));
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);	

		$umum[] = "";
		foreach ($output->Data as $resp) {
			$umum[$resp->_id] = $this->sWhere('ordercovernote','id_order',$resp->_id)->Data[0];
		}	

		if($bulan == "01"){$nama = "Januari";}else if($bulan == "2"){$nama = "Februari";}else if($bulan == "3"){$nama = "Maret";}else if($bulan == "4"){$nama = "April";}else if($bulan == "5"){$nama = "Mei";}else if($bulan == "6"){$nama = "Juni";}else if($bulan == "7"){$nama = "Juli";}else if($bulan == "8"){$nama = "Agustus";}else if($bulan == "9"){$nama = "September";}else if($bulan == "10"){$nama = "Oktober";}else if($bulan == "11"){$nama = "November";}else if($bulan == "12"){$nama = "Desember";}

		$this->load->view("laporan/cetakcovernote",array('covernote' => $output, 'bulan' => $nama, 'tahun' => $tahun , 'umum' => $umum));	
	}

	public function cetakwasiat(){
		$data = $this->input->post();

		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);

		$filter= "";

		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];
		$m_tgl = $data["intahun"].'-'.$data["inbulan"];

		$flt = "(tgl_closed LIKE '%$m_tgl%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;	

		$flt = "is_closed = '". 1 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$flt = "layanan = '". 81 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
		
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10000;
		$arr = array_merge($arr, array("Limit" => $limit));
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);	

		$umum[] = "";
		$pihak[] = "";
		foreach ($output->Data as $resp) {
			$umum[$resp->_id] = $this->sWhere('orderwasiatumum','id_order',$resp->_id)->Data[0];
			$flt1 = "id_order =".$resp->_id."";
			$flt2 = "pihak_sbg =1";
			$filter = "".$flt1." and ".$flt2."";
			$pihak[$resp->_id] = $this->sWhere2('orderwasiatpihak',$filter)->Data[0];
		}	

		if($bulan == "01"){$nama = "Januari";}else if($bulan == "2"){$nama = "Februari";}else if($bulan == "3"){$nama = "Maret";}else if($bulan == "4"){$nama = "April";}else if($bulan == "5"){$nama = "Mei";}else if($bulan == "6"){$nama = "Juni";}else if($bulan == "7"){$nama = "Juli";}else if($bulan == "8"){$nama = "Agustus";}else if($bulan == "9"){$nama = "September";}else if($bulan == "10"){$nama = "Oktober";}else if($bulan == "11"){$nama = "November";}else if($bulan == "12"){$nama = "Desember";}

		$this->load->view("laporan/cetakwasiat",array('wasiat' => $output, 'bulan' => $nama, 'tahun' => $tahun , 'umum' => $umum , 'pihak' => $pihak));
	}

	public function cetakppat(){
		$data = $this->input->post();

		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];

		$array = array(
			"Target" => "tb_order", 
			"Activity" => "get", 
			"Page" => $this->param["page"],
			"ParamsSort" => "_id DESC",
			"Limit" => 10000
		);

		$tanggal = $data["intahun"].'-'.$data["inbulan"];

		$flt = "(tgl_closed LIKE '%$tanggal%')";
		$filter .= (empty($filter)) ? $flt : " AND ". $flt;

		$flt = "is_closed = '1'";
		$filter .= (empty($filter)) ? $flt : " AND ". $flt;

		$flt = "(layanan = '21' OR layanan = '22' OR layanan = '23' OR layanan = '24' OR layanan = '25')";
		$filter .= (empty($filter)) ? $flt : " AND ". $flt;

		$array['ParamsFilter'] = $filter;

		$this->api->setAction("Execute");
		$this->api->setParam($array);
		$output = $this->api->execute(true);

		$umum[] = "";
		$kreditumum[] = "";
		$kreditpihak1[] = "";
		$kreditpihak2[] = "";
		$ppatpihak1[] = "";
		$ppatpihak2[] = "";
		foreach ($output->Data as $resp) {
			$flt1 = "id_order =".$resp->_id."";
			$flt2 = "pihak = 1";
			$flt3 = "pihak = 2";
			$flt4 = "pihak_alias = 1";
			$flt5 = "pihak_alias = 2";

			$filterkr1 = "".$flt1." and ".$flt2."";
			$filterkr2 = "".$flt1." and ".$flt3."";

			$filterpp1 = "".$flt1." and ".$flt4."";
			$filterpp2 = "".$flt1." and ".$flt5."";

			$kreditpihak1[$resp->_id] = $this->sWhere2('orderkreditpihak',$filterkr1);
			$kreditpihak2[$resp->_id] = $this->sWhere2('orderkreditpihak',$filterkr2);
			$ppatpihak1[$resp->_id] = $this->sWhere2('orderppatpihak',$filterpp1);
			$ppatpihak2[$resp->_id] = $this->sWhere2('orderppatpihak',$filterpp2);

			$umum[$resp->_id] = $this->sWhere('orderppatumum','id_order',$resp->_id)->Data[0];
			$kreditumum[$resp->_id] = $this->sWhere('orderkreditumum','id_order',$resp->_id)->Data[0];
		}	

		$this->load->view("laporan/cetakppat", array('ppat' => $output , 'nama' => $nama , 'tahun' => $tahun , 'umum' => $umum , 'kreditumum' => $kreditumum , 'kreditpihak1' => $kreditpihak1 , 'kreditpihak2' => $kreditpihak2 , 'ppatpihak1' => $ppatpihak1 , 'ppatpihak2' => $ppatpihak2));
	}

	public function cetakklapper()
	{
		$data = $this->input->post();

		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];

		$m_tgl = $tahun."-".$bulan;

		$arr = array("Target" 	=> "tb_order", 
		   "Activity"	=> "get",
		   	"Limit" => "1000");
		$filter = "" ;
		
		if(!empty($data["ppbulan"])) {
			$filter .= "(tgl_order LIKE '%{$m_tgl}%')";
		}

		if(!empty($data["intahun"])) {
			$flt = "is_closed = 0";
			$filter .= (empty($filter)) ? $flt : " AND ". $flt;
		}

		if(!empty($data["inbulan"])) {
			$flt = "(layanan = '11' OR layanan = '12' OR layanan = '13' OR layanan = '14' OR layanan = '15' OR layanan = '16' OR layanan = '17' OR layanan = '18' OR layanan = '19' OR layanan = '21' OR layanan = '22' OR layanan = '24' OR layanan = '25' OR layanan = '31' OR layanan = '32' OR layanan = '33' OR layanan = '41' OR layanan = '42' OR layanan = '51' OR layanan = '52' OR layanan = '53' OR layanan = '61' OR layanan = '62' OR layanan = '81')";
			$filter .= (empty($filter)) ? $flt : " AND ". $flt;
		}

		$arr["ParamsFilter"] = $filter;

		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);
		echo json_encode($output);
	}

	public function sWhere($tb,$field,$_id)
    {
	    $this->api->setAction("Execute");
	    $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = '".$_id."' " ));
	    $data = $this->api->execute(true);
	    return $data;
    }

    public function sWhere2($tb,$filter)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => $filter ));
        $data = $this->api->execute(true);
        return $data;
    }

	public function sWhere3($tb)
    {
	    $this->api->setAction("Execute");
	    $this->api->setParam(array("Target" => $tb , "Activity" => "get"));
	    $data = $this->api->execute(true);
	    return $data;
    }
    
}