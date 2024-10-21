<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboardkeuangan extends CI_Controller {

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

	public function rupiah($uang)
	{
		return $this->publicmodel->rupiah($uang);
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
			$this->load->view("keuangan/dashboardkeuangan/index");		
		}	
	}

	public function stat1()
	{

		$param = $this->input->post('param');
		$last =  date('Y-m-d');
		$explode = explode("-", $param['start']);
		$filter = "periode  BETWEEN '197001' and  '".$explode[0].$explode[1]."'";
		
		$data  = $this->DoList->m_sWhere_l_s("akunanggaran",$filter,"10000","_id ASC");

		$output[0]= 0;
		$output[1]= 0;
		$output[2]= 0;
		$output[3]= 0;
		foreach ($data->Data as $resp) {

			if($resp->kategori == "11" || $resp->kategori == "12")
				{		
					$output[0] += $resp->total; 
				}

				if($resp->kategori == "13")
				{		
					$output[1] += $resp->total; 
				}

				if($resp->kategori == "21" || $resp->kategori == "22")
				{		
					$output[2] += $resp->total; 
				}

				if($resp->kategori == "32" || $resp->kategori == "33")
				{		
					$output[3] += $resp->total; 
				}
		}

		$output[0]="Rp ".$this->rupiah($output[0]);
		$output[1]="Rp ".$this->rupiah($output[1]);
		$output[2]="Rp ".$this->rupiah($output[2]);
		$output[3]="Rp ".$this->rupiah($output[3]);
	

		echo json_encode($output);
	}

	public function stat2() {
		$param = $this->input->post('param');

		$last =  date('Y-m-d');
		$explode = explode("-", $param['start']);
		$kategori = "AND kategori = '41' OR kategori = '42' ";
		$filter = "periode  BETWEEN '197001' and  '".$explode[0].$explode[1]."' ".$kategori;
		
		$data  = $this->DoList->m_sWhere_l_s("akunanggaran",$filter,"10000","_id asc");
		foreach ($data->Data as $resp) {
				$output[0]['name'] = 'pendapatan';
				$output[0]['y'] += intval($resp->total);
		}

		$kategori = "AND kategori = '52' OR kategori = '53' ";
		$filter = "periode  BETWEEN '197001' and  '".$explode[0].$explode[1]."' ".$kategori;
		
		$data  = $this->DoList->m_sWhere_l_s("akunanggaran",$filter,"10000","_id asc");
		$output[1]['y'] = 0;
			foreach ($data->Data as $resp) {

				$output[1]['name'] = 'Beban';
				$output[1]['y'] += intval($resp->total);
			}
		echo json_encode($output);
	}

	public function hitungstat2($date,$akun)
	{

		$flt = "(tgl LIKE '%{$date}%') AND akun = '".$akun."'";
		$data = $this->DoList->m_sWhere_l_s('fintransaksi',$flt,'1000','');
		$output = 0;
		foreach ($data->Data as $resp) {
			$output += intval($resp->kredit);
			$output -= intval($resp->debit);
		}
		return $output;
		//echo json_encode($output);
	}
	
	public function kas()
	{
		$param = $this->input->post('param');

		$last =  date('Y-m-d');
		$explode = explode("-", $param['start']);
		$kategori = "AND kategori = '11' OR kategori = '12' ";
		$filter = "periode  BETWEEN '197001' and  '".$explode[0].$explode[1]."' ".$kategori;
		
		$data  = $this->DoList->m_sWhere_l_s("akunanggaran",$filter,"10000","total DESC");
		$output = "";
		$no=0;
		$total=[];
		foreach ($data->Data as $resp) {
			$total["$resp->nama"]  += $resp->total;
		}
		$keys = array_keys($total);
		rsort($total);
		$keys = array_combine($keys, $total);
		foreach ($keys as $key => $value) {
		$no++;
				$output .= "<tr>";
					$output .= "<td>{$no}</td>";
					$output .= "<td>{$key}</td>";
					$output .= "<td class='uang' style='text-align:right'>{$this->rupiah($value)}</td>";
				$output .= "</tr>";
		}
		echo json_encode($output);
	}

	function piutang()
	{
		$param = $this->input->post('param');

		$last =  date('Y-m-d');
		$explode = explode("-", $param['start']);
		$kategori = "AND kategori = '13' ";
		$filter = "periode  BETWEEN '197001' and  '".$explode[0].$explode[1]."' ".$kategori;
		$data  = $this->DoList->m_sWhere_l_s("akunanggaran",$filter,"10000","_id DESC");
		//$filter = "kategori = 52";
		//$data = $this->DoList->m_sWhere_l_s("finakun",$filter,"10000","_id DESC");
		$output = "";
		$no=0;
		foreach ($data->Data as $resp) {
			$total["$resp->nama"]  += $resp->total;
		}
		$keys = array_keys($total);
		rsort($total);
		$keys = array_combine($keys, $total);
		foreach ($data->Data as $data) {
		$no++;
				$output .= "<tr>";
					$output .= "<td>{$no}</td>";
					$output .= "<td>".$data->kode."".$data->nama."</td>";
					$output .= "<td class='uang' style='text-align:right'>{$this->rupiah($value)}</td>";
					//$output .= "<td class='uang' style='text-align:right'>{$this->rupiah($value)}</td>"
				$output .= "</tr>";
		}
		echo json_encode($output);
	}

	function hutang()
	{
		$param = $this->input->post('param');

		$last =  date('Y-m-d');
		$explode = explode("-", $param['start']);
		$kategori = "AND kategori = '21' OR kategori = '22' ";
		$filter = "periode  BETWEEN '197001' and  '".$explode[0].$explode[1]."' ".$kategori;
		
		$data  = $this->DoList->m_sWhere_l_s("akunanggaran",$filter,"10000","total DESC");
		$output = "";
		$no=0;
		foreach ($data->Data as $resp) {
			$total["$resp->nama"]  += $resp->total;
		}
		$keys = array_keys($total);
		rsort($total);
		$keys = array_combine($keys, $total);
		foreach ($keys as $key => $value) {
		$no++;
				$output .= "<tr>";
					$output .= "<td>{$no}</td>";
					$output .= "<td>{$key}</td>";
					$output .= "<td class='uang' style='text-align:right'>{$this->rupiah($value)}</td>";
				$output .= "</tr>";
		}
		echo json_encode($output);
	}

	function pendapatan()
	{
		$param = $this->input->post('param');

		$last =  date('Y-m-d');
		$explode = explode("-", $param['start']);
		//$kategori = "AND kategori = '41' OR kategori = '42' ";
		$filter = "periode  BETWEEN '197001' and  '".$explode[0].$explode[1]."' ".$kategori;
		
		$data  = $this->DoList->m_sWhere_l_s("akunanggaran",$filter,"10","total ASC");
		$output = "";
		$no=0;
		// foreach ($data->Data as $resp) {
		// 	$total["$resp->nama"]  += $resp->total;
		// }
		// $keys = array_keys($total);
		// rsort($total);
		// $keys = array_combine($keys, $total);
		// foreach ($keys as $key => $value) {
		// $no++;
		// 		$output .= "<tr>";
		// 			$output .= "<td>{$no}</td>";
		// 			$output .= "<td>{$key}</td>";
		// 			$output .= "<td class='uang' style='text-align:right'>{$this->rupiah($value)}</td>";
		// 		$output .= "</tr>";
		// }
		foreach ($data->Data as $resp) {
			$total["$resp->nama"]  += $resp->total;
		}
		$keys = array_keys($total);
		rsort($total);
		$keys = array_combine($keys, $total);
		foreach ($keys as $key => $value) {
		$no++;
				$output .= "<tr>";
					$output .= "<td>{$no}</td>";
					$output .= "<td>{$key}</td>";
					$output .= "<td class='uang' style='text-align:right'>{$this->rupiah($value)}</td>";
				$output .= "</tr>";
		}
		echo json_encode($output);
	}

	public function hitung($kode,$tgl)
	{
		$filter = "akun = '".$kode."' AND tgl BETWEEN  '1970-01-01' and '".$tgl."' ";
		$akun = $this->DoList->m_sWhere_l_s('fintransaksi',$filter,'1000','akun asc');
		$output =0;
		foreach ($akun->Data as $resp) {
			$output += $resp->debit - $resp->kredit;
		}
		return $output;
	}

	public function beban()
	{
		$param = $this->input->post('param');

		$last =  date('Y-m-d');
		$explode = explode("-", $param['start']);
		$kategori = "AND kategori = '52' OR kategori = '53' ";
		$filter = "periode  BETWEEN '197001' and  '".$explode[0].$explode[1]."' ".$kategori;
		
		$data  = $this->DoList->m_sWhere_l_s("akunanggaran",$filter,"10000","total DESC");
		$output = "";
		$no=0;
		foreach ($data->Data as $resp) {
			$total["$resp->nama"]  += $resp->total;
		}
		$keys = array_keys($total);
		rsort($total);
		$keys = array_combine($keys, $total);
		foreach ($keys as $key => $value) {
		$no++;
				$output .= "<tr>";
					$output .= "<td>{$no}</td>";
					$output .= "<td>{$key}</td>";
					$output .= "<td class='uang' style='text-align:right'>{$this->rupiah($value)}</td>";
				$output .= "</tr>";
		}
		echo json_encode($output);
	}

	public function _akun($kode)
	{
		$filter="kode = '".$kode."'";
		$output = $this->DoList->m_sWhere('finakun',$filter)->Data[0];
		return $output;
	}

	public function buat_table($data)
	{
		$kuy ="";


		$filter = "tgl BETWEEN '1970-01-01' and '".$param['start']."' AND ispost = '1'";
		$data1 = $this->DoList->m_sWhere_l_s('fintransaksi',$filter,'10000','_id desc');

		foreach ($data as $key => $value) {
			$no=1;
			if($key == "kas")			
			{
				$filter = "kategori = '11' OR kategori = '12' ";
				$data1 = $this->DoList->m_sWhere_l_s('finakun',$filter,'10000','kode asc');				
				foreach ($data1->Data as $resp) {
					$kas .= "<tr>";
						$kas .= "<td>".$no."</td>";
						$kas .= "<td>".$resp->kode." - ".$resp->nama."</td>";
						$kas .= "<td>".$value->kas->a1101."</td>";
					$kas .= "</tr>";
					$no++;
				}
			}
			$k .= $value;
		}

			//kas-piutang-pendapatan-hutang-beban
		return $k;
		//return ['kas' => $kas, 'piutang' => $piutang, "pendapatan" => $pendapatan, "hutang" => $hutang, "beban" => $beban ];

	}


	/*function hutang()
	{
		$param = $this->input->post('param');

		$last =  date('Y-m-d');
		$explode = explode("-", $param['start']);
		//$kategori = "AND kategori='21' ";
		//$filter = "periode  BETWEEN '197001' and  '".$explode[0].$explode[1]."' ".$kategori;
		
		//$data  = $this->DoList->m_sWhere_l_s("akunanggaran",$filter,"10000","total DESC");
		$filter = "kategori = 13";
		$data = $this->DoList->m_sWhere_l_s("finakun",$filter,"10000","_id DESC");
		$output = "";
		$no=0;
		foreach ($data->Data as $resp) {
			$total["$resp->nama"]  += $resp->total;
		}
		$keys = array_keys($total);
		rsort($total);
		$keys = array_combine($keys, $total);
		foreach ($data->Data as $data) {
		$no++;
				$output .= "<tr>";
					$output .= "<td>{$no}</td>";
					$output .= "<td>".$data->kode." - ".$data->nama."</td>";
					//$output .= "<td class='uang' style='text-align:right'>{$this->rupiah($value)}</td>";
					//$output .= "<td class='uang' style='text-align:right'>{$this->rupiah($value)}</td>"
				$output .= "</tr>";
		}
		echo json_encode($output);
	}*/
}

?>
