<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalender_model extends CI_Model {

	public function __construct()
	{
		$this->load->model('api');
	}

	public function fetch_data($id)
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "todolist",
			"Activity" => "get",
			"ParamsFilter" => "_id = '$id'"
		]);

		return $this->api->execute(true);
	}

	public function get_event()
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "todolist",
			"Activity" => "get",
			"ParamsField" => "_id AS id, title, start, end, isallday AS allDay, progres AS color"
		]);

		return $this->api->execute(true);
	}

	public function get_list_event($date)
	{
		$date = date('n', strtotime($date));

		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "todolist",
			"Activity" => "get",
			"ParamsField" => "_id AS id, title, start, end, isallday AS allDay, progres AS color",
			"ParamsFilter" => "MONTH(start) = '$date'"
		]);

		return $this->api->execute(true);
	}

	public function get_last_id()
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "todolist",
			"Activity" => "get",
			"ParamsField" => "MAX(_id) AS id"
		]);

		return $this->api->execute(true);
	}

	public function get_filtered_user($user)
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "todolist",
			"Activity" => "get",
			"ParamsField" => "_id AS id, title, start, end, isallday AS allDay, progres AS color",
			"ParamsFilter" => "user LIKE '$user%'"
		]);

		return $this->api->execute(true);
	}

	public function insert_event($data)
	{


		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "todolist",
			"Activity" => "insert",
			"ParamsData" => json_encode($data)
		]);
		$output = $this->api->execute(true);
		
		$log = $this->DoList->user_log("todolist","Tambah kalender Event ",$output->Output,$data['title']);

		return $output;
	}

	public function edit_event($id, $data)
	{

		$log = $this->DoList->user_log("todolist","Edit kalender Event ",$id,$data['title']);

		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "todolist",
			"Activity" => "update",
			"ParamsData" => json_encode($data),
			"ParamsFilter" => "_id = '$id'"
		]);

		return $this->api->execute(true);
	}

	public function get_user()
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "notarisuser",
			"Activity" => "get"
		]);

		return $this->api->execute(true);
	}

	public function destroy_event($id)
	{
		$filter = "_id = '".$id."'";
		$lg = $this->DoList->log_data("todolist",$filter);
		$log = $this->DoList->user_log("todolist","Hapus kalender Event ",$id,$lg->title);

		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "todolist",
			"Activity" => "delete",
			"ParamsFilter" => "_id = '$id'"
		]);

		return $this->api->execute(true);
	}

	public function get_search($data)
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "todolist",
			"Activity" => "get",
			"ParamsField" => "_id AS id, title, start, end, isallday AS allDay, progres AS color",
			"ParamsFilter" => "LOWER(title) LIKE '$data%'"
		]);

		return $this->api->execute(true);
	}

	public function get_jumlah_remind()
	{
		$this->api->setAction('Execute');
		
		$this->api->setParam([
			"Target" => "todolist",
			"Activity" => "get",
			"ParamsFilter" => "progres != '#5cb85c'"
		]);

		return $this->api->execute(true);
	}

}