<?php defined('BASEPATH') OR exit('No direct script access allowed');

class export2pdf {
	public function __construct ()
	{
		require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
		$pdf = new DOMPDF();

		$CI =& get_instance();
		$CI->dompdf = $pdf;
	}
}
?>