<?php
    $data = $Masterdata->Data[0];
    $isklien = $data->isklien;
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
        <title>Detail KasKeluar || eNotaris.com</title>
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
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url("assets/css/components-rounded.css"); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url("assets/css/plugins.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url("assets/css/layout.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/css/themes/default.css"); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet" type="text/css" />
        
        <link href="<?php echo base_url("assets/daterange/daterangepicker.css"); ?>" rel="stylesheet" type="text/css" />
        
        <!-- END THEME LAYOUT STYLES -->
        
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
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <?php $this->load->view("template/header"); ?>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view("template/sidebar", ["active" => "keuangan", "sub" => "kaskeluar"]); ?>

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
                                    <h1>Detail Kas Keluar</h1>
                                </div>
                            </div>  
                            <div class="col-md-3 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">     
                                        <a class="btn btn-primary" href="<?php echo base_url('kaskeluar/edit/'.$data->nomor) ?>" title="Edit Data">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>                                     
                                        <a class="btn btn-primary" href="<?php echo base_url('kaskeluar/tambah'); ?>" title="Refresh Data (Reload Halaman)">
                                            <i class="fa fa-plus"></i>
                                        </a>                        
                                        <a class="btn btn-primary" onclick="print();"  title="Cetak Klien">
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
                                            <i class="fa fa-shopping-cart "></i>
                                            <span class="caption-subject font-dark bold uppercase">Transaksi</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-hover table-striped table-bordered table-detail">
                                            <tr>
                                                <th>No Transaksi</th>
                                                <td><?php echo $data->nomor; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tgl Transaksi</th>
                                                <td><?php echo $data->tgl; ?></td>
                                            </tr>
                                            <tr onclick="Kontak(<?php echo $isklien ?>)">
                                                <th>Kontak</th>
                                                <td><?php echo $data->nama; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Uraian</th>
                                                <td><?php echo $data->uraian ?></td>
                                            </tr>
                                            <tr>
                                                <th>Referensi</th>
                                                <td><?php echo $data->refinfo; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Diinput</th>
                                                <td><?php echo $data->user_input.''.date("d-M-Y", strtotime($data->tgl_input)); ?></td> <!--yang ini-->
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="glyphicon glyphicon-tasks"></i>
                                            <span class="caption-subject font-dark bold uppercase">Jurnal</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-responsive table-striped">
                                            <thead>
                                                <tr>
                                                    <td>Akun</td>
                                                    <td style='text-align:right'>Debit</td>
                                                    <td style='text-align:right'>Kredit</td>  
                                                </tr>
                                            </thead>
                                            <tbody id="list-data">
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php $this->load->view("template/paging"); ?>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <?php $this->load->view("template/footer"); ?>
        <?php $this->load->view("keuangan/kasbankkeluar/modal/detailKontak"); ?>

        <!--[if lt IE 9]>
        <script src="<?php echo base_url("assets/js/ie-script/respond.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/ie-script/excanvas.min.js"); ?>"></script> 
        <script src="<?php echo base_url("assets/js/ie-script/ie8.fix.min.js"); ?>"></script> 
        <![endif]-->

        <script src="<?php echo base_url("assets/js/public.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/metronic.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/jquery.form.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/dashboard.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/layout.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/demo.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>

        <script>

            $(document).ready(function(){
                data("<?php echo $data->nomor; ?>")
               
            })



            function data(nomor)
            {
                $.ajax({
                    data:'post',
                    url:"<?php echo base_url('kaskeluar/tbl_detail') ?>/"+nomor,
                    dataType:'json',
                    success : function (resp)
                    {
                        $("#list-data").html(resp);
                         gotoMoney();
                    }
                })
                
            }

            $('#detailKontak').on('show.bs.modal', function () {
                detailKontakData()
            })

            function detailKontakData()
            {   
                $.ajax({
                    data:'post',
                    url:"<?php echo base_url('kaskeluar/detailKontakData/'.$data->kontak) ?> ",
                    dataType:'json',
                    success : function (resp)
                    {
                        $("#nama-kontak").html(resp['nama']);
                        $("#catatan-kontak").html(resp['catatan']);
                        $("#status-kontak").html(resp['status']);
                    }
                })
            }

            function Kontak(id)
            {
                if(id == "0")
                {
                    $("#detailKontak").modal('toggle');
                }else{
                    location.href = "<?php echo base_url('klien/detail/'.$data->kontak); ?>";
                }
            }

            function gotoMoney()
            {
                $(".changemoney").each(function(){

                   moneyVal =  $(this).html();
                   $(this).html(returntoM(moneyVal));
                })
            }
            
        </script>
    </body>
</html>