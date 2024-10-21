<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bypass extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
        //helpers
       $this->load->helper('url');
       $this->load->model('api');
       $this->load->library('session');
            $this->load->library('pdf');
    }

    public function sess()
    {
    	echo "<pre>";
      print_r($this->session->userdata("user"));
      print_r($this->session->userdata("notaris"));
    }

    public function akses_denied(){
        $this->load->view("template/denied");
    }

    public function m_pdf($id)
    {
            $filter = "_id = '".$id."'";
            $data['data'] = $this->DoList->m_sWhere("taxssp",$filter)->Data[0];
            $this->pdf->load();
            $pdf = new MPDF('utf-8', array(250,400));
            $pdf->SetImportUse();
            $pagecount  = $pdf->SetSourceFile("./upload/SSP.pdf",true);
            $tplId = $pdf->ImportPage($pagecount,-5,0,300,300);
            $actualsize = $pdf->UseTemplate($tplId);
            $data['hlm']    = "1";
            $html = $this->load->view("pajak/ssp/cetak", $data ,true);
            $pdf->WriteHTML($html);
            $pdf->AddPage();
            $data['hlm']    = "2";
            $pdf->WriteHTML("$html");
            $actualsize = $pdf->UseTemplate($tplId);

            $pdf->Output();
    }

    public function PDF1($id)
    {
            $filter = "_id = '".$id."'";
            $data['data'] = $this->DoList->m_sWhere("taxssp",$filter)->Data[0];
            $this->load->view("pajak/ssp/cetak",$data);
    }

    public function our_pdf()
    {
            echo $this->mpdf->pdf();
    }


}
