<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Kirim Event | eNotaris.com</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for bootstrap markdown & wysiwyg editors" name="description" />
        <meta content="" name="author" />

        <link href="<?php echo base_url("assets/css/font.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/simple-line-icons/simple-line-icons.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/bootstrap-toastr/toastr.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/select2/css/select2.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/select2/css/select2-bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/css/components-rounded.css"); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url("assets/css/plugins.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/css/layout.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/css/themes/default.css"); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/global/plugins/bootstrap-summernote/summernote.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/css/opentip.css"); ?>" rel="stylesheet" type="text/css" />
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
            <?php $this->load->view("template/sidebar", ["active" => "enotaris", "sub" => "kirimevent"]); ?>

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
                                    <h1>Tambah Event</h1>
                                </div>
                            </div>  
                                <div class="col-md-2 col-sm-12 col-xs-12 text-right">
                                    <div class="title-action form-inline">
                                        <div class="form-group text-center form-action">                                               
                                            <a class="btn btn-primary" onclick="simpanatas();" title="Simpan Data">
                                                <i class="fa fa-save"></i>
                                            </a>                  
                                            <a class="btn btn-primary" onclick="simpanatasplus();" title="Simpan Data">
                                                <i class="fa fa-save"> +</i>
                                            </a> 
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <!-- END PAGE TITLE -->
                        </div>
                        <div class="base-content">
                        <div class="row ">
                            <div class="col-md-12">
                                <!-- BEGIN SAMPLE FORM PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-body">
                                        <form class="form-horizontal save_data" role="form" id="save_data">
                                            <div class="form-group">
                                                <label for="inputnotelp" class="col-md-2 control-label">Jadwal <font color="red">*</font></label>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="from" id="tgl_mulai">
                                                            <span class="input-group-btn">
                                                                <button class="btn" type="button" title="Batal" onclick="tgl_batal();" >X</button>
                                                            </span>
                                                    </div>                                                
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnotelp" class="col-md-2 control-label">Judul <font color="red">*</font></label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" rel="tooltip" name="judul" id="judul" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnotelp" class="col-md-2 control-label">SEO <font color="red">*</font></label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" rel="tooltip" name="seo" id="seo" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnotelp" class="col-md-2 control-label">Ringkasan <font color="red">*</font></label>
                                                <div class="col-md-6">
                                                    <textarea class="form-control" rel="tooltip" name="ringkasan" id="ringkasan" rel="tooltip" title="* Wajib diisi. <br>Alamat sesuai alamat si wajib pajak." rows="5"></textarea>
                                                </div>
                                            </div>
                                                <div class="form-group last">
                                                    <label class="control-label col-md-2">Isi</label>
                                                    <div class="col-md-8">
                                                        <div name="summernote" id="summernote_1"> </div>
                                                    </div>
                                                </div>
                                            <div class="form-group">
                                                <label for="inputnotelp" class="col-md-2 control-label">Sumber <font color="red">*</font></label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" rel="tooltip" name="sumber" id="sumber" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnotelp" class="col-md-2 control-label">Catatan <font color="red">*</font></label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" rel="tooltip" name="cat" id="cat" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnotelp" class="col-md-2 control-label">Tanggal <font color="red">*</font></label>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <input type="text" id="date" name="date" rel="tooltip" title="* Masukkan tanggal bayar" class="form-control" required>
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-offset-2 col-md-1">
                                                    <a class="btn btn-primary" onclick="simpan1();" title="Simpan Data">Simpan</a> 
                                                </div>
                                                <div class="col-md-1">
                                                    <a class="btn btn-primary" onclick="simpan2();" title="Simpan Data">Simpan+</a> 
                                                </div>
                                                <div class="col-md-1" style="padding-left: 25px;">
                                                    <a class="btn default" href="<?php echo base_url(); ?>tiketsupport">Batal</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BEGIN FOOTER -->
        <?php $this->load->view("template/footer"); ?>
        <script src="<?php echo base_url("assets/global/plugins/jquery.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/global/plugins/bootstrap/js/bootstrap.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/global/plugins/js.cookie.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/global/plugins/jquery.blockui.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/global/plugins/bootstrap-summernote/summernote.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/pages/scripts/components-editors.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/jquery.form.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/jquery-ui.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/daterange/moment.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/daterange/daterangepicker.js"); ?>" type="text/javascript"></script>
        <script>
            $('#tgl_mulai').focus(function() {
                
                    $('#tgl_mulai').daterangepicker();

            });

            function tgl_batal(){

                    $('#tgl_mulai').daterangepicker("destroy");
                    $('#tgl_mulai').val(null);
            }
        </script>
        <script>
            var c_date="";
             $(function() {
                $( "#date").datepicker('setDate', new Date());
              });
                $('#date').datepicker({ dateFormat: 'dd-mm-yy' }).val();
        </script>
    </body>

</html>