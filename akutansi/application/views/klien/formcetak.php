<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Laporan Klien | eNotaris.com</title>
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
            <?php $this->load->view("template/sidebar", ["active" => "klien"]); ?>

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
                                    <h1>Laporan Klien</h1>
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
                                                        <td>Daftar Klien</td>
                                                    </tr>
                                                    <tr class="in" onclick="aktif_detail();">
                                                        <td>2</td>
                                                        <td>Detail Klien</td>
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
                                            <span class="caption-subject "> Filter Daftar Klien</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="save_data" id="save_data">
                                            <div class="row">
                                                <form id="daftar" method="POST" target = '_blank' method="POST" action='<?php echo base_url(); ?>klien/cetak_daftar_klien'>
                                                    <div class="col-md-7 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label>Provinsi</label>
                                                            <select class="form-control" name="id_prov" id="provinsi" >
                                                                <option value="">Pilih Nama Provinsi</option>
                                                                <?php foreach ($prov->Data as $result) { ?>
                                                                    <option value="<?php echo $result->id ?>" ><?php echo $result->name ?> </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kabupaten/Kota</label>
                                                            <select class="form-control" name="id_kabkota" id="kota" >
                                                                <option value="">Pilih Nama Kota</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Daftar</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="tgl_daftar" id="tgl_mulai">
                                                                <span class="input-group-btn">
                                                                    <button class="btn" type="button" title="Batal" onclick="tgl_batal();" >X</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-3 col-md-3">
                                                                <input type="submit" class="btn btn-primary btnSave" id="cetak_daftar" value="Cetak">
                                                            </div>
                                                            <div class="col-xs-3 col-md-3">
                                                                <a class="btn default" href="<?php echo base_url(); ?>klien" title="Refresh Data (Reload Halaman)"> Batal
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="progress hidden progresSave">
                                                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                                0%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8" id="detail_klien">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-filter"></i>
                                            <span class="caption-subject "> Filter Detail Klien</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="save_data" id="save_data">
                                            <div class="row">
                                                <form id="detail" name="detail" method="POST" target = '_blank' method="POST" action='<?php echo base_url(); ?>klien/cetak_detail_klien'>
                                                    <div class="col-md-7 col-md-offset-1">
                                                        <div id="notifikasi"></div>
                                                        <div class="form-group">
                                                            <label for="inputnama" class="control-label">Klien</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="nama_klien" disabled>
                                                                    <input type="hidden" id="id_klien" name="id_klien">
                                                                    <span class="input-group-btn">
                                                                        <a data-toggle="modal" href="#m_klien" onclick="focus_modal()" class="btn green-turquoise" title="Pilih Klien">
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
                                                                <a class="btn default" href="<?php echo base_url(); ?>klien" title="Refresh Data (Reload Halaman)"> Batal
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="progress hidden progresSave">
                                                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                                0%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $this->load->view("klien/modal/cetak") ?>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <div class="hidden">
            <form name="daftar" target = '_blank' method="POST" action='<?php echo base_url(); ?>klien/cetak_daftar_klien'>
                <input type="hidden" id="id_kabkota">
                <input type="hidden" id="id_prov">
                <input type="hidden" id="tgl_daftar">
            </form>
        </div>
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
        
             $("#provinsi").change(function() {
                provinsi = {provinsi : $('#provinsi option:selected').val()};
                    $.ajax({
                      type : "post",
                      url : '<?php echo base_url(); ?>klien/kota',
                      data :{provinsi : provinsi},
                      cache : false,
                      dataType: 'json',
                      success : function(result){
                            $('#kota').html(result["list_result"]);
                      }
                    });
            }); 
             

             $( document ).ready(function() {
                 $("#provinsi option:selected").val();
                 $("#detail_klien").hide();
                 get_klien();
            });

             
             function focus_modal()
             {
                $("#s_klien").focus();
             }


            function aktif_daftar()
            {
             $('#provinsi').val("").trigger('change');
             $("#daftar_klien").show();
             $("#detail_klien").hide();
             $('#nama_klien').val("");
             $('#id_klien').val("");
            }

            function aktif_detail()
            {
             $("#daftar_klien").hide();
             $("#detail_klien").show();
             $('#provinsi').val("")
             $('#kota').val("")
             $('#tgl_mulai').val("");

            }

            $(".in").click(function(){
                $(this).css("background", "#dbdbdb").siblings().css("background", "");
            })

            $('#tgl_mulai').focus(function() {
                
                    $('#tgl_mulai').daterangepicker();

            });

            $("#daftar").submit(function(){

                $("#cetak_daftar").addClass("disabled");
                $("#cetak_daftar").html("Sedang Diproses !");

                $("#id_kabkota").val($("#kota option:selected").val());
                $("#id_prov").val($("#provinsi option:selected").val());
                $("#tgl_daftar").val($("tgl_mulai").val());
                document.forms["daftar"].submit();
            });

            $("#detail").submit(function(){
                if($("#id_klien").val() != null && $("#id_klien").val() != "")
                {
                    document.forms["detail"].submit();  
                }else{
                    alertError();
                }
            });

            function tgl_batal(){

                    $('#tgl_mulai').daterangepicker("destroy");
                    $('#tgl_mulai').val(null);
            }

             $("#frmSearch").submit(function() {
                kywd = $("#s_klien").val();
                get_klien(kywd, hal);
                return false; 
                
             }) 

            function get_klien(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>klien/data_klien",
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



                        $("#list-klien").html(result["list_result"]);
                        }
                   });
            }
            
            function nextPage(selector) {
                var hal = $(selector).attr("data-page");
                get_klien(kywd, hal);
            }

            function prevPage(selector) {
                var hal = $(selector).attr("data-page");
                get_klien(kywd, hal);
            }

            function set_klien(selector){
                klien = $(selector).attr("data-klien");
                id = $(selector).attr("data-id");
                $("#nama_klien").val(klien);
                $("#id_klien").val(id);
                $('#m_klien').modal('hide');
            }


            function alertError(){
                $("#nama_klien").focus();
                $("#notifikasi").html(alertShow("alert-danger", "Masukkan nama klien"));
            }

        </script>

         <script>

             $(".select2-container").tooltip({
                title: function() {
                    return $(this).prev().attr("title");
                },
                placement: "auto"
                });
             $("#provinsi").select2({
                    width: "100%",
                });
             $("#kota").select2({
                    width: "100%",
                });
         </script>
    </body>
</html>