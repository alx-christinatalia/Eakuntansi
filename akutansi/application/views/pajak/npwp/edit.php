<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Edit Data | eNotaris.com</title>
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
            <?php $this->load->view("template/sidebar", ["active" => "pajak", "sub" => "npwp"]); ?>

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
                                    <h1>Pajak NPWP</h1>
                                </div>
                            </div>  
                            <div class="col-md-2 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">                                               
                                        <a class="btn btn-primary" onclick="simpanatas();" title="Simpan Data">
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
                                        <form class="save_data" id="fA">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                <div id="notifikasi"></div>
                                                   <div class="form-group">
                                                        <label>NPWP <font color="red">*</font></label>
                                                        <input type="text" name="npwp" id="npwp" rel="tooltip" class="form-control" title="* Wajib diisi. <br>Nomor Pokok Wajib Pajak." value="<?php echo $npwp->Data[0]->npwp; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama <font color="red">*</font></label>
                                                        <input type="text" name="nama" id="nama" rel="tooltip"  class="form-control" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak." value="<?php echo $npwp->Data[0]->nama; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat <font color="red">*</font></label>
                                                        <textarea name="alamat" id="alamat" rel="tooltip" class="form-control" title="* Wajib diisi. <br>Alamat sesuai alamat si wajib pajak." rows="2" =""><?php echo $npwp->Data[0]->alamat; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Desa/Kelurahan <font color="red">*</font></label>
                                                        <input type="text" name="kelurahan" id="kelurahan" rel="tooltip"  class="form-control" title="* Wajib diisi. <br>Kecamatan sesuai kecamatan si wajib pajak." value="<?php echo $npwp->Data[0]->kelurahan; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>RT/RW <font color="red">*</font></label>
                                                        <input type="text" name="rtrw" id="rtrw" rel="tooltip"  class="form-control" title="* Wajib diisi. <br>RT/RW sesuai RT/RW si wajib pajak." value="<?php echo $npwp->Data[0]->rtrw; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kecamatan <font color="red">*</font></label>
                                                        <div class="input-group">
                                                            <input type="text" placeholder="Kecamatan" id="kec" name="kec" class="form-control" rel="tooltip" title="* Wajib diisi. <br>Kabupaten/Kota sesuai Kabupaten/Kota si wajib pajak." disabled="" value="<?php echo $npwp->Data[0]->kec; ?>"> 
                                                                <input type="hidden" id="id_kota">
                                                                <span class="input-group-btn">
                                                                    <a data-toggle="modal" href="#cari" onclick="ref_kec();" class="btn green-turquoise" title="Pilih Kota">
                                                                          <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kabupaten/Kota <font color="red">*</font></label>
                                                        <input type="text" name="kota" id="kota" rel="tooltip"  class="form-control" title="* Wajib diisi. <br>Kota sesuai Kota si wajib pajak." value="<?php echo $npwp->Data[0]->kabkota; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kode Pos</label>
                                                        <input type="text" id="kodepos" class="form-control" name="kodepos" rel="tooltip" title="* Tidak wajib diisi. <br>Atau isi sesuai dengan kode pos si wajib pajak." value="<?php echo $npwp->Data[0]->kodepos; ?>">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-md-2">
                                                            <a class="btn btn-primary" onclick="simpan1();" title="Simpan Data">
                                                                Simpan
                                                            </a> 
                                                        </div>
                                                        <div class="col-xs-4 col-md-2">
                                                            <a class="btn default" href="<?php echo base_url(); ?>npwp"> Batal
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="progress hidden progresSave">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                            0%
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" value="<?php echo date("Y-m-d"); ?>" id="date">
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
        <?php $this->load->view("pajak/npwp/modal/cari"); ?>
        <?php $this->load->view("pajak/npwp/modal/carikec"); ?>

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
        //fungsi modal agar berisi dan bisa pagination
            $(document).ready(function() {
                $('#npwp').focus();
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
            function ref_kec()
            {
                get_modal_data("", "" , "npwp/datakota", "#list-kabkota");
            }
        </script>

        <script>
            //Simpan Data
                //Jenis simpan
                    $("#save_data").submit(function(){

                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>npwp";
                        }
                        return false;
                    })

                    function simpanatas()
                    {
                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>npwp";
                        }

                        return false;
                    }

                    function simpan1()
                    {
                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                             window.location.href = "<?php echo base_url(); ?>npwp";
                        }

                        return false;
                    }

                //end jenis simpan
                function simpan()
                {
                    var param = {"npwp" : $("#npwp").val(),
                             "nama" : $("#nama").val(),
                             "alamat" : $("#alamat").val(),
                             "kec" : $("#kec").val(),
                             "rtrw" : $("#rtrw").val(),
                             "kelurahan" : $("#kelurahan").val(),
                             "kabkota" : $("#kabkota").val(),
                             "kodepos" : $("#kodepos").val(),
                             "tgl_update"  : $("#date").val()}     
                    $.ajax({

                        type : "post",
                        url : "<?php echo base_url(); ?>npwp/edit",
                        data : {param : param , id : "<?php echo $npwp->Data[0]->_id;  ?>"},
                        dataType: 'json',
                        success : function (result){
                            if (result == "gagal"){
                               notifShow("error", "NPWP sudah terpakai!"); 
                               location.reload();
                            }else if (result == "sukses"){
                                //location.reload();
                            }

                        return false; 
                        }
                    });
                }

                function before_simpan()
                {
                    npwp = $("#npwp").val();
                    nama = $("#nama").val();
                    alamat = $("#alamat").val();
                    kec = $("#kec").val();
                    rtrw = $("#rtrw").val();
                    kelurahan = $("#kelurahan").val();
                    kabkota = $("#kabkota").val();
                    kodepos = $("#kodepos").val();
                    tgl_update = $("#date").val();

                    kondisi = "";

                    if((npwp != "") && (nama != "") && (alamat != "") && (kec != "") && (kelurahan != "") && (rtrw != "") && (kabkota != "") && (tgl_update != ""))
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
                    if($("#npwp").val() == "")
                    {
                     $('#npwp').focus();  
                    }else if ($("#nama").val() == "")
                    {
                     $('#nama').focus();   
                    }else if ($("#alamat").val() == "")
                    {
                     $('#alamat').focus();   
                    }else if ($("#kec").val() == "")
                    {
                     $('#kec').focus();   
                    }else if ($("#rtrw").val() == "")
                    {
                     $('#rtrw').focus();   
                    }else if ($("#kabkota").val() == "")
                    {
                     $('#kabkota').focus();   
                    }else if ($("#kelurahan").val() == "")
                    {
                     $('#kelurahan').focus();   
                    }
                }
            //End Simpan Data
        </script>

        <script>
        var kywd= "", hal = 1;
        var m_kywd="" , m_utama ="", m_table="";

             function focus_modal()
             {
                $("#s_kabkota").focus();
             }
             
             $("#frmkota").submit(function() {
                search_data = $("#s_kabkota").val();
                get_modal_data(search_data, "" , "npwp/datakota", "#list-kabkota");   
                return false;
                
             }) 

            function get_kota(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>npwp/datakota",
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



                        $("#list-kabkota").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function set_kota(selector){
                kota = $(selector).attr("data-kota");
                kec = $(selector).attr("data-kec");
                id = $(selector).attr("data-id");
                $("#kota").val(kota);
                $("#kec").val(kec);
                $("#id_kota").val(id);
                $('#cari').modal('hide');
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
    </body>
</html>
