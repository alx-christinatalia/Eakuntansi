<!-- <?php
    $loaddata = $this->session->userdata("user") ;
    $id = $loaddata->_id;
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Administrator | eNotaris.com</title>
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
                    input.upload{
                        position: absolute;
                        top: 0;
                        right: 0;
                        margin: 0;
                        padding: 0;
                        font-size: 20px;
                        cursor: pointer;
                        opacity: 0;
                        filter: alpha(opacity=0);
                    }
                    .fileUpload{
                        position: absolute;
                        margin-left: 0px;
                        float: left;
                    }
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <?php $this->load->view("template/header"); ?>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view("template/sidebar", ["active" => "administrator", "sub" => "profil"]); ?>

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
                                    <h1>Profil Notaris / PPAT</h1>
                                </div>
                            </div>  
                            <div class="col-md-2 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">                                               
                                        <a class="btn btn-primary" onclick="simpan();" title="Simpan Data">
                                            <i class="fa fa-save"></i>
                                        </a>                  
                                        <a class="btn btn-primary" href="<?php echo base_url(); ?>profil" title="Batal">
                                            <i class="fa fa-mail-reply"></i>
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
                                    <form class="form-horizontal" role="form" id="frm">
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-2 control-label">Foto Notaris<font color="red">*</font></label>
                                            <div class="col-md-6">
                                                    <!-- <input type="file" class="form-control" rel="tooltip" id="inp" rel="tooltip">
                                                    <input type="text" class="form-control" rel="tooltip" id="b64" rel="tooltip">
                                                    <img height="30" id="img"  /> -->
                                                    <label for="file-input">
                                                        <img width="100" height="100" id="img" class="img-circle" src="<?php echo base_url("assets/img/cam.png") ?>">
                                                    </label>
                                                    
                                            </div>
                                            <div class="fileUpload btn btn-primary">
                                                <span>Upload</span>
                                                    <input type="file" class="upload" id="inp">
                                                    <!-- <input type="text" id="b64"> -->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-2 control-label">Nama Notaris <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control" rel="tooltip" id="namanotaris" rel="tooltip" title="* Wajib diisi.<br/> contoh : Eno Tari SH.,M.Kn">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Notaris Tersebut <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" id="notaristersebut" rel="tooltip" title="* Wajib diisi.<br/> contoh : Eno Tari Sarjana Hukum, Magister Kenotariatan"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Pejabat <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <select class="form-control" id="pejabat" rel="tooltip" title="* Wajib diisi.<br/> Pilih Pejabat">
                                                    <option value="Notaris">Notaris</option>
                                                    <option value="PPAT">PPAT</option>
                                                    <option value="Notaris/PPAT">Notaris/PPAT</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-2 control-label">Alamat <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" rel="tooltip" id="alamat" rel="tooltip" title="* Wajib diisi.<br/> contoh : Jl. Soekarno Hatta 15 D Malang"  rows="2"></textarea></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Propinsi <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" id="provinsi" rel="tooltip" title="* Wajib diisi.<br/> Area Kerja Propinsi Notaris / PPAT." disabled > 
                                                <input type="hidden" id="idprov" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Kota <font color="red">*</font></label>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <input type="text" placeholder="Pilih Kota" class="form-control" rel="tooltip" id="kota" rel="tooltip" title="* Wajib diisi.<br/> Lokasi Kota Notaris / PPAT." disabled> 
                                                    <input type="hidden" id="idkabkota" />
                                                    <span class="input-group-btn">
                                                        <a data-toggle="modal" href="#cari" onclick="ref_kota();" class="btn green-turquoise" title="Pilih Kota">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputemail" class="col-md-2 control-label">No Telepon <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" id="notelp" rel="tooltip" title="* Wajib diisi.<br/> No Telepon." > 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">No Fax</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" id="nofax" rel="tooltip" title="* Tidak wajib diisi.<br/>No Fax." > </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Email Notaris <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" id="email" rel="tooltip" title="* Wajib diisi.<br/> contoh : emailanda@gmail.com"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Lokasi Notaris</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" id="lokasinotaris" rel="tooltip" title="* Tidak wajib diisi.<br/> Area Kerja Notaris"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">SK Notaris</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" id="sknotaris" title="* Tidak wajib diisi.<br/>Nomor SK Notaris."> </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Tgl SK Notaris</label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                        <input type="text" onblur="FormatDateField(this)" onfocus="this.select()" id="date" rel="tooltip" title="* Tidak wajib diisi.<br/>*) Gunakan 2, 4, atau 6 digit angka.<br/> Contoh : <strong>10</strong> maka akan menjadi 10-{month}-{year}.<br/> <strong>1010</strong> maka akan menjadi 10-10-{year}. <br/><strong>101014</strong> maka akan menjadi 10-10-2014." class="form-control myDate">
                                                            <span class="input-group-addon" >
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Lokasi PPAT</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="lokasippat" rel="tooltip" title="* Tidak wajib diisi.<br/> Area Kerja PPAT"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">SK PPAT</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" id="skppat" title="* Tidak wajib diisi.<br/> Nomor SK PPAT."> </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Tgl SK PPAT</label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                        <input type="text" onblur="FormatDateField(this)" onfocus="this.select()" id="date1" rel="tooltip" title="* Tidak wajib diisi.<br/>*) Gunakan 2, 4, atau 6 digit angka.<br/> Contoh : <strong>10</strong> maka akan menjadi 10-{month}-{year}.<br/> <strong>1010</strong> maka akan menjadi 10-10-{year}. <br/><strong>101014</strong> maka akan menjadi 10-10-2014." class="form-control myDate">
                                                            <span class="input-group-addon" >
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Pakai Accounting</label>
                                            <div class="col-md-6">
                                                <div class="md-checkbox-list">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="checkbox9" class="md-check">
                                                        <label for="checkbox9">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Ya </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group acc hide">
                                            <label for="inputnotelp" class="col-md-2 control-label">Tgl Mulai Accounting <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                        <input type="text" onblur="FormatDateField(this)" onfocus="this.select()" id="date2" rel="tooltip" title="* Wajib diisi.<br/>*) Gunakan 2, 4, atau 6 digit angka.<br/> Contoh : <strong>10</strong> maka akan menjadi 10-{month}-{year}.<br/> <strong>1010</strong> maka akan menjadi 10-10-{year}. <br/><strong>101014</strong> maka akan menjadi 10-10-2014." class="form-control myDate">
                                                            <span class="input-group-addon" >
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group acc hide">
                                            <label for="inputnotelp" class="col-md-2 control-label">Nama Accounting <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" id="namaacc" rel="tooltip" title="* Wajib diisi.<br/> Nama Accounting di Kantor Anda."> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Nama Direksi <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" id="namadireksi" rel="tooltip" title="* Wajib diisi.<br/> Nama Direksi di Kantor Anda (jika tidak ada, isi Nama Notaris)."> </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-2 control-label">Nama Kasir <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" id="namakasir" rel="tooltip" title="* Wajib diisi.<br/> Nama Kasir di Kantor Anda."> </div>
                                        </div>
                                        <div class="row">
                                            <input type="hidden" value="<?php echo date("Y-m-d"); ?>" id="hariini">
                                            <div class="col-md-offset-2 col-md-1">
                                                <input type="submit" class="btn btn-primary" value="Simpan" /> 
                                            </div>
                                            <div class="col-md-1" style="padding-left: 25px;">
                                                <a class="btn default" href="<?php echo base_url(); ?>profil">Batal</a>
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
        <?php $this->load->view("administrator/profilnotarisppat/modal/cari"); ?>

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
                getProfil();
                console.log(<?php echo $id ?>)
            });
        </script>
        <script>
            function getProfil(){
                    param = ""

                    tbl     = "notaris";
                    method  = "getData";
                    sort    = "";
                    limit   = "";
                    filter  = "_id = '<?php echo $id ?>'";

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/perubahan_cv/doSome') ?>",
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter},
                        dataType:'json',
                        success: function (resp)
                        {
                            resp = resp['Data'][0];
                            //
                            if(resp != null){
                                $("#namanotaris").val(resp['nama'])
                                $("#notaristersebut").val(resp['tersebut'])
                                $("#pejabat").val(resp['pejabat'])
                                $("#alamat").val(resp['alamat'])
                                $("#provinsi").val(resp['nama_prov'])
                                $("#kota").val(resp['nama_kabkota'])
                                $("#notelp").val(resp['notelp'])
                                $("#nofax").val(resp['nofax'])   
                                $("#email").val(resp['email'])
                                $("#lokasinotaris").val(resp['lokasi_notaris'])
                                $("#sknotaris").val(resp['nomor_sk_notaris'])
                                $("#date").val(formatDate1(resp['tgl_sk_notaris']))
                                $("#lokasippat").val(resp['lokasi_ppat'])
                                $("#skppat").val(resp['nomor_sk_ppat'])
                                $("#date1").val(formatDate1(resp['tgl_sk_ppat']))
                                $("#date2").val(formatDate1(resp['tgl_accounting']))
                                $("#namaacc").val(resp['accounting'])
                                $("#namadireksi").val(resp['direksi'])
                                $("#namakasir").val(resp['kasir']);

                                if(resp['pakai_accounting'] == "1"){
                                    $("#checkbox9").prop("checked",true);
                                    cek();   
                                }
                            }
                        }
                    });
                    return false;
            }
        </script>
        <script>
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
            function ref_kota()
            {
                get_modal_data("", "" , "profil/datakota", "#list-kota");
            }
        </script>

        <script>
        var kywd= "", hal = 1;
        var m_kywd="" , m_utama ="", m_table="";

             $("#frmkota").submit(function() {
                search_data = $("#s_kota").val();
                get_modal_data(search_data, "" , "profil/datakota", "#list-kota");   
                return false;
                
             })

            function get_kota(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>profil/datakota",
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



                        $("#list-kota").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function set_kota(selector){
                kota = $(selector).attr("data-kota");
                provinsi = $(selector).attr("data-provinsi");
                idkabkota = $(selector).attr("id-kota");
                idprov = $(selector).attr("id-prov");
                $("#kota").val(kota);
                $("#provinsi").val(provinsi);
                $("#idkabkota").val(idkabkota);
                $("#idprov").val(idprov);
                $('#cari').modal('hide');
            }

            $("#checkbox9").click(function(){
                cek();
            });

            function cek(){
                if ($("#checkbox9").is(':checked')){
                    $( ".acc").removeClass("hide");
                }else{
                    $(".acc").addClass("hide"); 
                    $("#date2").val(""); 
                    $("#namaacc").val(""); 
                }
            };

        </script>

        <script>
                $("#frm").submit(function() {
                    beforesimpan(); 
                    return false;
                 });

                function simpan()
                {
                        var param = {
                                 "pejabat" : $("#pejabat option:selected").val(),
                                 "nama" : $("#namanotaris").val(),
                                 "tersebut" : $("#notaristersebut").val(),
                                 "alamat" : $("#alamat").val(),
                                 "nama_kabkota" : $("#kota").val(),
                                 "nama_prov" : $("#provinsi").val(),
                                 "notelp" : $("#notelp").val(),
                                 "nofax" : $("#nofax").val(),
                                 "email" : $("#email").val(),
                                 "id_kabkota" : $("#idkabkota").val(),
                                 "id_prov" : $("#idprov").val(),
                                 //"zona" : $("#stp").val(),
                                 "lokasi_notaris"  : $("#lokasinotaris").val(),
                                 "nomor_sk_notaris"  : $("#sknotaris").val(),
                                 "tgl_sk_notaris"  : $("#date").val(),
                                 "lokasi_ppat"  : $("#lokasippat").val(),
                                 "nomor_sk_ppat"  : $("#skppat").val(),
                                 "tgl_sk_ppat"  : $("#date1").val(),
                                 //"tgl_daftar"  : $("#date").val(),
                                 //"tgl_expired"  : $("#date").val(),
                                 //"aktif"  : $("#date").val(),
                                 //"catatan_tdk_aktif"  : $("#date").val(),
                                 //"layanan_aktif"  : $("#date").val(),
                                 //"dokumen_jualbelisewa"  : $("#date").val(),
                                 "pakai_accounting"  : ($("#checkbox9").is(':checked') ? "1" : "0"),
                                 "direksi"  : $("#namadireksi").val(),
                                 "accounting"  : $("#namaacc").val(),
                                 "kasir"  : $("#namakasir").val(),
                                 //"ket_kuitansi"  : $("#date").val(),
                                 //"ket_invoice"  : $("#date").val(),
                                 //"no_npwp"  : $("#date").val(),
                                 //"pernah_byr"  : $("#date").val(),
                                 //"masuk"  : $("#date").val(),
                                 //"keluar"  : $("#date").val(),
                                 //"saldo"  : $("#date").val(),
                                 //"progres"  : $("#date").val(),
                                 //"tgl_closing"  : $("#date").val(),
                                 //"c_autoposting"  : $("#date").val(),
                                 //"c_akundepositenotaris"  : $("#date").val(),
                                 //"c_akunbiayaenotaris"  : $("#date").val(),
                                 //"mode_bisnis"  : $("#date").val(),
                                 //"jml_user"  : $("#date").val(),
                                 //"kode_aktivasi"  : $("#date").val(),
                                 "tgl_accounting"  : $("#date2").val()
                             }     
                        $.ajax({    
                            type : "post",
                            url : "<?php echo base_url(); ?>profil/edit",
                            data : {param : param , id : "<?php echo $id;  ?>"},
                            dataType: 'json',
                            success : function (result){
                                location.reload();
                            }
                        });
                    return false;
                }
        </script>
        <script>
            function beforesimpan(){
                        nama = $("#namanotaris").val();
                        tersebut = $("#notaristersebut").val();
                        pejabat = $("#pejabat").val();
                        alamat = $("#alamat").val();
                        prov = $("#provinsi").val();
                        kota = $("#kota").val();
                        notelp = $("#notelp").val();
                        email = $("#email").val();
                        direksi = $("#namadireksi").val();
                        kasir = $("#namakasir").val();

                        tglacc = $("#date2").val();
                        namaacc = $("#namaacc").val()

                        if((nama != "") && (tersebut != "") && (pejabat != "") && (alamat != "") && (prov != "") && (kota != "") && (notelp != "") && (email != "") && (direksi != "") && (kasir != ""))
                        {
                            if($("#checkbox9").is(':checked')){
                                if((tglacc != "")&&(namaacc != "")){
                                    simpan();
                                }else{
                                    notifShow("error", "Masukkan data formulir dengan benar");
                                    cekfocus();
                                }
                            }else{
                                simpan();
                            }
                        }else
                        {
                            notifShow("error", "Masukkan data formulir dengan benar");
                            cekfocus();
                        }
                    return false;
            }

            function cekfocus(){
                    if($("#namanotaris").val() == ""){
                        $("#namanotaris").focus();
                    }else if ($("#notaristersebut").val() == ""){
                        $("#notaristersebut").focus();
                    }else if($("#pejabat").val() == ""){
                        $("#pejabat").focus();
                    }else if ($("#alamat").val() == ""){
                        $("#alamat").focus();
                    }else if($("#provinsi").val() == ""){
                        $("#provinsi").focus();
                    }else if ($("#kota").val() == ""){
                        $("#kota").focus();
                    }else if($("#notelp").val() == ""){
                        $("#notelp").focus();
                    }else if ($("#email").val() == ""){
                        $("#email").focus();
                    }else if($("#namadireksi").val() == ""){
                        $("#namadireksi").focus();
                    }else if($("#namakasir").val() == ""){
                        $("#namakasir").focus();
                    }else if($("#date2").val() == ""){
                        $("#date2").focus();
                    }else if($("#namaacc").val() == ""){
                        $("#namaacc").focus();
                    }
                return false;
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
        <script type="text/javascript">// Ini scriptnya
            var imgOut = document.getElementById("img");
            var b64 = document.getElementById("b64");
            function readFile() {
              if (this.files && this.files[0]) {
                var FR= new FileReader();
                FR.addEventListener("load", function(e) {
                  imgOut.src = e.target.result;
                  b64.value = e.target.result;
                });
                FR.readAsDataURL( this.files[0] );
              }
            }
            document.getElementById("inp").addEventListener("change", readFile);
        </script>
        <script type="text/javascript">
            document.getElementById("uploadTom").onchange= function(){
                document.getElementById("uploadFile").value = this.value;
            }
        </script>
</body>

</html>
 -->