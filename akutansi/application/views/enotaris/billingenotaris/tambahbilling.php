<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Transaksi | eNotaris.com</title>
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
            <?php $this->load->view("template/sidebar", ["active" => "enotaris", "sub" => "billingenotaris"]); ?>

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
                                    <h1>Tambah Billing</h1>
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
                                            <i class="fa fa-bars"></i>
                                            <span class="caption-subject font-dark bold uppercase">Transaksi</span>
                                        </div>
                                    </div>
                                <div class="portlet light bordered table-list">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <span class="badge badge-success">1</span>
                                            <span class="caption-subject font-dark bold uppercase">Transfer Dana</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="well"> 
                                        Silahkan transfer uang sejumlah saldo yang anda inginkan.
                                        Misal: Anda ingin menambah saldo sejumlah 1.000.000 (satu juta).
                                        Maka transfer uang sejumlah 1.000.000 ke rekening BCA/MANDIRI atas nama Fatkul Amri
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet light bordered table-list">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <span class="badge badge-success">2</span>
                                            <span class="caption-subject font-dark bold uppercase">Konfirmasi Pembayaran</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                    <form class="form-horizontal save_data" role="form" id="save_data">
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">Tujuan Transfer <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                    <select class="form-control" rel="tooltip" name="tujuantransfer" id="tujuantransfer" rel="tooltip" title="* Wajib diisi. <br>Silahkan pilih jenis pada data yang tersedia."> 
                                                        <option value="11">Jual beli</option>
                                                        <option value="12">Tukar menukar</option>
                                                        <option value="13">Hibah</option>
                                                        <option value="14">Hibah wasiat</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Tgl Transfer <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" id="date" name="date" rel="tooltip" title="* Masukkan tanggal bayar" class="form-control" required>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">Nilai Transfer <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" name="nilai" id="nilai" rel="tooltip" title="* Wajib diisi. <br>Diisi nilai NJOP pada saat terjadinya perolehan hak."> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Berita/Catatan <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" rel="tooltip" name="cat" id="cat" rel="tooltip" title="* Wajib diisi. <br>Alamat sesuai alamat si wajib pajak." rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-1">
                                                <a class="btn btn-primary" onclick="kirim();" title="Kirim">Kirim</a> 
                                            </div>
                                            <div class="col-md-1" style="padding-left: 25px;">
                                                <a class="btn default" href="<?php echo base_url(); ?>billingenotaris">Batal</a>
                                            </div>
                                        </div>
                                    </form> 
                                    </div>
                                </div>
                                <div class="portlet light bordered table-list">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <span class="badge badge-success">3</span>
                                            <span class="caption-subject font-dark bold uppercase">Download Sertifikat</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="well"> 
                                        Jika anda sudah melakukan transfer ke rekening diatas.
                                        Maka anda akan mendapat konfirmasi berupa pembayaran telah diterima.
                                        Silahkan cek email anda, kemudian download file sertifikat yang kami kirimkan, kemudian masukkan file tersebut pada form no 4 dibawah ini.
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet light bordered table-list">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <span class="badge badge-success">4</span>
                                            <span class="caption-subject font-dark bold uppercase">Tambah Sertifikat ke eNotaris.com</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="well"> 
                                        Untuk menambah saldo anda.
                                        Masukkkan file sertifikat yang anda terima melalui email, disini:
                                        </div>
                                        <form class="form-horizontal save_data" role="form" id="save_data">
                                            <div class="form-group">
                                            <div class="col-md-offset-1 col-md-6">
                                                <label  class="control-label">File Sertifikat<font color="red">*</font></label>
                                                <div class="input-group">
                                                    <input type="file" name="image_file" class="form-control" required>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-offset-1 col-md-1">
                                                    <a class="btn btn-primary" onclick="kirim();" title="Kirim">Kirim</a> 
                                                </div>
                                                <div class="col-md-1" style="padding-left: 25px;">
                                                    <a class="btn default" href="<?php echo base_url(); ?>billingenotaris">Batal</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        <script src="<?php echo base_url("assets/plugins/ifvisible.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/jquery.form.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/metronic.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/dashboard.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/layout.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/demo.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>

        <script type="text/javascript">
            var page = 1, kywd = "", limit = 10, filter = {"sort" : "_id desc"}, utama = "/index.php/billingenotaris";

            $(document).ready(function() {
                loadTable("#list-data",kywd, page, limit, filter, utama, 4);
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
                var kategori        = $("#fkategori option:selected").val();
                var sort        = $("#fsort option:selected").val();
                var status        = $("#fstatus option:selected").val();

                filter = {"sort" : sort, "kategori" : kategori, "status" : status}
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

                $("#btnDelete").attr("href", base_url + "/index.php/dataakun/delete/" + id);
                $("#Delete-name").html(nama);
                $("#hapus-datakontak").modal("show");
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
        </script>
    </body>
</html>