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
            <?php $this->load->view("template/sidebar", ["active" => "agendasurat", "sub" => "suratmasuk"]); ?>

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
                                    <h1>Surat Masuk</h1>
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
                                            <label for="inputnama" class="col-md-2 control-label">Nama Officer <font color="red">*</font></label>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <input type="text" placeholder="Cari Officer" class="form-control" rel="tooltip" name="nofficer" id="nofficer" value="<?php echo $suratmasuk->Data[0]->nama_officer; ?>" rel="tooltip" title="* Wajib diisi. <br>Pilih nama officer yang menerima berkas." disabled> 
                                                    <span class="input-group-btn">
                                                        <a data-toggle="modal" href="#officer" onclick="ref_officer();" class="btn green-turquoise" title="Pilih Officer">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">No. Surat <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" name="nosurat"  value="<?php echo $suratmasuk->Data[0]->no_surat; ?>" id="nosurat" rel="tooltip" title="* Wajib diisi. <br>Nomor suratnya secara lengkap."> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Tgl Surat <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" id="date" value="<?php echo $suratmasuk->Data[0]->tgl_surat; ?>" name="date" rel="tooltip" title="* Masukkan tanggal surat" class="form-control" required>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-2 control-label">Perihal <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" rel="tooltip" name="perihal" id="perihal" rel="tooltip" title="* Wajib diisi. <br>Perihal mengenai surat yang dituliskan." rows="2"><?php echo $suratmasuk->Data[0]->perihal; ?></textarea></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Asal Surat <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" value="<?php echo $suratmasuk->Data[0]->asal_surat; ?>" rel="tooltip" name="asalsurat" id="asalsurat" rel="tooltip" title="* Wajib diisi. <br>Dari siapa surat tersebut."> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Disposisi <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text"  value="<?php echo $suratmasuk->Data[0]->disposisi; ?>" class="form-control" rel="tooltip" name="disposisi" id="disposisi" rel="tooltip" title="* Wajib diisi. <br>Disposisi (KBBI=<i>pendapat seorang pejabat mengenai urusan yang termuat dalam suatu surat dinas , yang langsung dituliskan pada surat yang bersangkutan atau pada lembar khusus</i>)<br>KBBI = Kamus Besar Bahasa Indonesia."> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputemail" class="col-md-2 control-label">Catatan <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" rel="tooltip" name="catatan" id="catatan" rel="tooltip" title="* Wajib diisi. <br>Catatan atau keterangan mengenai surat." rows="2"><?php echo $suratmasuk->Data[0]->catatan; ?></textarea></div>
                                        </div>
                                        <div class="row">
                                            <input type="hidden" id="id_officer">
                                            <div class="col-md-offset-2 col-md-1">
                                                <a class="btn btn-primary" onclick="simpan1();" title="Simpan Data">Simpan</a> 
                                            </div>
                                            <div class="col-md-1" style="padding-left: 25px;">
                                                <a class="btn default" href="<?php echo base_url(); ?>suratmasuk">Batal</a>
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
        <?php $this->load->view("agendasurat/suratmasuk/modal/officer"); ?>

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
            function ref_officer()
            {
                get_modal_data("", "" , "suratmasuk/dataofficer", "#list-officer");
            }
        </script>

        <script>
            //Simpan Data
                //Jenis simpan
                    $("#save_data").submit(function(){

                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>suratmasuk";
                        }
                        return false;
                    })

                    function simpanatas()
                    {
                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>suratmasuk";
                        }

                        return false;
                    }

                    function simpan1()
                    {
                        var kondisi = before_simpan();                        
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>suratmasuk";
                        }

                        return false;
                    }

                function simpan()
                {
                    var param = {
                             "nama_officer" : $("#nofficer").val(),
                             "no_surat" : $("#nosurat").val(),
                             "tgl_surat" : $("#date").val(),
                             "perihal" : $("#perihal").val(),
                             "asal_surat" : $("#asalsurat").val(),
                             "id_officer" : $("#id_officer").val(),
                             "disposisi" : $("#disposisi").val(),
                             "jenis_agenda" : "1",
                             "catatan" : $("#catatan").val()
                            }     
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url(); ?>suratmasuk/edit",
                        data : {param : param , id : "<?php echo $suratmasuk->Data[0]->_id;  ?>"},
                        dataType: 'json',
                        success : function (result){
                            console.log(result);
                        }
                    });
                }

                function before_simpan()
                {
                             officer = $("#nofficer").val();
                             nosurat = $("#nosurat").val();
                             date = $("#date").val();
                             perihal = $("#perihal").val();
                             asalsurat = $("#asalsurat").val();
                             disposisi = $("#disposisi").val();
                             catatan  = $("#catatan").val();

                    kondisi = "";

                    if((officer != "") && (nosurat != "") && (date != "") && (perihal != "") && (asalsurat != "") && (disposisi != "") && (catatan != ""))
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
                    if($("#nofficer").val() == "")
                    {
                     $('#nofficer').focus();  
                    }else if ($("#nosurat").val() == "")
                    {
                     $('#nosurat').focus();   
                    }else if ($("#date").val() == "")
                    {
                     $('#date').focus();   
                    }else if ($("#perihal").val() == "")
                    {
                     $('#perihal').focus();   
                    }else if ($("#asalsurat").val() == "")
                    {
                     $('#asalsurat').focus();   
                    }else if ($("#disposisi").val() == "")
                    {
                     $('#disposisi').focus();   
                    }else if ($("#catatan").val() == "")
                    {
                     $('#catatan').focus();   
                    }
                }
            //End Simpan Data
        </script>

        <script>
        var kywd= "", hal = 1;
        var m_kywd="" , m_utama ="", m_table="";

             $("#frmofficer").submit(function() {
                search_data = $("#s_officer").val();
                get_modal_data(search_data, "" , "suratmasuk/dataofficer", "#list-officer");   
                return false;
                
             })

            function get_officer(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>suratmasuk/dataofficer",
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



                        $("#list-officer").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function set_officer(selector){
                nama = $(selector).attr("data-nama");
                id = $(selector).attr("data-id");
                $("#nofficer").val(nama);
                $("#id_officer").val(id);
                $('#officer').modal('hide');
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
