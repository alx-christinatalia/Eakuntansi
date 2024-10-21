<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Order | eNotaris.com</title>
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
            <?php $this->load->view("template/sidebar", ["active" => "order"]); ?>

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
                                    <h1>Order</h1>
                                </div>
                            </div>  
                            <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center">
                                        <form id="frmSearch" action="">     
                                            <div class="input-group input-search">
                                                <input type="text" placeholder="Cari klien/deskripsi" value="<?php echo $this->input->post("kywd"); ?>" name="kywd" id="kywd" class="form-control"> 
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary" title="Pencarian. Ketik keyword lalu tekan [Enter]"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="form-group text-center form-action">
                                        <a href="<?php echo base_url("order/tambah"); ?>" class="btn btn-primary" title="Upload Dokumen">
                                            <i class="fa fa-plus"></i>
                                        </a>       
                                        <a role="button" class="btn btn-primary" data-toggle="collapse" data-target=".boxFilter" title="Filter & Urutkan Data">
                                            <i class="fa fa-filter"></i>
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
                                        <a role="button" class="btn btn-primary " href="<?php echo base_url(); ?>order/Form-Laporan" >
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
                                <div class="collapse boxFilter collapse">
                                    <div class="portlet light bordered">
                                        <div class="portlet-body">
                                            <form id="filter-form">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Tanggal Order</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="from" id="tgl_order">
                                                                <span class="input-group-btn">
                                                                    <button class="btn" type="button" title="Batal" onclick="tgl_batal();" >X</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="inputnama" class="control-label">Klien</label>
                                                            <div class="input-group">
                                                                <input type="text" id="nama_klien" class="form-control" >
                                                                <input type="hidden" id="id_klien">
                                                                <span class="input-group-btn">
                                                                    <a data-toggle="modal" href="#m_klien" onclick="ref_klien();" class="btn green-turquoise" title="Pilih Klien">
                                                                          <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="inputnama" class="control-label">Layanan</label>
                                                        
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="nama_layanan" >
                                                                <input type="hidden" id="id_layanan">
                                                                <span class="input-group-btn">
                                                                    <a data-toggle="modal" href="#m_layanan" onclick="ref_layanan();" class="btn green-turquoise" title="Pilih Layanan">
                                                                          <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="inputnama" class="control-label">Nama Officer</label>
                                                        
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="nama_officer" >
                                                                <input type="hidden" id="id_officer">
                                                                <span class="input-group-btn">
                                                                    <a data-toggle="modal" href="#m_officer" onclick="ref_officer();" class="btn green-turquoise" title="Pilih Officer">
                                                                          <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Urutkan</label>
                                                            <select class="form-control" id="filter_sort">
                                                                <option value="_id desc">Default</option>
                                                                <option value="tgl_order desc">Tgl Order Desc</option>
                                                                <option value="tgl_order asc">Tgl Order Asc</option>
                                                                <option value="nama_klien desc">Nama desc</option>
                                                                <option value="nama_klien asc">Nama  Asc</option>
                                                                <option value="nama_layanan desc">Layanan desc</option>
                                                                <option value="nama_layanan asc">Layanan  Asc</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <button class="btn btn-primary btn-tampilkan-filter">Tampilkan</button>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        <th style="width: 5%;">Action</th>
                                                        <th style="width: 5%;">No Order</th>
                                                        <th style="width: 20%;">Tgl Order</th>
                                                        <th style="width: 15%;">Klien</th>
                                                        <th style="width: 10%;">Layanan</th>
                                                        <th style="width: 10%;">Sifat Akta</th>
                                                        <th style="width: 10%;">No Akta</th>
                                                        <th style="width: 10%;">No Berkas</th>
                                                        <th style="width: 15%;">Officer</th>
                                                        <th style="width: 10%;">Status</th>
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
                    <?php $this->load->view("order/modal/klien") ?>
                    <?php $this->load->view("order/modal/layanan") ?>
                    <?php $this->load->view("order/modal/officer") ?>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->

        <?php $this->load->view("klien/modal/hapus"); ?>
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


        <script type="text/javascript">


            var page = 1, kywd = "<?php echo $_GET['kywd'] ?>", limit = 10, utama = "order";
            var filter = {"sort" : "_id desc",
                          "tgl_order":"<?php echo $_GET['tgl_order'] ?>",
                          "nama_klien":"<?php echo $_GET['nama_klien'] ?>",
                          "nama_layanan":"<?php echo $_GET['nama_layanan'] ?>",
                          "nama_officer":"<?php echo $_GET['nama_officer'] ?>",
                          "open":"<?php echo $_GET['open'] ?>",
                           "kategori":"<?php echo $_GET['kategori'] ?>",}
            var m_kywd="" , m_utama ="", m_table="";
            var data;

            $(document).ready(function() {
                loadTable( "#list-data" ,kywd, page, limit, filter, utama, 10);
                get_modal_data(m_kywd,1,"order/data_klien","#list-klien");
                $("#kywd").focus();
                
                console.log(data);
            });


            $("#frmSearch").submit(function() {
                kywd = $("#kywd").val();
                page = 1;
                loadTable( "#list-data" ,kywd, page, limit, filter, utama, 10);
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
                loadTable("#list-data",kywd, page, limit, filter, utama, 10);
            });     

            function nextPage(selector) {
                var hal = $(selector).attr("data-page");
                loadTable("#list-data", kywd, hal, limit, filter, utama, 10);
            }

            function prevPage(selector) {
                var hal = $(selector).attr("data-page");
                loadTable("#list-data", kywd, hal, limit, filter, utama, 10);
            }
    
            
            $('#tgl_order').focus(function() {
                
                    $('#tgl_order').daterangepicker();

            });

            function tgl_batal(){

                    $('#tgl_order').daterangepicker("destroy");
                    $('#tgl_order').val(null);
            }


            $("#filter-form").submit(function() {
                page = 1;
                var tgl_order    =  $("#tgl_order").val();
                var nama_klien   = $("#nama_klien").val();
                var nama_layanan = $("#nama_layanan").val();
                var nama_officer = $("#nama_officer").val();
                var sort         = $("#filter_sort").val();
                console.log("filter = "+tgl_order+" | "+nama_klien+" | "+nama_layanan+" | "+nama_officer+" | "+sort);

                filter = {"sort" : sort, "tgl_order" : tgl_order, "nama_klien" : nama_klien , "nama_layanan" : nama_layanan, "nama_officer" : nama_officer}
                loadTable( "#list-data" ,kywd, page, limit, filter, utama, 10);
                return false;
            });

            $(".s2").select2();
        </script>

        <script>
        //fungsi modal agar berisi dan bisa pagination
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
            
            function nextPageM(selector) {
                var m_hal = $(selector).attr("data-page");
                m_table = $(selector).attr("table");
                m_utama = $(selector).attr("utama");
                get_modal_data(m_kywd, m_hal, m_utama, m_table);
                console.log(" kywd : "+m_kywd+" hal : "+m_hal+" utama : "+m_utama+" table : "+m_table);
            }

            function prevPageM(selector) {
                var m_hal = $(selector).attr("data-page");
                m_table = $(selector).attr("table");
                m_utama = $(selector).attr("utama");
                get_modal_data(m_kywd, m_hal, m_utama, m_table);
                console.log(" kywd : "+m_kywd+" hal : "+m_hal+" utama : "+m_utama+" table : "+m_table);
            }
        </script>
        <script>
        //set data ke form
            function set_klien(selector)
            {
                nama = $(selector).attr("data-klien");
                id = $(selector).attr("data-id");
                $("#nama_klien").val(nama);
                $("#id_klien").val(id);
                $('#m_klien').modal('hide');
            }

            function set_layanan(selector)
            {
                nama = $(selector).attr("data-layanan");
                id = $(selector).attr("data-id");
                $("#nama_layanan").val(nama);
                $("#id_layanan").val(id);
                $('#m_layanan').modal('hide');
            }

            function set_officer(selector)
            {
                nama = $(selector).attr("data-officer");
                id = $(selector).attr("data-id");
                $("#nama_officer").val(nama);
                $("#id_officer").val(id);
                $('#m_officer').modal('hide');
            }
        </script>
        <script>
        //fungsi menekan search modal
            function ref_klien()
            {
                get_modal_data("", "" , "order/data_klien", "#list-klien");
            }
            function ref_layanan()
            {
                get_modal_data("", "", "order/data_layanan", "#list-layanan");
            }
            function ref_officer()
            {
                get_modal_data("", "", "order/data_officer", "#list-officer");
            }
        </script>
        <script>
        //search
            $("#form-search-klien").submit(function(){
                search_data = $("#s-klien").val();
                get_modal_data(search_data, "" , "order/data_klien", "#list-klien");   
                return false;
            })

            $("#form-search-layanan").submit(function(){
                search_data = $("#s-layanan").val();
                get_modal_data(search_data, "", "order/data_layanan", "#list-layanan"); 
                return false;
            })

            $("#form-search-officer").submit(function(){
                search_data = $("#s-officer").val();
                get_modal_data(search_data, "", "order/data_officer", "#list-officer");
                return false;
            })
        </script>
        <script>
        //autoComplete

            $( "#nama_klien" ).autocomplete({
              source: "<?php echo base_url('order/getdatabase/notarisklien/nama/?') ?>"
            } );

            $( "#nama_layanan" ).autocomplete({
              source: "<?php echo base_url('order/getdatabase/masterlayanan/nama/?') ?>"
            } );

            $( "#nama_officer" ).autocomplete({
              source: "<?php echo base_url('order/getdatabase/notarisklien/nama/?') ?>"
            } );
        </script>
    </body>
</html>