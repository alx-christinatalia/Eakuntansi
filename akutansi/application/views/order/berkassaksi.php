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
        <title>Berkas Saksi | eNotaris.com</title>
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
                                    <h1>Berkas Saksi</h1>
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
                                                <li><a role="button" href="<?php echo base_url('order/order-proses/'.$dataOrder->_id) ;?>" > Monitoring Proses </a></li>
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
                                                    <td><?php echo $dataOrder->tgl_order; ?></td>
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
                                            <span class="caption-subject font-dark bold uppercase">Para Saksi</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-container">
                                            <table class="table table-hover table-striped table-bordered table-detail">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10%; text-align: center">Aksi</th>
                                                        <th style="width: 45%">Nama</th>
                                                        <th style="width: 45%">Identitas</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tb-pr-saksi">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-bars "></i>
                                            <span class="caption-subject font-dark bold uppercase">Tambah Saksi</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form id="fSaksi" onsubmit="return false">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Nama Saksi </label><font color="red">*</font>
                                                        <div class="input-group">
                                                            <input type="hidden" id="_id">
                                                            <input type="hidden" id="id_order" value="<?php echo $dataOrder->_id ?>">
                                                            <input type="text" id="nama" rel="tooltip" class="form-control" title="* Wajib diisi.<br/> Pilih pihak saksi dari kantor notaris.">
                                                            <span class="input-group-btn">
                                                                <a data-toggle="modal" href="#m_saksi" id="btn_m_saksi" class="btn green-turquoise" title="Pilih Saksi" onclick="ref_saksi();" >
                                                                      <i class="fa fa-search"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <label>Keterangan </label><font color="red">*</font>
                                                            <textarea type="text"  rel="tooltip"  class="form-control" id="ket" title="* Wajib diisi.<br/>Diisi dengan keterangan pengurus. Contoh : Lahir di Malang, pada tanggal 28(dua puluh delapan) SEPTEMBER 1988 (seribu sembilan ratus delapan puluh delapan), Warga Negara Indonesia, Karyawan Swasta, bertempat tinggal di Malang, Jalan Pasir Luhur 28, Rukun Tetangga 007, Rukun Warga 002, Desa Jenggolo, Kecamatan Kepanjen, Pemegang Kartu Tanda Penduduk dengan Nomor Induk Kependudukan 3507132809880001;"></textarea>
                                                                <span class="input-group-btn" style="padding-top: 7px;">
                                                                    <a data-toggle="modal" href="#template" onclick="ambiltem();" class="btn green-turquoise" title="Pilih Template">
                                                                      <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-md-2">
                                                            <input type="submit" name="Simpan" class="hidden" id="btn-submit">
                                                            <a class="btn btn-primary" onclick="btnSimpanSaksi();" title="Simpan Data">
                                                            Simpan
                                                            </a> 
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <?php echo $this->load->view('order/modal/saksi') ?>
                                <?php $this->load->view("template/modal/template") ?>
                            </div>

                            <!--div-->
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
                tblBerkasSaksi();
            })

            //template
            function pakaitem(){
                $("#ket").val($("#teks").val());
            }

            function updatetem(){
                var _id =  $("#idt").val();
                var param = {"isi_tem" : $("#teks").val()}
                $.ajax({
                    type : "post",
                    url : "<?php echo base_url(); ?>order/updtem",
                    data : {param : param, id: _id },
                    dataType: 'json',
                    success : function (result){}
                });
            }

            function ambiltem(){
               $.ajax({
                    type: 'POST',
                    url: "<?php echo base_url(); ?>order/ambiltem",
                    dataType: "json",
                    success: function (data) {
                        var result = data.Data[0]; 

                        if(result != null){
                            $("#teks").val(result.isi_tem);
                            $("#idt").val(result._id);
                            $("#template").modal("show");
                            $('#template').on('shown.bs.modal', function() {
                                $("#teks").focus();
                            });
                        }
                    }
                });
            }

                function btnSimpanSaksi()
                {
                    $("#btn-submit").trigger("click");
                }
             function tblBerkasSaksi()
                {

                    $.ajax({
                        type: "post",
                        url : "<?php echo base_url('order/tblBerkasSaksi/'.$dataOrder->_id) ?>",
                        dataType: 'json',
                        success : function (result){
                            $("#tb-pr-saksi").html(result['list-data']);
                        }
                    })
                    
                }
        </script>

        <script>
        //fungsi modal agar berisi dan bisa pagination
            function get_modal_data(m_kywd, m_hal , m_utama, m_table)
            {
                m_hal = (m_hal < 1) ? "1" : m_hal; 
                console.log("hal: "+m_hal+" kywd: "+m_kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>"+m_utama,
                        data: {param : {"page":m_hal, "kywd":m_kywd}},
                        dataType: "json",
                        success: function (result) {

                            page = result.paging.HalKe;

                            if(result.paging.IsNext == true) {
                                $(".btnNext").attr("data-page", (page + 1));  
                                $(".btnNext").removeClass("disabled");
                            }else{
                                $(".btnNext").addClass("disabled");
                            }

                            if(result.paging.IsPrev == true) {
                                $(".btnPrev").attr("data-page", (page - 1));
                                $(".btnPrev").removeClass("disabled");
                            } else {
                                $(".btnPrev").addClass("disabled");
                            }



                        $(m_table).html(result["list_result"]);
                        }
                   });
            }
            
            function nextPageM(selector) {
                var m_hal = $(selector).attr("data-page");
                m_table = $(selector).attr("table");
                m_utama = $(selector).attr("utama");
                get_modal_data(m_kywd, m_hal, m_utama, m_table);
                console.log(" kywd : "+m_kywd+" hal : "+m_hal+" utama : "+m_utama+" table : "+m_table);
            }

            function prevPageM(selector) {
                var m_hal = $(selector).attr("data-page");
                m_table = $(selector).attr("table");
                m_utama = $(selector).attr("utama");
                get_modal_data(m_kywd, m_hal, m_utama, m_table);
                console.log(" kywd : "+m_kywd+" hal : "+m_hal+" utama : "+m_utama+" table : "+m_table);
            }
        </script>
        <script>
        //set data ke form
            function set_saksi(selector)
            {
                nama = $(selector).attr("data-saksi");
                ket = $(selector).attr("data-ket");
                $("#nama").val(nama);
                $("#ket").val(ket);
                $('#m_saksi').modal('hide');
            }
        </script>
        <script>
        //fungsi menekan search modal
            function ref_saksi()
            {
                get_modal_data("", "", "order/data_saksi", "#list-saksi");
            }
        </script>
        <script>
        //search
            $("#form-search-saksi").submit(function(){
                search_data = $("#s-saksi").val();
                get_modal_data(search_data, "" , "order/data_saksi", "#list-saksi");   
                return false;
            })
        </script>
        <script>
        //Saksi
            //simpan
                $("#fSaksi").submit(function(){
                        if ($("#nama").val() != "" && $("#ket").val() != ""){
                            param = {"nama"         : $("#nama").val(),
                                     "id_order"     : $("#id_order").val(),
                                     "ket"          : $("#ket").val()}
                            $.ajax({
                                type: "POST",
                                data: {param:param , _id : $("#_id").val()},
                                url: "<?php echo base_url('order/simpansaksi') ?>",
                                dataType : "json",
                                success : function(result){
                                    console.log(result);
                                    tblBerkasSaksi();
                                    notifShow("custom", "Badan Usaha Berhasil Disimpan");
                                    refForm();
                                }
                            })    
                        }else{
                            notifShow("error", "Masukkan data formulir dengan benar");
                            if($("#nama").val() == ""){
                                $("#nama").focus();
                            }else{
                                $("#ket").focus();
                            }
                        }
                    })
            //end simpan
            //Edit Data
                function editPihak(selector)
                {
                    var id = $(selector).attr("data-id");
                    console.log(id);
                    $.ajax({
                        type: "post",
                        url : "<?php echo base_url('order/editberkaspihak') ?>/"+id,
                        dataType: 'json',
                        success : function (data){
                            console.log(id);
                            var result = data.Data[0];
                            $("#_id").val(id);           
                            $("#nama").val(result['nama']);
                            $("#ket").val(result['ket']);
                        }
                    })
                }
            //End Edit Data
            //Load Data

                
            //End Load Data
            //Delete Data
                function delSaksi(selector)
                {
                    id = $(selector).attr('data-id');
                    nama = $(selector).attr('data-nama');
                    $("#delMSaksi").modal('show');
                    $("#Delete-name").html(nama);
                    $('#delete-id').html(id);
                }
                function goDel()
                {
                    id = $("#delete-id").html();
                    id_order = "<?php echo $dataOrder->_id ?>"
                    $.ajax({
                        type: 'POST',
                        url:  "<?php echo base_url(); ?>order/delBerkasSaksi/" + id,
                        data: {id_order:id_order},
                        cache: false,
                        dataType: 'json',
                         success : function(result){

                                tblBerkasSaksi();
                                notifShow('custom','Data berhasil dihapus');
                                console.log(result);
                            }
                            
                            
                          
                        }) 

                    return false;
                }

                function refForm()
                {
                    $("#nama").val("");
                    $("#ket").val("");
                    $("#_id").val("");
                }
            //End Delte data
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
    </body>
</html>
