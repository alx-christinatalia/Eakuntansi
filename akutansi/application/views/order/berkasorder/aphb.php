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
        <title>Berkas APHB | eNotaris.com</title>
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
                                    <h1>Berkas APHB</h1>
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
                                                        <label>Bukti Kepemilikan </label><font color="red">*</font>
                                                        <select id="DU-hak_milik" class="form-control" rel="tooltip" title="* Wajib diisi.<br/>Bukti kepemilikan tanah. ">
                                                            <option value="Sertifikat">Sertifikat</option>
                                                            <option value="Girik">Girik</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Nomor Hak </label><font color="red">*</font>
                                                        <input type="text" id="DU-status_tanah" class="form-control" rel="tooltip" title="* Wajib Diisi <br/> Jenis dan nomor hak. <br/> Contoh: Hak Milik No:528." required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Bentuk Obyek </label><font color="red">*</font>
                                                        <input type="text" id="DU-obyek" class="form-control" rel="tooltip" title="* Wajib Diisi <br/> Bentuk obyek <br/> Contoh : Sebidang Tanah." required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No Surat Ukur </label><font color="red">*</font>
                                                        <input type="text" id="DU-no_surat" class="form-control" rel="tooltip" title="* Wajib Diisi <br/> Nomor surat ukur. <br/> Contoh : 35x / Lowokwaru /2002" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tgl Surat Ukur </label><font color="red"> *</font>
                                                        <div class="input-group">
                                                            <input type="text" id="DU-tgl_srt_ukur" class="form-control myDate today" rel="tooltip" title="* Wajib diisi<br/> Tanggal surat ukur. <br />Format dd-mm-yyyy<br/> Contoh : 12-02-2014 " required>
                                                            <span class="input-group-addon ">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>NIB </label><font color="red">*</font>
                                                        <input type="text" id="DU-nib" class="form-control" rel="tooltip" title="* Wajib Diisi. <br/> No NOB. <br/> Contoh : 11.19.08.03.00xxx " required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No. NOP</label>
                                                        <input type="text" id="DU-no_nop" rel="tooltip" class="form-control" title="No. NOP. <br/> Contoh : 33.10.710.003.001-0xxx.0 " >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tahun NOP</label>
                                                        <input type="text" id="DU-thn_nop" rel="tooltip" class="form-control" title="Tahun NOP. <br/> Contoh : 2011 ">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-5"> 
                                                                    <label>Nominal NJOP </label>
                                                                <input type="text" id="DU-njop" rel="tooltip" title="Nominal NJOP. <br/> Contoh : 35.000.000" class="form-control myMoney">
                                                            </div>
                                                            <div class="col-md-1" style="padding-top:30px">
                                                                <span>/</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" id="DU-njop2" rel="tooltip" title="Luas Bidang Tanah yang di NJOP."  class="form-control myMoney" style="margin-top: 25px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tgl SSP </label><font color="red"> *</font>
                                                        <div class="input-group">
                                                            <input type="text" id="DU-ssp_tgl" title="Tanggal pembayaran SSP." rel="tooltip" class="form-control myDate" required>
                                                            <span class="input-group-addon ">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nominal SSP</label>
                                                        <input type="text" id="DU-ssp_rp" rel="tooltip" title="Nominal pembayaran SSP.<br/>Format penulisan tanpa titik(.)<br/> Contoh : 100000000, akan terformat 100.000.000" class="form-control myMoney">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tgl SSPD BPHTB </label>
                                                        <div class="input-group">
                                                            <input type="text" id="DU-sspd_tgl" title="Tanggal pembayaran SSPD BPHTB." rel="tooltip" class="form-control myDate" required>
                                                            <span class="input-group-addon ">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nominal SSPD BPHTB</label>
                                                        <input type="text" id="DU-sspd_rp" title="Nominal SSPD BPHTB <br/>Format penulisan tanpa titik(.)<br/> Contoh : 100000000, akan terformat 100.000.000" rel="tooltip" class="form-control myMoney">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-11">
                                                                <label>Luas Tanah</label><font color="red"> *</font>
                                                                <input type="text" id="DU-luas_tanah" title="*Wajib Diisi. <br/> Luas tanah. <br/> Contoh : 140" rel="tooltip" class="form-control" required>
                                                            </div>
                                                            <div class="col-md-1" style="margin-top: 30px">
                                                                 m<sup>2</sup>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-11">
                                                                <label>Luas Bangunan</label>
                                                                <input type="text" id="DU-luas_bangunan" title="Luas bangunan. <br/> Contoh : 140" rel="tooltip" class="form-control">
                                                            </div>
                                                            <div class="col-md-1" style="margin-top: 30px">
                                                                 m<sup>2</sup>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat</label><font color="red"> *</font>
                                                        <textarea type="text" id="DU-alamat" rel="tooltip" title="*Wajib Diisi <br/> Alamat kedudukan obyek tanah. " class="form-control area" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Desa/Kelurahan</label><font color="red"> *</font>
                                                        <input type="text" id="DU-desa" rel="tooltip" title="*Wajib Diisi <br/> Letak desa atau kelurahan tempat kedudukan obyek. <br/> Contoh : Lowokwaru. " class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kecamatan</label><font color="red"> *</font>
                                                        <input type="text" id="DU-kec" rel="tooltip" title="*Wajib Diisi <br/> Letak kecamatan tempat kedudukan obyek. <br/> Contoh : Lowokwaru." class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Provinsi</label><font color="red"> *</font>
                                                        <select type="text" id="DU-provinsi" rel="tooltip" title="* Wajib diisi.<br/> Pilih Provinsi yang tersedia berdasarkan Area Kerja Notaris/PPAT." class="form-control mySelect2 prov">
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kab / Kota</label><font color="red"> *</font>
                                                        <select type="text" id="DU-Kota"  rel="tooltip" title="* Wajib diisi.<br/> Pilih Kabupaten atau Kota yang tersedia berdasarkan Area Kerja Notaris/PPAT." class="form-control mySelect2 kota">
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Harga Transaksi</label>
                                                        <input type="text" id="DU-harga" rel="tooltip" title="Harga Transaksi. Jika terdapat harga transaksi. <br/>Format penulisan tanpa titik(.)<br/> Contoh : 100000000, akan terformat 100.000.000 " class="form-control myMoney" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Obyek Meliputi</label>
                                                        <textarea type="text" id="DU-meliputi" rel="tooltip" title="Obyek yang juga ikut dalam perjanjian. <br/>Contoh : Sebidang tanah pekarangan." class="form-control area" ></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Domisili Pengadilan</label><font color="red"> *</font>
                                                        <input type="text" id="DU-tmpt_domisili" rel="tooltip" title="* Wajib diisi.<br/>Domisili Kantor  Panitera Pengadilan Negeri. Contoh : Kabupaten Malang" class="form-control " required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pihak Pembayar</label>
                                                        <input type="text" id="DU-pihak_bayar" rel="tooltip" title="Jika terdapat nama yang membayar akta perjanjian." class="form-control ">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kesepakatan Pihak</label>
                                                        <textarea type="text" id="DU-kesepakatan" rel="tooltip" title="* Wajib Diisi <br/> Isi kesepakatan pihak-pihak yang tercantum dalam akta. <br/> Contoh : Pihak Pertama memperoleh dan menjadi pemegang tunggal dari : Hak Milik No.00120/Malang." class="form-control area" ></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Keterangan</label>
                                                        <textarea type="text" id="DU-keterangan" rel="tooltip" title="Keterangan tambahan jika diperlukan. <br/> (Akan muncul dalam kolom keterangan laporan PPAT)" class="form-control area" ></textarea>
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
                                            <input type="text" id="TP-_id" class="hide">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Pihak Ke </label><font color="red">*</font>
                                                        <select id="TP-pihak_ke" class="form-control" rel="tooltip" title="* Wajib diisi.<br/>Pihak ke" required>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pihak Alias </label><font color="red">*</font>
                                                        <select id="TP-pihak_alias" class="form-control" rel="tooltip"  title="* Wajib diisi.<br/>Pihak alias." required>
                                                            <option value="1">Pihak Yang Mengalihkan</option>
                                                            <option value="2">Pihak Yang Menerima</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama </label><font color="red">*</font>
                                                        <input id="TP-nama" class="form-control" rel="tooltip" title="* Wajib diisi.<br/>Nama pengurus.<br/>Contoh : Bagus Abdurrahman, ST" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <label>Keterangan </label><font color="red">*</font>
                                                            <textarea type="text"  rel="tooltip"  class="form-control" id="TP-ket" title="* Keterangan wajib diisi.<br/>Diisi dengan keterangan pihak terkait. Contoh : Lahir di Malang, pada tanggal 28(dua puluh delapan) SEPTEMBER 1988 (seribu sembilan ratus delapan puluh delapan), Warga Negara Indonesia, Karyawan Swasta, bertempat tinggal di Malang, Jalan Pasir Luhur 28, Rukun Tetangga 007, Rukun Warga 002, Desa Jenggolo, Kecamatan Kepanjen, Pemegang Kartu Tanda Penduduk dengan Nomor Induk Kependudukan 3507132809880001;"></textarea>
                                                                <span class="input-group-btn" style="padding-top: 7px;">
                                                                    <a data-toggle="modal" href="#template" onclick="ambiltem(this);" class="btn green-turquoise" title="Pilih Template" id="iket">
                                                                      <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="file">File</label>
                                                        <input type="file" name="image_file" rel="tooltip" id="file" title="* Tidak wajib diisi.<br/> File identitas , file hasil scan KTP pengurus. <br/>Maksimum besar file 4 MB. Dalam bentuk JPG/PNG ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <span class="caption-subject font-dark bold uppercase">Pihak Yang Menguasakan</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Nama Menguasakan </label>
                                                        <input type="text" id="TP-nama_menguasakan" class="form-control" title="Nama pihak yang menyetujui.<br/>Contoh : Bagus Abdurrahman, ST">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <label>Identitas Menguasakan </label>
                                                            <textarea type="text"  rel="tooltip"  class="form-control" id="TP-identitas_menguasakan" title="Diisi dengan keterangan pihak yang menyetujui. Contoh : Lahir di Malang, pada tanggal 28(dua puluh delapan) SEPTEMBER 1988 (seribu sembilan ratus delapan puluh delapan), Warga Negara Indonesia, Karyawan Swasta, bertempat tinggal di Malang, Jalan Pasir Luhur 28, Rukun Tetangga 007, Rukun Warga 002, Desa Jenggolo, Kecamatan Kepanjen, Pemegang Kartu Tanda Penduduk dengan Nomor Induk Kependudukan 3507132809880001;"></textarea>
                                                                <span class="input-group-btn" style="padding-top: 7px;">
                                                                    <a data-toggle="modal" href="#template" onclick="ambiltem(this);" class="btn green-turquoise" title="Pilih Template" id="ikuasa">
                                                                      <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Keterangan Kuasa </label>
                                                        <textarea type="text"  rel="tooltip"  class="form-control area" id="TP-ket_kuasa" title="Diisi keterangan kuasa yang diberikan <br/> Contoh : Demikian berdasarkan Akta Kuasa tertanggal 24-6-2013, Nomor 167, yang dibuat dihadapan saya Pejabat Selaku Notaris." ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <span class="caption-subject font-dark bold uppercase">Pihak Yang Mensetujui</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Nama Mensetujui </label>
                                                        <input type="text" id="TP-nama_menyetujui" rel="tooltip" class="form-control" title="Nama pihak yang menyetujui.<br/>Contoh : Bagus Abdurrahman, ST" >
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <label>Identitas Menyetujui</label>
                                                            <textarea type="text"  rel="tooltip"  class="form-control" id="TP-identitas_menyetujui" title="Diisi dengan identitas pihak. Contoh : Lahir di Malang, pada tanggal 28(dua puluh delapan) SEPTEMBER 1988 (seribu sembilan ratus delapan puluh delapan), Warga Negara Indonesia, Karyawan Swasta, bertempat tinggal di Malang, Jalan Pasir Luhur 28, Rukun Tetangga 007, Rukun Warga 002, Desa Jenggolo, Kecamatan Kepanjen, Pemegang Kartu Tanda Penduduk dengan Nomor Induk Kependudukan 3507132809880001;"></textarea>
                                                                <span class="input-group-btn" style="padding-top: 7px;">
                                                                    <a data-toggle="modal" href="#template" onclick="ambiltem(this);" class="btn green-turquoise" title="Pilih Template" id="ikuasa">
                                                                      <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Hubungan Dengan Pihak </label>
                                                        <input type="text" id="TP-stt_pihak_menyetujui" rel="tooltip" class="form-control" title="Hubungan dengan pihak pemberi fidusia <br/> Contoh: Istri, Suami, Ayah dll. " >
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-md-2">
                                                            <input type="submit" class="btn btn-primary"  value="Simpan"> 
                                                        </div> 
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
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
            function ambiltem(selector){
                //ambil id tombol yang diklik , 
                //jika iket maka unhide aket 
                //jika ikuasa maka unhide akuasa 
                //jika isetuju maka unhide asetuju
                var idtem = $(selector).attr('id');
                if (idtem == "iket"){
                    $("#aket").removeClass("hide");
                    $("#akuasa").addClass("hide");
                    $("#asetuju").addClass("hide");
                }else if (idtem == "ikuasa"){
                    $("#akuasa").removeClass("hide");
                    $("#aket").addClass("hide");
                    $("#asetuju").addClass("hide");
                }else if (idtem == "isetuju"){
                    $("#asetuju").removeClass("hide");
                    $("#aket").addClass("hide");
                    $("#akuasa").addClass("hide");
                }

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

            //keterangan
            function pakaitem(){
                $("#TP-ket").val($("#teks").val());
            }
            //menguasakan
            function pakaitem1(){
                $("#TP-identitas_menguasakan").val($("#teks").val());
            }
            //menyetujui
            function pakaitem2(){
                $("#TP-identitas_menyetujui").val($("#teks").val());
            }

        </script>
        <script>
            var p_nama_layanan = "" , p_id_layanan = "";
             var   jenis = "APHB"
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

                    tbl     = "orderppatumum";
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
                            
                                 $("#DU-hak_milik").val(resp['hak_milik'])
                                 $("#DU-status_tanah").val(resp['status_tanah'])
                                 $("#DU-obyek").val(resp['obyek'])
                                 $("#DU-no_surat").val(resp['no_surat'])
                                 $("#DU-tgl_srt_ukur").val(tglIndo(resp['tgl_srt_ukur']))
                                 $("#DU-nib").val(resp['nib'])
                                 $("#DU-no_nop").val(resp['no_nop'])
                                 $("#DU-thn_nop").val(resp['thn_nop'])
                                 $("#DU-njop").val(resp['njop'])
                                 $("#DU-njop2").val(resp['njop_m2'])
                                 $("#DU-ssp_rp").val(resp['ssp_rp'])
                                 $("#DU-ssp_tgl").val(tglIndo(resp['ssp_tgl']))
                                 $("#DU-sspd_tgl").val(tglIndo(resp['sspd_tgl']))
                                 $("#DU-sspd_rp").val(resp['sspd_rp'])
                                 $("#DU-luas_tanah").val(resp['luas_tanah'])
                                 $("#DU-luas_bangunan").val(resp['luas_bangunan'])
                                 $("#DU-alamat").val(resp['alamat'])
                                 $("#DU-desa").val(resp['desa'])
                                 $("#DU-kec").val(resp['kec'])
                                 $.when(myProvKot()).done(function(){
                                    $("#DU-provinsi").val(resp['id_prov'])
                                        myKabKota();
                                        $.when(myKabKota()).done(function(){
                                            $("#DU-Kota").val(resp['id_kabkota']).change()
                                        })
                                 })   
                                 $("#DU-meliputi").val(resp['meliputi'])
                                 $("#DU-tmpt_domisili").val(resp['tmpt_domisili'])
                                 $("#DU-keterangan").val(resp['keterangan'])
                                 $("#DU-pihak_bayar").val(resp['pihak_bayar']);
                                 $("#DU-harga").val(resp['harga'])
                                 $("#DU-kesepakatan").val(resp['kesepakatan'])

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

                    tbl     = "orderppatpihak";
                    method  = "TPtable";
                    sort    = "";
                    limit   = "";
                    filter  = "id_order = '<?php echo $id_order ?>'";
                    where   = {}

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/ppat_jb_tanah/doSome') ?>",
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
                        param = {'id_order'         : "<?php echo $id_order ?>",
                                 'hak_milik'        : $("#DU-hak_milik option:selected").val(),
                                 'status_tanah'     : $("#DU-status_tanah").val(),
                                 'obyek'            : $("#DU-obyek").val(),
                                 'no_surat'         : $("#DU-no_surat").val(),
                                 'tgl_srt_ukur'     : formatDate($("#DU-tgl_srt_ukur").val()),
                                 'nib'              : $("#DU-nib").val(),
                                 'no_nop'           : $("#DU-no_nop").val(),
                                 'thn_nop'          : $("#DU-thn_nop").val(),
                                 'njop'             : returntoN($("#DU-njop").val()),
                                 'njop_m2'          : returntoN($("#DU-njop2").val()),
                                 'ssp_rp'           : returntoN($("#DU-ssp_rp").val()),
                                 'ssp_tgl'          : formatDate($("#DU-ssp_tgl").val()),
                                 'sspd_tgl'         : formatDate($("#DU-sspd_tgl").val()),
                                 'sspd_rp'          : returntoN($("#DU-sspd_rp").val()),
                                 'luas_tanah'       : $("#DU-luas_tanah").val(),
                                 'luas_bangunan'    : $("#DU-luas_bangunan").val(),
                                 'alamat'           : $("#DU-alamat").val(),
                                 'desa'             : $("#DU-desa").val(),
                                 'kec'              : $("#DU-kec").val(),
                                 'id_prov'          : $("#DU-provinsi option:selected").val(),
                                 'id_kabkota'       : $("#DU-Kota option:selected").val(),
                                 'meliputi'         : $("#DU-meliputi").val(),
                                 'tmpt_domisili'    : $("#DU-tmpt_domisili").val(),
                                 'Keterangan'       : $("#DU-keterangan").val(),
                                 'pihak_bayar'      : $("#DU-pihak_bayar").val(),
                                 'kesepakatan'      : $("#DU-kesepakatan").val(),
                                 'harga'            : returntoN($("#DU-harga").val()),
                                 'layanan'          : p_id_layanan,
                                 }
                        console.log(param)
                        tbl     = "orderppatumum";
                        method  = "DUinsup";
                        sort    = "";
                        limit   = "";
                        filter  = "";
                        where   = {'id_order' : "<?php echo $id_order ?>"}
                        jenis   = "APHB"
                        $.ajax({
                            type:'post',
                            url:"<?php echo base_url('berkasorder/perubahan_PT/doSome') ?>",
                            data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter , where : where, jenis:jenis},
                            dataType:'json',
                            success: function(resp)
                            {
                                console.log(resp)
                                notifShow('custom',"Data Umum Berhasil Disimpan")
                                return false;
                            }
                        })
                    return false;
                })

                $("#TP").submit(function(){
                    
                        param = {'id_order'         : "<?php echo $id_order ?>",
                                 'pihak_ke'         : $("#TP-pihak_ke option:selected").val(),
                                 'pihak_alias'      : $("#TP-pihak_alias option:selected").val(),
                                 'nama'             : $("#TP-nama").val(),
                                 'ket'              : $("#TP-ket").val(),
                                 'nama_menguasakan' : $("#TP-nama_menguasakan").val(),
                                 'identitas_menguasakan'     : $("#TP-identitas_menguasakan").val(),
                                 'ket_kuasa'        : $("#TP-ket_kuasa").val(),
                                 'nama_menyetujui'  : $("#TP-nama_menyetujui").val(),
                                 'identitas_menyetujui' : $("#TP-identitas_menyetujui").val(),
                                 'stt_pihak_menyetujui' : $("#TP-stt_pihak_menyetujui").val(),
                                 'layanan'          : p_id_layanan,
                                 'tgl_input'          : hariini()
                             };

                        tbl     = "orderppatpihak";
                        method  = "TPinsup";
                        sort    = "";
                        limit   = "";
                        filter  = "";
                        where   = {'_id' : $("#TP-_id").val(),
                                    'id_order' : "<?php echo $id_order ?>"}

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
                                    TPData(param,tbl,method,sort,limit,filter,where,jenis);
                                }
                                
                                }
                            });
                        }else{
                            TPData(param,tbl,method,sort,limit,filter,wher,jenis);
                        }
                    return false;
                })
                function TPData(param,tbl,method,sort,limit,filter,where,jenis)
                {
                    console.log(param);
                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/perubahan_PT/doSome') ?>",
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter , where : where,jenis:jenis},
                        dataType:'json',
                        success: function (resp)
                        {
                            console.log(resp);
                            $('#TP')[0].reset();
                            notifShow('custom',"Pihak Berhasil Disimpan");
                            getTP();
                            pihakLogic()
                        }
                    })
                }

            //Edit


                function TPedit(selector)
                {
                    _id = $(selector).attr('data-id');
                    $("#TP-_id").val(_id);
                    param = {};
                    tbl     = "orderppatpihak";
                    method  = "getData";
                    sort    = "";
                    limit   = "";
                    filter  = "_id = '"+_id+"'";
                    where   = {};

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/perubahan_PT/doSome') ?>",
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter, where:where,jenis:jenis},
                        dataType:'json',
                        success: function (resp)
                        {   
                            resp = resp['Data'][0]
                            console.log(resp)

                             $("#TP-pihak_ke").val(resp['pihak_ke'])
                             $("#TP-pihak_alias ").val(resp['pihak_alias'])
                             $("#TP-nama").val(resp['nama'])
                             $("#TP-ket").val(resp['ket'])
                             $("#TP-nama_menguasakan").val(resp['nama_menguasakan'])
                              $("#TP-identitas_menguasakan").val(resp['identitas_menguasakan'])
                             $("#TP-ket_kuasa").val(resp['ket_kuasa'])
                             $("#TP-nama_menyetujui").val(resp['nama_menyetujui'])
                              $("#TP-identitas_menyetujui").val(resp['identitas_menyetujui'])
                              $("#TP-stt_pihak_menyetujui").val(resp['stt_pihak_menyetujui'])

                             
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

                    tbl     = "orderppatpihak";
                    method  = "deleteData";
                    sort    = "";
                    limit   = "";
                    filter  = "_id = '"+id+"'";
                    where   = {'_id' : id,
                               'id_order' : "<?php echo $id_order ?>"}

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/perubahan_PT/doSome') ?>",
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter, where:where,jenis:jenis},
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
                    }else if (($('#TP-pemegang_saham').is(":checked")) && (!$('#TP-pengurus').is(":checked"))){
                        $(".TP-pemegang").removeClass("hide");
                    }else if((!$('#TP-pemegang_saham').is(":checked")) && ($('#TP-pengurus').is(":checked"))){
                        $(".TP-pemegang").addClass("hide");
                        $(".TP-pengurus").removeClass("hide");
                    }else{
                        $(".TP-pemegang").addClass("hide");
                    }

                }
        </script>
    </body>
</html>
