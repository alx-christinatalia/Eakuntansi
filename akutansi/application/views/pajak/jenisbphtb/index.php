<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>eNotaris.com | Pajak</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for blank page layout" name="description" />
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
        
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo/favicon.ico"); ?>">
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-32x32.png"); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-16x16.png"); ?>" sizes="16x16" />

        <style type="text/css">
            .select2-container {
                width: 100% !important;
                padding: 0;
            }
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <?php $this->load->view("template/header"); ?>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view("template/sidebar", ["active" => "pajak", "sub" => "jenisbphtb"]); ?>
            <!-- BEGIN CONTENT -->

            <div class="page-content-wrapper">

            <!-- BEGIN CONTENT BODY -->
                <div class="page-content">

                <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="page-title">
                                    <h1>Jenis BPHTB</h1>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center">
                                        <form id="frmSearch" action="">     
                                            <div class="input-group input-search">
                                                <input type="text" placeholder="Cari Kode dan Nama..." value="<?php echo $this->input->post("kywd"); ?>" name="kywd" id="kywd" class="form-control" autofocus> 
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary" title="Pencarian. Ketik keyword lalu tekan [Enter]"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="form-group text-center form-action">
                                        <a class="btn btn-primary" onclick="location.reload();" title="Refresh Data (Reload Halaman)">
                                            <i class="fa fa-refresh"></i>
                                        </a>                
                                        <a role="button" class="btn btn-primary" data-toggle="collapse" data-target=".boxFilter" title="Filter & Urutkan Data">
                                            <i class="fa fa-filter"></i>
                                        </a> 
                                        <a role="button" class="btn btn-primary" title="Cetak Data Akun" onclick="cetak();">
                                            <i class="fa fa-print"></i>
                                        </a> 
                                    </div>
                                </div>
                            </div> 
                            </div>  
                        </div>
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="base-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="collapse boxFilter collapse in">
                                    <div class="portlet light bordered">
                                        <div class="portlet-body">
                                            <form id="filter-form">
                                                <div class="row">
                                                    <div class="col-md-3"><form >
                                                        <div class="form-group">
                                                            <label>Kode</label>
                                                            <select class="form-control" id="fkode">
                                                                <option value="">Pilih Kode</option>
                                                                    <?php foreach($ssb->Data as $data) {
                                                                        echo "<option value='$data->kode'>$data->kode</option>"; 
                                                                    } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <select class="form-control" id="fnama" >
                                                                <option value="">Pilih Nama</option>
                                                                    <?php foreach($ssb->Data as $data) {
                                                                        echo "<option value='$data->nama'>$data->nama</option>"; 
                                                                    } ?>
                                                            </select> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Status</label>
                                                            <select class="form-control" id="fstatus" >
                                                                <option value="">Pilih Status</option>
                                                                <option value = "1">Aktif</option>
                                                                <option value = "-0">Tidak Aktif</option>
                                                            </select>
                                                            <input type="hidden" value="" id="status-h"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Urutkan</label>
                                                            <select class="form-control" id="fsort">
                                                                <option value="kode asc">Default</option>
                                                                <option value="kode desc">Kode Desc</option>
                                                                <option value="kode asc">Kode Asc</option>
                                                                <option value="nama desc">Nama Akun Desc</option>
                                                                <option value="nama asc">Nama Akun Asc</option>
                                                            </select>
                                                            <input type="hidden" value="" id="urutkan-h"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                 <button class="btn btn-primary btn-tampilkan-filter">Tampilkan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="portlet light bordered table-list">
                                    <div class="portlet-body">
                                        <div class="table-container">
                                            <table class="table table-responsive table-striped" style="margin-bottom: 0px;">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 8%;">Kode</th>
                                                        <th style="width: 20%;">Nama</th>
                                                        <th style="width: 8%;">Status</th>
                                                </thead>
                                                <tbody id="list-data"></tbody>
                                            </table>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php $this->load->view("template/paging"); ?>
                    <div class="hidden">
                        <form name="form_cetak" method="POST" action="<?php echo base_url(); ?>/index.php/jenisbphtb/cetakjenisbphtb">
                            <input type="hidden" name="kode" id="h_kode">
                            <input type="hidden" name="nama" id="h_nama">
                            <input type="hidden" name="status" id="h_status">
                            <input type="hidden" name="sort" id="h_sort" >
                        </form>
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
        <script src="<?php echo base_url("assets/plugins/ifvisible.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/jquery.form.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/metronic.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/dashboard.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/layout.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/demo.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>

        <script type="text/javascript">
            var page = 1, kywd = "", limit = 10, filter = {"sort" : "_id desc"}, utama = "/index.php/jenisbphtb";

            $(document).ready(function() {
                loadTable("#list-data",kywd, page, limit, filter, utama, 4);
            });

            function cetak(){
               var param = {"kode" : $('#fkode option:selected').val(), 
                          "nama" : $('#fnama option:selected').val(), 
                         "status" : $('#fstatus option:selected').val(),
                         "sort" : $('#fsort option:selected').val()} 

                $("#h_kode").val( $("#fkode option:selected").val());
                $("#h_nama").val( $("#fnama option:selected").val());
                $("#h_status").val( $("#fstatus option:selected").val());
                $("#h_sort").val( $('#fsort option:selected').val());

                document.forms["form_cetak"].submit();
            }

            $("#filter-form").submit(function() {
                page = 1;
                var kode        = $("#fkode option:selected").val();
                var nama        = $("#fnama option:selected").val();
                var sort        = $("#fsort option:selected").val();
                var status        = $("#fstatus option:selected").val();

                filter = {"sort" : sort, "kode" : kode, "nama" : nama, "status" : status}
                loadTable( "#list-data" ,kywd, page, limit, filter, utama, 4);
                return false;
            });

            $("#frmSearch").submit(function() {
                kywd = $("#kywd").val();
                page = 1;
                loadTable("#list-data",kywd, page, limit, filter, utama, 4);
                return false;
            });

            $("#jumpPage").submit(function() {
                loadTable( "#list-data", kywd, $(".pageNum").val(), limit, filter, utama);
                return false;
            });

            $("#limit").change(function() {
                page = 1;
                $("#btnNext, #btnNextBwh").attr("data-page", 1);
                $("#btnPrev, #btnPrevBwh").attr("data-page", 1);
                
                limit = $(this).val();
                loadTable("#list-data",kywd, page, limit, filter, utama, 4);
            });


            function nextPage(selector) {
                var hal = $(selector).attr("data-page");
                loadTable("#list-data", kywd, hal, limit, filter, utama, 4);
            }

            function prevPage(selector) {
                var hal = $(selector).attr("data-page");
                loadTable("#list-data", kywd, hal, limit, filter, utama, 4);
            }
        </script>

</body>

</html>
