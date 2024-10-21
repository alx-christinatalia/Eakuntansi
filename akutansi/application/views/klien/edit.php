<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Edit Klien | eNotaris.com</title>
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
        <!-- END THEME LAYOUT STYLES -->
        <!-- Date Picker -->
        <link href="<?php echo base_url("assets/css/jquery-ui.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- End Date Picker -->
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
            }#tooltip
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
            <?php $this->load->view("template/sidebar", ["active" => "klien"]); ?>

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
                                    <h1>Edit Klien</h1>
                                </div>
                            </div>  
                            <div class="col-md-2 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">                                               
                                        <a class="btn btn-primary" onclick="_simpan();" >
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
                                        <form class="save_data" id="save_data">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                <div id="notifikasi"></div>
                                                    <div class="form-group">
                                                        <label>Nama <font color="red">*</font></label>
                                                        <input type="text" name="nama" id="nama" rel="tooltip" title="* Wajib diisi. Contoh : Eno Tari" class="form-control"  value="<?php echo $klien->Data[0]->nama; ?>" autofocus="focus" required>
                                                    </div>
                                                   <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" name="email" id="email" rel="tooltip" value="<?php echo $klien->Data[0]->email; ?>" class="form-control" title="* Tidak wajib diisi. Email yang aktif &#013; Contoh : info@enotaris.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No.Telepon <font color="red">*</font></label>
                                                        <input type="text" name="notelp" id="notelp" rel="tooltip" class="form-control" title="* Wajib diisi.No Telp/Hp yang bisa dihubungi Contoh : (0341)484248 / 085755332277" value="<?php echo $klien->Data[0]->notelp; ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <input type="text" name="alamat" id="alamat" rel="tooltip" class="form-control" value="<?php echo $klien->Data[0]->alamat; ?>" title="* Tidak wajib diisi.Alamat lengkap Contoh : Jl. Soekarno Hatta 15D Kec. Lowokwaru">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Provinsi <font color="red">*</font></label>
                                                        <select class="form-control" name="id_prov" id="provinsi" rel="tooltip" title="* Wajib diisi Pilih provinsi.Default dari Provinsi adalah lokasi provinsi Notaris/PPAT" required>
                                                            <option value="">Pilih Nama Provinsi</option>
                                                            <?php foreach($prov->Data as $data) { 
                                                                    echo "<option value='$data->id'>$data->name</option>";
                                                                } ?>
                                                        </select>

                                                        <input type="hidden" id="nama_prov" value="<?php echo $klien->Data[0]->nama_prov ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kabupaten/Kota <font color="red">*</font></label>
                                                        <select class="form-control" name="id_kabkota" id="kota" rel="tooltip" title="* Wajib disi Pilih Kab/Kota. Default dari Kab/Kota adalah lokasi Notaris/PPAT" required>
                                                            <option value="">Pilih Nama Kota</option>
                                                            
                                                        </select>

                                                        <input type="hidden" id="nama_kabkota" value="<?php echo $klien->Data[0]->nama_kabkota ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal daftar <font color="red">*</font></label>
                                                        <div class="input-group">
                                                            <input type="text" id="date" name="tgl_daftar" rel="tooltip" title="* Masukkan tanggal daftar klien" value="<?php echo date("d-m-Y", strtotime($klien->Data[0]->tgl_daftar)); ?>"  class="form-control myDate" required>
                                                            <span class="input-group-addon">

                                                     
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Catatan</label>
                                                        <input type="text" id="catatan" value="<?php echo $klien->Data[0]->catatan;  ?>" title="* Tidak wajib diisi.Catatan singkat mengenai klien. &#013;Contoh : klien finance" class="form-control" name="catatan">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-3 col-md-2">
                                                            <input type="submit" class="btn btn-primary btnSave" id="simpan1" value="Simpan">
                                                        </div>
                                                        <div class="col-xs-3 col-md-2">
                                                            <a class="btn default" href="<?php echo base_url(); ?>klien" > Batal
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="progress hidden progresSave">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                            0%
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
        <script>
             $( document ).ready(function() {
                convert_nama();
                $('#nama').focus(); 
             })

            function simpan(){

               convert_nama();
                var param = {"nama" : $("#nama").val(),
                             "email" : $("#email").val(),
                             "notelp" : $("#notelp").val(),
                             "alamat" : $("#alamat").val(),
                             "id_prov" : $("#provinsi option:selected").val(),
                             "id_kabkota" : $("#kota option:selected").val(),
                             "tgl_daftar" : $("#date").val(),
                             "catatan" : $("#catatan").val(),
                             "nama_prov" : $("#nama_prov").val(),
                             "nama_kabkota" : $("#nama_kabkota").val()}
                $.ajax({
                    type : "post",
                    url : "<?php echo base_url(); ?>klien/edit",
                    data : {param : param , id : "<?php echo $klien->Data[0]->_id;  ?>"},
                    dataType: 'json',
                    success : function (result){
                        
                    }
                })
             }
             $("#simpan1").click(function() {

                convert_nama();
                 if(($("#notelp").val() != "") && ($("#nama").val() != "") && ($("#provinsi option:selected").val() != "")&& ($("#kota option:selected").val() != "")&& ($("#tgl_daftar").val() != ""))
                {
                    simpan();
                    window.location.href = "<?php echo base_url(); ?>klien";
                    
                }else
                {
                     $("#notifikasi").html(alertShow("alert-danger", "Isi Formulir dengan benar ... !"));
                     cek();
                }
                return false;
             }); 

            $("#save_data").submit(function(){
                convert_nama();
                 if(($("#notelp").val() != "") && ($("#nama").val() != "") && ($("#provinsi option:selected").val() != "")&& ($("#kota option:selected").val() != "")&& ($("#tgl_daftar").val() != ""))
                {
                    simpan();
                    window.location.href = "<?php echo base_url(); ?>klien";
                    
                }else
                {
                     $("#notifikasi").html(alertShow("alert-danger", "Isi Formulir dengan benar ... !"));
                     cek();
                }
                return false;
            });

             function _simpan()
             {
                 if(($("#notelp").val() != "") && ($("#nama").val() != "") && ($("#provinsi option:selected").val() != "")&& ($("#kota option:selected").val() != "")&& ($("#tgl_daftar").val() != ""))
                {
                    simpan();
                    window.location.href = "<?php echo base_url(); ?>klien";
                    
                }else
                {
                     $("#notifikasi").html(alertShow("alert-danger", "Isi Formulir dengan benar ... !"));
                     cek();
                    
                }
                return false;
             }
             // select kota
             $("#provinsi").change(function() {
                get_prov()
                convert_nama();
            }); 
             //default value
            $("#provinsi").val('<?php echo $klien->Data[0]->id_prov; ?>').trigger('change');
            $.when(get_prov()).done(function(){
                $("#kota").val('<?php echo $klien->Data[0]->id_kabkota; ?>').trigger('change'); 
            });
             function cek(){
                if($("#nama").val() == "")
                {
                 $('#nama').focus()  ;   
                }else if ($("#notelp").val() == ""){
                 $('#notelp').focus()  ;   
                }
                 
                 $('html, body').animate({ scrollTop: 0 }, 'slow');
             }
             function get_prov(){

                 provinsi = {provinsi : $('#provinsi option:selected').val()};
                return $.ajax({
                  type : "post",
                  url : '<?php echo base_url(); ?>klien/kota',
                  data :{provinsi : provinsi},
                  cache : false,
                  dataType: 'json',
                  success : function(result){
                    $('#kota').html(result["list_result"]);
                    convert_nama();
                  }
                  
                });
               convert_nama();
             }


             $("#kota").change(function() {
               convert_nama();
             })

             function convert_nama(){

                 var param = {
                             "id_prov" : $("#provinsi option:selected").val(),
                             "id_kabkota" : $("#kota option:selected").val()
                            }
                 $.ajax({
                  type : "post",
                  url : '<?php echo base_url(); ?>klien/nama_kota',
                  data :{param : param},
                  cache : false,
                  dataType: 'json',
                  success : function(result){
                    $('#nama_kabkota').val(result["kota"]);
                    $('#nama_prov').val(result["prov"]);
                    console.log(result["kota"])
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

            $("#id_kabkota").tooltip({
                title: function() {
                    return $(this).prev().attr("title");
                },
                placement: "auto"
            });


         </script>

         <script>

             $(".select2-container").tooltip({
                title: function() {
                    return $(this).prev().attr("title");
                },
                placement: "auto"
                });
             $("#provinsi").change( function(){
                 $("#kota").select2("open");
             });
             $("#kota").change( function(){
                 $("#date").focus();
             });
             //$("#kota").select2();
             $("#provinsi").select2({
                    width: "100%",
                });
             $("#kota").select2({
                    width: "100%",
                });
         </script>
    </body>
</html