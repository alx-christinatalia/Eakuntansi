
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	    //helpers
	   $this->load->helper('url');
	   $this->load->model('api');
	   $this->load->library('session');
            $this->publicmodel->checkPermission();
            $this->publicmodel->accessPermission("2");
	}


	public function index($param)
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
			
			$this->load->view('order/index.php');	
		}
		
		
	}

	public function ambiltem(){
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => "notaristemplateform" , "Activity" => "get"));
        $data = $this->api->execute("object");
        echo json_encode($data);
	}

	public function updtem()
	{
		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$id = $this->input->post("id");

		$this->api->setParam(array("Target" => "notaristemplateform", "Activity" => "get", "ParamsFilter" => "_id = '".$id."' " , "GetLastId" => "1"));
		$data = $this->api->execute("array");
		$data = $data->Data[0];	

		if($data == null && $data == ""){
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "notaristemplateform", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
			$data = $this->api->execute("array");
		}else
		{
			$this->api->setParam(array("Target" => "notaristemplateform", "Activity" => "update", "ParamsData" => json_encode($value),"ParamsFilter" => "_id = '".$id."' " , "GetLastId" => "1"));
			$data = $this->api->execute("array");
		}
	}

//////////// -Kelengkapan Dokumen ///////////////////

	public function form_laporan()
	{
		$this->load->view('order/form_laporan');
	}

        public function cetak_daftar_order()
        {
            //Filter Data
                $arr = array("Target"   => "tb_order", 
                           "Activity"   => "get", 
                           "Page"       => $this->param["page"]);
                

                $filter = "";
                $param = $this->input->post();
                if(!empty($param["tgl_order"])) {
                    $explode= explode(" - ",$param["tgl_order"]);
                    $date1 = date("Y-m-d", strtotime($explode[0]));
                    $date2 = date("Y-m-d", strtotime($explode[1]));
                    $flt = "tgl_order BETWEEN '". $date1 ."' and '". $date2 ."'";
                    $filter .= (empty($filter)) ? $flt : " and ". $flt;
                }

                if(!empty($param["id_klien"])) {
                    $flt = "id_klien = '". $param["id_klien"] ."'";
                    $filter .= (empty($filter)) ? $flt : " and ". $flt;
                    $nama = $this->sWhere('notarisklien','_id',$param["id_klien"])->Data[0]->nama;
                }

                if(!empty($param["id_layanan"])) {
                    $flt = "layanan = '". $param["id_layanan"] ."'";
                    $filter .= (empty($filter)) ? $flt : " and ". $flt;
                }

                if(!empty($param["id_NotarisRekanan"])) {
                    $flt = "id_notaris_rekanan = '". $param["id_NotarisRekanan"] ."'";
                    $filter .= (empty($filter)) ? $flt : " and ". $flt;
                }

                if(!empty($param["nama_officer"])) {
                    $flt = "nama_officer = '". $param["nama_officer"] ."'";
                    $filter .= (empty($filter)) ? $flt : " and ". $flt;
                }

                $arr["ParamsFilter"] = $filter;
                
                $limit = "1000";
                $arr = array_merge($arr, array("Limit" => $limit));
                
                $this->api->setAction("Execute");
                $this->api->setParam($arr); 
                $output = $this->api->execute(true);
                
            $this->load->view('order/cetak/daftar',['data'=>$output, 'param' => $param , 'klien' => $nama]);   
        }

        public function cetak_detail_order()
        {
        	$param = $this->input->post();
        	$filter = "_id = '".$param['id_order']."'";
        	$data = $this->DoList->m_sWhere_l_s('tb_order',$filter,"1000","_id desc");

        	$filter = "id_order = '".$param['id_order']."'";
        	$billing = $this->DoList->m_sWhere_l_s('orderbilling',$filter,"1000","_id desc");
        	$tagihan = 0;
        	foreach ($billing->Data as $resp) {
        		$tagihan += ($resp->dk == "K" ? intval(+$resp->jml) : intval(-$resp->jml) );
        	}

        	$filter = "id_order = '".$param['id_order']."'";
        	$proses = $this->DoList->m_sWhere_l_s('orderproses',$filter,"1000","urutan asc");
        	$this->load->view('order/cetak/detail',['data'=>$data, 'billing'=>$billing,'tagihan'=>$tagihan, 'proses' => $proses]);
        }

	public function editpihak()
	{
		$gData = $this->input->post();
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "orderbhpihak" , "Activity" => "get" ,"ParamsFilter" => "_id = ".$gData['_id']." " ));
		$a = $this->api->execute("array");		
		echo json_encode($a);
	}

	public function simpanPihak()
	{
		$gData = $this->input->post("param");


		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "orderbhpihak" , "Activity" => "get" ,"ParamsFilter" => "_id = ".$gData['_id']." " ));
		$a = $this->api->execute(true);
		$a = $a->Data[0]->_id;
		if($a == "")
		{	
			$gData['_id']="";
			$this->api->setAction("Execute");
			$data = $this->input->post('param');
			$this->api->setParam(array("Target" => "orderbhpihak", "Activity" => "insert", "ParamsData" => json_encode($gData), "GetLastId" => "1"));
			$data = $this->api->execute("array");	
		}else
		{

			$this->api->setAction("Execute");
			$data = $this->input->post('param');
			$this->api->setParam(array("Target" => "orderbhpihak", "Activity" => "update", "ParamsData" => json_encode($gData),"ParamsFilter" => "_id = ".$gData['_id']));
			$data = $this->api->execute("array");		
		}
		$this->_file();
		echo json_encode($data);
	}

	public function _file()
	{
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

        }
	}


	public function simpanUmum()
	{
		$gData = $this->input->post("param");


		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "orderbhumum" , "Activity" => "get" ,"ParamsFilter" => "id_order = ".$gData['id_order']." " ));
		$a = $this->api->execute(true);
		$a = $a->Data[0]->_id;
		if($a == "")
		{
			$this->api->setAction("Execute");
			$data = $this->input->post('param');
			$this->api->setParam(array("Target" => "orderbhumum", "Activity" => "insert", "ParamsData" => json_encode($gData), "GetLastId" => "1"));
			$data = $this->api->execute("array");	
		}else
		{

			$this->api->setAction("Execute");
			$data = $this->input->post('param');
			$this->api->setParam(array("Target" => "orderbhumum", "Activity" => "update", "ParamsData" => json_encode($gData),"ParamsFilter" => "_id = ".$a));
			$data = $this->api->execute("array");		
		}
		echo json_encode($data);
	}


	public function orderdokumen($_id){

		$data["dataOrder"] = $this->selectWhere("tb_order",$_id);
		$this->load->view('order/kelengkapandokumen',$data);
	}

	public function getBdnUsaha($_id)
	{

		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "orderbhnama" , "Activity" => "get" ,"ParamsFilter" => "_id = ".$_id." " ));
		$data = $this->api->execute(true);
		$data = $data->Data[0];

		echo json_encode(["nama" => $data->nama, "_id" => $data->_id]);

	}

	public function kotaUmum($_id)
	{
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "notarisklien", "Activity" => "get", "ParamsFilter" => "_id = '".$_id."' ", "GetLastId" => "1"));
		$a = $this->api->execute(true);
		$prov = $a->Data[0]->id_prov;

		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "inf_kota", "Activity" => "get", "ParamsFilter" => "lokasi_propinsi = '".$prov."' and lokasi_kecamatan= '00' and lokasi_kelurahan='0000' ", "Limit"  => "100", "GetLastId" => "1",  "ParamsSort" => "lokasi_nama asc" ));
		$data = $this->api->execute(true);
		foreach ($data->Data as $result) 
		{
			$return .= "<option value='".$result->lokasi_ID."'>" .$result->lokasi_nama. "</option>";
		}

		echo json_encode($return);

	}

	public function kotanotaris(){
		$loaddata = $this->session->userdata("enotaris") ;
		$data = $this->sWhere('regencies','province_id',$loaddata->id_prov);
		foreach ($data->Data as $result) 
		{
			$return .= "<option value='".$result->id."'>" .$result->name. "</option>";
		}

		echo json_encode($return);

	}

	public function delBdnUsaha($_id)
	{
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "orderbhnama", "Activity" => "delete", "ParamsFilter" => "_id = '".$_id."' ", "GetLastId" => "1"));
		$data = $this->api->execute("array");
		echo json_encode($data);
	}
	public function pilihBdnUsaha()
	{
		$gData = $this->input->post("param");

		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "orderbhnama" , "Activity" => "get" ,"ParamsFilter" => "id_order = ".$gData['order']." " ));
		$data = $this->api->execute(true);
		foreach ($data->Data as $result) {
			
			$_id = $result->_id;

			$this->api->setAction("Execute");
			$value = array("dipilih" => "0" );
			$this->api->setParam(array("Target" => "orderbhnama", "Activity" => "update", "ParamsData" => json_encode($value) , "ParamsFilter" => "_id = ".$_id." " ,"GetLastId" => "1"));
			$done = $this->api->execute("array");
		}

		$this->api->setAction("Execute");
		$value = array("dipilih" => "1" );
		$this->api->setParam(array("Target" => "orderbhnama", "Activity" => "update", "ParamsData" => json_encode($value), "ParamsFilter" => "_id = ".$gData['data']." " ,"GetLastId" => "1"));
		$done = $this->api->execute("array");
		echo json_encode($done);

	}

	public function tblBdnUsaha($_id)
	{
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "orderbhnama" , "Activity" => "get" ,"ParamsFilter" => "id_order = ".$_id." " ));
		$data = $this->api->execute(true);

		foreach($data->Data as $result)
		{
			$pilih = $result->dipilih;
			$hide = ($pilih == "1" ? "hide" : "");
			$centang = ($pilih == "1" ? "" : "hide");
				$return .= "<tr>";
						$return .= '<td style = "text-align: center; ">
										<div class="btn-group">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fa fa-bars"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a role="button" data-id="'.$result->_id.'" onclick="editBdnUsaha(this);"><i class="fa fa-download"></i> Edit </a></li>
												<li><a role="button" data-id="'.$result->_id.'" onclick="delBdnUsaha(this);"><i class="fa fa-trash"></i> Hapus</a></li>
												<li class="'.$hide.'"><a role="button" onclick="pilih(this);" data-id="'.$result->_id.'"><i class="fa fa-check"></i> Pilih</a></li>
											</ul>
										</div>
									</td>';
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td style='text-align:center'><span><i  class='fa fa-check ".$centang."' ></i></span></td>";
					$return .= "</tr>";
		}

		echo json_encode($return);


	}

	public function tblParaPihak($_id)
	{
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "orderbhpihak" , "Activity" => "get" ,"ParamsFilter" => "id_order = ".$_id." " ));
		$data = $this->api->execute(true);

		foreach($data->Data as $result)
		{
			$uang = $this->publicmodel->rupiah($result->nominal);
			$pilih = $result->dipilih;
			$hide = ($pilih == "1" ? "hide" : "");
			$centang = ($pilih == "1" ? "" : "hide");
			$file = ($result->file == "" ? "Tidak ada file" : $result->file);
				$return .= "<tr>";
						$return .= '<td style = "text-align: center; ">
										<div class="btn-group">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fa fa-bars"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a role="button" data-id="'.$result->_id.'" onclick="editParaPihak(this);"><i class="fa fa-download"></i> Edit </a></li>
												<li><a role="button" data-id="'.$result->_id.'" data-nama="'.$result->nama.'" onclick="TPdel(this);"><i class="fa fa-trash"></i> Hapus</a></li>
											</ul>
										</div>
									</td>';
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$result->ket}</td>";
						$return .= "<td>{$result->komposisi}</td>";
						$return .= "<td>{$uang}</td>";
						$return .= "<td>{$result->posisi}</td>";
						$return .= "<td>{$file}</td>" ;
					$return .= "</tr>";
		}

		echo json_encode($return);
	}

	public function berkasorder($_id)
	{

		$dataOrder = $this->selectWhere("tb_order",$_id);
		$layanan = $dataOrder->Data[0]->nama_layanan;
		if($layanan == "Pendirian PT")
		{
			$flt1 = "id_order = ".$_id."";
			$flt2 = "dipilih = 1";
			$filter = "".$flt1." and ".$flt2."";
			$bdn_usaha = $this->sWhere2('orderbhnama',$filter)->Data[0]->nama;

			$this->load->view("order/berkasorder/pendirian_pt",["dataOrder" => $dataOrder, "bdn_usaha" => $bdn_usaha]);	
		}

		if($layanan == "Perubahan PT")
		{
			$flt1 = "id_order = ".$_id."";
			$flt2 = "dipilih = 1";
			$filter = "".$flt1." and ".$flt2."";
			$bdn_usaha = $this->sWhere2('orderbhnama',$filter)->Data[0]->nama;

			$this->load->view("order/berkasorder/perubahan_pt",["MASTER_ID_ORDER" => $_id, "bdn_usaha" => $bdn_usaha]);	
		}

		if($layanan == "Penutupan PT")
		{
			//redirect('berkasorder/Penutupan-PT/'.$_id);
			$flt1 = "id_order = ".$_id."";
			$flt2 = "dipilih = 1";
			$filter = "".$flt1." and ".$flt2."";
			$bdn_usaha = $this->sWhere2('orderbhnama',$filter)->Data[0]->nama;

			$this->load->view("order/berkasorder/penutupan_pt",["MASTER_ID_ORDER" => $_id, "bdn_usaha" => $bdn_usaha]);	
		}

		if($layanan == "Pendirian CV")
		{
			redirect('berkasorder/Pendirian-CV/'.$_id);
		}
		
		if($layanan == "Perubahan CV")
		{
			redirect('berkasorder/Perubahan-CV/'.$_id);
		}

		if($layanan == "Penutupan CV")
		{
			redirect('berkasorder/Penutupan-CV/'.$_id);
		}

		if($layanan == "Pendirian Yayasan")
		{
			redirect('berkasorder/Pendirian-Yayasan/'.$_id);
		}

		if($layanan == "Perubahan Yayasan")
		{
			redirect('berkasorder/Perubahan-Yayasan/'.$_id);
		}

		if($layanan == "Penutupan Yayasan")
		{
			redirect('berkasorder/Penutupan-Yayasan/'.$_id);
		}

		if($layanan == "PPAT JB Tanah")
		{
			redirect('berkasorder/PPAT-JB-Tanah/'.$_id);
		}

		if($layanan == "PPAT Hibah")
		{
			redirect('berkasorder/PPAT-Hibah/'.$_id);
		}

		if($layanan == "SKMHT")
		{
			redirect('berkasorder/SKMHT/'.$_id);
		}

		if($layanan == "APHT")
		{
			redirect('berkasorder/APHT/'.$_id);
		}
		if($layanan == "APHB")
		{
			redirect('berkasorder/APHB/'.$_id);
		}

		if($layanan == "Jual Beli Lunas")
		{
			redirect('berkasorder/Jual-Beli-Lunas/'.$_id);
		}

		if($layanan == "Jual Beli Tidak Lunas")
		{
			redirect('berkasorder/Jual-Beli-Tidak-Lunas/'.$_id);
		}

		if($layanan == "Sewa Menyewa")
		{
			redirect('berkasorder/Sewa-Menyewa/'.$_id);
		}

		if($layanan == "Kerjasama Perorangan")
		{
			redirect('berkasorder/Kerjasama-Perorangan/'.$_id);
		}
		if($layanan == "Kerjasama Lembaga")
		{
			redirect('berkasorder/Kerjasama-Lembaga/'.$_id);
		}

		if($layanan == "Hutang Piutang")
		{
			redirect('berkasorder/Hutang-Piutang/'.$_id);
		}

		if($layanan == "Pinjam Pakai")
		{
			redirect('berkasorder/Pinjam-Pakai/'.$_id);
		}

		if($layanan == "Perjanjian Lepas")
		{
			redirect('berkasorder/Perjanjian-Lepas/'.$_id);
		}

		if($layanan == "Fidusia Perorangan")
		{
			redirect('berkasorder/Fidusia-Perorangan/'.$_id);
		}


		if($layanan == "Fidusia Lembaga")
		{
			redirect('berkasorder/Fidusia-Lembaga/'.$_id);
		}

		if($layanan == "Legalisasi")
		{
			redirect('berkasorder/Legalisasi/'.$_id);
		}

		if($layanan == "Waarmarking")
		{
			redirect('berkasorder/Waarmarking/'.$_id);
		}
		if($layanan == "Covernote")
		{
			redirect('berkasorder/Covernote/'.$_id);
		}
		if($layanan == "Protes")
		{
			redirect('berkasorder/Protes/'.$_id);
		}
		if($layanan == "Wasiat")
		{
			redirect('berkasorder/Wasiat/'.$_id);
		}
	}

	public function tambahBadanUsaha($_id)
	{
		$a = $this->input->post("_id");
		if($a == "")
		{
			$this->api->setAction("Execute");
			$data = $this->input->post('param');
			$data['id_order'] = $_id;
			$this->api->setParam(array("Target" => "orderbhnama", "Activity" => "insert", "ParamsData" => json_encode($data), "GetLastId" => "1"));
			$hasil = $this->api->execute("array");

		}else
		{

			$this->api->setAction("Execute");
			$data = $this->input->post('param');
			$data['id_order'] = $_id;
			$this->api->setParam(array("Target" => "orderbhnama", "Activity" => "update", "ParamsData" => json_encode($data),"ParamsFilter" => "_id = ".$a));
			$hasil = $this->api->execute("array");		
		}
			$cek = $this->sWhere('orderbhnama','id_order',$_id)->Data;
			$jml = count((array)$cek);
			if($jml == "1"){
				$this->api->setAction("Execute");
				$value = array("dipilih" => "1" );
				$this->api->setParam(array("Target" => "orderbhnama", "Activity" => "update", "ParamsData" => json_encode($value) , "ParamsFilter" => "id_order = ".$_id." " ,"GetLastId" => "1"));
				$hasil = $this->api->execute("array");
			}
			echo json_encode($hasil);
		//redirect('order/berkasorder/'.$_id);
	}

	public function editdokumen($_id){
		$data = $this->input->post('param');
		$id_order = $this->input->post('id_order');
		if(!empty($data)) 
		{

			$this->api->setAction("Execute");
			$data = $this->input->post("param");
			$this->api->setParam(array("Target" => "orderdokumen", "Activity" => "update", "ParamsData" => json_encode($data), "ParamsFilter" => "_id = ".$_id." " ,"GetLastId" => "1"));
			$out = $this->api->execute("array");
			if($data->Output != "0 row(s) affected"){
				$log = $this->DoList->user_log("orderdokumen","Edit Kelengkapan Dokumen",$id_order,"Edit Kelengkapan Dokumen ".$data['nama']);
			}

			echo json_encode($out);
		}else
		{
			$orderDok = $this->selectWhere("orderdokumen",$_id);
			$id_tb_order = $orderDok->Data[0]->id_order;
			$dataOrder = $this->selectWhere("tb_order",$id_tb_order);
			$this->load->view('order/editdokumen',["dataOrder" => $dataOrder, "orderDok" => $orderDok, "idtborder" => $id_tb_order ]);
		}
	}

	public function inf_order($_id)
	{
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "tb_order", "Activity" => "get" ,"ParamsFilter" => "_id = ".$_id." " ));
		$data['inf_order'] = $this->api->execute("array");
		echo json_encode($data);
	}

	public function tambahdokumen($_id){
		$data = $this->input->post('param');
		if(!empty($data))
		{

			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "orderdokumen", "Activity" => "insert", "ParamsData" => json_encode($data), "GetLastId" => "1"));
			$output = $this->api->execute("array");

			if($output->Output != ""){
				$log = $this->DoList->user_log("orderdokumen","Tambah Kelengkapan Dokumen",$data['id_order'],"Nama Dokumen ".$data['nama']);
			}
			echo json_encode($output);
		}else{
			$filter = "_id = '{$_id}'";
			$data["dataOrder"] = $this->DoList->m_sWhere_l_s('tb_order',$filter,"1000","_id desc");
			$this->load->view('order/tambahdokumen',$data);
		}
	}

	public function selectWhere($tb,$_id)
	{

		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "_id = ".$_id." " ));
		$data = $this->api->execute(true);
		return $data;
	}

//////////// ENd Kelengkapan Dokumen ///////////////
//////////// Berkas Dokumen /////////////////////
	public function cekBerkasOrder($_id)
	{

		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "orderbhumum" , "Activity" => "get" ,"ParamsFilter" => "id_order = ".$_id." " ));
		$tersedia = $this->api->execute("array");
		echo json_encode($tersedia);
	}
//////////// HERE GET DATA MODAL ///////////////////
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
		$arr = array("Target" 	=> "notarislayanan", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(id_layanan LIKE '%{$flt}%' or nama LIKE '%{$flt}%')";
		}

		$arr["ParamsFilter"] = $filter;
	
		$arr["ParamsSort"] = "id_layanan asc";

		
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
	
	public function data_notaris_rekanan()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "notarisrekanan", 
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
					$return .= "<tr id='{$result->_id}' onclick='set_notaris_rekanan(this);' style='cursor:pointer' data-notaris-rekanan='{$result->nama}' data-id='{$result->_id}'>";
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$result->nama_prov}</td>";
						$status = ($result->aktif == "1" ? "Open" : "Closed");
						$return .= "<td>{$status}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function getdatabase($table,$kywd)
	{
		if(isset($_GET['term'])){
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => $table , "Activity" => "get", "ParamsFilter" => $kywd." LIKE  '%".$_GET['term']."%' "));
			$return = $this->api->execute(true);

			foreach ($return->Data as $data) {
				$arr_result[] = $data->$kywd;
			}
			echo json_encode($arr_result);	
		}
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
////////// HERE GET DATA MODAL END ////////////////
/////////// Berkas Saksi ///////////////////////
	public function berkassaksi($_id)
	{
		$dataOrder = $this->selectWhere("tb_order",$_id);
		$this->load->view("order/berkassaksi",["dataOrder" => $dataOrder]);

	}

	public function simpansaksi()
	{
		$a = $this->input->post("_id");
		if($a == "")
		{
			$this->api->setAction("Execute");
			$data = $this->input->post('param');
			$this->api->setParam(array("Target" => "ordersaksi", "Activity" => "insert", "ParamsData" => json_encode($data), "GetLastId" => "1"));
			$output = $this->api->execute("array");
			if($output->Output != ""){
				$log = $this->DoList->user_log("ordersaksi","Tambah Berkas Saksi",$data['id_order'],"Berkas Saksi ".$data['nama']);
			}
		}else
		{

			$this->api->setAction("Execute");
			$data = $this->input->post('param');
			$this->api->setParam(array("Target" => "ordersaksi", "Activity" => "update", "ParamsData" => json_encode($data),"ParamsFilter" => "_id = ".$a));
			$output = $this->api->execute("array");		
			$log = $this->DoList->user_log("ordersaksi","Edit Berkas Saksi",$data['id_order'],"Berkas Saksi ".$data['nama']);
		}
		echo json_encode($output);
	}

	public function data_saksi()
	{

		$data = $this->input->post("param");
		$arr = array("Target" 	=> "notarissaksi", 
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
					$return .= "<tr id='{$result->_id}' onclick='set_saksi(this);' style='cursor:pointer' data-saksi='{$result->nama}' data-ket='{$result->ket}'>";
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$result->ket}</td>";
						$aktif = ($result->aktif == "1" ? "Aktif" : "Tidak Aktif");
						$return .= "<td>{$aktif}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function delBerkasSaksi($id)
	{
		$id_order = $this->input->post("id_order");
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "ordersaksi", "Activity" => "delete", "ParamsFilter" => "_id = '".$id."' "));
		$data = $this->api->execute(true);
		$log = $this->DoList->user_log("ordersaksi","Hapus Saksi",$id_order,"Berkas Saksi ID ".$id);
		echo json_encode($data);
	
	}

	public function tblBerkasSaksi($id)
	{
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "ordersaksi", "Activity" => "get","ParamsFilter"	=> "id_order = '". $id."'" ));
		$output = $this->api->execute(true);

		$return = "";
		foreach ($output->Data as $data) 
		{
			$return .= "<tr>";
				$return .= '<td style="text-align: center" >
								<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-bars"></i>
									</button>
									<ul class="dropdown-menu">
										<li><a role="button" data-id="'.$data->_id.'" onclick="editPihak(this);" ><i class="fa fa-edit"></i> Edit </a></li>
										<li><a role="button" data-id="'.$data->_id.'" data-nama="'.$data->nama.'" onclick="delSaksi(this)"><i class="fa fa-trash"></i> Hapus</a></li>
									</ul>
								</div>
							</td>';
				$return .= "<td>{$data->nama}</td>";
				$return .= "<td>{$data->ket}</td>";
			$return .= "</tr>";
		}

		echo json_encode(["list-data" => $return]);

	}

	public function editberkaspihak($id)
	{
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "ordersaksi" , "Activity" => "get" ,"ParamsFilter" => "_id = ".$id." " ));
		$data = $this->api->execute(true);
		
		echo json_encode($data);
	}
/////////// End Berkas Saksi ///////////////////
////////// Proses Order ////////////////////////
	public function prosestambah()
	{
		$this->api->setAction("Execute");
		$value = $this->input->post('param');
		$this->api->setParam(array("Target" => "orderproses", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
		$data = $this->api->execute("array");
		$log = $this->DoList->user_log("orderproses","Tambah Proses",$value['id_order'],"Order Tambah Proses ".$value['nama']);
		echo json_encode($data);
	}

	public function order_proses($id)
	{

		$dataOrder = $this->selectWhere("tb_order",$id);
		$this->load->view('order/monitoringproses', ['dataOrder' => $dataOrder]);
	}
	public function updateproses()
	{
		$data = $this->input->post('param');
		$filter = $this->input->post('filter');
		$id_order = $this->input->post('id_order');
		$a = "";
		//$return = $this->DoList->m_update2('orderproses',$filter,$data);;

		foreach ($data as $key => $value) {
			$a = $value;
			$filter = "_id = '".$value['_id']."'";
			unset($value['_id']);
			$return = $this->DoList->m_update('orderproses',$filter,$value);
		}
		$log = $this->DoList->user_log("orderproses","Update Proses",$id_order,"Order Update Proses ".$id_order);

		echo json_encode($return);


	}
//////////// End Proses Order /////////////////

	public function buatproses()
	{
		$param = $this->input->post("param");
		//
	        $this->api->setAction("Execute");
	        $this->api->setParam(array("Target" => 'notarisproses' , "Activity" => "get" ,"ParamsFilter" => "layanan = '".$param['id_layanan']."'" , "ParamsSort" => "urutan asc" , "Limit" => "200" ));
	        $data = $this->api->execute(true);

		foreach ($data->Data as $result) {	
			$this->api->setAction("Execute");
			$value = array("nama" => $result->nama , "id_order" => $param['id_order'], 'urutan' => $result->urutan );
			$this->api->setParam(array("Target" => "orderproses", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
			$resp = $this->api->execute("array");
		}
		echo json_encode($data);

	}

	public function deleteproses($id)
	{
		$id_order = $this->input->post('id_order');
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "orderproses", "Activity" => "delete", "ParamsFilter" => "_id = '".$id."' "));
		$data = $this->api->execute(true);
		$log = $this->DoList->user_log("orderproses","Hapus Proses",$id_order,"Order Hapus Proses ".$id);
		echo json_encode($data);
	}

	public function loadproses($id)
	{
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "orderproses", "Activity" => "get","ParamsFilter"	=> "id_order = '".$id."'", "Limit" => "100" ));
		$output = $this->api->execute("object");
		$return = "";
		foreach ($output->Data as $data) {
			$return .= "<tr baris-id='".$data->_id."' class='master'>";
				$return .= "<td>";
					$return .= "<input type='text' class='hide urutan' value='".$data->urutan."'>";
					$proses = ($data->diproses == "1" ? "checked" : "");
					$return .= '<div class="md-checkbox-inline">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="'.$data->_id.' diproses" class="md-check diproses" data-id="'.$data->_id.'" '.$proses.'>
                                        <label for="'.$data->_id.' diproses">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> '.$data->nama.' </label>
                                    </div>
                                </div>';
				$return .= "</td>";
				$return .= "<td>";
					$return .= "<input type='text' data-id='".$data->_id."' value=".$data->harga." onfocus='toN(this);' onblur='toM(this);' class='form-control biaya' id='".$data->_id."' >";
				$return .= "</td>";
				$return .= "<td style='text-align: center'>";
					$selesai = ($data->selesai == "1" ? "checked" : "");
					$return .= '<div class="md-checkbox-inline">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="'.$data->_id.' selesai" class="md-check selesai" data-id="'.$data->_id.'" '.$selesai.'>
                                        <label for="'.$data->_id.' selesai">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span></label>
                                    </div>
                                </div>';
				$return .= "</td>";
				$return .= "<td style='text-align: center'>";
					$diambil = ($data->diambil == "1" ? "checked" : "");
					$return .= '<div class="md-checkbox-inline">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="'.$data->_id.' diambil" class="md-check diambil" data-id="'.$data->_id.'" '.$diambil.'>
                                        <label for="'.$data->_id.' diambil">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span></label>
                                    </div>
                                </div>';
				$return .= "</td>";
				$return .= "<td>";
					$tanggal = ($data->tglambil != "1970-01-01" && $data->tglambil != "0000-00-00" ? date("d-M-Y", strtotime($data->tglambil)) : "");
					$return .= '<div class="input-group">
                                    <input type="text" onblur="FormatDateField(this)" onfocus="this.select()" id="'.$data->_id.' tglambil" rel="tooltip" title="* Masukkan tanggal daftar Order" class="form-control hasDatepicker tglambil" data-id="'.$data->_id.'" value='.$tanggal.' >
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>';
				$return .= "</td>";
				$return .= "<td>";
					$return .= "<input type='text' class='form-control catatan' id='".$data->_id." catatan' data-id='".$data->_id."'  value=".$data->catatan.">";
				$return .= "</td>";
				$return .= "<td style='text-align: center'>";
					$return .= '<a class="btn btn-danger hapus" onclick="hapus(this);" title="Hapus Data" data-nama="'.$data->nama.'" data-id="'.$data->_id.'">
                                    <i class=" fa fa-trash"></i>
                                </a>';
				$return .= "</td>";
			$return .= "</tr>";

		}
		echo json_encode($return);
	}

	public function detail($id)
	{
		$filter = "_id = '".$id."'";
		$data = $this->DoList->m_sWhere_l_s('tb_order',$filter,"1000","_id desc")->Data[0];

		$filter = "id_order = '".$id."'";
		$proses = $this->DoList->m_sWhere_l_s('orderproses',$filter,"1000","urutan asc");

		$filter = "id_order = '".$id."'";
		$billing = $this->DoList->m_sWhere_l_s('orderbilling',$filter,"1000","_id desc");

		$filter = "jenis = 'Order' AND ref_id ='".$id."' ";
		$efiling = $this->DoList->m_sWhere_l_s('notarisfiles',$filter,"1000","_id desc");

		$filter = "(tabel LIKE '%order%') AND no_ref = '".$id."' ";
		$userlog = $this->DoList->m_sWhere_l_s('notarislog',$filter,"1000","_id desc");
		$this->load->view("order/detail",['proses'=>$proses, 'id_order' => $id , 'billing' => $billing, 'data' => $data, 'efiling' => $efiling , 'userlog' => $userlog]);	
	}

	public function edit($_id)
	{
		if(!empty($this->input->post("param")))
		{
			$this->api->setAction("Execute");
			$value = $this->input->post("param");
			$value["tgl_order"] = date("Y-m-d", strtotime($value["tgl_order"]));
			$this->api->setParam(array("Target" => "tb_order", "Activity" => "update", "ParamsData" => json_encode($value), "ParamsFilter" => "_id = ".$_id." " ,"GetLastId" => "1"));
			$data = $this->api->execute("array");
			if($data->Output != ""){
				$log = $this->DoList->user_log("tb_order","Edit Order",$_id,"Order ID ".$_id);
			}
			echo json_encode("param edit");
		}
		else
		{
			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "tb_order", "Activity" => "get" ,"ParamsFilter" => "_id = ".$_id." " ));
			$data['output'] = $this->api->execute("array");
			$this->load->view('order/edit', $data);
		}
			
	}

	
	public function tambah()
	{
	     $this->api->setAction("Execute");
	     $this->api->setParam(array("Target" => "inf_provinsi", "Activity" => "get", "Limit" => "33" ));
	     $data['prov'] = $this->api->execute("object");

		$this->load->view('order/tambah',$data);
	}
	public function simpan()
	{
		$this->api->setAction("Execute");
		$value = $this->input->post("param");
		$value["kategori"] 	= $this->b4_layanan($value['layanan'],"kategori");

		$value["saldo"] 	= $this->b4_layanan($value['layanan'],"saldo");
		$value["saldo"]		= ($value["saldo"] == null ? "0" : $value["saldo"]);
		$value['tgl_input'] = date("Y-m-d");

		$value["tgl_order"] = date("Y-m-d", strtotime($value["tgl_order"]));
		$this->api->setParam(array("Target" => "tb_order", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));

		$data = $this->api->execute("array");
		if($data->Output != ""){
			$log = $this->DoList->user_log("tb_order","Tambah Order",$data->Output,"Order Klien ".$value['nama_klien']);
		}
		//StatOrder
		
		
		$myData = explode("-",$value['tgl_order']);
		foreach ($myData as $key => $value) {
			$myData[$key] = intval($value);
		}
		$filter = "t = '".$myData[0]."' AND b = '".$myData[1]."' ";
		//mengecek dan mengambil data stat order
		$cek = $this->DoList->m_sWhere('statorder',$filter)->Data[0];
		$hasil = "";
		if($cek->t == "")
		{

			$dikirim = array("t" => $myData[0],
							 "b" => $myData[1],
							 "o".$myData[2] => 1,
							 "jml_open" => 1 );	

			$hasil = $this->DoList->m_insert("statorder",$dikirim);
		}else{
			$beString = "o".$myData[2];
			$current = $cek->$beString;
			$dikirim = array("t" => $myData[0],
							 "b" => $myData[1],
							 "o".$myData[2] => $current+1,
							 "jml_open" => $cek->jml_open+1 );	
			$filter = "t = '".$myData[0]."' AND b = '".$myData[1]."' ";
			$hasil = $this->DoList->m_update("statorder",$filter,$dikirim);
		}

		echo json_encode($data);
	}

	public function b4_layanan($id,$jenis)
	{

		$data = $this->sWhere('notarislayanan','id_layanan',$id);	

		$return = ($jenis == "kategori" ? $data->Data[0]->kategori : $data->Data[0]->saldo);
		
		
		return $return;
	}


	public function kota()
	{
		if($this->input->post("provinsi"))
		{		
					$this->param = $this->input->post("provinsi");
					$return = "";
					$this->api->setAction("Execute");
					$this->api->setParam(array("Target" 	=> "inf_kota", 
									   "Activity"		=> "get", 
									   "Limit"  		=> 	"100",
										"ParamsFilter"	=> "lokasi_propinsi = '". $this->param["provinsi"]."'" ));	
										   
					$output = $this->api->execute(true);
					foreach ($output->Data as $out) {
						$return .= "<option value='{$out->lokasi_ID}'> {$out->lokasi_nama} </option>";
					}
					echo json_encode(["list_result" => $return]);
		}
	}

	public function delDok($_id)
	{
		$id_order = $this->input->post("param");
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "orderdokumen", "Activity" => "delete", "ParamsFilter" => "_id = '".$_id."' "));
		$data = $this->api->execute(true);
		$log = $this->DoList->user_log("orderdokumen","Delete Kelengkapan Dokumen",$id_order['id'],"Kelengkapan Dokumen ID ".$_id);
		echo json_encode($data);
	}




///////////////////////////////////// AJAX /////////////////////////////////////////////////////////
	
	protected function show_table()
	{
		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);
		

		$filter = "";
		if(!empty($this->param["kywd"])) {
			$flt =  $this->param["kywd"];
			$filter .= "(nama_klien LIKE '%{$flt}%' or nama_layanan LIKE '%{$flt}%' or nama_officer LIKE '%{$flt}%')";
		}

		if(!empty($this->param["filter"]["tgl_order"])) {
			$explode= explode(" - ",$this->param["filter"]["tgl_order"]);
			$date1 = date("Y-m-d", strtotime($explode[0]));
			$date2 = date("Y-m-d", strtotime($explode[1]));
			$flt = "tgl_order BETWEEN '". $date1 ."' and '". $date2 ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["nama_klien"])) {
			$flt = "nama_klien = '". $this->param["filter"]["nama_klien"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}
		if(!empty($this->param["filter"]["nama_layanan"])) {
			$flt = "nama_layanan = '". $this->param["filter"]["nama_layanan"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}
		if(!empty($this->param["filter"]["nama_officer"])) {
			$flt = "nama_officer = '". $this->param["filter"]["nama_officer"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}
		if(!empty($this->param["filter"]["open"])) {
			$a = ($this->param["filter"]["open"]==1  ? "1" : 0 );
			$flt = "is_closed = '". $a ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}
		if(!empty($this->param["filter"]["kategori"])) {
			$flt = "kategori = '". $this->param["filter"]["kategori"] ."'";
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
					$return .= "<tr id='{$result->_id}'>";
						$return .= '<td>
										<div class="btn-group">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fa fa-bars"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a role="button" href="'.base_url("order/edit/".$result->_id).'"><i class=""></i> Edit </a></li>
												<li><a role="button" href="'.base_url("order/orderdokumen/".$result->_id).'"><i class=""></i> Kelengkapan Dokumen</a></li>
												<li><a role="button" href="'.base_url("order/berkasorder/".$result->_id).'"><i class=""></i> Berkas Order</a></li>
												<li><a role="button" href="'.base_url("order/berkassaksi/".$result->_id).'"><i class=""></i> Berkas Saksi</a></li>
												<li><a role="button" href="'.base_url("order/order-proses/".$result->_id).'"><i class=""></i> Monitoring Proses</a></li>
												<li><a role="button" href="'.base_url("billing/detail/".$result->_id).'"><i class=""></i> Billing</a></li>
												<li><a role="button" href="'.base_url("efiling/index/".$result->_id."/order").'"><i class=""></i> e-Filing</a></li>
												<li><a role="button" href="'.base_url("datatransaksi/index/".$result->_id).'"><i class=""></i> Keuangan</a></li>
											</ul>
										</div>
									</td>';
						$return .= "<td><a href='order/detail/".$result->_id."'>{$result->_id}</a></td>";
						$return .= "<td>".date("d M Y", strtotime($result->tgl_order))."</td>";
						$return .= "<td><a href='klien/detail/".$result->id_klien."'>{$result->nama_klien}</a></td>";
						$return .= "<td>{$result->nama_layanan}</td>";
						$return .= "<td>{$result->sifat_akta}</td>";
						$return .= "<td>{$result->no_akta}</td>";
						$return .= "<td>{$result->no_berkas}</td>";
						$return .= "<td>{$result->nama_officer}</td>";
						$closed = ($result->is_closed == "0" ? "Open" : "Closed");
						$return .= "<td>{$closed}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='10'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='10'><center>Data tidak tersedia</center></td></tr>";
		
		return json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}


///////////////////////////////////// Table //////////////////////////////////////////////////////////
	public function kelengkapandokumenData($_id)
	{
		$a = $this->publicmodel;
		$filter = "id_order = '{$_id}' ";
		$output = $this->DoList->m_sWhere_l_s("orderdokumen" , $filter , "1000" , "_id desc");
		$return = "";
		if(!empty($output)) {
			if($output->IsError == false) {
				$n = 1;
				foreach($output->Data as $result) { 
					$return .= "<tr>";
						$return .= '<td>
										<div class="btn-group">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fa fa-bars"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a role="button" href="'.base_url("order/editdokumen/".$result->_id).'"><i class="fa fa-edit"></i> Edit </a></li>
												<li><a role="button" data-id="'.$result->_id.'" data-nama="'.$result->nama.'" onclick="delDok(this)"><i class="fa fa-trash"></i> Hapus</a></li>
											</ul>
										</div>
									</td>';
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>".$a->tglCek(date("d M Y", strtotime($result->diserahkan)))."</td>";
						$return .= "<td>{$result->penerima}</td>";
						$return .= "<td>".$a->tglCek(date("d M Y", strtotime($result->diambil)))."</td>";
						$return .= "<td>{$result->pengambil}</td>";
						$return .= "<td>{$result->catatan}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["list_result" => $return, "log" => $output ]);
	}

	public function sWhere($tb,$field,$_id)
    {
	    $this->api->setAction("Execute");
	    $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = '".$_id."' ", "Limit"  => "1000"));
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
}
?>
