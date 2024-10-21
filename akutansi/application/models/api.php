<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Api extends CI_Model {
		
		protected $url;
		protected $output, $param = [];
	
		public function __construct() {
			parent::__construct();
		}
		
		public function setAction($action, $param = []) {
			$this->reset_var();
			if(in_array($action, $this->config->item("api_action"))) {
				$this->url = $this->config->item("api_url") ."/". $action;
				return true;
			}
			
			$this->output = "invalid_action";
			return false;
		}
		
		public function setParam($param = []) {
			$this->param = [];

			$this->param["Api_Key"] 		= $this->config->item("api_key");
			$this->param["Activity"] 		= (!empty($param["Activity"])) 		? $param["Activity"] 		: "";
			$this->param["ParamsData"] 		= (!empty($param["ParamsData"])) 	? $param["ParamsData"] 		: "";
			$this->param["ParamsField"] 	= (!empty($param["ParamsField"])) 	? $param["ParamsField"] 	: "";
			$this->param["ParamsFilter"] 	= (!empty($param["ParamsFilter"])) 	? $param["ParamsFilter"]	: "";
			$this->param["ParamsSort"] 		= (!empty($param["ParamsSort"])) 	? $param["ParamsSort"] 		: "";
			$this->param["ParamsGroupBy"] 	= (!empty($param["ParamsGroupBy"])) ? $param["ParamsGroupBy"] 	: "";
			$this->param["Page"]			= (!empty($param["Page"]))			? $param["Page"] 			: "1";
			$this->param["Limit"] 			= (!empty($param["Limit"])) 		? $param["Limit"] 			: "10";
			$this->param["GetLastId"] 		= (!empty($param["GetLastId"])) 	? $param["GetLastId"] 		: "";
			$this->param["ProcessName"] 	= (!empty($param["ProcessName"])) 	? $param["ProcessName"] 	: "";
			$this->param["UserId"] 			= (!empty($param["UserId"])) 		? $param["UserId"] 			: "";
			$this->param["FromIP"] 			= (!empty($param["FromIP"])) 		? $param["FromIP"] 			: "";

			$this->param["JmlFileHasil"] 	= (!empty($param["JmlFileHasil"])) 	? $param["JmlFileHasil"] 	: "1";
			$this->param["FolderName"] 		= (!empty($param["FolderName"])) 	? $param["FolderName"] 		: "default";
			$this->param["FileBase64"] 		= (!empty($param["FileBase64"])) 	? $param["FileBase64"] 		: "";
			$this->param["SettingGambar"] 	= (!empty($param["SettingGambar"])) ? $param["SettingGambar"] 	: "";
			$this->param = array_merge($this->param, $param);
			return true;
		}
		
		public function execute($decode_output = false) {
			$this->output = $this->curl->simple_post($this->url, $this->param);

			if($this->config->item("api_log_request")) {
				log_message("debug", "url : {$this->url}, param : ".json_encode($this->param));
			}
			
			if($this->config->item("api_log_response")) {
				log_message("debug", "output : {$this->output}");
			}
			
			switch($decode_output) {
				case true :
					return json_decode($this->output);
				break;
				default : 
					return $this->output;
				break;
			}
		}
		
		private function reset_var() {
			$this->output 	= NULL;
		}
	}
