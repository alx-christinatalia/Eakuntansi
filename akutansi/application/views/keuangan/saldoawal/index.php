<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Tambah Data | eNotaris.com</title>
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
            <?php $this->load->view("template/sidebar", ["active" => "keuangan", "sub" => "saldoawal"]); ?>

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
                                    <h1>Saldo Awal</h1>
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
                        <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-body">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-2 control-label">Kontak</label>
                                            <div class="col-md-3">
                                                    <select class="form-control kontak">
                                                        <option>Pilih</option>
                                                        <option value="kontak">Kontak</option>
                                                        <option value="klien">Klien</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-btn">
                                                        <a data-toggle="modal" href="#cari" class="btn green-turquoise" title="Cari">
                                            <i class="fa fa-search"></i>
                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <a href="<?php echo base_url("index.php/cfile/plusklien"); ?>" class="btn green" title="Tambah Klien">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Tanggal</label>
                                            <div class="col-md-4">
                                                <div class="input-group input-medium date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                    <input type="text" class="form-control" readonly>
                                                    <span class="input-group-btn">
                                                        <button class="btn default" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputalamat" class="col-md-2 control-label">Uraian</label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" rows="3"></textarea> </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-2 control-label">Akun</label>
                                            <div class="col-md-3">
                                                    <select class="form-control">
                                                        <option>1101 - Kas Kecil</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-3">
                                                    <input type="text" class="form-control">
                                            </div>
                                            <a href="<?php echo base_url("index.php/cfile/plusklien"); ?>" class="btn green" title="Tambah Klien">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                            <a href="<?php echo base_url("index.php/cfile/plusklien"); ?>" class="btn default" title="Tambah Klien">
                                                <i class="fa fa-minus"></i>
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-2 control-label">Referensi</label>
                                            <div class="col-md-3">
                                                    <select class="form-control">
                                                        <option>Order</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-btn">
                                                        <a data-toggle="modal" href="#order" class="btn green-turquoise" title="Cari Order">
                                            <i class="fa fa-search"></i>
                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <a href="<?php echo base_url("index.php/cfile/plusklien"); ?>" class="btn green" title="Tambah Klien">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">File</label>
                                            <div class="col-md-4">
                                                <input type="file" name="userfile" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-offset-2 col-md-10">
                                            <button type="submit" class="btn green">Simpan</button>
                                            <button type="button" class="btn default">Batal</button>
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
</div>

        <!-- BEGIN FOOTER -->
        <?php $this->load->view("template/footer"); ?>
        <?php $this->load->view("pajak/ssp/modal/map"); ?>
        <?php $this->load->view("pajak/ssp/modal/npwp"); ?>

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
        var c_date = "";

             $( function() {
                $( "#date").datepicker('setDate', new Date());
              } );

                $('#date').datepicker({ dateFormat: 'dd-mm-yy' }).val();

        //fungsi modal agar berisi dan bisa pagination
            $(document).ready(function() {
                $('#pnpwp').focus();
                        $("#stp").prop("disabled", true);
                            console.log("add");
            
            });

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
            
            function nextPage(selector) {
                var m_hal = $(selector).attr("data-page");
                m_table = $(selector).attr("table");
                m_utama = $(selector).attr("utama");
                get_modal_data(m_kywd, m_hal, m_utama, m_table);
                console.log(" kywd : "+m_kywd+" hal : "+m_hal+" utama : "+m_utama+" table : "+m_table);
            }

            function prevPage(selector) {
                var m_hal = $(selector).attr("data-page");
                m_table = $(selector).attr("table");
                m_utama = $(selector).attr("utama");
                get_modal_data(m_kywd, m_hal, m_utama, m_table);
                console.log(" kywd : "+m_kywd+" hal : "+m_hal+" utama : "+m_utama+" table : "+m_table);
            }
        </script>

        <script>
        //fungsi menekan search modal
            function ref_map()
            {
                get_modal_data("", "" , "ssp/datamap", "#list-map");
            }
            function ref_npwp()
            {
                get_modal_data("", "" , "ssp/datanpwp", "#list-npwp");
            }
        </script>

        <script>
            //Simpan Data
                //Jenis simpan
                    $("#save_data").submit(function(){

                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>ssp";
                        }
                        return false;
                    })

                    function simpanatas()
                    {
                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>ssp";
                        }

                        return false;
                    }

                    function simpan1()
                    {
                        var kondisi = before_simpan();                        
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>ssp";
                        }

                        return false;
                    }

                    function simpanatasplus()
                    {
                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            location.reload();
                        }

                        return false;
                    }

                    function simpan2()
                    {
                        var kondisi =  before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            location.reload();
                        }

                        return false;
                    }
                function simpan()
                {
                    var param = {
                             "npwp" : $("#pnpwp").val(),
                             "nama_wp" : $("#nama").val(),
                             "alamat_wp" : $("#alamat").val(),
                             "map" : $("#kmap").val(),
                             "akun" : $("#idakun").val(),
                             "setoran" : $("#idsetoran").val(),
                             "uraian" : $("#uraian").val(),
                             "ket" : $("#ket").val(),
                             "masa_dari" : $("#t option:selected").val(),
                             "masa_sampai" : $("#bln option:selected").val(),
                             "tahun"  : $("#thn option:selected").val(),
                             "stp"  : $("#stp").val(),
                             "jml"  : $("#jml").val(),
                             "kota_pkp"  : $("#kota").val(),
                             "tgl_byr"  : $("#date").val(),
                             "penyetor"  : $("#penyetor").val(),
                             "tgl_input"  : $("#in").val(),
                         }     
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url(); ?>ssp/simpan",
                        data : {param : param},
                        dataType: 'json',
                        success : function (result){
                         console.log(result['Output']);
                         buatssp(parseInt(result['Output']));
                        }
                    });
                }

                function buatssp($id)
                {

                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url(); ?>ssp/asimpan/"+$id,
                        dataType: 'json',
                        success : function (result){    

                            console.log(result);
                        }
                    });
                }

                function before_simpan()
                {
                             pnpwp = $("#pnpwp").val();
                             nama = $("#nama").val();
                             alamat = $("#alamat").val();
                             kmap = $("#kmap").val();
                             uraian = $("#uraian").val();
                             ket = $("#ket").val();
                             t = $("#t option:selected").val();
                             bln = $("#bln option:selected").val();
                             thn = $("#thn option:selected").val();
                             stp = $("#stp").val();
                             jml  = $("#jml").val();
                             kota  = $("#kota").val();
                             date  = $("#date").val();
                             penyetor  = $("#penyetor").val();

                    kondisi = "";

                    if((pnpwp != "") && (nama != "") && (alamat != "") && (kmap != "") && (uraian != "") && (ket != "") && (t != "") && (bln != "") && (thn != "") && (stp != "") && (jml != "") && (kota != "") && (date != "") && (penyetor != ""))
                    {
                        kondisi = "sukses";
                    }else
                    {
                        notifShow("error", "Masukkan data formulir dengan benar");
                        kondisi = "gagal";
                        cekfocus();
                    }
                    return kondisi;
                }
                function cekfocus()
                {
                    if($("#pnpwp").val() == "")
                    {
                     $('#pnpwp').focus();  
                    }else if ($("#nama").val() == "")
                    {
                     $('#nama').focus();   
                    }else if ($("#alamat").val() == "")
                    {
                     $('#alamat').focus();   
                    }else if ($("#kmap").val() == "")
                    {
                     $('#kmap').focus();   
                    }else if ($("#uraian").val() == "")
                    {
                     $('#uraian').focus();   
                    }else if ($("#ket").val() == "")
                    {
                     $('#ket').focus();   
                    }else if ($("#t").val() == "")
                    {
                     $('#t').focus();   
                    }else if ($("#bln ").val() == "")
                    {
                     $('#bln').focus();  
                    }else if ($("#thn").val() == "")
                    {
                     $('#thn').focus(); 
                    }else if ($("#stp").val() == "")
                    {
                     $('#stp').focus();  
                    }else if ($("#jml").val() == "")
                    {
                     $('#jml').focus();   
                    }else if ($("#kota").val() == "")
                    {
                     $('#kota').focus();   
                    }else if ($("#date").val() == "")
                    {
                     $('#date').focus();   
                    }else if ($("#penyetor").val() == "")
                    {
                     $('#penyetor').focus();   
                    } 
                }
            //End Simpan Data
        </script>

        <script>
        var kywd= "", hal = 1;
        var m_kywd="" , m_utama ="", m_table="";

             $("#frmmap").submit(function() {
                search_data = $("#s_map").val();
                get_modal_data(search_data, "" , "ssp/datamap", "#list-map");   
                return false;
                
             })

             $("#frmnpwp").submit(function() {
                search_data = $("#s_npwp").val();
                get_modal_data(search_data, "" , "ssp/datanpwp", "#list-npwp");   
                return false;
                
             })

            function get_map(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ssp/datamap",
                        data: {param : {"page":hal, "kywd":kywd}},
                        dataType: "json",
                        success: function (result) {

                            page = result.paging.HalKe;

                            if(result.paging.IsNext == true) {
                                $("#btnNext").attr("data-page", (page + 1));  
                                $("#btnNext").removeClass("disabled");
                            }else{
                                $("#btnNext").addClass("disabled");
                            }

                            if(result.paging.IsPrev == true) {
                                $("#btnPrev").attr("data-page", (page - 1));
                                $("#btnPrev").removeClass("disabled");
                            } else {
                                $("#btnPrev").addClass("disabled");
                            }



                        $("#list-map").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function get_npwp(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ssp/datanpwp",
                        data: {param : {"page":hal, "kywd":kywd}},
                        dataType: "json",
                        success: function (result) {

                            page = result.paging.HalKe;

                            if(result.paging.IsNext == true) {
                                $("#btnNext").attr("data-page", (page + 1));  
                                $("#btnNext").removeClass("disabled");
                            }else{
                                $("#btnNext").addClass("disabled");
                            }

                            if(result.paging.IsPrev == true) {
                                $("#btnPrev").attr("data-page", (page - 1));
                                $("#btnPrev").removeClass("disabled");
                            } else {
                                $("#btnPrev").addClass("disabled");
                            }



                        $("#list-npwp").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function set_map(selector){
                map = $(selector).attr("data-map");
                uraian = $(selector).attr("data-uraian");
                ket = $(selector).attr("data-ket");
                id = $(selector).attr("data-id");
                akun = $(selector).attr("data-akun");
                setoran = $(selector).attr("data-setoran");
                $("#kmap").val(map);
                $("#uraian").val(uraian);
                $("#ket").val(ket);
                $("#idakun").val(akun);
                $("#idsetoran").val(setoran);
                $("#id_map").val(id);
                    if ($("#kmap").val() != ""){
                        $("#stp").prop("disabled", false);
                             console.log("remov");
                    }
                $('#mmap').modal('hide');
            }

            function set_npwp(selector){
                npwp = $(selector).attr("data-npwp");
                nama = $(selector).attr("data-nama");
                kota = $(selector).attr("data-kota");
                alamat = $(selector).attr("data-alamat");
                id = $(selector).attr("data-id");
                $("#pnpwp").val(npwp);
                $("#nama").val(nama);
                $("#kota").val(kota);
                $("#penyetor").val(nama);
                $("#alamat").val(alamat);
                $("#id_npwp").val(id);
                $('#mnpwp').modal('hide');
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

            $("#id_kabkota").tooltip({
                title: function() {
                    return $(this).prev().attr("title");
                },
                placement: "auto"
            });


         </script>
        <script>
            $("#t").select2();
            $("#bln").select2();
            $("#thn").select2();
            $("#t").change(function(){
                $("#bln").select2("open");
            })
            $("#bln").change(function(){
                $("#thn").select2("open");
            })
        </script>
</body>

</html>
