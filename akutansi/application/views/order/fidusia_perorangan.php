<?php
    $id_order = $MASTER_ID_ORDER ;
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Berkas Fidusia Perorangan | eNotaris.com</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url("assets/css/font.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/simple-line-icons/simple-line-icons.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PLUGINS STYLES -->
         <link href="<?php echo base_url("assets/plugins/bootstrap-daterangepicker/daterangepicker.min.css"); ?>" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url("assets/plugins/bootstrap-toastr/toastr.min.css"); ?>" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url("assets/plugins/select2/css/select2.min.css"); ?>" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url("assets/plugins/select2/css/select2-bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END PLUGINS STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url("assets/css/components-rounded.css"); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url("assets/css/plugins.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url("assets/css/layout.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/css/themes/default.css"); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link href="<?php echo base_url("assets/css/jquery-ui.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/daterange/daterangepicker.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/bootstrap-datepicker/css/bootstrap-datetimepicker.min.css"); ?>" rel="stylesheet" type="text/css" />
        
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo/favicon.ico"); ?>">
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-32x32.png"); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-16x16.png"); ?>" sizes="16x16" />

        <style type="text/css">
            .select2-container {
                width: 100% !important;
                padding: 0;
            }
            .table-detail tr th {
                width: 205px;
            }
            .title-action .dropdown-menu {
                left: -113px;
            }
            .title-action .dropdown > .dropdown-menu:after, .dropdown-toggle > .dropdown-menu:after, .btn-group > .dropdown-menu:after,
            .title-cation .dropdown > .dropdown-menu:before, .dropdown-toggle > .dropdown-menu:before, .btn-group > .dropdown-menu:before {
                left: 140px;
            }
             #tooltip
            {
                text-align: center;
                color: #fff;
                background: #111;
                position: absolute;
                z-index: 100;
                padding: 15px;
            }
             
                #tooltip:after /* triangle decoration */
                {
                    width: 0;
                    height: 0;
                    border-left: 10px solid transparent;
                    border-right: 10px solid transparent;
                    border-top: 10px solid #111;
                    content: '';
                    position: absolute;
                    left: 50%;
                    bottom: -10px;
                    margin-left: -10px;
                }
             
                    #tooltip.top:after
                    {
                        border-top-color: transparent;
                        border-bottom: 10px solid #111;
                        top: -20px;
                        bottom: auto;
                    }
             
                    #tooltip.left:after
                    {
                        left: 10px;
                        margin: 0;
                    }
             
                    #tooltip.right:after
                    {
                        right: 10px;
                        left: auto;
                        margin: 0;
                    }
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <?php $this->load->view("template/header"); ?>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view("template/sidebar", ["active" => "order"]); ?>

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="row">
                            <div class="col-md-9 col-sm-12 col-xs-12">
                                <div class="page-title">
                                    <h1>Berkas Fidusia Perorangan</h1>
                                </div>
                            </div>  
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="base-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-bars "></i>
                                            <span class="caption-subject font-dark bold uppercase">Informasi Order</span>
                                        </div>
                                        <div class=" caption pull-right">
                                            <span>
                                                <a data-toggle="collapse" data-target=".infOrder" >
                                                    <i class="fa fa-chevron-down"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="collapse infOrder collapse">
                                        <div class="portlet-body">
                                            <table class="table table-hover table-striped table-bordered table-detail">
                                                <tr>
                                                    <th>No Order</th>
                                                    <td id="io-no_order"></td>
                                                </tr>
                                                <tr>
                                                    <th>Tgl Order</th>
                                                    <td id="io-tgl_order"></td>
                                                </tr>
                                                <tr>
                                                    <th>Klien</th>
                                                    <td id="io-nama_klien"></td>
                                                </tr>
                                                <tr>
                                                    <th>Layanan</th>
                                                    <td id="io-nama_layanan"></td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Bdn Hukum</th>
                                                    <td id="io-bdnhumun_namausaha"></td>
                                                </tr>
                                                <tr>
                                                    <th>Deskripsi</th>
                                                    <td id="io-deskripsi"></td>
                                                </tr>
                                                <tr>
                                                    <th>No Akta</th>
                                                    <td id="io-no_akta"></td>
                                                </tr>
                                                <tr>
                                                    <th>No Berkas</th>
                                                    <td id="io-no_berkas"></td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td id="io-is_closed"></td>
                                                </tr>
                                                <tr>
                                                    <th>Buat Akta</th>
                                                    <td id="io-sdh_buatakta"></td>
                                                </tr>
                                                <tr>
                                                    <th>Sudah Cetak Akta</th>
                                                    <td id="io-sdh_cetakakta"></td>
                                                </tr>
                                                <tr>
                                                    <th>Biaya</th>
                                                    <td id="io-biaya"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-bars "></i>
                                            <span class="caption-subject font-dark bold uppercase" id="caption">Data</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tabbable-line boxless margin-bottom-20">
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#tab_1" data-toggle="tab"> Akta </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_2" data-toggle="tab"> Pemberi </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_3" data-toggle="tab"> Persetujuan </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_4" data-toggle="tab"> Penerima </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_5" data-toggle="tab"> Obyek </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_6" data-toggle="tab"> Perjanjian </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_7" data-toggle="tab"> Set 1 </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_8" data-toggle="tab"> Set 2 </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_8" data-toggle="tab"> Buat Akta </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <?php echo $this->load->view("order/berkasorder/fidusia/konten") ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="pemberi-pemberi-kab-hid">
                            <?php $this->load->view("template/modal/hapus") ?>
                            <!--div-->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <?php $this->load->view("template/footer"); ?>
        <?php $this->load->view("order/berkasorder/fidusia/modal/cari"); ?>
        <?php $this->load->view("order/berkasorder/fidusia/modal/desa"); ?>

        <script src="<?php echo base_url("assets/js/public.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/ifvisible.min.js"); ?>" type="text/javascript"></script>
        <!-- Date Picker -->
        <script src="<?php echo base_url("assets/plugins/jquery.form.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/jquery-ui.js"); ?>" type="text/javascript"></script>
        <!-- End Date Picker -->
        <script src="<?php echo base_url("assets/js/metronic.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/dashboard.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/layout.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/demo.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/daterange/moment.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/daterange/daterangepicker.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/pages/scripts/components-date-time-pickers.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"); ?>" type="text/javascript"></script>

        <script>
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                informasiOrder();
                informasiAkta();
                informasiPemberi();
                namaprov();

                $(function () {
                   $('#akta-order-tglmasuk').datetimepicker({format: "DD-MM-YYYY HH:mm:ss"});
                   $('#akta-order-tglkontrak').datetimepicker({format: "DD-MM-YYYY HH:mm:ss"});
                   $('#akta-order-tglsuratkuasa').datetimepicker({format: "DD-MM-YYYY HH:mm:ss"});
                   $('#akta-akta-tglakta').datetimepicker({format: "DD-MM-YYYY HH:mm:ss"});
                   $('#akta-fidon-tgldaftarahu').datetimepicker({format: "DD-MM-YYYY HH:mm:ss"});
                   $('#akta-progress-tglselesai').datetimepicker({format: "DD-MM-YYYY HH:mm:ss"});
                   $('#akta-fidon-tglsertifikat').datetimepicker({format: "DD-MM-YYYY HH:mm:ss"});
                   $('#pemberi-pemberi-tgll').datetimepicker({format: "DD-MM-YYYY HH:mm:ss"});
                }); 

                function refresh(){
                        $("#pemberi-dataumum-pjk").prop("disabled",false);
                        $("#pemberi-dataumum-ppenggunaan").prop("disabled",false);
                        $("#pemberi-dataumum-pjenis").prop("disabled",false);
                        $("#pemberi-dataumum-bjenis").prop("disabled",false);

                        $("#pemberi-dataumum-pjk").val("");
                        $("#pemberi-dataumum-ppenggunaan").val("");
                        $("#pemberi-dataumum-pjenis").val("");
                        $("#pemberi-dataumum-bjenis").val("");
                }

                function refrjk(){
                    $("#pemberi-pemberi-panggilan").val("");
                }

             $("#pemberi-dataumum-pjk").change( function(){

                var jenis = $( "#pemberi-dataumum-pjk option:selected").val();

                    if (jenis=="1"){
                        refrjk();
                        $("#pemberi-pemberi-panggilan").val("Tuan");
                    }else if (jenis=="2"){
                        refrjk();
                        $("#pemberi-pemberi-panggilan").val("Nyonya");
                    }else{
                        refrjk();
                    }

                });

             $("#pemberi-dataumum-pemberi").change( function(){

                var jenis = $( "#pemberi-dataumum-pemberi option:selected").val();

                    if (jenis=="1"){
                        refresh();
                        $("#pemberi-dataumum-pjk").prop("disabled",true);
                        $("#pemberi-dataumum-ppenggunaan").prop("disabled",true);
                        $("#pemberi-dataumum-pjenis").prop("disabled",true);
                    }else if (jenis=="2"){
                        refresh();
                        $("#pemberi-dataumum-pjenis").prop("disabled",true);
                        $("#pemberi-dataumum-bjenis").prop("disabled",true);
                    }else{
                        refresh();
                    }

                });
            
                function informasiOrder()
                {
                    param = ""

                    tbl     = "tb_order";
                    method  = "getData";
                    sort    = "";
                    limit   = "";
                    filter  = "_id = '<?php echo $id_order ?>'";

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/perubahan_cv/doSome') ?>",
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter},
                        dataType:'json',
                        success: function (resp)
                        {
                            resp = resp['Data'][0];
                            //
                                $("#io-no_order").html(resp['_id'])
                                $("#io-tgl_order").html(resp['tgl_order'])
                                $("#io-nama_klien").html(resp['nama_klien'])
                                $("#io-nama_layanan").html(resp['nama_layanan'])
                                $("#io-bdnhumun_namausaha").html(resp['bdnhumun_namausaha'])
                                $("#io-deskripsi").html(resp['deskripsi'])
                                $("#io-no_akta").html(resp['no_akta'])
                                $("#io-no_berkas").html(resp['no_berkas'])
                                $("#io-is_closed").html((resp['is_closed'] == "0" ? "Open" : "Closed"))
                                $("#io-sdh_buatakta").html((resp['sdh_buatakta'] == "0" ? "Belum" : "Sudah"))
                                $("#io-sdh_cetakakta").html((resp['sdh_cetakakta'] == "0" ? "Belum" : "Sudah"))
                                $("#io-biaya").html(resp['biaya'])
                        }
                    });
                    return false;
                }

                function informasiAkta()
                {
                    param = ""

                    tbl     = "t_akta";
                    method  = "getData";
                    sort    = "";
                    limit   = "";
                    filter  = "id_order = '<?php echo $id_order ?>'";

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/perubahan_cv/doSome') ?>",
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter},
                        dataType:'json',
                        success: function (resp)
                        {
                            resp = resp['Data'][0];
                            //
                            if(resp == null){
                                $("#caption").html("Data Umum");
                            }else{
                                $("#caption").html(resp['ID']+(resp['pemberi_nama'] == null ? "" : " - "+resp['pemberi_nama'])+" - "+resp['pelanggan']+" - "+resp['jenis_pembiayaan']);

                                aktatglmasuk = resp['tgl_masuk'];
                                aktatglkontrak = resp['janji_tgl_pk'];
                                aktatglsuratkuasa = resp['janji_tgl_surat_kuasa'];
                                aktatglakta = resp['tgl'];   
                                aktatglsertifikat = resp['ahu_tgl_sertifikat']       
                                aktatglpendaftaran = resp['ahu_tgl_pendaftaran'] 
                                aktatglselesai = resp['tgl_selesai']                

                                    $("#akta-order-tglmasuk").val(aktatglmasuk.toString("d M Y HH:mm:ss"))
                                    $("#akta-order-pelanggan").val(resp['pelanggan'])   
                                    $("#akta-order-nobatch").val(resp['no_batch'])
                                    $("#akta-order-nokontrak").val(resp['janji_no_pk'])
                                    $("#akta-order-tglkontrak").val(aktatglkontrak.toString("d M Y"))
                                    $("#akta-order-tglsuratkuasa").val(aktatglsuratkuasa.toString("d M Y"))
                                    $("#akta-order-jenispembiayaan").val(resp['jenis_pembiayaan'])
                                    $("#akta-akta-noakta").val(resp['nomor'])
                                    $("#akta-akta-tglakta").val(aktatglakta.toString("d M Y"))
                                    $("#akta-akta-jammenghadap").val(resp['jam_menghadap'])
                                    $("#akta-akta-jamselesai").val(resp['jam_selesai'])
                                    $("#akta-akta-biayaakta").val(resp['akta_biaya'])
                                    $("#akta-akta-biayapnbp").val(resp['ahu_biaya'])
                                    $("#akta-fidon-tgldaftarahu").val(aktatglpendaftaran.toString("d M Y"))
                                    $("#akta-fidon-novoucher").val(resp['ahu_no_voucher'])
                                    $("#akta-fidon-tglsertifikat").val(aktatglsertifikat.toString("d M Y"))
                                    $("#akta-fidon-nosertifikat").val(resp['ahu_no_sertifikat'])
                                    $("#akta-progress-progress").val(resp['progres'])
                                    $("#akta-progress-catatan").html(resp['catatan'])
                                    $("#akta-progress-tglselesai").val(aktatglselesai.toString("d M Y"))

                                    if(resp['selesai'] == "0"){
                                        $("#akta-progress-belum").prop("checked",true)   
                                    }else{
                                        $("#akta-progress-selesai").prop("checked",true)   
                                    }
                            }
                        }
                    });
                    return false;
                }

                function informasiPemberi()
                {
                    param = ""

                    tbl     = "t_akta";
                    method  = "getData";
                    sort    = "";
                    limit   = "";
                    filter  = "id_order = '<?php echo $id_order ?>'";

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/perubahan_cv/doSome') ?>",
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter},
                        dataType:'json',
                        success: function (resp)
                        {
                            resp = resp['Data'][0];
                            //
                            if(resp == null){
                                $("#caption").html("Data Umum");
                            }else{
                                $("#caption").html(resp['ID']+(resp['pemberi_nama'] == null ? "" : " - "+resp['pemberi_nama'])+" - "+resp['pelanggan']+" - "+resp['jenis_pembiayaan']);

                                    pemberitgll = resp['pemberi_tgl_lahir'];     
                                    idprov = resp['pemberi_provinsi'];

                                    $("#pemberi-dataumum-pemberi").val(resp['pemberi_tipe'])   
                                    $("#pemberi-dataumum-bjenis").val(resp['pemberi_subtipe1'])
                                    $("#pemberi-dataumum-pjk").val(resp['pemberi_subtipe2'])
                                    $("#pemberi-dataumum-ppenggunaan").val(resp['pemberi_jenis_penggunaan'])
                                    $("#pemberi-dataumum-pjenis").val(resp['pemberi_jenis_penggunaan_sub1'])
                                    $("#pemberi-pemberi-panggilan").val(resp['pemberi_panggilan'])
                                    $("#pemberi-pemberi-nama").val(resp['pemberi_nama'])
                                    $("#pemberi-pemberi-pekerjaan").val(resp['pemberi_pekerjaan'])
                                    $("#pemberi-pemberi-tl").val(resp['pemberi_tempat_lahir'])

                                    if(pemberitgll != null){
                                        $("#pemberi-pemberi-tgll").val(pemberitgll.toString("d M Y"))
                                    }

                                    $("#pemberi-pemberi-alamat").val(resp['pemberi_alamat'])
                                    $("#pemberi-pemberi-rt").val(resp['pemberi_rt'])
                                    $("#pemberi-pemberi-rw").val(resp['pemberi_rw'])
                                    $("#pemberi-pemberi-desa").val(resp['pemberi_desa_kel'])   
                                    $("#pemberi-pemberi-kec").val(resp['pemberi_kecamatan'])   
                                    $("#pemberi-pemberi-kab").val(resp['pemberi_kab_kota_nama'])
                                   // $("#pemberi-pemberi-provinsi").val(resp['pemberi_provinsi'])
                                    $("#pemberi-pemberi-idkab").val(resp['pemberi_kab_kota'])   
                                    $("#pemberi-pemberi-idprov").val(resp['pemberi_provinsi'])  
                                    $("#pemberi-pemberi-kodepos").val(resp['pemberi_kodepos'])   
                                    $("#pemberi-pemberi-identitas").val(resp['pemberi_identitas'])   
                                    $("#pemberi-pemberi-noidentitas").val(resp['pemberi_nik_npwp'])   
                                    $("#pemberi-pemberi-nohp").val(resp['pemberi_nohp'])   
                                    $("#pemberi-pemberi-namadeb").val(resp['pemberi_nama_debitur'])   
                                    if($("#pemberi-pemberi-idprov").val() != 0){
                                        carinamaprov();
                                    }
                            }
                        }
                    });
                    return false;
                }
            });
        </script>
        <script>
            //Simpan Data
                //Jenis simpan
                    function simpantabakta()
                    {
                        var kondisi = before_simpan_akta();
                        if(kondisi == "sukses"){
                            simpanakta();
                        }

                        return false;
                    }

                    function simpantabpemberi()
                    {
                        var kondisi = before_simpan_pemberi();
                        if(kondisi == "sukses"){
                            simpanpemberi();
                        }
                        return false;
                    }

                function simpanakta()
                {
                    var param = {
                             "tgl_masuk" : $("#akta-order-tglmasuk").val(),
                             "pelanggan" : $("#akta-order-pelanggan option:selected").val(),
                             "no_batch" : $("#akta-order-nobatch").val(),
                             "janji_no_pk" : $("#akta-order-nokontrak").val(),
                             "janji_tgl_pk" : $("#akta-order-tglkontrak").val(),
                             "janji_tgl_surat_kuasa" : $("#akta-order-tglsuratkuasa").val(),
                             "jenis_pembiayaan" : $("#akta-order-jenispembiayaan option:selected").val(),
                             "nomor" : $("#akta-akta-noakta").val(),
                             "tgl" : $("#akta-akta-tglakta").val(),
                             "jam_menghadap" : $("#akta-akta-jammenghadap").val(),
                             "jam_selesai"  : $("#akta-akta-jamselesai").val(),
                             "akta_biaya"  : $("#akta-akta-biayaakta").val(),
                             "ahu_biaya"  : $("#akta-akta-biayapnbp").val(),
                             "ahu_tgl_pendaftaran"  : $("#akta-fidon-tgldaftarahu").val(),
                             "ahu_no_voucher"  : $("#akta-fidon-novoucher").val(),
                             "ahu_tgl_sertifikat"  : $("#akta-fidon-tglsertifikat").val(),
                             "ahu_no_sertifikat"  : $("#akta-fidon-nosertifikat").val(),
                             "progres"  : $("#akta-progress-progress option:selected").val(),
                             "catatan"  : $("#akta-progress-catatan").val(),
                             "tgl_selesai"  : $("#akta-progress-tglselesai").val(),
                             "id_order"  : '<?php echo $id_order; ?>',
                             "selesai"  : ($("#akta-progress-selesai").is(':checked') ? "1" : "0"),
                         }     
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url('berkasorder/fidusia_perorangan/simpanakta') ?>",
                        data : {param : param , id : '<?php echo $id_order ?>'},
                        dataType: 'json',
                        success : function (result){
                            location.reload();
                        }
                    });
                }

                function carinamaprov(){
                    id = $("#pemberi-pemberi-idprov").val();
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url('berkasorder/fidusia_perorangan/carinamaprov') ?>",
                        data : {id : id},
                        dataType: 'json',
                        success : function (result){
                            $("#pemberi-pemberi-provinsi").val(result)
                        }
                    });
                }

                function simpanpemberi()
                {
                    var param = {
                             "pemberi_tipe" : $("#pemberi-dataumum-pemberi option:selected").val(),
                             "pemberi_subtipe1" : $("#pemberi-dataumum-bjenis option:selected").val(),
                             "pemberi_subtipe2" : $("#pemberi-dataumum-pjk option:selected").val(),
                             "pemberi_jenis_penggunaan" : $("#pemberi-dataumum-ppenggunaan option:selected").val(),
                             "pemberi_jenis_penggunaan_sub1" : $("#pemberi-dataumum-pjenis option:selected").val(),
                             "pemberi_panggilan" : $("#pemberi-pemberi-panggilan option:selected").val(),
                             "pemberi_nama" : $("#pemberi-pemberi-nama").val(),
                             "pemberi_pekerjaan" : $("#pemberi-pemberi-pekerjaan option:selected").val(),
                             "pemberi_tempat_lahir" : $("#pemberi-pemberi-tl").val(),
                             "pemberi_tgl_lahir" : $("#pemberi-pemberi-tgll").val(),
                             "pemberi_alamat"  : $("#pemberi-pemberi-alamat").val(),
                             "pemberi_rt"  : $("#pemberi-pemberi-rt").val(),
                             "pemberi_rw"  : $("#pemberi-pemberi-rw").val(),
                             "pemberi_desa_kel"  : $("#pemberi-pemberi-desa").val(),
                             "pemberi_kecamatan"  : $("#pemberi-pemberi-kec").val(),
                             "pemberi_kab_kota"  : $("#pemberi-pemberi-idkab").val(),
                             "pemberi_provinsi"  : $("#pemberi-pemberi-idprov").val(),
                             "pemberi_kodepos"  : $("#pemberi-pemberi-kodepos").val(),
                             "pemberi_identitas"  : $("#pemberi-pemberi-identitas option:selected").val(),
                             "pemberi_nik_npwp"  : $("#pemberi-pemberi-noidentitas").val(),
                             "id_order"  : '<?php echo $id_order; ?>',
                             "pemberi_nohp"  : $("#pemberi-pemberi-nohp").val(),
                             "pemberi_kab_kota_nama" : $("#pemberi-pemberi-kab").val(),
                             "pemberi_nama_debitur"  : $("#pemberi-pemberi-namadeb").val()
                         }     
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url('berkasorder/fidusia_perorangan/simpanpemberi') ?>",
                        data : {param : param , id : '<?php echo $id_order ?>'},
                        dataType: 'json',
                        success : function (result){
                            location.reload();
                        }
                    });
                }

                function before_simpan_akta()
                {
                             tglmasuk = $("#akta-order-tglmasuk").val();
                             pelanggan = $("#akta-order-pelanggan option:selected").val();
                             nobatch = $("#akta-order-nobatch").val();
                             nokontrak = $("#akta-order-nokontrak").val();
                             tglkontrak = $("#akta-order-tglkontrak").val();
                             tglsuratkuasa = $("#akta-order-tglsuratkuasa").val();
                             jenispembiayaan = $("#akta-order-jenispembiayaan option:selected").val();
                             noakta = $("#akta-akta-noakta").val();
                             tglakta  = $("#akta-akta-tglakta").val();
                             jammenghadap  = $("#akta-akta-jammenghadap").val();
                             jamselesai  = $("#akta-akta-jamselesai").val();
                             biayaakta  = $("#akta-akta-biayaakta").val();
                             biayapnbp  = $("#akta-akta-biayapnbp").val();
                             tgldaftarahu  = $("#akta-fidon-tgldaftarahu").val();
                             novoucher  = $("#akta-fidon-novoucher").val();
                             tglsertifikat  = $("#akta-fidon-tglsertifikat").val();
                             nosertifikat  = $("#akta-fidon-nosertifikat").val();
                             progres  = $("#akta-progress-progress option:selected").val();
                             catatan  = $("#akta-progress-catatan").val();
                             tglselesai  = $("#akta-progress-tglselesai").val();
                             selesai  = ($("#akta-progress-selesai").is(':checked') || $("#akta-progress-belum").is(':checked') ? "1" : "");

                    kondisi = "";

                    if((tglmasuk != "") && (pelanggan != "") && (nobatch != "") && (nokontrak != "") && (tglkontrak != "") && (tglsuratkuasa != "") && (jenispembiayaan != "") && (noakta != "") && (tglakta != "") && (jammenghadap != "") && (jamselesai != "") && (biayaakta != "") && (biayapnbp != "") && (tgldaftarahu != "") && (novoucher != "") && (tglsertifikat != "") && (nosertifikat != "") && (progres != "") && (catatan != "") && (tglselesai != "") && (selesai != ""))
                    {
                        kondisi = "sukses";
                    }else
                    {
                        notifShow("error", "Masukkan data formulir dengan benar");
                        kondisi = "gagal";
                        cekfocus_akta();
                    }
                    return kondisi;
                }

                function before_simpan_pemberi()
                {
                             pemberi = $("#pemberi-dataumum-pemberi option:selected").val();

                             bjenis = $("#pemberi-dataumum-bjenis option:selected").val();
                             pjk = $("#pemberi-dataumum-pjk option:selected").val();
                             ppenggunaan = $("#pemberi-dataumum-ppenggunaan option:selected").val();
                             pjenis = $("#pemberi-dataumum-pjenis option:selected").val();

                             panggilan = $("#pemberi-pemberi-panggilan option:selected").val();
                             nama = $("#pemberi-pemberi-nama").val();
                             pekerjaan = $("#pemberi-pemberi-pekerjaan option:selected").val();
                             tl  = $("#pemberi-pemberi-tl").val();
                             tgll  = $("#pemberi-pemberi-tgll").val();
                             alamat  = $("#pemberi-pemberi-alamat").val();
                             rt  = $("#pemberi-pemberi-rt").val();
                             rw  = $("#pemberi-pemberi-rw").val();
                             desa  = $("#pemberi-pemberi-desa").val();
                             kec  = $("#pemberi-pemberi-kec").val();
                             kab  = $("#pemberi-pemberi-idkab").val();
                             provinsi  = $("#pemberi-pemberi-idprov").val();
                             kodepos  = $("#pemberi-pemberi-kodepos").val();
                             identitas  = $("#pemberi-pemberi-identitas option:selected").val();
                             noidentitas  = $("#pemberi-pemberi-noidentitas").val();
                             nohp  = $("#pemberi-pemberi-nohp").val();
                             namadeb  = $("#pemberi-pemberi-namadeb").val();

                    kondisi = "";

                    if((pemberi != "") && (panggilan != "") && (nama != "") && (pekerjaan != "") && (tl != "") && (tgll != "") && (alamat != "") && (rt != "") && (rw != "") && (desa != "") && (kec != "") && (kab != "") && (provinsi != "") && (kodepos != "") && (identitas != "") && (noidentitas != "") && (nohp != "") && (namadeb != ""))
                    {
                        if(pemberi == "1" && bjenis!=""){
                            kondisi = "sukses";
                        }else if(pemberi == "2" && pjk!="" && ppenggunaan!=""){
                            kondisi = "sukses";
                        }else{
                            notifShow("error", "Masukkan data formulir dengan benar");
                            kondisi = "gagal";
                            cekfocus_pemberi(); 
                        }
                    }else
                    {
                        notifShow("error", "Masukkan data formulir dengan benar");
                        kondisi = "gagal";
                        cekfocus_pemberi();
                    }
                    return kondisi;
                }

                function cekfocus_akta()
                {
                    if($("#akta-order-tglmasuk").val() == "")
                    {
                     $('#akta-order-tglmasuk').focus();  
                    }else if ($("#akta-order-pelanggan option:selected").val() == "")
                    {
                     $('#akta-order-pelanggan').focus();   
                    }else if ($("#akta-order-nobatch").val() == "")
                    {
                     $('#akta-order-nobatch').focus();   
                    }else if ($("#akta-order-nokontrak").val() == "")
                    {
                     $('#akta-order-nokontrak').focus();   
                    }else if ($("#akta-order-tglkontrak").val() == "")
                    {
                     $('#akta-order-tglkontrak').focus();   
                    }else if ($("#akta-order-tglsuratkuasa").val() == "")
                    {
                     $('#akta-order-tglsuratkuasa').focus();   
                    }else if ($("#akta-order-jenispembiayaan option:selected").val() == "")
                    {
                     $('#akta-order-jenispembiayaan').focus();   
                    }else if ($("#akta-akta-noakta").val() == "")
                    {
                     $('#akta-akta-noakta').focus();  
                    }else if ($("#akta-akta-tglakta").val() == "")
                    {
                     $('#akta-akta-tglakta').focus(); 
                    }else if ($("#akta-akta-jammenghadap").val() == "")
                    {
                     $('#akta-akta-jammenghadap').focus();  
                    }else if ($("#akta-akta-jamselesai").val() == "")
                    {
                     $('#akta-akta-jamselesai').focus();   
                    }else if ($("#akta-akta-biayaakta").val() == "")
                    {
                     $('#akta-akta-biayaakta').focus();   
                    }else if ($("#akta-akta-biayapnbp").val() == "")
                    {
                     $('#akta-akta-biayapnbp').focus();   
                    }else if ($("#akta-fidon-tgldaftarahu").val() == "")
                    {
                     $('#akta-fidon-tgldaftarahu').focus();   
                    }else if ($("#akta-fidon-novoucher").val() == "")
                    {
                     $('#akta-fidon-novoucher').focus();   
                    }else if ($("#akta-fidon-tglsertifikat").val() == "")
                    {
                     $('#akta-fidon-tglsertifikat').focus();   
                    }else if ($("#akta-fidon-nosertifikat").val() == "")
                    {
                     $('#akta-fidon-nosertifikat').focus();   
                    }else if ($("#akta-progress-progress option:selected").val() == "")
                    {
                     $('#akta-progress-progress').focus();   
                    }else if ($("#akta-progress-catatan").val() == "")
                    {
                     $('#akta-progress-catatan').focus();   
                    }else if ($("#akta-progress-tglselesai").val() == "")
                    {
                     $('#akta-progress-tglselesai').focus();   
                    }
                }

                function cekfocus_pemberi()
                {
                    if($("#pemberi-dataumum-pemberi option:selected").val() == "")
                    {
                     $('#pemberi-dataumum-pemberi').focus();  
                    }else if ($("#pemberi-dataumum-bjenis option:selected").val() == "")
                    {
                     $('#pemberi-dataumum-bjenis').focus();   
                    }else if ($("#pemberi-dataumum-pjk option:selected").val() == "")
                    {
                     $('#pemberi-dataumum-pjk').focus();   
                    }else if ($("#pemberi-dataumum-ppenggunaan option:selected").val() == "")
                    {
                     $('#pemberi-dataumum-ppenggunaan').focus();   
                    }else if ($("#pemberi-dataumum-pjenis option:selected").val() == "")
                    {
                     $('#pemberi-dataumum-pjenis').focus();   
                    }else if ($("#pemberi-pemberi-panggilan option:selected").val() == "")
                    {
                     $('#pemberi-pemberi-panggilan').focus();   
                    }else if ($("#pemberi-pemberi-nama").val() == "")
                    {
                     $('#pemberi-pemberi-nama').focus();   
                    }else if ($("#pemberi-pemberi-pekerjaan option:selected").val() == "")
                    {
                     $('#pemberi-pemberi-pekerjaan').focus();  
                    }else if ($("#pemberi-pemberi-tl").val() == "")
                    {
                     $('#pemberi-pemberi-tl').focus(); 
                    }else if ($("#pemberi-pemberi-tgll").val() == "")
                    {
                     $('#pemberi-pemberi-tgll').focus();  
                    }else if ($("#pemberi-pemberi-alamat").val() == "")
                    {
                     $('#pemberi-pemberi-alamat').focus();   
                    }else if ($("#pemberi-pemberi-rt").val() == "")
                    {
                     $('#pemberi-pemberi-rt').focus();   
                    }else if ($("#pemberi-pemberi-rw").val() == "")
                    {
                     $('#pemberi-pemberi-rw').focus();   
                    }else if ($("#pemberi-pemberi-desa").val() == "")
                    {
                     $('#pemberi-pemberi-desa').focus();   
                    }else if ($("#pemberi-pemberi-kec").val() == "")
                    {
                     $('#pemberi-pemberi-kec').focus();   
                    }else if ($("#pemberi-pemberi-kec").val() == "")
                    {
                     $('#pemberi-pemberi-kec').focus();   
                    }else if ($("#pemberi-pemberi-idkab").val() == "")
                    {
                     $('#pemberi-pemberi-kab').focus();   
                    }else if ($("#pemberi-pemberi-idprov").val() == "")
                    {
                     $('#pemberi-pemberi-provinsi').focus();   
                    }else if ($("#pemberi-pemberi-kodepos").val() == "")
                    {
                     $('#pemberi-pemberi-kodepos').focus();   
                    }else if ($("#pemberi-pemberi-identitas option:selected").val() == "")
                    {
                     $('#pemberi-pemberi-identitas').focus();   
                    }else if ($("#pemberi-pemberi-noidentitas").val() == "")
                    {
                     $('#pemberi-pemberi-noidentitas').focus();   
                    }else if ($("#pemberi-pemberi-nohp").val() == "")
                    {
                     $('#pemberi-pemberi-nohp').focus();   
                    }else if ($("#pemberi-pemberi-namadeb").val() == "")
                    {
                     $('#pemberi-pemberi-namadeb').focus();   
                    }
                }
        </script>
        <script>
            function get_modal_data(m_kywd, m_hal , m_utama, m_table)
            {
                m_hal = (m_hal < 1) ? "1" : m_hal; 
                console.log("hal: "+m_hal+" kywd: "+m_kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>"+m_utama,
                        data: {param : {"page":m_hal, "kywd":m_kywd}},
                        dataType: "json",
                        success: function (result) {

                            page = result.paging.HalKe;

                            if(result.paging.IsNext == true) {
                                $(".btnNext").attr("data-page", (page + 1));  
                                $(".btnNext").removeClass("disabled");
                            }else{
                                $(".btnNext").addClass("disabled");
                            }

                            if(result.paging.IsPrev == true) {
                                $(".btnPrev").attr("data-page", (page - 1));
                                $(".btnPrev").removeClass("disabled");
                            } else {
                                $(".btnPrev").addClass("disabled");
                            }



                        $(m_table).html(result["list_result"]);
                        }
                   });
            }
            
            function nextPage(selector) {
                var m_hal = $(selector).attr("data-page");
                m_table = $(selector).attr("table");
                m_utama = $(selector).attr("utama");
                get_modal_data(m_kywd, m_hal, m_utama, m_table);
                console.log(" kywd : "+m_kywd+" hal : "+m_hal+" utama : "+m_utama+" table : "+m_table);
            }

            function prevPage(selector) {
                var m_hal = $(selector).attr("data-page");
                m_table = $(selector).attr("table");
                m_utama = $(selector).attr("utama");
                get_modal_data(m_kywd, m_hal, m_utama, m_table);
                console.log(" kywd : "+m_kywd+" hal : "+m_hal+" utama : "+m_utama+" table : "+m_table);
            }
        </script>
        <script>
            function ref_kota()
            {
                get_modal_data("", "" , "berkasorder/fidusia_perorangan/datakota", "#list-kota");
            }

            function ref_desa()
            {
                get_modal_data("", "" , "berkasorder/fidusia_perorangan/datadesa", "#list-desa");
            }
        </script>
        <script>
        var kywd= "", hal = 1;
        var m_kywd="" , m_utama ="", m_table="";

             $("#frmkota").submit(function() {
                search_data = $("#s_kota").val();
                get_modal_data(search_data, "" , "berkasorder/fidusia_perorangan/datakota", "#list-kota");   
                return false;
                
             })

             $("#frmdesa").submit(function() {
                search_data = $("#s_desa").val();
                get_modal_data(search_data, "" , "berkasorder/fidusia_perorangan/datadesa", "#list-desa");   
                return false;
                
             })

            function set_kota(selector){
                kota = $(selector).attr("data-kota");
                $("#pemberi-pemberi-tl").val(kota);
                $('#cari').modal('hide');
            }

            function set_desa(selector){
                desa = $(selector).attr("data-desa");
                kec = $(selector).attr("data-kec");
                kab = $(selector).attr("data-kab");
                prov = $(selector).attr("data-prov");
                kodepos = $(selector).attr("data-kodepos");

                idkab = $(selector).attr("data-idkab");
                idprov = $(selector).attr("data-idprov");

                $("#pemberi-pemberi-desa").val(desa);
                $("#pemberi-pemberi-kec").val(kec);
                $("#pemberi-pemberi-kab").val(kab);
                $("#pemberi-pemberi-provinsi").val(prov);
                $("#pemberi-pemberi-kodepos").val(kodepos);

                $("#pemberi-pemberi-idkab").val(idkab);
                $("#pemberi-pemberi-idprov").val(idprov);

                $('#desa').modal('hide');
            }
        </script>
    </body>
</html>
