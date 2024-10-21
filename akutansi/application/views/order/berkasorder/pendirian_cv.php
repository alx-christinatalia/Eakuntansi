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
        <title>Berkas Pendirian CV | eNotaris.com</title>
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
                                    <h1>Berkas Pendirian CV</h1>
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
                                            <span class="caption-subject font-dark bold uppercase">Nama Badan Usaha</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form id="NBU">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Badan Usaha </label><font color="red">*</font>
                                                        <input type="text"  id="NBU-nama" rel="tooltip"  class="form-control" title="* Wajib diisi.<br/>Nama Badan Usaha.<br/>Contoh: PT Mesin Pencari indonesia" autofocus>
                                                        <input type="text" class="hide" id="NBU-id">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="table-container">
                                                            <table class="table table-hover table-striped table-bordered table-detail">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 15%; text-align: center">Aksi</th>
                                                                        <th style="width: 80%" >Badan Hukum</th>
                                                                        <th style="width: 5%" >Dipilih</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="tb-NBU">
                                                                </tbody>
                                                            </table>
                                                        </div>
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
                                            <span class="caption-subject font-dark bold uppercase">Data Umum</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form id="DU" onsubmit="return false">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Modal Dasar </label><font color="red">*</font>
                                                        <input type="text" id="DU-modaldasar" rel="tooltip"  onfocus='toN(this);' onblur='toM(this);' class="form-control" title="* Wajib diisi.<br/>  Modal dasar perusahaan yang .<br/> Untuk PT sebesar Rp. 50jt Jika utk CV tidak ditentukan batasannya.<br/>Format pengisian tanpa titik(.): 60000000, secara otomatis menjadi : 60.000.000 ">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-5"> 
                                                                    <label>Jumlah Saham </label><font color="red">*</font>
                                                                <input type="text"  id="DU-jml_saham" rel="tooltip"  class="form-control" title="* Wajib diisi.<br/>Jumlah saham yang ada. Harga per saham akan dikonversi otomatis berdasarkan modal dasar<br/> Contoh : 20">
                                                            </div>
                                                            <div class="col-md-1">
                                                                @
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Lembar </label>
                                                                <input type="text" id="DU-jml_saham_nominal" rel="tooltip" onfocus='toN(this);' onblur='toM(this);' class="form-control" title="" disabled>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Modal Disetor </label><font color="red">*</font>
                                                        <div class="input-group">
                                                            <div class="row">
                                                                <div class="col-md-10">
                                                                    <input type="text" onfocus='toN(this);' onblur='toM(this);'  id="DU-modal_disetor" rel="tooltip"  class="form-control money" title="* Wajib diisi.<br/>Modal awal yang disetorkan. Minimal 25% dari Modal Awal<br/>Format pengisian tanpa titik(.): 40000000, secara otomatis akan menjadi 40.000.000 ">  
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <span class="help-inline" id="persen"></span>   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Saham Yang Disetor </label><font color="red">*</font>
                                                        <input type="text"  id="DU-jml_saham_disetor" rel="tooltip"  class="form-control" title="* Wajib diisi.<br/> Jumlah saham disetor. Konversi saham dari jumlah modal disetor.<br/>Contoh : 20">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Bidang Usaha </label><font color="red">*</font>
                                                        <textarea type="text"  id="DU-bidang" rel="tooltip"  class="form-control" title="* Wajib diisi Bidang usaha.<br/>Pisahkan dengan koma (;) untuk setiap bidang usaha.<br/> Contoh : Bidang perdagangan; jasa; konsultansi.Jika utk yayasan diisi dg nilai 'maksud dan tujuan'."></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tujuan Usaha </label><font color="red">*</font>
                                                        <textarea type="text"  id="DU-tujuan" rel="tooltip"  class="form-control" title="*Wajib diisi<br/> Diisi tujuan usaha."></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat Perseroan </label>
                                                        <input type="text"  id="DU-alamat" rel="tooltip"  class="form-control" title="* Tidak wajib diisi.<br/>Diisi alamat Badan Usaha.<br/>Contoh : Jl. Soekarno Hatta 15 D">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kedudukan Perseroan </label><font color="red">*</font>
                                                        <select type="text"  id="DU-kabkota" rel="tooltip"  class="form-control" title="* Wajib diisi.<br/> Kedudukan perusahaan. Pilih Kabupaten/Kotamadya">
                                                            <option value="Kotamadya">Kotamadya</option>
                                                            <option value="Kabupaten">Kabupaten</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kedudukan Kab/kota </label><font color="red">*</font>
                                                        <select class="form-control" id="DU-kabkota_id" rel="tooltip" title="* Wajib diisi.<br/> Pilih Kabupaten atau Kota yang tersedia berdasarkan Area Kerja Notaris/PPAT.">
                                                            <option>Pilih kota</option>
                                                        </select>
                                                        <input type="text" class="hide" id="DU-kabkota_nama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jangka Waktu </label><font color="red">*</font>
                                                        <select type="text"  id="DU-jangka_waktu" rel="tooltip"  class="form-control" title="* Wajib diisi.<br/> Jangka waktu, Terbatas atau Tidak terbatas" >
                                                            <option value="Terbatas">Terbatas</option>
                                                            <option value="Tidak terbatas">Tidak Terbatas</option>
                                                        </select>
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
                                                        <th>Nama</th>
                                                        <th>Keterangan</th>
                                                        <th>Saham</th>
                                                        <th>Nominal</th>
                                                        <th>Posisi</th>
                                                        <th>File</th>
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
                                        <input type="text" id="TP-_id" class="hide" >
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <input type="text" id="_id" class="hide">
                                                        <label>Nama Pihak </label><font color="red">*</font>
                                                        <input type="text" id="TP-nama" class="form-control" title="* Wajib diisi.<br/>Nama pengurus.<br/>Contoh : Bagus Abdurrahman, ST">
                                                    </div>
                                                    <div class="form-group form-md-checkboxes">
                                                        <div class="md-checkbox-inline">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="TP-pengurus" onclick="cPengurus();" class="md-check">
                                                                <label for="TP-pengurus">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Pengurus  </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="TP-penghadap" class="md-check">
                                                                <label for="TP-penghadap">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Penghadap  </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="TP-pemegang_saham" onclick="cPemegang();" class="md-check">
                                                                <label for="TP-pemegang_saham">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Pemegang Saham  </label>
                                                            </div>
                                                        </div>
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
                                                        <label>Surat Kuasa </label>
                                                        <input type="text"  rel="tooltip" id="TP-ket_sk" class="form-control" title="* Tidak wajib diisi.<br/>Deskripsi surat kuasa.">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="file">File</label>
                                                        <input type="file" name="image_file" id="file" rel="tooltip" title="* Tidak wajib diisi.<br/> File identitas , file hasil scan KTP pengurus. <br/>Maksimum besar file 4 MB. Dalam bentuk JPG/PNG ">
                                                    </div>
                                                    <div class="form-group hide filelama">
                                                        <label for="file">File Lama</label>&nbsp;&nbsp;<font color="blue"><label id="filelama"></label></font>
                                                    </div>
                                                    <div class="form-group hide TP-pengurus TP-pemegang">
                                                        <label>Komposisi Saham </label>
                                                        <input type="text"  rel="tooltip" id="TP-komposisi"  class="form-control" title="* Tidak wajib diisi.<br/>Jumlah saham yang dimiliki pengurus. Total saham semua pengurus <strong>HARUS</strong> sama dengan total saham yang ada.">
                                                    </div>
                                                    <div class="form-group hide TP-pengurus TP-pemegang">
                                                        <label>Nominal Saham </label>
                                                        <input type="text"  rel="tooltip" id="TP-nominal"  class="form-control" title="* Tidak wajib diisi.<br/>Jumlah nominal saham yang disetor oleh pengurus<br/>format pengisian tanpa titik(.) Contoh : 20000000, secara otomatis menjadi 20.000.000">
                                                    </div>
                                                    <div class="form-group hide TP-pengurus TP-pemegang">
                                                        <label>Posisi </label>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <select rel="tooltip"  class="form-control" id="TP-posisi" title="* Tidak wajib diisi.<br/>Pilih posisi pengurus.">
                                                                        <option value="Tidak di Set" selected>Tidak di Set</option>
                                                                        <option value="Direktur">Direktur</option>
                                                                        <option value="Komisaris">Komisaris</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3" style="padding-top:2px;">
                                                                    <div class="md-checkbox-inline">
                                                                        <div class="md-checkbox">
                                                                            <input type="checkbox" id="utama" class="md-check">
                                                                            <label for="utama">
                                                                                <span class="inc"></span>
                                                                                <span class="check"></span>
                                                                                <span class="box"></span> Utama  </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="form-group hide TP-pemegang">
                                                        <label>PT Rekanan </label>
                                                        <input type="text"  rel="tooltip"  class="form-control" id="TP-persero_rekanan" title="* Tidak wajib diisi.<br/> PT Rekanan">
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
        <?php $this->load->view("template/modal/template") ?>
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
            $(document).ready(function(){
                $("#DU-kabkota_id").select2();  
                informasiOrder();
                getNBU();
                getKota();
                getDU();    
                getTP();
            })

            //getData
                function getDU()
                {
                    param = ""

                    tbl     = "orderbhumum";
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
                                $("#DU-modaldasar").val(resp['modal_dasar'])
                                $("#DU-jml_saham").val(resp['jml_saham'])
                                $("#DU-jml_saham_nominal").val(resp['jml_saham_nominal'])
                                $("#DU-modal_disetor").val(resp['modal_disetor'])
                                $("#DU-jml_saham_disetor").val(resp['jml_saham_disetor'])
                                $("#DU-bidang").val(resp['bidang'])
                                $("#DU-tujuan").val(resp['tujuan'])
                                $("#DU-alamat").val(resp['alamat'])
                                $("#DU-kabkota").val(resp['kabkota'])
                                $("#DU-kabkota_id").val(resp['kabkota_id']).change()
                                $("#DU-kabkota_nama").val(resp['kabkota_nama'])
                                $("#DU-jangka_waktu").val(resp['jangka_waktu'])
                                modal_disetor();
                            }
                        }
                    })
                    return false;   
                }
                function getNBU()
                {
                    param = ""

                    tbl     = "orderbhnama";
                    method  = "getData";
                    sort    = "";
                    limit   = "";
                    filter  = "id_order = '<?php echo $id_order ?>'";

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/perubahan_PT/NBUtable') ?>",
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter},
                        dataType:'json',
                        success: function (resp)
                        {
                            $("#tb-NBU").html(resp);
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
                                $("#io-biaya").html(returntoM(resp['biaya']))
                        }
                    })
                    return false;
                }
                function getTP()
                {
                    param = ""

                    tbl     = "orderbhpihak";
                    method  = "TPtable";
                    sort    = "";
                    limit   = "";
                    filter  = "id_order = '<?php echo $id_order ?>'";
                    where   = {}

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/perubahan_PT/doSome') ?>",
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
                $("#NBU").submit(function(){
                    if($("#NBU-nama").val() != "")
                    {
                        param = {nama : $("#NBU-nama").val()}
                        _id = $('#NBU-id').val();

                        $.ajax({
                            type:'post',
                            url:"<?php echo base_url('order/tambahBadanUsaha/'.$id_order) ?>",
                            dataType: "json",
                            data: {param : param, _id:_id},
                            success : function(result)
                            {
                                console.log(result)
                                notifShow("custom", "Badan Usaha Berhasil Disimpan");
                                getNBU();                   
                                $('#NBU')[0].reset();
                            }
                        });
                    }else{
                        notifShow('error', "Nama Badan Usaha Kosong");
                        $("#NBU-nama").focus()
                    }

                        return false;
                });

                $("#DU").submit(function(){
                        cek = before_simpan_du();
                        if (cek == "sukses"){
                            param = {'id_order'         : "<?php echo $id_order ?>",
                                     'modal_dasar'      : returntoN($("#DU-modaldasar").val()),
                                     'jml_saham'        : $("#DU-jml_saham").val(),
                                     'jml_saham_nominal': returntoN($("#DU-jml_saham_nominal").val()),
                                     'modal_disetor'    : returntoN($("#DU-modal_disetor").val()),
                                     'bidang'           : $("#DU-bidang").val(),
                                     'tujuan'           : $("#DU-tujuan").val(),
                                     'alamat'           : $("#DU-alamat").val(),
                                     'kabkota'          : $("#DU-kabkota option:selected").val(),
                                     'kabkota_id'       : $("#DU-kabkota_id").val(),
                                     'kabkota_nama'     : $("#DU-kabkota_nama").val(),
                                     'jangka_waktu'     : $("#DU-jangka_waktu option:selected").val(),
                                     'jml_saham_disetor': $("#DU-jml_saham_disetor").val(),
                                     'layanan'          : '14',
                                     'layanan_nama'     : 'Pendirian CV'}

                            tbl     = "orderbhumum";
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
                        modaldasar = $("#DU-modaldasar").val();
                        jumlahsaham = $("#DU-jml_saham").val();
                        modaldisetor = $("#DU-modal_disetor").val();
                        sahamygdisetor = $("#DU-jml_saham_disetor").val();
                        bidangusaha = $("#DU-bidang").val();
                        tujuanusaha = $("#DU-tujuan").val();
                        kedudukanperseroan = $("#DU-kabkota option:selected").val();
                        kedudukankabkota = $("#DU-kabkota_id").val();
                        jangkawaktu = $("#DU-jangka_waktu option:selected").val();

                        kondisi = "";
                        if((modaldasar != "") && (jumlahsaham != "") && (modaldisetor != "") && (sahamygdisetor != "") && (bidangusaha != "") && (tujuanusaha != "") && (kedudukanperseroan != "") && (kedudukankabkota != "") && (jangkawaktu != ""))
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
                    if($("#DU-modaldasar").val() == ""){
                        $("#DU-modaldasar").focus();
                    }else if ($("#DU-jml_saham").val() == ""){
                        $("#DU-jml_saham").focus();
                    }else if($("#DU-modal_disetor").val() == ""){
                        $("#DU-modal_disetor").focus();
                    }else if ($("#DU-jml_saham_disetor").val() == ""){
                        $("#DU-jml_saham_disetor").focus();
                    }else if($("#DU-bidang").val() == ""){
                        $("#DU-bidang").focus();
                    }else if ($("#DU-tujuan").val() == ""){
                        $( "#DU-tujuan" ).focus();
                    }else if($("#DU-kabkota option:selected").val() == ""){
                        $("#DU-kabkota").focus();
                    }else if ($("#DU-kabkota_id").val() == ""){
                        $("#DU-kabkota_id").focus();
                    }else if($("#DU-jangka_waktu option:selected").val() == ""){
                        $("#DU-jangka_waktu").focus();
                    }

                }

                $("#TP").submit(function(){
                        var cek = before_simpan_tp()
                        if (cek == "sukses"){
                            param = {'id_order'         : "<?php echo $id_order ?>",
                                     'nama'             : $("#TP-nama").val(),
                                     'ket'              : $("#TP-ket").val(),
                                     'ket_sk'           : $("#TP-ket_sk").val(),
                                     'komposisi'        : $("#TP-komposisi").val(),
                                     'nominal'          : $("#TP-nominal").val(),
                                     'posisi'           : $("#TP-posisi option:selected").val(),
                                     'persero_rekanan'  : $("#TP-persero_rekanan").val(),
                                     'ispenghadap'      : ($('#TP-penghadap').is(":checked") ? "1" : "0"),
                                     'ispemegangsaham'  : ($('#TP-pemegang_saham').is(":checked") ? "1" : "0"),
                                     'ispengurus'       : ($('#TP-pengurus').is(":checked") ? "1" : "0"),
                                     'layanan'          : '14',
                                     'layanan_nama'     : 'Pendirian CV',
                                     'diinput'          : hariini()
                                 };

                            tbl     = "orderbhpihak";
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
                                        param.file = resp['nama_acak']
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
                            $('.filelama').addClass('hide');
                            notifShow('custom',"Pihak Berhasil Disimpan");
                            getTP();
                            pihakLogic()
                        }
                    })
                }

                function before_simpan_tp(){
                    var kondisi;
                    nama = $("#TP-nama").val()
                    ket = $("#TP-ket").val()
                    if ((nama != "") && (ket != "")){
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
                    }else if($("#TP-ket").val() == ""){
                        $("#TP-ket").focus()
                    }
                }

            //Edit
                function NBUedit(selector)
                {
                    id      = $(selector).attr('data-id');
                    nama    = $(selector).attr('data-nama');
                    $("#NBU-id").val(id);
                    $("#NBU-nama").val(nama);
                }

                function pilih(selector)
                {
                    id = $(selector).attr('data-id');
                    param = {"dipilih" : "1"};

                    tbl     = "orderbhnama";
                    method  = "pilihNBU";
                    sort    = "";
                    limit   = "";
                    filter  = "_id = '"+id+"'";
                    where   = {"id_order"   : "<?php echo $id_order ?>",
                               "dipilih"    : id};

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/perubahan_PT/doSome') ?>/"+id,
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter, where:where},
                        dataType:'json',
                        success: function (resp)
                        {
                            getNBU();
                            notifShow("custom", "Data Berhasil Dipilih")
                        }
                    })
                }

                function TPedit(selector)
                {
                    _id = $(selector).attr('data-id');
                    param = {};

                    tbl     = "orderbhpihak";
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
                                 $("#TP-_id").val(resp['_id'])
                                 $("#TP-nama").val(resp['nama'])
                                 $("#TP-ket").val(resp['ket'])
                                 $("#TP-ket_sk").val(resp['ket_sk'])
                                 $("#TP-komposisi").val(resp['komposisi'])
                                 $("#TP-nominal").val(resp['nominal'])
                                 $("#TP-posisi").val(resp['posisi'])
                                 $("#TP-persero_rekanan").val(resp['persero_rekanan'])
                                 $('#TP-penghadap').prop("checked",(resp['ispenghadap'] == "0" ? false : true))
                                 $('#TP-pemegang_saham').prop("checked",(resp['ispemegangsaham'] == "0" ? false : true))
                                 $('#TP-pengurus').prop("checked",(resp['ispengurus'] == "0" ? false : true))
                                 if (resp['file'] != null){
                                     $(".filelama").removeClass("hide");
                                     $("#filelama").html(resp['file'])
                                 }
                            pihakLogic()
                             
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

                    tbl     = "orderbhpihak";
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
                            getNBU();
                            notifShow("custom", "Data Berhasil Dihapus")
                            getTP();
                        }
                    })
                }



                function NBUdel(selector)
                {

                    id = $(selector).attr("data-id");
                    nama = $(selector).attr("data-nama");
                    $("#delete-modal").modal('toggle');
                    $("#delete-id").html(id);
                    $("#delete-name").html(nama);
                    $("#btnDelete").attr("onclick", "NBUdelNow()");
                }

                function NBUdelNow()
                {
                    id = $("#delete-id").html();
                    param   = "";

                    tbl     = "orderbhnama";
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
                            getNBU();
                            notifShow("custom", "Data Berhasil Dihapus")
                        }
                    })
                }
        </script>
        <script >
            //DU
                //Hitung
                    $("#DU-jml_saham").keyup(function(){
                        jml_saham();
                        modal_disetor();
                    })

                    //Modal disetor
                    $("#DU-modal_disetor").keyup(function(){
                        modal_disetor();
                    })
                    //satuna

                    $("#DU-modaldasar").keyup(function(){
                        jml_saham();
                        modal_disetor();
                    })

                         
                    function jml_saham()
                    {

                        modaldasar = returntoN($("#DU-modaldasar").val());
                        saham = returntoN($("#DU-jml_saham").val());
                        jml_saham_nominal =  modaldasar/saham ;
                        if(jml_saham_nominal == "Infinity")
                        {
                            jml_saham_nominal = "";
                        }
                        console.log(jml_saham_nominal);
                        $("#DU-jml_saham_nominal").val(returntoM(jml_saham_nominal));
                    }

                    function modal_disetor()
                    {
                        modaldasar = returntoN($("#DU-modaldasar").val());
                        m_modal_disetor = returntoN($("#DU-modal_disetor").val());
                        persen = (modaldasar - (modaldasar - m_modal_disetor)) / modaldasar * 100;
                        persen = (persen == "Infinity" ? "" : persen);
                        $("#persen").html(persen+"%");
                    }
                //

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
        <script>
            //TP
                function cPengurus()
                {
                    pihakLogic();
                }
                function cPemegang()
                {
                    pihakLogic();
                }

                function pihakLogic()
                {

                    if ($('#TP-pemegang_saham').is(":checked") && ($('#TP-pengurus').is(":checked")))
                    {
                        $(".TP-pemegang").removeClass("hide");
                        $("#TP-posisi").val("Direktur");
                        $("#utama").prop('checked',true);
                    }else if (($('#TP-pemegang_saham').is(":checked")) && (!$('#TP-pengurus').is(":checked"))){
                        $(".TP-pemegang").removeClass("hide");
                        $("#TP-posisi").val("Direktur");
                        $("#utama").prop('checked',true);
                    }else if((!$('#TP-pemegang_saham').is(":checked")) && ($('#TP-pengurus').is(":checked"))){
                        $(".TP-pemegang").addClass("hide");
                        $(".TP-pengurus").removeClass("hide");
                        $("#TP-posisi").val("Direktur");
                        $("#utama").prop('checked',true);
                    }else{
                        $(".TP-pemegang").addClass("hide");
                        $("#TP-posisi").val("Tidak di Set");
                        $("#utama").prop('checked',false);
                    }
                }
        </script>
    </body>
</html>
