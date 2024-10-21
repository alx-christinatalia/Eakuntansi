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
                                            <span class="caption-subject font-dark bold uppercase" id="caption">Data Umum</span>
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

                $(function () {
                   $('#akta-order-tglmasuk').datetimepicker({format: "MM/DD/YYYY HH:mm:ss"});
                   $('#akta-order-tglkontrak').datetimepicker({format: "MM/DD/YYYY HH:mm:ss"});
                   $('#akta-order-tglsuratkuasa').datetimepicker({format: "MM/DD/YYYY HH:mm:ss"});
                   $('#akta-akta-tglakta').datetimepicker({format: "MM/DD/YYYY HH:mm:ss"});
                   $('#akta-fidon-tgldaftarahu').datetimepicker({format: "MM/DD/YYYY HH:mm:ss"});
                   $('#akta-progress-tglselesai').datetimepicker({format: "MM/DD/YYYY HH:mm:ss"});
                   $('#akta-fidon-tglsertifikat').datetimepicker({format: "MM/DD/YYYY HH:mm:ss"});
                   $('#pemberi-pemberi-tgll').datetimepicker({format: "MM/DD/YYYY HH:mm:ss"});
                   $('#persetujuan-it-tgldikeluarkan').datetimepicker({format: "MM/DD/YYYY HH:mm:ss"});
                   $('#persetujuan-po-tgll').datetimepicker({format: "MM/DD/YYYY HH:mm:ss"});
                   $('#penerima-pf-tgll').datetimepicker({format: "MM/DD/YYYY HH:mm:ss"});
                   $('#obyek-ib-tgldikeluarkan').datetimepicker({format: "MM/DD/YYYY HH:mm:ss"});
                   $('#perjanjian-tglmulai').datetimepicker({format: "MM/DD/YYYY HH:mm:ss"});
                   $('#perjanjian-tglberakhir').datetimepicker({format: "MM/DD/YYYY HH:mm:ss"});
                }); 
            });
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
                                $("#caption").html(resp['ID']+(resp['pemberi_nama'] == null ? "" : " - "+resp['pemberi_nama'])+" - "+resp['pelanggan']+" - "+resp['jenis_pembiayaan']);

                                aktatglmasuk = resp['tgl_masuk'];
                                aktatglkontrak = resp['janji_tgl_pk'];
                                aktatglsuratkuasa = resp['janji_tgl_surat_kuasa'];
                                aktatglakta = resp['tgl'];   
                                aktatglsertifikat = resp['ahu_tgl_sertifikat']       
                                aktatglpendaftaran = resp['ahu_tgl_pendaftaran'] 
                                aktatglselesai = resp['tgl_selesai']     

                                if(aktatglmasuk != null){
                                    $("#akta-order-tglmasuk").val(aktatglmasuk.toString("d M Y HH:mm:ss"))
                                }

                                if(aktatglkontrak != null){
                                    $("#akta-order-tglkontrak").val(aktatglkontrak.toString("d M Y"))
                                }

                                if(aktatglsuratkuasa != null){
                                    $("#akta-order-tglsuratkuasa").val(aktatglsuratkuasa.toString("d M Y"))
                                }

                                if(aktatglakta != null){
                                    $("#akta-akta-tglakta").val(aktatglakta.toString("d M Y"))
                                }

                                if(aktatglsertifikat != null){
                                    $("#akta-fidon-tglsertifikat").val(aktatglsertifikat.toString("d M Y"))
                                }

                                if(aktatglpendaftaran != null){
                                    $("#akta-fidon-tgldaftarahu").val(aktatglpendaftaran.toString("d M Y"))
                                }

                                if(aktatglselesai != null){
                                    $("#akta-progress-tglselesai").val(aktatglselesai.toString("d M Y"))
                                }         

                                if(resp['selesai'] == "0"){
                                    $("#akta-progress-belum").prop("checked",true)   
                                }else{
                                    $("#akta-progress-selesai").prop("checked",true)   
                                }

                                    $("#akta-order-pelanggan").val(resp['pelanggan'])   
                                    $("#akta-order-nobatch").val(resp['no_batch'])
                                    $("#akta-order-nokontrak").val(resp['janji_no_pk'])
                                    $("#akta-order-jenispembiayaan").val(resp['jenis_pembiayaan'])
                                    $("#akta-akta-noakta").val(resp['nomor'])
                                    $("#akta-akta-jammenghadap").val(resp['jam_menghadap'])
                                    $("#akta-akta-jamselesai").val(resp['jam_selesai'])
                                    $("#akta-akta-biayaakta").val(resp['akta_biaya'])
                                    $("#akta-akta-biayapnbp").val(resp['ahu_biaya'])
                                    $("#akta-fidon-novoucher").val(resp['ahu_no_voucher'])
                                    $("#akta-fidon-nosertifikat").val(resp['ahu_no_sertifikat'])
                                    $("#akta-progress-progress").val(resp['progres'])
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
                                    $("#pemberi-pemberi-idkab").val(resp['pemberi_kab_kota'])   
                                    $("#pemberi-pemberi-idprov").val(resp['pemberi_provinsi'])  

                                    if ($("#pemberi-pemberi-idprov").val() != 0){
                                        namaprovpemberi();
                                    }

                                    $("#pemberi-pemberi-kodepos").val(resp['pemberi_kodepos'])   
                                    $("#pemberi-pemberi-identitas").val(resp['pemberi_identitas'])   
                                    $("#pemberi-pemberi-noidentitas").val(resp['pemberi_nik_npwp'])   
                                    $("#pemberi-pemberi-nohp").val(resp['pemberi_nohp'])   
                                    $("#pemberi-pemberi-namadeb").val(resp['pemberi_nama_debitur'])   
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

                                    tgldikeluarkan = resp['setuju_dudajanda_tgl'];     
                                    tgll = resp['setuju_tgl_lahir'];    
                                    idprov = resp['setuju_provinsi'];

                                    $("#persetujuan-dataumum-persetujuanoleh").val(resp['setuju_oleh'])   
                                    $("#persetujuan-po-panggilan").val(resp['setuju_panggilan'])
                                    $("#persetujuan-po-nama").val(resp['setuju_nama'])
                                    $("#persetujuan-po-pekerjaan").val(resp['setuju_pekerjaan'])
                                    $("#persetujuan-po-tl").val(resp['setuju_tempat_lahir'])
                                    $("#persetujuan-po-alamat").val(resp['setuju_alamat'])
                                    $("#persetujuan-po-rt").val(resp['setuju_rt'])
                                    $("#persetujuan-po-rw").val(resp['setuju_rw'])
                                    $("#persetujuan-po-desa").val(resp['setuju_desa_kel'])

                                    if(tgldikeluarkan != null){
                                        $("#persetujuan-it-tgldikeluarkan").val(tgldikeluarkan.toString("d M Y"))
                                    }
                                    if(tgll != null){
                                        $("#persetujuan-po-tgll").val(tgll.toString("d M Y"))
                                    }

                                    $("#persetujuan-po-kec").val(resp['setuju_kecamatan'])
                                    $("#persetujuan-po-idkab").val(resp['setuju_kab_kota'])
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
  
                                    tgll = resp['penerima_tgl_lahir'];    
                                    idprov = resp['penerima_provinsi'];

                                    $("#penerima-dataumum-penerima").val(resp['penerima_tipe'])   
                                    $("#penerima-pf-panggilan").val(resp['penerima_panggilan'])
                                    $("#penerima-pf-nama").val(resp['penerima_nama'])
                                    $("#penerima-pf-pekerjaan").val(resp['penerima_pekerjaan'])
                                    $("#penerima-pf-tl").val(resp['penerima_tempat_lahir'])
                                    $("#penerima-pf-alamat").val(resp['penerima_alamat'])
                                    $("#penerima-pf-rt").val(resp['penerima_rt'])
                                    $("#penerima-pf-rw").val(resp['penerima_rw'])
                                    $("#penerima-pf-desa").val(resp['penerima_desa_kel'])

                                    if(tgll != null){
                                        $("#penerima-pf-tgll").val(tgll.toString("d M Y"))
                                    }

                                    $("#penerima-pf-kec").val(resp['penerima_kecamatan'])
                                    $("#penerima-pf-idkab").val(resp['penerima_kab_kota'])
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
  
                                    tgl = resp['obyek_bukti_tgl'];    

                                    $("#obyek-of-kategori").val(resp['obyek_kategori'])   
                                    $("#obyek-of-obyekberseri").val(resp['obyek_subkategori1'])
                                    $("#obyek-of-obyektidakberseri").val(resp['obyek_subkategori2'])
                                    $("#obyek-of-merk").val(resp['obyek_merek'])
                                    $("#obyek-of-tipe").val(resp['obyek_tipe'])
                                    $("#obyek-io-model").val(resp['obyek_model'])
                                    $("#obyek-of-norangka").val(resp['obyek_no_rangka'])
                                    $("#obyek-of-nomesin").val(resp['obyek_no_mesin'])
                                    $("#obyek-io-noseri").val(resp['obyek_no_seri'])

                                    if(tgl != null){
                                        $("#obyek-ib-tgldikeluarkan").val(tgl.toString("d M Y"))
                                    }

                                    $("#obyek-io-tahundibuat").val(resp['obyek_tahun_buat'])
                                    $("#obyek-io-tahundirakit").val(resp['obyek_tahun_rakit'])
                                    $("#obyek-of-warna").val(resp['obyek_warna'])
                                    $("#obyek-io-nopol").val(resp['obyek_no_polisi'])   
                                    $("#obyek-io-bpkbatasnama").val(resp['obyek_bpkb_atas_nama'])   
                                    $("#obyek-io-nobpkb").val(resp['obyek_bpkb_nomor'])
                                    $("#obyek-of-bukti").val(resp['obyek_bukti'])   
                                    $("#obyek-ib-dikeluarkanoleh").val(resp['obyek_bukti_dikeluarkan'])  
                                    $("#obyek-ib-nobukti").val(resp['obyek_bukti_nomor'])
                                    $("#obyek-of-matauang").val(resp['obyek_mata_uang'])
                                    $("#obyek-of-nilaiobyek").val(resp['obyek_nilai'])
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
  
                                    tglmulai = resp['janji_tgl_jangka_waktu'];    
                                    tglberakhir = resp['janji_tgl_jangka_waktu_akhir'];

                                    $("#perjanjian-jenis").val(resp['janji_jenis'])   
                                    $("#perjanjian-jmlitem").val(resp['janji_hutang'])
                                    $("#perjanjian-nilaihutang").val(resp['janji_nilai_hutang'])
                                    $("#perjanjian-berdasarkan").val(resp['janji_pokok_dasar'])

                                    if (tglmulai != null){
                                        $("#perjanjian-tglmulai").val(tglmulai.toString("d M Y"))
                                    }

                                    if (tglberakhir != null){
                                        $("#perjanjian-tglberakhir").val(tglberakhir.toString("d M Y"))
                                    }

                                    $("#perjanjian-nilaipenjaminan").val(resp['nilai_penjaminan'])
                                    $("#perjanjian-kategori").val(resp['nilai_kategori'])
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
                                
                                    $("#perjanjian-nilaipenjaminan").val(resp['nilai_penjaminan'])
                                    $("#perjanjian-kategori").val(resp['nilai_kategori'])
                                    $("#perjanjian-pengadilan").val(resp['lain_pengadilan_negeri']) 
                            }
                        }
                    });
                    return false;
                }
        </script>
        <script>
                //Klik simpan
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

                    function simpantabpersetujuan()
                    {
                        var kondisi = before_simpan_persetujuan();
                        if(kondisi == "sukses"){
                            simpanpersetujuan();
                        }
                        return false;
                    }

                    function simpantabpenerima()
                    {
                        var kondisi = before_simpan_penerima();
                        if(kondisi == "sukses"){
                            simpanpenerima();
                        }
                        return false;
                    }

                    function simpantabobyek()
                    {
                        var kondisi = before_simpan_obyek();
                        if(kondisi == "sukses"){
                            simpanobyek();
                        }
                        return false;
                    }

                    function simpantabperjanjian()
                    {
                        var kondisi = before_simpan_perjanjian();
                        if(kondisi == "sukses"){
                            simpanperjanjian();
                        }
                        return false;
                    }
        </script>
        <script>
                //Simpan Data
                function simpanakta()
                {
                    //var jam = jam_menghadap.getHours();
                    //var menit = jam_menghadap.getMinutes();

                    //console.log(tgl_tglpanjang)//$("#akta-akta-jamselesai").val()
                    //console.log(jam)

                    var tglakta = new Date($("#akta-akta-tglakta").val());
                    var tgl_bulan = tglakta.getMonth()+1;  
                    var tgl_hari = tglakta.getDate();
                    var tgl_tahun = tglakta.getFullYear();
                    var tgl_namabulan = getnamabulan(tglakta);
                    var tgl_namahari = getnamahari(tglakta);
                    var tgl_terbilanghari = terbilang(tgl_hari);
                    var tgl_terbilangtahun = terbilang(tgl_tahun);
                    var tgl_tglpanjang = tgl_hari+" "+tgl_namabulan+" "+tgl_tahun;

                    var jam_menghadap = $("#akta-akta-jammenghadap").val();
                    var arrjammenghadap = jam_menghadap.split(":","2");
                    var jam_menghadap_terbilang = namajam(arrjammenghadap[0],arrjammenghadap[1]);

                    var jam_selesai = $("#akta-akta-jamselesai").val();
                    var arrjamselesai = jam_selesai.split(":","2");
                    var jam_selesai_terbilang = namajam(arrjamselesai[0],arrjamselesai[1]);

                    var tglpk = new Date($("#akta-order-tglkontrak").val());
                    var janji_tgl_pk_bulan = tglpk.getMonth()+1;  
                    var janji_tgl_pk_hari = tglpk.getDate();
                    var janji_tgl_pk_tahun = tglpk.getFullYear();
                    var janji_tgl_pk_namabulan = getnamabulan(tglpk);
                    var janji_tgl_pk_namahari = getnamahari(tglpk);
                    var janji_tgl_pk_terbilanghari = terbilang(janji_tgl_pk_hari);
                    var janji_tgl_pk_terbilangtahun = terbilang(janji_tgl_pk_tahun);
                    var janji_tgl_pk_tglpanjang = janji_tgl_pk_hari+" "+janji_tgl_pk_namabulan+" "+janji_tgl_pk_tahun;

                    var param = {
                             "tgl_bulan" :tgl_bulan,
                             "tgl_hari" :tgl_hari,
                             "tgl_namabulan" :tgl_namabulan,
                             "tgl_namahari" :tgl_namahari,
                             "tgl_terbilanghari" :tgl_terbilanghari,
                             "tgl_tglpanjang" :tgl_tglpanjang,
                             "tgl_terbilangtahun" :tgl_terbilangtahun,
                             "tgl_tahun" :tgl_tahun,
                             "jam_menghadap_terbilang" :jam_menghadap_terbilang,
                             "jam_selesai_terbilang" :jam_selesai_terbilang,
                             "janji_tgl_pk_tahun" :janji_tgl_pk_tahun,
                             "janji_tgl_pk_terbilangtahun" :janji_tgl_pk_terbilangtahun,
                             "janji_tgl_pk_tglpanjang" :janji_tgl_pk_tglpanjang,
                             "janji_tgl_pk_terbilanghari" :janji_tgl_pk_terbilanghari,
                             "janji_tgl_pk_namahari" :janji_tgl_pk_namahari,
                             "janji_tgl_pk_namabulan" :janji_tgl_pk_namabulan,
                             "janji_tgl_pk_hari" :janji_tgl_pk_hari,
                             "janji_tgl_pk_bulan" :janji_tgl_pk_bulan,
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
                        url : "<?php echo base_url('berkasorder/fidusia_perorangan/simpan') ?>",
                        data : {param : param , id : '<?php echo $id_order ?>'},
                        dataType: 'json',
                        success : function (result){
                            location.reload();
                        }
                    });
                }

                function simpanpemberi()
                {
                    var tgll = new Date($("#pemberi-pemberi-tgll").val());
                    var pemberi_tgl_lahir_bulan = tgll.getMonth()+1;  
                    var pemberi_tgl_lahir_hari = tgll.getDate();
                    var pemberi_tgl_lahir_tahun = tgll.getFullYear();
                    var pemberi_tgl_lahir_namabulan = getnamabulan(tgll);
                    var pemberi_tgl_lahir_namahari = getnamahari(tgll);
                    var pemberi_tgl_lahir_terbilanghari = terbilang(pemberi_tgl_lahir_hari);
                    var pemberi_tgl_lahir_terbilangtahun = terbilang(pemberi_tgl_lahir_tahun);
                    var pemberi_tgl_lahir_tglpanjang = pemberi_tgl_lahir_hari+" "+pemberi_tgl_lahir_namabulan+" "+pemberi_tgl_lahir_tahun;

                    var param = {
                             "pemberi_tgl_lahir_bulan" :pemberi_tgl_lahir_bulan,
                             "pemberi_tgl_lahir_hari" :pemberi_tgl_lahir_hari,
                             "pemberi_tgl_lahir_namabulan" :pemberi_tgl_lahir_namabulan,
                             "pemberi_tgl_lahir_namahari" :pemberi_tgl_lahir_namahari,
                             "pemberi_tgl_lahir_terbilanghari" :pemberi_tgl_lahir_terbilanghari,
                             "pemberi_tgl_lahir_tglpanjang" :pemberi_tgl_lahir_tglpanjang,
                             "pemberi_tgl_lahir_terbilangtahun" :pemberi_tgl_lahir_terbilangtahun,
                             "pemberi_tgl_lahir_tahun" :pemberi_tgl_lahir_tahun,
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
                        url : "<?php echo base_url('berkasorder/fidusia_perorangan/simpan') ?>",
                        data : {param : param , id : '<?php echo $id_order ?>'},
                        dataType: 'json',
                        success : function (result){
                            location.reload();
                        }
                    });
                }

                function simpanpersetujuan()
                {
                    var tgll = new Date($("#persetujuan-po-tgll").val());
                    var setuju_tgl_lahir_bulan = tgll.getMonth()+1;  
                    var setuju_tgl_lahir_hari = tgll.getDate();
                    var setuju_tgl_lahir_tahun = tgll.getFullYear();
                    var setuju_tgl_lahir_namabulan = getnamabulan(tgll);
                    var setuju_tgl_lahir_namahari = getnamahari(tgll);
                    var setuju_tgl_lahir_terbilanghari = terbilang(setuju_tgl_lahir_hari);
                    var setuju_tgl_lahir_terbilangtahun = terbilang(setuju_tgl_lahir_tahun);
                    var setuju_tgl_lahir_tglpanjang = setuju_tgl_lahir_hari+" "+setuju_tgl_lahir_namabulan+" "+setuju_tgl_lahir_tahun;

                    var param = {
                             "setuju_tgl_lahir_bulan" :setuju_tgl_lahir_bulan,
                             "setuju_tgl_lahir_hari" :setuju_tgl_lahir_hari,
                             "setuju_tgl_lahir_namabulan" :setuju_tgl_lahir_namabulan,
                             "setuju_tgl_lahir_namahari" :setuju_tgl_lahir_namahari,
                             "setuju_tgl_lahir_terbilanghari" :setuju_tgl_lahir_terbilanghari,
                             "setuju_tgl_lahir_tglpanjang" :setuju_tgl_lahir_tglpanjang,
                             "setuju_tgl_lahir_terbilangtahun" :setuju_tgl_lahir_terbilangtahun,
                             "setuju_tgl_lahir_tahun" :setuju_tgl_lahir_tahun,
                             "setuju_oleh" : $("#persetujuan-dataumum-persetujuanoleh option:selected").val(),
                             "setuju_panggilan" : $("#persetujuan-po-panggilan option:selected").val(),
                             "setuju_nama" : $("#persetujuan-po-nama").val(),
                             "setuju_pekerjaan" : $("#persetujuan-po-pekerjaan option:selected").val(),
                             "setuju_tempat_lahir" : $("#persetujuan-po-tl").val(),
                             "setuju_tgl_lahir" : $("#persetujuan-po-tgll").val(),
                             "setuju_alamat"  : $("#persetujuan-po-alamat").val(),
                             "setuju_rt"  : $("#persetujuan-po-rt").val(),
                             "setuju_rw"  : $("#persetujuan-po-rw").val(),
                             "setuju_desa_kel"  : $("#persetujuan-po-desa").val(),
                             "setuju_kecamatan"  : $("#persetujuan-po-kec").val(),
                             "setuju_kab_kota"  : $("#persetujuan-po-idkab").val(),
                             "setuju_kab_kota_nama"  : $("#persetujuan-po-kab").val(),
                             "setuju_provinsi"  : $("#persetujuan-po-idprov").val(),
                             "setuju_kodepos"  : $("#persetujuan-po-kodepos").val(),
                             "setuju_identitas"  : $("#persetujuan-po-identitas option:selected").val(),
                             "setuju_nik_npwp"  : $("#persetujuan-po-noidentitas").val(),
                             "id_order"  : '<?php echo $id_order; ?>',
                             "setuju_dudajanda_oleh"  : $("#persetujuan-it-dikeluarkanoleh").val(),
                             "setuju_dudajanda_tgl" : $("#persetujuan-it-tgldikeluarkan").val(),
                             "setuju_dudajanda_nomor"  : $("#persetujuan-it-nosurat").val()
                         }     
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url('berkasorder/fidusia_perorangan/simpan') ?>",
                        data : {param : param , id : '<?php echo $id_order ?>'},
                        dataType: 'json',
                        success : function (result){
                            location.reload();
                        }
                    });
                }

                function simpanpenerima()
                {
                    var tgll = new Date($("#penerima-pf-tgll").val());
                    var penerima_tgl_lahir_bulan = tgll.getMonth()+1;  
                    var penerima_tgl_lahir_hari = tgll.getDate();
                    var penerima_tgl_lahir_tahun = tgll.getFullYear();
                    var penerima_tgl_lahir_namabulan = getnamabulan(tgll);
                    var penerima_tgl_lahir_namahari = getnamahari(tgll);
                    var penerima_tgl_lahir_terbilanghari = terbilang(penerima_tgl_lahir_hari);
                    var penerima_tgl_lahir_terbilangtahun = terbilang(penerima_tgl_lahir_tahun);
                    var penerima_tgl_lahir_tglpanjang = penerima_tgl_lahir_hari+" "+penerima_tgl_lahir_namabulan+" "+penerima_tgl_lahir_tahun;

                    var param = {
                             "penerima_tgl_lahir_bulan" :penerima_tgl_lahir_bulan,
                             "penerima_tgl_lahir_hari" :penerima_tgl_lahir_hari,
                             "penerima_tgl_lahir_namabulan" :penerima_tgl_lahir_namabulan,
                             "penerima_tgl_lahir_namahari" :penerima_tgl_lahir_namahari,
                             "penerima_tgl_lahir_terbilanghari" :penerima_tgl_lahir_terbilanghari,
                             "penerima_tgl_lahir_tglpanjang" :penerima_tgl_lahir_tglpanjang,
                             "penerima_tgl_lahir_terbilangtahun" :penerima_tgl_lahir_terbilangtahun,
                             "penerima_tgl_lahir_tahun" :penerima_tgl_lahir_tahun,
                             "penerima_tipe" : $("#penerima-dataumum-penerima option:selected").val(),
                             "penerima_subtipe1" : $("#penerima-dataumum-bjenisusaha option:selected").val(),
                             "penerima_panggilan" : $("#penerima-pf-panggilan option:selected").val(),
                             "penerima_nama" : $("#penerima-pf-nama").val(),
                             "penerima_pekerjaan" : $("#penerima-pf-pekerjaan option:selected").val(),
                             "penerima_tempat_lahir" : $("#penerima-pf-tl").val(),
                             "penerima_tgl_lahir" : $("#penerima-pf-tgll").val(),
                             "penerima_alamat"  : $("#penerima-pf-alamat").val(),
                             "penerima_rt"  : $("#penerima-pf-rt").val(),
                             "penerima_rw"  : $("#penerima-pf-rw").val(),
                             "penerima_desa_kel"  : $("#penerima-pf-desa").val(),
                             "penerima_kecamatan"  : $("#penerima-pf-kec").val(),
                             "penerima_kab_kota"  : $("#penerima-pf-idkab").val(),
                             "penerima_kab_kota_nama"  : $("#penerima-pf-kab").val(),
                             "penerima_provinsi"  : $("#penerima-pf-idprov").val(),
                             "penerima_kodepos"  : $("#penerima-pf-kodepos").val(),
                             "penerima_identitas"  : $("#penerima-pf-identitas option:selected").val(),
                             "penerima_nik_npwp"  : $("#penerima-pf-noidentitas").val(),
                             "id_order"  : '<?php echo $id_order; ?>',
                             "penerima_nohp"  : $("#penerima-pf-nohp").val()
                         }     
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url('berkasorder/fidusia_perorangan/simpan') ?>",
                        data : {param : param , id : '<?php echo $id_order ?>'},
                        dataType: 'json',
                        success : function (result){
                            location.reload();
                        }
                    });
                }

                function simpanobyek()
                {
                    var tgll = new Date($("#obyek-ib-tgldikeluarkan").val());
                    var obyek_bulan = tgll.getMonth()+1;  
                    var obyek_hari = tgll.getDate();
                    var obyek_tahun = tgll.getFullYear();
                    var obyek_namabulan = getnamabulan(tgll);
                    var obyek_namahari = getnamahari(tgll);
                    var obyek_terbilanghari = terbilang(obyek_hari);
                    var obyek_terbilangtahun = terbilang(obyek_tahun);
                    var obyek_tglpanjang = obyek_hari+" "+obyek_namabulan+" "+obyek_tahun;
                    var obyek_nilai_terbilang = terbilang($("#obyek-of-nilaiobyek").val())

                    var param = {
                             "obyek_bulan" :obyek_bulan,
                             "obyek_hari" :obyek_hari,
                             "obyek_namabulan" :obyek_namabulan,
                             "obyek_namahari" :obyek_namahari,
                             "obyek_terbilanghari" :obyek_terbilanghari,
                             "obyek_tglpanjang" :obyek_tglpanjang,
                             "obyek_terbilangtahun" :obyek_terbilangtahun,
                             "obyek_tahun" :obyek_tahun,
                             "obyek_kategori" : $("#obyek-of-kategori option:selected").val(),
                             "obyek_subkategori1" : $("#obyek-of-obyekberseri option:selected").val(),
                             "obyek_subkategori2" : $("#obyek-of-obyektidakberseri option:selected").val(),
                             "obyek_merek" : $("#obyek-of-merk option:selected").val(),
                             "obyek_tipe" : $("#obyek-of-tipe").val(),
                             "obyek_model" : $("#obyek-io-model").val(),
                             "obyek_no_rangka" : $("#obyek-of-norangka").val(),
                             "obyek_no_mesin" : $("#obyek-of-nomesin").val(),
                             "obyek_no_seri" : $("#obyek-io-noseri").val(),
                             "obyek_tahun_buat" : $("#obyek-io-tahundibuat").val(),
                             "obyek_tahun_rakit"  : $("#obyek-io-tahundirakit").val(),
                             //"obyek_silinder"  : ,
                             "obyek_warna"  : $("#obyek-of-warna option:selected").val(),
                             "obyek_no_polisi"  : $("#obyek-io-nopol").val(),
                             "obyek_bpkb_atas_nama"  : $("#obyek-io-bpkbatasnama").val(),
                             "obyek_bpkb_nomor"  : $("#obyek-io-nobpkb").val(),
                             "obyek_bukti"  : $("#obyek-of-bukti option:selected").val(),
                             "obyek_bukti_dikeluarkan"  : $("#obyek-ib-dikeluarkanoleh option:selected").val(),
                             "obyek_bukti_tgl"  : $("#obyek-ib-tgldikeluarkan").val(),
                             "obyek_bukti_nomor"  : $("#obyek-ib-nobukti").val(),
                             "id_order"  : '<?php echo $id_order; ?>',
                             "obyek_mata_uang"  : $("#obyek-of-matauang option:selected").val(),
                             "obyek_nilai" : $("#obyek-of-nilaiobyek").val(),
                             "obyek_nilai_terbilang" : obyek_nilai_terbilang,
                             "obyek_keterangan" : $("#obyek-of-keterangan").val(),
                             "obyek_tambahan" : $("#obyek-io-infoplus").val()
                         }     
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url('berkasorder/fidusia_perorangan/simpan') ?>",
                        data : {param : param , id : '<?php echo $id_order ?>'},
                        dataType: 'json',
                        success : function (result){
                            location.reload();
                        }
                    });
                }

                function simpanperjanjian()
                {
                    var janji_nilai_hutang_terbilang = terbilang($("#perjanjian-nilaihutang").val())

                    var param = {
                             "janji_jenis" : $("#perjanjian-jenis option:selected").val(),
                             "janji_hutang" : $("#perjanjian-jmlitem option:selected").val(),
                             "janji_nilai_hutang" : $("#perjanjian-nilaihutang").val(),
                             "janji_pokok_dasar" : $("#perjanjian-berdasarkan").val(),
                             "janji_tgl_jangka_waktu" : $("#perjanjian-tglmulai").val(),
                             "janji_tgl_jangka_waktu_akhir" : $("#perjanjian-tglberakhir").val(),
                             "nilai_penjaminan" : $("#perjanjian-nilaipenjaminan").val(),
                             "nilai_kategori" : $("#perjanjian-kategori option:selected").val(),
                             "janji_nilai_hutang_terbilang" : janji_nilai_hutang_terbilang,
                             "lain_pengadilan_negeri" : $("#perjanjian-pengadilan").val()
                         }     
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url('berkasorder/fidusia_perorangan/simpan') ?>",
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
                //before simpan
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

                function before_simpan_persetujuan()
                {
                             persetujuanoleh = $("#persetujuan-dataumum-persetujuanoleh option:selected").val();
                             panggilan = $("#persetujuan-po-panggilan option:selected").val();
                             nama = $("#persetujuan-po-nama").val();
                             pekerjaan = $("#persetujuan-po-pekerjaan option:selected").val();
                             tl = $("#persetujuan-po-tl").val();
                             tgll = $("#persetujuan-po-tgll").val();
                             alamat = $("#persetujuan-po-alamat").val();
                             rt = $("#persetujuan-po-rt").val();
                             rw  = $("#persetujuan-po-rw").val();
                             desa  = $("#persetujuan-po-desa").val();
                             kec  = $("#persetujuan-po-kec").val();
                             kab  = $("#persetujuan-po-kab").val();
                             provinsi  = $("#persetujuan-po-provinsi").val();
                             kodepos  = $("#persetujuan-po-kodepos").val();
                             identitas  = $("#persetujuan-po-identitas option:selected").val();
                             noidentitas  = $("#persetujuan-po-noidentitas").val();
                             dikeluarkanoleh  = $("#persetujuan-it-dikeluarkanoleh").val();
                             tgldikeluarkan  = $("#persetujuan-it-tgldikeluarkan").val();
                             nosurat  = $("#persetujuan-it-nosurat").val();
                             idkab  = $("#persetujuan-po-idkab").val();
                             idprov  = $("#persetujuan-po-idprov").val();

                    kondisi = "";

                    if((persetujuanoleh != "") && (panggilan != "") && (nama != "") && (pekerjaan != "") && (tl != "") && (tgll != "") && (alamat != "") && (rt != "") && (rw != "") && (desa != "") && (kec != "") && (kab != "") && (provinsi != "") && (kodepos != "") && (identitas != "") && (noidentitas != "") && (dikeluarkanoleh != "") && (tgldikeluarkan != "") && (idprov != "") && (idkab != "") && (nosurat != ""))
                    {
                        kondisi = "sukses";
                    }else
                    {
                        notifShow("error", "Masukkan data formulir dengan benar");
                        kondisi = "gagal";
                        cekfocus_persetujuan();
                    }
                    return kondisi;
                }

                function before_simpan_penerima()
                {
                             panggilan = $("#penerima-pf-panggilan option:selected").val();
                             nama = $("#penerima-pf-nama").val();
                             pekerjaan = $("#penerima-pf-pekerjaan option:selected").val();
                             tl = $("#penerima-pf-tl").val();
                             tgll = $("#penerima-pf-tgll").val();
                             alamat = $("#penerima-pf-alamat").val();
                             rt = $("#penerima-pf-rt").val();
                             rw  = $("#penerima-pf-rw").val();
                             desa  = $("#penerima-pf-desa").val();
                             kec  = $("#penerima-pf-kec").val();
                             kab  = $("#penerima-pf-kab").val();
                             provinsi  = $("#penerima-pf-provinsi").val();
                             kodepos  = $("#penerima-pf-kodepos").val();
                             identitas  = $("#penerima-pf-identitas option:selected").val();
                             noidentitas  = $("#penerima-pf-noidentitas").val();
                             nohp  = $("#penerima-pf-nohp").val();
                             idkab  = $("#penerima-pf-idkab").val();
                             idprov  = $("#penerima-pf-idprov").val();
                             jenispenerima = $("#penerima-dataumum-penerima option:selected").val();
                             jenisusahapenerima = $("#penerima-dataumum-bjenisusaha option:selected").val();

                    kondisi = "";

                    if((nama != "") && (alamat != "") && (rt != "") && (rw != "") && (desa != "") && (kec != "") && (kab != "") && (provinsi != "") && (kodepos != "") && (identitas != "") && (noidentitas != "") && (nohp != "") && (idkab != "") && (idprov != "") && (jenispenerima != ""))
                    {
                        if(jenispenerima == "1" && jenisusahapenerima!=""){
                            kondisi = "sukses";
                        }else if(pemberi == "2" && panggilan!="" && pekerjaan!="" && tl!="" && tgll!=""){
                            kondisi = "sukses";
                        }else{
                            notifShow("error", "Masukkan data formulir dengan benar");
                            kondisi = "gagal";
                            cekfocus_penerima(); 
                        }
                    }else
                    {
                        notifShow("error", "Masukkan data formulir dengan benar");
                        kondisi = "gagal";
                        cekfocus_penerima();
                    }

                    return kondisi;
                }

                function before_simpan_obyek()
                {
                             kategori = $("#obyek-of-kategori option:selected").val();
                             berseri = $("#obyek-of-obyekberseri option:selected").val();
                             aberseri = $("#obyek-of-obyektidakberseri option:selected").val();
                             merk = $("#obyek-of-merk option:selected").val();
                             tipe = $("#obyek-of-tipe").val();
                             norangka = $("#obyek-of-norangka").val();
                             nomesin = $("#obyek-of-nomesin").val();
                             warna  = $("#obyek-of-warna option:selected").val();
                             bukti  = $("#obyek-of-bukti option:selected").val();
                             matauang  = $("#obyek-of-matauang option:selected").val();
                             nilai  = $("#obyek-of-nilaiobyek").val();
                             keterangan  = $("#obyek-of-keterangan").val();
                             model  = $("#obyek-io-model").val();
                             tahundibuat  = $("#obyek-io-tahundibuat").val()
                             tahundirakit  = $("#obyek-io-tahundirakit").val();
                             nobpkb  = $("#obyek-io-nobpkb").val();
                             bpkbatas  = $("#obyek-io-bpkbatasnama").val();
                             nopol  = $("#obyek-io-nopol").val();
                             noseri = $("#obyek-io-noseri").val();
                             infoplus = $("#obyek-io-infoplus").val();
                             dikeluarkanoleh = $("#obyek-ib-dikeluarkanoleh option:selected").val();
                             tgldikeluarkan = $("#obyek-ib-tgldikeluarkan").val();
                             nobukti = $("#obyek-ib-nobukti").val();

                    kondisi = "";

                    if((kategori != "") && (merk != "") && (tipe != "") && (norangka != "") && (nomesin != "") && (warna != "") && (bukti != "") && (matauang != "") && (nilai != "") && (keterangan != "") && (model != "") && (tahundibuat != "") && (tahundirakit != "") && (nobpkb != "") && (bpkbatas != "") && (nopol != "") && (noseri != "") && (infoplus != "") && (dikeluarkanoleh != "") && (tgldikeluarkan != "") && (nobukti != ""))
                    {
                        if(kategori == "1" && berseri!=""){
                            kondisi = "sukses";
                        }else if(kategori == "2" && aberseri!=""){
                            kondisi = "sukses";
                        }else{
                            notifShow("error", "Masukkan data formulir dengan benar");
                            kondisi = "gagal";
                            cekfocus_obyek(); 
                        }
                    }else
                    {
                        notifShow("error", "Masukkan data formulir dengan benar");
                        kondisi = "gagal";
                        cekfocus_obyek();
                    }

                    return kondisi;
                }

                function before_simpan_perjanjian()
                {
                             jenis = $("#perjanjian-jenis option:selected").val();
                             jmlitem = $("#perjanjian-jmlitem option:selected").val();
                             nilaihutang = $("#perjanjian-nilaihutang").val();
                             berdasarkan = $("#perjanjian-berdasarkan").val();
                             tglmulai = $("#perjanjian-tglmulai").val();
                             tglberakhir = $("#perjanjian-tglberakhir").val();
                             nilaipenjaminan = $("#perjanjian-nilaipenjaminan").val();
                             kategori = $("#perjanjian-kategori option:selected").val();
                             pengadilan  = $("#perjanjian-pengadilan").val();

                    kondisi = "";

                    if((jenis != "") && (jmlitem != "") && (nilaihutang != "") && (berdasarkan != "") && (tglmulai != "") && (tglberakhir != "") && (nilaipenjaminan != "") && (kategori != "") && (pengadilan != ""))
                    {
                        kondisi = "sukses";
                    }else
                    {
                        notifShow("error", "Masukkan data formulir dengan benar");
                        kondisi = "gagal";
                        cekfocus_perjanjian();
                    }
                    return kondisi;
                }
        </script>
        <script>
                //cek fokus
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

                function cekfocus_persetujuan()
                {
                    if($("#persetujuan-dataumum-persetujuanoleh option:selected").val() == "")
                    {
                     $('#persetujuan-dataumum-persetujuanoleh').focus();  
                    }else if ($("#persetujuan-po-panggilan option:selected").val() == "")
                    {
                     $('#persetujuan-po-panggilan').focus();   
                    }else if ($("#persetujuan-po-nama").val() == "")
                    {
                     $('#persetujuan-po-nama').focus();   
                    }else if ($("#persetujuan-po-pekerjaan option:selected").val() == "")
                    {
                     $('#persetujuan-po-pekerjaan').focus();   
                    }else if ($("#persetujuan-po-tl").val() == "")
                    {
                     $('#persetujuan-po-tl').focus();   
                    }else if ($("#persetujuan-po-tgll").val() == "")
                    {
                     $('#persetujuan-po-tgll').focus();   
                    }else if ($("#persetujuan-po-alamat").val() == "")
                    {
                     $('#persetujuan-po-alamat').focus();   
                    }else if ($("#persetujuan-po-rt").val() == "")
                    {
                     $('#persetujuan-po-rt').focus();  
                    }else if ($("#persetujuan-po-rw").val() == "")
                    {
                     $('#persetujuan-po-rw').focus(); 
                    }else if ($("#persetujuan-po-desa").val() == "")
                    {
                     $('#persetujuan-po-desa').focus();  
                    }else if ($("#persetujuan-po-kec").val() == "")
                    {
                     $('#persetujuan-po-kec').focus();   
                    }else if ($("#persetujuan-po-kab").val() == "")
                    {
                     $('#persetujuan-po-kab').focus();   
                    }else if ($("#persetujuan-po-provinsi").val() == "")
                    {
                     $('#persetujuan-po-provinsi').focus();   
                    }else if ($("#persetujuan-po-kodepos").val() == "")
                    {
                     $('#persetujuan-po-kodepos').focus();   
                    }else if ($("#persetujuan-po-identitas option:selected").val() == "")
                    {
                     $('#persetujuan-po-identitas').focus();   
                    }else if ($("#persetujuan-po-noidentitas").val() == "")
                    {
                     $('#persetujuan-po-noidentitas').focus();   
                    }else if ($("#persetujuan-it-dikeluarkanoleh").val() == "")
                    {
                     $('#persetujuan-it-dikeluarkanoleh').focus();   
                    }else if ($("#persetujuan-it-tgldikeluarkan").val() == "")
                    {
                     $('#persetujuan-it-tgldikeluarkan').focus();   
                    }else if ($("#persetujuan-it-nosurat").val() == "")
                    {
                     $('#persetujuan-it-nosurat').focus();   
                    }else if ($("#persetujuan-po-idkab").val() == "")
                    {
                     $('#persetujuan-po-kab').focus();   
                    }else if ($("#persetujuan-po-idprov").val() == "")
                    {
                     $('#persetujuan-po-provinsi').focus();   
                    }
                }

                function cekfocus_penerima()
                {
                    if($("#penerima-dataumum-penerima option:selected").val() == "")
                    {
                     $('#penerima-dataumum-penerima').focus();  
                    }else if ($("#penerima-pf-panggilan option:selected").val() == "")
                    {
                     $('#penerima-pf-panggilan').focus();   
                    }else if ($("#penerima-pf-nama").val() == "")
                    {
                     $('#penerima-pf-nama').focus();   
                    }else if ($("#penerima-pf-pekerjaan option:selected").val() == "")
                    {
                     $('#penerima-pf-pekerjaan').focus();   
                    }else if ($("#penerima-pf-tl").val() == "")
                    {
                     $('#penerima-pf-tl').focus();   
                    }else if ($("#penerima-pf-tgll").val() == "")
                    {
                     $('#penerima-pf-tgll').focus();   
                    }else if ($("#penerima-pf-alamat").val() == "")
                    {
                     $('#penerima-pf-alamat').focus();   
                    }else if ($("#penerima-pf-rt").val() == "")
                    {
                     $('#penerima-pf-rt').focus();  
                    }else if ($("#penerima-pf-rw").val() == "")
                    {
                     $('#penerima-pf-rw').focus(); 
                    }else if ($("#penerima-pf-desa").val() == "")
                    {
                     $('#penerima-pf-desa').focus();  
                    }else if ($("#penerima-pf-kec").val() == "")
                    {
                     $('#penerima-pf-kec').focus();   
                    }else if ($("#penerima-pf-kab").val() == "")
                    {
                     $('#penerima-pf-kab').focus();   
                    }else if ($("#penerima-pf-provinsi").val() == "")
                    {
                     $('#penerima-pf-provinsi').focus();   
                    }else if ($("#penerima-pf-kodepos").val() == "")
                    {
                     $('#penerima-pf-kodepos').focus();   
                    }else if ($("#penerima-pf-identitas option:selected").val() == "")
                    {
                     $('#penerima-pf-identitas').focus();   
                    }else if ($("#penerima-pf-noidentitas").val() == "")
                    {
                     $('#penerima-pf-noidentitas').focus();   
                    }else if ($("#penerima-pf-nohp").val() == "")
                    {
                     $('#penerima-pf-nohp').focus();   
                    }else if ($("#penerima-pf-idkab").val() == "")
                    {
                     $('#penerima-pf-kab').focus();   
                    }else if ($("#penerima-pf-idprov").val() == "")
                    {
                     $('#penerima-pf-provinsi').focus();   
                    }else if ($("#penerima-dataumum-bjenisusaha").val() == "")
                    {
                     $('#penerima-dataumum-bjenisusaha').focus();   
                    }
                }

                function cekfocus_obyek()
                {
                    if($("#obyek-of-kategori option:selected").val() == "")
                    {
                     $("#obyek-of-kategori").focus();  
                    }else if ($("#obyek-of-obyekberseri option:selected").val() == "")
                    {
                     $("#obyek-of-obyekberseri").focus();   
                    }else if ($("#obyek-of-obyektidakberseri option:selected").val() == "")
                    {
                     $("#obyek-of-obyektidakberseri").focus();   
                    }else if ($("#obyek-of-merk option:selected").val() == "")
                    {
                     $("#obyek-of-merk").focus();   
                    }else if ($("#obyek-of-tipe").val() == "")
                    {
                     $("#obyek-of-tipe").focus();   
                    }else if ($("#obyek-of-norangka").val() == "")
                    {
                     $("#obyek-of-norangka").focus();   
                    }else if ($("#obyek-of-nomesin").val() == "")
                    {
                     $("#obyek-of-nomesin").focus();   
                    }else if ($("#obyek-of-warna option:selected").val() == "")
                    {
                     $("#obyek-of-warna").focus();  
                    }else if ($("#obyek-of-bukti option:selected").val() == "")
                    {
                     $("#obyek-of-bukti").focus(); 
                    }else if ($("#obyek-of-matauang option:selected").val() == "")
                    {
                     $("#obyek-of-matauang").focus();  
                    }else if ($("#obyek-of-nilaiobyek").val() == "")
                    {
                     $("#obyek-of-nilaiobyek").focus();   
                    }else if ($("#obyek-of-keterangan").val() == "")
                    {
                     $("#obyek-of-keterangan").focus();   
                    }else if ($("#obyek-io-model").val() == "")
                    {
                     $("#obyek-io-model").focus();   
                    }else if ($("#obyek-io-tahundibuat").val() == "")
                    {
                     $("#obyek-io-tahundibuat").focus();   
                    }else if ($("#obyek-io-tahundirakit").val() == "")
                    {
                     $("#obyek-io-tahundirakit").focus();   
                    }else if ($("#obyek-io-nobpkb").val() == "")
                    {
                     $("#obyek-io-nobpkb").focus();   
                    }else if ($("#obyek-io-bpkbatasnama").val() == "")
                    {
                     $("#obyek-io-bpkbatasnama").focus();   
                    }else if ($("#obyek-io-nopol").val() == "")
                    {
                     $("#obyek-io-nopol").focus();   
                    }else if ($("#obyek-io-noseri").val() == "")
                    {
                     $("#obyek-io-noseri").focus();   
                    }else if ($("#obyek-io-infoplus").val() == "")
                    {
                     $("#obyek-io-infoplus").focus();   
                    }else if ($("#obyek-ib-dikeluarkanoleh option:selected").val() == "")
                    {
                     $("#obyek-ib-dikeluarkanoleh").focus();   
                    }else if ($("#obyek-ib-tgldikeluarkan").val() == "")
                    {
                     $("#obyek-ib-tgldikeluarkan").focus();   
                    }else if ($("#obyek-ib-nobukti").val() == "")
                    {
                     $("#obyek-ib-nobukti").focus();   
                    }
                }

                function cekfocus_perjanjian()
                {
                    if($("#perjanjian-jenis option:selected").val() == "")
                    {
                     $("#perjanjian-jenis").focus();  
                    }else if ($("#perjanjian-jmlitem option:selected").val() == "")
                    {
                     $("#perjanjian-jmlitem").focus();   
                    }else if ($("#perjanjian-nilaihutang").val() == "")
                    {
                     $("#perjanjian-nilaihutang").focus();   
                    }else if ($("#perjanjian-berdasarkan").val() == "")
                    {
                     $("#perjanjian-berdasarkan").focus();   
                    }else if ($("#perjanjian-tglmulai").val() == "")
                    {
                     $("#perjanjian-tglmulai").focus();   
                    }else if ($("#perjanjian-tglberakhir").val() == "")
                    {
                     $("#perjanjian-tglberakhir").focus();   
                    }else if ($("#perjanjian-nilaipenjaminan").val() == "")
                    {
                     $("#perjanjian-nilaipenjaminan").focus();   
                    }else if ($("#perjanjian-kategori option:selected").val() == "")
                    {
                     $("#perjanjian-kategori").focus();  
                    }else if ($("#perjanjian-pengadilan").val() == "")
                    {
                     $("#perjanjian-pengadilan").focus(); 
                    }
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
