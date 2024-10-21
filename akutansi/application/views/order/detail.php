
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Detail Order | eNotaris.com</title>
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
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url("assets/css/components-rounded.css"); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url("assets/css/plugins.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url("assets/css/layout.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/css/themes/default.css"); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet" type="text/css" />
        
        <link href="<?php echo base_url("assets/daterange/daterangepicker.css"); ?>" rel="stylesheet" type="text/css" />
        
        <!-- END THEME LAYOUT STYLES -->
        
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
                                    <h1>Detail Order</h1>
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
                                                <li><a role="button" href="<?php echo base_url('order/edit/'.$id_order) ;?>" > Edit </a></li>
                                                <li><hr></li>
                                                <li><a role="button" href="<?php echo base_url('order/orderdokumen/'.$id_order) ;?>" > Kelengkapan Dokumen </a></li>
                                                <li><a role="button" href="<?php echo base_url('order/berkasorder/'.$id_order) ;?>" > Berkas Order </a></li>
                                                <li><a role="button" href="<?php echo base_url('order/berkassaksi/'.$id_order) ;?>" > Berkas Saksi </a></li>
                                                <li><a role="button" href="<?php echo base_url('order/order-proses/'.$id_order) ;?>" > Monitoring Proses </a></li>
                                                <li><a role="button" href="<?php echo base_url('billing/detail/'.$id_order) ;?>" > Billing </a></li>
                                                <li><a role="button" href="<?php echo base_url('efiling/index/'.$id_order) ;?>" > eFilling </a></li>
                                                <li><a role="button" href="<?php echo base_url('datatransaksi/index/'.$id_order) ;?>" > Keuangan </a></li>

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
                                                    <td id="io-no_order"></td>
                                                </tr>
                                                <tr>
                                                    <th>Tgl Order</th>
                                                    <td id="io-tgl_order"></td>
                                                </tr>
                                                <tr>
                                                    <th>Klien</th>
                                                    <td id="io-nama_klien"></td>
                                                </tr>
                                                <tr>
                                                    <th>Layanan</th>
                                                    <td id="io-nama_layanan"></td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Bdn Hukum</th>
                                                    <td id="io-bdnhumun_namausaha"></td>
                                                </tr>
                                                <tr>
                                                    <th>Deskripsi</th>
                                                    <td id="io-deskripsi"></td>
                                                </tr>
                                                <tr>
                                                    <th>No Akta</th>
                                                    <td id="io-no_akta"></td>
                                                </tr>
                                                <tr>
                                                    <th>No Berkas</th>
                                                    <td id="io-no_berkas"></td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td id="io-is_closed"></td>
                                                </tr>
                                                <tr>
                                                    <th>Buat Akta</th>
                                                    <td id="io-sdh_buatakta"></td>
                                                </tr>
                                                <tr>
                                                    <th>Sudah Cetak Akta</th>
                                                    <td id="io-sdh_cetakakta"></td>
                                                </tr>
                                                <tr>
                                                    <th>Biaya</th>
                                                    <td id="io-biaya"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="glyphicon glyphicon-tasks"></i>
                                            <span class="caption-subject font-dark bold uppercase">Proses</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-responsive table-striped">
                                            <thead>
                                                <tr>
                                                    <td>Proses</td>
                                                    <td style='text-align: right;' >Biaya</td>
                                                    <td style='text-align: center;'>Selesai</td>
                                                    <td style='text-align: center;'>Diambil</td>
                                                    <td style='text-align: center;'>Tgl Diambil</td>
                                                    <td>Catatan</td>
                                                </tr>
                                            </thead>
                                            <tbody >
                                                <?php if($proses->Data[0]->_id != "") { ?>
                                                <?php foreach ($proses->Data as $resp) { ?>
                                                    <tr>
                                                        <td><?php echo $resp->nama ?></td>
                                                        <td style='text-align: right;' class="uang"><?php echo $resp->harga ?></td>
                                                        <td style='text-align: center;'><?php echo ($resp->selesai == "0" ? "Belum" : "Selesai") ?></td>
                                                        <td style='text-align: center;'><?php echo ($resp->diambil == "0" ? "Belum" : "Selesai") ?></td>
                                                        <td style='text-align: center;'><?php echo date("d-m-Y", strtotime($resp->tglambil)) ?></td>
                                                        <td><?php echo $resp->catatan ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php } else {
                                                        echo "<tr><td colspan='6' style='text-align:center'>Data Kosong</td></tr>";
                                                    }  ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-money"></i>
                                            <span class="caption-subject font-dark bold uppercase">Billing</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-container">
                                            <table class="table table-hover table-striped table-bordered table-detail">
                                                <thead>
                                                    <tr>
                                                        <td>Tanggal Trans</td>
                                                        <td>Uraian</td>
                                                        <td>Jenis</td>
                                                        <td>Jumlah</td>
                                                    </tr>
                                                </thead>
                                                <tbody id="tb-billing">
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="5" id="total-tagihan"></td>
                                                        <input type="hidden" id="total" />
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-folder-open"></i>
                                            <span class="caption-subject font-dark bold uppercase">e-Filing</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-responsive table-striped">
                                            <thead>
                                                <tr>
                                                    <td>Diupload</td>
                                                    <td>Jenis</td>
                                                    <td>Info</td>
                                                    <td>Nama</td>
                                                    <td>Ukuran</td>
                                                    <td>Catatan</td>
                                                </tr>
                                            </thead>
                                            <tbody >
                                                <?php if($efiling->Data[0]->_id != "") { ?>
                                                <?php foreach ($efiling->Data as $resp) { ?>
                                                    <tr>
                                                        <td><?php echo date("d-m-Y", strtotime($resp->diupload)) ?></td>
                                                        <td><?php echo $resp->jenis ?></td>
                                                        <td><?php echo $resp->info ?></td>
                                                        <td><a target='_BLANK' href='<?php echo base_url("upload/".$resp->jenis."/".$resp->file) ?>' ><?php echo $resp->nama ?></a></td>
                                                        <td><?php echo $resp->ukuran ?></td>
                                                        <td><?php echo $resp->catatan ?></td>
                                                        
                                                    </tr>
                                                <?php } ?>
                                                <?php } else {
                                                        echo "<tr><td colspan='6' style='text-align:center'>Data Kosong</td></tr>";
                                                    }  ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-bars"></i>
                                            <span class="caption-subject font-dark bold uppercase">User Log</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-responsive table-striped">
                                            <thead>
                                                <tr>
                                                    <td>Tanggal</td>
                                                    <td>User</td>
                                                    <td>Jenis</td>
                                                    <td>Uraian</td>
                                                </tr>
                                            </thead>
                                            <tbody >
                                                <?php if($userlog->Data[0]->_id != "") { ?>
                                                <?php foreach ($userlog->Data as $resp) { ?>
                                                    <tr>
                                                        <td><?php echo date("d-M-Y h:i:sa", strtotime($resp->tgl)) ?></td>
                                                        <td><?php echo $resp->id_user ?></td>
                                                        <td><?php echo $resp->jenis ?></td>
                                                        <td><?php echo $resp->ket ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php } else {
                                                        echo "<tr><td colspan='6' style='text-align:center'>Data Kosong</td></tr>";
                                                    }  ?>
                                            </tbody>
                                        </table>
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

        <!--[if lt IE 9]>
        <script src="<?php echo base_url("assets/js/ie-script/respond.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/ie-script/excanvas.min.js"); ?>"></script> 
        <script src="<?php echo base_url("assets/js/ie-script/ie8.fix.min.js"); ?>"></script> 
        <![endif]-->

        <script src="<?php echo base_url("assets/js/public.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/metronic.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/jquery.form.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/dashboard.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/layout.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/demo.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                informasiOrder()
                duit()
                loadBilling();
            })

            function duit()
            {
                $(".uang").each(function(){
                    $(this).html(returntoM($(this).html()))
                })
            }

            function refM()
            {
                $(".jumlah").each(function(){
                    a = returntoM($(this).html());
                    $(this).html(a);
                })
            }

            function loadBilling()
            {
                cek = <?php echo $data->sdh_billing; ?>;

                if (cek == 1){
                    $.ajax({
                        type:"post",
                        url: "<?php echo base_url('billing/loadbillingdo/'.$id_order) ?>",
                        dataType: "json",
                        success: function (result){
                            $("#tb-billing").html(result['list_result']);
                            tagihan();
                            refM();
                        }
                    })
                }
            }

            function tagihan()
            {
                var total = 0
                $(".jumlah").each(function(index, item){
                    dk = $(item).data('jenis');
                    isi = parseInt($(this).html());
                     if (dk == "D") isi = isi * -1;
                    total = total + isi;
                })
                $("#total-tagihan").html("<div class='pull-right'>Tagihan "+returntoM(total)+"<div>")
                $("#total").val(total);
            }

            function informasiOrder()
            {
                param = ""

                tbl     = "tb_order";
                method  = "getData";
                sort    = "";
                limit   = "";
                filter  = "_id = '<?php echo $id_order ?>'";

                $.ajax({
                    type:'post',
                    url:"<?php echo base_url('berkasorder/perubahan_PT/doSome') ?>",
                    data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter},
                    dataType:'json',
                    success: function (resp)
                    {
                        resp = resp['Data'][0];
                        //
                            $("#io-no_order").html(resp['_id'])
                            $("#io-tgl_order").html(tglIndo(resp['tgl_order']))
                            $("#io-nama_klien").html(resp['nama_klien'])
                            $("#io-nama_layanan").html(resp['nama_layanan'])
                            $("#io-bdnhumun_namausaha").html(resp['bdnhumun_namausaha'])
                            $("#io-deskripsi").html(resp['deskripsi'])
                            $("#io-no_akta").html(resp['no_akta'])
                            $("#io-no_berkas").html(resp['no_berkas'])
                            $("#io-is_closed").html((resp['is_closed'] == "0" ? "Open" : "Closed"))
                            $("#io-sdh_buatakta").html((resp['sdh_buatakta'] == "0" ? "Belum" : "Sudah"))
                            $("#io-sdh_cetakakta").html((resp['sdh_cetakakta'] == "0" ? "Belum" : "Sudah"))
                    }
                })
                return false;
            }
        </script>
    </body>
</html>