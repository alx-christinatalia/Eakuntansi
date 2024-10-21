<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class saldoawal extends CI_Controller {

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
            $this->load->view('keuangan/kasbankkeluar/index');   
        }
        
        
    }

    public function detail($id)
    {
        $data = $this->sWhere2('fintransaksi','nomor',$id);


        $this->load->view('keuangan/kasbankkeluar/detail',array('Masterdata' => $data));
    }

   public function isi_akun_lawan()
   {
        $a = $this->combo_box('finakun','kode','nama');

        echo json_encode($a);
   }

   public function tambah()
   {
    $this->load->view('keuangan/saldoawal/tambah', array("ssb" => $this->get_ssb()));
   }


   public function isi_akun_kas()
   {
        $a = $this->combo_box_w('finakun','kategori','11','kode','nama');
        $a .= $this->combo_box_w('finakun','kategori','12','kode','nama');

        echo json_encode($a);
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


    public function simpan()
    {
        $g = $this->input->post('param');
        foreach ($g as $key => $a) {
            $jenis = $a['jenis'];
            $tahun = date("y", strtotime($a["tgl"]));
            $bulan = date("m", strtotime($a["tgl"]));


            $a['tgl'] = date("Y-m-d", strtotime($a['tgl']));
            $a['tgl_input'] = date("Y-m-d");

            $explode= explode("-",$a["tgl"]);
            $a['periode'] = $explode[0].$explode[1];

            $c = str_split($a['akun'], 2);

            $a['akun_k'] = $c[0];
            $out =  $this->m_insert_o('fintransaksi',$a);
        }
        
        $log = $this->DoList->user_log("fintransaksi","Tambah Data Saldo Awal",$g[0]['nomor'],$g[0]['uraian']);

        echo json_encode(array('kondisi' => "Sukses" ));

    }

    public function edit($_id)
    {
        $this->load->view('keuangan/saldoawal/edit', array( "_id" => $_id));
    }

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

        $log = $this->DoList->user_log("fintransaksi","Edit Saldo Awal",$nomorTrans,$getFilter["uraian"]);

        echo json_encode("Sukses");
    }

            public function deleteUpdate($tbl,$urutan,$nomor)
        {

            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tbl, "Activity" => "delete", "ParamsFilter" => "urutan = '".$urutan."' and nomor = '".$nomor."' "));
            $data = $this->api->execute(true);
            return $data;
        
        }
    public function get_ssb() {
        $jenis="SA";
        $ljenis="sa";
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

        $jenis="SA";
        $ljenis="sa";
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

    public function m_insert_o($tbl,$data)
    {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => $tbl, "Activity" => "insert", "ParamsData" => json_encode($data)));
        $data = $this->api->execute(true);   
        return $data;
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


// end pemalas

    //Hapus
        public function deleteData($id)
        {
            $output = $this->delete('fintransaksi','nomor',$id);
            echo json_encode($output);

        }

        public function delete($tbl,$colom,$id)
        {

            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => $tbl, "Activity" => "delete", "ParamsFilter" => "".$colom." = '".$id."' "));
            $data = $this->api->execute(true);
            return $data;
        
        }
    //end Hapus

    //table
        protected function show_table(){
            
            $arr = array("Target"   => "fintransaksi", 
                       "Activity"   => "get", 
                       "Page"       => $this->param["page"]);
            

            $filter = "";
            if(!empty($this->param["kywd"])) {
                $flt =  $this->param["kywd"];
                $filter .= "(nama LIKE '%{$flt}%')";
            }
            $filter .= (empty($filter)) ? "jenis  = 'KK'" : " and ". "jenis  = 'KK'";
            $filter .= " and urutan = '0'  ";

            if(!empty($this->param["filter"]["nomor"])) {
                $flt = "nomor = '". $this->param["filter"]["nomor"] ."'";
                $filter .= (empty($filter)) ? $flt : " and ". $flt;
            }

             if(!empty($this->param["filter"]["ispost"])) {
                $flt = "ispost = '". $this->param["filter"]["ispost"] ."'";
                $filter .= (empty($filter)) ? $flt : " and ". $flt;
            }

            if(!empty($this->param["filter"]["tgl"])) {
                $explode= explode(" - ",$this->param["filter"]["tgl"]);
                $date1 = date("Y-m-d", strtotime($explode[0]));
                $date2 = date("Y-m-d", strtotime($explode[1]));
                $flt = "tgl BETWEEN '". $date1 ."' and '". $date2 ."'";
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
                        $a = "";
                        if($result->ispost == "0")
                        {

                            $a .= '  <li>
                                        <a role="button" href="'.base_url("kaskeluar/edit/".$result->nomor).'">
                                            <i class="fa fa-pencil-square-o">
                                            </i> Edit 
                                        </a>
                                    </li>';

                            $a .= '  <li>
                                        <a role="button" href="'.base_url("klien/edit/".$result->nomor).'">
                                            <i class="fa fa-print">
                                            </i> Print 
                                        </a>
                                    </li>';

                            $a .= '  <li>
                                        <a role="button" href="'.base_url("klien/edit/".$result->nomor).'">
                                            <i class="fa fa-file">
                                            </i> e-filing 
                                        </a>
                                    </li>';

                            $a .= '  <li>
                                        <a role="button" data-nomor="'.$result->nomor.'" onclick="delete_data(this)">
                                            <i class="fa fa-trash">
                                            </i> Hapus 
                                        </a>
                                    </li>';
                        }else
                        {

                            $a .= '<li>
                                        <a role="button" href="'.base_url("klien/edit/".$result->_id).'">
                                            <i class="fa fa-print">
                                            </i> Print 
                                        </a>
                                    </li>';
                        }

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
                            $return .= "<td><a href='".base_url("kaskeluar/detail/".$result->nomor)."'>{$result->nomor}</a></td>";
                            $return .= "<td>".date("d-M-Y", strtotime($result->tgl))."</td>";
                            $return .= "<td>{$result->nama}</td>";
                            $return .= "<td>{$result->uraian}</td>";
                            $return .= "<td class='changemoney' style='text-align:right' >{$result->kredit}</td>";
                        $return .= "</tr>";
                    }
                } else $return .= "<tr><td colspan='7'><center>{$output->ErrMessage}</center></td></tr>";
            } else $return .= "<tr><td colspan='7'><center>Data tidak tersedia</center></td></tr>";

            return json_encode(["paging" => $output->Paging, "list_result" => $return]);
        }

        public function tbl_detail($kode)
        {

            $data = $this->sWhere2('fintransaksi','nomor',$kode);

            $return = "";
            foreach ($data->Data as $result) {
                $akunNama = $this->detail_d($result->akun);
                $return .= "<tr>";
                    $return .= "<td>";
                        $return .= $result->akun.' - '.$akunNama ; //Perbarui ini remember this   - 
                    $return .= "</td>";
                    $return .= "<td class='changemoney' style='text-align:right' >";
                        $return .= $result->debit;
                    $return .= "</td>";
                    $return .= "<td class='changemoney' style='text-align:right'>";
                        $return .= $result->kredit;
                    $return .= "</td>";
                $return .= "</tr>";
            }
            echo json_encode($return);
        }
        public function detail_d($kode)
        {
            $data = $this->sWhere2('finakun','kode',$kode);
            $data = $data->Data[0]->nama;
            return $data;
        }

        public function detailKontakData($kode)
        {
            $data = $this->sWhere2('finkontak','_id',$kode);
            $data = $data->Data[0];

                $status = ($data->aktif == "0" ? "Tidak Aktif" : "Aktif");
                $return = "";

               $nama = $data->nama;
               $catatan = $data->catatan;
               $status = $status;


            echo json_encode(array('nama' => $nama, 'catatan' => $catatan, 'status' => $status));
        }
    //end


}

?>
