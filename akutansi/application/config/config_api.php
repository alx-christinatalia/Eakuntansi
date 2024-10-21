<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	//Api URL
	//$config["api_url"] 		= "http://".$_SERVER['HTTP_HOST']."/my-app/enotaris/Api/Api";
	$config['api_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
	$config['api_url'] .= "://".$_SERVER['HTTP_HOST'];
	$config['api_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME'].'Api/Api');
	//Api Key
	$config["api_key"] 		= "0febb3f1-25f6-4746-91ba-5330c21de84f";
	//Api Action List
	$config["api_action"]	= ["Execute", "FileDelete", "FileUpload", "ImageDelete", "ImageUpload"];

	$config["api_log_request"]  = true;

	$config["api_log_response"] = false;
