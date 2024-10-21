<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reminder extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('reminder_model', 'model');
        $this->load->library('session');
        $this->publicmodel->checkPermission();
    }

    public function index()
    {
        $data['title'] = "Reminder";

        $result = $this->model->get();

        foreach ($result->Data as $value) {
            $value->isallday = ($value->isallday == 1 ? true : false);
            $value->start = date('d F Y', strtotime($value->start));
            $value->end = ( $value->isallday == 1 ? date( 'd F Y', strtotime('-1 day', strtotime($value->end)) ) : date('d F Y', strtotime($value->end)) );
            $value->user = explode(',', $value->user);
        }

        $data['data'] = $result;

        $this->load->view('kalender/layouts/header', $data);
        $this->load->view('kalender/reminder');
        $this->load->view('kalender/layouts/footer');
    }

    public function show($id)
    {
    	$result = $this->model->fetch_spesific($id);

    	foreach ($result->Data as $value) {
    		$value->start = date('d F Y', strtotime($value->start));
            $value->end = ( $value->isallday == 1 ? date( 'd F Y', strtotime('-1 day', strtotime($value->end)) ) : date('d F Y', strtotime($value->end)) );
    		$value->user = explode(',', $value->user);
    		$value->created_at = date('d-m-Y H:i', strtotime($value->created_at));
    		$value->updated_at = date('d-m-Y H:i', strtotime($value->updated_at));
    	}

    	echo json_encode($result);
    }

    public function edit($id)
    {
        $data = $this->input->post();

        return $this->model->update($id, $data);
    }

    public function fetch_last_id()
    {
        $result = $this->model->get_last_id();

        foreach ($result->Data as $value) {
            $value->start = date('d F Y', strtotime($value->start));
            $value->end = ( $value->isallday == 1 ? date( 'd F Y', strtotime('-1 day', strtotime($value->end)) ) : date('d F Y', strtotime($value->end)) );
            $value->user = explode(',', $value->user);
            $value->created_at = date('d-m-Y H:i', strtotime($value->created_at));
            $value->updated_at = date('d-m-Y H:i', strtotime($value->updated_at));
        }

        echo json_encode($result);
    }

}