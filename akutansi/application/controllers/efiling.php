<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class efiling extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
        //helpers
       $this->load->helper('url');
       $this->load->model('api');
       $this->load->library('session');
       $this->load->helper('file');
            $this->publicmodel->checkPermission();
            $this->publicmodel->accessPermission("7");
    }



    public function index()
    {
        $nomor =  $this->uri->segment(3);
        $jns =  $this->uri->segment(4);

        if($this->input->is_ajax_request() and $this->input->post("action") and $this->input->post("param")) {
            if(method_exists($this, $this->input->post("action"))) {
                $req = $this->input->post("action");
                $this->param = $this->input->post("param");
                print_r($this->$req());
            } else {
                print_r("Function not exist");
            }
        } else {
            $this->load->view('efiling/index',['indexNomor' => $nomor, 'indexJenis' => $jns]);   
        }
        
        
    }

 

   public function jurnalumum()
   {    
        $config['upload_path'] = './upload/Keuangan/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|zip';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('image_file'))
        {   
            $a = array('Fsize' => "", 'nama' => "", 'nama_acak' => "", 'kondisi' => 'sukses');
            echo json_encode($a);
            
        }else
        {
            $data = $this->upload->data();

            $a = array('Fsize' => $data['file_size'], 'nama' => $data['orig_name'], 'nama_acak' => $data['file_name'], 'kondisi' => 'sukses');
            echo json_encode($a);
        }
   }

      public function jurnalpenyesuaian()
   {    
        $config['upload_path'] = './upload/Keuangan/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|zip';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('image_file'))
        {   
            $a = array('Fsize' => "", 'nama' => "", 'nama_acak' => "", 'kondisi' => 'sukses');
            echo json_encode($a);
            
        }else
        {
            $data = $this->upload->data();

            $a = array('Fsize' => $data['file_size'], 'nama' => $data['orig_name'], 'nama_acak' => $data['file_name'], 'kondisi' => 'sukses');
            echo json_encode($a);
        }
   }

    public function saldoawal()
   {    
        $config['upload_path'] = './upload/Keuangan/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|zip';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('image_file'))
        {   
            $a = array('Fsize' => "", 'nama' => "", 'nama_acak' => "", 'kondisi' => 'sukses');
            echo json_encode($a);
            
        }else
        {
            $data = $this->upload->data();

            $a = array('Fsize' => $data['file_size'], 'nama' => $data['orig_name'], 'nama_acak' => $data['file_name'], 'kondisi' => 'sukses');
            echo json_encode($a);
        }
   }

    public function kaskeluar()
    {    
        $config['upload_path'] = './upload/Keuangan/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|zip';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('image_file'))
        {   

            $a = array('Fsize' => "", 'nama' => "", 'nama_acak' => "", 'kondisi' => 'sukses');
            echo json_encode($a);
            
        }else
        {
            $data = $this->upload->data();

            $a = array('Fsize' => $data['file_size'], 'nama' => $data['orig_name'], 'nama_acak' => $data['file_name'], 'kondisi' => 'sukses');
            echo json_encode($a);
        }     
   }
     public function kasmasuk()
       {    
            $config['upload_path'] = './upload/Keuangan/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|zip';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('image_file'))
            {   
                $a = array('Fsize' => "", 'nama' => "", 'nama_acak' => "", 'kondisi' => 'sukses');
                echo json_encode($a);
                
            }else
            {
                $data = $this->upload->data();

                $a = array( 'nama_acak' => $data['file_name'], 'kondisi' => 'sukses');
                $notData = $this->input->post('param');

                $notData['nama'] = $data['orig_name'];
                $notData['ukuran'] = $data['file_size'];
                $notData['file'] = $data['file_name'];

                $notarisfiles = $this->DoList->m_insert("notarisfiles",$notData);
                echo json_encode($a);
            }
       }
     public function keuangan2()
       {    
            $config['upload_path'] = './upload/Keuangan/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|zip';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('image_file'))
            {   
                $a = array('Fsize' => "", 'nama' => "", 'nama_acak' => "", 'kondisi' => 'sukses');
                echo json_encode($a);
                
            }else
            {
                $data = $this->upload->data();

                $a = array( 'nama_acak' => $data['file_name'], 'kondisi' => 'sukses');
                $notData = $this->input->post('param');

                $notData['nama'] = $data['orig_name'];
                $notData['ukuran'] = $data['file_size'];
                $notData['file'] = $data['file_name'];

                $notarisfiles = $this->DoList->m_insert("notarisfiles",$notData);
                echo json_encode($a);
            }
       }

   public function simpanEfiling()
   {

        $finput = $this->input->post('param');

        $config['upload_path'] = './upload/Order/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|zip';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('image_file'))
        {   

            $a = $this->upload->display_errors();
            echo json_encode($a);
            
        }else
        {
            $data = $this->upload->data();

            $a = array('Fsize' => $data['file_size'], 'nama' => $data['orig_name'], 'nama_acak' => $data['file_name'], 'kondisi' => 'sukses');
            $finput['nama'] = $data['orig_name'];
            $finput['file'] = $data['file_name'];
            $finput['ukuran'] = $data['file_size'];
            $finput['diupload'] = date('Y-m-d');
            $output = $this->m_insert_o('notarisfiles',$finput);
            echo json_encode($output);
        }   
   }

      public function simpanEfiling2()
   {

        $finput = $this->input->post('param');

        $config['upload_path'] = './upload/'.$finput['jenis'].'/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|zip';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('image_file'))
        {   

            $a = $this->upload->display_errors();
            echo json_encode($finput);
            
        }else
        {
            $data = $this->upload->data();

            $a = array('Fsize' => $data['file_size'], 'nama' => $data['orig_name'], 'nama_acak' => $data['file_name'], 'kondisi' => 'sukses');
            $finput['nama'] = $data['orig_name'];
            $finput['file'] = $data['file_name'];
            $finput['ukuran'] = $data['file_size'];
            $finput['diupload'] = date('Y-m-d');
            $output = $this->m_insert_o('notarisfiles',$finput);

            $log = $this->DoList->user_log("notarisfiles","Tambah File",$output->Output,"File untuk ".$finput['jenis']);
            echo json_encode($finput);
        }   
   }
    public function update($id)
   {

            $filter = "_id = '".$id."'";
        $finput = $this->input->post('param');

        $config['upload_path'] = './upload/'.$finput['jenis'].'/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|zip';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('image_file'))
        {   
            $output = $this->DoList->m_update("notarisfiles",$filter,$finput);
            echo json_encode($output);
            
        }else
        {

            $data = $this->upload->data();

            $data1 = $this->sWhere2('notarisfiles','_id',$id);
            $data1 = $data1->Data[0];
            $jenis = $data1->jenis;
            $file = $data1->file;

            

            $path_to_file = 'upload/'.$jenis.'/'.$file;
            unlink($path_to_file);

            $a = array('Fsize' => $data['file_size'], 'nama' => $data['orig_name'], 'nama_acak' => $data['file_name'], 'kondisi' => 'sukses');
            $finput['nama'] = $data['orig_name'];
            $finput['file'] = $data['file_name'];
            $finput['ukuran'] = $data['file_size'];
            $finput['diupload'] = date('Y-m-d');
            $output = $this->DoList->m_update("notarisfiles",$filter,$finput);

            $log = $this->DoList->user_log("notarisfiles","Edit File",$id,"File untuk ".$finput['jenis']);
            echo json_encode($output);
            
        }   
   }

   public function order_peribahan_pt()
   {
            $param = $this->input->post('param');
            $config['upload_path'] = './upload/order/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|zip';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('image_file'))
            {   
                $a = array('Fsize' => "", 'nama' => "", 'nama_acak' => "", 'kondisi' => 'sukses');
                echo json_encode($a);
                
            }else
            {
                $data = $this->upload->data();

                $a = array('Fsize' => $data['file_size'], 'nama' => $data['orig_name'], 'nama_acak' => $data['file_name'], 'kondisi' => 'sukses');
                $b = array('jenis'          =>"Order",
                             'info'         =>$param['id_order'],
                             'ref_sumber'   =>"order",
                             'ref_id'       =>$param['id_order'],
                             'nama'         =>$data['orig_name'],
                             'file'         =>$data['file_name'],
                             'ukuran'       =>$data['file_size'],
                             'catatan'      =>"",
                             'diupload'     => date("Y-m-d"));
                $efiling = $this->recordEfilling($b);
                echo json_encode($a);
            }   
   }

    public function order_penutupan_pt()
   {
            $param = $this->input->post('param');
            $config['upload_path'] = './upload/order/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|zip';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('image_file'))
            {   
                $a = array('Fsize' => "", 'nama' => "", 'nama_acak' => "", 'kondisi' => 'sukses');
                echo json_encode($a);
                
            }else
            {
                $data = $this->upload->data();

                $a = array('Fsize' => $data['file_size'], 'nama' => $data['orig_name'], 'nama_acak' => $data['file_name'], 'kondisi' => 'sukses');
                $b = array('jenis'          =>"Order",
                             'info'         =>$param['id_order'],
                             'ref_sumber'   =>"order",
                             'ref_id'       =>$param['id_order'],
                             'nama'         =>$data['orig_name'],
                             'file'         =>$data['file_name'],
                             'ukuran'       =>$data['file_size'],
                             'catatan'      =>"",
                             'diupload'     => date("Y-m-d"));
                $efiling = $this->recordEfilling($b);
                echo json_encode($a);
            }   
   }

   public function recordEfilling($param)
   {
     $output = $this->m_insert_o("notarisfiles",$param);
   }

   public function simpanFile()
   {

     $a = $this->input->post('param');
     $a['diupload'] = date("Y-m-d");
     $output = $this->m_insert_o("notarisfiles",$a);
     echo json_encode($output);

   }

   public function edit($id)
   {
        $a = $this->sWhere2('notarisfiles','_id',$id);
        $this->load->view('efiling/edit',['data'=>$a]);
   }


    public function f_randomstring() 
    {
        $length = 50;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
         echo json_encode(["random" => $randomString]);
    }




// Pemalas
    public function m_insert_o($tbl,$data)
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "insert", "ParamsData" => json_encode($data), "GetLastId" => "1"));
        $data = $this->api->execute(true);   
        return $data;
    }

    public function combo_box_w($tb,$field,$id,$outval,$outht)
    {
        $a = $this->sWhere2($tb,$field,$id);
        $return = "";
        foreach ($a->Data as $data) {
            $return .= "<option value='".$data->$outval."'>".$data->$outval." - ".$data->$outht."</output>";
        }

        return $return;
    }

    public function combo_box($tb,$outval,$outht)
    {
        $a = $this->getData($tb);
        $return = "";
        foreach ($a->Data as $data) {
            $return .= "<option value='".$data->$outval."'>".$data->$outval." - ".$data->$outht."</output>";
        }

        return $return;
    }

    public function getData($tb)
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tb , "Activity" => "get" , "Limit" => "200" , "ParamsSort" => "kode asc"));
        $data = $this->api->execute(true);
        return $data;        
    }

    public function selectWhere($tb,$_id)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "_id = ".$_id." " ));
        $data = $this->api->execute("array");
        return $data;
    }

    public function sWhere2($tb,$field,$_id)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = ".$_id." " ));
        $data = $this->api->execute(true);
        return $data;
    }

    public function updateO($tbl,$field,$id,$data)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "update", "ParamsData" => json_encode($data),"ParamsFilter" => "".$field." = '".$id."'"));
        $output = $this->api->execute(true);
        return $output;
    }


// end pemalas
    //view
        public function tambah()
        {        
            $nomor =  $this->uri->segment(3);
            $jns =  $this->uri->segment(4);

            if ($jns == "klien"){
                $info = $this->sWhere2('notarisklien','_id',$nomor)->Data[0]->nama;
            }else if($jns == "order"){
                $info = $this->sWhere2('tb_order','_id',$nomor)->Data[0]->nama_layanan;
            }
            $this->load->view('efiling/tambah',['indexNomor' => $nomor, 'info' => $info, 'indexJenis' => $jns]);
        }
    //end view

    //delete

        public function deleteData($id)
        {
            $data = $this->sWhere2('notarisfiles','_id',$id);
            $data = $data->Data[0];
            $jenis = $data->jenis;
            $file = $data->file;

            

            $path_to_file = 'upload/'.$jenis.'/'.$file;
            unlink($path_to_file);

            $output = $this->delete('notarisfiles','_id',$id);

            $log = $this->DoList->user_log("notarisfiles","Hapus File",$id,"File ID ".$id);
            echo json_encode($a);
        }

        public function delete($tbl,$colom,$id)
        {

            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tbl, "Activity" => "delete", "ParamsFilter" => "".$colom." = '".$id."' "));
            $data = $this->api->execute(true);
            return $data;
        
        }
    //End Delete

    //Table
        protected function show_table(){
            
            $arr = array("Target"   => "notarisfiles", 
                       "Activity"   => "get", 
                       "Page"       => $this->param["page"]);
            

            $filter = "";
            if(!empty($this->param["kywd"])) {
                $flt =  $this->param["kywd"];
                $filter .= "(ref_id LIKE '%{$flt}%')";
            }

            if(!empty($this->param["filter"]["jenis"])) {
                $flt = "jenis = '". $this->param["filter"]["jenis"] ."'";
                $filter .= (empty($filter)) ? $flt : " and ". $flt;
            }

            if(!empty($this->param["filter"]["ref_id"])) {
                $flt = "ref_id = '". $this->param["filter"]["ref_id"] ."'";
                $filter .= (empty($filter)) ? $flt : " and ". $flt;
            }


            if(!empty($this->param["filter"]["diupload"])) {
                $explode= explode(" - ",$this->param["filter"]["diupload"]);
                $date1 = date("Y-m-d", strtotime($explode[0]));
                $date2 = date("Y-m-d", strtotime($explode[1]));
                $flt = "diupload BETWEEN '". $date1 ."' and '". $date2 ."'";
                $filter .= (empty($filter)) ? $flt : " and ". $flt;
            }


            $arr["ParamsFilter"] = $filter;
            

            if(!empty($this->param["filter"]["sort"])) {
                $sort = $this->param["filter"]["sort"];
                $arr["ParamsSort"] = $sort;
            }

            if(!empty($this->param["limit"])) {
                $limit = $this->param["limit"];
                $arr = array_merge($arr, array("Limit" => $limit));
            }
            
            $this->api->setAction("Execute");
            $this->api->setParam($arr); 
                                   
            $output = $this->api->execute(true);

            $return = "";
            if((!empty($output)) && $output->Data[0] != "") {
                if($output->IsError == false) {
                    $n = 1;
                    foreach($output->Data as $result) { 
                            $a= "";

                            $a .= '  <li>
                                        <a role="button" href="'.base_url('efiling/edit/'.$result->_id).'">
                                            <i class="fa fa-pencil-square-o">
                                            </i> Edit 
                                        </a>
                                    </li>';

                            $a .= '  <li>
                                <a role="button" data-id="'.$result->_id.'" data-nama="'.$result->nama.'" onclick="delete_data(this);">
                                    <i class="fa fa-trash">
                                    </i> Hapus 
                                </a>
                            </li>';

                            

                        $return .= "<tr id='{$result->_id}'>";
                            $return .= '<td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-bars"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    '.$a .'
                                                </ul>
                                            </div>
                                        </td>';
                            $return .= "<td>".date("y-M-d", strtotime($result->diupload))."</td>";
                            $return .= "<td>{$result->jenis}</td>";
                            $return .= "<td>{$result->info}</td>";
                            $return .= "<td><a target='_BLANK' href='".base_url("upload/".$result->jenis."/".$result->file)."'>{$result->nama}</a></td>";
                            $return .= "<td>{$result->ukuran}</td>";
                            $return .= "<td>{$result->catatan}</td>";
                        $return .= "</tr>";
                    }
                } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
            } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";

            return json_encode(["paging" => $output->Paging, "list_result" => $return]);
        }
    //end Table





}

?>
