
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class klien extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	    //helpers

	   $this->load->library('export2pdf');
	   $this->load->helper('url');
	   $this->load->model('api');
	   $this->load->library('session');
            $this->publicmodel->checkPermission();
            $this->publicmodel->accessPermission("1");
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
		    $this->api->setParam(array("Target" => "provinces", "Activity" => "get", "Limit" => "35" , "ParamsSort" => "name asc"));
		    $data['prov'] = $this->api->execute("object");


			$this->load->view('klien/index',$data);
		}	
		
		
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

	public function detail($id)
	{
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "notarisklien", "Activity" => "get","ParamsFilter"	=> "_id = '". $id."'" ));
		$data["klien"] = $this->api->execute("object");


		$this->load->view("klien/detail",$data);	
	}

	public function cetak_form()
	{

	     $this->api->setAction("Execute");
	     $this->api->setParam(array("Target" => "provinces", "Activity" => "get", "Limit" => "35", "ParamsSort" => "name asc" ));
	     $data['prov'] = $this->api->execute("object");


	     $this->api->setAction("Execute");
	     $this->api->setParam(array("Target" => "notarisklien", "Activity" => "get", "Limit" => "1000" ));
	     $data['klien'] = $this->api->execute("object");

		$this->load->view("klien/formcetak",$data);
	}

	public function cetak_daftar_klien(){
		$data = $this->input->post();
				$arr = array("Target" 	=> "notarisklien", 
				   "Activity"	=> "get",
				   	"Limit" => "50");
		


		if(!empty($data["id_kabkota"])) {
			$flt = "id_kabkota = '". $data["id_kabkota"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($data["tgl_daftar"])) {
			$explode= explode(" - ",$data["tgl_daftar"]);
			$date1 = date("Y-m-d", strtotime($explode[0]));
			$date2 = date("Y-m-d", strtotime($explode[1]));
			$flt = "tgl_daftar BETWEEN '". $date1 ."' and '". $date2 ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}


		$arr["ParamsFilter"] = $filter;
		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
		
		$output["order"] = $this->api->execute("object");

		$this->load->view("klien/pdf/daftar",$output);
	}


	public function cetak_detail_klien($data1)
	{
		if($data1 != ""){
			$data = $data1;
		}else{
			$data = $this->input->post('id_klien');	
		}

		//echo $data['id_klien'];
		$klien = $this->sWhere('notarisklien','_id',$data,'_id DESC')->Data[0];
		$order = $this->sWhere('tb_order','id_klien',$data,'_id DESC');

		/*echo "<pre>";
		print_r($order);
		echo "</pre>";*/
		$this->load->view("klien/pdf/detail",array('klien' => $klien, 'order' => $order));
	}

	public function nama_kota()
	{
		$data = $this->input->post("param");
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "regencies", "Activity" => "get", "ParamsFilter"	=> "id = '". $data["id_kabkota"]."'"));
		$kota = $this->api->execute(true);
		$kota = $kota->Data[0]->name;

		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "provinces", "Activity" => "get", "ParamsFilter"	=> "id = '". $data["id_prov"]."'"));
		$provinsi = $this->api->execute(true);
		$provinsi = $provinsi->Data[0]->name;



		echo json_encode(["kota" => $kota , "prov" => $provinsi ]) ;
		
	}

	public function edit($id)
	{
		if(!empty($this->input->post("param")))
		{
			$value = $this->input->post("param");
			$value["tgl_daftar"] = date("Y-m-d", strtotime($value["tgl_daftar"]));

			$_id = $this->input->post("id");
			$this->api->setAction("Execute");
			
			$this->api->setParam(array("Target" => "notarisklien", "Activity" => "update", "ParamsData" => json_encode($value), "ParamsFilter" => "_id = '".$_id."' ", "GetLastId" => "1"));
			$data = $this->api->execute(true);
			if($data->Output != ""){
				$log = $this->DoList->user_log("notarisklien","Edit Klien",$_id,"Klien ".$value['nama']);
			}

		}else
		{
			$this->api->setAction("Execute");
		     $this->api->setParam(array("Target" => "provinces", "Activity" => "get", "Limit" => "35" ));
		     $data['prov'] = $this->api->execute("object");

			$this->api->setAction("Execute");
			$this->api->setParam(array("Target" => "notarisklien", "Activity" => "get","ParamsFilter"	=> "_id = '". $id."'" ));
			$data["klien"] = $this->api->execute("object");

			$this->load->view("klien/edit",$data);	
		}
		
	}

	public function delete($id){

		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "notarisklien", "Activity" => "delete", "ParamsFilter" => "_id = '".$id."' ", "GetLastId" => "1"));
		$data = $this->api->execute("array");
		if($data->Output != ""){
			$log = $this->DoList->user_log("notarisklien","Hapus Klien",$id,"Klien ID ".$id);
		}
		echo json_encode("sukses");
	}

	public function cek_history_order($id)
	{

		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "tb_order", "Activity" => "get", "ParamsFilter" => "id_klien = '".$id."' ", "GetLastId" => "1"));
		$data = $this->api->execute(true);
		$data = $data->Data[0];
		echo $data;
		if($data == null && $data == "")
		{

			$return = "sukses";			
		}
		else
		{
			$return = "gagal";
		}

		echo json_encode($return);

	}

	public function history_order($_id)
	{
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "tb_order", "Activity" => "get","ParamsFilter"	=> "id_klien = '". $_id."'" ));
		$output = $this->api->execute(true);

		$return = "";
		if(!empty($output)) {
			if($output->IsError == false) {
				$n = 1;
				foreach($output->Data as $result) { 
					$return .= "<tr id='{$result->_id}'>";
						$return .= "<td>{$result->_id}</td>";
						$return .= "<td>".date("d M Y", strtotime($result->tgl_order))."</td>";
						$return .= "<td>{$result->nama_layanan}</td>";
						$return .= "<td>{$result->deskripsi}</td>";
						$return .= "<td>{$result->no_akta}</td>";
						$return .= "<td>{$result->no_berkas}</td>";
							$status = ($result->is_closed == 0 ? 'Open' : 'Close') ;
						$return .= "<td>{$status}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		if($return == "")
		{
			$return .= "<tr><td colspan='7'><br><center>Data tidak tersedia</center></td></tr>";
		}
		echo json_encode(["list-data" => $return]);
	}

	public function convert()
	{
		$date = $this->input->post("param");
		$date1 = date("Y-m-d", strtotime($date));

		echo json_encode(["list_result" => $date1]) ;

	}

	public function tambah()
	{
	     $this->api->setAction("Execute");
	     $this->api->setParam(array("Target" => "provinces", "Activity" => "get", "Limit" => "35", "ParamsSort" => "name asc" ));
	     $data['prov'] = $this->api->execute("object");

		$this->load->view('klien/tambah',$data);
	}
	public function simpan()
	{
		$value = $this->input->post("param");
		$value["tgl_daftar"] = date("Y-m-d", strtotime($value["tgl_daftar"]));

		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "notarisklien", "Activity" => "insert", "ParamsData" => json_encode($value), "GetLastId" => "1"));
		$data = $this->api->execute(true);
		if($data->Output != ""){
			$log = $this->DoList->user_log("notarisklien","Tambah Klien",$data->Output,"Klien ".$value['nama']);
		}
		echo json_encode($data);
	}

	public function detail_kota()
	{
		$prov = "";
		$kota = "";
		if($this->input->post("provinsi"))
		{		
					$this->param = $this->input->post("provinsi");
					$return = "";
					$this->api->setAction("Execute");
					$this->api->setParam(array("Target" 	=> "inf_provinsi", 
									   "Activity"		=> "get", 
									   "Limit"  		=> 	"100",
										"ParamsFilter"	=> "lokasi_propinsi = '". $this->param["provinsi"]."'" ));	
										   
					$output = $this->api->execute(true);
					foreach ($output->Data as $out) {
						$prov = " {$out->lokasi_nama}";
					}
		}

		if($this->input->post("kota"))
		{		
					$this->param = $this->input->post("kota");
					$return = "";
					$this->api->setAction("Execute");
					$this->api->setParam(array("Target" 	=> "inf_kota", 
									   "Activity"		=> "get", 
									   "Limit"  		=> 	"100",
										"ParamsFilter"	=> "lokasi_ID = '". $this->param["kota"]."'" ));	
										   
					$output = $this->api->execute(true);
					foreach ($output->Data as $out) {
						$kota = " {$out->lokasi_nama}";
					}
		}

		echo json_encode(["_kota" => $kota, "_prov" => $prov]);
	}

	public function kota()
	{
		if($this->input->post("provinsi"))
		{		
					$this->param = $this->input->post("provinsi");
					$return = "";
					$this->api->setAction("Execute");
					$this->api->setParam(array("Target" 	=> "regencies", 
									   "Activity"		=> "get", 
									   "Limit"  		=> 	"514",
										"ParamsFilter"	=> "province_id = '". $this->param["provinsi"]."'",
										"ParamsSort" => "name asc"  ));	
										   
					$output = $this->api->execute(true);
					$return .= '<option value="">Pilih Nama Kota</option>';
					foreach ($output->Data as $out) {
						$return .= "<option value='{$out->id}'> {$out->name} </option>";
					}
					echo json_encode(["list_result" => $return]);
		}
	}

	public function f_randomstring() 
	{
		$length = 50;
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	     echo json_encode(["random" => $randomString]);
	}

	public function _kota($id){
		$this->api->setAction("Execute");
		$this->api->setParam(array("Target" => "inf_kota", "Activity" => "get", "ParamsFilter"	=> "lokasi_ID = '". $id."'" ));	
		$data = $this->api->execute(true);
		$data = $data->Data[0]->lokasi_nama;
		return $data; 
	}






	/////////////////ajax///////////////

	protected function show_table(){
		
		$arr = array("Target" 	=> "notarisklien", 
				   "Activity"	=> "get", 
				   "Page"  		=> $this->param["page"]);
		

		$filter = "";
		if(!empty($this->param["kywd"])) {
			$flt =  $this->param["kywd"];
			$filter .= "(nama LIKE '%{$flt}%' or email LIKE '%{$flt}%' or tgl_daftar LIKE '%{$flt}%')";
		}

		if(!empty($this->param["filter"]["kota"])) {
			$flt = "id_kabkota = '". $this->param["filter"]["kota"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["provinsi"])) {
			$flt = "id_prov = '". $this->param["filter"]["provinsi"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}
		if(!empty($this->param["filter"]["track"])) {
			$flt = "tracking = '". $this->param["filter"]["track"] ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		}

		if(!empty($this->param["filter"]["tgl_mulai"])) {
			$explode= explode(" - ",$this->param["filter"]["tgl_mulai"]);
			$date1 = date("Y-m-d", strtotime($explode[0]));
			$date2 = date("Y-m-d", strtotime($explode[1]));
			$flt = "tgl_daftar BETWEEN '". $date1 ."' and '". $date2 ."'";
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
		if((!empty($output)) && $output->Data[0] != "") {
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
												<li><a role="button" href="'.base_url("klien/edit/".$result->_id).'"><i class="fa fa-pencil-square-o"></i> Edit </a></li>
												<li><a role="button" href="'.base_url("efiling/index/".$result->_id."/klien").'"><i class="fa fa-database"></i> e-Filing</a></li>
												<li><a role="button" onclick="hapusData(this)" data-id="'.$result->_id.'" data-nama="'.$result->nama.'"><i class="fa fa-trash"></i>Hapus Data</a></li>
											</ul>
										</div>
									</td>';
						$return .= "<td><a href='".base_url("klien/detail/".$result->_id)."'>{$result->nama}</a></td>";
						$return .= "<td><a href='tel:".$result->notelp."'>{$result->notelp}</a></td>";
						$return .= "<td><a href='mailto:".$result->email."'>{$result->email}</a></td>";
						$return .= "<td style=\"text-transform: lowercase;text-transform: capitalize;\" >".$result->nama_kabkota."</td>";
						$return .= "<td>".date("d M Y", strtotime($result->tgl_daftar))."</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";

		return json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}
	
	public function sWhere($tb,$field,$_id,$sort)
    {
	    $this->api->setAction("Execute");
	    $this->api->setParam(array("Target" => $tb , "Activity" => "get" , "Limit" => "10" ,"ParamsFilter" => "".$field." = '".$_id."' " , "ParamsSort" => $sort));
	    $data = $this->api->execute(true);
	    return $data;
    }	


}
?>
