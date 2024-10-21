<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Agenda Surat | eNotaris.com</title>
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
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <?php $this->load->view("template/header"); ?>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view("template/sidebar", ["active" => "agendasurat", "sub" => "suratkeluar"]); ?>

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
                                    <h1>Surat Keluar</h1>
                                </div>
                            </div>  
                            <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center">
                                        <form id="frmSearch" action="">     
                                            <div class="input-group input-search">
                                                <input type="text" placeholder="Cari Data Surat Keluar..." value="<?php echo $this->input->post("kywd"); ?>" name="kywd" id="kywd" class="form-control" autofocus> 
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary" title="Pencarian. Ketik keyword lalu tekan [Enter]"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="form-group text-center form-action">
                                        <a href="<?php echo base_url("suratkeluar/tambah"); ?>" class="btn btn-primary" title="Upload Dokumen">
                                            <i class="fa fa-plus"></i>
                                        </a>                                             
                                        <a class="btn btn-primary" onclick="location.reload();" title="Refresh Data (Reload Halaman)">
                                            <i class="fa fa-refresh"></i>
                                        </a>           
                                        <a role="button" class="btn btn-primary" data-toggle="collapse" data-target=".boxFilter" title="Filter & Urutkan Data">
                                            <i class="fa fa-filter"></i>
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
                                <div class="collapse boxFilter collapse in">
                                    <div class="portlet light bordered">
                                        <div class="portlet-body">
                                            <form id="filter-form">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Tanggal Surat</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="from" id="tgl_surat">
                                                                <span class="input-group-btn">
                                                                    <button class="btn" type="button" title="Batal" onclick="tgl_batal();" >X</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Nama Officer</label>
                                                        <div class="input-group">
                                                            <input type="text" placeholder="Nama Officer" id="nama_officer" class="form-control" disabled> 
                                                                <span class="input-group-btn">
                                                                    <a data-toggle="modal" href="#officer" onclick="ref_officer();" class="btn green-turquoise" title="Pilih Officer">
                                                                          <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                        </div>
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
                                            <table class="table table-responsive table-striped" style="margin-bottom: 0px;" style="text-align: left;">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 8%;">Action</th>
                                                        <th style="width: 15%;">Nama Officer</th>
                                                        <th style="width: 20%;">No. Surat</th>
                                                        <th style="width: 20%;">Tgl Surat</th>
                                                        <th style="width: 20%;">Perihal</th>
                                                        <th style="width: 20%;">Tujuan Surat</th>
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
                    <div class="hidden">
                        <form name="form_cetak" method="POST" action="<?php echo base_url(); ?>npwp/cetakdatanpwp">
                            <input type="hidden" name="kategori" id="h_kategori">
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
        <?php $this->load->view("agendasurat/suratkeluar/modal/officer"); ?>
        <?php $this->load->view("agendasurat/suratkeluar/modal/hapus"); ?>

        <!--[if lt IE 9]>
        <script src="<?php echo base_url("assets/js/ie-script/respond.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/ie-script/excanvas.min.js"); ?>"></script> 
        <script src="<?php echo base_url("assets/js/ie-script/ie8.fix.min.js"); ?>"></script> 
        <![endif]-->

        <script src="<?php echo base_url("assets/js/public.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/ifvisible.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/metronic.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/dashboard.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/layout.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/demo.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/daterange/moment.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/daterange/daterangepicker.js"); ?>" type="text/javascript"></script>

        <script type="text/javascript">
            var page = 1, kywd = "", limit = 10, filter = {"sort" : "_id desc"}, utama = "/index.php/suratkeluar";

            $(document).ready(function() {
                loadTable("#list-data",kywd, page, limit, filter, utama, 4);
            });

            $('#tgl_surat').focus(function() {
                
                    $('#tgl_surat').daterangepicker();

            });

            function tgl_batal(){

                    $('#tgl_surat').daterangepicker("destroy");
                    $('#tgl_surat').val(null);
            }

            $("#filter-form").submit(function() {
                page = 1;
                var tgl_surat        = $("#tgl_surat").val();
                var nama_officer        = $("#nama_officer").val();

                filter = {"tgl_surat" : tgl_surat, "nama_officer" : nama_officer}
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

            function hapusData(selector) {
                var id;
                id   = $(selector).attr("data-id");

                $("#btnDelete").attr("href", base_url + "/index.php/suratkeluar/delete/" + id);
                $("#hapus").modal("show");
            }

            function tambahData(selector) {
                $("#btnTambah").attr("href", base_url + "/index.php/dataakun/simpan/");
                $("#tambah-dataakun").modal("show");
            }

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
        //fungsi menekan search modal
            function ref_officer()
            {
                get_modal_data("", "" , "suratkeluar/dataofficer", "#list-officer");
            }

            function set_officer(selector){
                nama = $(selector).attr("data-nama");
                id = $(selector).attr("data-id");
                $("#nama_officer").val(nama);
                $('#officer').modal('hide');
            }
        </script>
    </body>
</html>