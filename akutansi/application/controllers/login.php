<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	    //helpers
	   $this->load->helper('url');
	   $this->load->model('Api');
	   $this->load->library('session');
	}

	public function index()
	{
			$data = $this->session->userdata;
			if($data["user"] == ""){
				$this->load->view('template/login');	
			} else
			{
				redirect("dashboard");	
			}
	}

	public function test()
	{
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => "notaris", "Activity" => "get"));
        $data = $this->api->execute(true);
        print_r($data);
	}

	public function getData()
	{

		$cek1 = $this->DoList->m_getData("notaris")->Data[0]->_id;
		$cek2 = $this->DoList->m_getData("notarisuser")->Data[0]->_id;
		$output = "";
		if($cek1 != "" && $cek2 != "")
		{
			$output = "ada";
		}else{
			$output = "tidak ada";
		}

		echo json_encode($output);
	}

	public function daftar()
	{
		$data = $this->input->post('param');
		$cek1 = $this->DoList->m_getData("notaris")->Data[0]->_id;
		$cek2 = $this->DoList->m_getData("notarisuser")->Data[0]->_id;
		$output = "";
		if($cek1 == "")
		{
			$daftarkan = $this->DoList->m_insert('notaris',$data);
			$output = "sukses";
		}else{
			$output = "terdaftar";
		}
		echo json_encode($output);
	}

	public function daftar_admin()
	{
		$data = $this->input->post('param');
		$data['akses'] = "1111111111";
		$data['tgl_daftar'] = date("Y-m-d");
		$data['aktif'] = "1";
		$cek1 = $this->DoList->m_getData("notaris")->Data[0]->_id;
		$cek2 = $this->DoList->m_getData("notarisuser")->Data[0]->_id;
		$output = "";
			$daftarkan = $this->DoList->m_insert('notarisuser',$data);
			$output = "sukses";
		echo json_encode($output);
	}

	public function dashboard(){
		redirect("dashboard");
	}

	public function mLogin()
	{
		 if($this->input->post("param")){
			$this->param = $this->input->post("param");
			if(!empty($this->param)){
				$this->api->setAction("Execute");
				$this->api->setParam(array("Target" 		=> "notarisuser",
											"Activity"		=> "get",
											"ParamsFilter"	=> "email = '".$this->param["username"]."'"));
				$data = $this->api->execute(true);
				if($data->IsError == false){
					$page = $data->Paging;
					$val  = $data->Data[0];
					if($val->pwd == $this->param["password"] and $page->Total == 1) {
						$data = "berhasil";
						$sess["user"] = $val;
						$sess["enotaris"] = $this->DoList->m_getData("notaris")->Data[0];
						$filter = "_id = '".$val->_id."' ";
						$this->DoList->m_update("notarisuser",$filter,array("lst_login" => date("Y-m-d") ));
						$this->session->set_userdata($sess);
					}else
					{
						$data = $val;		
					}
				}else
				{
					$data = "gagal2";
				}
				echo json_encode($data);
			}
		} 
	}

	public function n_notaris(){
		$var = $this->session->userdata;

		echo json_encode($var['user']);
	}
}
?>
