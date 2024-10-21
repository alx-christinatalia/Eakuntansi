<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporankeuangan extends CI_Controller
{
	public function __construct()
	{
	   parent::__construct();
	    //helpers
	   $this->load->library('export2pdf');
	   $this->load->helper('url');
	   $this->load->model('api');
	   $this->load->model('keuangan_model','muang');
	   $this->load->library('session');
	}

	public function index()
	{
		if ($this->input->is_ajax_request() && $this->input->post("action") && $this->input->post("param")) {
			if (method_exists($this, $this->input->post("action"))) {
				$req = $this->input->post("action");
				$this->param = $this->input->post("param");
				print_r($this->$req());
			} else {
				print_r("Function not exist");
			}
		} else {
			$this->api->setAction("Execute");
		    $this->api->setParam(array("Target" => "finakun", "Activity" => "get", "Limit" => "1000" , "ParamsSort" => "nama ASC"));
		    $data['akun'] = $this->api->execute("object");

			$this->load->view('keuangan/laporankeuangan/index', $data);
		}
	}

	public function cetakjurnaltransaksi(){
		$data = $this->input->post();

		$arr = array("Target" 	=> "fintransaksi", 
		   "Activity"	=> "get",
		   	"Limit" => "10");

		if(!empty($data["jtnotrans"])) {
			$flt = "nomor = '". $data["jtnotrans"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["jttgl"])) {
			$explode= explode(" - ",$data["jttgl"]);
			$date1 = date("Y-m-d", strtotime($explode[0]));
			$date2 = date("Y-m-d", strtotime($explode[1]));
			$flt = "tgl BETWEEN '". $date1 ."' and '". $date2 ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}else{
			$flt = "tgl = '".date("Y-m-d")."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["jtjenis"])) {
			$flt = "jenis = '". $data["jtjenis"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["jtkontak"])) {
			$flt = "kontak = '". $data["jtkontak"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["jtakuntrans"])) {
			$flt = "akun = '". $data["jtakuntrans"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["jtposting"])) {
			$flt = "ispost = '". $data["jtposting"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["isklien"])) {
			$flt = "isklien = '". $data["isklien"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		$arr["ParamsFilter"] = $filter;

		if(!empty($data["sort"])) {
			$sort = 'urutan asc';
			$arr["ParamsSort"] = $sort;
		}

		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute("object");
		$namaakun[] = "";
		foreach ($output->Data as $resp) {
			$namaakun[$resp->akun] = $this->sWhere('finakun','kode',$resp->akun)->Data[0]->nama;
		}
		
		$cut = explode(" - ",$data["jttgl"]);
		$date1 = date("d M Y", strtotime($cut[0]));
		$date2 = date("d M Y", strtotime($cut[1]));

		$ttd = $data["jurnalttd"];
		$ispdf = $data["ispdf"];
		$notaris = $this->get('notaris')->Data[0]->nama;

		$getkasir = $this->get('notaris')->Data[0]->kasir;
		if ($getkasir == null){
			$kasir = "NamaKasir-BelumDiset";
		}else{
			$kasir = $getkasir ; 
		}

		$getakuntan = $this->get('notaris')->Data[0]->accounting;
		if ($getakuntan == null){
			$akuntan = "NamaAccounting-BelumDiset";
		}else{
			$akuntan = $getakuntan ; 
		}

		$getdireksi = $this->get('notaris')->Data[0]->direksi;
		if ($getdireksi == null){
			$direksi = "NamaDireksi-BelumDiset";
		}else{
			$direksi = $getdireksi ; 
		}

		$this->load->view("keuangan/laporankeuangan/cetakjurnaltransaksi",array('jurnaltransaksi' => $output , 'tglrange' => $tglrange , 'akun' => $namaakun , 'kasir' => $kasir , 'akuntan' => $akuntan , 'direksi' => $direksi , 'date1' => $date1 , 'date2' => $date2, 'notaris' => $notaris , 'ttd' => $ttd)); 
	}

	public function cetakpiutangperkontak()
	{

		$data = $this->input->post();
		$kode = $data["piutangkode"];
		$nol = $data["piutangnol"];
		$ttd = $data["piutangttd"];
		$bulan = $data["ppbulan"];
		$tahun = $data["pptahun"];
		$m_tgl = $data['pptahun'].$data['ppbulan'];

		$arr = array("Target" 	=> "finhutangpiutang", 
		   "Activity"	=> "get",
		   	"Limit" => "1000");
		$filter = "" ;
		
		if(!empty($data["ppbulan"])) {
			$filter .= "(p LIKE '%{$m_tgl}%')";
		}

		if(!empty($data["isklien1"])) {
			$flt = "isk = '". $data["isklien1"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["ppkontak1"])) {
			$flt = "ko = '". $data["ppkontak1"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["piutang"])) {
			$flt = "kt = '". $data["piutang"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		$arr["ParamsFilter"] = $filter;

		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);

		$idk = array();
		$groupAkun = array();

		foreach ($output->Data as $data) {
			if(!in_array($data->k,$idk)){
				array_push($idk, $data->k);
			}
		}

		$output_array=json_decode(json_encode($output),true);

		$DataFilterByKodeAkun=array();
		foreach ($idk as $id) {
			// $DataFilterByKodeAkun["id"] = $id;
			$DataFilterByKodeAkun[$id]["id"] = $id;
			$DataFilterByKodeAkun[$id]["nama"] = $this->sWhere("finakun","kode",$id)->Data[0]->nama;
			$DataFilterByKodeAkun[$id]["data"]=array_filter($output_array["Data"], function($value) use ($id){
				return ($value["k"] == $id);
			}, ARRAY_FILTER_USE_BOTH);
		}
		
		// looping data
		$lisk_ko=array();
		$lisk_isk=array();
		$ls_ko=array();
		$listgrp=array();
	
		foreach ($DataFilterByKodeAkun as $data ) {  
		$listgrp=array();
		$DataGrouped=array(); 
			foreach ($data["data"] as $item) {
				$lisk_ko[]=$item["ko"];
				$lisk_isk[]=$item["isk"]; 

				if(in_array($item["ko"]."_".$item["isk"], $ls_ko)){
					$dtold=$listgrp[$item["ko"]."_".$item["isk"]][0];

					$dtold["tb"]=$dtold["tb"]+$item["tb"];
					$dtold["byr"]=$dtold["byr"]+$item["byr"];
					$dtold["s"]=$dtold["s"]+$item["s"];

					$listgrp[$item["ko"]."_".$item["isk"]]=array();
					$listgrp[$item["ko"]."_".$item["isk"]][0]=$dtold;

				}else{
					$ls_ko[]=$item["ko"]."_".$item["isk"]; 
					$listgrp[$item["ko"]."_".$item["isk"]]=array_filter($data["data"] , function($value) use ($item){
						return ($value["ko"]==$item["ko"] && $value["isk"] == $item["isk"]);
					}, ARRAY_FILTER_USE_BOTH);
				} 

			}	

			foreach ($listgrp as $lst) {
				foreach ($lst as $dt) {
					$DataGrouped[]=$dt;
				}
			}

			$DataFilterByKodeAkun[$data["id"]]["grouped"]=$DataGrouped;
		}

		$arrkontak[] = "";
		$arrklien[] = "";
		foreach ($DataFilterByKodeAkun as $bykode){
			foreach ($bykode["grouped"] as $baris) {
				if($baris["isk"] == 1){
					$arrklien[$baris["ko"]] = $this->sWhere("notarisklien","_id",$baris["ko"])->Data[0]->nama;;
				}else{
					$arrkontak[$baris["ko"]] = $this->sWhere("finkontak","_id",$baris["ko"])->Data[0]->nama;
				}
			}
		}

		$notaris = $this->get('notaris')->Data[0]->nama;

		$getkasir = $this->get('notaris')->Data[0]->kasir;
		if ($getkasir == null) {
			$kasir = "NamaKasir-BelumDiset";
		} else {
			$kasir = $getkasir ;
		}

		$getakuntan = $this->get('notaris')->Data[0]->accounting;
		if ($getakuntan == null) {
			$akuntan = "NamaAccounting-BelumDiset";
		} else {
			$akuntan = $getakuntan ;
		}

		$getdireksi = $this->get('notaris')->Data[0]->direksi;
		if ($getdireksi == null) {
			$direksi = "NamaDireksi-BelumDiset";
		} else {
			$direksi = $getdireksi ;
		}
		$nama = $this->muang->getnamabulan($bulan);


		$this->load->view("keuangan/laporankeuangan/cetakpiutangperkontak",array('piutang' => $DataFilterByKodeAkun , 'klien' => $arrklien , 'kontak' => $arrkontak , 'bulan' => $nama , 'tahun' => $tahun , 'kode' => $kode , 'ttd' => $ttd , 'kasir' => $kasir , 'akuntan' => $akuntan , 'direksi' => $direksi));
	}

	public function cetakhutangperkontak()
	{

		$data = $this->input->post();
		$kode = $data["hutangkode"];
		$nol = $data["hutangnol"];
		$ttd = $data["hutangttd"];
		$bulan = $data["hpbulan"];
		$tahun = $data["hptahun"];
		$m_tgl = $data['hptahun'].$data['hpbulan'];

		$arr = array("Target" 	=> "finhutangpiutang", 
		   "Activity"	=> "get",
		   	"Limit" => "1000");
		$filter = "" ;
		
		if(!empty($data["hbulan"])) {
			$filter .= "(p LIKE '%{$m_tgl}%')";
		}

		if(!empty($data["isklien2"])) {
			$flt = "isk = '". $data["isklien2"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["hpkontak"])) {
			$flt = "ko = '". $data["hpkontak"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["hutang"])) {
			$flt = "j = '". 2 ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		$arr["ParamsFilter"] = $filter;

		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);

		$idk = array();
		$groupAkun = array();

		foreach ($output->Data as $data) {
			if(!in_array($data->k,$idk)){
				array_push($idk, $data->k);
			}
		}

		$output_array=json_decode(json_encode($output),true);

		$DataFilterByKodeAkun=array();
		foreach ($idk as $id) {
			// $DataFilterByKodeAkun["id"] = $id;
			$DataFilterByKodeAkun[$id]["id"] = $id;
			$DataFilterByKodeAkun[$id]["nama"] = $this->sWhere("finakun","kode",$id)->Data[0]->nama;
			$DataFilterByKodeAkun[$id]["data"]=array_filter($output_array["Data"], function($value) use ($id){
				return ($value["k"] == $id);
			}, ARRAY_FILTER_USE_BOTH);
		}
		
		// looping data
		$lisk_ko=array();
		$lisk_isk=array();
		$ls_ko=array();
		$listgrp=array();
	
		foreach ($DataFilterByKodeAkun as $data ) {  
		$listgrp=array();
		$DataGrouped=array(); 
			foreach ($data["data"] as $item) {
				$lisk_ko[]=$item["ko"];
				$lisk_isk[]=$item["isk"]; 

				if(in_array($item["ko"]."_".$item["isk"], $ls_ko)){
					$dtold=$listgrp[$item["ko"]."_".$item["isk"]][0];

					$dtold["tb"]=$dtold["tb"]+$item["tb"];
					$dtold["byr"]=$dtold["byr"]+$item["byr"];
					$dtold["s"]=$dtold["s"]+$item["s"];

					$listgrp[$item["ko"]."_".$item["isk"]]=array();
					$listgrp[$item["ko"]."_".$item["isk"]][0]=$dtold;

				}else{
					$ls_ko[]=$item["ko"]."_".$item["isk"]; 
					$listgrp[$item["ko"]."_".$item["isk"]]=array_filter($data["data"] , function($value) use ($item){
						return ($value["ko"]==$item["ko"] && $value["isk"] == $item["isk"]);
					}, ARRAY_FILTER_USE_BOTH);
				} 

			}	

			foreach ($listgrp as $lst) {
				foreach ($lst as $dt) {
					$DataGrouped[]=$dt;
				}
			}

			$DataFilterByKodeAkun[$data["id"]]["grouped"]=$DataGrouped;
		}

		$arrkontak[] = "";
		$arrklien[] = "";
		foreach ($DataFilterByKodeAkun as $bykode){
			foreach ($bykode["grouped"] as $baris) {
				if($baris["isk"] == 1){
					$arrklien[$baris["ko"]] = $this->sWhere("notarisklien","_id",$baris["ko"])->Data[0]->nama;;
				}else{
					$arrkontak[$baris["ko"]] = $this->sWhere("finkontak","_id",$baris["ko"])->Data[0]->nama;
				}
			}
		}

		$notaris = $this->get('notaris')->Data[0]->nama;

		$getkasir = $this->get('notaris')->Data[0]->kasir;
		if ($getkasir == null) {
			$kasir = "NamaKasir-BelumDiset";
		} else {
			$kasir = $getkasir ;
		}

		$getakuntan = $this->get('notaris')->Data[0]->accounting;
		if ($getakuntan == null) {
			$akuntan = "NamaAccounting-BelumDiset";
		} else {
			$akuntan = $getakuntan ;
		}

		$getdireksi = $this->get('notaris')->Data[0]->direksi;
		if ($getdireksi == null) {
			$direksi = "NamaDireksi-BelumDiset";
		} else {
			$direksi = $getdireksi ;
		}
		$nama = $this->muang->getnamabulan($bulan);

		$this->load->view("keuangan/laporankeuangan/cetakhutangperkontak",array('hutang' => $DataFilterByKodeAkun , 'klien' => $arrklien , 'kontak' => $arrkontak , 'bulan' => $nama , 'tahun' => $tahun , 'kode' => $kode , 'ttd' => $ttd , 'kasir' => $kasir , 'akuntan' => $akuntan , 'direksi' => $direksi));
	}

	public function cetakbukubesar()
	{
		$data = $this->input->post();
		$namaakun = $this->get('finakun');

		$bulan = $data["bbbulan"];
		$tahun = $data["bbtahun"];
		$periode = $data["bbtahun"].$data["bbbulan"];

		$filter="";
		$flt2 = "periode =".$periode."";

		if ($data["bbakun"] != 0) {
			$flt3 = "akun =".$data["bbakun"]."";
			$filter = "".$flt2." AND ".$flt3."";
		} else {
			$filter = $flt2;
		}

		$fintransaksi = $this->sWhere2('fintransaksi',$filter);

		if ($data["bbakun"] != 0) {
			$akun = $data["bbakun"];
		} else {
			$akun = "Semua Akun";
		}

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

		$ttd = $data["bukuttd"];
		$kode = $data["bukukode"];
		$notaris = $this->get('notaris')->Data[0]->nama;

		$getkasir = $this->get('notaris')->Data[0]->kasir;
		if ($getkasir == null) {
			$kasir = "NamaKasir-BelumDiset";
		} else {
			$kasir = $getkasir ;
		}

		$getakuntan = $this->get('notaris')->Data[0]->accounting;
		if ($getakuntan == null) {
			$akuntan = "NamaAccounting-BelumDiset";
		} else {
			$akuntan = $getakuntan ;
		}

		$getdireksi = $this->get('notaris')->Data[0]->direksi;
		if ($getdireksi == null) {
			$direksi = "NamaDireksi-BelumDiset";
		} else {
			$direksi = $getdireksi ;
		}

		$data[]="";
		foreach ($fintransaksi->Data as $resp) {
			$data[$resp->akun] = $this->sWhere('finakun','kode',$resp->akun)->Data[0];
		}

		$this->load->view("keuangan/laporankeuangan/cetakbukubesar",array('anggaran' => $finanggaran , 'transaksi' => $fintransaksi , 'bulan' => $nama , 'tahun' => $tahun , 'akun' => $akun , 'notaris' => $notaris , 'kasir' => $kasir , 'akuntan' => $akuntan , 'direksi' => $direksi , 'ttd' => $ttd , 'kode' => $kode , 'data' => $data));
	}

	public function cetaklabarugi()
	{
		$data = $this->input->post();

		$bulan = $data["lrbulan"];
		$tahun = $data["lrtahun"];
		$periode = $data["lrtahun"].$data["lrbulan"];

		$filter="";
		$flt1 = "p =".$periode."";
		$dapat = "j = 4";
		$beban = "j = 5";

		$filterpendapatan = "".$flt1." AND ".$dapat."";
		$pendapatan = $this->sWhere2('finanggaran',$filterpendapatan);

		$filterbiaya = "".$flt1." AND ".$beban."";
		$biaya = $this->sWhere2('finanggaran',$filterbiaya);

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

		$ttd = $data["labattd"];
		$kode = $data["labakode"];
		$nol = $data["labanol"];

		$notaris = $this->get('notaris')->Data[0]->nama;

		$getkasir = $this->get('notaris')->Data[0]->kasir;
		if ($getkasir == null) {
			$kasir = "NamaKasir-BelumDiset";
		} else {
			$kasir = $getkasir ;
		}

		$getakuntan = $this->get('notaris')->Data[0]->accounting;
		if ($getakuntan == null) {
			$akuntan = "NamaAccounting-BelumDiset";
		} else {
			$akuntan = $getakuntan ;
		}

		$getdireksi = $this->get('notaris')->Data[0]->direksi;
		if ($getdireksi == null) {
			$direksi = "NamaDireksi-BelumDiset";
		} else {
			$direksi = $getdireksi ;
		}

		$akun[] = "";
		foreach ($pendapatan->Data as $resp) {
			$akun[$resp->k] = $this->sWhere('finakun','kode',$resp->k)->Data[0];
		}

		foreach ($biaya->Data as $resp) {
			$akun[$resp->k] = $this->sWhere('finakun','kode',$resp->k)->Data[0];
		}

		$this->load->view("keuangan/laporankeuangan/cetaklabarugi",array('pendapatan' => $pendapatan , 'biaya' => $biaya , 'bulan' => $nama , 'tahun' => $tahun , 'notaris' => $notaris , 'kasir' => $kasir , 'akuntan' => $akuntan , 'direksi' => $direksi , 'ttd' => $ttd , 'kode' => $kode , 'nol' => $nol , 'akun' => $akun));
	}

	public function cnKategori($akun)
	{
		$dataTransaksi = $this->DoList->m_getData_l_s("fintransaksi", "100000" , "");
		$total['ada'] = "tidak";

		foreach ($dataTransaksi->Data as $resp) {
			if ($resp->akun_k == $akun) {
				$total['uang'] += intval($resp->debit) - intval($resp->kredit);
				$total['ada'] = "tersedia";
			}
		}

		return $total;
	}

	public function cnAkun($akun)
	{
		$flt= "kategori = '".$akun."'";
		$dataTransaksi = $this->DoList->m_sWhere_l_s("finakun",$flt, "100000" , "kode ASC");

		$i=0;
		foreach ($dataTransaksi->Data as $resp) {
			$total['uang'][$akun][$resp->kode] += $this->cnAkunDuit($resp->kode);
			$total['nama'][$akun][$resp->kode] = $resp->nama;
			$total['nomor'][$i] = $resp->kode;
			$i++;
		}

		return $total;
	}

	public function cnAkunDuit($akun)
	{
		$flt= "akun = '".$akun."'";
		$dataTransaksi = $this->DoList->m_sWhere_l_s("fintransaksi",$flt, "100000" , "akun ASC");

		foreach ($dataTransaksi->Data as $resp) {
			$total += intval($resp->debit) - intval($resp->kredit);
		}

		return $total;
	}

	public function cetakneraca()
	{
		$dataKategori = $this->DoList->m_getData_l_s("finakunkategori", "100" , "kategori ASC");

		$i = 0 ;
		foreach ($dataKategori->Data as $resp) {
			$cekIsi = $this->cnKategori($resp->kategori);
			$totalKategori['Total'][$i] = $cekIsi['uang'];
			$totalKategori['Nama'][$i] = $resp->nama;
			$totalKategori['Nomor'][$i] = $resp->kategori;
			$totalKategori['tersedia'][$i] = $cekIsi['ada'];
			if ($cekIsi['ada'] == "tersedia") {
				$totalKategori['akun'][$i] = $this->cnAkun($resp->kategori);
			}
			$i++;
		}

		$data = $this->input->post();

		$ttd = $data["neracattd"];
		$kodeakun = $data["neracakode"];
		$nol = $data["neracanol"];
		$bulan = $data["nbulan"];
		$tahun = $data["ntahun"];

		$kotanotaris = $this->get('notaris')->Data[0]->nama_kabkota;

		$getdireksi = $this->get('notaris')->Data[0]->direksi;
		if ($getdireksi == null) {
			$direksi = "NamaDireksi-BelumDiset";
		} else {
			$direksi = $getdireksi ;
		}

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

		$this->load->view("keuangan/laporankeuangan/cetakneraca",array('kategori' => $totalKategori, 'direksi' => $direksi , 'ttd' => $ttd, 'kota' => $kotanotaris, 'kodeakun' => $kodeakun , 'nol' => $nol , 'bulan' => $nama , 'tahun' => $tahun));
	}

	// public function cetakperubahanmodal()
	// {
	// 	$dataKategori = $this->DoList->m_getData_l_s("finakunkategori", "100" , "kategori ASC");

	// 	$i = 0 ;
	// 	foreach ($dataKategori->Data as $resp) {
	// 		$cekIsi = $this->cnKategori($resp->kategori);
	// 		$totalKategori['Total'][$i] = $cekIsi['uang'];
	// 		$totalKategori['Nama'][$i] = $resp->nama;
	// 		$totalKategori['Nomor'][$i] = $resp->kategori;
	// 		$totalKategori['tersedia'][$i] = $cekIsi['ada'];
	// 		if ($cekIsi['ada'] == "tersedia") {
	// 			$totalKategori['akun'][$i] = $this->cnAkun($resp->kategori);
	// 		}
	// 		$i++;
	// 	}

	// 	$data = $this->input->post();

	// 	$ttd = $data["neracattd"];
	// 	$kodeakun = $data["neracakode"];
	// 	$nol = $data["neracanol"];
	// 	$bulan = $data["nbulan"];
	// 	$tahun = $data["ntahun"];

	// 	$kotanotaris = $this->get('notaris')->Data[0]->nama_kabkota;

	// 	$getdireksi = $this->get('notaris')->Data[0]->direksi;
	// 	if ($getdireksi == null) {
	// 		$direksi = "NamaDireksi-BelumDiset";
	// 	} else {
	// 		$direksi = $getdireksi ;
	// 	}

	// 	switch ($bulan) {
	// 		case '01':
	// 			$nama = 'Januari';
	// 			break;

	// 		case '02':
	// 			$nama = 'Februari';
	// 			break;

	// 		case '03':
	// 			$nama = 'Maret';
	// 			break;

	// 		case '04':
	// 			$nama = 'April';
	// 			break;

	// 		case '05':
	// 			$nama = 'Mei';
	// 			break;

	// 		case '06':
	// 			$nama = 'Juni';
	// 			break;

	// 		case '07':
	// 			$nama = 'Juli';
	// 			break;

	// 		case '08':
	// 			$nama = 'Agustus';
	// 			break;

	// 		case '09':
	// 			$nama = 'September';
	// 			break;

	// 		case '10':
	// 			$nama = 'Oktober';
	// 			break;

	// 		case '11':
	// 			$nama = 'November';
	// 			break;

	// 		case '12':
	// 			$nama = 'Desember';
	// 			break;
	// 	}

	// 	$this->load->view("keuangan/laporankeuangan/cetakneraca",array('kategori' => $totalKategori, 'direksi' => $direksi , 'ttd' => $ttd, 'kota' => $kotanotaris, 'kodeakun' => $kodeakun , 'nol' => $nol , 'bulan' => $nama , 'tahun' => $tahun));
	// }

	public function cetakperubahanmodal()
	{
		$input = $this->input->post();

		$bulan = $input["pmbulan"];
		$tahun = $input["pmtahun"];
		$kode = $input["perubahankode"];
		$periode = $input["pmtahun"].$input["pmbulan"];

		$flt1 = "p =".$periode."";
		$flt2 = "kt BETWEEN 31 and 35";
		$filter = "".$flt2." AND ".$flt1."";
		$modal = $this->sWhere2('finanggaran',$filter);

		$idk = array();
		$groupAkun = array();
		foreach ($modal->Data as $data) {
			if(!in_array($data->k,$idk)){
				array_push($idk, $data->k);
			}
		}

		$output_array=json_decode(json_encode($modal),true);

		$DataFilterByKodeAkun=array();
		foreach ($idk as $id) {
			// $DataFilterByKodeAkun["id"] = $id;
			$DataFilterByKodeAkun[$id]["id"] = $id;
			$DataFilterByKodeAkun[$id]["nama"] = $this->sWhere("finakun","kode",$id)->Data[0]->nama;
			$DataFilterByKodeAkun[$id]["data"]=array_filter($output_array["Data"], function($value) use ($id){
				return ($value["k"] == $id);
			}, ARRAY_FILTER_USE_BOTH);
		}

		// $this->load->view("keuangan/laporankeuangan/cetakperubahanmodal",array('pendapatan' => $pendapatan , 'biaya' => $biaya , 'bulan' => $nama , 'tahun' => $tahun , 'notaris' => $notaris , 'kasir' => $kasir , 'akuntan' => $akuntan , 'direksi' => $direksi , 'ttd' => $ttd , 'kode' => $kode , 'nol' => $nol , 'akun' => $akun));

		echo json_encode($DataFilterByKodeAkun);
		$this->load->view("keuangan/laporankeuangan/cetakperubahanmodal",array('data' => $DataFilterByKodeAkun,'kode' => $kode));
	}

	//////get data\\\\\
	public function datanotrans()
	{
		$data = $this->input->post("param");
		$arr = array(
			"Target" 	=> "fintransaksi",
			"Activity"	=> "get",
			"Page"  	=> $data['page']
		);

		$filter = "";
		if (!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(nomor LIKE '%{$flt}%' nama LIKE '%{$flt}%')";
		}

		$arr["ParamsFilter"] = $filter;

		if (!empty($this->param["filter"]["sort"])) {
			$sort = $this->param["filter"]["sort"];
			$arr["ParamsSort"] = $sort;
		}

		$this->api->setAction("Execute");
		$this->api->setParam($arr);

		$output = $this->api->execute(true);

		$return = "";
		if (!empty($output)) {
			if ($output->IsError == false) {
				$n = 1;
				foreach ($output->Data as $result) {
					$return .= "<tr id='{$result->id}' onclick='set_notrans(this);' style='cursor:pointer' data-nomor='{$result->nomor}' data-id='{$result->_id}'>";
						$return .= "<td>{$result->nomor}</td>";
						$return .= "<td>".date("d M Y", strtotime($result->tgl))."</td>";
						$return .= "<td>{$result->nama}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";

		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function datakontak()
	{
		$data = $this->input->post("param");
		$arr = array(
			"Target" 	=> "finkontak",
			"Activity"	=> "get",
			"Page"  	=> $data['page']
		);

		$filter = "";
		if (!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(nama LIKE '%{$flt}%' OR catatan LIKE '%{$flt}%')";
		}

		$arr["ParamsFilter"] = $filter;

		if (!empty($this->param["filter"]["sort"])) {
			$sort = $this->param["filter"]["sort"];
			$arr["ParamsSort"] = $sort;
		}

		$this->api->setAction("Execute");
		$this->api->setParam($arr);

		$output = $this->api->execute(true);

		$return = "";
		if (!empty($output)) {
			if ($output->IsError == false) {
				$n = 1;
				foreach ($output->Data as $result) {
					$a = ($result->aktif == "1" ? "Aktif" : "Tidak Aktif");
					$return .= "<tr id='{$result->id}' onclick='set_kontak(this);' style='cursor:pointer' data-nama='{$result->nama}' data-id='{$result->_id}'>";
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$result->catatan}</td>";
						$return .= "<td>{$a}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";

		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function dataklien()
	{
		$data = $this->input->post("param");
		$arr = array(
			"Target" => "notarisklien",
			"Activity" => "get",
			"Page" => $data['page']
		);

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(nama LIKE '%{$flt}%' or notelp LIKE '%{$flt}%')";
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
					$return .= "<tr id='{$result->id}' onclick='set_klien(this);' style='cursor:pointer' data-nama='{$result->nama}' data-id='{$result->_id}'>";
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$result->notelp}</td>";
						$return .= "<td>".date("d M Y", strtotime($result->tgl_daftar))."</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";

		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function datakontak1()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "finkontak",
				   "Activity"	=> "get",
				   "Page"  		=> $data['page']);


		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(nama LIKE '%{$flt}%' or catatan LIKE '%{$flt}%')";
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
					$return .= "<tr id='{$result->id}' onclick='set_kontak1(this);' style='cursor:pointer' data-nama='{$result->nama}' data-id='{$result->_id}'>";
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$result->catatan}</td>";
						$return .= "<td>{$a}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";

		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function dataklien1()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "notarisklien",
				   "Activity"	=> "get",
				   "Page"  		=> $data['page']);


		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(nama LIKE '%{$flt}%' or notelp LIKE '%{$flt}%')";
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
					$return .= "<tr id='{$result->id}' onclick='set_klien1(this);' style='cursor:pointer' data-nama='{$result->nama}' data-id='{$result->_id}'>";
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$result->notelp}</td>";
						$return .= "<td>".date("d M Y", strtotime($result->tgl_daftar))."</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";

		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function datakontak2()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "finkontak",
				   "Activity"	=> "get",
				   "Page"  		=> $data['page']);


		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(nama LIKE '%{$flt}%' or catatan LIKE '%{$flt}%')";
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
					$return .= "<tr id='{$result->id}' onclick='set_kontak2(this);' style='cursor:pointer' data-nama='{$result->nama}' data-id='{$result->_id}'>";
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$result->catatan}</td>";
						$return .= "<td>{$a}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";

		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function dataklien2()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "notarisklien",
				   "Activity"	=> "get",
				   "Page"  		=> $data['page']);


		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(nama LIKE '%{$flt}%' or notelp LIKE '%{$flt}%')";
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
					$return .= "<tr id='{$result->id}' onclick='set_klien2(this);' style='cursor:pointer' data-nama='{$result->nama}' data-id='{$result->_id}'>";
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$result->notelp}</td>";
						$return .= "<td>".date("d M Y", strtotime($result->tgl_daftar))."</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";

		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	/////script helper\\\\\
	public function sWhere($tb,$field,$_id)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = '".$_id."' " ));
        $data = $this->api->execute(true);
        return $data;
    }

	public function get($tb)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tb , "Activity" => "get"));
        $data = $this->api->execute("object");
        return $data;
    }

    public function sWhere2($tb,$filter)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => $filter ));
        $data = $this->api->execute(true);
        return $data;
    }

}
?>
