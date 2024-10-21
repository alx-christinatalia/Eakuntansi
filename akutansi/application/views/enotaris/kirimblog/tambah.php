<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Kirim Blog | eNotaris.com</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for bootstrap markdown & wysiwyg editors" name="description" />
        <meta content="" name="author" />

        <link href="<?php echo base_url("assets/css/font.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/simple-line-icons/simple-line-icons.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/bootstrap-toastr/toastr.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/select2/css/select2.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/select2/css/select2-bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/css/components-rounded.css"); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url("assets/css/plugins.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/css/layout.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/css/themes/default.css"); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/global/plugins/bootstrap-summernote/summernote.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/css/opentip.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/css/jquery-ui.css"); ?>" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo/favicon.ico"); ?>">
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-32x32.png"); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-16x16.png"); ?>" sizes="16x16" />

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
            <?php $this->load->view("template/sidebar", ["active" => "enotaris", "sub" => "kirimblog"]); ?>

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
                                    <h1>Tambah Blog</h1>
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
                        <div class="row ">
                            <div class="col-md-12">
                                <!-- BEGIN SAMPLE FORM PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-body">
                                        <form class="form-horizontal save_data" role="form" id="save_data">
                                            <div class="form-group">
                                                <label for="inputnotelp" class="col-md-2 control-label">Judul <font color="red">*</font></label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" rel="tooltip" name="judul" id="judul" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnotelp" class="col-md-2 control-label">SEO <font color="red">*</font></label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" rel="tooltip" name="seo" id="seo" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnotelp" class="col-md-2 control-label">Ringkasan <font color="red">*</font></label>
                                                <div class="col-md-6">
                                                    <textarea class="form-control" rel="tooltip" name="ringkasan" id="ringkasan" rel="tooltip" title="* Wajib diisi. <br>Alamat sesuai alamat si wajib pajak." rows="5"></textarea>
                                                </div>
                                            </div>
                                                <div class="form-group last">
                                                    <label class="control-label col-md-2">Isi</label>
                                                    <div class="col-md-8">
                                                        <div name="summernote" id="summernote_1" class="isi"> </div>
                                                    </div>
                                                </div>
                                            <div class="form-group">
                                                <label for="inputnotelp" class="col-md-2 control-label">Sumber <font color="red">*</font></label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" rel="tooltip" name="sumber" id="sumber" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnotelp" class="col-md-2 control-label">Catatan <font color="red">*</font></label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" rel="tooltip" name="cat" id="cat" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnotelp" class="col-md-2 control-label">Tanggal <font color="red">*</font></label>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <input type="text" id="tgl" name="tgl" rel="tooltip" title="* Masukkan tanggal bayar" class="form-control" required>
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-offset-2 col-md-1">
                                                    <a class="btn btn-primary" onclick="simpan1();" title="Simpan Data">Simpan</a> 
                                                </div>
                                                <div class="col-md-1">
                                                    <a class="btn btn-primary" onclick="simpan2();" title="Simpan Data">Simpan+</a> 
                                                </div>
                                                <div class="col-md-1" style="padding-left: 25px;">
                                                    <a class="btn default" href="<?php echo base_url(); ?>kirimblog">Batal</a>
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
        <script src="<?php echo base_url("assets/global/plugins/jquery.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/global/plugins/bootstrap/js/bootstrap.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/global/plugins/js.cookie.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/global/plugins/jquery.blockui.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/global/plugins/bootstrap-summernote/summernote.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/pages/scripts/components-editors.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/jquery.form.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/jquery-ui.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>
        <script>
            var c_date="";
             $(function() {
                $( "#tgl").datepicker('setDate', new Date());
              });
                $('#tgl').datepicker({ dateFormat: 'dd-mm-yy' }).val();
        </script>
        <script>
            //Simpan Data
                //Jenis simpan
                    $("#save_data").submit(function(){

                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>kirimblog";
                        }
                        return false;
                    })

                    function simpanatas()
                    {
                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>kirimblog";
                        }

                        return false;
                    }

                    function simpan1()
                    {
                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>kirimblog";
                        }

                        return false;
                    }

                    function simpanatasplus()
                    {
                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            //location.reload();
                        }

                        return false;
                    }

                    function simpan2()
                    {
                        var kondisi =  before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            //location.reload();
                        }

                        return false;
                    }
                function simpan()
                {
                    console.log("here");
                    var param = {
                             "judul" : $("#judul").val(),
                             "seo" : $("#seo").val(),
                             "ringkasan" : $("#ringkasan").val(),
                             "isi" : $(".isi").val(),
                             "sumber" : $("#sumber").val(),
                             "catatan" : $("#cat").val(),
                             "tgl" : $("#tgl").val()
                         }     
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url(); ?>kirimblog/simpan",
                        data : {param : param},
                        dataType: 'json',
                        success : function (result){
                            console.log(result);
                        }
                    });
                }

                function before_simpan()
                {
                    judul = $("#judul").val();
                    seo = $("#seo").val();
                    ringkasan = $("#ringkasan").val();
                    isi = $(".isi").val();
                    tgl = $("#tgl").val();

                    kondisi = "";

                    if((judul != "") && (seo != "") && (ringkasan != "") && (isi != "") && (tgl != ""))
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
                    if($("#judul").val() == "")
                    {
                     $('#judul').focus();  
                    }else if ($("#seo").val() == "")
                    {
                     $('#seo').focus();   
                    }else if ($("#ringkasan").val() == "")
                    {
                     $('#ringkasan').focus();   
                    }else if ($("#isi").val() == "")
                    {
                     $('.isi').focus();   
                    }else if ($("#tgl").val() == "")
                    {
                     $('#tgl').focus();   
                    }
                }
            //End Simpan Data
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