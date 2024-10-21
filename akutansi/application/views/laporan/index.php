<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Protokol Notaris | eNotaris.com</title>
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
        <link href="<?php echo base_url("assets/plugins/bootstrap-toastr/toastr.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/select2/css/select2.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/select2/css/select2-bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url("assets/css/components-rounded.css"); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url("assets/css/plugins.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url("assets/css/layout.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/css/themes/default.css"); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo base_url("assets/css/jquery-ui.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- End Date Picker -->
        <!-- END THEME LAYOUT STYLES -->
        <!-- OpenTip -- >
        <link href="<?php echo base_url("assets/css/opentip.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- EndOpenTip -->
        
        <link href="<?php echo base_url("assets/daterange/daterangepicker.css"); ?>" rel="stylesheet" type="text/css" />
        

        
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo/favicon.ico"); ?>">
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-32x32.png"); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-16x16.png"); ?>" sizes="16x16" />

        <style type="text/css">
            .select2-container {
                width: 100% !important;
                padding: 0;
            }
            .table-detail tr th {
                width: 250px;
            }
            .nama-profile {
                margin-top: 0px;
                margin-bottom: 15px;
            }
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <?php $this->load->view("template/header"); ?>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view("template/sidebar", ["active" => "laporan"]); ?>

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div>
                            <div class="row">
                                <div class="col-md-11 col-sm-12 col-xs-12">
                                    <div class="page-title">
                                        <h1>Laporan Protokol</h1>
                                    </div>
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12" style="padding-left: 20px;">   
                                    <div class="title-action form-inline">
                                        <div class="form-group text-center form-action">                                         
                                            <a onclick="cetak();" class="btn btn-primary" title="Cetak Dokumen" id="cetak">
                                                <i class="fa fa-print"></i>
                                            </a>                   
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="base-content">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="portlet light bordered table-list">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-calendar"></i>
                                            <span class="caption-subject "> Periode Laporan</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <select class="form-control" id="bulan">
                                                        <option value="01">Januari</option>
                                                        <option value="02">Februari</option>
                                                        <option value="03">Maret</option>
                                                        <option value="04">April</option>
                                                        <option value="05">Mei</option>
                                                        <option value="06">Juni</option>
                                                        <option value="07">Juli</option>
                                                        <option value="08">Agustus</option>
                                                        <option value="09">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">November</option>
                                                        <option value="12">Desember</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control" id="tahun">
                                                        <option value="2027">2027</option>
                                                        <option value="2025">2026</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2018">2018</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet light bordered table-list">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-bars"></i>
                                            <span class="caption-subject "> Daftar Laporan</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-container">
                                            <table class="table table-responsive table-striped" style='cursor:pointer'>
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20%;">No</th>
                                                        <th style="width: 80%;">Nama</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="in" onclick="repertorium();" style="background: #dbdbdb">
                                                        <td>1</td>
                                                        <td>Repertorium</td>
                                                    </tr>
                                                    <tr class="in" onclick="legalisasi();">
                                                        <td>2</td>
                                                        <td>Legalisasi</td>
                                                    </tr>
                                                    <tr class="in" onclick="register();">
                                                        <td>3</td>
                                                        <td>Waarmarking/Register</td>
                                                    </tr>
                                                    <tr class="in" onclick="klapper();">
                                                        <td>4</td>
                                                        <td>Klapper</td>
                                                    </tr>
                                                    <tr class="in" onclick="ppat();">
                                                        <td>5</td>
                                                        <td>PPAT</td>
                                                    </tr>
                                                    <tr class="in" onclick="dkd();">
                                                        <td>6</td>
                                                        <td>Daftar Kekurangan Dokumen</td>
                                                    </tr>
                                                    <tr class="in" onclick="dp();">
                                                        <td>7</td>
                                                        <td>Daftar Protes</td>
                                                    </tr>
                                                    <tr class="in" onclick="covernote();">
                                                        <td>8</td>
                                                        <td>Covernote</td>
                                                    </tr>
                                                    <tr class="in" onclick="wasiat();">
                                                        <td>9</td>
                                                        <td>Wasiat</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" id="repertorium">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-print"></i>
                                        <span class="caption-subject "> Daftar Akta(Repertorium)</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <table class="table table-responsive table-striped" style="margin-bottom: 0px;" style="text-align: left;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5%;">No</th>
                                                    <th style="width: 10%;">Tgl Menghadap</th>
                                                    <th style="width: 15%;">Sifat Akta</th>
                                                    <th style="width: 20%;">Nama</th>
                                                </tr>
                                            </thead>
                                            <tbody id="list-repertorium"></tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" id="legalisasi">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-print"></i>
                                        <span class="caption-subject "> Daftar Surat Dibawah Tangan Disahkan(Legalisasi)</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <table class="table table-responsive table-striped" style="margin-bottom: 0px;" style="text-align: left;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5%;">No</th>
                                                    <th style="width: 5%;">No.Legalisasi</th>
                                                    <th style="width: 10%;">Tgl Menghadap</th>
                                                    <th style="width: 15%;">Sifat Surat</th>
                                                    <th style="width: 20%;">Nama Menandatangani</th>
                                                </tr>
                                            </thead>
                                            <tbody id="list-legalisasi"></tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" id="register">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-print"></i>
                                        <span class="caption-subject "> Daftar Surat Dibawah Tangan Didaftarkan(Waarmarking)</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <table class="table table-responsive table-striped" style="margin-bottom: 0px;" style="text-align: left;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5%;">No</th>
                                                    <th style="width: 5%;">No.Surat</th>
                                                    <th style="width: 10%;">Tgl Surat</th>
                                                    <th style="width: 10%;">Tgl Daftar</th>
                                                    <th style="width: 15%;">Sifat Surat</th>
                                                    <th style="width: 20%;">Nama Menandatangani</th>
                                                </tr>
                                            </thead>
                                            <tbody id="list-register"></tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" id="klapper">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-print"></i>
                                        <span class="caption-subject "> Klapper </span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <table class="table table-responsive table-striped" style="margin-bottom: 0px;" style="text-align: left;">
                                            <thead>
                                                <tr>
                                                    <th>Preview laporan tidak tersedia untuk laporan ini. Silahkan langsung mencetak laporan.</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" id="ppat">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-print"></i>
                                        <span class="caption-subject "> Laporan Bulanan Pembuatan Akta Oleh PPAT </span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <td colspan="2" align="center">Akta</td>
                                                    <td rowspan="2" align="center"><br>Perbuatan Hukum</td>
                                                    <td colspan="2" align="center">Nama</td>
                                                </tr>
                                                <tr>
                                                    <td>Nomor</td>
                                                    <td>Tanggal</td>
                                                    <td>Yang Mengalihkan</td>
                                                    <td>Yang Menerima</td>
                                                </tr>
                                            </thead>
                                            <tbody id="list-ppat"></tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" id="dkd">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-print"></i>
                                        <span class="caption-subject "> Daftar Kekurangan Dokumen</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <table class="table table-responsive table-striped" style="margin-bottom: 0px;" style="text-align: left;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5%;">No Order</th>
                                                    <th style="width: 15%;">Nama Klien</th>
                                                    <th style="width: 10%;">Nama Layanan</th>
                                                    <th style="width: 10%;">Tgl Order</th>
                                                    <th style="width: 15%;">Nama Officer</th>
                                                    <th style="width: 20%;">Dokumen Yang Kurang</th>
                                                </tr>
                                            </thead>
                                            <tbody id="list-dkd"></tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" id="dp">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-print"></i>
                                        <span class="caption-subject "> Daftar Protes</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <table class="table table-responsive table-striped" style="margin-bottom: 0px;" style="text-align: left;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10%;">Tgl Akta</th>
                                                    <th style="width: 10%;">Sifat Akta</th>
                                                    <th style="width: 5%;">No Akta</th>
                                                    <th style="width: 15%;">Officer</th>
                                                    <th style="width: 20%;">Nama Pihak</th>
                                                </tr>
                                            </thead>
                                            <tbody id="list-dp"></tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" id="covernote">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-print"></i>
                                        <span class="caption-subject "> Daftar Covernote</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <table class="table table-responsive table-striped" style="margin-bottom: 0px;" style="text-align: left;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5%;">No Surat</th>
                                                    <th style="width: 10%;">Tgl Surat</th>
                                                    <th style="width: 15%;">Kepada</th>
                                                    <th style="width: 20%;">Perihal</th>
                                                    <th style="width: 15%;">Officer</th>
                                                </tr>
                                            </thead>
                                            <tbody id="list-covernote"></tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" id="wasiat">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-print"></i>
                                        <span class="caption-subject "> Daftar Wasiat</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <td rowspan="2">No</td>
                                                    <td colspan="6" align="center">Yang Membuat Wasiat</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>Nama Dahulu</td>
                                                    <td>Tmpt Lahir</td>
                                                    <td>Tgl Lahir</td>
                                                    <td>Pekerjaan</td>
                                                    <td>Alamat Terakhir</td>
                                                </tr>
                                            </thead>
                                            <tbody id="list-wasiat"></tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FORM CETAK -->
    <div class="hidden">
        <form name="cetakdaftarakta" target = '_blank' method="POST" action="<?php echo base_url(); ?>laporan/cetakdaftarakta">
            <input type="hidden" name="inbulan" class="inbulan">
            <input type="hidden" name="intahun" class="intahun">
            <input type="hidden" name="ispdf" class="ispdf">
        </form>
        <form name="cetaklegalisasi" target = '_blank' method="POST" action="<?php echo base_url(); ?>laporan/cetaklegalisasi">
            <input type="hidden" name="inbulan" class="inbulan">
            <input type="hidden" name="intahun" class="intahun">
            <input type="hidden" name="ispdf" class="ispdf">
        </form>
        <form name="cetakregister" target = '_blank' method="POST" action="<?php echo base_url(); ?>laporan/cetakregister">
            <input type="hidden" name="inbulan" class="inbulan">
            <input type="hidden" name="intahun" class="intahun">
            <input type="hidden" name="ispdf" class="ispdf">
        </form>
        <form name="cetakklapper" target = '_blank' method="POST" action="<?php echo base_url(); ?>laporan/cetakklapper">
            <input type="hidden" name="inbulan" class="inbulan">
            <input type="hidden" name="intahun" class="intahun">
            <input type="hidden" name="ispdf" class="ispdf">
        </form>
        <form name="cetakppat" target = '_blank' method="POST" action="<?php echo base_url(); ?>laporan/cetakppat">
            <input type="hidden" name="inbulan" class="inbulan">
            <input type="hidden" name="intahun" class="intahun">
            <input type="hidden" name="ispdf" class="ispdf">
        </form>
        <form name="cetakdkd" target = '_blank' method="POST" action="<?php echo base_url(); ?>laporan/cetakdkd">
            <input type="hidden" name="inbulan" class="inbulan">
            <input type="hidden" name="intahun" class="intahun">
            <input type="hidden" name="ispdf" class="ispdf">
        </form>
        <form name="cetakdp" target = '_blank' method="POST" action="<?php echo base_url(); ?>laporan/cetakdp">
            <input type="hidden" name="inbulan" class="inbulan">
            <input type="hidden" name="intahun" class="intahun">
            <input type="hidden" name="ispdf" class="ispdf">
        </form>
        <form name="cetakcovernote" target = '_blank' method="POST" action="<?php echo base_url(); ?>laporan/cetakcovernote">
            <input type="hidden" name="inbulan" class="inbulan">
            <input type="hidden" name="intahun" class="intahun">
            <input type="hidden" name="ispdf" class="ispdf">
        </form>
        <form name="cetakwasiat" target = '_blank' method="POST" action="<?php echo base_url(); ?>laporan/cetakwasiat">
            <input type="hidden" name="inbulan" class="inbulan">
            <input type="hidden" name="intahun" class="intahun">
            <input type="hidden" name="ispdf" class="ispdf">
        </form>
    </div>

        <?php $this->load->view("template/footer"); ?>

        <script src="<?php echo base_url("assets/js/public.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/metronic.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/jquery-md5/jquery.md5.js"); ?>" type="text/javascript"></script>
        <!-- Date Picker -->
        <script src="<?php echo base_url("assets/plugins/jquery.form.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/jquery-ui.js"); ?>" type="text/javascript"></script>
        <!-- End Date Picker -->
        <script src="<?php echo base_url("assets/js/dashboard.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/layout.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/demo.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/opentip.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/adapter-jquery.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/daterange/moment.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/daterange/daterangepicker.js"); ?>" type="text/javascript"></script>
        <script>
            $(".in").click(function(){
                $(this).css("background", "#dbdbdb").siblings().css("background", "");
            })

            function cekperiode(){
                var periode;
                if ($("#repertorium").is(':visible')){
                    periode="repertorium";
                }else if ($("#legalisasi").is(':visible')){
                    periode="legalisasi";
                }else if ($("#register").is(':visible')){
                    periode="register";
                }else if ($("#klapper").is(':visible')){
                    periode="klapper";
                }else if ($("#ppat").is(':visible')){
                    periode="ppat";
                }else if ($("#dkd").is(':visible')){
                    periode="dkd";
                }else if ($("#dp").is(':visible')){
                    periode="dp";
                }else if ($("#covernote").is(':visible')){
                    periode="covernote";
                }else if ($("#wasiat").is(':visible')){
                    periode="wasiat";
                }
                return periode;
            } 

            $('#bulan').change(function(){
                hasil=cekperiode();
                if (hasil == "repertorium"){
                    repertorium();
                }else if (hasil == "legalisasi"){
                    legalisasi();
                }else if (hasil == "register"){
                    register();
                }else if (hasil == "klapper"){
                    klapper();
                }else if (hasil == "ppat"){
                    ppat();
                }else if (hasil == "dkd"){
                    dkd();
                }else if (hasil == "dp"){
                    dp();
                }else if (hasil == "covernote"){
                    covernote();
                }else if (hasil == "wasiat"){
                    wasiat();
                }
            });  

            $('#tahun').change(function(){
                hasil=cekperiode();
                if (hasil == "repertorium"){
                    repertorium();
                }else if (hasil == "legalisasi"){
                    legalisasi();
                }else if (hasil == "register"){
                    register();
                }else if (hasil == "klapper"){
                    klapper();
                }else if (hasil == "ppat"){
                    ppat();
                }else if (hasil == "dkd"){
                    dkd();
                }else if (hasil == "dp"){
                    dp();
                }else if (hasil == "covernote"){
                    covernote();
                }else if (hasil == "wasiat"){
                    wasiat();
                }
            });            

             $(document).ready(function() {
                 var d,bulan,tahun,sbulan,jdi;
                 d = new Date();
                 bulan = d.getMonth()+1;
                 tahun = d.getFullYear();

                 sbulan = bulan.toString().length;
                 (sbulan == 2 ? jdi = bulan : jdi = "0"+bulan);
                 $("#bulan").val(jdi);
                 $("#tahun").val(tahun);

                 repertorium();
            });

            function repertorium()
            {
                 $("#repertorium").show();
                 $("#legalisasi, #register, #klapper, #ppat, #dkd, #dp, #covernote, #wasiat").hide();

                 var param={"bulan" : $("#bulan option:selected").val(),"tahun" : $("#tahun option:selected").val()}

                 $.ajax({
                    type:'post',
                    url:'<?php echo base_url('laporan/tb_repertorium') ?>',
                    data : {param : param},
                    dataType:'json',
                    success:function(resp){
                        $("#list-repertorium").html(resp['list_result'])
                    }
                 })
            }

            function legalisasi()
            {
                 $("#legalisasi").show();
                 $("#repertorium, #register, #klapper, #ppat, #dkd, #dp, #covernote, #wasiat").hide();

                 var param={"bulan" : $("#bulan option:selected").val(),"tahun" : $("#tahun option:selected").val()}

                 $.ajax({
                    type:'post',
                    url:'<?php echo base_url('laporan/tb_legalisasi') ?>',
                    data : {param : param},
                    dataType:'json',
                    success:function(resp){
                        $("#list-legalisasi").html(resp['list_result'])
                    }
                 })
            }     

            function register()
            {
                 $("#register").show();
                 $("#legalisasi, #repertorium, #klapper, #ppat, #dkd, #dp, #covernote, #wasiat").hide();

                 var param={"bulan" : $("#bulan option:selected").val(),"tahun" : $("#tahun option:selected").val()}

                 $.ajax({
                    type:'post',
                    url:'<?php echo base_url('laporan/tb_waamerking') ?>',
                    data : {param : param},
                    dataType:'json',
                    success:function(resp){
                        $("#list-register").html(resp['list_result'])
                    }
                 })
            }   

            function klapper()
            {
                 $("#klapper").show();
                 $("#repertorium, #legalisasi, #register, #ppat, #dkd, #dp, #covernote, #wasiat").hide();
            }            

            function ppat() {
                $("#ppat").show();
                $("#repertorium, #legalisasi, #register, #klapper, #dkd, #dp, #covernote, #wasiat").hide();

                var param = {
                    "bulan" : $("#bulan option:selected").val(),
                    "tahun" : $("#tahun option:selected").val()
                };

                $.ajax({
                    type:'post',
                    url:'<?php echo base_url('laporan/tb_ppat') ?>',
                    data : { param : param },
                    dataType:'json',
                    success:function(res){
                        $("#list-ppat").html(res['list_result']);
                    }
                });
            }

            function dkd()
            {
                 $("#dkd").show();
                 $("#repertorium").hide();
                 $("#legalisasi").hide();
                 $("#register").hide();
                 $("#klapper").hide();
                 $("#ppat").hide();
                 $("#dp").hide();
                 $("#covernote").hide();
                 $("#wasiat").hide();

                 var param={"bulan" : $("#bulan option:selected").val(),"tahun" : $("#tahun option:selected").val()}

                 $.ajax({
                    type:'post',
                    url:'<?php echo base_url('laporan/tb_dkd') ?>',
                    data : {param : param},
                    dataType:'json',
                    success:function(resp){
                        $("#list-dkd").html(resp['list_result'])
                    }
                 })

                 console.log(param);
            } 

            function dp()
            {
                 $("#repertorium").hide();
                 $("#legalisasi").hide();
                 $("#register").hide();
                 $("#klapper").hide();
                 $("#ppat").hide();
                 $("#dkd").hide();
                 $("#dp").show();
                 $("#covernote").hide();
                 $("#wasiat").hide();

                 var param={"bulan" : $("#bulan option:selected").val(),"tahun" : $("#tahun option:selected").val()}

                 $.ajax({
                    type:'post',
                    url:'<?php echo base_url('laporan/tb_protes') ?>',
                    data : {param : param},
                    dataType:'json',
                    success:function(resp){
                        $("#list-dp").html(resp['list_result'])
                    }
                 })

                 console.log(param);
            }

            function covernote()
            {
                 $("#repertorium").hide();
                 $("#legalisasi").hide();
                 $("#register").hide();
                 $("#klapper").hide();
                 $("#ppat").hide();
                 $("#dkd").hide();
                 $("#dp").hide();
                 $("#covernote").show();
                 $("#wasiat").hide();

                 var param={"bulan" : $("#bulan option:selected").val(),"tahun" : $("#tahun option:selected").val()}

                 $.ajax({
                    type:'post',
                    url:'<?php echo base_url('laporan/tb_covernote') ?>',
                    data : {param : param},
                    dataType:'json',
                    success:function(resp){
                        $("#list-covernote").html(resp['list_result'])
                    }
                 })

                 console.log(param);
            }            

            function wasiat()
            {
                 $("#repertorium").hide();
                 $("#legalisasi").hide();
                 $("#register").hide();
                 $("#klapper").hide();
                 $("#ppat").hide();
                 $("#dkd").hide();
                 $("#dp").hide();
                 $("#covernote").hide();
                 $("#wasiat").show();

                 var param={"bulan" : $("#bulan option:selected").val(),"tahun" : $("#tahun option:selected").val()}

                 $.ajax({
                    type:'post',
                    url:'<?php echo base_url('laporan/tb_wasiat') ?>',
                    data : {param : param},
                    dataType:'json',
                    success:function(resp){
                        $("#list-wasiat").html(resp['list_result'])
                    }
                 })

                 console.log(param);
            }  

            function cek(){
                var form;
                if ($("#repertorium").is(':visible')){
                    form="cetakdaftarakta";
                }else if ($("#legalisasi").is(':visible')){
                    form="cetaklegalisasi";
                }else if ($("#register").is(':visible')){
                    form="cetakregister";
                }else if ($("#klapper").is(':visible')){
                    form="cetakklapper";
                }else if ($("#ppat").is(':visible')){
                    form="cetakppat";
                }else if ($("#dkd").is(':visible')){
                    form="cetakdkd";
                }else if ($("#dp").is(':visible')){
                    form="cetakdp";
                }else if ($("#covernote").is(':visible')){
                    form="cetakcovernote";
                }else if ($("#wasiat").is(':visible')){
                    form="cetakwasiat";
                }
                return form;
            } 

            function cetak(){
                var form=cek();
                $(".inbulan").val( $("#bulan option:selected").val());
                $(".intahun").val( $("#tahun option:selected").val());
                document.forms[form].submit();
            }           
        </script>
    </body>
</html>