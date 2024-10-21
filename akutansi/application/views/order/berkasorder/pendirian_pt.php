<?php
    $dataOrder=$dataOrder->Data[0];
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
        <title>Berkas Pendirian PT | eNotaris.com</title>
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
                                    <h1>Berkas Pendirian PT</h1>
                                </div>
                            </div>  
                            <div class="col-md-3 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">   
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a role="button" href="<?php echo base_url('order/edit/'.$dataOrder->_id) ;?>" > Edit </a></li>
                                                <li><hr></li>
                                                <li><a role="button" href="<?php echo base_url('order/orderdokumen/'.$dataOrder->_id) ;?>" > Kelengkapan Dokumen </a></li>
                                                <li><a role="button" href="<?php echo base_url('order/berkassaksi/'.$dataOrder->_id) ;?>" > Berkas Saksi </a></li>
                                                <li><a role="button" href="<?php echo base_url('order/order-proses/'.$dataOrder->_id) ;?>" > Monitoring Proses </a></li>
                                                <li><a role="button" href="<?php echo base_url('billing/detail/'.$dataOrder->_id) ;?>" > Billing </a></li>
                                                <li><a role="button" href="<?php echo base_url('efiling/index/'.$dataOrder->_id) ;?>" > eFilling </a></li>
                                                <li><a role="button" href="<?php echo base_url('datatransaksi/index/'.$dataOrder->_id) ;?>" > Keuangan </a></li>

                                            </ul>
                                        </div>                       
                                        <a class="btn btn-primary" href="<?php echo base_url(); ?>order/Form-Laporan" >
                                            <i class="fa fa-print"></i>
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
                                                    <td><?php echo $dataOrder->_id; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tgl Order</th>
                                                    <td><?php echo $dataOrder->tgl_order; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Klien</th>
                                                    <td><a href="<?php echo base_url('klien/detail/'.$dataOrder->id_klien) ?>"><?php echo $dataOrder->nama_klien; ?></a></td>
                                                </tr>
                                                <tr>
                                                    <th>Layanan</th>
                                                    <td><?php echo $dataOrder->nama_layanan; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Bdn Hukum</th>
                                                    <td><?php echo $bdn_usaha; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Deskripsi</th>
                                                    <td><?php echo $dataOrder->deskripsi; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>No Akta</th>
                                                    <td><?php echo $dataOrder->no_akta; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>No Berkas</th>
                                                    <td><?php echo $dataOrder->no_berkas; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <?php $close = ($dataOrder->is_closed == "0" ? "Open" : "Close") ?>
                                                    <td><?php echo close; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Buat Akta</th>
                                                    <?php $akta = ($dataOrder->sdh_buatakta == "0" ? "Belum" : "Sudah") ?>
                                                    <td><?php echo $akta; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Sudah Cetak Akta</th>
                                                    <?php $sdh_cetak = ($dataOrder->sdh_cetakakta == "0" ? "Belum" : "Sudah") ?>
                                                    <td><?php echo $sdh_cetak; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Biaya</th>
                                                    <td><?php echo $dataOrder->biaya; ?></td>
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
                                        <form id="bdnUsaha">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Badan Usaha </label><font color="red">*</font>
                                                        <input type="text"  id="namaBdnUsaha" rel="tooltip"  class="form-control" title="* Wajib diisi.<br/>Nama Badan Usaha.<br/>Contoh: PT Mesin Pencari indonesia" autofocus>
                                                        <input type="hidden" id="id_bdn_usaha">
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
                                                                <tbody id="tb-bdn-usaha">
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-md-2">
                                                            <a class="btn btn-primary" onclick="simpanBdnUsaha();" title="Simpan Data">
                                                            Simpan
                                                            </a> 
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
                                        <form class="simpanUmum">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Modal Dasar </label><font color="red">*</font>
                                                        <input type="text"  data-thousands="." data-decimal="," data-prefix="Rp "  id="modaldasar" rel="tooltip"  class="form-control" title="*Wajib.<br/>  Modal dasar perusahaan yang .<br/> Untuk PT sebesar Rp. 50jt Jika utk CV tidak ditentukan batasannya.<br/>Format pengisian tanpa titik(.): 60000000, secara otomatis menjadi : 60.000.000">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-5"> 
                                                                    <label>Jumlah Saham </label><font color="red">*</font>
                                                                <input type="text"  id="jml_saham" rel="tooltip"  class="form-control" title="* Wajib diisi.<br/>Jumlah saham yang ada. Harga per saham akan dikonversi otomatis berdasarkan modal dasar<br/> Contoh : 20" >
                                                            </div>
                                                            <div class="col-md-1">
                                                                @
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Lembar </label>
                                                                <input type="text"  data-thousands="." data-decimal="," data-prefix="Rp " id="jml_saham_nominal" rel="tooltip"  class="form-control" title="" disabled>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Modal Disetor </label><font color="red">*</font>
                                                        <div class="input-group">
                                                            <div class="row">
                                                                <div class="col-md-10">
                                                                    <input type="text"  id="modal_disetor"  data-thousands="." data-decimal="," data-prefix="Rp "   rel="tooltip"  class="form-control money" title="* Wajib diisi.<br/>Modal awal yang disetorkan. Minimal 25% dari Modal Awal<br/>Format pengisian tanpa titik(.): 40000000, secara otomatis akan menjadi 40.000.000 "  >  
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <span class="help-inline" id="persen"></span>   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Saham Yang Disetor </label><font color="red">*</font>
                                                        <input type="text"  id="jml_saham_disetor" rel="tooltip"  class="form-control" title="* Wajib diisi.<br/> Jumlah saham disetor. Konversi saham dari jumlah modal disetor.<br/>Contoh : 20" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Bidang Usaha </label><font color="red">*</font>
                                                        <textarea type="text"  id="bidang" rel="tooltip"  class="form-control" title="* Wajib diisi Bidang usaha.<br/>Pisahkan dengan koma (;) untuk setiap bidang usaha.<br/> Contoh : Bidang perdagangan; jasa; konsultansi.Jika utk yayasan diisi dg nilai 'maksud dan tujuan'." ></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tujuan Usaha </label><font color="red">*</font>
                                                        <textarea type="text"  id="tujuan" rel="tooltip"  class="form-control" title="*Wajib diisi<br/> Diisi tujuan usaha." ></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat Perseroan </label>
                                                        <input type="text"  id="alamat" rel="tooltip"  class="form-control" title="* Tidak wajib diisi.<br/>Diisi alamat Badan Usaha.<br/>Contoh : Jl. Soekarno Hatta 15 D" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kedudukan Perseroan </label><font color="red">*</font>
                                                        <select type="text"  id="kabkota" rel="tooltip"  class="form-control" title="* Wajib diisi.<br/> Kedudukan perusahaan. Pilih Kabupaten/Kotamadya" >
                                                            <option value="Kotamadya">Kotamadya</option>
                                                            <option value="Kabupaten">Kabupaten</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kedudukan Kab/kota </label><font color="red">*</font>
                                                        <select class="form-control" id="kabkota_id" title="* Wajib diisi.<br/> Pilih Kabupaten atau Kota yang tersedia berdasarkan Area Kerja Notaris/PPAT." rel="tooltip">
                                                            <option>Pilih kota</option>
                                                        </select>
                                                        <input type="hidden" id="kabkota_nama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jangka Waktu </label><font color="red">*</font>
                                                        <select type="text"  id="jangka_waktu" rel="tooltip"  class="form-control" title="* Wajib diisi.<br/> Jangka waktu, Terbatas atau Tidak terbatas" >
                                                            <option value="Terbatas">Terbatas</option>
                                                            <option value="Tidak terbatas">Tidak Terbatas</option>
                                                        </select>
                                                    </div>
                                                    <div class="hide">
                                                        <input type="submit">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-md-2">
                                                            <a class="btn btn-primary" onclick="btnSimpanUmum();" title="Simpan Data">
                                                            Simpan
                                                            </a> 
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
                                                        <label>Posisi </label><font color="red">*</font>
                                                        <div class="input-group">
                                                            <div class="input-group-control">
                                                                <select rel="tooltip"  class="form-control" id="TP-posisi" title="* Wajib diisi.<br/>Pilih posisi pengurus.">
                                                                    <option value="Direktur">Direktur</option>
                                                                    <option value="Komisaris">Komisaris</option>
                                                                </select>
                                                            </div>
                                                            <span class="input-group-btn btn-right">
                                                            <button class="btn default" type="button" style="height: 35px;">
                                                                <div class="md-checkbox">
                                                                    <input type="checkbox" id="TP-isutama" class="md-check">
                                                                    <label for="TP-isutama">
                                                                        <span class="inc"></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span> Utama </label>
                                                                </div>
                                                            </button>
                                                            </span>
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
        <?php $this->load->view("template/modal/template") ?>
        <?php $this->load->view("template/modal/hapus") ?>
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
        var nama ="";
            $(document).ready(function(){
                $("#kabkota_id").select2();
                loadBdnUsaha();
                kota();
                jml_saham();
                tersedia();
                getTP();
            });

                function getTP()
                {
                    param = ""

                    tbl     = "orderbhpihak";
                    method  = "TPtable";
                    sort    = "";
                    limit   = "";
                    filter  = "id_order = '<?php echo $dataOrder->_id ?>'";
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

            //Cek Update Atau simpanbuat baru
            function tersedia()
            {
                $.ajax({
                    type:'POST',
                    url:'<?php echo base_url('order/cekBerkasOrder/'.$dataOrder->_id) ?>',
                    dataType: 'json',
                    success : function (data){
                        var result = data.Data[0];
                        var example = $("#kabkota_id").select2();
                         $("#modaldasar").val(result['modal_dasar']);
                         $("#jml_saham").val(result['jml_saham']);
                         $("#jml_saham_nominal").val(result['jml_saham_nominal']);
                         $("#modal_disetor").val(result['modal_disetor']);
                         $("#jml_saham_disetor").val(result['jml_saham_disetor']);
                         $("#bidang").val(result['bidang']);
                         $("#tujuan").val(result['tujuan']);
                         $("#alamat").val(result['alamat']);
                         $("#kabkota").val(result['kabkota']);
                         example.val(result['kabkota_id']).trigger('change');
                         $("#kabkota_nama").val(result['kabkota_nama']);
                         $("#jangka_waktu").val(result['jangka_waktu']);
                         modal_disetor();
                        refreshM();
                    }
                })
            }
            

            function kota(){
                $("#kabkota_nama").html("<option value=''>--- Pilih ---</option>");
                $.ajax({
                    type:'post',
                    url:'<?php echo base_url('order/kotanotaris') ?>',
                    dataType: 'json',
                    success : function(result){
                        $("#kabkota_id").html(result);
                    }
                })
            }

            $("#bdnUsaha").submit(function(){

                simpanBdnUsaha()
                return false;
            })

            function loadBdnUsaha()
            {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('order/tblBdnUsaha/'.$dataOrder->_id) ?>",
                    dataType: 'json',
                    success : function (result){
                       $("#tb-bdn-usaha").html(result);
                    }
                })
            }

            function delBdnUsaha(selector)
            {
                id = $(selector).attr("data-id");
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url('order/delBdnUsaha') ?>/"+id,
                    dataType: "json",
                    success : function (result) {
                        console.log(result);
                        loadBdnUsaha();
                    }

                })
            }

            function simpanBdnUsaha()
            {
                
                if($('#namaBdnUsaha').val() != "")
                {
                    param  = {nama : $("#namaBdnUsaha").val()}
                    _id = $("#id_bdn_usaha").val();
                    $.ajax({
                        type: 'POST',
                        url: "<?php echo base_url('order/tambahBadanUsaha/'.$dataOrder->_id) ?>",
                        dataType: "json",
                        data: {param : param, _id:_id},
                        success : function(result){
                            console.log(result);
                            notifShow("custom", "Badan Usaha Berhasil Disimpan");
                            loadBdnUsaha();
                            $("#namaBdnUsaha").val('');
                            $("#id_bdn_usaha").val('');
                        }

                    })
    
                }else
                {
                    $('#namaBdnUsaha').focus()
                    notifShow("error", "Masukkan data formulir dengan benar");
                }
                
            }

            function editBdnUsaha(selector) {
                id = $(selector).attr("data-id");
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url('order/getBdnUsaha') ?>/"+id,
                    dataType: "json",
                    success : function (result) {
                        console.log(result['nama']);
                        $("#namaBdnUsaha").val(result['nama']);
                        $("#id_bdn_usaha").val(result['_id']);
                    }

                })
            }

            function pilih(selector)
            {
                data = $(selector).attr("data-id");
                $.ajax ({
                    type: "POST",
                    url: "<?php echo base_url('order/pilihBdnUsaha') ?>",
                    data: {param:{data:data, order:<?php echo $dataOrder->_id ?>}},
                    dataType: 'json',
                    success : function (result) {
                        console.log(result);
                        loadBdnUsaha();
                    }
                })
            }


            //Simpan Data
                //Jenis simpan
                    $(".simpanUmum").submit(function(){

                        var kondisi = before_simpan_du();
                        console.log("save_data  = "+kondisi);
                        if(kondisi == "sukses"){
                            simpanUmum();
                        //    window.location.href = "<?php echo base_url(); ?>order";
                        }

                        return false;
                    })
                    function btnSimpanUmum()
                    {
                        var kondisi = before_simpan_du();
                        console.log("save_data  = "+kondisi);
                        if(kondisi == "sukses"){
                            simpanUmum();
                     //       window.location.href = "<?php echo base_url(); ?>order";
                        }

                        return false;
                    }
                //end jenis simpan
                function simpanUmum()
                {
                    dModalDasar = toN($("#modaldasar").val());
                    dJmlSahamNominal = toN($("#jml_saham_nominal").val());
                    dModalDisetor = toN($("#modal_disetor").val());
                    var param = {'id_order'         : "<?php echo $dataOrder->_id; ?>",
                                 'layanan'          : "<?php echo $dataOrder->layanan; ?>",
                                 'layanan_nama'     : "<?php echo $dataOrder->nama_layanan; ?>",
                                 'modal_dasar'      : dModalDasar,
                                 'jml_saham'        : $('#jml_saham').val(),
                                 'jml_saham_nominal':  dJmlSahamNominal,
                                 'modal_disetor'    : dModalDisetor,
                                 'jml_saham_disetor': $('#jml_saham_disetor').val(),
                                 'bidang'           : $('#bidang').val(),
                                 'tujuan'           : $('#tujuan').val(),
                                 'alamat'           : $('#alamat').val(),
                                 'kabkota'          : $('#kabkota option:selected').val(),
                                 'kabkota_id'       : $('#kabkota_id option:selected').val(),
                                 'kabkota_nama'     : $('#kabkota_id option:selected').html(),
                                 'jangka_waktu'     : $('#jangka_waktu option:selected').val()}
                    //console.log(param)
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url(); ?>order/simpanUmum",
                        data : {param : param},
                        dataType: 'json',
                        success : function (result){
                            console.log(result);
                            notifShow('custom','Data Umum berhasil disimpan')
                        }
                    });
                }
                function before_simpan_du()
                {
                        modaldasar = $("#modaldasar").val();
                        jumlahsaham = $("#jml_saham").val();
                        modaldisetor = $("#modal_disetor").val();
                        sahamygdisetor = $("#jml_saham_disetor").val();
                        bidangusaha = $("#bidang").val();
                        tujuanusaha = $("#tujuan").val();
                        kedudukanperseroan = $("#kabkota").val();
                        kedudukankabkota = $("#kabkota_id").val();
                        jangkawaktu = $("#jangka_waktu").val();

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
                    if($("#modaldasar").val() == ""){
                        $("#modaldasar").focus();
                    }else if ($("#jml_saham").val() == ""){
                        $("#jml_saham").focus();
                    }else if($("#modal_disetor").val() == ""){
                        $("#modal_disetor").focus();
                    }else if ($("#jml_saham_disetor").val() == ""){
                        $("#jml_saham_disetor").focus();
                    }else if($("#bidang").val() == ""){
                        $("#bidang").focus();
                    }else if ($("#tujuan").val() == ""){
                        $( "#tujuan" ).focus();
                    }else if($("#kabkota").val() == ""){
                        $("#kabkota").focus();
                    }else if ($("#kabkota_id").val() == ""){
                        $("#kabkota_id").focus();
                    }else if($("#jangka_waktu").val() == ""){
                        $("#jangka_waktu").focus();
                    }

                }
            //End Simpan Data

        </script>
        <script>
        //Umum
                $("#jml_saham").keyup(function(){
                    jml_saham();
                    modal_disetor();
                })

                //Modal disetor
                $("#modal_disetor").keyup(function(){
                    modal_disetor();
                })
                //satuna

                $("#modaldasar").keyup(function(){
                    jml_saham();
                    modal_disetor();
                    init = ($("#modaldasar").val() * 25)/100;
                    $("#modal_disetor").val(init);
                })
                     
                function jml_saham()
                {

                    modaldasar = toN($("#modaldasar").val());
                    saham = toN($("#jml_saham").val());
                    jml_saham_nominal =  modaldasar/saham ;
                    if(jml_saham_nominal == "Infinity")
                    {
                        jml_saham_nominal = "";
                    }
                    console.log(jml_saham_nominal);
                    $("#jml_saham_nominal").val(toM(jml_saham_nominal));
                }

                function modal_disetor()
                {
                    modaldasar = toN($("#modaldasar").val());
                    m_modal_disetor = toN($("#modal_disetor").val());
                    persen = (modaldasar - (modaldasar - m_modal_disetor)) / modaldasar * 100;
                    $("#persen").html(persen+"%");
                }

                //isi Hidden
                $("#kabkota_id").change(function(){
                    var param = {
                                 "id_kabkota" : $("#kabkota_id option:selected").val()
                                }
                     $.ajax({
                      type : "post",
                      url : '<?php echo base_url(); ?>ctrl_public/nama_kota',
                      data :{param : param},
                      cache : false,
                      dataType: 'json',
                      success : function(result){
                        $('#kabkota_nama').val(result["kota"]);
                      }
                    });
                })

                function toM(hargasatuan)
                {
                    
                        var number_string = hargasatuan.toString(), sisa  = number_string.length % 3, hargasatuan  = number_string.substr(0, sisa), ribuan  = number_string.substr(sisa).match(/\d{3}/g); if (ribuan) { separator = sisa ? '.' : ''; hargasatuan += separator + ribuan.join('.');}
                    console.log(number_string);
                    return hargasatuan;
                }

                function toN(nominal)
                {
                    jumlah = nominal.replace (/\./g, "", nominal);
                    return jumlah;
                }

                ///OratArit///
                $("#modaldasar").blur(function(){
                    $("#modaldasar").val(toM($("#modaldasar").val()));
                })

                $("#modaldasar").focus(function(){
                    $("#modaldasar").val(toN($("#modaldasar").val()));
                })

                $("#modal_disetor").blur(function(){
                    $("#modal_disetor").val(toM($("#modal_disetor").val()));
                })

                $("#modal_disetor").focus(function(){
                    $("#modal_disetor").val(toN($("#modal_disetor").val()));
                })

                function refreshM()
                {
                    $("#modaldasar").val(toM($("#modaldasar").val()));
                    $("#modal_disetor").val(toM($("#modal_disetor").val()));
                    $("#jml_saham_nominal").val(toM($("#jml_saham_nominal").val()));
                }

                ///End Orat arti
        </script>
        <script>
        // Pihak
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
                    }else if (($('#TP-pemegang_saham').is(":checked")) && (!$('#TP-pengurus').is(":checked"))){
                        $(".TP-pemegang").removeClass("hide");
                        $("#TP-posisi").val("Direktur");
                    }else if((!$('#TP-pemegang_saham').is(":checked")) && ($('#TP-pengurus').is(":checked"))){
                        $(".TP-pemegang").addClass("hide");
                        $(".TP-pengurus").removeClass("hide");
                        $("#TP-posisi").val("Direktur");
                    }else{
                        $(".TP-pemegang").addClass("hide");
                        $("#TP-posisi").val("Tidak di Set");
                    }

                }

                $("#TP").submit(function(){
                    cek = before_simpan_tp();
                    if(cek == "sukses"){
                        var utama = ($('#TP-isutama').is(":checked") ? "1" : "0");
                        param = {'id_order'         : "<?php echo $dataOrder->_id ?>",
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
                                 'layanan'          : '11',
                                 'layanan_nama'     : 'Pendirian PT',
                                 'isutama'          : utama,
                                 'diinput'          : hariini()
                             };
                        id = $("#TP-_id").val();
                         $(this).ajaxSubmit({
                            type:'post',
                            url:"<?php echo base_url('berkasorder/perubahan_PT/simpantp'); ?>",
                            data:{param:param, id:id},
                            dataType:'json',
                            success:function (resp)
                            {
                                console.log(resp);
                                $('#TP')[0].reset();
                                $('.filelama').addClass('hide');
                                notifShow('custom',"Pihak Berhasil Disimpan");
                                getTP();
                                pihakLogic()
                            }
                        });
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
                                 $(".filelama").removeClass('hide');
                                 $("#TP-_id").val(resp['_id'])
                                 $("#TP-nama").val(resp['nama'])
                                 $("#TP-ket").val(resp['ket'])
                                 $("#TP-ket_sk").val(resp['ket_sk'])
                                 $("#TP-komposisi").val(resp['komposisi'])
                                 $("#TP-nominal").val(resp['nominal'])
                                 $("#TP-posisi").val(resp['posisi'])
                                 $("#TP-persero_rekanan").val(resp['persero_rekanan'])

                                 if (resp['file'] != null){
                                     $(".filelama").removeClass("hide");
                                     $("#filelama").html(resp['file'])
                                 }

                                 $("#TP-isutama").prop("checked",(resp['isutama'] == "0" ? false : true))
                                 $('#TP-penghadap').prop("checked",(resp['ispenghadap'] == "0" ? false : true))
                                 $('#TP-pemegang_saham').prop("checked",(resp['ispemegangsaham'] == "0" ? false : true))
                                 $('#TP-pengurus').prop("checked",(resp['ispengurus'] == "0" ? false : true))

                            pihakLogic()
                             
                        }
                    })
                    return false;
                }

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
                            notifShow("custom", "Data Berhasil Dihapus")
                            getTP()
                        }
                    })
                }

                function editParaPihak(selector)
                {
                    id =  $(selector).attr("data-id");
                    $.ajax({
                        type: "POST",
                        data: {_id : id},
                        url: "<?php echo base_url('order/editpihak') ?>",
                        dataType: 'json',
                        success : function(result){
                            result = result.Data[0];
                            a = "" 
                            if(result['ispenghadap'] == "1")
                                {
                                 a= true ;
                                }
                                else{
                                 a= false ;
                                }
                            b = "";
                            if(result['ispemegangsaham'] == "1")
                                {
                                 b= true ;
                                }
                                else{
                                 b= false ;
                                }

                            c = "";
                            if(result['ispengurus'] == "1")
                                {
                                 c= true ;
                                }
                                else{
                                 c= false ;
                                }
                            $("#_id").val(id);
                            $("#layanan_nama").val(result['layanan_nama']);
                            $("#nama").val(result['nama']);
                            $("#penghadap").prop("checked", a);
                            $("#pemegang-saham").prop("checked", b);
                            $("#pengurus").prop("checked", c);
                            $("#ket").val(result['ket']);
                            $("#ket_sk").val(result['ket_sk']);
                            $("#komposisi").val(result['komposisi']);
                            $("#nominal").val(result['nominal']);
                            $("#posisi").val(result['posisi']);
                            (result['isutama'] == "1" ? $("#utama").prop("checked", true) : $("#utama").prop("checked", false));
                            $("#persero_rekanan").val(result['persero_rekanan']);
                            pihakLogic();
                        }
                    });
                }
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
    </body>
</html>
