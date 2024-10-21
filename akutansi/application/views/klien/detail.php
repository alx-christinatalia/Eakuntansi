<?php
    $dataDetail     = $klien->Data[0];
    $dataDetail2    = $dataHistory->Data;

    $prog = $dataDetail->progres;
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
        <title>Detail Klien | eNotaris.com</title>
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
            <?php $this->load->view("template/sidebar", ["active" => "klien"]); ?>

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
                                    <h1>Klien <?php echo $dataDetail->nama; ?></h1>
                                </div>
                            </div>  
                            <div class="col-md-3 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">     
                                        <a class="btn btn-primary" onclick="window.location.href = '<?php echo base_url() ?>klien/edit/<?php echo $dataDetail->_id ?>' " title="Edit Klien">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>                          
                                        <!--<a href = '<?php echo base_url(); ?>klien/cetak-detail-klien/<?php echo $dataDetail->_id ?>'" class="btn btn-primary" target="_blank" title="Cetak Klien">
                                            <i class="fa fa-print"></i>
                                        </a>-->
                                        <a href="<?php echo base_url(); ?>klien/cetak_form" class="btn btn-primary" title="Cetak Klien">
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
                                            <i class="fa fa-user "></i>
                                            <span class="caption-subject font-dark bold uppercase">Detail Klien</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-hover table-striped table-bordered table-detail">
                                            <tr>
                                                <th>Nama</th>
                                                <td><?php echo $dataDetail->nama; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <td><?php echo $dataDetail->alamat; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Kabupaten/Kota</th>
                                                <td><?php echo $dataDetail->nama_kabkota; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Provinsi</th>
                                                <td><?php echo $dataDetail->nama_prov ?></td>
                                            </tr>
                                            <tr>
                                                <th>E-mail</th>
                                                <td><?php echo $dataDetail->email; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Catatan</th>
                                                <td><?php echo $dataDetail->catatan; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tangal Daftar</th>
                                                <td><?php echo date("d-F-Y", strtotime($klien->Data[0]->tgl_daftar)); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="glyphicon glyphicon-tasks"></i>
                                            <span class="caption-subject font-dark bold uppercase">History Order</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-responsive table-striped">
                                            <thead>
                                                <tr>
                                                    <td>No Order</td>
                                                    <td>Tgl Order</td>
                                                    <td>Layanan</td>
                                                    <td>Deskripsi</td>
                                                    <td>No Akta</td>
                                                    <td>No Berkas</td>
                                                    <td>Status</td>    
                                                </tr>
                                            </thead>
                                            <tbody id="history-order" ></tbody>
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
                $.ajax({
                    type: "post",
                    url : "<?php echo base_url() ;?>klien/history_order/<?php echo $dataDetail->_id ?>",
                    cache : false,
                    dataType : 'json',
                    success : function (result){
                        $("#history-order").html(result['list-data']);
                    }
                })
            })
        /*function print()
        {
            window.location.href = "<?php echo base_url(); ?>klien/cetak-detail-klien/"+<?php echo $dataDetail->_id ?>;
        }*/
        </script>
    </body>
</html>