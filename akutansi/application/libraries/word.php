<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class word {

	// public function __construct ()
	// {
	// 	require_once APPPATH.'third_party/PHPWord.php';
		
	// 	$PHPWord = new PHPWord();
	// 	return $PHPWord;
	// }

	public function load()
	{
		require_once APPPATH.'third_party/PHPWord.php';
		
		return  new PHPWord();
	}
	

}
