<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class akses_ditolak extends CI_Controller {
        

        public function __construct() {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('api');
            $this->load->library('session');
        }

        public function index()
        {
            
                $this->load->view('template/denied');   
            
            
    }

}
