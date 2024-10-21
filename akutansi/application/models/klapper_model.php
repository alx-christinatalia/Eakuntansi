<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klapper_model extends CI_Model {	

	public function __construct()
	{
		$this->load->model('api');
	}

	public function get_data($tanggal)
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "view_klapper",
			"Activity" => "get",
			"ParamsField" => "_id, nama_klien, sifat_akta, tgl_menghadap, no_akta, no_repertorium",
			"Limit" => "0, 1000",
			"ParamsSort" => "nama_klien ASC",
			"ParamsFilter" => "tgl_menghadap LIKE '%$tanggal%'"
		]);

		return $this->api->execute(true);
	}

}