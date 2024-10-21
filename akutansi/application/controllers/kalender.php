<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalender extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('kalender_model', 'model');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->publicmodel->checkPermission();
    }

    public function index()
    {
        $data['title'] = "Kalender";
        $data['users'] = $this->model->get_user();

        $this->load->view('kalender/layouts/header', $data);
        $this->load->view('kalender/index', $data);
        $this->load->view('kalender/layouts/footer');
    }

    public function show_data($id)
    {
        $result = $this->model->fetch_data($id);

        foreach ($result->Data as $value) {
            $value->isallday = ($value->isallday == 1 ? true : false);
        }

        echo json_encode($result);
    }

    public function add_event()
    {
        $validator = array('success' => false, 'messages' => array());

        $config = array(
            array(
                'field' => 'judul',
                'label' => 'Judul',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong.',
                )
            )
        );

        $this->form_validation->set_rules($config);
        $this->form_validation->set_error_delimiters('<p class="help-block">', '</p>');

        if ($this->form_validation->run() == true) {
            $validator['success'] = true;
            $validator['messages'] = "Success";

            $data = $this->input->post('param');

            $this->model->insert_event($data);
        } else {
            $validator['success'] = false;
            
            foreach ($this->input->post() as $key => $value) {
                $validator['messages'][$key] = form_error($key);
            }
        }

        echo json_encode($validator);
    }

    public function show_event()
    {
        $result = $this->model->get_event();

        foreach ($result->Data as $value) {
            $value->allDay = ($value->allDay == 1 ? true : false);
        }

        echo json_encode($result);
    }

    public function filter_user()
    {
        $user = $this->input->post('user');

        $result = $this->model->get_filtered_user($user);

        foreach ($result->Data as $value) {
            $value->allDay = ($value->allDay == 1 ? true : false);
        }

        echo json_encode($result);
    }

    public function show_event_list()
    {
        $date = $this->input->post('date');

        $result = $this->model->get_list_event($date);

        foreach ($result->Data as $value) {
            $value->allDay = ($value->allDay == 1 ? true : false);
        }

        echo json_encode($result);
    }

    public function update_event($id)
    {
        $data = $this->input->post('param');

        return $this->model->edit_event($id, $data);
    }

    public function update_event_form($id)
    {
        $validator = array('success' => false, 'messages' => array());

        $config = array(
            array(
                'field' => 'edit_judul',
                'label' => 'Judul',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong.',
                )
            ),
        );

        $this->form_validation->set_rules($config);
        $this->form_validation->set_error_delimiters('<p class="help-block">', '</p>');

        if ($this->form_validation->run() == true) {
            $validator['success'] = true;
            $validator['messages'] = "Success";

            $data = $this->input->post('param');

            $this->model->edit_event($id, $data);
        } else {
            $validator['success'] = false;
            
            foreach ($this->input->post() as $key => $value) {
                $validator['messages'][$key] = form_error($key);
            }
        }

        echo json_encode($validator);
    }

    public function delete_event($id)
    {
        return $this->model->destroy_event($id);
    }

    public function fetch_last_id()
    {
        $data = $this->model->get_last_id();

        foreach ($data->Data as $value) {
            echo (int)$value->id + 1;
        }
    }

    public function search()
    {
        $data = $this->input->post('search');

        $result = $this->model->get_search($data);

        foreach ($result->Data as $value) {
            $value->allDay = ($value->allDay == 1 ? true : false);
        }

        echo json_encode($result);
    }

    public function jumlah_reminder()
    {
        $result = $this->model->get_jumlah_remind();

        echo sizeof($result->Data);
    }

}

?>
