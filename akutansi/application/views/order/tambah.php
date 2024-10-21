<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Tambah Order | eNotaris.com</title>
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
                                        <a class="btn btn-primary" onclick="simpanplus();" title="Simpan Data">
                                            <i class="fa fa-save"> +</i>
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
                                        <input type="hidden" id="simMethod">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                <div id="notifikasi"></div>
                                                    <div class="form-group">
                                                        <label for="inputnama" class="control-label">Klien<font color="red">*</font></label>
                                                        <div class="input-group">
                                                            <input type="text" id="nama_klien" rel="tooltip" class="form-control" title="* Wajib diisi.<br> Pilih klien dengan cara klik button atau mulai ketikkan nama." readonly>
                                                            <input type="hidden" id="id_klien">
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
                                                            <input type="text" id="nama_layanan" rel="tooltip" title="* Wajib diisi.<br>Pilih layanan yang tersedia" class="form-control" readonly>
                                                            <input type="hidden" id="id_layanan">
                                                            <input type="hidden" id="layanan">
                                                            <span class="input-group-btn">
                                                                <a data-toggle="modal" href="#m_layanan" id="btn_m_layanan" onclick="ref_layanan();" class="btn green-turquoise" title="Pilih Layanan">
                                                                      <i class="fa fa-search"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi </label>
                                                        <input type="text"  id="deskripsi" rel="tooltip"  class="form-control" title="* Tidak wajib diisi.<br/>Nomer berkas di kantor Notaris/PPAT, kosongi jika belum memiliki no berkas yang baku<br/>Contoh : BPT349" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No Akta </label>
                                                        <input type="text"  id="no_akta" rel="tooltip"  class="form-control" title="* Tidak wajib diisi.<br/> No Akta yang akan muncul ketika pencetakan akta.<br/>Contoh : 6783" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No Berkas </label>
                                                        <input type="text"  id="no_berkas" rel="tooltip"  class="form-control" title="* Tidak wajib diisi.<br/>Nomer berkas di kantor Notaris/PPAT, kosongi jika belum memiliki no berkas yang baku<br/>Contoh : BPT349" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Sifat Akta </label>
                                                        <input type="text"  id="sifat_akta" rel="tooltip"  class="form-control" title="* Tidak wajib diisi.<br/>Sifat dari akta.<br/>Contoh : Akta otentik" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputnama" class="control-label">Nama Officer</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" rel="tooltip" id="nama_officer"  title="Pilih nama officer yang menerima berkas.">
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
                                                                <input type="checkbox" onclick="noRekan();" id="is_closed" rel="tooltip" class="md-check">
                                                                <label for="is_closed">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box" style="z-index: auto"></span> Diserahkan Notaris Rekanan </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group hidden" id="notaris-rekanan">
                                                        <label>Notaris Rekanan</label>
                                                        <div class="input-group">
                                                            <input type="text" id="nama_notaris_rekanan" rel="tooltip" class="form-control" title="* Wajib diisi.<br> Pilih klien dengan cara klik button atau mulai ketikkan nama.">
                                                            <input type="hidden" id="id_notaris_rekanan">
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
                                                            <input type="text" onblur="FormatDateField(this)" onfocus="this.select()" id="tgl_order" rel="tooltip" title="* Masukkan tanggal daftar Order" class="form-control myDate" required>
                                                            <span class="input-group-addon" >
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Biaya </label>
                                                        <input type="text"  id="biaya" rel="tooltip"  class="form-control myMoney"  title="* Tidak wajib diisi.<br/>Biaya yang dibebankan ke klien untuk pembuatan akta ini.<br/>Contoh : 3.000.000" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Catatan </label>
                                                        <input type="text"  id="catatan" rel="tooltip"  class="form-control" title="* Tidak wajib diisi.<br/>Catatan khusus untuk order ini.<br/>Contoh : Order segera diproses" >
                                                    </div>
                                                    <div class="hide">
                                                        <input type="submit">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-md-2">
                                                            <a class="btn btn-primary tunggu" onclick="_simpan();" title="Simpan Data">
                                                            Simpan
                                                            </a> 
                                                        </div>
                                                        <div class="col-xs-4 col-md-2">
                                                            <a class="btn btn-primary hilang" onclick="simpanplus();" title="Simpan Data">
                                                                Simpan+
                                                            </a> 
                                                        </div>
                                                        <div class="col-xs-4 col-md-2">
                                                            <a class="btn default hilang" href="<?php echo base_url(); ?>order" title="Kembali ke halaman Order"> Batal
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
            var m_kywd="" , m_utama ="", m_table="";
            var klien="" , layanan="",order="";
            $(document).ready(function() {
                $( "#btn_m_klien" ).trigger( "click" );
                $( "#tgl_order").datepicker('setDate', new Date());
                
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
                    $("#save_data").submit(function(){

                        var kondisi = before_simpan();
                        console.log("save_data  = "+kondisi);
                        if(kondisi == "sukses"){
                            simpan();
                            $("#simMethod").val("1");
                        }

                        return false;
                    })
                    function _simpan()
                    {
                        var kondisi = before_simpan();
                        console.log("save_data  = "+kondisi);
                        if(kondisi == "sukses"){
                            simpan();
                            $("#simMethod").val("1");
                        }

                        return false;
                    }

                    function simpanplus()
                    {
                        var kondisi = before_simpan();
                        console.log("save_data  = "+kondisi);
                        if(kondisi == "sukses"){
                            simpan();
                            $("#simMethod").val("0");
                            
                        }

                        return false;
                    }
                //end jenis simpan
                function simpan()
                {
                    $(".tunggu").addClass("disabled");
                    $(".tunggu").html("Sedang Diproses !");
                    $(".hilang").hide();

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
                                 'biaya'                : returntoN($('#biaya').val()),
                                 'catatan'              : $('#catatan').val(),
                                 'nama_notaris_rekanan' : $('#nama_notaris_rekanan').val(),
                                 'id_notaris_rekanan'   : $('#id_notaris_rekanan').val()}    
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url(); ?>order/simpan",
                        data : {param : param},
                        dataType: 'json',
                        success : function (result){
                            console.log(result);
                            buatproses(result['Output'], $('#id_layanan').val());
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

                function cekdata(tb,field,data){
                    return $.ajax({
                            type: "POST",
                            url: "<?php echo base_url(); ?>ctrl_public/cekdata",
                            data: {param : {tb:tb, field:field, data:data}},
                            dataType: "json",
                            success: function (result) {
                                console.log("cekdata");
                                console.log(result);
                             //   return result;
                            }

                        });


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
                function buatproses(id,layanan)
                {
                    param = {'id_order'     : id ,
                             'id_layanan'   : layanan};

                    $.ajax({
                        type:'POST',
                        url:"<?php echo base_url('order/buatproses') ?>",
                        data: {param:param},
                        dataType: 'json',
                        success: function (result){
                            console.log(result);
                            ($("#simMethod").val() == 0 ? location.reload() : location.href = "<?php echo base_url('order') ?>")
                        }
                    })
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