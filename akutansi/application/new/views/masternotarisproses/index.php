<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Master Notaris Proses | eNotaris.com </title>
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
        
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo/favicon.ico"); ?>">
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-32x32.png"); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-16x16.png"); ?>" sizes="16x16" />

        <style type="text/css">
            .select2-container {
                width: 100% !important;
                padding: 0;
            }
            .select2-selection{
                width: 200px
            }
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <?php $this->load->view("template/header"); ?>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view("template/sidebar", ["active" => "administrator" , "sub" => "masternotarisproses"]); ?>

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="page-title">
                                    <h1>Master Notaris Proses</h1>
                                </div>
                            </div>  
                            <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center">
                                        <form id="frmSearch" action="">     
                                            <div class="input-group input-search">
                                                <select class="form-control s2" style="width: 200px" id="getLayanan">
                                                        
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="form-group text-center form-action">
                                        <a onclick="tambah(this)" class="btn btn-primary" data-id="" title="Tambah Dokumen">
                                            <i class="fa fa-plus"></i>
                                        </a>                                                  
                                        <a class="btn btn-primary" onclick="location.reload();" title="Refresh Data (Reload Halaman)">
                                            <i class="fa fa-refresh"></i>
                                        </a>    
                                        <a role="button" class="btn btn-primary disabled" onclick="prevPage(this);" data-page="1" id="btnPrev" title="Tampilkan data sebelumnnya">
                                            <i class="fa fa-chevron-left"></i>
                                        </a>                                                    
                                        <a role="button" class="btn btn-primary disabled" onclick="nextPage(this);" data-page="1" id="btnNext" title="Tampilkan data berikutnya">
                                            <i class="fa fa-chevron-right"></i>
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
                                <div class="portlet light bordered table-list">
                                    <div class="portlet-body">
                                        <div class="table-container">
                                            <table class="table table-responsive table-striped" style="margin-bottom: 0px;" style="text-align: left;">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10%;">Aksi</th>
                                                        <th style="width: 15%;">Notaris</th>
                                                        <th style="width: 15%;">Layanan</th>
                                                        <th style="width: 55%;">Nama Proses</th>
                                                        <th style="width: 15%;">Urutan</th>
                                                    </tr>
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
                    <?php $this->load->view("administrator/masternotarisproses/modal/tambah"); ?>
                    <?php $this->load->view("template/modal/hapus"); ?>
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


        <script>
        //utama

            var page = 1, kywd = "", limit = 10, filter = {"layanan" : $("#getLayanan option:selected").val()}, utama = "masternotarisproses";


            $(document).ready(function() {

                //loadTable( "#list-data" ,kywd, page, limit, filter, utama, 8);
                $.when(getLayanan()).done(function(){
                        filter = {"layanan" : $("#getLayanan option:selected").val()}
                        loadTable( "#list-data" ,kywd, page, limit, filter, utama, 8);
                })
                refSelect2()

            });

            $("#jumpPage").submit(function() {
                loadTable( "#list-data", kywd, $(".pageNum").val(), limit, filter, utama)
                return false;
            });

            $("#limit").change(function() {
                page = 1;
                $("#btnNext, #btnNextBwh").attr("data-page", 1);
                $("#btnPrev, #btnPrevBwh").attr("data-page", 1);
                
                limit = $(this).val();
                loadTable("#list-data",kywd, page, limit, filter, utama, 10)
            });     

            function nextPage(selector) {
                var hal = $(selector).attr("data-page");
                loadTable("#list-data", kywd, hal, limit, filter, utama, 10)
            }

            function prevPage(selector) {
                var hal = $(selector).attr("data-page");
                loadTable("#list-data", kywd, hal, limit, filter, utama, 10)
            }

            $("#frmSearch").submit(function() {
                kywd = $("#kywd").val();
                page = 1;
                loadTable("#list-data",kywd, page, limit, filter, utama, 10);
                return false;
            });

            $("#getLayanan").change(function(){
                page = 1;
                var layanan        = $("#getLayanan option:selected").val();

                filter = {"layanan" : layanan}
                loadTable( "#list-data" ,kywd, page, limit, filter, utama, 8);
                return false;
            })



        //delete
            function hapus(selector)
            {
                id          = $(selector).attr('data-id');
                layanan     = $(selector).attr('data-nama');
                $("#delete-name").html(layanan);
                $("#delete-id").html(id);

                $("#delete-modal").modal('toggle');

            }
            function delete_now()
            {

                param   = '';
                tbl     = "notarisproses";
                method  = "deleteData";
                id      = $("#delete-id").html();
                colom   = "_id";
                sort    = "";
                limit   = "";
                console.log(id);
                
                $.ajax({
                    type:'post',
                    url:"<?php echo base_url('umum/doSome') ?>",
                    data:{param:param, tbl:tbl , method:method , _id:id , colom:colom, sort:sort, limit:limit},
                    dataType:'json',
                    success: function (resp)
                    {
                        
                        loadTable( "#list-data", kywd, $(".pageNum").val(), limit, filter, utama)
                        console.log(resp);

                    }
                })
                
                
            }

        //Get
            function getLayanan()
            {
                return $.ajax({
                    url:"<?php echo base_url('masternotarisproses/getLayanan') ?>",
                    dataType:'json',
                    success:function(resp)
                    {
                        $("#getLayanan").html(resp);
                        $("#tambah-layanan").html(resp);
                    }

                })
            }

        //tambah/edit
            function tambah(selector)
            {
                id = $(selector).attr('data-id');
                urutan = $(selector).attr('data-urutan');
                nama = $(selector).attr('data-nama');
                $("#tambah-modal").modal('toggle');
                $("#tambah-id").val(id);
                $("#tambah-layanan").val($("#getLayanan option:selected").val()),
                $("#tambah-urutan").val(urutan);
                $("#tambah-nama").val(nama);
            }

            $("#tambah-proses").submit(function(){
                param = {'layanan'  : $("#tambah-layanan").val(),
                         'nama'     : $("#tambah-nama").val(),
                         'urutan'   : $("#tambah-urutan").val()}

                _id     = $("#tambah-id").val();
                tbl     = "notarisproses";
                method  = "insup";
                colom   = "_id";
                sort    = "";
                limit   = "";

                $.ajax({
                    type:'post',
                    url:"<?php echo base_url('umum/doSome') ?>",
                    data:{param:param, tbl:tbl , method:method , _id:id , colom:colom, sort:sort, limit:limit},
                    dataType:'json',
                    success: function (resp)
                    {
                        $('#tambah-proses')[0].reset();
                        $("#tambah-modal").modal('toggle');
                        loadTable( "#list-data", kywd, $(".pageNum").val(), limit, filter, utama)
                        console.log(resp);

                    }
                })
                return false;
            })

        //Fitur
            function refSelect2()
            {
                $(".s2").select2();
            }
        </script>
    </body>
</html>