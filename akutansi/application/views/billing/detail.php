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
        <title>Order Billing | eNotaris.com</title>
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
            <?php $this->load->view("template/sidebar", ["active" => "billing"]); ?>

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
                                    <h1>Data Billing</h1>
                                </div>
                            </div>  
                            <div class="col-md-6 col-sm-12 col-xs-12 text-right" id="_icon">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">
                                        <a  class="btn btn-primary" onclick="ftambah();">
                                            <i class="fa fa-plus"></i>
                                        </a>       
                                        <a role="button" class="btn btn-primary " href="<?php echo base_url(); ?>billing/form_laporan" title="Print data klien">
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
                                <div class="portlet light bordered" id="index">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-money "></i>
                                            <span class="caption-subject font-dark bold uppercase">Billing</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-container">
                                            <table class="table table-hover table-striped table-bordered table-detail">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 5%">Aksi</th>
                                                        <th style="width: 20%">Tgl Transaksi</th>
                                                        <th style="width: 20%">Uraian</th>
                                                        <th style="width: 20%">Jenis</th>
                                                        <th style="width: 20%">Jumlah</th>
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
                                <div class="portlet light bordered"  id="tambah">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-bars "></i>
                                            <span class="caption-subject font-dark bold uppercase">Tambah Billing</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="row">
                                            <div class="col-md-7 col-md-offset-1">
                                                <form class="save_data" id="save_data">
                                                    <input type="hidden" id="id_bil"/>
                                                    <div class="form-group">
                                                        <label>Tgl <font color="red">*</font></label>
                                                        <div class="input-group">
                                                            <input type="text" onblur="FormatDateField(this)" onfocus="this.select()" id="tgl" rel="tooltip" title="* Wajib diisi.<br/>*) Gunakan 2, 4, atau 6 digit angka.<br/> Contoh : <strong>10</strong> maka akan menjadi 10-{month}-{year}.<br/> <strong>1010</strong> maka akan menjadi 10-10-{year}. <br/><strong>101014</strong> maka akan menjadi 10-10-2014." class="form-control">
                                                            <span class="input-group-addon" >
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis </label><font color="red">*</font>
                                                        <select class="form-control" rel="tooltip" id="dk" title="* Wajib diisi.<br/>Jenis transaksi.<br/> Debit (input tagihan), Kredit (dibayar klien)">
                                                            <option value="K">Tagihan</option>
                                                            <option value="D">Bayar</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jumlah </label><font color="red">*</font>
                                                        <input type="text" rel="tooltip" id="jml" onfocus='toN(this);' onblur='toM(this);' class="form-control" title="* Wajib diisi.<br/>Jumlah tagihan, tanpa tanda titik(.).<br/>Contoh :  1000000 secara otomatis akan menjadi format 1.000.000">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Uraian </label><font color="red">*</font>
                                                        <input type="text" rel="tooltip" id="uraian" class="form-control" title="* Wajib diisi.<br/>Uraian transaksi secara default akan terisi.<br/>Contoh : Tambah akan terisi dengan [Nama Layanan - Nama Badan Usaha]<br/>Bayar [Bayar Nama Layanan - Nama Badan Usaha]">
                                                    </div>
                                                    <div class="form-group hide">
                                                        <input type="hidden" id="id_order" value="<?php echo $dataOrder->_id ?>" >
                                                    </div>
                                                    <div></div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-md-2">
                                                            <input type="submit" class="btn btn-primary" value="Simpan">
                                                        </div>
                                                        <div class="col-xs-4 col-md-2">
                                                            <a class="btn default" onclick="findex();" title="Kembali ke halaman Order"> Batal
                                                            </a>
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
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <?php $this->load->view("billing/modal/hapus") ?>
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

            $(document).ready(function(){
                loadBilling();
                $("#tambah").hide();
            })

            function ftambah()
            {
                $("#tambah").show();
                $("#index").hide();
                $("#_icon").hide();
                $("#tgl").val();
                $("#tgl").focus();
                $("#uraian").val("<?php echo $dataOrder->nama_layanan ?> -");
            }

            function fedit(selector)
            {
                id = $(selector).attr('data-id');
                $.ajax({
                    type:"post",
                    url: "<?php echo base_url('billing/loaddatabilling') ?>",
                    data : {param : id},
                    dataType: "json",
                    success: function (resp){
                        resp = resp['Data'][0];
                        $("#tgl").val(formatDate1(resp['tgl']))
                        $("#dk").val(resp['dk'])
                        $("#jml").val(resp['jml'])
                        $("#id_bil").val(resp['_id'])
                        $("#uraian").val(resp['uraian'])
                        $("#tambah").show();
                        $("#index").hide();
                        $("#_icon").hide();
                        $("#tgl").val();
                        $("#tgl").focus();
                    }
                })
            }

            function findex()
            {
                $("#tambah").hide();
                $("#index").show();
                $("#_icon").show();
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
                $.ajax({
                    type:"post",
                    url: "<?php echo base_url('billing/loadbilling/'.$dataOrder->_id) ?>",
                    dataType: "json",
                    success: function (result){
                        $("#tb-billing").html(result['list_result']);
                        tagihan();
                        refM();
                    }
                })
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
        </script>
        <script>
        //Simpan
            $("#save_data").submit(function () {
                _simpan();
                return false;
            });

            function _simpan()
            {
                a = beforesimpan();
                if(a == "sukses" )
                {
                    simpan();   
                }else
                {
                    notifShow("error", "Isi Form Dengan Benar");
                }
                
            }

            function simpan()
            {
                param = {'id_order' : $("#id_order").val(),
                         'tgl'      : $("#tgl").val(),
                         'dk'       : $("#dk option:selected").val(),
                         'uraian'   : $("#uraian").val(),
                         'jml'      : returntoN($("#jml").val()) 
                        }
                data = {'saldo' : returntoN($("#jml").val()),'sdh_billing' : "0"}
                $.ajax({
                    type:"POST",
                    url:"<?php echo base_url('billing/tambahBilling') ?>",
                    data: {param : param , data : data , id : $("#id_bil").val()},
                    dataType:"json",
                    success : function (result){
                        console.log(result)
                        $('#save_data')[0].reset();
                        $('#id_bil').val("");
                        findex();
                        loadBilling();
                        refForm();
                    }
                })
            }

            function refForm()
            {
                 $("#tgl").val("");
                 $("#dk").val("K");
                 $("#uraian").val("");
                 $("#jml").val("");
            }

            function beforesimpan()
            {
                a = $("#tgl");
                b = $("#jml");
                c = $("#uraian");
                d = $("#total");
                e = $("#dk");
                resp = "gagal";

                if(a.val() == "")
                {
                    a.focus();

                }else if(b.val() == "")
                {
                    b.focus();
                }else if (c.val() == "")
                {
                    c.focus();
                }else if(d.val() == 0 && e.val() == 'D'){
                    notifShow("error", "Tidak ada tagihan!");
                    e.focus();
                }else if(parseInt(d.val()) < parseInt(returntoN(b.val())) && e.val() == 'D'){
                    notifShow("error", "Uang yg dibayar lebih dari total tagihan!");
                    b.focus();
                }else
                {
                    resp="sukses"
                }
                return resp;
            }
        </script>
        <script>
        //Bayar
            function bayar(selector)
            {
                jml = $(selector).attr('data-jml');
                tgl = $(selector).attr('data-tgl');
                uraian = $(selector).attr('data-uraian');
                $("#jml").val(jml);
                $("#tgl").val(tgl);
                $("#uraian").val("Bayar "+uraian);
                $("#dk").val("D");
                ftambah();
                $("#jml").focus();

            }
        </script>
        <script>
        //delete
            function fdelete(selector)
            {
                id=$(selector).attr('data-id');
                $("#delete-id").html(id);
                $("#delete-modal").modal('show');

            }
            function delete_now()
            {
                id=$("#delete-id").html();
                id_order = "<?php echo $dataOrder->_id ?>"
                $.ajax({
                    type:"POST",
                    url:"<?php echo base_url('billing/deleteBilling') ?>/"+id,
                    data:{id_order:id_order},
                    dataType:'json',
                    success:function(result){
                        console.log(result);
                        loadBilling();
                    }
                })

            }
        </script>
         <script>
         //tooltip
                 $( function()
                    {
                        var targets = $( '[rel~=tooltip]' ),
                            target  = false,
                            tooltip = false,
                            title   = false;
                     
                        targets.bind( 'mouseenter', function()
                        {
                            target  = $( this );
                            tip     = target.attr( 'title' );
                            tooltip = $( '<div id="tooltip"></div>' );
                     
                            if( !tip || tip == '' )
                                return false;
                     
                           // target.removeAttr( 'title' );
                            tooltip.css( 'opacity', 0 )
                                   .html( tip )
                                   .appendTo( 'body' );
                     
                            var init_tooltip = function()
                            {
                                if( $( window ).width() < tooltip.outerWidth() * 1.5 )
                                    tooltip.css( 'max-width', $( window ).width() / 2 );
                                else
                                    tooltip.css( 'max-width', 340 );
                     
                                var pos_left = target.offset().left + ( target.outerWidth() / 2 ) - ( tooltip.outerWidth() / 2 ),
                                    pos_top  = target.offset().top - tooltip.outerHeight() - 20;
                     
                                if( pos_left < 0 )
                                {
                                    pos_left = target.offset().left + target.outerWidth() / 2 - 20;
                                    tooltip.addClass( 'left' );
                                }
                                else
                                    tooltip.removeClass( 'left' );
                     
                                if( pos_left + tooltip.outerWidth() > $( window ).width() )
                                {
                                    pos_left = target.offset().left - tooltip.outerWidth() + target.outerWidth() / 2 + 20;
                                    tooltip.addClass( 'right' );
                                }
                                else
                                    tooltip.removeClass( 'right' );
                     
                                if( pos_top < 0 )
                                {
                                    var pos_top  = target.offset().top + target.outerHeight();
                                    tooltip.addClass( 'top' );
                                }
                                else
                                    tooltip.removeClass( 'top' );
                     
                                tooltip.css( { left: pos_left, top: pos_top } )
                                       .animate( { top: '+=10', opacity: 1 }, 50 );
                            };
                     
                            init_tooltip();
                            $( window ).resize( init_tooltip );
                     
                            var remove_tooltip = function()
                            {
                                tooltip.animate( { top: '-=10', opacity: 0 }, 50, function()
                                {
                                    $( this ).remove();
                                });
                     
                                target.attr( 'title', tip );
                            };
                     
                            target.bind( 'mouseleave', remove_tooltip );
                            tooltip.bind( 'click', remove_tooltip );
                        });
                    });
         </script>
         <script>
         //Confert Uang
                function toM(selector)
                {
                    hargasatuan = $(selector).val();
                    
                        var number_string = hargasatuan.toString(), sisa  = number_string.length % 3, hargasatuan  = number_string.substr(0, sisa), ribuan  = number_string.substr(sisa).match(/\d{3}/g); if (ribuan) { separator = sisa ? '.' : ''; hargasatuan += separator + ribuan.join('.');}
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

                function returntoM(hargasatuan)
                {
                    
                        var number_string = hargasatuan.toString(), sisa  = number_string.length % 3, hargasatuan  = number_string.substr(0, sisa), ribuan  = number_string.substr(sisa).match(/\d{3}/g); if (ribuan) { separator = sisa ? '.' : ''; hargasatuan += separator + ribuan.join('.');}
                    return hargasatuan;
                }
         </script>
    </body>
</html>
