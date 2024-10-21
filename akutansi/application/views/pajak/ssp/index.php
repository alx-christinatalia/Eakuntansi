<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Pajak | eNotaris.com</title>
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
            <?php $this->load->view("template/sidebar", ["active" => "pajak", "sub" => "SSP"]); ?>

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
                                    <h1>Pajak SSP</h1>
                                </div>
                            </div>  
                            <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center">
                                        <form id="frmSearch" action="">     
                                            <div class="input-group input-search">
                                                <input type="text" placeholder="Cari Data Pajak SSP..." value="<?php echo $this->input->post("kywd"); ?>" name="kywd" id="kywd" class="form-control" autofocus> 
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary" title="Pencarian. Ketik keyword lalu tekan [Enter]"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="form-group text-center form-action">
                                        <a href="<?php echo base_url("ssp/tambah"); ?>" class="btn btn-primary" title="Upload Dokumen">
                                            <i class="fa fa-plus"></i>
                                        </a>                                             
                                        <a class="btn btn-primary" onclick="location.reload();" title="Refresh Data (Reload Halaman)">
                                            <i class="fa fa-refresh"></i>
                                        </a>           
                                        <a role="button" class="btn btn-primary" data-toggle="collapse" data-target=".boxFilter" title="Filter & Urutkan Data">
                                            <i class="fa fa-filter"></i>
                                        </a>    
                                        <a onclick="cetak();" role="button" class="btn btn-primary" title="Cetak Pajak SSP">
                                            <i class="fa fa-print"></i>
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
                                                            <label>Tanggal Pajak</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="from" id="tgl_mulai">
                                                                <span class="input-group-btn">
                                                                    <button class="btn" type="button" title="Batal" onclick="tgl_batal();" >X</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>NPWP</label>
                                                        <div class="input-group">
                                                            <input type="text" placeholder="NPWP" id="npwp1" class="form-control" disabled> 
                                                                <span class="input-group-btn">
                                                                    <a data-toggle="modal" href="#mnpwp" onclick="ref_npwp();" class="btn green-turquoise" title="Pilih Kota">
                                                                          <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Kode Map SSP</label>
                                                        <div class="input-group">
                                                            <input type="text" placeholder="Kode Map SSP" id="map1" class="form-control" disabled> 
                                                                <span class="input-group-btn">
                                                                    <a data-toggle="modal" href="#mmap" onclick="ref_map();" class="btn green-turquoise" title="Pilih Kota">
                                                                          <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Sudah Bayar</label>
                                                            <select class="form-control" id="byr">
                                                                <option value="3">Semua</option>
                                                                <option value="2">Sudah</option>
                                                                <option value="1">Belum</option>
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
                                            <table class="table table-responsive table-striped" style="margin-bottom: 0px;" style="text-align: left;">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 8%;">Action</th>
                                                        <th style="width: 8%;">Tgl Bayar</th>
                                                        <th style="width: 10%;">No SSP</th>
                                                        <th style="width: 20%;">Nama</th>
                                                        <th style="width: 10%;">Map</th>
                                                        <th style="width: 10%;">NTPN</th>
                                                        <th style="width: 15%;">Jumlah</th>
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
                    <?php $this->load->view("pajak/ssp/modal/bayar"); ?>
                    <div class="hidden">
                        <form name="cetakdatassp" method="POST" target = '_blank' action="<?php echo base_url(); ?>ssp/cetakdatassp">
                            <input type="hidden" name="id" id="iddatapajak">
                        </form>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->

        <?php $this->load->view("pajak/ssp/modal/hapus"); ?>
        <?php $this->load->view("pajak/ssp/modal/npwp"); ?>
        <?php $this->load->view("pajak/ssp/modal/map"); ?>
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
            //basic
            var page = 1, kywd = "", limit = 10, filter = {"sort" : "_id desc"}, utama = "ssp";

            $(document).ready(function() {
                loadTable("#list-data",kywd, page, limit, filter, utama, 7);
            });

            $('#tgl_mulai').focus(function() {
                
                    $('#tgl_mulai').daterangepicker();
            });

            function tgl_batal(){

                    $('#tgl_mulai').daterangepicker("destroy");
                    $('#tgl_mulai').val(null);
            }


            $("#filter-form").submit(function() {
                page = 1;
                var npwp        = $("#npwp1").val();
                var ssp        = $("#map1").val();
                var byr        = $("#byr option:selected").val();
                var tgl_mulai    =  $("#tgl_mulai").val();

                filter = {"npwp" : npwp, "ssp" : ssp, "byr" : byr, "tgl_mulai":tgl_mulai}
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

            function hapusData(selector) {
                var nama, id;
                id   = $(selector).attr("data-id");
                nama = $(selector).attr("data-nama");

                $("#btnDelete").attr("href", base_url + "/index.php/ssp/delete/" + id);
                $("#Delete-name").html(nama);
                $("#hapus").modal("show");
            }

            function cetakData(selector) {
                $("#iddatapajak").val($(selector).attr("data-id"));
                document.forms['cetakdatassp'].submit();
                console.log($(selector).attr("data-id"))
            }

        </script>

        <script>
            function bayarData(selector) {
                var id = $(selector).attr("data-id");
                $.ajax({
                    type: 'POST',
                    url: base_url + utama,
                    data: { action: "get_databyid", param : {"id": id} },
                    dataType: "json",
                    success: function (data) {
                        var result = data.Data[0];
                        $("#jumlahbayar").val(result.jml);
                        $("#tglbayar").val(result.tgl_byr);
                        $("#_id-edit").val(result._id);

                        $("#bayar").modal("show");
                        $('#bayar').on('shown.bs.modal', function() {
                            $("#kdntpn").focus();
                        });
                    }
                });
            }

              function _update(){
                var _id =  $("#_id-edit").val()
                var param = {
                             "jml" : $("#jumlahbayar").val(),
                             "tgl_byr" : $("#tglbayar").val(),
                             "ntpn" : $("#kdntpn").val(),
                             "tgl_update" : $("#tgl_update").val(),
                             "sdh_byr":"1",
                             "catatan" : $("#cat").val()
                         }
                $.ajax({
                    type : "post",
                    url : "<?php echo base_url(); ?>index.php/ssp/update/"+_id,
                    data : {param : param, id: _id },
                    dataType: 'json',
                    success : function (result){
                        console.log(_update);
                    }
                });
             }

            $("#edit_data").submit(function(){
               _update();
               console.log(_update);
              location.reload();
               return false;
            })

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
        //fungsi menekan search modal
            function ref_npwp()
            {
                get_modal_data("", "" , "ssp/datanpwp", "#list-npwp");
            }

            function ref_map()
            {
                get_modal_data("", "" , "ssp/datamap", "#list-map");
            }
        </script>

        <script>
        var kywd= "", hal = 1;
        var m_kywd="" , m_utama ="", m_table="";

             function focus_modal()
             {
                $("#s_npwp").focus();
             }

             function focus_modal()
             {
                $("#s_map").focus();
             }

             $("#frmnpwp").submit(function() {
                search_data = $("#s_npwp").val();
                get_modal_data(search_data, "" , "ssp/datanpwp", "#list-npwp");   
                return false;
                
             }) 

             $("#frmmap").submit(function() {
                search_data = $("#s_map").val();
                get_modal_data(search_data, "" , "ssp/datamap", "#list-map");   
                return false;
                
             }) 

            function get_npwp(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ssp/datanpwp",
                        data: {param : {"page":hal, "kywd":kywd}},
                        dataType: "json",
                        success: function (result) {

                            page = result.paging.HalKe;

                            if(result.paging.IsNext == true) {
                                $("#btnNext").attr("data-page", (page + 1));  
                                $("#btnNext").removeClass("disabled");
                            }else{
                                $("#btnNext").addClass("disabled");
                            }

                            if(result.paging.IsPrev == true) {
                                $("#btnPrev").attr("data-page", (page - 1));
                                $("#btnPrev").removeClass("disabled");
                            } else {
                                $("#btnPrev").addClass("disabled");
                            }



                        $("#list-npwp").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function get_map(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ssp/datamap",
                        data: {param : {"page":hal, "kywd":kywd}},
                        dataType: "json",
                        success: function (result) {

                            page = result.paging.HalKe;

                            if(result.paging.IsNext == true) {
                                $("#btnNext").attr("data-page", (page + 1));  
                                $("#btnNext").removeClass("disabled");
                            }else{
                                $("#btnNext").addClass("disabled");
                            }

                            if(result.paging.IsPrev == true) {
                                $("#btnPrev").attr("data-page", (page - 1));
                                $("#btnPrev").removeClass("disabled");
                            } else {
                                $("#btnPrev").addClass("disabled");
                            }



                        $("#list-map").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function set_npwp(selector){
                npwp = $(selector).attr("data-npwp");
                id = $(selector).attr("data-id");
                $("#npwp1").val(npwp);
                $("#id_npwp").val(id);
                $('#mnpwp').modal('hide');
            }
            function set_map(selector){
                map = $(selector).attr("data-map");
                id = $(selector).attr("data-id");
                $("#map1").val(map);
                $("#id_map").val(id);
                $('#mmap').modal('hide');
            }

        </script>

    </body>
</html>