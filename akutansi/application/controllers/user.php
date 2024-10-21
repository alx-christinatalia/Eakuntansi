<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	    //helpers
	   $this->load->helper('url');
	   $this->load->model('api');
	   $this->load->library('session');
	}

	public function index()
	{
		$data = $this->session->userdata;
		if($data["user"] == ""){
			echo json_encode("gagal");
		}else
		{
			echo json_encode("sukses");
		}
	}

	public function get_admin()
	{
		$var = $this->session->userdata;

		echo json_encode($var['user']);
	}


	public function get_notaris()
	{

		$this->api->setAction("Execute");
	    $this->api->setParam(array("Target" => "notaris", "Activity" => "get"));
	    $data = $this->api->execute("object");
	    $data = $data->Data[0]->nama;
	    echo json_encode($data);
	}

	public function get_notaris_php(){
		
		$this->api->setAction("Execute");
	    $this->api->setParam(array("Target" => "notaris", "Activity" => "get"));
	    $data = $this->api->execute("object");
	    $data = $data->Data[0]->nama;
	    echo $data;
	}



	public function logout(){
		$this->session->sess_destroy("notaris");
		$this->session->sess_destroy("user");
		redirect("login");

	}

}

?>
