<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	    //helpers
	   $this->load->helper('url');
	   $this->load->model('api');
	   $this->load->library('session');
            $this->publicmodel->checkPermission();
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
			$this->load->view("dashboard/index");		
		}	
	}

	public function stat1() {

		$param = $this->input->post('param');

		$filter = "tgl_order BETWEEN '". $param['start'] ."' and '". $param['end'] ."'";
		$data = $this->DoList->m_sWhere_l_s("tb_order",$filter,"10000","_id DESC");
		$output = null;
		foreach ($data->Data as $resp) {
			$output[0]['y'] += ($resp->kategori == "badanhukum" ? 1 : 0);
			$output[0]['name'] = "Badan Hukum";
			$output[1]['y'] +=($resp->kategori == "ppat" ? 1 : 0);
			$output[1]['name'] = "PPAT";
			$output[2]['y'] +=($resp->kategori == "jualbelisewa" ? 1 : 0);
			$output[2]['name'] = "Jual Beli Sewa";
			$output[3]['y'] +=($resp->kategori == "kerjasama" ? 1 : 0);
			$output[3]['name'] = "Kerjasama";
			$output[4]['y'] +=($resp->kategori == "fidusia" ? 1 : 0);
			$output[4]['name'] = "Fidusia";
			$output[5]['y'] +=($resp->kategori == "umum" ? 1 : 0);
			$output[5]['name'] = "Umum";
		}

		echo json_encode($output);
		/*
		$param = $this->input->post('param');
		$tgl = explode("-",$param["start"]);
		$m_tgl = $tgl[0]."-".$tgl[1];
		$arr = array("Target" 		=> "tb_order", 
				    "Activity"		=> "get",
				    "Limit"			=> "1000",
					"ParamsSort"	=> "layanan asc");
		
		$filter = "";
			$flt = "(tgl_order LIKE '%{$m_tgl}%')";
			$filter .= (empty($filter)) ? $flt : " and ". $flt;
		
		$arr["ParamsFilter"] = $filter;

		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
								   
		$data = $this->api->execute(true);
		$output = [];
			$n = -1;
			$current = " - ";
			foreach ($data->Data as $resp) {
				if($current != $kategori)
				{
					$current = $kategori;
					$n++;
				}

				$filter = "id_layanan = '".$resp->layanan."'";
				$kategori = $this->DoList->m_sWhere('notarislayanan',$filter)->Data[0]->kategori;
				$output[$n]['name'] = $this->kategoriRapi($kategori);	
				$output[$n]['y'] +=1;
			}
		echo json_encode($output);
		*/
	}	
	public function kategoriRapi($data)
	{
		$output = "";
		switch ($data) {
		    case "badanhukum":
		        $output = "Badan Hukum";
		        break;
		    case "fidusia":
		        $output = "Fidusia";
		        break;
		    case "jualbelisewa":
		        $output = "Jual Beli Sewa";
		        break;
		    case "kerjasama":
		        $output = "Kerjasama";
		        break;
		    case "ppat":
		        $output = "PPAT";
		        break;
		    case "suratdibawahtangan":
		        $output = "Surat Dibawah Tangan";
		        break;
		    case "umum":
		        $output = "Umum";
		        break;
		    default:
		        $output = "Kosong";
		}
		return $output;
	}
	public function stat2() {
		$param = $this->input->post('param');
		$tgl = explode("-",$param["start"]);
		$filter = "t='".$tgl[0]."' and b='".$tgl[1]."' ";
		$data = $this->DoList->m_sWhere("statorder",$filter)->Data[0];
		$lastDate = date('Y-m-t', strtotime($param['start']));
		//cek tgl max
		$max = date('t', strtotime($param["start"]));

		for($i=1; $i<=$max; $i++ )
		{
			$o = "o".$i;
			$c = "c".$i;
			$output['data'][$i-1]['tgl'] = $i;
			$output['data'][$i-1]['open'] = intval(($data->$o == null ? 0 : $data->$o));
			$output['data'][$i-1]['close'] = intval(($data->$c == null ? 0 : $data->$c));	
		}
	



		//Total
		$output['total']['open']=($data->jml_open == null ? 0 : $data->jml_open);
		$output['total']['close']=($data->jml_closed == null ? 0 : $data->jml_closed);
		
		echo json_encode($output);
	}	

	public function hitung($jenis,$tgl)
	{
		$filter = "tgl_order = '".$tgl."' ";
		$data = $this->DoList->m_sWhere_l_s('tb_order',$filter,$limit,$sort);
		$output=0;
		foreach ($data->Data as $resp) {
			if($jenis == 'open')
			{
				$output += ($resp->is_closed == "0" ? 1 : 0 );
			}else{
				$output += ($resp->is_closed == "1" ? 1 : 0 );
			}
		}

		return $output ;
	}


	protected function show_table(){
		
		$arr = array("Target" 	=> "tb_order", 
				   "Activity"	=> "get",
				   "ParamsSort" => "_id desc",
				   "Page"  		=> $this->param["page"]);
		

		
		$this->api->setAction("Execute");
		$this->api->setParam($arr);	
							   
		$output = $this->api->execute(true);
		$return = "";
		if((!empty($output)) && $output->Data[0] != "") {
			if($output->IsError == false) {
				$n = 1;
				foreach($output->Data as $result) { 
					$return .= "<tr id='{$result->_id}'>";
						$return .= "<td><a href='".base_url('order/detail/'.$result->_id)."'>".$result->_id."</a></td>";
						$return .= "<td>".date("d M Y", strtotime($result->tgl_order))."</td>";
						$return .= "<td><a href='".base_url('klien/detail/'.$result->id_klien)."'>".$result->nama_klien."</a></td>";
						$return .= "<td>".$result->nama_layanan."</td>";
						$return .= "<td>".($result->is_closed == "0" ? "Open" : "Closed")."</td>";
					$return .= "</tr>";
				}
			} else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
		} else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";

		return json_encode(["paging" => $output->Paging, "list_result" => $return]);
	}

}

?>
