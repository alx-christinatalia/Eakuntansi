<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan_model extends CI_Model {

	public function __construct()
	{
		$this->load->model('api');
	}

	public function get_notaris_klien($id)
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "notarisklien",
			"Activity" => "get",
			"ParamsFilter" => "_id = '$id'",
			"Limit" => "1000"
		]);

		return $this->api->execute(true);
	}

	public function get_fin_kontak($id)
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "finkontak",
			"Activity" => "get",
			"ParamsFilter" => "_id = '$id'",
			"Limit" => "1000"
		]);

		return $this->api->execute(true);
	}

	public function get_fin_akun()
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "finakun",
			"Activity" => "get",
			"Limit" => "1000"
		]);

		return $this->api->execute(true);
	}

	public function get_fin_akun_where($filter)
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "finakun",
			"Activity" => "get",
			"ParamsFilter" => $filter,
			"Limit" => "1000"
		]);

		return $this->api->execute(true);
	}

	public function get_notaris_data()
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "notaris",
			"Activity" => "get",
			"Limit" => "1000"
		]);

		return $this->api->execute(true);
	}

	public function get_code()
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "finhutangpiutang",
			"Activity" => "get",
			"ParamsField" => "DISTINCT k",
			"Limit" => "1000"
		]);

		return $this->api->execute(true);
	}

	public function get_byr_where($id)
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "finhutangpiutang",
			"Activity" => "get",
			"ParamsField" => "SUM(byr) AS byr, SUM(tb) AS tb",
			"Limit" => "1000",
			"ParamsFilter" => "k = '$id'"
		]);

		return $this->api->execute(true);
	}

	public function get_fin_anggaran_where($filter)
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "finanggaran",
			"Activity" => "get",
			"Limit" => "1000",
			"ParamsFilter" => $filter
		]);

		return $this->api->execute(true);
	}

    public function getnamabulan($angka){
    	switch ($angka) {
    		case '01':
    			return "Januari";
    			break;
    		
    		case '02':
    			return "Februari";
    			break;

    		case '03':
    			return "Maret";
    			break;

    		case '04':
    			return "April";
    			break;

    		case '05':
    			return "Mei";
    			break;

    		case '06':
    			return "Juni";
    			break;

    		case '07':
    			return "Juli";
    			break;

    		case '08':
    			return "Agustus";
    			break;

    		case '09':
    			return "September";
    			break;

    		case '10':
    			return "Oktober";
    			break;

    		case '11':
    			return "November";
    			break;

    		case '12':
    			return "Desember";
    			break;
    		default:
    			return "error";
    			break;
    	}
    }

}