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
        <title>Berkas Fidusia Lembaga | eNotaris.com</title>
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
                                    <h1>Berkas Fidusia Lembaga</h1>
                                </div>
                            </div>  
                            <div class="col-md-3 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">   
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a role="button" href="<?php echo base_url('order/edit/'.$id_order) ;?>" > Edit </a></li>
                                                <li><hr></li>
                                                <li><a role="button" href="<?php echo base_url('order/orderdokumen/'.$id_order) ;?>" > Kelengkapan Dokumen </a></li>
                                                <li><a role="button" href="<?php echo base_url('order/berkassaksi/'.$id_order) ;?>" > Berkas Saksi </a></li>
                                                <li><a role="button" href="<?php echo base_url('order/order-proses/'.$id_order) ;?>" > Monitoring Proses </a></li>
                                                <li><a role="button" href="<?php echo base_url('billing/detail/'.$id_order) ;?>" > Billing </a></li>
                                                <li><a role="button" href="<?php echo base_url('efiling/index/'.$id_order) ;?>" > eFilling </a></li>
                                                <li><a role="button" href="<?php echo base_url('datatransaksi/index/'.$id_order) ;?>" > Keuangan </a></li>
                                            </ul>
                                        </div>                       
                                        <a class="btn btn-primary" href="<?php echo base_url(); ?>order/Form-Laporan" >
                                            <i class="fa fa-print"></i>
                                        </a>                   
                                    </div>
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
                                            <span class="caption-subject font-dark bold uppercase" id="caption">Data Umum</span>
                                        </div>
                                        <div class="caption pull-right">
                                            <a class="btn btn-primary" onclick="simpan();" title="Simpan Data">
                                                <i class="fa fa-save"></i>
                                            </a>  
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tabbable-line boxless margin-bottom-20" id="content">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#tab_1" data-toggle="tab">Akta</a></li>
                                                <li><a href="#tab_2" data-toggle="tab">Pemberi</a></li>
                                                <li><a href="#tab_3" data-toggle="tab">Persetujuan</a></li>
                                                <li><a href="#tab_4" data-toggle="tab">Penerima</a></li>
                                                <li><a href="#tab_5" data-toggle="tab">Obyek</a></li>
                                                <li><a href="#tab_6" data-toggle="tab">Perjanjian</a></li>
                                                <li><a href="#tab_7" data-toggle="tab">Set 1</a></li>
                                                <li><a href="#tab_8" data-toggle="tab">Set 2</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <?php echo $this->load->view("order/berkasorder/fidusia/kontenfidusialembaga") ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        <script type="text/javascript">

            $(document).ready(function(){
                informasiOrder();
                informasiAkta();
                informasiPemberi();
                informasiPersetujuan();
                informasiPenerima();
                informasiObyek();
                informasiPerjanjian();
                informasiSet1();
                informasiSet2();

                $("#akta-progress-progress, #persetujuan-dataumum-persetujuanoleh, #persetujuan-po-pekerjaan, #penerima-pf-pekerjaan, #obyek-of-obyekberseri, #obyek-of-obyektidakberseri, #obyek-of-warna, #obyek-of-matauang, #perjanjian-kategori, #pemberi-pemberi-pekerjaan").select2(); 
                $("#pemberi-dataumum-pemberi").val("2");
                $("#persetujuan-po-panggilan").val("Tuan");
                $("#pemberi-pemberi-panggilan").val("Tuan");
                $("#obyek-of-matauang").val("IDR_RUPIAH");
                $("#pemberi-dataumum-pemberi").trigger("change");
                $("#penerima-dataumum-penerima").trigger("click");
                $("#obyek-of-kategori").trigger("change");
                $("#akta-order-pelanggan").trigger("change");
                $("#perjanjian-kategori").val(1);

                 $("#perjanjian-nilaipenjaminan").keyup( function(){
                    var nilai = $("#perjanjian-nilaipenjaminan").val();
                    //console.log(nilai)
                    if (nilai <= 50000000){
                        $("#perjanjian-kategori").val("1").trigger('change');
                    }else if((nilai > 50000000)&&(nilai <= 100000000)){
                        $("#perjanjian-kategori").val("2").trigger('change');
                    }else if((nilai > 100000000)&&(nilai <= 250000000)){
                        $("#perjanjian-kategori").val("3").trigger('change');
                    }else if((nilai > 250000000)&&(nilai <= 500000000)){
                        $("#perjanjian-kategori").val("4").trigger('change');
                    }else if((nilai > 500000000)&&(nilai <= 1000000000)){
                        $("#perjanjian-kategori").val("5").trigger('change');
                    }else if((nilai > 1000000000)&&(nilai <= 100000000000)){
                        $("#perjanjian-kategori").val("6").trigger('change');
                    }else if((nilai > 100000000000)&&(nilai <= 500000000000)){
                        $("#perjanjian-kategori").val("7").trigger('change');
                    }else if((nilai > 500000000000)&&(nilai <= 1000000000000)){
                        $("#perjanjian-kategori").val("8").trigger('change');
                    }else if(nilai > 1000000000000){
                        $("#perjanjian-kategori").val("9").trigger('change');
                    }else if(nilai < 1){
                        $("#perjanjian-kategori").val("0").trigger('change');
                    }
                 });
            });

                function getauto(sel)
                {
                    var isi = sel.value;
                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/fidusia_lembaga/penerima') ?>",
                        data:{param:isi},
                        dataType:'json',
                        success: function (resp)
                        {
                            resp = resp['Data'][0];
                            if(resp != null){
                            idprov = resp['penerima_provinsi'];

                            $("#penerima-dataumum-penerima").val(resp['penerima_tipe'])
                            $("#penerima-dataumum-penerima").trigger( "change" );
                            $("#penerima-pf-panggilan").val(resp['penerima_panggilan'])
                            $("#penerima-pf-nama").val(resp['penerima_nama'])
                            $("#penerima-pf-pekerjaan").val(resp['penerima_pekerjaan']).trigger("change")
                            $("#penerima-pf-tl").val(resp['penerima_tempat_lahir'])
                            $("#penerima-pf-alamat").val(resp['penerima_alamat'])
                            $("#penerima-pf-rt").val(resp['penerima_rt'])
                            $("#penerima-pf-rw").val(resp['penerima_rw'])
                            $("#penerima-pf-desa").val(resp['penerima_desa_kel'])

                            if (resp['penerima_tgl_lahir']){
                                $("#penerima-pf-tgll").val(formatDate1(resp['penerima_tgl_lahir']))   
                            }

                            $("#penerima-pf-kec").val(resp['penerima_kecamatan'])
                            $("#penerima-pf-idkab").val(returndg(resp['penerima_kab_kota']))
                            $("#penerima-pf-kab").val(resp['penerima_kab_kota_nama'])
                            $("#penerima-pf-idprov").val(resp['penerima_provinsi'])   
                            $("#penerima-pf-kodepos").val(resp['penerima_kodepos'])   
                            $("#penerima-pf-identitas").val(resp['penerima_identitas'])
                            $("#penerima-pf-noidentitas").val(resp['penerima_nik_npwp'])   
                            $("#penerima-pf-nohp").val(resp['penerima_nohp'])  

                            if ($("#penerima-pf-idprov").val() != 0){
                                namaprovpenerima();
                            }

                            $("#penerima-dataumum-bjenisusaha").val(resp['penerima_subtipe1'])   
                            }
                        }
                    });
                }

                function getobyek(sel)
                {
                    var isi = sel.value;
                    if (isi == "1"){
                        $("#obyek-of-obyektidakberseri").val("0").trigger('change');
                        $('#obyek-of-obyekberseri').prop('disabled', false);
                        $('#obyek-of-obyektidakberseri').prop('disabled', true);
                    }else if (isi == "2"){
                        $("#obyek-of-obyekberseri").val("0").trigger('change');
                        $('#obyek-of-obyekberseri').prop('disabled', true);
                        $('#obyek-of-obyektidakberseri').prop('disabled', false);
                    }
                }

                function getjk(sel)
                {
                    var isi = sel.value;
                    if (isi == "1"){
                        $('#pemberi-pemberi-panggilan').val('Tuan');
                    }else if (isi == "2"){
                        $('#pemberi-pemberi-panggilan').val('Nyonya');
                    }else{
                        $('#pemberi-pemberi-panggilan').val('Tuan');
                    }
                }

                function getpemberi(sel)
                {
                    var isi = sel.value;
                    if (isi == "1"){
                        $('#pemberi-dataumum-pjk').val("0");
                        $('#pemberi-dataumum-ppenggunaan').val("0");
                        $('#pemberi-dataumum-pjenis').val("0");
                        $('#pemberi-dataumum-pjk').prop('disabled', true);
                        $('#pemberi-dataumum-ppenggunaan').prop('disabled', true);
                        $('#pemberi-dataumum-pjenis').prop('disabled', true);
                        $('#pemberi-dataumum-bjenis').prop('disabled', false);
                    }else if (isi == "2"){
                        $('#pemberi-dataumum-bjenis').val("0");
                        $('#pemberi-dataumum-pjenis').val("0"); 
                        $('#pemberi-dataumum-bjenis').prop('disabled', true);
                        $('#pemberi-dataumum-pjenis').prop('disabled', false);  
                        $('#pemberi-dataumum-pjk').prop('disabled', false);
                        $('#pemberi-dataumum-ppenggunaan').prop('disabled', false);                    
                    }
                }

                function getpenerima(sel)
                {
                    var isi = sel.value;
                    if (isi == "1"){
                        $('#penerima-pf-panggilan').val("");
                        $('#penerima-pf-pekerjaan').val("");
                        $('#penerima-pf-tl').val("");
                        $('#penerima-pf-tgll').val("");

                        $('#penerima-pf-panggilan').prop('disabled', true);
                        $('#penerima-pf-pekerjaan').prop('disabled', true);
                        $('#btntl').removeAttr("href");
                        $('#btntl').prop('disabled', true);
                        $('#penerima-pf-tgll').prop('disabled', true);
                        $('#penerima-dataumum-bjenisusaha').prop('disabled', false);
                    }else if (isi == "2"){
                        $('#penerima-dataumum-bjenisusaha').val(0);

                        $('#penerima-pf-panggilan').prop('disabled', false);
                        $('#penerima-pf-pekerjaan').prop('disabled', false);
                        $('#btntl').attr('href', '#cari2');
                        $('#btntl').prop('disabled', false);
                        $('#penerima-pf-tgll').prop('disabled', false);
                        $('#penerima-dataumum-bjenisusaha').prop('disabled', true);                   
                    }else{
                        $('#penerima-pf-panggilan').prop('disabled', false);
                        $('#penerima-pf-pekerjaan').prop('disabled', false);
                        $('#btntl').prop('disabled', false);
                        $('#penerima-pf-tgll').prop('disabled', false);
                        $('#penerima-dataumum-bjenisusaha').prop('disabled', false);

                        $('#penerima-pf-panggilan').val("");
                        $('#penerima-pf-pekerjaan').val("");
                        $('#penerima-pf-tl').val("");
                        $('#penerima-pf-tgll').val("");
                        $('#penerima-dataumum-bjenisusaha').val(0);
                    }
                }
        </script>
        <script>
                //Informasi
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
                                $("#caption").html(resp['ID']+(resp['pemberi_nama'] == null ? "" : " - "+resp['pemberi_nama'])+(resp['pelanggan'] == null ? "" : " - "+resp['pelanggan'])+" - "+resp['jenis_pembiayaan']);

                                if(resp['selesai'] == "1"){
                                    $("#akta-progress-selesai").prop("checked",true)   
                                }

                                $("#akta-order-tglmasuk").val(formatDate1(resp['tgl_masuk']))
                                $("#akta-order-tglkontrak").val(formatDate1(resp['janji_tgl_pk']))
                                $("#akta-order-tglsuratkuasa").val(formatDate1(resp['janji_tgl_surat_kuasa']))
                                $("#akta-akta-tglakta").val(formatDate1(resp['tgl']))
                                $("#akta-fidon-tglsertifikat").val(formatDate1(resp['ahu_tgl_sertifikat']))
                                $("#akta-fidon-tgldaftarahu").val(formatDate1(resp['ahu_tgl_pendaftaran']))
                                $("#akta-progress-tglselesai").val(formatDate1(resp['tgl_selesai']))
                                $("#akta-order-noinvoice").val(resp['no_invoice'])
                                $("#akta-order-pelanggan").val(resp['pelanggan'])   
                                getPelanggan(resp['pelanggan']);
                                $("#akta-order-nobatch").val(resp['no_batch'])
                                $("#akta-order-nokontrak").val(resp['janji_no_pk'])
                                $("#akta-order-jenispembiayaan").val(resp['jenis_pembiayaan'])
                                $("#akta-akta-noakta").val(resp['nomor'])
                                $("#akta-akta-jammenghadap").val(resp['jam_menghadap'])
                                $("#akta-akta-jamselesai").val(resp['jam_selesai'])
                                $("#akta-akta-biayaakta").val(returntoM(resp['akta_biaya']))
                                $("#akta-akta-biayapnbp").val(returntoM(resp['ahu_biaya']))
                                $("#akta-fidon-novoucher").val(resp['ahu_no_voucher'])
                                $("#akta-fidon-nosertifikat").val(resp['ahu_no_sertifikat'])
                                $("#akta-progress-progress").val(resp['progres']).trigger('change');
                                $("#akta-progress-catatan").html(resp['catatan'])

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
 
                                    idprov = resp['pemberi_provinsi'];

                                    $("#pemberi-dataumum-pemberi").val(resp['pemberi_tipe']).trigger('change') 
                                    $("#pemberi-dataumum-bjenis").val(resp['pemberi_subtipe1'])
                                    $("#pemberi-dataumum-pjk").val(resp['pemberi_subtipe2'])
                                    $("#pemberi-dataumum-ppenggunaan").val(resp['pemberi_jenis_penggunaan'])
                                    $("#pemberi-dataumum-pjenis").val(resp['pemberi_jenis_penggunaan_sub1'])
                                    $("#pemberi-pemberi-panggilan").val(resp['pemberi_panggilan'])
                                    $("#pemberi-pemberi-nama").val(resp['pemberi_nama'])
                                    $("#pemberi-pemberi-pekerjaan").val(resp['pemberi_pekerjaan']).trigger("change")
                                    $("#pemberi-pemberi-tl").val(resp['pemberi_tempat_lahir'])

                                    $("#pemberi-pemberi-tgll").val(formatDate1(resp['pemberi_tgl_lahir']))

                                    $("#pemberi-pemberi-alamat").val(resp['pemberi_alamat'])
                                    $("#pemberi-pemberi-rt").val(resp['pemberi_rt'])
                                    $("#pemberi-pemberi-rw").val(resp['pemberi_rw'])
                                    $("#pemberi-pemberi-desa").val(resp['pemberi_desa_kel'])   
                                    $("#pemberi-pemberi-kec").val(resp['pemberi_kecamatan'])   
                                    $("#pemberi-pemberi-kab").val(resp['pemberi_kab_kota_nama'])
                                    $("#pemberi-pemberi-idkab").val(returndg(resp['pemberi_kab_kota']))   
                                    $("#pemberi-pemberi-idprov").val(resp['pemberi_provinsi'])  

                                    if ($("#pemberi-pemberi-idprov").val() != 0){
                                        namaprovpemberi();
                                    }

                                    $("#pemberi-pemberi-kodepos").val(resp['pemberi_kodepos'])   
                                    $("#pemberi-pemberi-identitas").val(resp['pemberi_identitas'])
                                    $("#pemberi-pemberi-noidentitas").val(resp['pemberi_nik_npwp'])   
                                    $("#pemberi-pemberi-nohp").val(resp['pemberi_nohp'])   
                                    $("#pemberi-pemberi-namadeb").val(resp['pemberi_nama_debitur']) 

                                    if(resp['pemberi_tipe'] == "1"){
                                        $('#pemberi-dataumum-pjk').prop('disabled', true);
                                        $('#pemberi-dataumum-ppenggunaan').prop('disabled', true);
                                        $('#pemberi-dataumum-pjenis').prop('disabled', true);
                                    }else{
                                        $('#pemberi-dataumum-bjenis').prop('disabled', true);  
                                    }
                            }
                        }
                    });
                    return false;
                }

                function informasiPersetujuan()
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

                                    idprov = resp['setuju_provinsi'];

                                    $("#persetujuan-dataumum-persetujuanoleh").val(resp['setuju_oleh']).trigger("change")
                                    $("#persetujuan-po-panggilan").val(resp['setuju_panggilan'])
                                    $("#persetujuan-po-nama").val(resp['setuju_nama'])
                                    $("#persetujuan-po-pekerjaan").val(resp['setuju_pekerjaan']).trigger("change")
                                    $("#persetujuan-po-tl").val(resp['setuju_tempat_lahir'])
                                    $("#persetujuan-po-alamat").val(resp['setuju_alamat'])
                                    $("#persetujuan-po-rt").val(resp['setuju_rt'])
                                    $("#persetujuan-po-rw").val(resp['setuju_rw'])
                                    $("#persetujuan-po-desa").val(resp['setuju_desa_kel'])

                                    $("#persetujuan-it-tgldikeluarkan").val(formatDate1(resp['setuju_dudajanda_tgl']))
                                    $("#persetujuan-po-tgll").val(formatDate1(resp['setuju_tgl_lahir']))

                                    $("#persetujuan-po-kec").val(resp['setuju_kecamatan'])
                                    $("#persetujuan-po-idkab").val(returndg(resp['setuju_kab_kota']))
                                    $("#persetujuan-po-kab").val(resp['setuju_kab_kota_nama'])
                                    $("#persetujuan-po-idprov").val(resp['setuju_provinsi'])   
                                    $("#persetujuan-po-kodepos").val(resp['setuju_kodepos'])   
                                    $("#persetujuan-po-identitas").val(resp['setuju_identitas'])
                                    $("#persetujuan-po-noidentitas").val(resp['setuju_nik_npwp'])   
                                    $("#persetujuan-it-dikeluarkanoleh").val(resp['setuju_dudajanda_oleh'])  

                                    if ($("#persetujuan-po-idprov").val() != 0){
                                        namaprovpersetujuan();
                                    }

                                    $("#persetujuan-it-nosurat").val(resp['setuju_dudajanda_nomor'])   
                            }
                        }
                    });
                    return false;
                }

                function informasiPenerima()
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
   
                                    idprov = resp['penerima_provinsi'];

                                    $("#penerima-dataumum-penerima").val(resp['penerima_tipe'])   
                                    $("#penerima-pf-panggilan").val(resp['penerima_panggilan'])
                                    $("#penerima-pf-nama").val(resp['penerima_nama'])
                                    $("#penerima-pf-pekerjaan").val(resp['penerima_pekerjaan']).trigger("change")
                                    $("#penerima-pf-tl").val(resp['penerima_tempat_lahir'])
                                    $("#penerima-pf-alamat").val(resp['penerima_alamat'])
                                    $("#penerima-pf-rt").val(resp['penerima_rt'])
                                    $("#penerima-pf-rw").val(resp['penerima_rw'])
                                    $("#penerima-pf-desa").val(resp['penerima_desa_kel'])

                                    $("#penerima-pf-tgll").val(formatDate1(resp['penerima_tgl_lahir']))

                                    $("#penerima-pf-kec").val(resp['penerima_kecamatan'])
                                    $("#penerima-pf-idkab").val(returndg(resp['penerima_kab_kota']))
                                    $("#penerima-pf-kab").val(resp['penerima_kab_kota_nama'])
                                    $("#penerima-pf-idprov").val(resp['penerima_provinsi'])   
                                    $("#penerima-pf-kodepos").val(resp['penerima_kodepos'])   
                                    $("#penerima-pf-identitas").val(resp['penerima_identitas'])
                                    $("#penerima-pf-noidentitas").val(resp['penerima_nik_npwp'])   
                                    $("#penerima-pf-nohp").val(resp['penerima_nohp'])  

                                    if ($("#penerima-pf-idprov").val() != 0){
                                        namaprovpenerima();
                                    }

                                    $("#penerima-dataumum-bjenisusaha").val(resp['penerima_subtipe1'])   

                                    if (resp['penerima_tipe'] == "1"){
                                        $('#penerima-pf-panggilan').prop('disabled', true);
                                        $('#penerima-pf-pekerjaan').prop('disabled', true);
                                        $('#btntl').prop('disabled', true);
                                        $('#penerima-pf-tgll').prop('disabled', true);
                                    }else if (resp['penerima_tipe'] == "2"){
                                        $('#penerima-dataumum-bjenisusaha').prop('disabled', true); 
                                    }
                            }
                        }
                    });
                    return false;
                }


                function getPelanggan(pelanggan)
                {

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url(); ?>berkasorder/fidusia_lembaga/getPelanggan",
                        data:{pelanggan:pelanggan},
                        dataType:'json',
                        success: function (resp)
                        {
                            resp = resp['Data'][0];
                            if(resp != null)
                            {
                                    $("#idpel").val(resp['ID'])
                                    $("#penerima-du-nama").val(resp['nama'])   
                                    $("#biaya-du-nama").val(returntoM(resp['biaya']))
                                    $("#penerima-p-panggilan").val(resp['pimpinan_panggilan'])
                                    $("#penerima-p-nama").val(resp['pimpinan_nama'])
                                    $("#penerima-p-uraian").val(resp['pimpinan_uraian_akta'])
                                    $("#penerima-p-sk").val(resp['pimpinan_sk'])
                                    $("#penerima-p-catatan").val(resp['catatan'])
                            }
                        }
                    });
                    return false;
                }

                function informasiObyek()
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

                                    $("#obyek-of-kategori").val(resp['obyek_kategori']).trigger('change') 
                                    $("#obyek-of-obyekberseri").val(resp['obyek_subkategori1']).trigger("change")
                                    $("#obyek-of-obyektidakberseri").val(resp['obyek_subkategori2']).trigger("change")
                                    $("#obyek-of-merk").val(resp['obyek_merek'])
                                    $("#obyek-of-tipe").val(resp['obyek_tipe'])
                                    $("#obyek-io-model").val(resp['obyek_model'])
                                    $("#obyek-of-norangka").val(resp['obyek_no_rangka'])
                                    $("#obyek-of-nomesin").val(resp['obyek_no_mesin'])
                                    $("#obyek-io-noseri").val(resp['obyek_no_seri'])

                                    $("#obyek-ib-tgldikeluarkan").val(formatDate1(resp['obyek_bukti_tgl']))

                                    $("#obyek-io-tahundibuat").val(resp['obyek_tahun_buat'])
                                    $("#obyek-io-tahundirakit").val(resp['obyek_tahun_rakit'])
                                    $("#obyek-of-warna").val(resp['obyek_warna']).trigger("change")
                                    $("#obyek-io-nopol").val(resp['obyek_no_polisi'])   
                                    $("#obyek-io-bpkbatasnama").val(resp['obyek_bpkb_atas_nama'])   
                                    $("#obyek-io-nobpkb").val(resp['obyek_bpkb_nomor'])
                                    $("#obyek-of-bukti").val(resp['obyek_bukti'])   
                                    $("#obyek-ib-dikeluarkanoleh").val(resp['obyek_bukti_dikeluarkan'])  
                                    $("#obyek-ib-nobukti").val(resp['obyek_bukti_nomor'])
                                    $("#obyek-of-matauang").val(resp['obyek_mata_uang']).trigger("change")
                                    $("#obyek-of-nilaiobyek").val(returntoM(resp['obyek_nilai']))
                                    $("#obyek-of-keterangan").val(resp['obyek_keterangan'])
                                    $("#obyek-io-infoplus").val(resp['obyek_tambahan'])   
                            }
                        }
                    });
                    return false;
                }

                function informasiPerjanjian()
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

                                    $("#perjanjian-jenis").val(resp['janji_jenis'])   
                                    $("#perjanjian-jmlitem").val(resp['janji_hutang'])
                                    $("#perjanjian-nilaihutang").val(returntoM(resp['janji_nilai_hutang']))
                                    $("#perjanjian-berdasarkan").val(resp['janji_pokok_dasar'])

                                    $("#perjanjian-tglmulai").val(formatDate1(resp['janji_tgl_jangka_waktu']))
                                    $("#perjanjian-tglberakhir").val(formatDate1(resp['janji_tgl_jangka_waktu_akhir']))

                                    $("#perjanjian-nilaipenjaminan").val(returntoM(resp['nilai_penjaminan']))
                                    $("#perjanjian-kategori").val(resp['nilai_kategori']).trigger("change")
                                    $("#perjanjian-pengadilan").val(resp['lain_pengadilan_negeri']) 
                            }
                        }
                    });
                    return false;
                }

                function informasiSet1()
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

                                    $("#set1-tgltahun").val(resp['tgl_tahun'])
                                    $("#set1-tglbulan").val(resp['tgl_bulan'])
                                    $("#set1-tglhari").val(resp['tgl_hari']) 
                                    $("#set1-tglterbilangtahun").val(resp['tgl_terbilangtahun'])
                                    $("#set1-tglpanjang").val(resp['tgl_tglpanjang'])
                                    $("#set1-tglterbilanghari").val(resp['tgl_terbilanghari']) 
                                    $("#set1-tglnamahari").val(resp['tgl_namahari'])
                                    $("#set1-tglnamabulan").val(resp['tgl_namabulan'])
                                    $("#set1-jammenghadapterbilang").val(resp['jam_menghadap_terbilang']) 
                                    $("#set1-jamselesaiterbilang").val(resp['jam_selesai_terbilang'])
                                    $("#set1-obyeknilaiterbilang").val(resp['obyek_nilai_terbilang'])
                                    $("#set1-nilaipenjaminanterbilang").val(resp['nilai_penjaminan_terbilang'])
                                    $("#set1-janjinilaihutangterbilang").val(resp['janji_nilai_hutang_terbilang'])
                                    $("#set1-janjitglpktahun").val(resp['janji_tgl_pk_tahun'])
                                    $("#set1-janjitglpkterbilangtahun").val(resp['janji_tgl_pk_terbilangtahun'])
                                    $("#set1-janjitglpktglpanjang").val(resp['janji_tgl_pk_tglpanjang'])
                                    $("#set1-janjitglpkterbilanghari").val(resp['janji_tgl_pk_terbilanghari'])
                                    $("#set1-janjitglpknamahari").val(resp['janji_tgl_pk_namahari']) 
                                    $("#set1-janjitglpknamabulan").val(resp['janji_tgl_pk_namabulan'])
                                    $("#set1-janjitglpkhari").val(resp['janji_tgl_pk_hari'])
                                    $("#set1-janjitglpkbulan").val(resp['janji_tgl_pk_bulan'])
                                    $("#set1-setujutgllahirtahun").val(resp['setuju_tgl_lahir_tahun'])
                                    $("#set1-setujutgllahirterbilangtahun").val(resp['setuju_tgl_lahir_terbilangtahun'])
                                    $("#set1-setujutgllahirtglpanjang").val(resp['setuju_tgl_lahir_tglpanjang'])
                                    $("#set1-setujukabkotanama").val(resp['setuju_kabkota_nama'])
                                    $("#set1-setujutgllahirterbilanghari").val(resp['setuju_tgl_lahir_terbilanghari'])
                                    $("#set1-setujutgllahirnamahari").val(resp['setuju_tgl_lahir_namahari'])
                                    $("#set1-setujutgllahirnamabulan").val(resp['setuju_tgl_lahir_namabulan']) 
                                    $("#set1-setujutgllahirhari").val(resp['setuju_tgl_lahir_hari'])
                                    $("#set1-setujutgllahirbulan").val(resp['setuju_tgl_lahir_bulan'])
                                    $("#set1-pemberikabkotanama").val(resp['pemberi_kab_kota_nama']) 
                                    $("#set1-penerimakabkotanama").val(resp['penerima_kab_kota_nama'])
                                    $("#set1-setujukabkotanama").val(resp['setuju_kab_kota_nama'])                                                                          
                            }
                        }
                    });
                    return false;
                }

                function informasiSet2()
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

                                    $("#set2-pemberitgllahirtahun").val(resp['pemberi_tgl_lahir_tahun'])
                                    $("#set2-pemberitgllahirterbilangtahun").val(resp['pemberi_tgl_lahir_terbilangtahun'])
                                    $("#set2-pemberitgllahirtglpanjang").val(resp['pemberi_tgl_lahir_tglpanjang']) 
                                    $("#set2-pemberitgllahirterbilanghari").val(resp['pemberi_tgl_lahir_terbilanghari'])
                                    $("#set2-pemberitgllahirnamahari").val(resp['pemberi_tgl_lahir_namahari'])
                                    $("#set2-pemberitgllahirnamabulan").val(resp['pemberi_tgl_lahir_namabulan']) 
                                    $("#set2-pemberitgllahirhari").val(resp['pemberi_tgl_lahir_hari'])
                                    $("#set2-pemberitgllahirbulan").val(resp['pemberi_tgl_lahir_bulan'])
                                    $("#set2-obyektahun").val(resp['obyek_tahun']) 
                                    $("#set2-obyekbulan").val(resp['obyek_bulan'])
                                    $("#set2-obyekhari").val(resp['obyek_hari'])
                                    $("#set2-obyekterbilangtahun").val(resp['obyek_terbilangtahun'])
                                    $("#set2-penerimatgllahirtahun").val(resp['penerima_tgl_lahir_tahun'])
                                    $("#set2-penerimatgllahirterbilangtahun").val(resp['penerima_tgl_lahir_terbilangtahun'])
                                    $("#set2-penerimatglpanjang").val(resp['penerima_tgl_lahir_tglpanjang'])
                                    $("#set2-penerimatgllahirterbilanghari").val(resp['penerima_tgl_lahir_terbilanghari'])
                                    $("#set2-penerimatgllahirnamahari").val(resp['penerima_tgl_lahir_namahari'])
                                    $("#set2-penerimatgllahirnamabulan").val(resp['penerima_tgl_lahir_namabulan']) 
                                    $("#set2-penerimatgllahirhari").val(resp['penerima_tgl_lahir_hari'])
                                    $("#set2-penerimatgllahirbulan").val(resp['penerima_tgl_lahir_bulan'])
                                    $("#set2-obyektglpanjang").val(resp['obyek_tglpanjang'])
                                    $("#set2-obyekterbilanghari").val(resp['obyek_terbilanghari'])
                                    $("#set2-obyeknamahari").val(resp['obyek_namahari'])
                                    $("#set2-obyeknamabulan").val(resp['obyek_namabulan'])                                                                          
                            }
                        }
                    });
                    return false;
                }
        </script>
        <script>
                // action simpan
                function simpan()
                {
                    $(".tunggu").addClass("disabled");
                    $(".tunggu").prop("value","Sedang Diproses !");

                    //a == akta
                    var atglakta = new Date($("#akta-akta-tglakta").val());
                    var atgl_bulan = atglakta.getMonth()+1;  
                    var atgl_hari = atglakta.getDate();
                    var atgl_tahun = atglakta.getFullYear();
                    var atgl_namabulan = getnamabulan(atglakta);
                    var atgl_namahari = getnamahari(atglakta);
                    var atgl_terbilanghari = terbilang(atgl_hari);
                    var atgl_terbilangtahun = terbilang(atgl_tahun);
                    var atgl_tglpanjang = atgl_hari+" "+atgl_namabulan+" "+atgl_tahun;
                    var ajam_menghadap = $("#akta-akta-jammenghadap").val();
                    var aarrjammenghadap = ajam_menghadap.split(":","2");
                    var ajam_menghadap_terbilang = namajam(aarrjammenghadap[0],aarrjammenghadap[1]);
                    var ajam_selesai = $("#akta-akta-jamselesai").val();
                    var aarrjamselesai = ajam_selesai.split(":","2");
                    var ajam_selesai_terbilang = namajam(aarrjamselesai[0],aarrjamselesai[1]);
                    var atglpk = new Date($("#akta-order-tglkontrak").val());
                    var ajanji_tgl_pk_bulan = atglpk.getMonth()+1;  
                    var ajanji_tgl_pk_hari = atglpk.getDate();
                    var ajanji_tgl_pk_tahun = atglpk.getFullYear();
                    var ajanji_tgl_pk_namabulan = getnamabulan(atglpk);
                    var ajanji_tgl_pk_namahari = getnamahari(atglpk);
                    var ajanji_tgl_pk_terbilanghari = terbilang(ajanji_tgl_pk_hari);
                    var ajanji_tgl_pk_terbilangtahun = terbilang(ajanji_tgl_pk_tahun);
                    var ajanji_tgl_pk_tglpanjang = ajanji_tgl_pk_hari+" "+ajanji_tgl_pk_namabulan+" "+ajanji_tgl_pk_tahun;

                    //b == pemberi
                    var bpemberi_tgl_lahir_bulan = ""
                    var bpemberi_tgl_lahir_hari  = ""
                    var bpemberi_tgl_lahir_tahun  = ""
                    var bpemberi_tgl_lahir_namabulan  = ""
                    var bpemberi_tgl_lahir_namahari  = ""
                    var bpemberi_tgl_lahir_terbilanghari  = ""
                    var bpemberi_tgl_lahir_terbilangtahun  = ""
                    var bpemberi_tgl_lahir_tglpanjang  = ""
                    var btgll = ""

                    if ($("#pemberi-pemberi-tgll").val() != ""){
                        btgll = new Date($("#pemberi-pemberi-tgll").val());
                    }
                    if (btgll != ""){
                        bpemberi_tgl_lahir_bulan = btgll.getMonth()+1;  
                        bpemberi_tgl_lahir_hari = btgll.getDate();
                        bpemberi_tgl_lahir_tahun = btgll.getFullYear();
                        bpemberi_tgl_lahir_namabulan = getnamabulan(btgll);
                        bpemberi_tgl_lahir_namahari = getnamahari(btgll);
                        bpemberi_tgl_lahir_terbilanghari = terbilang(bpemberi_tgl_lahir_hari);
                        bpemberi_tgl_lahir_terbilangtahun = terbilang(bpemberi_tgl_lahir_tahun);
                        bpemberi_tgl_lahir_tglpanjang = bpemberi_tgl_lahir_hari+" "+bpemberi_tgl_lahir_namabulan+" "+bpemberi_tgl_lahir_tahun;
                    }

                    var pemberikabkota = $("#pemberi-pemberi-idkab").val();
                    if ($("#pemberi-pemberi-idkab").val() != 0){
                        pemberikabkota = returndgkota($("#pemberi-pemberi-idkab").val());
                    }

                    //c == persetujuan
                    var ctgll = ""
                    var csetuju_tgl_lahir_bulan = ""
                    var csetuju_tgl_lahir_hari = ""
                    var csetuju_tgl_lahir_tahun = ""
                    var csetuju_tgl_lahir_namabulan = ""
                    var csetuju_tgl_lahir_namahari = ""
                    var csetuju_tgl_lahir_terbilanghari = ""
                    var csetuju_tgl_lahir_terbilangtahun = ""
                    var csetuju_tgl_lahir_tglpanjang = ""

                    if ($("#persetujuan-po-tgll").val() != ""){
                        ctgll = new Date($("#persetujuan-po-tgll").val());
                    }
                    if (ctgll != ""){
                        csetuju_tgl_lahir_bulan = ctgll.getMonth()+1;  
                        csetuju_tgl_lahir_hari = ctgll.getDate();
                        csetuju_tgl_lahir_tahun = ctgll.getFullYear();
                        csetuju_tgl_lahir_namabulan = getnamabulan(ctgll);
                        csetuju_tgl_lahir_namahari = getnamahari(ctgll);
                        csetuju_tgl_lahir_terbilanghari = terbilang(csetuju_tgl_lahir_hari);
                        csetuju_tgl_lahir_terbilangtahun = terbilang(csetuju_tgl_lahir_tahun);
                        csetuju_tgl_lahir_tglpanjang = csetuju_tgl_lahir_hari+" "+csetuju_tgl_lahir_namabulan+" "+csetuju_tgl_lahir_tahun;
                    }

                    var setujukabkota = $("#persetujuan-po-idkab").val();
                    if ($("#persetujuan-po-idkab").val() != 0){
                        setujukabkota = returndgkota($("#persetujuan-po-idkab").val());
                    }

                    //d == penerima
                    var dtgll =""
                    var dpenerima_tgl_lahir_bulan ="" 
                    var dpenerima_tgl_lahir_hari =""
                    var dpenerima_tgl_lahir_tahun =""
                    var dpenerima_tgl_lahir_namabulan =""
                    var dpenerima_tgl_lahir_namahari =""
                    var dpenerima_tgl_lahir_terbilanghari =""
                    var dpenerima_tgl_lahir_terbilangtahun =""
                    var dpenerima_tgl_lahir_tglpanjang =""

                    if ($("#penerima-pf-tgll").val() != ""){
                        dtgll = new Date($("#penerima-pf-tgll").val());
                    }
                    if (dtgll != ""){
                        var dpenerima_tgl_lahir_bulan = dtgll.getMonth()+1;  
                        var dpenerima_tgl_lahir_hari = dtgll.getDate();
                        var dpenerima_tgl_lahir_tahun = dtgll.getFullYear();
                        var dpenerima_tgl_lahir_namabulan = getnamabulan(dtgll);
                        var dpenerima_tgl_lahir_namahari = getnamahari(dtgll);
                        var dpenerima_tgl_lahir_terbilanghari = terbilang(dpenerima_tgl_lahir_hari);
                        var dpenerima_tgl_lahir_terbilangtahun = terbilang(dpenerima_tgl_lahir_tahun);
                        var dpenerima_tgl_lahir_tglpanjang = dpenerima_tgl_lahir_hari+" "+dpenerima_tgl_lahir_namabulan+" "+dpenerima_tgl_lahir_tahun;
                    }

                    var penerimakabkota = $("#penerima-pf-idkab").val();
                    if ($("#penerima-pf-idkab").val() != 0){
                        penerimakabkota = returndgkota($("#penerima-pf-idkab").val());
                    }

                    //e == obyek
                    var etgll = new Date($("#obyek-ib-tgldikeluarkan").val());
                    var eobyek_bulan = etgll.getMonth()+1;  
                    var eobyek_hari = etgll.getDate();
                    var eobyek_tahun = etgll.getFullYear();
                    var eobyek_namabulan = getnamabulan(etgll);
                    var eobyek_namahari = getnamahari(etgll);
                    var eobyek_terbilanghari = terbilang(eobyek_hari);
                    var eobyek_terbilangtahun = terbilang(eobyek_tahun);
                    var eobyek_tglpanjang = eobyek_hari+" "+eobyek_namabulan+" "+eobyek_tahun;
                    var eobyek_nilai_terbilang = terbilang($("#obyek-of-nilaiobyek").val())

                    //f == janji
                    var fjanji_nilai_hutang_terbilang = terbilang($("#perjanjian-nilaihutang").val())
                    var fnilai_penjaminan_terbilang = terbilang($("#perjanjian-nilaipenjaminan").val())

                    var param = {
                            //a == akta
                             "id_order"  : '<?php echo $id_order; ?>',
                             "tgl_bulan" :atgl_bulan,
                             "tgl_hari" :atgl_hari,
                             "tgl_namabulan" :atgl_namabulan,
                             "tgl_namahari" :atgl_namahari,
                             "tgl_terbilanghari" :atgl_terbilanghari,
                             "tgl_tglpanjang" :atgl_tglpanjang,
                             "tgl_terbilangtahun" :atgl_terbilangtahun,
                             "tgl_tahun" :atgl_tahun,
                             "jam_menghadap_terbilang" :ajam_menghadap_terbilang,
                             "jam_selesai_terbilang" :ajam_selesai_terbilang,
                             "janji_tgl_pk_tahun" :ajanji_tgl_pk_tahun,
                             "janji_tgl_pk_terbilangtahun" :ajanji_tgl_pk_terbilangtahun,
                             "janji_tgl_pk_tglpanjang" :ajanji_tgl_pk_tglpanjang,
                             "janji_tgl_pk_terbilanghari" :ajanji_tgl_pk_terbilanghari,
                             "janji_tgl_pk_namahari" :ajanji_tgl_pk_namahari,
                             "janji_tgl_pk_namabulan" :ajanji_tgl_pk_namabulan,
                             "janji_tgl_pk_hari" :ajanji_tgl_pk_hari,
                             "janji_tgl_pk_bulan" :ajanji_tgl_pk_bulan,
                             "tgl_masuk" : $("#akta-order-tglmasuk").val(),
                             "pelanggan" : $("#akta-order-pelanggan option:selected").val(),
                             "no_batch" : $("#akta-order-nobatch").val(),
                             "janji_no_pk" : $("#akta-order-nokontrak").val(),
                             "janji_tgl_pk" : $("#akta-order-tglkontrak").val(),
                             "janji_tgl_surat_kuasa" : $("#akta-order-tglsuratkuasa").val(),
                             "jenis_pembiayaan" : $("#akta-order-jenispembiayaan option:selected").val(),
                             "nomor" : $("#akta-akta-noakta").val(),
                             "no_invoice" : $("#akta-order-noinvoice").val(),
                             "tgl" : $("#akta-akta-tglakta").val(),
                             "jam_menghadap" : $("#akta-akta-jammenghadap").val(),
                             "jam_selesai"  : $("#akta-akta-jamselesai").val(),
                             "akta_biaya"  : returntoN($("#akta-akta-biayaakta").val()),
                             "ahu_biaya"  : returntoN($("#akta-akta-biayapnbp").val()),
                             "ahu_tgl_pendaftaran"  : $("#akta-fidon-tgldaftarahu").val(),
                             "ahu_no_voucher"  : $("#akta-fidon-novoucher").val(),
                             "ahu_tgl_sertifikat"  : $("#akta-fidon-tglsertifikat").val(),
                             "ahu_no_sertifikat"  : $("#akta-fidon-nosertifikat").val(),
                             "progres"  : $("#akta-progress-progress").val(),
                             "catatan"  : $("#akta-progress-catatan").val(),
                             "tgl_selesai"  : $("#akta-progress-tglselesai").val(),
                             "selesai"  : ($("#akta-progress-selesai").is(':checked') ? "1" : "0"),

                             //b == pemberi
                             "pemberi_tgl_lahir_bulan" :bpemberi_tgl_lahir_bulan,
                             "pemberi_tgl_lahir_hari" :bpemberi_tgl_lahir_hari,
                             "pemberi_tgl_lahir_namabulan" :bpemberi_tgl_lahir_namabulan,
                             "pemberi_tgl_lahir_namahari" :bpemberi_tgl_lahir_namahari,
                             "pemberi_tgl_lahir_terbilanghari" :bpemberi_tgl_lahir_terbilanghari,
                             "pemberi_tgl_lahir_tglpanjang" :bpemberi_tgl_lahir_tglpanjang,
                             "pemberi_tgl_lahir_terbilangtahun" :bpemberi_tgl_lahir_terbilangtahun,
                             "pemberi_tgl_lahir_tahun" :bpemberi_tgl_lahir_tahun,
                             "pemberi_tipe" : $("#pemberi-dataumum-pemberi option:selected").val(),
                             "pemberi_subtipe1" : $("#pemberi-dataumum-bjenis option:selected").val(),
                             "pemberi_subtipe2" : $("#pemberi-dataumum-pjk option:selected").val(),
                             "pemberi_jenis_penggunaan" : $("#pemberi-dataumum-ppenggunaan option:selected").val(),
                             "pemberi_jenis_penggunaan_sub1" : $("#pemberi-dataumum-pjenis option:selected").val(),
                             "pemberi_panggilan" : $("#pemberi-pemberi-panggilan option:selected").val(),
                             "pemberi_nama" : $("#pemberi-pemberi-nama").val(),
                             "pemberi_pekerjaan" : $("#pemberi-pemberi-pekerjaan").val(),
                             "pemberi_tempat_lahir" : $("#pemberi-pemberi-tl").val(),
                             "pemberi_tgl_lahir" : $("#pemberi-pemberi-tgll").val(),
                             "pemberi_alamat"  : $("#pemberi-pemberi-alamat").val(),
                             "pemberi_rt"  : $("#pemberi-pemberi-rt").val(),
                             "pemberi_rw"  : $("#pemberi-pemberi-rw").val(),
                             "pemberi_desa_kel"  : $("#pemberi-pemberi-desa").val(),
                             "pemberi_kecamatan"  : $("#pemberi-pemberi-kec").val(),
                             "pemberi_kab_kota"  : pemberikabkota,
                             "pemberi_provinsi"  : $("#pemberi-pemberi-idprov").val(),
                             "pemberi_kodepos"  : $("#pemberi-pemberi-kodepos").val(),
                             "pemberi_identitas"  : $("#pemberi-pemberi-identitas").val(),
                             "pemberi_nik_npwp"  : $("#pemberi-pemberi-noidentitas").val(),
                             "pemberi_nohp"  : $("#pemberi-pemberi-nohp").val(),
                             "pemberi_kab_kota_nama" : $("#pemberi-pemberi-kab").val(),
                             "pemberi_nama_debitur"  : $("#pemberi-pemberi-namadeb").val(),

                             //c == persetujuan
                             "setuju_tgl_lahir_bulan" :csetuju_tgl_lahir_bulan,
                             "setuju_tgl_lahir_hari" :csetuju_tgl_lahir_hari,
                             "setuju_tgl_lahir_namabulan" :csetuju_tgl_lahir_namabulan,
                             "setuju_tgl_lahir_namahari" :csetuju_tgl_lahir_namahari,
                             "setuju_tgl_lahir_terbilanghari" :csetuju_tgl_lahir_terbilanghari,
                             "setuju_tgl_lahir_tglpanjang" :csetuju_tgl_lahir_tglpanjang,
                             "setuju_tgl_lahir_terbilangtahun" :csetuju_tgl_lahir_terbilangtahun,
                             "setuju_tgl_lahir_tahun" :csetuju_tgl_lahir_tahun,
                             "setuju_oleh" : $("#persetujuan-dataumum-persetujuanoleh").val(),
                             "setuju_panggilan" : $("#persetujuan-po-panggilan option:selected").val(),
                             "setuju_nama" : $("#persetujuan-po-nama").val(),
                             "setuju_pekerjaan" : $("#persetujuan-po-pekerjaan").val(),
                             "setuju_tempat_lahir" : $("#persetujuan-po-tl").val(),
                             "setuju_tgl_lahir" : $("#persetujuan-po-tgll").val(),
                             "setuju_alamat"  : $("#persetujuan-po-alamat").val(),
                             "setuju_rt"  : $("#persetujuan-po-rt").val(),
                             "setuju_rw"  : $("#persetujuan-po-rw").val(),
                             "setuju_desa_kel"  : $("#persetujuan-po-desa").val(),
                             "setuju_kecamatan"  : $("#persetujuan-po-kec").val(),
                             "setuju_kab_kota"  : setujukabkota,
                             "setuju_kab_kota_nama"  : $("#persetujuan-po-kab").val(),
                             "setuju_provinsi"  : $("#persetujuan-po-idprov").val(),
                             "setuju_kodepos"  : $("#persetujuan-po-kodepos").val(),
                             "setuju_identitas"  : $("#persetujuan-po-identitas").val(),
                             "setuju_nik_npwp"  : $("#persetujuan-po-noidentitas").val(),
                             "setuju_dudajanda_oleh"  : $("#persetujuan-it-dikeluarkanoleh").val(),
                             "setuju_dudajanda_tgl" : $("#persetujuan-it-tgldikeluarkan").val(),
                             "setuju_dudajanda_nomor"  : $("#persetujuan-it-nosurat").val(),

                             //d == penerima
                             "penerima_tgl_lahir_bulan" :dpenerima_tgl_lahir_bulan,
                             "penerima_tgl_lahir_hari" :dpenerima_tgl_lahir_hari,
                             "penerima_tgl_lahir_namabulan" :dpenerima_tgl_lahir_namabulan,
                             "penerima_tgl_lahir_namahari" :dpenerima_tgl_lahir_namahari,
                             "penerima_tgl_lahir_terbilanghari" :dpenerima_tgl_lahir_terbilanghari,
                             "penerima_tgl_lahir_tglpanjang" :dpenerima_tgl_lahir_tglpanjang,
                             "penerima_tgl_lahir_terbilangtahun" :dpenerima_tgl_lahir_terbilangtahun,
                             "penerima_tgl_lahir_tahun" :dpenerima_tgl_lahir_tahun,

                             "penerima_tipe" : $("#penerima-dataumum-penerima option:selected").val(),
                             "penerima_subtipe1" : $("#penerima-dataumum-bjenisusaha option:selected").val(),
                             "penerima_nama" : $("#penerima-pf-nama").val(),
                             "penerima_alamat"  : $("#penerima-pf-alamat").val(),
                             "penerima_rt"  : $("#penerima-pf-rt").val(),
                             "penerima_rw"  : $("#penerima-pf-rw").val(),
                             "penerima_desa_kel"  : $("#penerima-pf-desa").val(),
                             "penerima_kecamatan"  : $("#penerima-pf-kec").val(),
                             "penerima_kab_kota"  : penerimakabkota,
                             "penerima_provinsi"  : $("#penerima-pf-idprov").val(),
                             "penerima_kodepos"  : $("#penerima-pf-kodepos").val(),
                             "penerima_identitas"  : $("#penerima-pf-identitas").val(),
                             "penerima_nik_npwp"  : $("#penerima-pf-noidentitas").val(),
                             "penerima_nohp"  : $("#penerima-pf-nohp").val(),

                             "penerima_panggilan" : $("#penerima-pf-panggilan option:selected").val(),
                             "penerima_pekerjaan" : $("#penerima-pf-pekerjaan").val(),
                             "penerima_tempat_lahir" : $("#penerima-pf-tl").val(),
                             "penerima_tgl_lahir" : $("#penerima-pf-tgll").val(),
                             "penerima_kab_kota_nama"  : $("#penerima-pf-kab").val(),

                             //e == obyek
                             "obyek_bulan" :eobyek_bulan,
                             "obyek_hari" :eobyek_hari,
                             "obyek_namabulan" :eobyek_namabulan,
                             "obyek_namahari" :eobyek_namahari,
                             "obyek_terbilanghari" :eobyek_terbilanghari,
                             "obyek_tglpanjang" :eobyek_tglpanjang,
                             "obyek_terbilangtahun" :eobyek_terbilangtahun,
                             "obyek_tahun" :eobyek_tahun,
                             "obyek_kategori" : $("#obyek-of-kategori option:selected").val(),
                             "obyek_subkategori1" : $("#obyek-of-obyekberseri").val(),
                             "obyek_subkategori2" : $("#obyek-of-obyektidakberseri").val(),
                             "obyek_merek" : $("#obyek-of-merk option:selected").val(),
                             "obyek_tipe" : $("#obyek-of-tipe").val(),
                             "obyek_model" : $("#obyek-io-model").val(),
                             "obyek_no_rangka" : $("#obyek-of-norangka").val(),
                             "obyek_no_mesin" : $("#obyek-of-nomesin").val(),
                             "obyek_no_seri" : $("#obyek-io-noseri").val(),
                             "obyek_tahun_buat" : $("#obyek-io-tahundibuat").val(),
                             "obyek_tahun_rakit"  : $("#obyek-io-tahundirakit").val(),
                             //"obyek_silinder"  : ,
                             "obyek_warna"  : $("#obyek-of-warna").val(),
                             "obyek_no_polisi"  : $("#obyek-io-nopol").val(),
                             "obyek_bpkb_atas_nama"  : $("#obyek-io-bpkbatasnama").val(),
                             "obyek_bpkb_nomor"  : $("#obyek-io-nobpkb").val(),
                             "obyek_bukti"  : $("#obyek-of-bukti option:selected").val(),
                             "obyek_bukti_dikeluarkan"  : $("#obyek-ib-dikeluarkanoleh option:selected").val(),
                             "obyek_bukti_tgl"  : $("#obyek-ib-tgldikeluarkan").val(),
                             "obyek_bukti_nomor"  : $("#obyek-ib-nobukti").val(),
                             "obyek_mata_uang"  : $("#obyek-of-matauang").val(),
                             "obyek_nilai" : returntoN($("#obyek-of-nilaiobyek").val()),
                             "obyek_nilai_terbilang" : eobyek_nilai_terbilang,
                             "obyek_keterangan" : $("#obyek-of-keterangan").val(),
                             "obyek_tambahan" : $("#obyek-io-infoplus").val(),

                             //f == janji
                             "janji_jenis" : $("#perjanjian-jenis option:selected").val(),
                             "janji_hutang" : $("#perjanjian-jmlitem option:selected").val(),
                             "janji_nilai_hutang" : returntoN($("#perjanjian-nilaihutang").val()),
                             "janji_pokok_dasar" : $("#perjanjian-berdasarkan").val(),
                             "janji_tgl_jangka_waktu" : $("#perjanjian-tglmulai").val(),
                             "janji_tgl_jangka_waktu_akhir" : $("#perjanjian-tglberakhir").val(),
                             "nilai_penjaminan" : returntoN($("#perjanjian-nilaipenjaminan").val()),
                             "nilai_penjaminan_terbilang" : fnilai_penjaminan_terbilang,
                             "nilai_kategori" : $("#perjanjian-kategori").val(),
                             "janji_nilai_hutang_terbilang" : fjanji_nilai_hutang_terbilang,
                             "lain_pengadilan_negeri" : $("#perjanjian-pengadilan").val()
                         } 

                    var datapenerima = {
                        "penerima_tipe" : $("#penerima-dataumum-penerima option:selected").val(),
                        "penerima_subtipe1" : $("#penerima-dataumum-bjenisusaha option:selected").val(),
                        "penerima_nama" : $("#penerima-pf-nama").val(),
                        "penerima_alamat"  : $("#penerima-pf-alamat").val(),
                        "penerima_rt"  : $("#penerima-pf-rt").val(),
                        "penerima_rw"  : $("#penerima-pf-rw").val(),
                        "penerima_desa_kel"  : $("#penerima-pf-desa").val(),
                        "penerima_kecamatan"  : $("#penerima-pf-kec").val(),
                        "penerima_kab_kota"  : penerimakabkota,
                        "penerima_provinsi"  : $("#penerima-pf-idprov").val(),
                        "penerima_kodepos"  : $("#penerima-pf-kodepos").val(),
                        "penerima_identitas"  : $("#penerima-pf-identitas").val(),
                        "penerima_nik_npwp"  : $("#penerima-pf-noidentitas").val(),
                        "penerima_nohp"  : $("#penerima-pf-nohp").val(),
                        "nama" : $("#penerima-du-nama").val(),
                        "biaya" : returntoN($("#biaya-du-nama").val()),
                        "pimpinan_panggilan" : $("#penerima-p-panggilan").val(),
                        "pimpinan_nama" : $("#penerima-p-nama").val(),
                        "pimpinan_uraian_akta" : $("#penerima-p-uraian").val(),
                        "pimpinan_sk" : $("#penerima-p-sk").val(),
                        "catatan" : $("#penerima-p-catatan").val()
                    }    
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url('berkasorder/fidusia_lembaga/simpan') ?>",
                        data : {param : param , id : '<?php echo $id_order ?>' , datapenerima : datapenerima , idpel : $("#idpel").val()},
                        dataType: 'json',
                        success : function (result){
                            location.reload();    
                            console.log(result)
                        }
                    });
                }

                function simpanset()
                {
                    var param = {
                             "id_order"  : '<?php echo $id_order; ?>',
                            //set 1
                             "tgl_tahun" : $("#set1-tgltahun").val(),
                             "tgl_bulan" : $("#set1-tglbulan").val(),
                             "tgl_hari" : $("#set1-tglhari").val(),
                             "tgl_terbilangtahun" : $("#set1-tglterbilangtahun").val(),
                             "tgl_tglpanjang" : $("#set1-tglpanjang").val(),
                             "tgl_terbilanghari" : $("#set1-tglterbilanghari").val(),
                             "tgl_namahari" : $("#set1-tglnamahari").val(),
                             "tgl_namabulan" : $("#set1-tglnamabulan").val(),
                             "jam_selesai_terbilang" : $("#set1-jamselesaiterbilang").val(),
                             "obyek_nilai_terbilang" : $("#set1-obyeknilaiterbilang").val(),
                             "nilai_penjaminan_terbilang" : $("#set1-nilaipenjaminanterbilang").val(),
                             "janji_nilai_hutang_terbilang" : $("#set1-janjinilaihutangterbilang").val(),
                             "janji_tgl_pk_tahun" : $("#set1-janjitglpktahun").val(),
                             "janji_tgl_pk_terbilangtahun" : $("#set1-janjitglpkterbilangtahun").val(),
                             "janji_tgl_pk_tglpanjang" : $("#set1-janjitglpktglpanjang").val(),
                             "janji_tgl_pk_terbilanghari" : $("#set1-janjitglpkterbilanghari").val(),
                             "janji_tgl_pk_namahari" : $("#set1-janjitglpknamahari").val(),
                             "janji_tgl_pk_namabulan" : $("#set1-janjitglpknamabulan").val(),
                             "janji_tgl_pk_hari" : $("#set1-janjitglpkhari").val(),
                             "janji_tgl_pk_bulan" : $("#set1-janjitglpkbulan").val(),
                             "setuju_tgl_lahir_tahun" : $("#set1-setujutgllahirtahun").val(),
                             "setuju_tgl_lahir_terbilangtahun" : $("#set1-setujutgllahirterbilangtahun").val(),
                             "setuju_tgl_lahir_tglpanjang" : $("#set1-setujutgllahirtglpanjang").val(),
                             "setuju_kabkota_nama" : $("#set1-setujukabkotanama").val(),
                             "setuju_tgl_lahir_terbilanghari" : $("#set1-setujutgllahirterbilanghari").val(),
                             "setuju_tgl_lahir_namahari" : $("#set1-setujutgllahirnamahari").val(),
                             "setuju_tgl_lahir_namabulan" : $("#set1-setujutgllahirnamabulan").val(),
                             "setuju_tgl_lahir_hari" : $("#set1-setujutgllahirhari").val(),
                             "setuju_tgl_lahir_bulan" : $("#set1-setujutgllahirbulan").val(),
                             "pemberi_kab_kota_nama" : $("#set1-pemberikabkotanama").val(),
                             "penerima_kab_kota_nama" : $("#set1-penerimakabkotanama").val(),
                             "setuju_kab_kota_nama" : $("#set1-setujukabkotanama").val(),
                             "jam_menghadap_terbilang" : $("#set1-jammenghadapterbilang").val(),

                             //set 2
                             "tgl_tahun" : $("#set1-tgltahun").val(),
                             "tgl_bulan" : $("#set1-tglbulan").val(),
                             "tgl_hari" : $("#set1-tglhari").val(),
                             "tgl_terbilangtahun" : $("#set1-tglterbilangtahun").val(),
                             "tgl_tglpanjang" : $("#set1-tglpanjang").val(),
                             "tgl_terbilanghari" : $("#set1-tglterbilanghari").val(),
                             "tgl_namahari" : $("#set1-tglnamahari").val(),
                             "tgl_namabulan" : $("#set1-tglnamabulan").val(),
                             "jam_selesai_terbilang" : $("#set1-jamselesaiterbilang").val(),
                             "obyek_nilai_terbilang" : $("#set1-obyeknilaiterbilang").val(),
                             "nilai_penjaminan_terbilang" : $("#set1-nilaipenjaminanterbilang").val(),
                             "janji_nilai_hutang_terbilang" : $("#set1-janjinilaihutangterbilang").val(),
                             "janji_tgl_pk_tahun" : $("#set1-janjitglpktahun").val(),
                             "janji_tgl_pk_terbilangtahun" : $("#set1-janjitglpkterbilangtahun").val(),
                             "janji_tgl_pk_tglpanjang" : $("#set1-janjitglpktglpanjang").val(),
                             "janji_tgl_pk_terbilanghari" : $("#set1-janjitglpkterbilanghari").val(),
                             "janji_tgl_pk_namahari" : $("#set1-janjitglpknamahari").val(),
                             "janji_tgl_pk_namabulan" : $("#set1-janjitglpknamabulan").val(),
                             "janji_tgl_pk_hari" : $("#set1-janjitglpkhari").val(),
                             "janji_tgl_pk_bulan" : $("#set1-janjitglpkbulan").val(),
                             "setuju_tgl_lahir_tahun" : $("#set1-setujutgllahirtahun").val(),
                             "setuju_tgl_lahir_terbilangtahun" : $("#set1-setujutgllahirterbilangtahun").val(),
                             "setuju_tgl_lahir_tglpanjang" : $("#set1-setujutgllahirtglpanjang").val(),
                             "setuju_kabkota_nama" : $("#set1-setujukabkotanama").val(),
                             "setuju_tgl_lahir_terbilanghari" : $("#set1-setujutgllahirterbilanghari").val(),
                             "setuju_tgl_lahir_namahari" : $("#set1-setujutgllahirnamahari").val(),
                             "setuju_tgl_lahir_namabulan" : $("#set1-setujutgllahirnamabulan").val(),
                             "setuju_tgl_lahir_hari" : $("#set1-setujutgllahirhari").val(),
                             "setuju_tgl_lahir_bulan" : $("#set1-setujutgllahirbulan").val(),
                             "pemberi_kab_kota_nama" : $("#set1-pemberikabkotanama").val(),
                             "penerima_kab_kota_nama" : $("#set1-penerimakabkotanama").val(),
                             "setuju_kab_kota_nama" : $("#set1-setujukabkotanama").val(),
                             "jam_menghadap_terbilang" : $("#set1-jammenghadapterbilang").val()
                         }     
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url('berkasorder/fidusia_lembaga/simpan') ?>",
                        data : {param : param , id : '<?php echo $id_order ?>'},
                        dataType: 'json',
                        success : function (result){
                            location.reload();
                        }
                    });
                }
        </script>
        <script>
                //nama provinsi
                function namaprovpemberi(){
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

                function namaprovpersetujuan(){
                    id = $("#persetujuan-po-idprov").val();
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url('berkasorder/fidusia_perorangan/carinamaprov') ?>",
                        data : {id : id},
                        dataType: 'json',
                        success : function (result){
                            $("#persetujuan-po-provinsi").val(result)
                        }
                    });
                }

                function namaprovpenerima(){
                    id = $("#penerima-pf-idprov").val();
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url('berkasorder/fidusia_perorangan/carinamaprov') ?>",
                        data : {id : id},
                        dataType: 'json',
                        success : function (result){
                            $("#penerima-pf-provinsi").val(result)
                        }
                    });
                }
        </script>
        <script>
            //fungsi get modal
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
            //klik modal
            function ref_kota()
            {
                get_modal_data("", "" , "berkasorder/fidusia_perorangan/datakota", "#list-kota");
            }

            function ref_desa()
            {
                get_modal_data("", "" , "berkasorder/fidusia_perorangan/datadesa", "#list-desa");
            }
            function ref_kota1()
            {
                get_modal_data("", "" , "berkasorder/fidusia_perorangan/datakota1", "#list-kota1");
            }

            function ref_desa1()
            {
                get_modal_data("", "" , "berkasorder/fidusia_perorangan/datadesa1", "#list-desa1");
            }
            function ref_kota2()
            {
                get_modal_data("", "" , "berkasorder/fidusia_perorangan/datakota2", "#list-kota2");
            }

            function ref_desa2()
            {
                get_modal_data("", "" , "berkasorder/fidusia_perorangan/datadesa2", "#list-desa2");
            }
        </script>
        <script>
            //setting modal

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

             $("#frmkota1").submit(function() {
                search_data = $("#s_kota1").val();
                get_modal_data(search_data, "" , "berkasorder/fidusia_perorangan/datakota1", "#list-kota1");   
                return false;
                
             })

             $("#frmdesa1").submit(function() {
                search_data = $("#s_desa1").val();
                get_modal_data(search_data, "" , "berkasorder/fidusia_perorangan/datadesa1", "#list-desa1");   
                return false;
                
             })

            function set_kota1(selector){
                kota = $(selector).attr("data-kota");
                $("#persetujuan-po-tl").val(kota);
                $('#cari1').modal('hide');
            }

            function set_desa1(selector){
                desa = $(selector).attr("data-desa");
                kec = $(selector).attr("data-kec");
                kab = $(selector).attr("data-kab");
                prov = $(selector).attr("data-prov");
                kodepos = $(selector).attr("data-kodepos");

                idkab = $(selector).attr("data-idkab");
                idprov = $(selector).attr("data-idprov");

                $("#persetujuan-po-desa").val(desa);
                $("#persetujuan-po-kec").val(kec);
                $("#persetujuan-po-kab").val(kab);
                $("#persetujuan-po-provinsi").val(prov);
                $("#persetujuan-po-kodepos").val(kodepos);

                $("#persetujuan-po-idkab").val(idkab);
                $("#persetujuan-po-idprov").val(idprov);

                $('#desa1').modal('hide');
            }

             $("#frmkota2").submit(function() {
                search_data = $("#s_kota2").val();
                get_modal_data(search_data, "" , "berkasorder/fidusia_perorangan/datakota2", "#list-kota2");   
                return false;
                
             })

             $("#frmdesa2").submit(function() {
                search_data = $("#s_desa2").val();
                get_modal_data(search_data, "" , "berkasorder/fidusia_perorangan/datadesa2", "#list-desa2");   
                return false;
                
             })

            function set_kota2(selector){
                kota = $(selector).attr("data-kota");
                $("#penerima-pf-tl").val(kota);
                $('#cari2').modal('hide');
            }

            function set_desa2(selector){
                desa = $(selector).attr("data-desa");
                kec = $(selector).attr("data-kec");
                kab = $(selector).attr("data-kab");
                prov = $(selector).attr("data-prov");
                kodepos = $(selector).attr("data-kodepos");

                idkab = $(selector).attr("data-idkab");
                idprov = $(selector).attr("data-idprov");

                $("#penerima-pf-desa").val(desa);
                $("#penerima-pf-kec").val(kec);
                $("#penerima-pf-kab").val(kab);
                $("#penerima-pf-provinsi").val(prov);
                $("#penerima-pf-kodepos").val(kodepos);

                $("#penerima-pf-idkab").val(idkab);
                $("#penerima-pf-idprov").val(idprov);

                $('#desa2').modal('hide');
            }
        </script>
        <script>
            function set(){
                var flt;
                jenis = $("#perjanjian-jenis option:selected").val();
                if ($("#akta-order-pelanggan option:selected").val() != ""){
                    if (jenis == "Perjanjian Pembiayaan Dengan Jaminan Fidusia"){
                        flt = "berdasar-" + $("#akta-order-pelanggan option:selected").val();
                    }else if (jenis =="Perjanjian Sewa Guna Usaha"){
                        flt = "berdasar-sewa";
                    }else{
                        notifShow("error", "Masukkan data Jenis Perjanjian");
                        $("#perjanjian-jenis").focus(); 
                    }
                }else{
                    notifShow("error", "Masukkan data Pelanggan");
                    $("#akta-order-pelanggan").focus();
                }

                var isi = function () {
                    var tmp = null;
                    $.ajax({
                        'async': false,
                        'type': "POST",
                        'global': false,
                        'dataType': 'json',
                        'url': "<?php echo base_url('berkasorder/fidusia_perorangan/set') ?>",
                        'data': {param : flt},
                        'success': function (data) {
                            tmp = data;
                        }
                    });
                    return tmp;
                }();

                var n = isi.length;
                if (n > 0){

                    var tglkontrak = convertDate($("#akta-order-tglkontrak").val());
                    var tglsuratkuasa = convertDate($("#akta-order-tglsuratkuasa").val());

                    var mapObj = {
                       "{janji_no_pk}":$("#akta-order-nokontrak").val(),
                       "{janji_tgl_pk}":tglkontrak,
                       "{janji_tgl_surat_kuasa}":tglsuratkuasa
                    };

                    isi = isi.replace(/{janji_no_pk}|{janji_tgl_pk}|{janji_tgl_surat_kuasa}/gi, function(matched){
                      return mapObj[matched];
                    });

                    $("#perjanjian-berdasarkan").val(isi);
                }else{
                    notifShow("error", "Masukkan data Jenis Perjanjian");
                    $("#perjanjian-jenis").focus(); 
                }
            }
        </script>
    </body>
</html>
