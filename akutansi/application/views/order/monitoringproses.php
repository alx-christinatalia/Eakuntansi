<?php
    $dataOrder=$dataOrder->Data[0];

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
        <title>Update Proses | eNotaris.com</title>
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
                width: 205px;
            }
            .title-action .dropdown-menu {
                left: -113px;
            }
            .title-action .dropdown > .dropdown-menu:after, .dropdown-toggle > .dropdown-menu:after, .btn-group > .dropdown-menu:after,
            .title-cation .dropdown > .dropdown-menu:before, .dropdown-toggle > .dropdown-menu:before, .btn-group > .dropdown-menu:before {
                left: 140px;
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
                            <div class="col-md-9 col-sm-12 col-xs-12">
                                <div class="page-title">
                                    <h1>Update Proses </h1>
                                </div>
                            </div>  
                            <div class="col-md-3 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">     
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a role="button" href="<?php echo base_url('order/edit/'.$dataOrder->_id) ;?>" > Edit </a></li>
                                                <li><hr></li>
                                                <li><a role="button" href="<?php echo base_url('order/orderdokumen/'.$dataOrder->_id) ;?>" > Kelengkapan Dokumen </a></li>
                                                <li><a role="button" href="<?php echo base_url('order/berkasorder/'.$dataOrder->_id) ;?>" > Berkas Order </a></li>
                                                <li><a role="button" href="<?php echo base_url('order/berkassaksi/'.$dataOrder->_id) ;?>" > Berkas Saksi </a></li>
                                                <li><a role="button" href="<?php echo base_url('billing/detail/'.$dataOrder->_id) ;?>" > Billing </a></li>
                                                <li><a role="button" href="<?php echo base_url('efiling/index/'.$dataOrder->_id) ;?>" > eFilling </a></li>
                                                <li><a role="button" href="<?php echo base_url('datatransaksi/index/'.$dataOrder->_id) ;?>" > Keuangan </a></li>

                                            </ul>
                                        </div>                       
                                        <a class="btn btn-primary" href="<?php echo base_url(); ?>order/Form-Laporan" >
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
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-bars "></i>
                                            <span class="caption-subject font-dark bold uppercase">Informasi Order</span>
                                        </div>
                                        <div class=" caption pull-right">
                                            <span>
                                                <a data-toggle="collapse" data-target=".infOrder" >
                                                    <i class="fa fa-chevron-down"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="collapse infOrder collapse">

                                        <div class="portlet-body">
                                            <table class="table table-hover table-striped table-bordered table-detail">
                                                <tr>
                                                    <th>No Order</th>
                                                    <td><?php echo $dataOrder->_id; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tgl Order</th>
                                                    <td><?php echo date("d-M-Y", strtotime($dataOrder->tgl_order)) ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Klien</th>
                                                    <td><a href="<?php echo base_url('klien/detail/'.$dataOrder->id_klien) ?>"><?php echo $dataOrder->nama_klien; ?></a></td>
                                                </tr>
                                                <tr>
                                                    <th>Layanan</th>
                                                    <td><?php echo $dataOrder->nama_layanan; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Bdn Hukum</th>
                                                    <td><?php echo $dataOrder->bdnhukum_namausaha; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Deskripsi</th>
                                                    <td><?php echo $dataOrder->deskripsi; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>No Akta</th>
                                                    <td><?php echo $dataOrder->no_akta; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>No Berkas</th>
                                                    <td><?php echo $dataOrder->no_berkas; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <?php $close = ($dataOrder->is_closed == "0" ? "Open" : "Close") ?>
                                                    <td><?php echo close; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Buat Akta</th>
                                                    <?php $akta = ($dataOrder->sdh_buatakta == "0" ? "Belum" : "Sudah") ?>
                                                    <td><?php echo $akta; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Sudah Cetak Akta</th>
                                                    <?php $sdh_cetak = ($dataOrder->sdh_cetakakta == "0" ? "Belum" : "Sudah") ?>
                                                    <td><?php echo $sdh_cetak; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Biaya</th>
                                                    <td><?php echo $dataOrder->biaya; ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-bars "></i>
                                            <span class="caption-subject font-dark bold uppercase">Update Proses</span>
                                        </div>
                                        <div class=" caption pull-right">
                                            <span>
                                                <a class="btn blue btn-outline btn-circle btn-sm" data-toggle="modal" href="#proses-tambah" onclick>
                                                    <i class="fa fa-plus-square"></i>
                                                </a>
                                            </span>
                                            <span>
                                                <a class="btn blue btn-outline btn-circle btn-sm" onclick="_simpan();">
                                                    <i class="fa fa-save"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-container">
                                            <table class="table table-hover table-striped table-bordered table-detail">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 25%">Proses</th>
                                                        <th style="width: 20%">Biaya</th>
                                                        <th style="width: 5%">Selesai</th>
                                                        <th style="width: 5%">Diambil</th>
                                                        <th style="width: 20%">Tgl Diambil</th>
                                                        <th style="width: 20%">Catatan</th>
                                                        <th style="width: 5%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tb-proses">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="portlet-footer">
                                        <div class="row">
                                            <div class="col-xs-4 col-md-1">
                                                <a class="btn btn-primary" onclick="_simpan();" title="Simpan Data">
                                                Simpan
                                                </a> 
                                            </div>
                                            <div class="col-xs-4 col-md-1">
                                                <a class="btn default" href="<?php echo base_url(); ?>order" title="Kembali ke halaman Order"> Batal
                                                </a>
                                            </div>
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
        <?php $this->load->view("order/modal/prosestambah") ?>
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
        <script>
        var a1=0,a2=0,a3=0,a4=0,a5=0,a6=0;

                $(document).ready(function(){
                    $("#id-order").val("<?php echo $dataOrder->_id ?>");
                    loadProses();
                })

                function loadProses()
                {   
                    $.ajax({
                        type: 'POST',
                        url: "<?php echo base_url('order/loadproses/'.$dataOrder->_id) ?>",
                        dataType: 'json',
                        success: function (result){
                            $("#tb-proses").html(result);
                            
                        }
                    })
                }
                $("#f-tambah-proses").submit(function(){
                    tambahproses();
                    $("#proses-tambah").modal('hide');
                    return false;
                })
                $('#proses-tambah').on('shown.bs.modal', function() {
                    $("#nama").focus();
                });
        </script>
        <script>
        //Simpan
             function tambahproses()
             {
                param = {'nama':$("#nama").val(),
                         'id_order':$("#id-order").val()}
                $.ajax({
                    type:"POST",
                    url:"<?php echo base_url('order/prosestambah') ?>",
                    data:{param : param},
                    dataType:"json",
                    success: function(result)
                    {
                        console.log(result);
                        loadProses();
                    }
                })
             }
             function _simpan()
             {
                simpan();
             }
             function simpan()
             {
                notifShow('info',"Data dalam proses penyimpanan")
                total = 0;
                    var param = {};
                    var filter ={};
                $(".master").each(function(){
                    total++;
                    id = $(this).attr('baris-id');
                    a = $(this).find('.tglambil').val();
                    b = $(this);
                    param[total-1] = {
                        'urutan'    : b.find('.urutan').val(),
                        'tglambil'  : formatDate(b.find('.tglambil').val()),
                        'catatan'   : b.find('.catatan').val(),
                        'harga'     : returntoN(b.find('.biaya').val()),
                        'diproses'  : (b.find('.diproses').is(":checked") ? "1" : "0"),
                        'selesai'   : (b.find('.selesai').is(":checked") ? "1" : "0"),
                        'diambil'   : (b.find('.diambil').is(":checked") ? "1" : "0"),
                        '_id'       : id
                    }
                    filter += {
                        '_id'   : id
                    }
                })
                id_order = "<?php echo $dataOrder->_id ?>";
                $.ajax({
                    type:'post',
                    url:'<?php echo base_url('order/updateproses') ?>',
                    data: {param : param, id_order:id_order,filter:filter},
                    dataType : 'json',
                    success : function (result){
                        console.log(result)
                        notifShow('custom',"Order Proses Berhasil Diupdate")
                }
                })
            }
        </script>
        <script>
            function hapus(selector)
            {
                id = $(selector).attr('data-id');
                nama = $(selector).attr('data-nama');
                $('#delete-id').html(id);
                $('#delete-name').html(nama);
                $("#delete-proses").modal('show');
            }
            function delete_now()
            {
                id = $("#delete-id").html();
                id_order = <?php echo $dataOrder->_id ?>;
                $.ajax({
                    type:"post",
                    url:"<?php echo base_url('order/deleteproses') ?>/"+id,
                    data:{id_order:id_order},
                    dataType:"json",
                    success : function (result)
                    {
                        loadProses();
                    }
                })
            }
        </script>
         <script>
         //Confert Uang
                function toM(selector)
                {
                    hargasatuan = $(selector).val();
                    
                        var number_string = hargasatuan.toString(), sisa  = number_string.length % 3, hargasatuan  = number_string.substr(0, sisa), ribuan  = number_string.substr(sisa).match(/\d{3}/g); if (ribuan) { separator = sisa ? '.' : ''; hargasatuan += separator + ribuan.join('.');}
                    console.log(number_string);
                    $(selector).val(hargasatuan);
                }

                function toN(selector)
                {
                    nominal = $(selector).val();
                    jumlah = nominal.replace (/\./g, "", nominal);
                    $(selector).val(jumlah);
                }
                function returntoN(nominal)
                {
                    jumlah = nominal.replace (/\./g, "", nominal);
                    return jumlah;
                }
         </script>
    </body>
</html>