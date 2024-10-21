<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datatransaksi extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
        //helpers
       $this->load->helper('url');
       $this->load->model('api');
       $this->load->library('session');
            $this->publicmodel->checkPermission();
            $this->publicmodel->accessPermission("11");
    }

    public function index($nomor)
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
            $this->load->view('keuangan/datatransaksi/index',['nomor'=>$nomor]);   
        }
        
        
    }

    public function detail($id)
    {
        $data = $this->sWhere2('fintransaksi','nomor',$id);


        $this->load->view('keuangan/datatransaksi/detail',array('Masterdata' => $data));
    }

   public function isi_akun_lawan()
   {
        $a = $this->combo_box('finakun','kode','nama');

        echo json_encode($a);
   }

   public function tambah()
   {
    $this->load->view('keuangan/kasbankkeluar/tambah', array("ssb" => $this->get_ssb()));
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
        $a = $this->input->post('param');
        $jenis = $a['jenis'];
        $tahun = date("y", strtotime($a["tgl"]));
        $bulan = date("m", strtotime($a["tgl"]));
        $a["nomor"] = "{$jenis}{$tahun}{$bulan}00000{$a["nomor"]}";


        $a['tgl'] = date("Y-m-d", strtotime($a['tgl']));
        $a['tgl_input'] = date("Y-m-d");

        $explode= explode("-",$a["tgl"]);
        $a['periode'] = $explode[0].$explode[1];

        $c = str_split($a['akun'], 2);

        $a['akun_k'] = $c[0];
        $out =  $this->m_insert_o('fintransaksi',$a);
        echo json_encode(array('out' => $out , 'nomor' => $a["nomor"]));

    }

    public function edit($_id)
    {
        $this->load->view('keuangan/kasbankkeluar/edit', array( "_id" => $_id));
    }

    public function update()
    {
        $data = $this->input->post('param');
        $data['tgl'] = date("Y-m-d", strtotime($data['tgl']));
        $data['tgl_update'] = date("Y-m-d");

        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => 'fintransaksi' , "Activity" => "get" ,"ParamsFilter" => "nomor = '".$data['nomor']."' and urutan = '".$data['urutan']."' " ));
        $cekdata = $this->api->execute(true);

        $_data = $this->sWhere2('fintransaksi','nomor',$data['nomor']);

        $file = $_data->Data[0]->file;
        $tgl_input = $_data->Data[0]->tgl_input;


        if($cekdata->Data[0] == null || $cekdata->Data[0] == "" )
        {
            

            $data['file'] = $file;
            $data['tgl_input'] = $tgl_input;

            $output = $this->m_insert_o('fintransaksi',$data);
            

            //$output .= "insert baru ".$data['urutan'];

        }else
        {
            
            $this->api->setAction("Execute");
            $this->api->setParam(array("Target" => 'fintransaksi', "Activity" => "update", "ParamsData" => json_encode($data),"ParamsFilter" => "nomor = '".$data['nomor']."' and urutan = '".$data['urutan']."'"));
            $output = $this->api->execute(true);    
                     

          // $output .= "Update ".$data['urutan'];
        }

        echo json_encode($output);
    }

    public function cetak ($id)
    {
        $filter = "nomor = '".$id."'";
        $data = $this->DoList->m_sWhere_l_s('fintransaksi',$filter,"1000","_id asc");

         if($data->Data[0]->jenis == "KM")
            {
                $jenis = "Kas Masuk";
            }else if ($jenisDatas == "KK")
            {
                $jenis = "Kas Keluar";
            }else if ($jenisDatas == "JU")
            {
                $jenis = "Jurnal Umum";
            }else if ($jenisDatas == "JA")
            {
                $jenis = "Jurnal Penyesuaian";
            }else if ($jenisDatas == "SA")
            {
                $jenis = "Saldo Awal";
            }else
            {
                $jenis = "error";
            }
            $col=1;
            foreach ($data->Data as $resp) {
                $col++;

                $filter = "kode = '".$resp->akun."'";
                $namaAkun[$resp->akun] = $this->DoList->m_sWhere('finakun',$filter)->Data[0]->nama;
            }
        $this->load->view('keuangan/datatransaksi/cetak',['data' => $data ,
                                                          'jenis' => $jenis , 
                                                          'col' => $col,
                                                          'namaAkun' => $namaAkun]);
    }

    private function get_ssb() {
        $this->api->setAction("Execute");
        $this->api->setParam(array("Target" => "fintransaksi", "ParamsField" => "COUNT(_id) as ssb", "Activity" => "get", "ParamsGroupBy" => "nomor", "ParamsFilter" => "nomor != ''"));
        $data = $this->api->execute(true);
        $data = ($data->Paging->Count + 1);   
        return $data;
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
            $filter .= (empty($filter)) ? "urutan = '0'" : "and urutan = '0'";

            if(!empty($this->param["filter"]["nomor"])) {
                $flt = "nomor = '". $this->param["filter"]["nomor"] ."'";
                $filter .= (empty($filter)) ? $flt : " and ". $flt;
            }

             if(!empty($this->param["filter"]["ispost"])) {
                $flt = "ispost = '". $this->param["filter"]["ispost"] ."'";
                $filter .= (empty($filter)) ? $flt : " and ". $flt;
            }

             if(!empty($this->param["filter"]["jenis"])) {
                $flt = "jenis = '". $this->param["filter"]["jenis"] ."'";
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

                        //awal
                            $jenisDatas = $result->jenis;
                            $jenis = "";
                            if($jenisDatas == "KM")
                            {
                                $jenis = "kasmasuk";
                            }else if ($jenisDatas == "KK")
                            {
                                $jenis = "kaskeluar";
                            }else if ($jenisDatas == "JU")
                            {
                                $jenis = "jurnalumum";
                            }else if ($jenisDatas == "JA")
                            {
                                $jenis = "jurnalpenyesuaian";
                            }else if ($jenisDatas == "SA")
                            {
                                $jenis = "saldoawal";
                            }else
                            {
                                $jenis = "error";
                            }
                        //
                        $a = "";
                        $uang = "";
                        $m_jenis = $result->jenis;

                        $uang = $this->hitungUang($result->nomor);
                        

                        if($result->ispost == "0")
                        {

                            $a .= '  <li>
                                        <a role="button" href="'.base_url("/".$jenis."/edit/".$result->nomor).'">
                                            <i class="fa fa-pencil-square-o">
                                            </i> Edit 
                                        </a>
                                    </li>';

                            $a .= '  <li>
                                        <a role="button" href="'.base_url("datatransaksi/cetak/".$result->nomor).'">
                                            <i class="fa fa-print">
                                            </i> Print 
                                        </a>
                                    </li>';
                            if($result->file != "")
                            {
                                $a .= '  <li>
                                            <a role="button" href="'.base_url("efiling/index/".$result->nomor).'">
                                                <i class="fa fa-file">
                                                </i> e-filing 
                                            </a>
                                        </li>';   
                            }

                            $a .= '  <li>
                                        <a role="button" data-nomor="'.$result->nomor.'" onclick="delete_data(this)">
                                            <i class="fa fa-trash">
                                            </i> Hapus 
                                        </a>
                                    </li>';
                        }else
                        {

                            $a .= '<li>
                                        <a role="button" href="'.base_url("datatransaksi/cetak/".$result->nomor).'">
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
                            $return .= "<td><a href='".base_url("datatransaksi/detail/".$result->nomor)."'>{$result->nomor}</a></td>";
                            $return .= "<td>".date("d-M-Y", strtotime($result->tgl))."</td>";
                            $return .= "<td>{$result->nama}</td>";
                            $return .= "<td>{$result->uraian}</td>";
                            $return .= "<td class='changemoney' style='text-align:right' >{$uang}</td>";
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

        public function hitungUang($nomor)
        {
            $a = $this->sWhere2('fintransaksi','nomor',$nomor);
            $output = 0;
            foreach ($a->Data as $result) {
                $output += $result->debit;
            }
            return $output;
        }
    //end


}

?>
