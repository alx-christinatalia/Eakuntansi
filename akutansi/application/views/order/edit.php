<?php
    $dataOrder = $output->Data[0];

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
        <title>Edit Order| eNotaris.com</title>
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
            <?php $this->load->view("template/sidebar", ["active" => "order"]); ?>

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
                                    <h1>Tambah Order</h1>
                                </div>
                            </div>  
                            <div class="col-md-2 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">                                               
                                        <a class="btn btn-primary" onclick="_simpan();" title="Simpan Data">
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
                                        <form class="save_data" id="save_data" onsubmit="return false">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                <div id="notifikasi"></div>
                                                    <div class="form-group">
                                                        <label for="inputnama" class="control-label">Klien<font color="red">*</font></label>
                                                        <div class="input-group">
                                                            <input type="text" value="<?php echo $dataOrder->nama_klien ?>" id="nama_klien" rel="tooltip" class="form-control" title="* Wajib diisi.<br> Pilih klien dengan cara klik button atau mulai ketikkan nama.">
                                                            <input type="hidden" id="id_klien" value="<?php echo $dataOrder->id_klien ?>">
                                                            <span class="input-group-btn">
                                                                <a data-toggle="modal" href="#m_klien" id="btn_m_klien" class="btn green-turquoise" title="Pilih Klien" onclick="ref_klien();" >
                                                                      <i class="fa fa-search"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputnama" class="control-label">Layanan<font color="red">*</font></label>
                                                        <div class="input-group">
                                                            <input type="text" id="nama_layanan" rel="tooltip" value="<?php echo $dataOrder->nama_layanan ?>" title="* Wajib diisi.<br>Pilih layanan yang tersedia" class="form-control">
                                                            <input type="hidden" id="layanan" value="<?php echo $dataOrder->id_layanan ?>">
                                                            <span class="input-group-btn">
                                                                <a data-toggle="modal" href="#m_layanan" id="btn_m_layanan" onclick="ref_layanan();" class="btn green-turquoise" title="Pilih Layanan">
                                                                      <i class="fa fa-search"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi </label>
                                                        <input type="text" value="<?php echo $dataOrder->deskripsi ?>" name="nama" id="deskripsi" rel="tooltip"  class="form-control" title="* Tidak wajib diisi.<br/>Nomer berkas di kantor Notaris/PPAT, kosongi jika belum memiliki no berkas yang baku<br/>Contoh : BPT349" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No Akta </label>
                                                        <input type="text" name="nama" id="no_akta" rel="tooltip" value="<?php echo $dataOrder->no_akta ?>" class="form-control" title="* Tidak wajib diisi.<br/> No Akta yang akan muncul ketika pencetakan akta.<br/>Contoh : 6783" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No Berkas </label>
                                                        <input type="text" name="nama" value="<?php echo $dataOrder->no_berkas ?>" id="no_berkas" rel="tooltip"  class="form-control" title="* Tidak wajib diisi.<br/>Nomer berkas di kantor Notaris/PPAT, kosongi jika belum memiliki no berkas yang baku<br/>Contoh : BPT349" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Sifat Akta </label>
                                                        <input type="text" name="nama" id="sifat_akta" rel="tooltip" value="<?php echo $dataOrder->sifat_akta ?>"  class="form-control" title="* Tidak wajib diisi.<br/>Sifat dari akta.<br/>Contoh : Akta otentik" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputnama" class="control-label">Nama Officer</label>
                                                        <div class="input-group">
                                                            <input type="text" value="<?php echo $dataOrder->nama_officer ?>" class="form-control" rel="tooltip" id="nama_officer"  value="<?php echo $dataOrder->id_officer ?>" title="Pilih nama officer yang menerima berkas.">
                                                            <input type="hidden" id="id_officer">
                                                            <span class="input-group-btn">
                                                                <a data-toggle="modal" href="#m_officer" id="btn_m_officer" onclick="ref_officer();" class="btn green-turquoise" title="Pilih Officer">
                                                                      <i class="fa fa-search"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-md-checkboxes">
                                                        <label class="control-label"  style="color: black">Status</label>
                                                        <div class="md-checkbox-inline">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" onclick="noRekan();" id="is_closed" rel="tooltip" class="md-check" <?php  if($dataOrder->isnotrekanan == "1"){ 
                                                                    echo "checked"; } ?> >
                                                                <label for="is_closed">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Diserahkan Notaris Rekanan </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="notaris-rekanan">
                                                        <label>Notaris Rekanan</label>
                                                        <div class="input-group">
                                                            <input type="text" id="nama_notaris_rekanan" rel="tooltip" class="form-control" title="* Wajib diisi.<br> Pilih klien dengan cara klik button atau mulai ketikkan nama." value="<?php echo $dataOrder->nama_notaris_rekanan ?>" >
                                                            <input type="text" class="hide" value="<?php echo $dataOrder->id_notaris_rekanan ?>" id="id_notaris_rekanan">
                                                            <span class="input-group-btn">
                                                                <a data-toggle="modal" href="#m_notaris_rekanan" id="btn_m_notaris_rekanan" class="btn green-turquoise" title="Pilih Klien" onclick="ref_notaris_rekanan();" >
                                                                      <i class="fa fa-search"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal Order <font color="red">*</font></label>
                                                        <div class="input-group">
                                                            <input type="text" onblur="FormatDateField(this)" onfocus="this.select()" id="tgl_order" rel="tooltip" title="* Masukkan tanggal daftar Order" class="form-control" value="<?php  echo date("d-m-Y", strtotime($dataOrder->tgl_order)); ?>" >
                                                            <span class="input-group-addon" >
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Biaya </label>
                                                        <input type="text" value="<?php echo $dataOrder->biaya ?>" name="nama" id="biaya" rel="tooltip"  class="form-control" title="* Tidak wajib diisi.<br/>Biaya yang dibebankan ke klien untuk pembuatan akta ini.<br/>Contoh : 3.000.000" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Catatan </label>
                                                        <input type="text" name="nama" value="<?php echo $dataOrder->catatan ?>" id="catatan" rel="tooltip"  class="form-control" title="* Tidak wajib diisi.<br/>Catatan khusus untuk order ini.<br/>Contoh : Order segera diproses" >
                                                        <input type="submit" class="hide">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-md-2">
                                                            <a class="btn btn-primary" onclick="_simpan();" title="Simpan Data">
                                                            Simpan
                                                            </a> 
                                                        </div>
                                                        <div class="col-xs-4 col-md-2">
                                                            <a class="btn default" href="<?php echo base_url(); ?>order" title="Kembali ke halaman Order"> Batal
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
        <?php $this->load->view("order/modal/klien") ?>
        <?php $this->load->view("order/modal/layanan") ?>
        <?php $this->load->view("order/modal/officer") ?>
        <?php $this->load->view("order/modal/notaris_rekanan") ?>

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
           function klik()
            {
                console.log("tekan");
                return false;
            }
            console.log("<?php echo $dataOrder->nama_notaris_rekanan ?>");
            var m_kywd="" , m_utama ="", m_table="";
            var klien="" , layanan="",order="";
            $(document).ready(function() {
                //$( "#btn_m_klien" ).trigger( "click" );
                $("#nama_klien").focus();
                $('#tgl_order').datepicker({ dateFormat: 'dd-M-yy' }).val();
                //$( "#tgl_order").datepicker('setDate', new Date());
                if ($('#is_closed').is(":checked"))
                    {
                        $("#notaris-rekanan").removeClass("hidden");
                 //       $("#nama_notaris_rekanan").focus();
                    }else{
                        $("#notaris-rekanan").addClass("hidden");
                    }
                
            });
            //notaris-rekanan
                function noRekan()
                {

                    console.log("here langsung")
                    if ($('#is_closed').is(":checked"))
                    {
                        $("#notaris-rekanan").removeClass("hidden");
                        $("#nama_notaris_rekanan").focus();
                    }else{
                        $("#notaris-rekanan").addClass("hidden");
                    }
                }

            //Simpan Data
                //Jenis simpan
                    $(".save_data").submit(function(){

                        var kondisi = before_simpan();
                        console.log("save_data  = "+kondisi);
                        if(kondisi == "sukses"){
                            simpan();
                        }

                        return false;
                    })
                    function _simpan()
                    {
                        var kondisi = before_simpan();
                        console.log("save_data  = "+kondisi);
                        if(kondisi == "sukses"){
                            simpan();
                //             window.location.href = "<?php echo base_url(); ?>order";
                             console.log("dekkene");
                        }

                        return false;
                    }
                //end jenis simpan
                function simpan()
                {
                    var closed = "";
                    if ($('#is_closed').is(":checked"))
                    {
                      closed = "1";
                    }else{
                        closed = "0";
                    }
                    console.log(closed);
                    var param = {'nama_klien'           : $('#nama_klien').val(),
                                 'id_klien'             : $('#id_klien').val(),
                                 'layanan'              : $('#id_layanan').val(),
                                 'nama_layanan'         : $('#nama_layanan').val(),
                                 'deskripsi'            : $('#deskripsi').val(),
                                 'no_akta'              : $('#no_akta').val(),
                                 'no_berkas'            : $('#no_berkas').val(),
                                 'sifat_akta'           : $('#sifat_akta').val(),
                                 'id_officer'           : $('#id_officer').val(),
                                 'nama_officer'         : $('#nama_officer').val(),
                                 'isnotrekanan'         : closed,
                                 'tgl_order'            : $('#tgl_order').val(),
                                 'biaya'                : $('#biaya').val(),
                                 'catatan'              : $('#catatan').val(),
                                 'nama_notaris_rekanan' : (closed == "0" ? "" : $('#nama_notaris_rekanan').val() ),
                                 'id_notaris_rekanan'   : (closed == "0" ? "" : $('#id_notaris_rekanan').val() )}    
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url(); ?>order/edit/"+<?php echo $dataOrder->_id ?>,
                        data : {param : param},
                        dataType: 'json',
                        success : function (result){
                            console.log(result);
                            window.location.href = "<?php echo base_url(); ?>order";
                        }
                    });
                }
                function before_simpan()
                {
                    klien       = $("#nama_klien").val();
                    layanan     = $("#nama_layanan").val();
                    tgl_order   = $("#tgl_order").val();

                    kondisi = "";
                    if((klien != "") && (layanan != "") && (tgl_order != "") )
                    {
                        kondisi = "sukses";
                    }else
                    {
                        notifShow("error", "Masukkan data formulir dengan benar");
                        kondisi = "gagal";
                        cekfocus();
                    }
                    console.log("Before simpan = "+kondisi);
                    return kondisi;
                }
                function cekfocus()
                {
                    if(klien == ""){
                        $( "#btn_m_klien" ).trigger( "click" );
                    }else if (layanan == ""){
                        $( "#btn_m_layanan" ).trigger( "click" );
                    }else if(tgl_order == ""){
                        $("#tgl_order").focus();
                    }

                }
            //End Simpan Data
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
            function set_klien(selector)
            {
                nama = $(selector).attr("data-klien");
                id = $(selector).attr("data-id");
                $("#nama_klien").val(nama);
                $("#id_klien").val(id);
                $('#m_klien').modal('hide');
            }

            function set_layanan(selector)
            {
                nama = $(selector).attr("data-layanan");
                id = $(selector).attr("data-id");
                $("#nama_layanan").val(nama);
                $("#id_layanan").val(id);
                $('#m_layanan').modal('hide');
            }

            function set_officer(selector)
            {
                nama = $(selector).attr("data-officer");
                id = $(selector).attr("data-id");
                $("#nama_officer").val(nama);
                $("#id_officer").val(id);
                $('#m_officer').modal('hide');
            }

            function set_notaris_rekanan(selector)
            {
                nama = $(selector).attr("data-notaris-rekanan");
                id = $(selector).attr("data-id");
                $("#nama_notaris_rekanan").val(nama);
                $("#id_notaris_rekanan").val(id);
                $('#m_notaris_rekanan').modal('hide');
            }
        </script>
        <script>
        //fungsi menekan search modal
            function ref_klien()
            {
                get_modal_data("", "" , "order/data_klien", "#list-klien");
            }
            function ref_layanan()
            {
                get_modal_data("", "", "order/data_layanan", "#list-layanan");
            }
            function ref_officer()
            {
                get_modal_data("", "", "order/data_officer", "#list-officer");
            }
            function ref_notaris_rekanan()
            {
                get_modal_data("", "", "order/data_notaris_rekanan", "#list-notaris-rekanan");
            }
        </script>
        <script>
        //search
            $("#form-search-klien").submit(function(){
                search_data = $("#s-klien").val();
                get_modal_data(search_data, "" , "order/data_klien", "#list-klien");   
                return false;
            })

            $("#form-search-layanan").submit(function(){
                search_data = $("#s-layanan").val();
                get_modal_data(search_data, "", "order/data_layanan", "#list-layanan"); 
                return false;
            })

            $("#form-search-officer").submit(function(){
                search_data = $("#s-officer").val();
                get_modal_data(search_data, "", "order/data_officer", "#list-officer");
                return false;
            })
            $("#form-search-notaris-rekanan").submit(function(){
                search_data = $("#s-notaris-rekanan").val();
                get_modal_data(search_data, "", "order/data_notaris_rekanan", "#list-notaris-rekanan");
                return false;
            })
        </script>
        <script>
        //UX
            //autofocus modal
                $('#m_klien').on('shown.bs.modal', function() {
                    $("#s-klien").focus();
                });
                $('#m_layanan').on('shown.bs.modal', function() {
                    $("#s-layanan").focus();
                });
                $('#m_officer').on('shown.bs.modal', function() {
                    $("#s-officer").focus();
                });
                $('#m_notaris_rekanan').on('shown.bs.modal', function() {
                    $("#s-notaris-rekanan").focus();
                });
            //end autofocus modal


            //autofocus all form
                $("#m_klien").on('hidden.bs.modal',function(){
                    if(($("#nama_layanan").val()) == "")
                        $( "#btn_m_layanan" ).trigger( "click" );
                })
                $("#m_layanan").on('hidden.bs.modal',function(){
                    $( "#deskripsi" ).focus();
                })
                $("#nama_klien").on('keydown', function(e) { 
                  var keyCode = e.keyCode || e.which; 

                  if (keyCode == 192) { 
                    $( "#btn_m_klien" ).trigger( "click" );
                    // call custom function here
                  } 
                });
                $("#nama_layanan").on('keydown', function(e) { 
                  var keyCode = e.keyCode || e.which; 

                  if (keyCode == 192) { 
                    $( "#btn_m_layanan" ).trigger( "click" );
                    // call custom function here
                  } 
                });
                $("#nama_officer").on('keydown', function(e) { 
                  var keyCode = e.keyCode || e.which; 

                  if (keyCode == 192) { 
                    $( "#btn_m_officer" ).trigger( "click" );
                    // call custom function here
                  } 
                });

                $("#nama_notaris_rekanan").on('keydown', function(e) { 
                  var keyCode = e.keyCode || e.which; 

                  if (keyCode == 192) { 
                    $( "#btn_m_notaris_rekanan" ).trigger( "click" );
                    // call custom function here
                  } 
                });
            //end autofocus all form
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
        //autoComplete

            $( "#nama_klien" ).autocomplete({
              source: "<?php echo base_url('order/getdatabase/notarisklien/nama/?') ?>"
            } );

            $( "#nama_layanan" ).autocomplete({
              source: "<?php echo base_url('order/getdatabase/masterlayanan/nama/?') ?>"
            } );

            $( "#nama_officer" ).autocomplete({
              source: "<?php echo base_url('order/getdatabase/notarisofficer/nama/?') ?>"
            } );

            $( "#nama_notaris_rekanan" ).autocomplete({
              source: "<?php echo base_url('order/getdatabase/notarisrekanan/nama/?') ?>"
            } );
        </script>
    </body>
</html>