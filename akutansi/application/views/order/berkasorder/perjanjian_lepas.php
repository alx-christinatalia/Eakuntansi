<?php
    $id_order = $MASTER_ID_ORDER ;
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
        <title>Berkas Perjanjian Lepas | eNotaris.com</title>
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
                                    <h1>Berkas Perjanjian Lepas</h1>
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
                                                    <td id="io-no_order"></td>
                                                </tr>
                                                <tr>
                                                    <th>Tgl Order</th>
                                                    <td id="io-tgl_order"></td>
                                                </tr>
                                                <tr>
                                                    <th>Klien</th>
                                                    <td id="io-nama_klien"></td>
                                                </tr>
                                                <tr>
                                                    <th>Layanan</th>
                                                    <td id="io-nama_layanan"></td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Bdn Hukum</th>
                                                    <td id="io-bdnhumun_namausaha"></td>
                                                </tr>
                                                <tr>
                                                    <th>Deskripsi</th>
                                                    <td id="io-deskripsi"></td>
                                                </tr>
                                                <tr>
                                                    <th>No Akta</th>
                                                    <td id="io-no_akta"></td>
                                                </tr>
                                                <tr>
                                                    <th>No Berkas</th>
                                                    <td id="io-no_berkas"></td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td id="io-is_closed"></td>
                                                </tr>
                                                <tr>
                                                    <th>Buat Akta</th>
                                                    <td id="io-sdh_buatakta"></td>
                                                </tr>
                                                <tr>
                                                    <th>Sudah Cetak Akta</th>
                                                    <td id="io-sdh_cetakakta"></td>
                                                </tr>
                                                <tr>
                                                    <th>Biaya</th>
                                                    <td id="io-biaya"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-bars "></i>
                                            <span class="caption-subject font-dark bold uppercase">Data Umum</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form id="DU" onsubmit="return false">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Jangka Waktu </label><font color="red">*</font>
                                                        <input type="text" id="DU-waktu" class="form-control" rel="tooltip" title="* Wajib diisi.<br/>Jangka waktu pelunasan.<br/>Contoh : 36 Bulan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tgl Mulai </label><font color="red"> *</font>
                                                        <div class="input-group">
                                                            <input type="text" id="DU-tgl_mulai" class="form-control myDate" rel="tooltip" title="* Wajib diisi.<br />Tanggal mulai. Format dd-mm-yyyy<br/> Contoh : 12-02-2014">
                                                            <span class="input-group-addon ">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tgl Batas </label><font color="red"> *</font>
                                                        <div class="input-group">
                                                            <input type="text" id="DU-tgl_batas" class="form-control myDate" rel="tooltip" title="* Wajib diisi.<br />Tanggal Batas. Format dd-mm-yyyy<br/> Contoh : 12-02-2014">
                                                            <span class="input-group-addon ">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Perihal Perjanjian</label><font color="red"> *</font>
                                                        <textarea  id="DU-hal_kerjasama" class="form-control area" rel="tooltip" title="* Wajib diisi.<br/>Perihal kerjasama."></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Perihal Pembayar</label><font color="red"> *</font>
                                                        <input type="text" id="DU-pembayar" class="form-control" rel="tooltip" title="* Wajib diisi.<br/>Pihak yang membayar dalam pengurusan akta ini.">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-md-2">
                                                            <input type="submit" class="btn btn-primary" value="Simpan"> 
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-bars "></i>
                                            <span class="caption-subject font-dark bold uppercase">Para Pihak</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-container">
                                            <table class="table table-hover table-striped table-bordered table-detail">
                                                <thead>
                                                    <tr>
                                                        <th>Aksi</th>
                                                        <th>Pihak Ke</th>
                                                        <th>Pihak Alias</th>
                                                        <th>Nama</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tb-TP">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet light bordered">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-bars "></i>
                                                <span class="caption-subject font-dark bold uppercase">Tambah Pihak</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body">

                                            <form id="TP">
                                            <input type="text" id="TP-_id" class="hide">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Nama </label><font color="red">*</font>
                                                        <input id="TP-nama" class="form-control" rel="tooltip" title="* Wajib diisi.<br/>Nama pengurus.<br/>Contoh : Bagus Abdurrahman, ST">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pihak Ke </label><font color="red">*</font>
                                                        <select id="TP-pihak_ke" class="form-control" rel="tooltip" title="* Wajib diisi.<br/>Pihak ke">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pihak Alias </label><font color="red">*</font>
                                                        <select id="TP-pihak_alias" class="form-control" rel="tooltip" title="* Wajib diisi.<br/>Pihak alias.">
                                                            <option value="Pihak Pertama">Pihak Pertama  </option>
                                                            <option value="Pihak Kedua">Pihak Kedua  </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <label>Keterangan </label><font color="red">*</font>
                                                            <textarea type="text"  rel="tooltip"  class="form-control" id="TP-ket" title="* Wajib diisi.<br/>Diisi dengan keterangan pengurus. Contoh : Lahir di Malang, pada tanggal 28(dua puluh delapan) SEPTEMBER 1988 (seribu sembilan ratus delapan puluh delapan), Warga Negara Indonesia, Karyawan Swasta, bertempat tinggal di Malang, Jalan Pasir Luhur 28, Rukun Tetangga 007, Rukun Warga 002, Desa Jenggolo, Kecamatan Kepanjen, Pemegang Kartu Tanda Penduduk dengan Nomor Induk Kependudukan 3507132809880001;"></textarea>
                                                                <span class="input-group-btn" style="padding-top: 7px;">
                                                                    <a data-toggle="modal" href="#template" onclick="ambiltem();" class="btn green-turquoise" title="Pilih Template">
                                                                      <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status Nikah </label><font color="red">*</font>
                                                        <input id="TP-statusnikah" class="form-control" rel="tooltip" title="* Wajib diisi.<br/>Status nikah.<br/>Contoh : Menikah, Cerai, Duda, Janda, Lajang, Gadis dsb.">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Surat Nikah </label>
                                                        <input id="TP-suratnikah" class="form-control" rel="tooltip" title="* Tidak Wajib diisi.<br/>Nomor Surat nikah/ Cerai.<br/>Contoh : 7832">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-md-2">
                                                            <input type="submit" class="btn btn-primary" value="Simpan"> 
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                </div>
                            </div>
                            <?php $this->load->view("template/modal/hapus") ?>
                            <?php $this->load->view("template/modal/template") ?>
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
            //template
            function pakaitem(){
                $("#TP-ket").val($("#teks").val());
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
        </script>
        <script>
            var p_nama_layanan = "" , p_id_layanan = "";
            $(document).ready(function(){
                $("#DU-kabkota_id").select2();  
                getLayanan();
                informasiOrder();
                getKota();
                getDU();    
                getTP();
            })

                $(".provinsi_id").change(function()
                {
                    alert("a")
                })

            //getData
                function getLayanan() 
                {
                    $.ajax({
                        type:'post',
                        url:"   <?php echo base_url('umum/getLayananbyID').'/'.$id_order ?>",
                        dataType    : 'json',
                        success     : function(resp)
                        {
                            resp = resp['Data'][0];
                            ___Data(resp['id_layanan'] , resp['nama'])
                        }
                        
                    })    
                }

                function ___Data(id,nama)
                {
                    p_id_layanan = id;
                    p_nama_layanan = nama;

                }
                function getDU()
                {
                    param = ""

                    tbl     = "orderjbsobyek";
                    method  = "getData";
                    sort    = "";
                    limit   = "";
                    filter  = "id_order = '<?php echo $id_order ?>'";

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/perubahan_PT/doSome') ?>",
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter},
                        dataType:'json',
                        success: function (resp)
                        {
                            resp = resp['Data'][0];
                            if (resp != null){
                                $("#DU-waktu").val(resp['waktu'])
                                $("#DU-tgl_mulai").val(tglIndo(resp['tgl_mulai']))
                                $("#DU-tgl_batas").val(tglIndo(resp['tgl_batas']))
                                $("#DU-hal_kerjasama").val(resp['hal_kerjasama'])
                                $("#DU-pembayar").val(resp['pembayar'])
                            }
                        }
                    })
                    return false;   
                }


                function informasiOrder()
                {
                    param = ""

                    tbl     = "tb_order";
                    method  = "getData";
                    sort    = "";
                    limit   = "";
                    filter  = "_id = '<?php echo $id_order ?>'";

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/perubahan_PT/doSome') ?>",
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter},
                        dataType:'json',
                        success: function (resp)
                        {
                            resp = resp['Data'][0];
                            //
                                $("#io-no_order").html(resp['_id'])
                                $("#io-tgl_order").html(resp['tgl_order'])
                                $("#io-nama_klien").html(resp['nama_klien'])
                                $("#io-nama_layanan").html(resp['nama_layanan'])
                                $("#io-bdnhumun_namausaha").html(resp['bdnhumun_namausaha'])
                                $("#io-deskripsi").html(resp['deskripsi'])
                                $("#io-no_akta").html(resp['no_akta'])
                                $("#io-no_berkas").html(resp['no_berkas'])
                                $("#io-is_closed").html((resp['is_closed'] == "0" ? "Open" : "Closed"))
                                $("#io-sdh_buatakta").html((resp['sdh_buatakta'] == "0" ? "Belum" : "Sudah"))
                                $("#io-sdh_cetakakta").html((resp['sdh_cetakakta'] == "0" ? "Belum" : "Sudah"))
                        }
                    })
                    return false;
                }

                function getTP()
                {
                    param = ""

                    tbl     = "orderjbspihak";
                    method  = "TPtable";
                    sort    = "";
                    limit   = "";
                    filter  = "id_order = '<?php echo $id_order ?>'";
                    where   = {}

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/kerjasama_perorangan/doSome') ?>",
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter, where:where},
                        dataType:'json',
                        success: function (resp)
                        {
                            $("#tb-TP").html(resp);
                        }
                    })
                    return false;
                }

            //insert

                $("#DU").submit(function(){
                    var cek = before_simpan_du()
                    if (cek == "sukses"){
                        param = {'id_order'         : "<?php echo $id_order ?>",
                                 
                                  'waktu'           : $("#DU-waktu").val(),
                                  'tgl_mulai'       : formatDate($("#DU-tgl_mulai").val()),
                                  'tgl_batas'       : formatDate($("#DU-tgl_batas").val()),
                                  'hal_kerjasama'   : $("#DU-hal_kerjasama").val(),
                                  'pembayar'        : $("#DU-pembayar").val(),
                                 'layanan'          : p_id_layanan,
                                 }

                        tbl     = "orderjbsobyek";
                        method  = "DUinsup";
                        sort    = "";
                        limit   = "";
                        filter  = "";
                        where   = {'id_order' : "<?php echo $id_order ?>"}

                        $.ajax({
                            type:'post',
                            url:"<?php echo base_url('berkasorder/perubahan_PT/doSome') ?>",
                            data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter , where : where},
                            dataType:'json',
                            success: function(resp)
                            {
                                console.log(resp)
                                notifShow('custom',"Data Umum Berhasil Disimpan")
                                return false;
                            }
                        })
                    }
                    return false;
                })

                function before_simpan_du()
                {
                        waktu = $("#DU-waktu").val();
                        mulai = $("#DU-tgl_mulai").val();
                        batas = $("#DU-tgl_batas").val();
                        perjanjian = $("#DU-hal_kerjasama").val();
                        pembayar = $("#DU-pembayar").val();

                        kondisi = "";
                        if((waktu != "") && (mulai != "") && (batas != "") && (perjanjian != "") && (pembayar != ""))
                        {
                            kondisi = "sukses";
                        }else
                        {
                            notifShow("error", "Masukkan data formulir dengan benar");
                            kondisi = "gagal";
                            cekfocus_du();
                        }
                        console.log("Before simpan = "+kondisi);
                    return kondisi;
                }


                function cekfocus_du()
                {
                    if ($("#DU-waktu").val() == ""){
                        $("#DU-waktu").focus();
                    }else if ($("#DU-tgl_mulai").val() == ""){
                        $( "#DU-tgl_mulai" ).focus();
                    }else if($("#DU-tgl_batas").val() == ""){
                        $("#DU-tgl_batas").focus();
                    }else if($("#DU-hal_kerjasama").val() == ""){
                        $("#DU-hal_kerjasama").focus();
                    }else if ($("#DU-pembayar").val() == ""){
                        $("#DU-pembayar").focus();
                    }

                }

               $("#TP").submit(function(){
                    var cek = before_simpan_tp()
                    if (cek == "sukses"){
                        param = {'id_order'         : "<?php echo $id_order ?>",
                                 'pihak_ke'         : $("#TP-pihak_ke option:selected").val(),
                                 'pihak_alias'      : $("#TP-pihak_alias option:selected").val(),
                                 'nama'             : $("#TP-nama").val(),
                                 'ket'              : $("#TP-ket").val(),
                                 'statusnikah'      : $("#TP-statusnikah").val(),
                                 'suratnikah'       : $("#TP-suratnikah").val(),
                                 'layanan'          : p_id_layanan,
                                 'tgl_input'          : hariini()
                             };

                        tbl     = "orderjbspihak";
                        method  = "TPinsup";
                        sort    = "";
                        limit   = "";
                        filter  = "";
                        where   = {'_id' : $("#TP-_id").val()}

                        if($("#TP-_id").val() == "")
                        {
                            $(this).ajaxSubmit({
                            url: '<?php echo base_url('efiling/order_peribahan_pt') ?>',
                            type: 'POST',
                            data : {param:param},
                            dataType: 'json',
                            success: function(resp) {
                                console.log("nama : "+resp['nama']+" "+resp['nama_acak']+"Kondisi = "+resp['nama_acak']);
                                if(resp['kondisi'] == 'sukses')
                                {
                                    //param.file = resp['nama_acak']
                                    TPData(param,tbl,method,sort,limit,filter,where);
                                }
                                
                                }
                            });
                        }else{
                            TPData(param,tbl,method,sort,limit,filter,where);
                        }
                    }
                    return false;
                })

                function TPData(param,tbl,method,sort,limit,filter,where)
                {
                    console.log(param);
                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/perubahan_PT/doSome') ?>",
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter , where : where},
                        dataType:'json',
                        success: function (resp)
                        {
                            console.log(resp);
                            $('#TP')[0].reset();
                            notifShow('custom',"Pihak Berhasil Disimpan");
                            getTP();
                        }
                    })
                }

                function before_simpan_tp(){
                    var kondisi;
                    nama = $("#TP-nama").val()
                    pihak = $("#TP-pihak_ke option:selected").val()
                    alias = $("#TP-pihak_alias option:selected").val()
                    ket = $("#TP-ket").val()
                    stts = $("#TP-statusnikah").val()

                    if ((nama != "") && (ket != "") && (pihak != "") && (alias != "") && (stts != "")){
                        kondisi = "sukses";
                    }else{
                        notifShow("error", "Masukkan data formulir dengan benar");
                        kondisi = "gagal";
                        cekfocus_tp();
                    }
                    return kondisi;
                }

                function cekfocus_tp(){
                    if ($("#TP-nama").val() == ""){
                        $("#TP-nama").focus()
                    }else if($("#TP-pihak_ke option:selected").val() == ""){
                        $("#TP-pihak_ke").focus()
                    }else if ($("#TP-pihak_alias option:selected").val() == ""){
                        $("#TP-pihak_alias").focus()
                    }else if ($("#TP-ket").val() == ""){
                        $("#TP-ket").focus()
                    }else if($("#TP-statusnikah").val() == ""){
                        $("#TP-statusnikah").focus()
                    }
                }

            //Edit
                function TPedit(selector)
                {
                    _id = $(selector).attr('data-id');
                    $("#TP-_id").val(_id);
                    param = {};
                    tbl     = "orderjbspihak";
                    method  = "getData";
                    sort    = "";
                    limit   = "";
                    filter  = "_id = '"+_id+"'";
                    where   = {};

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/perubahan_PT/doSome') ?>",
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter, where:where},
                        dataType:'json',
                        success: function (resp)
                        {   
                            resp = resp['Data'][0]
                            console.log(resp)

                            
                             $("#TP-pihak_ke ").val(resp['pihak_ke'])
                             $("#TP-pihak_alias ").val(resp['pihak_alias'])
                             $("#TP-nama").val(resp['nama'])
                             $("#TP-ket").val(resp['ket'])
                             $("#TP-statusnikah").val(resp['statusnikah'])
                             $("#TP-suratnikah").val(resp['suratnikah'])
                             
                        }
                    })
                    return false;
                }

            //Hapus

                function TPdel(selector)
                {

                    id = $(selector).attr("data-id");
                    nama = $(selector).attr("data-nama");
                    $("#delete-modal").modal('toggle');
                    $("#delete-id").html(id);
                    $("#delete-name").html(nama);
                    $("#btnDelete").attr("onclick", "TPdelNow()");
                }

                function TPdelNow()
                {
                    id = $("#delete-id").html();
                    param   = "";

                    tbl     = "orderjbspihak";
                    method  = "deleteData";
                    sort    = "";
                    limit   = "";
                    filter  = "_id = '"+id+"'";
                    where   = "";

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/perubahan_PT/doSome') ?>",
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter, where:where},
                        dataType:'json',
                        success: function (resp)
                        {
                            notifShow("custom", "Data Berhasil Dihapus")
                            getTP();
                        }
                    })
                }
        </script>
        <script >
            //DU

                function getKota()
                {
                    
                    param   = "";

                    tbl     = "";
                    method  = "getKota";
                    sort    = "";
                    limit   = "";
                    filter  = "";
                    where   = {'id_order' : "<?php echo $id_order ?>"} ;

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/perubahan_PT/doSome') ?>",
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter, where:where},
                        dataType:'json',
                        success: function (resp)
                        {
                            $("#DU-kabkota_id").html(resp);
                            
                        }
                    })

                    
                }
        </script>
    </body>
</html>
