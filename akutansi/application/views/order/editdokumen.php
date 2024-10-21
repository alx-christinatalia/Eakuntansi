<?php
$OrDok = $orderDok->Data[0]; // order Dokumen
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Edit Dokumen | eNotaris.com</title>
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
              #tooltip
            {
                text-align: center;
                color: #fff;
                background: #111;
                position: absolute;
                z-index: 100;
                padding: 15px;
            }
             
                #tooltip:after /* triangle decoration */
                {
                    width: 0;
                    height: 0;
                    border-left: 10px solid transparent;
                    border-right: 10px solid transparent;
                    border-top: 10px solid #111;
                    content: '';
                    position: absolute;
                    left: 50%;
                    bottom: -10px;
                    margin-left: -10px;
                }
             
                    #tooltip.top:after
                    {
                        border-top-color: transparent;
                        border-bottom: 10px solid #111;
                        top: -20px;
                        bottom: auto;
                    }
             
                    #tooltip.left:after
                    {
                        left: 10px;
                        margin: 0;
                    }
             
                    #tooltip.right:after
                    {
                        right: 10px;
                        left: auto;
                        margin: 0;
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
                            <div class="col-md-10 col-sm-12 col-xs-12">
                                <div class="page-title">
                                    <h1>Edit Dokumen</h1>
                                </div>
                            </div>  
                            <div class="col-md-2 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">                                               
                                        <a class="btn btn-primary" onclick="simpan('0')" title="Simpan Data">
                                            <i class="fa fa-save"></i>
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
                                <div class="portlet light bordered">
                                    <div class="portlet-body">
                                        <form class="save_data" id="save_data">
                                        <input type="hidden" id="simMethod">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Dokumen <font color="red">*</font></label>
                                                        <input type="text"  id="nama" rel="tooltip"  class="form-control" title="* Wajib diisi.<br/>Nama dokumen yang wajib disertakan dalam setiap layanan.<br/>Contoh : KTP; NPWP; SIUP;Surat Kuasa; BPKB. Diisi satu persatu." value="<?php echo $OrDok->nama ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Diserahkan</label>
                                                        <div class="input-group">
                                                            <input type="text" onblur="FormatDateField(this)" onfocus="this.select()" id="diserahkan" rel="tooltip" title="* Tidak wajib diisi.<br/>*) Gunakan 2, 4, atau 6 digit angka.<br/> Contoh : <strong>10</strong> maka akan menjadi 10-{month}-{year}.<br/> <strong>1010</strong> maka akan menjadi 10-10-{year}. <br/><strong>101014</strong> maka akan menjadi 10-10-2014." class="form-control myDate" value="<?php echo  date('d-M-Y', strtotime($OrDok->diserahkan));?>" >
                                                            <span class="input-group-addon" >
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Penerima </label>
                                                        <input type="text"  id="penerima" rel="tooltip"  class="form-control" title="* Tidak  Wajib diisi.<br/>Nama petugas penerima di Kantor Notaris/PPAT.<br/>Contoh : Eno Tari" value="<?php echo $OrDok->penerima ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Diambil</label>
                                                        <div class="input-group">
                                                            <input type="text" onblur="FormatDateField(this)" onfocus="this.select()" id="diambil" rel="tooltip" title="* Tidak wajib diisi.<br/>*) Gunakan 2, 4, atau 6 digit angka.<br/> Contoh : <strong>10</strong> maka akan menjadi 10-{month}-{year}.<br/> <strong>1010</strong> maka akan menjadi 10-10-{year}. <br/><strong>101014</strong> maka akan menjadi 10-10-2014." class="form-control myDate" value="<?php echo  ($OrDok->diambil == '1970-01-01' ? "" : date('d-M-Y', strtotime($OrDok->diambil)))?>">
                                                            <span class="input-group-addon" >
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pengambil </label>
                                                        <input type="text"  id="pengambil" rel="tooltip"  class="form-control" title="* Tidak  Wajib diisi.<br/>Nama pengambil dari pihak Klien.<br/>Contoh : Rahmat Sasmito" value="<?php echo $OrDok->pengambil ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Catatan </label>
                                                        <textarea type="text"  id="catatan" rel="tooltip"  class="form-control area" title="* Tidak  Wajib diisi.<br/> Bisa diisi dengan catatan kondisi atau posisi Dokumen<br/>Contoh : Dokumen berada di Kantor Notaris/PPAT" ><?php echo $OrDok->catatan ?></textarea>
                                                    </div>
                                                    <div class="form-group form-md-checkboxes">
                                                        <label class="control-label"  style="color: black">Status</label>
                                                        <div class="md-checkbox-inline">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" <?php echo ($OrDok->status == "1" ? "checked" : "") ?>  id="status" rel="tooltip" class="md-check">
                                                                <label for="status">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box" style="z-index: auto"></span> Sudah Terpenuhi/Terungkap </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-md-3">
                                                            <input type="submit" class="btn btn-primary tunggu btnLogin"  title="Simpan Data" value="Simpan">
                                                        </div>
                                                        <div class="col-xs-4 col-md-3">
                                                            <a class="btn default hilang" href="<?php echo base_url(); ?>order" title="Kembali ke halaman Order"> Batal
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
        <?php $this->load->view("order/modal/klien") ?>
        <?php $this->load->view("order/modal/layanan") ?>
        <?php $this->load->view("order/modal/officer") ?>
        <?php $this->load->view("order/modal/notaris_rekanan") ?>

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
        <script>
            $("#save_data").submit(function () {
                if ($("#nama").val() != null && $("#nama").val() != ""){
                    notifShow("custom","Data Sedang disimpan");
                    $(".btnLogin").addClass("disabled");
                    $(".btnLogin").val("Sedang Diproses !");
                    id_order = "<?php echo $OrDok->id_order ?>"
                    param = {"nama" : $("#nama").val(),
                             "diserahkan"   : formatDate($("#diserahkan").val()),
                             "penerima"     : $("#penerima").val(),
                             "diambil"      : formatDate($("#diambil").val()),
                             "pengambil"    : $("#pengambil").val(),
                             "catatan"      : $("#catatan").val(),
                             "status"       : ($('#status').is(":checked") ? "1" : "0")}
                    $.ajax({
                        url:"<?php echo base_url('order/editdokumen/'.$OrDok->_id) ?>",
                        type:'post',
                        data:{param:param,id_order:id_order},
                        dataType:'json',
                        success:function(resp){
                            //console.log(resp);
                            location.href = "<?php echo base_url("order/orderdokumen/".$idtborder) ?>"
                        }
                    })
                }else{
                    notifShow("error", "Masukkan data formulir dengan benar");
                    $("#nama").focus();
                } 
                return false;
            })
            function simpan(method)
            {
                $("#simMethod").val(method);
                $("#save_data").submit();
            }
         </script>
    </body>
</html>