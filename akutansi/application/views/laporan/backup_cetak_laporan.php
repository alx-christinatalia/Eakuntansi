	//Fungsi Cetak
	
	public function cetakdaftarakta(){		
		$data = $this->input->post();

		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];
		$m_tgl = $data["intahun"].'-'.$data["inbulan"];

		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get");
		

		$filter = "";

		$flt = "is_closed = '". 1 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		if(!empty($m_tgl)) {
			$flt = "(tgl_closed LIKE '%$m_tgl%')";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		$arr["ParamsFilter"] = $filter;
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);

		if($bulan == "01"){$nama = "Januari";}else if($bulan == "2"){$nama = "Februari";}else if($bulan == "3"){$nama = "Maret";}else if($bulan == "4"){$nama = "April";}else if($bulan == "5"){$nama = "Mei";}else if($bulan == "6"){$nama = "Juni";}else if($bulan == "7"){$nama = "Juli";}else if($bulan == "8"){$nama = "Agustus";}else if($bulan == "9"){$nama = "September";}else if($bulan == "10"){$nama = "Oktober";}else if($bulan == "11"){$nama = "November";}else if($bulan == "12"){$nama = "Desember";}

		$this->load->view("laporan/cetakdaftarakta",array('akta' => $output, 'nama' => $nama,  'tahun' => $tahun));
	}

	/*public function cetakppat() {
		$data = $this->input->post();

		$arr = array(
			"Target" => "tb_order",
			"Activity" => "get",
			"Page" => $this->param["page"]
		);

		$filter = "";

		$ispdf = $data["ispdf"];

		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];
		$m_tgl = $data["intahun"].'-'.$data["inbulan"];

		$flt = "(tgl_closed LIKE '%$m_tgl%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;	

		$flt = "is_closed = '". 1 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$flt = "(layanan LIKE '%21%' or layanan LIKE '%22%' or layanan LIKE '%23%' or layanan LIKE '%24%' or layanan LIKE '%25%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
		
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10;
		$arr = array_merge($arr, array("Limit" => $limit));
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
								   
		switch ($bulan) {
			case '01':
				$nama = 'Januari';
				break;

			case '02':
				$nama = 'Februari';
				break;

			case '03':
				$nama = 'Maret';
				break;

			case '04':
				$nama = 'April';
				break;

			case '05':
				$nama = 'Mei';
				break;

			case '06':
				$nama = 'Juni';
				break;

			case '07':
				$nama = 'Juli';
				break;

			case '08':
				$nama = 'Agustus';
				break;

			case '09':
				$nama = 'September';
				break;

			case '10':
				$nama = 'Oktober';
				break;

			case '11':
				$nama = 'November';
				break;

			case '12':
				$nama = 'Desember';
				break;
		}

		$output = $this->api->execute(true);	

		$umum[] = "";
		$pihak[] = "";
		$kreditumum[] = "";
		$kreditpihak[] = "";
		$pihak = $this->sWhere3('orderppatpihak');
		$kreditpihak = $this->sWhere3('orderkreditpihak');

		foreach ($output->Data as $resp) {
			$umum[$resp->_id] = $this->sWhere('orderppatumum','id_order',$resp->_id)->Data[0];
			$kreditumum[$resp->_id] = $this->sWhere('orderkreditumum','id_order',$resp->_id)->Data[0];
		}	

		$this->load->view("laporan/cetakppat", array('ppat' => $output , 'nama' => $nama , 'tahun' => $tahun , 'umum' => $umum , 'pihak' => $pihak , 'kreditumum' => $kreditumum , 'kreditpihak' => $kreditpihak));

		$html = $this->output->get_output();
		$this->dompdf->set_paper('letter', 'landscape');
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan PPAT.pdf", array("Attachment" => $ispdf));
	}*/

	/*public function cetaklegalisasi(){
		$data = $this->input->post();

		$arr = array("Target" 	=> "tb_order", 
					   "Activity"	=> "get", 
					   "Page"  		=> $this->param["page"]);

		$filter= "";

		$ispdf = $data["ispdf"];

		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];
		$m_tgl = $data["intahun"].'-'.$data["inbulan"];

		$flt = "(tgl_order LIKE '%$m_tgl%' or tgl_closed LIKE '%$m_tgl%' )";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$flt = "layanan = '". 71 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
			
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10;
		$arr = array_merge($arr, array("Limit" => $limit));
			
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	

		if($bulan == "01"){$nama = "Januari";}else if($bulan == "2"){$nama = "Februari";}else if($bulan == "3"){$nama = "Maret";}else if($bulan == "4"){$nama = "April";}else if($bulan == "5"){$nama = "Mei";}else if($bulan == "6"){$nama = "Juni";}else if($bulan == "7"){$nama = "Juli";}else if($bulan == "8"){$nama = "Agustus";}else if($bulan == "9"){$nama = "September";}else if($bulan == "10"){$nama = "Oktober";}else if($bulan == "11"){$nama = "November";}else if($bulan == "12"){$nama = "Desember";}
							   
		$output = $this->api->execute(true);	

		$umum[] = "";
		$pihak[] = "";
		foreach ($output->Data as $resp) {
			$umum[$resp->_id] = $this->sWhere('orderlegalisasiumum','id_order',$resp->_id)->Data[0];
			$pihak[$resp->_id] = $this->sWhere('orderlegalisasipihak','id_order',$resp->_id)->Data[0];
		}	

		$this->load->view("laporan/cetaklegalisasi",array('legalisasi' => $output , 'nama' => $nama , 'tahun' => $tahun , 'umum' => $umum , 'pihak' => $pihak));

		$html = $this->output->get_output();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan Legalisasi.pdf", array("Attachment" => $ispdf));
	}

	public function cetakregister(){
		$data = $this->input->post();

		$arr = array("Target" 	=> "tb_order", 
					   "Activity"	=> "get", 
					   "Page"  		=> $this->param["page"]);

		$filter= "";

		$ispdf = $data["ispdf"];

		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];
		$m_tgl = $data["intahun"].'-'.$data["inbulan"];

		$flt = "(tgl_order LIKE '%$m_tgl%' or tgl_closed LIKE '%$m_tgl%' )";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$flt = "layanan = '". 72 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
			
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10;
		$arr = array_merge($arr, array("Limit" => $limit));
			
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	

		if($bulan == "01"){$nama = "Januari";}else if($bulan == "2"){$nama = "Februari";}else if($bulan == "3"){$nama = "Maret";}else if($bulan == "4"){$nama = "April";}else if($bulan == "5"){$nama = "Mei";}else if($bulan == "6"){$nama = "Juni";}else if($bulan == "7"){$nama = "Juli";}else if($bulan == "8"){$nama = "Agustus";}else if($bulan == "9"){$nama = "September";}else if($bulan == "10"){$nama = "Oktober";}else if($bulan == "11"){$nama = "November";}else if($bulan == "12"){$nama = "Desember";}
							   
			$output = $this->api->execute(true);	

			$umum[] = "";
			$pihak[] = "";
			foreach ($output->Data as $resp) {
				$umum[$resp->_id] = $this->sWhere('orderwaamerkingumum','id_order',$resp->_id)->Data[0];
				$pihak[$resp->_id] = $this->sWhere('orderwaamerkingpihak','id_order',$resp->_id)->Data[0];
			}	

		$this->load->view("laporan/cetakwaamerking",array('waamerking' => $output , 'nama' => $nama , 'tahun' => $tahun , 'umum' => $umum , 'pihak' => $pihak));

		$html = $this->output->get_output();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan Waamerking.pdf", array("Attachment" => $ispdf));
	}

	public function cetakdp(){
		$data = $this->input->post();

		$arr = array("Target" 	=> "tb_order", 
					   "Activity"	=> "get", 
					   "Page"  		=> $this->param["page"]);

		$filter= "";

		$ispdf = $data["ispdf"];

		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];
		$m_tgl = $data["intahun"].'-'.$data["inbulan"];

		$flt = "(tgl_order LIKE '%$m_tgl%' or tgl_closed LIKE '%$m_tgl%' )";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$flt = "layanan = '". 74 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
			
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10;
		$arr = array_merge($arr, array("Limit" => $limit));
			
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	

		if($bulan == "01"){$nama = "Januari";}else if($bulan == "2"){$nama = "Februari";}else if($bulan == "3"){$nama = "Maret";}else if($bulan == "4"){$nama = "April";}else if($bulan == "5"){$nama = "Mei";}else if($bulan == "6"){$nama = "Juni";}else if($bulan == "7"){$nama = "Juli";}else if($bulan == "8"){$nama = "Agustus";}else if($bulan == "9"){$nama = "September";}else if($bulan == "10"){$nama = "Oktober";}else if($bulan == "11"){$nama = "November";}else if($bulan == "12"){$nama = "Desember";}
							   
			$output = $this->api->execute(true);	

			$umum[] = "";
			$pihak[] = "";
			foreach ($output->Data as $resp) {
				$umum[$resp->_id] = $this->sWhere('orderprotesumum','id_order',$resp->_id)->Data[0];
				$pihak[$resp->_id] = $this->sWhere('orderprotespihak','id_order',$resp->_id)->Data[0];
			}	

		$this->load->view("laporan/cetakprotes",array('protes' => $output , 'nama' => $nama , 'tahun' => $tahun , 'umum' => $umum , 'pihak' => $pihak));

		$html = $this->output->get_output();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan Protes.pdf", array("Attachment" => $ispdf));
	}

	public function cetakcovernote(){
		$data = $this->input->post();

		$arr = array("Target" 	=> "tb_order", 
					   "Activity"	=> "get", 
					   "Page"  		=> $this->param["page"]);

		$filter= "";

		$ispdf = $data["ispdf"];

		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];
		$m_tgl = $data["intahun"].'-'.$data["inbulan"];

		$flt = "(tgl_order LIKE '%$m_tgl%' or tgl_closed LIKE '%$m_tgl%' )";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$flt = "layanan = '". 73 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
			
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10;
		$arr = array_merge($arr, array("Limit" => $limit));
			
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	

		if($bulan == "01"){$nama = "Januari";}else if($bulan == "2"){$nama = "Februari";}else if($bulan == "3"){$nama = "Maret";}else if($bulan == "4"){$nama = "April";}else if($bulan == "5"){$nama = "Mei";}else if($bulan == "6"){$nama = "Juni";}else if($bulan == "7"){$nama = "Juli";}else if($bulan == "8"){$nama = "Agustus";}else if($bulan == "9"){$nama = "September";}else if($bulan == "10"){$nama = "Oktober";}else if($bulan == "11"){$nama = "November";}else if($bulan == "12"){$nama = "Desember";}
							   
			$output = $this->api->execute(true);	

			$umum[] = "";
			foreach ($output->Data as $resp) {
				$umum[$resp->_id] = $this->sWhere('orderconvernote','id_order',$resp->_id)->Data[0];
			}		

		$this->load->view("laporan/cetakcovernote",array('covernote' => $output , 'nama' => $nama , 'tahun' => $tahun , 'umum' => $umum));

		$html = $this->output->get_output();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan Protes.pdf", array("Attachment" => $ispdf));
	}

	public function cetakwasiat(){
		$data = $this->input->post();

		$arr = array("Target" 	=> "tb_order", 
					   "Activity"	=> "get", 
					   "Page"  		=> $this->param["page"]);

		$filter= "";

		$ispdf = $data["ispdf"];

		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];
		$m_tgl = $data["intahun"].'-'.$data["inbulan"];

		$flt = "(tgl_closed LIKE '%$m_tgl%')";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;	

		$flt = "layanan = '". 81 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$flt = "is_closed = '". 1 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;
			
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10;
		$arr = array_merge($arr, array("Limit" => $limit));
			
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	

		if($bulan == "01"){$nama = "Januari";}else if($bulan == "2"){$nama = "Februari";}else if($bulan == "3"){$nama = "Maret";}else if($bulan == "4"){$nama = "April";}else if($bulan == "5"){$nama = "Mei";}else if($bulan == "6"){$nama = "Juni";}else if($bulan == "7"){$nama = "Juli";}else if($bulan == "8"){$nama = "Agustus";}else if($bulan == "9"){$nama = "September";}else if($bulan == "10"){$nama = "Oktober";}else if($bulan == "11"){$nama = "November";}else if($bulan == "12"){$nama = "Desember";}
							   
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

		$this->load->view("laporan/cetakwasiat",array('wasiat' => $output , 'nama' => $nama , 'tahun' => $tahun , 'pihak' => $pihak));

		$html = $this->output->get_output();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan Wasiat.pdf", array("Attachment" => $ispdf));
	}

	// Cetak Laporan Klaper
	public function cetakklapper() {
		$this->load->model('Klapper_model', 'model');

		$bulan = $this->input->post('inbulan');
		$data['tahun'] = $this->input->post('intahun');

		$tanggal = $data['tahun']."-".$bulan;

		switch ($bulan) {
			case '01':
				$data['bulan'] = 'Januari';
				break;

			case '02':
				$data['bulan'] = 'Februari';
				break;

			case '03':
				$data['bulan'] = 'Maret';
				break;

			case '04':
				$data['bulan'] = 'April';
				break;

			case '05':
				$data['bulan'] = 'Mei';
				break;

			case '06':
				$data['bulan'] = 'Juni';
				break;

			case '07':
				$data['bulan'] = 'Juli';
				break;

			case '08':
				$data['bulan'] = 'Agustus';
				break;

			case '09':
				$data['bulan'] = 'September';
				break;

			case '10':
				$data['bulan'] = 'Oktober';
				break;

			case '11':
				$data['bulan'] = 'November';
				break;

			case '12':
				$data['bulan'] = 'Desember';
				break;
		}

		$array = array();
		$table = array();
		$str = array();

		foreach (range('a', 'z') as $alpha) {
			$array[] = $alpha;
		}

		$result_nama = $this->model->get_data($tanggal);
		foreach ($result_nama->Data as $result) {
			$str['_id'][] = $result->_id;
			$str['nama_klien'][] = $result->nama_klien;
			$str['sifat_akta'][] = $result->sifat_akta;
			$str['tgl_menghadap'][] = $result->tgl_menghadap;
			$str['no_akta'][] = $result->no_akta;
			$str['no_repertorium'][] = $result->no_repertorium;
		}

		for ($i=0; $i < 26; $i++) {
			for ($x=0; $x < sizeof($str['nama_klien']); $x++) { 
				if (substr(strtolower($str['nama_klien'][$x]), 0, 1) == $array[$i]) {
					$table[$array[$i]]['_id'][] = $str['_id'][$x];
					$table[$array[$i]]['nama_klien'][] = $str['nama_klien'][$x];
					$table[$array[$i]]['sifat_akta'][] = $str['sifat_akta'][$x];
					$table[$array[$i]]['tgl_menghadap'][] = $str['tgl_menghadap'][$x];
					$table[$array[$i]]['no_akta'][] = $str['no_akta'][$x];
					$table[$array[$i]]['no_repertorium'][] = $str['no_repertorium'][$x];
				}
			}

			if (empty($table[$array[$i]])) {
				$table[$array[$i]][] = "";
			}
		}

		$data['data'] = $table;

		$this->load->view('laporan/cetakklapper', $data);
	}
	// Akhir Cetak Laporan Klapper

	public function cetakdkd(){
		$data = $this->input->post();

		$arr = array("Target" 	=> "orderdokumen", 
					   "Activity"	=> "get", 
					   "Page"  		=> $this->param["page"]);

		$filter= "";

		$ispdf = $data["ispdf"];

		$bulan = $data["inbulan"];
		$tahun = $data["intahun"];
		$m_tgl = $data["intahun"].'-'.$data["inbulan"];

		$flt = "status = '". 0 ."'";
		$filter .= (empty($filter)) ? $flt : " and ". $flt;

		$arr["ParamsFilter"] = $filter;	
			
		$sort = '_id desc';
		$arr["ParamsSort"] = $sort;

		$limit = 10;
		$arr = array_merge($arr, array("Limit" => $limit));
			
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	

		if($bulan == "01"){$nama = "Januari";}else if($bulan == "2"){$nama = "Februari";}else if($bulan == "3"){$nama = "Maret";}else if($bulan == "4"){$nama = "April";}else if($bulan == "5"){$nama = "Mei";}else if($bulan == "6"){$nama = "Juni";}else if($bulan == "7"){$nama = "Juli";}else if($bulan == "8"){$nama = "Agustus";}else if($bulan == "9"){$nama = "September";}else if($bulan == "10"){$nama = "Oktober";}else if($bulan == "11"){$nama = "November";}else if($bulan == "12"){$nama = "Desember";}
							   
			$output = $this->api->execute(true);	

			$order[] = "";
			foreach ($output->Data as $resp) {
				$flt1 = "_id =".$resp->id_order."";
				$flt2 = "(tgl_order LIKE '%$m_tgl%' or tgl_closed LIKE '%$m_tgl%' )";
				$filter = "".$flt1." and ".$flt2."";
				$order[$resp->id_order] = $this->sWhere2('tb_order',$filter)->Data[0];
			}	

		$this->load->view("laporan/cetakdkd",array('dkd' => $output , 'nama' => $nama , 'tahun' => $tahun , 'order' => $order));

		$html = $this->output->get_output();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan Protes.pdf", array("Attachment" => $ispdf));
	}*/