<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class umum extends CI_Controller {


	public function __construct()
	{
	   parent::__construct();
	    //helpers
	   $this->load->helper('url');
	   $this->load->model('api');
	   $this->load->library('session');
	}


	public function getLayananbyID($id)
	{
		$getOrder 	= $this->sWhere('tb_order','_id',$id);
		$getOrder 	= $getOrder->Data[0]->layanan; 
		$output 	= $this->sWhere('notarislayanan','id_layanan',$getOrder);

		echo json_encode($output);
	}
//syntak v1
    public function doSomev1($id = "")
	{
	    $data   = $this->input->post("param");
	    $tbl    = $this->input->post("tbl");
	    $method = $this->input->post("method");
	    $sort   = $this->input->post("sort");
	    $limit  = $this->input->post("limit");
	    $filter = $this->input->post("filter");
	    $where  = ($this->input->post("where") == "" ? "" : $this->input->post("where"));

	    $output = $this->$method($tbl,$data,$sort,$limit,$filter,$id,$where);
	    echo json_encode($output);
	}
	public function doSome()
	{
		$data 	= $this->input->post("param");
		$tbl 	= $this->input->post("tbl");
		$method = $this->input->post("method");
		$id 	= $this->input->post("_id");
		$colom 	= $this->input->post("colom");
		$sort 	= $this->input->post("sort");
		$limit 	= $this->input->post("limit");


		$output = $this->$method($tbl,$colom,$id,$data,$sort,$limit);
		echo json_encode($output);
	}

	public function insertData($tbl,$colom,$id,$data,$sort,$limit)
	{

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "insert", "ParamsData" => json_encode($data)));
        $data = $this->api->execute(true);   
        return $data;
	}

//insup
	public function insupv1($tbl,$data,$sort,$limit,$filter,$id,$where = "")
    {
        if($id == "")
        {
            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tbl, "Activity" => "insert", "ParamsData" => json_encode($data)));
            $output = $this->api->execute(true);    
        }
        else
        {
            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tbl, 
                                        "Activity" => "update", 
                                        "ParamsData" => json_encode($data),
                                        "ParamsFilter" => $filter));
            $output = $this->api->execute(true);
        }
        return $output;
    }

	public function insup($tbl,$colom,$id,$data,$sort,$limit)
	{
		if($id == "")
		{
	        $this->api->setAction("Execute");
	        $this->api->setParam(array("Target" => $tbl, "Activity" => "insert", "ParamsData" => json_encode($data)));
	        $output = $this->api->execute(true);   	
		}
		else
		{
	        $this->api->setAction("Execute");
	        $this->api->setParam(array("Target" => $tbl, "Activity" => "update", "ParamsData" => json_encode($data),"ParamsFilter" => "".$colom." = ".$id));
	        $output = $this->api->execute(true);
		}
        return $output;
	}

	public function deleteData($tbl,$colom,$id,$data,$sort,$limit)
	{
	    $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "delete", "ParamsFilter" => "".$colom." = '".$id."' "));
        $data = $this->api->execute(true);
        return $data;
	}
	public function insertLayanan()
	{
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => "masterlayanan" , "Activity" => "get" ,"Limit" => "2000"));
        $data = $this->api->execute(true);

        foreach ($data->Data as $result) {
        	$ada = $this->sWhere('notarislayanan','id_layanan',$result->id_layanan);
        	$m_data = (array('id_layanan' 	=> $result->id_layanan,
        					 'kategori'		=> $result->kategori,
        					 'nama'			=> $result->nama,
        					 'nama2'		=> $result->nama2,
        					 'aktif'		=> '1' ));
        	if($ada->Data[0]->id_layanan == "")
        	{
        		$output = $this->insert('notarislayanan',$m_data);	
        	}
        	
        }
	}

	public function updateLayanan()
	{

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => "notarisproses" , "Activity" => "get" ,"Limit" => "2000"));
        $data = $this->api->execute(true);
        foreach ($data->Data as $result) {
        	$data2 = array('notaris' => "enotarisdotcom");
        		if($result->notaris == "")
        		{
        			$out = $this->update('notarisproses','_id', $result->_id, $data2);
        		}
        	
        }
        	echo "<pre>";
        	echo $data2;
        	echo "</pre>";
	}

    public function update($tbl,$field,$id,$data)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "update", "ParamsData" => json_encode($data),"ParamsFilter" => "".$field." = ".$id));
        $output = $this->api->execute(true);
        return $output;
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
		$arr = array("Target" 	=> "notarislayanan", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(id_layanan LIKE '%{$flt}%' or nama LIKE '%{$flt}%' or nama2 LIKE '%{$flt}%')";
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
	public function data_order()
	{
		$data = $this->input->post("param");
		$filt =  $this->input->post("flt");
		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(nama_layanan LIKE '%{$flt}%' or nama_klien LIKE '%{$flt}%')";
		}

		if(!empty($filt)) {
			$flt = "nama_layanan = '". $filt ."'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
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
						$aktif = ($result->is_closed == "1" ? "Close" : "Open");
						$return .= "<td>{$aktif}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function data_order_u()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(nama_klien LIKE '%{$flt}%')";
		}

			$flt = "is_closed = '0'";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;


		$arr["ParamsFilter"] = $filter;
		
			$sort = "_id DESC";
			$arr["ParamsSort"] = $sort;

		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);

		$return = "";
		if(!empty($output)) {
			if($output->IsError == false) {
				$n = 1;
				foreach($output->Data as $result) { 
					$return .= "<tr id='{$result->_id}' onclick='set_order_u(this);' style='cursor:pointer' data-order='{$result->nama_layanan}' data-id='{$result->_id}'>";
						$return .= "<td>{$result->_id}</td>";
						$return .= "<td>{$result->nama_klien}</td>";
						$return .= "<td>{$result->nama_layanan}</td>";
						$aktif = ($result->is_closed == "1" ? "Close" : "Open");
						$return .= "<td>{$aktif}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function data_kontak()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "finkontak", 
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
					$return .= "<tr id='{$result->_id}' onclick='set_kontak(this);' style='cursor:pointer' data-kontak='{$result->nama}' data-id='{$result->_id}' >";
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$result->catatan}</td>";
						$aktif = ($result->aktif == "1" ? "Aktif" : "Tidak Aktif");
						$return .= "<td>{$aktif}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function data_transaksi()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "fintransaksi", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(nomor LIKE '%{$flt}%')";
		}


        $filter .= (empty($filter)) ? "urutan = '0'" : " and urutan = '0'";
        $filter .= "   ";
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
					$return .= "<tr id='{$result->_id}' onclick='set_transaksi(this);' style='cursor:pointer' data-transaksi='{$result->nomor}' data-id='{$result->_id}' >";
						$return .= "<td>{$result->nomor}</td>";
						$return .= "<td>{$result->tgl}</td>";
						$return .= "<td>{$result->nama}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function SSP()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "taxssp", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(no_ssp LIKE '%{$flt}%')";
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
					$return .= "<tr id='{$result->_id}' onclick='set_SSP(this);' style='cursor:pointer' data-SSP='{$result->no_ssp}' data-id='{$result->_id}' >";
						$return .= "<td>{$result->no_ssp}</td>";
						$return .= "<td>{$result->tgl_input}</td>";
						$return .= "<td>{$result->nama}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function data_ssp()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "taxssp", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(no_ssp LIKE '%{$flt}%')";
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
					$return .= "<tr id='{$result->_id}' onclick='set_ssp(this);' style='cursor:pointer' data-SSP='{$result->no_ssp}' data-id='{$result->_id}' >";
						$return .= "<td>{$result->no_ssp}</td>";
						$return .= "<td>{$result->tgl_input}</td>";
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$result->jml}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}
	public function data_ssb()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "taxssb", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(no_ssb LIKE '%{$flt}%')";
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
					$return .= "<tr id='{$result->_id}' onclick='set_ssb(this);' style='cursor:pointer' data-ssb='{$result->no_ssb}' data-id='{$result->_id}' >";
						$return .= "<td>{$result->no_ssb}</td>";
						$return .= "<td>{$result->tgl_input}</td>";
						$return .= "<td>{$result->wp_nama}</td>";
						$return .= "<td>{$result->jmlbyr}</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
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
					$return .= "<tr id='{$result->_id}' onclick='set_officer(this);' style='cursor:pointer' data-officer='{$result->nama}' data-id='{$result->_id}' >";
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>".($result->aktif == "1" ? "Akitf" : "Tidak Akitf")."</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function data_NotarisRekanan()
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
					$return .= "<tr id='{$result->_id}' onclick='set_NotarisRekanan(this);' style='cursor:pointer' data-NotarisRekanan='{$result->nama}' data-id='{$result->_id}' >";
						$return .= "<td>{$result->nama}</td>";
						$return .= "<td>{$result->nama_kabkota}</td>";
						$return .= "<td>".($result->aktif == "1" ? "Akitf" : "Tidak Akitf")."</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function data_KonfirmasiBayar()
	{
		$data = $this->input->post("param");
		$arr = array("Target" 	=> "billingrekening", 
				   "Activity"	=> "get", 
				   "Page"  		=> $data['page']);
		

		$filter = "";
		if(!empty($data['kywd'])) {
			$flt =  $data['kywd'];
			$filter .= "(nama_bank LIKE '%{$flt}%')";
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
					$return .= "<tr id='{$result->_id}' onclick='set_KonfirmasiBayar(this);' style='cursor:pointer' data-KonfirmasiBayar='{$result->no_rekening}' data-id='{$result->_id}' >";
						$return .= "<td>{$result->nama_bank}</td>";
						$return .= "<td>{$result->atas_nama}</td>";
						$return .= "<td>{$result->no_rekening}</td>";
						$return .= "<td>".($result->aktif == "1" ? "Aktif" : "Tidak Aktif")."</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";
		
		echo json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

	public function sWhere($tb,$field,$_id)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = '".$_id."' " ));
        $data = $this->api->execute(true);
        return $data;
    }

    public function insert($tbl,$data)
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "insert", "ParamsData" => json_encode($data)));
        $data = $this->api->execute(true);   
        return $data;
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

	public function dropdown_provinsi()
	{
		$dataProv = $this->DoList->m_getData_l_s('provinces','100','name asc');
				foreach($dataProv->Data as $resp)
				{
					$return .= "<option value='".$resp->id."'>".$resp->name."</option>";
				}

		echo json_encode($return);
	}

	public function getKabKota($id)
	{
    	$dataKabKota = $this->DoList->m_sWhere_l_s('regencies',"province_id = '".$id."'",'100','name asc');
    	$return = "";
    	foreach($dataKabKota->Data as $resp)
		{
			$return .= "<option value='".$resp->id."'>".$resp->name."</option>";
		}
		echo json_encode($return);

	}

}
?>