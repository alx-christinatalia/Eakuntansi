<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kasmasuk extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
        //helpers
       $this->load->helper('url');
       $this->load->model('api');
       $this->load->library('session');
            $this->publicmodel->checkPermission();
            $this->publicmodel->accessPermission("8");
    }

    public function index()
    {
        if($this->input->is_ajax_request() and $this->input->post("action") and $this->input->post("param")) {
            if(method_exists($this, $this->input->post("action"))) {
                $req = $this->input->post("action");
                $this->param = $this->input->post("param");
                print_r($this->$req());
            } else {
                print_r("Function not exist");
            }
        } else {
            $this->load->view('keuangan/kasbankmasuk/index', array("ssb" => $this->get_ssb()));   
        }
        
        
    }

   public function isi_akun_lawan()
   {
        $a = $this->combo_box('finakun','kode','nama');

        echo json_encode($a);
   }

    public function tambah()
   {
    $this->load->view('keuangan/kasbankmasuk/tambah', array("ssb" => $this->get_ssb()));
   }


   public function isi_akun_kas()
   {
        $a = $this->combo_box_w('finakun','kategori','11','kode','nama');
        $a .= $this->combo_box_w('finakun','kategori','12','kode','nama');

        echo json_encode($a);
   }


    public function m_insert_o($tbl,$data)
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "insert", "ParamsData" => json_encode($data), "GetLastId" => "1"));
        $data = $this->api->execute(true);   
        return $data;
    }

    public function simpan()
    {   $z=1 ;
        $a = $this->input->post('param');
        foreach ($a as $key => $value) {
            
            $jenis = $value['jenis'];
            $tahun = date("y", strtotime($value["tgl"]));
            $bulan = date("m", strtotime($value["tgl"]));

            $value['tgl_input'] = date("Y-m-d");

            $explode= explode("-",$value["tgl"]);
            $value['periode'] = $explode[0].$explode[1];

            $c = str_split($value['akun'], 2);

            $value['akun_k'] = $c[0];   
            $out =  $this->DoList->m_insert('fintransaksi',$value);
            $a[$z]['Data']=$value ;
        }

        $log = $this->DoList->user_log("fintransaksi","Tambah Kas/Bank Masuk",$a[0]['nomor'],"Nomor Transaksi ".$a[0]['nomor']);
        echo json_encode($a);
    }

        public function edit($_id)
    {
        $this->load->view('keuangan/kasbankmasuk/edit', array( "_id" => $_id));
    }

       public function edit_data($_id)
   {
        $data = $this->sWhere3('fintransaksi','nomor',$_id,'urutan asc');
        $namaFile = $data->Data[0]->file;
        $total = '0';
        $file = $this->sWhere2('notarisfiles','file',$namaFile);
        $file = $file->Data[0]->nama;


        foreach ($data->Data as $result) {
            $total++;
        }

        echo json_encode(array('data' => $data , 'total' => $total, 'file' => $file));

   }



    public function get_ssb() {
        $jenis="KM";
        $ljenis="km";
        $data = $this->DoList->m_getData_l('notarisnomor','100');
        $data = intval($data->Data[0]->$ljenis)+1;
        $data = sprintf('%06d', $data);
        $tahun = date("y");
        $bulan = date("m");
        $a = "{$jenis}{$tahun}{$bulan}{$data}";

        return $a;
    }

    public function updateNomor()
    {

        $jenis="KM";
        $ljenis="km";
        $data = $this->DoList->m_getData_l('notarisnomor','100');
        $data = intval($data->Data[0]->$ljenis)+1;
        $m_data = array($ljenis => $data); 
        $filter = "_id = '0'";
        $update = $this->DoList->m_update('notarisnomor',$filter,$m_data);
        $m_data = array($ljenis => $data);
        echo json_encode($m_data) ;
    }

// Pemalas
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
        $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = '".$_id."' " ));
        $data = $this->api->execute(true);
        return $data;
    }
    public function sWhere3($tb,$field,$_id,$sort)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tb , "Activity" => "get" ,"ParamsFilter" => "".$field." = '".$_id."' " 
        , "ParamsSort" => $sort ));
        $data = $this->api->execute(true);
        return $data;
    }

    public function updateO($tbl,$field,$id,$data)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "update", "ParamsData" => json_encode($data),"ParamsFilter" => "".$field." = ".$id));
        $output = $this->api->execute(true);
        return $output;
    }

    public function m_delete_o($tbl,$id)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "delete", "ParamsFilter" => "_id = '".$id."' "));
        $data = $this->api->execute(true);
        return $data;
    
    }
// end pemalas

    public function update()
    {
        $data = $this->input->post('param');
        $getFilter =$this->input->post('filter');
        $file = $getFilter["file"];
        $tgl_input = $getFilter["tgl_input"];
        $totalbaris =  $getFilter["totalbaris"];    //Total Baris sekaran
        $defbaris = $getFilter["defbaris"];         //Default baris Database
        $nomorTrans  = $getFilter["nomor"];         //Nomor transaksi

        //Hapus Data Total < TotalDB
        for($i=$totalbaris ; $i< $defbaris ; $i++)
        {
            $return1 .= " ini ".$i;
            $filter2 = "urutan = '{$i}' AND nomor = '{$nomorTrans}'";
            $deleteThis = $this->DoList->m_delete('fintransaksi',$filter2);
        }

        foreach ($data as $key => $value) {
            $value = $this->DoList->editKeuangan($value);
               if($key+1 > $defbaris){
                    $return = $this->DoList->m_insert("fintransaksi",$value);
               }else{
                    $filter = "nomor = '".$value['nomor']."' AND urutan = '".$value['urutan']."' ";
                    $return = $this->DoList->m_update("fintransaksi",$filter,$value);
               }
        }

        $log = $this->DoList->user_log("fintransaksi","Edit Data Kas/Bank Masuk",$nomorTrans,$getFilter["uraian"]);

        echo json_encode("Sukses");
    }



    public function deleteUpdate($tbl,$urutan,$nomor)
    {

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "delete", "ParamsFilter" => "urutan = '".$urutan."' and nomor = '".$nomor."' "));
        $data = $this->api->execute(true);
        return $data;
    
    }





}

?>
