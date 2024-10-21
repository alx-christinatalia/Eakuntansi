<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Form Monitoring BPN| eNotaris.com</title>
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
            <?php $this->load->view("template/sidebar", ["active" => "monitoringBPN"]); ?>

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
                                    <h1>Form Monitoring BPN</h1>
                                </div>
                            </div>  
                            <div class="col-md-2 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">                                               
                                        <a class="btn btn-primary" title="Simpan Data">
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
                                        <form class="save_data" id="save_data" onsubmit="return false;">
                                        <input type="text" id="simMethod" class="hidden">
                                        <input type="hidden" id="id_order" value="<?php echo $id_order ?>">
                                        <input type="hidden" id="id_bpn" value="<?php echo $id ?>">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Tgl Dokumen Masuk </label><font color="red"> *</font>
                                                        <div class="input-group">
                                                            <input type="text" id="tgl_dokumen_masuk" rel="tooltip" class="form-control myDate" title="* Wajib Diisi <br /> Tanggal dokumen masuk BPN. <br />Format dd-mm-yyyy<br/> Contoh : 12-02-2014 " required>
                                                            <span class="input-group-addon ">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                         <label>Perihal Pengurus </label><font color="red"> *</font>
                                                         <select class="form-control" id="item_pengurus">
                                                            <option value="1">Checking</option>
                                                            <option value="2">Roya</option>
                                                            <option value="3">Balik Nama</option>
                                                            <option value="4">Ganti Blanko</option>
                                                            <option value="5">Split</option>
                                                            <option value="6">Penggabungan</option>
                                                            <option value="7">Ralat</option>
                                                            <option value="8">Peningkatan</option>
                                                            <option value="9">HT/SHT</option>
                                                            <option value="10">Roya + HT</option>
                                                            <option value="11">Balik Nama + HT</option>
                                                         </select>
                                                    </div>
                                                    <div class="form-group">
                                                         <label>Dokumen </label><font color="red"> *</font>
                                                         <textarea class="form-control area" rel="tooltip" id="item_dokumen" required=""></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tgl Target Selesai </label><font color="red"> *</font>
                                                        <div class="input-group">
                                                            <input type="text" id="tgl_target_selesai" rel="tooltip" class="form-control myDate" title="Tanggal real pengurusan dokumen dari BPN selesai. <br />Format dd-mm-yyyy<br/> Contoh : 12-02-2014 " required>
                                                            <span class="input-group-addon ">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tgl Dokumen Selesai </label>
                                                        <div class="input-group">
                                                            <input type="text" id="tgl_real_selesai" rel="tooltip" class="form-control myDate" title="Tanggal real pengurusan dokumen dari BPN selesai. <br />Format dd-mm-yyyy<br/> Contoh : 12-02-2014 " >
                                                            <span class="input-group-addon ">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                         <label>Perihal Pengurus </label><font color="red"> *</font>
                                                         <select class="form-control" id="status">
                                                            <option value="0">Open</option>
                                                            <option value="1">Close</option>
                                                            <option value="2">Batal</option>    
                                                         </select>
                                                    </div>
                                                    <div class="form-group">
                                                         <label>Catatan </label>
                                                         <textarea class="form-control area" id="catatan"></textarea>
                                                    </div>
                                                    <div class="hide">
                                                        <input type="submit">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-md-2">
                                                            <input type="submit" value="Simpan" class="btn btn-primary">
                                                        </div>
                                                        <div class="col-xs-4 col-md-2">
                                                            <a class="btn default hilang" href="<?php echo base_url(); ?>monitoringBPN/Form-Monitoring/<?php echo $id_order ?>"> Batal
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
            $(document).ready(function() {
                $(".myDate").each(function()
                {
                    $(this).val(formatDate1(hariini()));
                })
                cekUpdate();
            })
            function cekUpdate()
            {
                if($("#id_bpn").val() != "")
                {
                    id=$("#id_bpn").val();
                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('monitoringBPN/dataEdit') ?>/"+id,
                        dataType:'json',
                        success: function(result){
                            resp = result["Data"][0];
                            if(resp != null){
                                $("#id_order").val(resp['id_order'])
                                $("#tgl_dokumen_masuk").val(formatDate1(resp['tgl_dokumen_masuk']))
                                $("#item_pengurus").val(resp['item_pengurusan'])
                                $("#item_dokumen").val(resp['item_dokumen'])
                                $("#tgl_target_selesai").val(formatDate1(resp['tgl_target_selesai']))
                                $("#tgl_real_selesai").val(formatDate1(resp['tgl_real_selesai']))
                                $("#status ").val(resp['status'])
                                $("#catatan").val(resp['catatan'])
                            }

                    }
                });
                }
            }

            $(".save_data").submit(function(){
                param = {'id_order'          : $("#id_order").val(),
                         'tgl_dokumen_masuk' : formatDate($("#tgl_dokumen_masuk").val()),
                         'item_pengurusan'    : $("#item_pengurus option:selected").val(),
                         'item_dokumen'      : $("#item_dokumen").val(),
                         'tgl_target_selesai': formatDate($("#tgl_target_selesai").val()),
                         'tgl_real_selesai'  : formatDate($("#tgl_real_selesai").val()),
                         'status'            : $("#status option:selected").val(),
                         'catatan'           : $("#catatan").val()}

                        $.ajax({
                            type:'post',
                            url:"<?php echo base_url('monitoringBPN/insup') ?>",
                            data:{param:param,id:$("#id_bpn").val()},
                            dataType:'json',
                            success: function(resp)
                            {
                                location.href = '<?php echo base_url() ?>monitoringBPN/formMonitoring/'+$("#id_order").val();
                                console.log(resp)
                            }
                        })
                    return false;

            })

        </script>
    </body>
</html>