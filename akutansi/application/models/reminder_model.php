<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reminder_model extends CI_Model {

	public function __construct()
	{
		$this->load->model('api');
	}

	public function get()
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "todolist",
			"Activity" => "get",
			"ParamsSort" => "created_at DESC"
		]);

		return $this->api->execute(true);
	}

	public function fetch_spesific($id)
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "todolist",
			"Activity" => "get",
			"ParamsFilter" => "_id = '$id'"
		]);

		return $this->api->execute(true);
	}

	public function get_last_id()
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "todolist",
			"Activity" => "get",
			"ParamsFilter" => "created_at = (SELECT MAX(created_at) FROM todolist)"
		]);

		return $this->api->execute(true);
	}

	public function update($id, $data)
	{
		$this->api->setAction('Execute');

		$this->api->setParam([
			"Target" => "todolist",
			"Activity" => "update",
			"ParamsData" => json_encode($data),
			"ParamsFilter" => "_id = '$id'"
		]);

		return $this->api->execute(true);
	}

}