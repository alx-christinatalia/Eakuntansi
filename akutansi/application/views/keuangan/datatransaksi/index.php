<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Data Transaksi | eAkutansi </title>
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
        <link rel="icon" type="image/png" href="<?php echo base_url("asset/img/logo/E.png"); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo base_url("asset/img/logo/E.png"); ?>" sizes="16x16" />

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
            <?php $this->load->view("template/sidebar", ["active" => "keuangan", "sub" => "datatransaksi"]); ?>

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
                                    <h1>Data Transaksi</h1>
                                </div>
                            </div>  
                            <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center">
                                        <form id="frmSearch" action="">     
                                            <div class="input-group input-search">
                                                <input type="text" placeholder="Cari : Kontak" name="kywd" id="kywd" class="form-control"> 
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary" title="Pencarian. Ketik keyword lalu tekan [Enter]"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="form-group text-center form-action">
                                       
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a role="button" href="<?php echo base_url('kasmasuk/tambah') ;?>" > Kas/Bank Masuk </a></li>
                                                <li><a role="button" href="<?php echo base_url('kaskeluar/tambah') ;?>" > Kas/Bank Keluar </a></li>
                                                <li><a role="button" href="<?php echo base_url('jurnalumum/tambah') ;?>" > Jurnal Umum </a></li>
                                                <li><a role="button" href="<?php echo base_url('jurnalpenyesuaian/tambah') ;?>" > Jurnal Penyesuaian </a></li>
                                                <li><a role="button" href="<?php echo base_url('saldoawal/tambah') ;?>" > Saldo Awal </a></li>
                                            </ul>
                                        </div>       
                                        <a role="button" class="btn btn-primary" data-toggle="collapse" data-target=".boxFilter" title="Filter & Urutkan Data">
                                            <i class="fa fa-filter"></i>
                                        </a>                                                
                                        <a class="btn btn-primary" onclick="location.reload();" title="Refresh Data (Reload Halaman)">
                                            <i class="fa fa-refresh"></i>
                                        </a>    
                                        <a role="button" class="btn btn-primary disabled" onclick="prevPage(this);" data-page="1" id="btnPrev" title="Tampilkan data sebelumnnya">
                                            <i class="fa fa-chevron-left"></i>
                                        </a>                                                    
                                        <a role="button" class="btn btn-primary disabled" onclick="nextPage(this);" data-page="1" id="btnNext" title="Tampilkan data berikutnya">
                                            <i class="fa fa-chevron-right"></i>
                                        </a> 
                                        <a role="button" class="btn btn-primary " href="<?php echo base_url('laporan'); ?>" title="Print data klien">
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
                                <div class="collapse boxFilter collapse">
                                    <div class="portlet light bordered">
                                        <div class="portlet-body">
                                            <form id="filter-form">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Tanggal Masuk</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="from" id="tgl">
                                                                <span class="input-group-btn">
                                                                    <button class="btn" type="button" title="Batal" onclick="tgl_batal();" >X</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Nomor</label>
                                                            <input type="text" id="nomor"  class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Sudah Posting</label>
                                                                <select class="form-control"  id="jenis">
                                                                    <option value="">Jenis : Semua</option>
                                                                    <option value="KM">Jenis : Kas/Bank Masuk</option>
                                                                    <option value="KK">Jenis : Kas/Bank Keluar</option>
                                                                    <option value="JU">Jenis : Jurnal Umum</option>
                                                                    <option value="JA">Jenis : Jurnal Penyesuaian</option>      
                                                                    <option value="SA">Jenis : Saldo Awal</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Sudah Posting</label>
                                                            <select class="form-control" id="ispost">
                                                                <option value="">Posting : Semua</option>
                                                                <option value="1">Posting : Sudah</option>
                                                                <option value="0">Posting : Belum</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Urutkan</label>
                                                            <select class="form-control" id="filter_sort">
                                                                <option value="_id desc">Default</option>
                                                                <option value="tgl desc">Tgl Upload Desc</option>
                                                                <option value="tgl asc">Tgl Upload Asc</option>
                                                                <option value="nomor desc">nomor desc</option>
                                                                <option value="nomor asc">nomor  Asc</option>
                                                                <option value="_id desc">ID desc</option>
                                                                <option value="_id asc">ID  Asc</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <button class="btn btn-primary btn-tampilkan-filter">Tampilkan</button>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        <th style="width: 5%;">Aksi</th>
                                                        <th style="width: 10%;">Nomor</th>
                                                        <th style="width: 10%;">Tgl Transaksi</th>
                                                        <th style="width: 10%;">Kontak</th>
                                                        <th style="width: 28%;">Uraian</th>
                                                        <th style="width: 12%; text-align: right">Jumlah</th>
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
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->

        <?php $this->load->view("template/footer"); ?>
        <?php $this->load->view("keuangan/kasbankkeluar/modal/hapus") ?>
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
        //utama
            var page = 1, kywd = "<?php echo $nomor ?>", limit = 10, filter = {"sort" : "_id desc"}, utama = "datatransaksi";


            $(document).ready(function() {
                
                 loadTable( "#list-data" ,kywd, page, limit, filter, utama, 8,"gotoMoney();").done(function(){
                     
                        $(".changemoney").each(function(){

                           moneyVal =  $(this).html();
                           console.log(moneyVal)
                           $(this).html(returntoM(moneyVal));
                        })
                  });

  
                $("#kywd").focus();
            });

            $("#jumpPage").submit(function() {
                loadTable( "#list-data", kywd, $(".pageNum").val(), limit, filter, utama).done(function(){
                     
                        $(".changemoney").each(function(){

                           moneyVal =  $(this).html();
                           console.log(moneyVal)
                           $(this).html(returntoM(moneyVal));
                        })
                  });
                return false;
            });

            $("#limit").change(function() {
                page = 1;
                $("#btnNext, #btnNextBwh").attr("data-page", 1);
                $("#btnPrev, #btnPrevBwh").attr("data-page", 1);
                
                limit = $(this).val();
                loadTable("#list-data",kywd, page, limit, filter, utama, 10).done(function(){
                     
                        $(".changemoney").each(function(){

                           moneyVal =  $(this).html();
                           console.log(moneyVal)
                           $(this).html(returntoM(moneyVal));
                        })
                  });
            });     

            function nextPage(selector) {
                var hal = $(selector).attr("data-page");
                loadTable("#list-data", kywd, hal, limit, filter, utama, 10).done(function(){
                     
                        $(".changemoney").each(function(){

                           moneyVal =  $(this).html();
                           console.log(moneyVal)
                           $(this).html(returntoM(moneyVal));
                        })
                  });
            }

            function prevPage(selector) {
                var hal = $(selector).attr("data-page");
                loadTable("#list-data", kywd, hal, limit, filter, utama, 10).done(function(){
                     
                        $(".changemoney").each(function(){

                           moneyVal =  $(this).html();
                           console.log(moneyVal)
                           $(this).html(returntoM(moneyVal));
                        })
                  });
            }
        </script>
        <script >

            $('#tgl').focus(function() {
                
                    $('#tgl').daterangepicker();

            });

            function tgl_batal(){

                    $('#tgl').daterangepicker("destroy");
                    $('#tgl').val(null);
            }


            $("#filter-form").submit(function() {
                page = 1;
                var sort        = $("#filter_sort").val();
                var tgl         = $("#tgl").val();
                var nomor        = $("#nomor").val();
                var ispost    =  $("#ispost").val();
                var jenis    =  $("#jenis option:selected").val();

                filter = {"sort" : sort, "tgl" : tgl, "nomor" : nomor , "ispost" : ispost , "jenis" : jenis}
                loadTable( "#list-data" ,kywd, page, limit, filter, utama, 8).done(function(){
                     
                        $(".changemoney").each(function(){

                           moneyVal =  $(this).html();
                           console.log(moneyVal)
                           $(this).html(returntoM(moneyVal));
                        })
                  });
                return false;
            });

            $("#frmSearch").submit(function() {
                kywd = $("#kywd").val();
                page = 1;
                loadTable("#list-data",kywd, page, limit, filter, utama, 10).done(function(){
                     
                        $(".changemoney").each(function(){

                           moneyVal =  $(this).html();
                           console.log(moneyVal)
                           $(this).html(returntoM(moneyVal));
                        })
                  });
                return false;
            });

            function gotoMoney()
            {
                console.log('gotoMoney')
            }

            function delete_data(selector)
            {
                nomor = $(selector).attr('data-nomor');
                $("#Delete-modal").modal('toggle');
                $("#delete-id").html(nomor);
                $("#Delete-name").html(nomor);

            }
            function delete_now()
            {
                id = $("#delete-id").html();
                $.ajax({
                    url:"<?php echo base_url('kaskeluar/deleteData') ?>/"+id,
                    dataType:'json',
                    success:function(resp)
                    {
                          loadTable( "#list-data" ,kywd, page, limit, filter, utama, 8,"gotoMoney();").done(function(){
                     
                                $(".changemoney").each(function(){

                                   moneyVal =  $(this).html();
                                   console.log(moneyVal)
                                   $(this).html(returntoM(moneyVal));
                                })
                          });
                    }
                })
            }
        </script>
    </body>
</html>