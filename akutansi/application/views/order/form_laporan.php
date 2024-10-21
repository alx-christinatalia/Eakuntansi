<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Laporan Order | eNotaris.com</title>
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
            <?php $this->load->view("template/sidebar", ["active" => "order"]); ?>

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="row">
                            <div class="col-md-10 col-sm-12 col-xs-12">
                                <div class="page-title">
                                    <h1>Laporan Order</h1>
                                </div>
                            </div> 
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="base-content">
                        <div class="row">
                            <div class="col-md-4">
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
                                                    <tr class="in" onclick="aktif_daftar();" style="background: #dbdbdb">
                                                        <td>1</td>
                                                        <td>Daftar Order</td>
                                                    </tr>
                                                    <tr class="in" onclick="aktif_detail();">
                                                        <td>2</td>
                                                        <td>Detail Order</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8" id="daftar_klien">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-filter"></i>
                                            <span class="caption-subject "> Filter Daftar Order</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form method="POST" target="_BLANK" action="<?php echo base_url('order/cetak-daftar-order'); ?>">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div id="notifikasi"></div>
                                                    <div class="form-group">
                                                        <label for="inputnama" class="control-label">Klien</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="nama_klien" id="nama_klien" >
                                                                <input type="text" name="id_klien" id="id_klien" class="hidden">
                                                                <span class="input-group-btn">
                                                                    <a data-toggle="modal" href="#m_klien" onclick="ref_klien()" class="btn green-turquoise" title="Pilih Klien">
                                                                          <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputnama" class="control-label">Nama Officer</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="nama_officer" id="nama_officer" >
                                                                <input type="text" name="id_officer" id="id_officer" class="hidden">
                                                                <span class="input-group-btn">
                                                                    <a data-toggle="modal" href="#m_officer" onclick="ref_officer()" class="btn green-turquoise" title="Pilih Klien">
                                                                          <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputnama" class="control-label">Notaris Rekanan</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="nama_NotarisRekanan" id="nama_NotarisRekanan" >
                                                                <input type="text" name="id_NotarisRekanan" id="id_NotarisRekanan" class="hidden">
                                                                <span class="input-group-btn">
                                                                    <a data-toggle="modal" href="#m_NotarisRekanan" onclick="ref_NotarisRekanan()" class="btn green-turquoise" title="Pilih Klien">
                                                                          <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputnama" class="control-label">Layanan</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="nama_layanan" id="nama_layanan" >
                                                                <input type="text" name="id_layanan" id="id_layanan" class="hidden">
                                                                <span class="input-group-btn">
                                                                    <a data-toggle="modal" href="#m_layanan" onclick="ref_layanan()" class="btn green-turquoise" title="Pilih layanan">
                                                                          <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal Daftar</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="tgl_order" id="tgl_mulai">
                                                            <span class="input-group-btn">
                                                                <button class="btn" type="button" title="Batal" onclick="tgl_batal();" >X</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-3 col-md-3">
                                                            <input type="submit" class="btn btn-primary btnSave" value="Cetak">
                                                        </div>
                                                        <div class="col-xs-3 col-md-3">
                                                            <a class="btn default" href="<?php echo base_url(); ?>order" > Batal
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8" id="detail_klien">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-filter"></i>
                                            <span class="caption-subject "> Filter Detail Order</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form method="POST" target="_BLANK" action="<?php echo base_url('order/cetak-detail-order'); ?>">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div id="notifikasi"></div>
                                                    <div class="form-group">
                                                        <label for="inputnama" class="control-label">No Order</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="id_order" id="id_order" readonly>
                                                                <span class="input-group-btn">
                                                                    <a data-toggle="modal" href="#m_order" onclick="ref_order()" class="btn green-turquoise" title="Pilih Klien">
                                                                          <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-3 col-md-3">
                                                            <input type="submit" class="btn btn-primary btnSave" value="Cetak">
                                                        </div>
                                                        <div class="col-xs-3 col-md-3">
                                                            <a class="btn default" href="<?php echo base_url(); ?>billing" title="Refresh Data (Reload Halaman)"> Batal
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php $this->load->view("template/modal/order") ?>
                            <?php $this->load->view("template/modal/klien") ?>
                            <?php $this->load->view("template/modal/layanan") ?>
                            <?php $this->load->view("template/modal/officer") ?>
                            <?php $this->load->view("template/modal/notarisrekanan") ?>
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

        <!--[if lt IE 9]>
        <script src="<?php echo base_url("assets/js/ie-script/respond.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/ie-script/excanvas.min.js"); ?>"></script> 
        <script src="<?php echo base_url("assets/js/ie-script/ie8.fix.min.js"); ?>"></script> 
        <![endif]-->

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
        var c_date = "";
        var kywd= "", hal = 1;
        
             

             $( document ).ready(function() {
                 $("#detail_klien").hide();
            });

             

            function aktif_daftar()
            {
             $("#daftar_klien").show();
             $("#detail_klien").hide();
            }

            function aktif_detail()
            {
             $("#daftar_klien").hide();
             $("#detail_klien").show();
            }

            $(".in").click(function(){
                $(this).css("background", "#dbdbdb").siblings().css("background", "");
            })

            $('#tgl_mulai').focus(function() {
                
                    $('#tgl_mulai').daterangepicker({
                         locale: {
                          format: 'DD-MM-YYYY'
                        }
                    });

            });

            function tgl_batal(){

                    $('#tgl_mulai').daterangepicker("destroy");
                    $('#tgl_mulai').val(null);
            }
        </script>

    </body>
</html>