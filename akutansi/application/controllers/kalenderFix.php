<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kalenderFix extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //helpers
            $this->load->helper('url');
            $this->load->model('api');
            $this->load->library('session');
            $this->publicmodel->checkPermission();
    }


    public function insup($id)
    {

        $data = $this->input->post('param');

        $explode= explode(" - ",$data['tgl_mulai']);
        $data['tgl_mulai'] = date("Y-m-d", strtotime($explode[0]));
        $data['tgl_akhir'] = date("Y-m-d", strtotime($explode[1]));
 
        if($id == "")
        {
            $return = $this->DoList->m_insert('todolist',$data);
            $return = $this->DoList->m_getData('todolist');
        }else
        {

            $filter = "_id = '".$id."'";
            $return = $this->DoList->m_update('todolist',$filter,$data);
        }
        echo json_encode($return);
    }






}

?>
