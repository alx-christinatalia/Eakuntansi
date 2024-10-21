<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Utility | eNotaris.com</title>
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
            .btn-submit-m {
                margin-top: 10%
            }
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <?php $this->load->view("template/header"); ?>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view("template/sidebar", ["active" => "administrator" , "sub" => "utility"]); ?>

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
                                    <h1>Utility</h1>
                                </div>
                            </div> 
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="base-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="portlet light bordered ">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-cog"></i>
                                            <span class="caption-subject "> Closing Order</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-container">
                                           <form id="closing-order">
                                               <div class="form-group">
                                                   <label>No Order</label>
                                                   <div class="input-group">
                                                       <input type="text" placeholder="No Order" id="id_order" class="form-control" disabled>
                                                       <span class="input-group-btn">
                                                            <a data-toggle="modal" href="#m_order_u" class="btn green-turquoise" title="Pilih Klien" onclick="ref_order_u();">
                                                                  <i class="fa fa-search"></i>
                                                            </a>
                                                        </span>
                                                   </div>
                                               </div>
                                               <div class="form-group">
                                                   <label>Klien</label>
                                                    <input type="text" id="klien" class="form-control" disabled>
                                               </div>
                                               <div class="form-group">
                                                   <label>Layanan</label>
                                                    <input type="text" id="layanan" class="form-control" disabled>
                                               </div>
                                               <div class="form-group">
                                                   <label>Deskripsi</label>
                                                    <input type="text" id="deskripsi" class="form-control" disabled>
                                               </div>
                                               <div class="form-group">
                                                   <label>Tagihan</label>
                                                    <input type="text" id="tagihan" class="form-control" disabled>
                                               </div>
                                               <div class="form-group">
                                                   <label>Tgl Order</label>
                                                    <input type="text" id="tgl_order" class="form-control" disabled>
                                               </div>
                                               <div class="form-group">
                                                   <label>Buat Akta</label>
                                                    <input type="text" id="buat_akta" class="form-control" disabled>
                                               </div>
                                               <div class="form-group">
                                                   <label>Cetak Akta</label>
                                                    <input type="text" id="cetak_akta" class="form-control" disabled>
                                               </div>
                                               <div class="form-group">
                                                   <label>Sisminbakum</label>
                                                    <input type="text" id="sisminbakum" class="form-control" disabled>
                                               </div>
                                                <div class="row btn-submit-m">
                                                    <div class="col-xs-3 col-md-3">
                                                        <input type="submit" class="btn btn-primary btnSave" value="Closing">
                                                    </div>
                                                    <div class="col-xs-3 col-md-3">
                                                        <input type="reset" class="btn btn-default btnSave" value="Detil">
                                                        <input type="submit" class="hidden" id="reset-closing-order">
                                                    </div>
                                                </div>
                                           </form>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" id="daftar_klien">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="caption-subject "> Hitung Ulang Transaksi</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div>
                                            <div class="row">
                                                <form id="hitung-ulang-transaksi">
                                                    <div class="col-md-7 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label>Bulan/Tahun</label>
                                                            <div class="row" >
                                                                <div class="col-md-6 col-xs-6">
                                                                    <select class="form-control s2" id="bln">
                                                                        <option value="1">Januari</option>
                                                                        <option value="2">Februari</option>
                                                                        <option value="3">Maret</option>
                                                                        <option value="4">April</option>
                                                                        <option value="5">Mei</option>
                                                                        <option value="6">Juni</option>
                                                                        <option value="7">Juli</option>
                                                                        <option value="8">Agustus</option>
                                                                        <option value="9">September</option>
                                                                        <option value="10">Oktober</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">Desember</option>

                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6 col-xs-6">
                                                                    <select class="form-control s2"  id="thn">
                                                                        <option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row btn-submit-m">
                                                            <div class="col-xs-3 col-md-3">
                                                                <input type="submit" class="btn btn-primary btnSave" value="Proses">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-asterisk"></i>
                                            <span class="caption-subject "> Set Nomor Repertorium Baru</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div>
                                            <div class="row">
                                                <form id="repertorium-baru">
                                                    <div class="col-md-7 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label>Mulai Nomor</label>
                                                            <input type="text" class="form-control" id="nilai_nomor">
                                                        </div>
                                                        <div class="row btn-submit-m">
                                                            <div class="col-xs-3 col-md-3">
                                                                <a class="btn btn-primary" onclick="updatenomor();" title="Simpan Data">
                                                                    Simpan
                                                                </a>
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
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <input type="hidden" value="<?php echo $nomor->Data[0]->repertorium; ?>" id="nmr">
        <?php $this->load->view("template/footer"); ?>
        <?php $this->load->view("template/modal/order_u"); ?>

        <!--[if lt IE 9]>
        <script src="<?php echo base_url("assets/js/ie-script/respond.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/ie-script/excanvas.min.js"); ?>"></script> 
        <script src="<?php echo base_url("assets/js/ie-script/ie8.fix.min.js"); ?>"></script> 
        <![endif]-->

        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>
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
        <script >

            var m_kywd="" , m_utama ="", m_table="";
            function set_order_u(selector)
            {
                nama = $(selector).attr("data-order");
                id = $(selector).attr("data-id");
                $("#nama_order").val(nama);
                $(".nama_order").val(nama);
                $("#id_order").val(id);
                $(".id_order").val(id);
                $('#m_order_u').modal('hide');
            }
            
            
            function ref_order_u()
            {
                get_modal_data("", "", "umum/data_order_u", "#list-order_u");
            }
            
            $("#form-search-order_u").submit(function(){
                search_data = $("#s-order_u").val();
                get_modal_data(search_data, "1", "umum/data_order_u", "#list-order_u");
                return false;
            })
            $(document).ready(function(){
                $(".s2").select2();
            })

            //Deteck change
            $("#m_order_u").on('hidden.bs.modal',function(){
                if($("#id_order").val() != "")
                {
                    getData($("#id_order").val());
                }
            })

            $("#closing-order").submit(function(){
                id_order = $("#id_order").val();
                $.ajax({
                    url:"<?php echo base_url('utility/closeOrder') ?>/"+id_order,
                    dataType: 'json',
                    success : function (resp)
                    {
                        console.log(resp);
                        notifShow('custom',"No Order "+id_order +" Berhasil di Close");
                        $("#closing-order")[0].reset();
                    }
                })
                return false;
            })

            function getData(id)
            {
                $.ajax({
                    url:"<?php echo base_url('utility/getData') ?>/"+id,
                    dataType:'json',
                    success:function(resp)
                    {   
                        result = resp.Data[0];
                        $("#klien").val(result['nama_klien']);
                        $("#layanan").val(result['nama_layanan']);
                        $("#deskripsi").val(result['deskripsi']);
                        $("#tgl_order").val(result['tgl_order']);
                        $("#buat_akta").val((result['sdh_buatakta'] == "0" ? "Belum" : "Sudah"));
                        $("#cetak_akta").val((result['sdh_cetakakta'] == "0" ? "Belum" : "Sudah"));
                        $("#sisminbakum").val((result['sisminbakum_sdh'] == "0" ? "Belum" : "Sudah"));
                        

                    }
                })
                tagihan(id);
            }

            function tagihan(id)
            {
                $.ajax({
                    url:"<?php echo base_url('utility/tagihan') ?>/"+id,
                    dataType:'json',
                    success:function(resp)
                    {   
                        $("#tagihan").val(returntoM(resp));
                    }
                })

            }

                function updatenomor()
                { 
                    var nomor = $("#nmr").val();
                    var param = {"repertorium" : $("#nilai_nomor").val()}  
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url(); ?>utility/setnomor/"+nomor,
                        data : {param : param},
                        dataType: 'json',
                        success : function (result){
                            notifShow("custom", "Nomor Repertorium berhasil diupdate");
                        }
                    });       
                }

            function hitungulang(){
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url(); ?>utility/hitungulang/",
                        data : {bln : $("#bln").val(), tahun : $("#thn").val()},
                        dataType: 'json',
                        success : function (result){
                            notifShow("custom", "Hitung ulang berhasil");
                        }
                    });     
            }
        </script>
        <script>
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
    </body>
</html>