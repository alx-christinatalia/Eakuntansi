<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Laporan Fidusia | eNotaris.com</title>
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
            <?php $this->load->view("template/sidebar", ["active" => "laporan", "sub" => "laporanfidusia"]); ?>

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
                                    <h1>Laporan Fidusia</h1>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">                                               
                                        <!--<a onclick="cetak();" class="btn btn-primary" title="Cetak Dokumen" id="cetak">
                                            <i class="fa fa-print"></i>
                                        </a>       
                                        <a onclick="pdf();" class="btn btn-primary" title="Export to PDF" id="pdf">
                                            <i class="fa fa-file-pdf-o"></i>
                                        </a>-->
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
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-filter"></i>
                                            <span class="caption-subject ">Filter</span>
                                        </div>
                                        <div class=" caption pull-right">
                                            <span>
                                                <a data-toggle="collapse" data-target=".flt" >
                                                    <i class="fa fa-chevron-down"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form class="form-horizontal flt collapse" role="form" target = '_blank' method="POST" action="<?php echo base_url(); ?>laporanfidusia/cetak">
                                            <div class="form-group">
                                                <label for="inputnotelp" class="col-md-3 control-label">Tgl Akta</label>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="tgl_mulai" id="tgl_mulai">
                                                        <span class="input-group-btn">
                                                            <button class="btn" type="button" title="Batal" onclick="tgl_batal();" >X</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnotelp" class="col-md-3 control-label">No Akta</label>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-5"> 
                                                            <input type="text" name="noakta1" id="noakta1" class="form-control">
                                                        </div>
                                                        <div class="col-md-1" style="padding-top:5px;">
                                                                s/d
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="noakta2" id="noakta2" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnama" class="col-md-3 control-label">Pelanggan</label>
                                                <div class="col-md-6">
                                                    <select type="text" name="pelanggan" id="pelanggan" class="form-control" rel="tooltip">
                                                        <option value="">-- Tidak Di Set --</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnama" class="col-md-3 control-label">No Batch</label>
                                                <div class="col-md-6">
                                                    <input type="text" name="nobatch" class="form-control" id="nobatch"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnama" class="col-md-3 control-label">No Janji PK</label>
                                                <div class="col-md-6">
                                                    <input type="text" name="nojanjipk" class="form-control" id="nojanjipk"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnama" class="col-md-3 control-label">Progress</label>
                                                <div class="col-md-6">
                                                    <select type="text" name="progres" id="progres" class="form-control mySelect2" rel="tooltip">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnama" class="col-md-3 control-label">Laporan</label>
                                                <div class="col-md-6">
                                                    <select name="laporan" id="laporan" class="form-control" rel="tooltip">
                                                        <option value="kwitansitandaterima">Kwitansi Tanda Terima</option>
                                                        <option value="perincianbiaya">Perincian Biaya</option>
                                                        <option value="kwitansipnbp">Kwitansi PNBP</option>
                                                        <option value="kwitansiapnotaris">Kwitansi AP Notaris</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-offset-2 col-md-1">
                                                    <a class="btn btn-primary" onclick="tampilkan();" title="Simpan Data">Tampil</a> 
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="submit" class="btn btn-primary" value="Cetak" /> 
                                                </div><!--
                                                <div class="col-md-1">
                                                    <a class="btn btn-primary" onclick="exportData();">Export</a>
                                                </div>-->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="portlet light bordered table-list">
                                    <div class="portlet-body">
                                        <div class="table-container">
                                            <div class="table-responsive">
                                                <table class="table table-responsive table-striped" style="margin-bottom: 0px;" style="text-align: left;">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 5%;">ID</th>
                                                            <th style="width: 10%;">Pelanggan</th>
                                                            <th style="width: 5%;">No Batch</th>
                                                            <th style="width: 5%;">No Kontrak</th>
                                                            <th style="width: 5%;">No Akta</th>
                                                            <th style="width: 5%;">Tgl Akta</th>
                                                            <th style="width: 10%;">Pemberi</th>
                                                            <th style="width: 5%;">No Voucher</th>
                                                            <th style="width: 5%;">No Sertifikat</th>
                                                            <th style="width: 10%;">Progress</th>
                                                            <th style="width: 10%;">Catatan</th>
                                                            <th style="width: 5%;">Selesai</th>
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
            var page = 1, kywd = "", limit = 10, filter = {"sort" : "ID desc"}, utama = "laporanfidusia";

            $(document).ready(function() {
                loadTable("#list-data",kywd, page, limit, filter, utama, 12);
                isipelanggan();
                isiprogres();
            });   

            $('#tgl_mulai').focus(function() {
                
                    $('#tgl_mulai').daterangepicker();
            });

            function tgl_batal(){

                    $('#tgl_mulai').daterangepicker("destroy");
                    $('#tgl_mulai').val(null);
            }

            function tampilkan(){
                if (($("#noakta1").val() != "")||($("#noakta2").val() != "")){
                    if (($("#noakta1").val() != "")&&($("#noakta2").val() != "")){
                        page = 1;

                        filter = {"tgl" : $("#tgl_mulai").val(), "noakta1" : $("#noakta1").val(), "noakta2" : $("#noakta2").val(), "pelanggan" : $("#pelanggan").val(), "nobatch" : $("#nobatch").val(), "nojanjipk" : $("#nojanjipk").val(), "progres" : $("#progres").val()}
                        
                        loadTable( "#list-data" ,kywd, page, limit, filter, utama, 12);
                        return false;   
                    }else{
                        notifShow("error", "Masukkan data nomor akta dari dan sampai dengan benar");
                        $("#noakta1").focus();
                    }
                }else{
                    page = 1;

                    filter = {"tgl" : $("#tgl_mulai").val(), "noakta1" : $("#noakta1").val(), "noakta2" : $("#noakta2").val(), "pelanggan" : $("#pelanggan").val(), "nobatch" : $("#nobatch").val(), "nojanjipk" : $("#nojanjipk").val(), "progres" : $("#progres").val()}
                        
                    loadTable( "#list-data" ,kywd, page, limit, filter, utama, 12);
                    return false; 
                }
            } 

            $("#jumpPage").submit(function() {
                loadTable( "#list-data", kywd, $(".pageNum").val(), limit, filter, utama, 12);
                return false;
            });

            $("#limit").change(function() {
                page = 1;
                $("#btnNext, #btnNextBwh").attr("data-page", 1);
                $("#btnPrev, #btnPrevBwh").attr("data-page", 1);
                
                limit = $(this).val();
                loadTable("#list-data",kywd, page, limit, filter, utama, 12);
            });     

            function nextPage(selector) {
                var hal = $(selector).attr("data-page");
                loadTable("#list-data", kywd, hal, limit, filter, utama, 12);
            }

            function prevPage(selector) {
                var hal = $(selector).attr("data-page");
                loadTable("#list-data", kywd, hal, limit, filter, utama, 12);
            }

            function isipelanggan(){
                return $.ajax({
                    type:'post',
                    url:base_url+'laporanfidusia/getPelanggan',
                    dataType:'json',
                    success : function (resp)
                    {
                        $("#pelanggan").each(function(){
                          $(this).html((resp == "" ? "<option value=\"\" >-- Pilih Pelanggan ---</option>" : resp));
                        });
                    }
                });
            }

            function isiprogres(){
                return $.ajax({
                    type:'post',
                    url:base_url+'laporanfidusia/getProgres',
                    dataType:'json',
                    success : function (resp)
                    {
                        $("#progres").each(function(){
                          $(this).html((resp == "" ? "<option value=\"\" >-- Pilih Progress ---</option>" : resp));
                        });

                        mySelect2();
                    }
                });
            }
        </script>
    </body>
</html>