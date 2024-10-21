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
            <?php $this->load->view("template/sidebar", ["active" => "pajak", "sub" => "npwp"]); ?>

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
                                    <h1>Pajak NPWP</h1>
                                </div>
                            </div>  
                            <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center">
                                        <form id="frmSearch" action="">     
                                            <div class="input-group input-search">
                                                <input type="text" placeholder="Cari Data Pajak NPWP..." value="<?php echo $this->input->post("kywd"); ?>" name="kywd" id="kywd" class="form-control" autofocus> 
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary" title="Pencarian. Ketik keyword lalu tekan [Enter]"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="form-group text-center form-action">
                                        <a href="<?php echo base_url("npwp/tambah"); ?>" class="btn btn-primary" title="Upload Dokumen">
                                            <i class="fa fa-plus"></i>
                                        </a>                                             
                                        <a class="btn btn-primary" onclick="location.reload();" title="Refresh Data (Reload Halaman)">
                                            <i class="fa fa-refresh"></i>
                                        </a>           
                                        <a role="button" class="btn btn-primary" data-toggle="collapse" data-target=".boxFilter" title="Filter & Urutkan Data">
                                            <i class="fa fa-filter"></i>
                                        </a>    
                                        <a onclick="cetak();" role="button" class="btn btn-primary" title="Cetak Data Akun">
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
                                                            <label>Provinsi</label>
                                                            <select class="form-control" id="provinsi">
                                                                <option value="">- Pilih Provinsi -</option>
                                                                <?php foreach($prov->Data as $data) { 
                                                                    echo "<option value='$data->id'>$data->name</option>";
                                                                } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Kab/Kota</label>
                                                            <select class="form-control" id="kabkota">
                                                                <option value="">- Pilih Kab/Kota -</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Kecamatan</label>
                                                            <select class="form-control" id="kec">
                                                                <option value="">- Pilih Kecamatan -</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Urutkan</label>
                                                            <select class="form-control" id="fsort">
                                                                <option value="_id asc">Default</option>
                                                                <option value="_id desc">ID Desc</option>
                                                                <option value="_id asc">ID Asc</option>
                                                                <option value="nama desc">Nama Desc</option>
                                                                <option value="nama asc">Nama Asc</option>
                                                                <option value="npwp desc">NPWP Desc</option>
                                                                <option value="npwp asc">NPWP Asc</option>
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
                                                        <th style="width: 15%;">NPWP</th>
                                                        <th style="width: 20%;">Nama</th>
                                                        <th style="width: 20%;">Kecamatan</th>
                                                        <th style="width: 20%;">Kab/Kota</th>
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

        <?php $this->load->view("pajak/npwp/modal/hapus"); ?>
        <?php $this->load->view("template/footer"); ?>

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
            var page = 1, kywd = "", limit = 10, filter = {"sort" : "_id desc"}, utama = "/index.php/npwp";

            $(document).ready(function() {
                loadTable("#list-data",kywd, page, limit, filter, utama, 4);
            });

            $("#provinsi").change(function() {
                provinsi = $('#provinsi option:selected').val()
                if(provinsi != "")
                {
                    provinsi = {provinsi : provinsi};
                    $.ajax({
                      type : "post",
                      url : '<?php echo base_url(); ?>npwp/kota',
                      data :{provinsi : provinsi},
                      cache : false,
                      dataType: 'json',
                      success : function(result){
                        $('#kabkota').html(result["list_result"]);
                      }
                    });    
                }else{
                    $('#kabkota').html("<option value=''>- Pilih Kab/Kota -</option>");
                }
                

            }); 

            $("#kabkota").change(function() {
                kabkota = $('#kabkota option:selected').val();
                provinsi = $('#provinsi option:selected').val()
                if(kabkota != "")
                {
                    kabkota = {kabkota : kabkota , provinsi : provinsi};
                    $.ajax({
                      type : "post",
                      url : '<?php echo base_url(); ?>npwp/kec',
                      data :{kabkota : kabkota },
                      cache : false,
                      dataType: 'json',
                      success : function(result){
                        $('#kec').html(result["list_result"]);
                      }
                    });    
                }else{
                    $('#kec').html("<option value=''>- Pilih Kecamatan -</option>");
                }
                

            }); 

            function cetak(){
               var param = {"kategori" : $('#fkategori option:selected').val(), 
                         "status" : $('#fstatus option:selected').val(),
                         "sort" : $('#fsort option:selected').val()} 

                $("#h_kategori").val( $("#fkategori option:selected").val());
                $("#h_status").val( $("#fstatus option:selected").val());
                $("#h_sort").val( $('#fsort option:selected').val());

                document.forms["form_cetak"].submit();
                console.log($("#h_sort").val());
            }

            $("#filter-form").submit(function() {
                page = 1;
                var kabkota        = $("#kabkota option:selected").val();
                var kec        = $("#kec option:selected").val();
                var sort        = $("#fsort option:selected").val();

                filter = {"sort" : sort, "kabkota" : kabkota, "kec" : kec}
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
                var nama, id;
                id   = $(selector).attr("data-id");
                nama = $(selector).attr("data-nama");

                $("#btnDelete").attr("href", base_url + "/index.php/npwp/delete/" + id);
                $("#Delete-name").html(nama);
                $("#hapus").modal("show");
            }

            function tambahData(selector) {
                $("#btnTambah").attr("href", base_url + "/index.php/dataakun/simpan/");
                $("#tambah-dataakun").modal("show");
            }

            $("#save_data").submit(function() {
                simpan();
                return false;
            });

             $("#kategori").change(function() {
                kategori = $('#kategori option:selected').val();
                $("#kode").html(kategori);
            }); 

             function simpan(){
                var param = {
                             "kategori" : $("#kategori option:selected").val(),
                             "kode" : ($("#kategori option:selected").val()) + ($("#kodeinput").val()),
                             "nama" : $("#nama").val(),
                             "aktif" : $("#status option:selected").val()}
                $.ajax({
                    type : "post",
                    url : "<?php echo base_url(); ?>index.php/dataakun/simpan",
                    data : {param : param},
                    dataType: 'json',
                    success : function (result){
                        if (result == "gagal"){
                           notifShow("error","Data gagal dimasukkan"); 
                        }else if (result == "sukses"){
                            location.reload();
                        }
                    }
                });
             }

              function _update(){
                var _id =  $("#_id").val()
                var param = {
                             "kategori" : $("#kategori-edit option:selected").val(),
                             "kode" : ($("#kategori-edit option:selected").val()) + ($("#kodeinput-edit").val()),
                             "nama" : $("#nama-edit").val(),
                             "aktif" : $("#status-edit option:selected").val()}
                $.ajax({
                    type : "post",
                    url : "<?php echo base_url(); ?>index.php/dataakun/update/"+_id,
                    data : {param : param, id: _id },
                    dataType: 'json',
                    success : function (result){
                        
                    }
                });
             }

            function editData(selector) {
                var id = $(selector).attr("data-id");
                $.ajax({
                    type: 'POST',
                    url: base_url + utama,
                    data: { action: "get_databyid", param : {"id": id} },
                    dataType: "json",
                    success: function (data) {
                        var result = data.Data[0]; 
                        console.log(id); 
                        //s$("#id-edit").val(result._id);
                        $("#kodeinput-edit").val(result.kode);
                        $("#nama-edit").val(result.nama);
                        $("#status-edit").val(result.aktif);
                        $("#kode-edit").html(result.kategori);
                        $("#_id").val(result._id);

                        showKategori(result.kategori);
                        $("#dataakun-edit").modal("show");
                        $('#dataakun-edit').on('shown.bs.modal', function() {
                            $("#kodeinput-edit").focus();
                        });
                    }
                });
            }

            $("#dataakun-edit").submit(function(){
               _update();
              location.reload();
               return false;
            })

            $("#kategori-edit").change(function() {
                kategori = $('#kategori-edit option:selected').val();
                $("#kode-edit").html(kategori);
            }); 

            function showKategori(selected_value = "") {
                $.ajax({
                    type: 'POST',
                    url: base_url + utama,
                    data: { action: "get_kategori", param : {"item_pertama": "Pilih Kategori", "selected" : selected_value}},
                    success: function (data) {
                        $("#kategori, #kategori-edit").html(data);
                    }
                });
            }

            $("#kec").select2();
            $("#kabkota").select2();
            $("#provinsi").select2();
            $("#provinsi").change(function(){
                $("#kabkota").select2("open");
            })
            $("#kabkota").change(function(){
                $("#kec").select2("open");
            })
        </script>
    </body>
</html>