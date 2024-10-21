<!DOCTYPE html>
<html lang="en">

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
            <?php $this->load->view("template/sidebar", ["active" => "administrator", "sub" => "notarisrekanan"]); ?>

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
                                    <h1>Notaris Rekanan</h1>
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
                    <div class="base-content">
                    <div class="row ">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-body">
                                    <form class="form-horizontal save_data" role="form" id="save_data">
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Nama <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" value="<?php echo $nr->Data[0]->nama; ?>" rel="tooltip" name="nama" id="nama" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">SK Notaris</label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" rel="tooltip" name="sknotaris" id="sknotaris" rel="tooltip" title="* Wajib diisi. <br>Alamat sesuai alamat si wajib pajak." rows="2"><?php echo $nr->Data[0]->sk_notaris; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">SK PPAT</label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" rel="tooltip" name="skppat" id="skppat" rel="tooltip" title="* Wajib diisi. <br>Alamat sesuai alamat si wajib pajak." rows="2"><?php echo $nr->Data[0]->sk_ppat; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Alamat Kantor</label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" rel="tooltip" name="alamatkantor" id="alamatkantor" rel="tooltip" title="* Wajib diisi. <br>Uraian Pembayaran berisi informasi tambahan  pembayaran."  rows="2"><?php echo $nr->Data[0]->alamat_kantor; ?></textarea></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputemail" class="col-md-2 control-label">Wilayah Kerja</label>
                                            <div class="col-md-3">
                                                    <select class="form-control nama_prov" id="provinsi">
                                                                <option value="">- Pilih Provinsi -</option>
                                                                <?php foreach($prov->Data as $data) { 
                                                                    echo "<option value='$data->id' data-nama='$data->name'>$data->name</option>";
                                                                } ?>
                                                    </select> 
                                                        <input type="hidden" id="id_prov" value="<?php echo $nr->Data[0]->id_prov; ?>" >
                                            </div>
                                            <div class="col-md-3">
                                                            <select class="form-control nama_kabkota" id="nama_kabkota">
                                                                <option value="">- Pilih Kota -</option>
                                                                <?php foreach($kota->Data as $data) { 
                                                                    echo "<option value='$data->id' data-nama='$data->name'>$data->name</option>";
                                                                } ?>
                                                            </select>
                                                <input type="hidden" id="id_kabkota" value="<?php echo $nr->Data[0]->id_kabkota; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Status</label>
                                            <div class="col-md-6">
                                                <div class="md-checkbox-inline">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="checkbox6" class="md-check">
                                                        <label for="checkbox6">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Aktif </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <input type="hidden" value="<?php echo $nr->Data[0]->aktif; ?>" id="aktif-edit">
                                            <input type="hidden" value="<?php echo date("Y-m-d"); ?>" id="date">
                                            <div class="col-md-offset-2 col-md-1">
                                                <a class="btn btn-primary" onclick="simpan1();" title="Simpan Data">Simpan</a> 
                                            </div>
                                            <div class="col-md-1" style="padding-left: 25px;">
                                                <a class="btn default" href="<?php echo base_url(); ?>notarisrekanan">Batal</a>
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
</div>

        <!-- BEGIN FOOTER -->
        <?php $this->load->view("template/footer"); ?>

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
                var aktif;

                $("#checkbox6").click(function(){
                    if ($("#checkbox6").is(':checked')){
                        aktif = "1";
                    }
                    else{
                        aktif = "0";
                    }
                });

            $(document).ready(function() {

                var aktif;

                $("#provinsi").val("<?php echo $nr->Data[0]->id_prov; ?>").change();
                $("#nama_kabkota").val("<?php echo $nr->Data[0]->id_kabkota; ?>").change();
                
                if ($("#aktif-edit").val()==1){
                  $("#checkbox6").prop("checked",true);
                  aktif = "1";
                }else{
                    aktif = "0";
                }

                $("#checkbox6").click(function(){
                    if ($("#checkbox6").is(':checked')){
                        aktif = "1";
                        alert
                    }
                    else{
                        aktif = "0";
                    }
                });
            }); 
        </script>

        <script>
        //wilayah
            $("#provinsi").change(function() {
                provinsi = $('#provinsi option:selected').val()
                if(provinsi != "")
                {
                    provinsi = {provinsi : provinsi};
                    $.ajax({
                      type : "post",
                      url : '<?php echo base_url(); ?>notarisrekanan/kota',
                      data :{provinsi : provinsi},
                      cache : false,
                      dataType: 'json',
                      success : function(result){
                        $('#nama_kabkota').html(result["list_result"]);
                        $("#nama_kabkota").val("<?php echo $nr->Data[0]->id_kabkota; ?>").change();
                      }
                    });    
                }else{
                    $('#nama_kabkota').html("<option value='$data->id'>- Pilih Kab/Kota -</option>");
                }
                

            }); 

            $("#nama_kabkota").select2();
            $("#provinsi").select2();

        </script>

        <script>
            //Simpan Data
                //Jenis simpan
                    $("#save_data").submit(function(){

                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>notarisrekanan";
                        }
                        return false;
                    })

                    function simpanatas()
                    {
                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>notarisrekanan";
                        }

                        return false;
                    }

                    function simpan1()
                    {
                        var kondisi = before_simpan();                        
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>notarisrekanan";
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
                             "nama" : $("#nama").val(),
                             "sk_notaris" : $("#sknotaris").val(),
                             "sk_ppat" : $("#skppat").val(),
                             "id_prov" : $(".nama_prov option:selected").val(),
                             "id_kabkota" : $(".nama_kabkota option:selected").val(),
                             "alamat_kantor" : $("#alamatkantor").val(),
                             "nama_prov" : $(".nama_prov option:selected").attr("data-nama"),
                             "nama_kabkota" : $(".nama_kabkota option:selected").attr("data-kota"),
                             "aktif" : aktif
                         }     
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url(); ?>notarisrekanan/edit",
                        data : {param : param , id : "<?php echo $nr->Data[0]->_id;  ?>"},
                        dataType: 'json',
                        success : function (result){
                            console.log(result);
                        }
                    });
                }

                function before_simpan()
                {
                    nama = $("#nama").val();

                    kondisi = "";

                    if(nama != "")
                    {
                        kondisi = "sukses";
                    }else
                    {
                        notifShow("error", "Masukkan data formulir dengan benar");
                        kondisi = "gagal";
                        $("#nama").focus();
                    }
                    return kondisi;
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
