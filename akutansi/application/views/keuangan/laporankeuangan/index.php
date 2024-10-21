<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Laporan Keuangan | eAkutansi</title>
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
        
        <link href="<?php echo base_url("assets/daterange/daterangepicker.css"); ?>" rel="stylesheet" type="text/css" />
        

        
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo/favicon.ico"); ?>">
        <link rel="icon" type="image/png" href="<?php echo base_url("asset/img/logo/E.png"); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo base_url("asset/img/logo/E.png"); ?>" sizes="16x16" />

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
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <?php $this->load->view("template/header"); ?>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view("template/sidebar", ["active" => "keuangan", "sub" => "laporan"]); ?>

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
                                    <h1>Laporan</h1>
                                </div>
                            </div> 
                            <div class="col-md-2 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">                                 
                                        <a onclick="cetakatas();" class="btn btn-primary" title="Cetak Dokumen" id="cetak">
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
                            <div class="col-md-4">
                                <div class="portlet light bordered table-list">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-bars"></i>
                                            <span class="caption-subject "> Daftar Laporan</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-container">
                                            <table class="table table-responsive table-striped" style='cursor:pointer'>
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20%;">No</th>
                                                        <th style="width: 80%;">Nama</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="in" onclick="jurnaltransaksi();" style="background: #dbdbdb">
                                                        <td>1</td>
                                                        <td>Jurnal Transaksi</td>
                                                    </tr>
                                                    <tr class="in" onclick="piutangperkontak();">
                                                        <td>2</td>
                                                        <td>Piutang Per Kontak</td>
                                                    </tr>
                                                    <tr class="in" onclick="hutangperkontak();">
                                                        <td>3</td>
                                                        <td>Hutang Per Kontak</td>
                                                    </tr>
                                                    <tr class="in" onclick="bukubesar();">
                                                        <td>4</td>
                                                        <td>Buku Besar (General Ledger)</td>
                                                    </tr>
                                                    <tr class="in" onclick="labarugi();">
                                                        <td>5</td>
                                                        <td>Laba / Rugi (Aktivitas Keuangan)</td>
                                                    </tr>
                                                    <tr class="in" onclick="perubahanmodal();">
                                                        <td>6</td>
                                                        <td>Perubahan Modal (Ekuitas)</td>
                                                    </tr>
                                                    <tr class="in" onclick="neraca();">
                                                        <td>7</td>
                                                        <td>Neraca (Posisi Keuangan)</td>
                                                    </tr>
                                                    <tr class="in" onclick="aruskas();">
                                                        <td>8</td>
                                                        <td>Arus Kas (Cash Flow)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8" id="jurnaltransaksi">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-filter"></i>
                                            <span class="caption-subject "> Filter Jurnal Transaksi</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="save_data" id="save_data">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Tgl Transaksi </label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="tgltransaksi" id="tgl_mulai">
                                                                <span class="input-group-btn">
                                                                    <button class="btn" type="button" title="Batal" onclick="tgl_batal();" >X</button>
                                                                </span>
                                                            </div>
                                                    </div>
                                                   <div class="form-group">
                                                        <label>Jenis</label>
                                                        <select class="form-control" id="jeniskas">
                                                            <option value="">Semua</option>
                                                            <option value="KM">Kas/Bank Masuk</option>
                                                            <option value="KK">Kas/Bank Keluar</option>
                                                            <option value="JU">Jurnal Umum</option>
                                                            <option value="JA">Jurnal Penyesuaian</option>
                                                            <option value="SA">Saldo Awal</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No Transaksi </label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Nomor Transaksi" id="notrans" disabled>
                                                                <input type="hidden" id="id_notrans">
                                                                <span class="input-group-btn">
                                                                    <a data-toggle="modal" href="#mnotrans" onclick="ref_notrans();" class="btn green-turquoise" title="Pilih Nomor Transaksi">
                                                                      <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kontak</label>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <select class="form-control" class="col-md-4" id="jenis">
                                                                        <option value="1" selected="">Kontak</option>
                                                                        <option value="0">Klien</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6" id="kontak">
                                                                    <div class="input-group" class="col-md-4">
                                                                        <input type="text" id="inkontak" placeholder="Kontak" class="form-control" disabled>
                                                                        <input type="hidden" id="id_kontak">
                                                                        <span class="input-group-btn">
                                                                            <a data-toggle="modal" href="#mkontak" onclick="ref_kontak();" class="btn green-turquoise" title="Pilih Kontak">
                                                                              <i class="fa fa-search"></i>
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" id="klien">
                                                                    <div class="input-group" class="col-md-4">
                                                                        <input type="text" id="inklien" placeholder="Klien" class="form-control" disabled>
                                                                        <input type="hidden" id="id_klien">
                                                                        <span class="input-group-btn">
                                                                            <a data-toggle="modal" href="#mklien" onclick="ref_klien();" class="btn green-turquoise" title="Pilih Klien">
                                                                              <i class="fa fa-search"></i>
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                    <input type="hidden" id="jadi">
                                                                </div>
                                                            </div>
                                                    </div>
                                                   <div class="form-group">
                                                        <label>Akun</label>
                                                        <select class="form-control" id="akun">
                                                            <option value="">Semua Akun</option>
                                                                <?php foreach($akun->Data as $data) { 
                                                                    echo "<option value='$data->kode'>$data->kode - $data->nama</option>";
                                                                } ?>
                                                        </select>
                                                    </div>
                                                   <div class="form-group">
                                                        <label>Posting</label>
                                                        <select class="form-control" id="posting">
                                                            <option value="">Semua</option>
                                                            <option value="-0">Belum</option>
                                                            <option value="1">Sudah</option>
                                                        </select>
                                                    </div>
                                                   <div class="form-group">
                                                        <label>Pilihan</label>
                                                        <div class="md-checkbox-inline">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="ttdjurnal" name="ttdjurnal" class="md-check">
                                                                <label for="ttdjurnal">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Kotak Tanda Tangan </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <a class="btn btn-primary" onclick="cetakjurnaltransaksi();">Cetak</a> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8" id="piutangperkontak">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-filter"></i>
                                            <span class="caption-subject "> Piutang Per Kontak </span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="save_data" id="save_data">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Bulan/Tahun </label>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <select class="form-control bulan" id="bulan1">
                                                                        <option value="01">Januari</option>
                                                                        <option value="02">Februari</option>
                                                                        <option value="03">Maret</option>
                                                                        <option value="04">April</option>
                                                                        <option value="05">Mei</option>
                                                                        <option value="06">Juni</option>
                                                                        <option value="07">Juli</option>
                                                                        <option value="08">Agustus</option>
                                                                        <option value="09">September</option>
                                                                        <option value="10">Oktober</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">Desember</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <select class="form-control tahun" id="tahun1">
                                                                        <option value="2027">2027</option>
                                                                        <option value="2025">2026</option>
                                                                        <option value="2024">2024</option>
                                                                        <option value="2023">2023</option>
                                                                        <option value="2022">2022</option>
                                                                        <option value="2021">2021</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2018">2018</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kontak</label>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <select class="form-control" class="col-md-4" id="jenis1">
                                                                        <option value="1" selected="">Kontak</option>
                                                                        <option value="0">Klien</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6" id="kontak1">
                                                                    <div class="input-group" class="col-md-4">
                                                                        <input type="text" id="inkontak1" placeholder="Kontak" class="form-control" disabled>
                                                                        <input type="hidden" id="id_kontak1">
                                                                        <span class="input-group-btn">
                                                                            <a data-toggle="modal" href="#mkontak1" onclick="ref_kontak1();" class="btn green-turquoise" title="Pilih Kontak">
                                                                              <i class="fa fa-search"></i>
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" id="klien1">
                                                                    <div class="input-group" class="col-md-4">
                                                                        <input type="text" id="inklien1" placeholder="Klien" class="form-control" disabled>
                                                                        <input type="hidden" id="id_klien1">
                                                                        <span class="input-group-btn">
                                                                            <a data-toggle="modal" href="#mklien1" onclick="ref_klien1();" class="btn green-turquoise" title="Pilih Klien">
                                                                              <i class="fa fa-search"></i>
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                   <div class="form-group">
                                                        <label>Pilihan</label>
                                                        <div class="md-checkbox-list">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="ttdpiutang" name="ttdpiutang" value="1" class="md-check">
                                                                <label for="ttdpiutang">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Kotak Tanda Tangan </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="kodepiutang" name="kodepiutang" value="1" class="md-check">
                                                                <label for="kodepiutang">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Kode Akun </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="nolpiutang" name="nolpiutang" value="1" class="md-check">
                                                                <label for="nolpiutang">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Yang Bernilai 0 </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <a class="btn btn-primary" onclick="cetakpiutangperkontak();">Cetak</a> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8" id="hutangperkontak">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-filter"></i>
                                            <span class="caption-subject "> Hutang Per Kontak </span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="save_data" id="save_data">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Bulan/Tahun </label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <select class="form-control bulan" id="bulan2">
                                                                        <option value="01">Januari</option>
                                                                        <option value="02">Februari</option>
                                                                        <option value="03">Maret</option>
                                                                        <option value="04">April</option>
                                                                        <option value="05">Mei</option>
                                                                        <option value="06">Juni</option>
                                                                        <option value="07">Juli</option>
                                                                        <option value="08">Agustus</option>
                                                                        <option value="09">September</option>
                                                                        <option value="10">Oktober</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">Desember</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <select class="form-control tahun" id="tahun2">
                                                                    <option value="2027">2027</option>
                                                                    <option value="2025">2026</option>
                                                                    <option value="2024">2024</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017" selected="">2017</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kontak</label>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <select class="form-control" class="col-md-4" id="jenis2">
                                                                        <option value="1" selected="">Kontak</option>
                                                                        <option value="0">Klien</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6" id="kontak2">
                                                                    <div class="input-group" class="col-md-4">
                                                                        <input type="text" id="inkontak2" placeholder="Kontak" class="form-control" disabled>
                                                                        <input type="hidden" id="id_kontak2">
                                                                        <span class="input-group-btn">
                                                                            <a data-toggle="modal" href="#mkontak2" onclick="ref_kontak2();" class="btn green-turquoise" title="Pilih Kontak">
                                                                              <i class="fa fa-search"></i>
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" id="klien2">
                                                                    <div class="input-group" class="col-md-4">
                                                                        <input type="text" id="inklien2" placeholder="Klien" class="form-control" disabled>
                                                                        <input type="hidden" id="id_klien2">
                                                                        <span class="input-group-btn">
                                                                            <a data-toggle="modal" href="#mklien2" onclick="ref_klien2();" class="btn green-turquoise" title="Pilih Klien">
                                                                              <i class="fa fa-search"></i>
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                   <div class="form-group">
                                                        <label>Pilihan</label>
                                                        <div class="md-checkbox-list">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="ttdhutang" name="ttdhutang" value="1" class="md-check">
                                                                <label for="ttdhutang">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Kotak Tanda Tangan </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="kodehutang" name="kodehutang" value="1" class="md-check">
                                                                <label for="kodehutang">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Kode Akun </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="nolhutang" name="nolhutang" value="1" class="md-check">
                                                                <label for="nolhutang">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Yang Bernilai 0 </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <a class="btn btn-primary" onclick="cetakhutangperkontak();">Cetak</a> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8" id="bukubesar">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-filter"></i>
                                            <span class="caption-subject "> Filter Buku Besar </span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="save_data" id="save_data">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Bulan/Tahun </label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <select class="form-control bulan" id="bulan3">
                                                                        <option value="01">Januari</option>
                                                                        <option value="02">Februari</option>
                                                                        <option value="03">Maret</option>
                                                                        <option value="04">April</option>
                                                                        <option value="05">Mei</option>
                                                                        <option value="06">Juni</option>
                                                                        <option value="07">Juli</option>
                                                                        <option value="08">Agustus</option>
                                                                        <option value="09">September</option>
                                                                        <option value="10">Oktober</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">Desember</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <select class="form-control tahun" id="tahun3">
                                                                    <option value="2027">2027</option>
                                                                    <option value="2026">2026</option>
                                                                    <option value="2024">2025</option>
                                                                    <option value="2024">2024</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017" selected="">2017</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   <div class="form-group">
                                                        <label>Akun</label>
                                                        <select class="form-control" id="akun1">
                                                            <option value="0">Semua Akun</option>
                                                                <?php foreach($akun->Data as $data) { 
                                                                    echo "<option value='$data->kode'>$data->kode - $data->nama</option>";
                                                                } ?>
                                                        </select>
                                                    </div>
                                                   <div class="form-group">
                                                        <label>Pilihan</label>
                                                        <div class="md-checkbox-list">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="ttdbuku" name="ttdbuku" class="md-check">
                                                                <label for="ttdbuku">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Kotak Tanda Tangan </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="kodebuku" name="kodebuku" class="md-check">
                                                                <label for="kodebuku">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Kode Akun </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <a class="btn btn-primary" onclick="cetakbukubesar();">Cetak</a> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8" id="labarugi">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-filter"></i>
                                            <span class="caption-subject "> Filter Laba Rugi </span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="save_data" id="save_data">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Bulan/Tahun </label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <select class="form-control bulan" id="bulan4">
                                                                        <option value="01">Januari</option>
                                                                        <option value="02">Februari</option>
                                                                        <option value="03">Maret</option>
                                                                        <option value="04">April</option>
                                                                        <option value="05">Mei</option>
                                                                        <option value="06">Juni</option>
                                                                        <option value="07">Juli</option>
                                                                        <option value="08">Agustus</option>
                                                                        <option value="09">September</option>
                                                                        <option value="10">Oktober</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">Desember</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <select class="form-control tahun" id="tahun4">
                                                                    <option value="2027">2027</option>
                                                                    <option value="2025">2026</option>
                                                                    <option value="2024">2024</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017" selected="">2017</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   <div class="form-group">
                                                        <label>Pilihan</label>
                                                        <div class="md-checkbox-list">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="ttdlaba" name="ttdlaba" value="1" class="md-check">
                                                                <label for="ttdlaba">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Kotak Tanda Tangan </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="kodelaba" name="kodelaba" value="1" class="md-check">
                                                                <label for="kodelaba">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Kode Akun </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="nollaba" name="nollaba" value="1" class="md-check">
                                                                <label for="nollaba">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Yang Bernilai 0 </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <a class="btn btn-primary" onclick="cetaklabarugi();">Cetak</a> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8" id="perubahanmodal">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-filter"></i>
                                            <span class="caption-subject "> Filter Perubahan Modal </span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="save_data" id="save_data">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Bulan/Tahun </label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <select class="form-control bulan" id="bulan5">
                                                                        <option value="01">Januari</option>
                                                                        <option value="02">Februari</option>
                                                                        <option value="03">Maret</option>
                                                                        <option value="04">April</option>
                                                                        <option value="05">Mei</option>
                                                                        <option value="06">Juni</option>
                                                                        <option value="07">Juli</option>
                                                                        <option value="08">Agustus</option>
                                                                        <option value="09">September</option>
                                                                        <option value="10">Oktober</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">Desember</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <select class="form-control tahun" id="tahun5">
                                                                    <option value="2027">2027</option>
                                                                    <option value="2025">2026</option>
                                                                    <option value="2024">2024</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017" selected="">2017</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   <div class="form-group">
                                                        <label>Pilihan</label>
                                                        <div class="md-checkbox-list">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="ttdperubahan" name="ttdperubahan" value="1" class="md-check">
                                                                <label for="ttdperubahan">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Kotak Tanda Tangan </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="kodeperubahan" name="kodeperubahan" value="1" class="md-check">
                                                                <label for="kodeperubahan">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Kode Akun </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="nolperubahan" name="nolperubahan" value="1" class="md-check">
                                                                <label for="nolperubahan">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Yang Bernilai 0 </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <a class="btn btn-primary" onclick="cetakperubahanmodal();">Cetak</a> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8" id="neraca">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-filter"></i>
                                            <span class="caption-subject "> Filter Neraca </span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="save_data" id="save_data">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Bulan/Tahun </label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <select class="form-control bulan" id="bulan6">
                                                                        <option value="01">Januari</option>
                                                                        <option value="02">Februari</option>
                                                                        <option value="03">Maret</option>
                                                                        <option value="04">April</option>
                                                                        <option value="05">Mei</option>
                                                                        <option value="06">Juni</option>
                                                                        <option value="07">Juli</option>
                                                                        <option value="08">Agustus</option>
                                                                        <option value="09">September</option>
                                                                        <option value="10">Oktober</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">Desember</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <select class="form-control tahun" id="tahun6">
                                                                    <option value="2027">2027</option>
                                                                    <option value="2025">2026</option>
                                                                    <option value="2024">2024</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017" selected="">2017</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   <div class="form-group">
                                                        <label>Pilihan</label>
                                                        <div class="md-checkbox-list">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="ttdneraca" name="ttdneraca" value="1" class="md-check">
                                                                <label for="ttdneraca">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Kotak Tanda Tangan </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="kodeneraca" name="kodeneraca" value="1" class="md-check">
                                                                <label for="kodeneraca">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Kode Akun </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="nolneraca" name="nolneraca" value="1" class="md-check">
                                                                <label for="nolneraca">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Yang Bernilai 0 </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <a class="btn btn-primary" onclick="cetakneraca();">Cetak</a> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8" id="aruskas">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-filter"></i>
                                            <span class="caption-subject "> Filter Arus Kas </span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="save_data" id="save_data">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label>Bulan/Tahun </label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <select class="form-control bulan" id="bulan7">
                                                                        <option value="01">Januari</option>
                                                                        <option value="02">Februari</option>
                                                                        <option value="03">Maret</option>
                                                                        <option value="04">April</option>
                                                                        <option value="05">Mei</option>
                                                                        <option value="06">Juni</option>
                                                                        <option value="07">Juli</option>
                                                                        <option value="08">Agustus</option>
                                                                        <option value="09">September</option>
                                                                        <option value="10">Oktober</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">Desember</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <select class="form-control tahun" id="tahun7">
                                                                    <option value="2027">2027</option>
                                                                    <option value="2025">2026</option>
                                                                    <option value="2024">2024</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017" selected="">2017</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   <div class="form-group">
                                                        <label>Pilihan</label>
                                                        <div class="md-checkbox-list">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="ttdarus" name="ttdarus" value="1" class="md-check">
                                                                <label for="ttdarus">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Kotak Tanda Tangan </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="kodearus" name="kodearus" value="1" class="md-check">
                                                                <label for="kodearus">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Kode Akun </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="nolarus" name="nolarus" value="1" class="md-check">
                                                                <label for="nolarus">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tampilkan Yang Bernilai 0 </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <a class="btn btn-primary" onclick="cetakaruskas();">Cetak</a> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
        <!--Form Cetak-->
            <!--Jurnal Transaksi-->
                    <div class="hidden">
                        <form name="form_jurnaltransaksi" method="POST" action="<?php echo base_url(); ?>laporankeuangan/cetakjurnaltransaksi" target = '_blank' method="POST">
                            <input type="hidden" name="jttgl" id="jttgl">
                            <input type="hidden" name="jtjenis" id="jtjenis">
                            <input type="hidden" name="jtnotrans" id="jtnotrans" >
                            <input type="hidden" name="jtposting" id="jtposting" >
                            <input type="hidden" name="jtakuntrans" id="jtakuntrans" >
                            <input type="hidden" name="jtkontak" id="jtkontak" >
                            <input type="hidden" name="jtklien" id="jtklien" >
                            <input type="hidden" name="isklien" id="isklien" >
                            <input type="hidden" name="jurnalttd" id="jurnalttd" >
                        </form>
                    </div>

            <!--piutang per kontak-->
                    <div class="hidden">
                        <form name="form_piutangperkontak" method="POST" action="<?php echo base_url(); ?>laporankeuangan/cetakpiutangperkontak" target = '_blank' method="POST">
                            <input type="hidden" name="ppbulan" id="ppbulan">
                            <input type="hidden" name="pptahun" id="pptahun">
                            <input type="hidden" name="ppkontak1" id="ppkontak1" >
                            <input type="hidden" name="ppklien1" id="ppklien1" >
                            <input type="hidden" name="isklien1" id="isklien1" >
                            <input type="hidden" name="piutang" value="13" >
                            <input type="hidden" name="piutangttd" id="piutangttd" >
                            <input type="hidden" name="piutangkode" id="piutangkode" >
                            <input type="hidden" name="piutangnol" id="piutangnol" >
                        </form>
                    </div>

            <!--hutang per kontak-->
                    <div class="hidden">
                        <form name="form_hutangperkontak" method="POST" action="<?php echo base_url(); ?>laporankeuangan/cetakhutangperkontak" target = '_blank' method="POST">
                            <input type="hidden" name="hpbulan" id="hpbulan">
                            <input type="hidden" name="hptahun" id="hptahun">
                            <input type="hidden" name="hpkontak" id="hpkontak" >
                            <input type="hidden" name="hpklien" id="hpklien" >
                            <input type="hidden" name="isklien2" id="isklien2" >
                            <input type="hidden" name="hutang" id="hutang" value="2">
                            <input type="hidden" name="hutangttd" id="hutangttd" >
                            <input type="hidden" name="hutangkode" id="hutangkode" >
                            <input type="hidden" name="hutangnol" id="hutangnol" >
                        </form>
                    </div>

            <!--Buku Besar-->
                    <div class="hidden">
                        <form name="form_bukubesar" method="POST" action="<?php echo base_url(); ?>laporankeuangan/cetakbukubesar" target = '_blank' method="POST">
                            <input type="hidden" name="bbbulan" id="bbbulan">
                            <input type="hidden" name="bbtahun" id="bbtahun">
                            <input type="hidden" name="bbakun" id="bbakun" >
                            <input type="hidden" name="bukuttd" id="bukuttd" >
                            <input type="hidden" name="bukukode" id="bukukode" >
                        </form>
                    </div>

            <!--Laba / Rugi-->
                    <div class="hidden">
                        <form name="form_labarugi" method="POST" action="<?php echo base_url(); ?>laporankeuangan/cetaklabarugi" target = '_blank' method="POST">
                            <input type="hidden" name="lrbulan" id="lrbulan">
                            <input type="hidden" name="lrtahun" id="lrtahun">
                            <input type="hidden" name="labattd" id="labattd">
                            <input type="hidden" name="labakode" id="labakode">
                            <input type="hidden" name="labanol" id="labanol" >
                        </form>
                    </div>

            <!--Perubahan Modal-->
                    <div class="hidden">
                        <form name="form_perubahanmodal" method="POST" action="<?php echo base_url(); ?>laporankeuangan/cetakperubahanmodal" target = '_blank' method="POST">
                            <input type="hidden" name="pmbulan" id="pmbulan">
                            <input type="hidden" name="pmtahun" id="pmtahun">
                            <input type="hidden" name="perubahanttd" id="perubahanttd">
                            <input type="hidden" name="perubahankode" id="perubahankode">
                            <input type="hidden" name="perubahannol" id="perubahannol" >
                        </form>
                    </div>

            <!--Neraca-->
                    <div class="hidden">
                        <form name="form_neraca" method="POST" action="<?php echo base_url(); ?>laporankeuangan/cetakneraca" target = '_blank' method="POST">
                            <input type="hidden" name="nbulan" id="nbulan">
                            <input type="hidden" name="ntahun" id="ntahun">
                            <input type="hidden" name="neracattd" id="neracattd">
                            <input type="hidden" name="neracakode" id="neracakode">
                            <input type="hidden" name="neracanol" id="neracanol" >
                        </form>
                    </div>

            <!--Arus Kas-->
                    <div class="hidden">
                        <form name="form_aruskas" method="POST" action="<?php echo base_url(); ?>laporankeuangan/cetakaruskas" target = '_blank' method="POST">
                            <input type="hidden" name="akbulan" id="akbulan">
                            <input type="hidden" name="aktahun" id="aktahun">
                            <input type="hidden" name="arusttd" id="arusttd">
                            <input type="hidden" name="aruskode" id="aruskode">
                            <input type="hidden" name="arusnol" id="arusnol" >
                        </form>
                    </div>
                    </div>

        <?php $this->load->view("template/footer"); ?>
        <?php $this->load->view("keuangan/laporankeuangan/modal/notrans"); ?>
        <?php $this->load->view("keuangan/laporankeuangan/modal/kontak"); ?>
        <?php $this->load->view("keuangan/laporankeuangan/modal/klien") ?>

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
        <script src="<?php echo base_url("assets/daterange/moment.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/daterange/daterangepicker.js"); ?>" type="text/javascript"></script>
        <script>
             $(document).ready(function() {
                 var d,bulan,tahun,sbulan,jdi;
                 d = new Date();
                 bulan = d.getMonth()+1;
                 tahun = d.getFullYear();

                 sbulan = bulan.toString().length;
                 (sbulan == 2 ? jdi = bulan : jdi = "0"+bulan);
                 $(".bulan").val(jdi);
                 $(".tahun").val(tahun);
            });
        </script>
        <script>
            //cetak jurnal transaksi
            function cetakjurnaltransaksi(){
                $("#jtjenis").val( $("#jeniskas option:selected").val());
                $("#jttgl").val( $("#tgl_mulai").val());
                $("#jtnotrans").val( $('#notrans').val());
                ($("#klien").is(":visible") ? $("#id_klien").val()  : $("#id_klien").val(""));
                ($("#kontak").is(":visible") ? $("#id_kontak").val()  : $("#id_kontak").val(""));
                $("#jtkontak").val( ($('#id_kontak').val() == "" ? $('#id_klien').val() : $('#id_kontak').val()));
                $("#jtposting").val( $('#posting option:selected').val());
                $("#jtakuntrans").val( $('#akun').val());
                ($("#klien").is(":visible") ? $("#isklien").val("1")  : $("#isklien").val("0"));
                $("#jurnalttd").val(($("#ttdjurnal").is(':checked') ? "1" : "0"));

                document.forms["form_jurnaltransaksi"].submit();
            }
        </script>
        <script>
            //cetak piutang per kontak
            function cetakpiutangperkontak(){
                $("#ppbulan").val( $("#bulan1 option:selected").val());
                $("#pptahun").val( $("#tahun1 option:selected").val());
                ($("#klien1").is(":visible") ? $("#id_klien1").val()  : $("#id_klien1").val(""));
                ($("#kontak1").is(":visible") ? $("#id_kontak1").val()  : $("#id_kontak1").val(""));
                $("#ppkontak1").val( ($('#id_kontak1').val() == "" ? $('#id_klien1').val() : $('#id_kontak1').val()));
                ($("#klien1").is(":visible") ? $("#isklien1").val("1")  : $("#isklien1").val("0"));

                $("#piutangttd").val(($("#ttdpiutang").is(':checked') ? "1" : "0"));
                $("#piutangkode").val(($("#kodepiutang").is(':checked') ? "1" : "0"));
                $("#piutangnol").val(($("#nolpiutang").is(':checked') ? "1" : "0"));

                document.forms["form_piutangperkontak"].submit();
            }
        </script>
        <script>
            //cetak hutang per kontak
            function cetakhutangperkontak(){
                $("#hpbulan").val( $("#bulan2 option:selected").val());
                $("#hptahun").val( $("#tahun2 option:selected").val());
                ($("#klien2").is(":visible") ? $("#id_klien2").val()  : $("#id_klien2").val(""));
                ($("#kontak2").is(":visible") ? $("#id_kontak2").val()  : $("#id_kontak2").val(""));
                $("#hpkontak").val( ($('#id_kontak2').val() == "" ? $('#id_klien2').val() : $('#id_kontak2').val()));
                ($("#klien2").is(":visible") ? $("#isklien2").val("1")  : $("#isklien2").val("0"));

                $("#hutangttd").val(($("#ttdhutang").is(':checked') ? "1" : "0"));
                $("#hutangkode").val(($("#kodehutang").is(':checked') ? "1" : "0"));
                $("#hutangnol").val(($("#nolhutang").is(':checked') ? "1" : "0"));

                document.forms["form_hutangperkontak"].submit();
            }
        </script>
        <script>
            //cetak buku besar
            function cetakbukubesar(){
                $("#bbbulan").val( $("#bulan3 option:selected").val());
                $("#bbtahun").val( $("#tahun3 option:selected").val());
                $("#bbakun").val($("#akun1 option:selected").val());

                $("#bukuttd").val(($("#ttdbuku").is(':checked') ? "1" : "0"));
                $("#bukukode").val(($("#kodebuku").is(':checked') ? "1" : "0"));

                document.forms["form_bukubesar"].submit();
            }
        </script>
        <script>
            //cetak laba/rugi
            function cetaklabarugi(){
                $("#lrbulan").val( $("#bulan4 option:selected").val());
                $("#lrtahun").val( $("#tahun4 option:selected").val());

                $("#labattd").val(($("#ttdlaba").is(':checked') ? "1" : "0"));
                $("#labakode").val(($("#kodelaba").is(':checked') ? "1" : "0"));
                $("#labanol").val(($("#nollaba").is(':checked') ? "1" : "0"));

                document.forms["form_labarugi"].submit();
            }
        </script>
        <script>
            //cetak perubahan modal
            function cetakperubahanmodal(){
                $("#pmbulan").val( $("#bulan5 option:selected").val());
                $("#pmtahun").val( $("#tahun5 option:selected").val());

                $("#perubahanttd").val(($("#ttdperubahan").is(':checked') ? "1" : "0"));
                $("#perubahankode").val(($("#kodeperubahan").is(':checked') ? "1" : "0"));
                $("#perubahannol").val(($("#nolperubahan").is(':checked') ? "1" : "0"));

                document.forms["form_perubahanmodal"].submit();
            }
        </script>
        <script>
            //cetak neraca
            function cetakneraca(){
                $("#nbulan").val( $("#bulan6 option:selected").val());
                $("#ntahun").val( $("#tahun6 option:selected").val());

                $("#neracattd").val(($("#ttdneraca").is(':checked') ? "1" : "0"));
                $("#neracakode").val(($("#kodeneraca").is(':checked') ? "1" : "0"));
                $("#neracanol").val(($("#nolneraca").is(':checked') ? "1" : "0"));

                //console.log($("#neracattd").val());

                document.forms["form_neraca"].submit();
            }
        </script>
        <script>
            //cetak arus kas
            function cetakaruskas(){
                $("#akbulan").val( $("#bulan7 option:selected").val());
                $("#aktahun").val( $("#tahun7 option:selected").val());

                $("#arusttd").val(($("#ttdarus").is(':checked') ? "1" : "0"));
                $("#aruskode").val(($("#kodearus").is(':checked') ? "1" : "0"));
                $("#arusnol").val(($("#nolarus").is(':checked') ? "1" : "0"));

                document.forms["form_aruskas"].submit();
                /*console.log($("#akbulan").val());
                console.log($("#aktahun").val());
                console.log($("#arusttd").val());
                console.log($("#aruskode").val());
                console.log($("#arusnol").val());
                console.log($("#hutangttd").val());
                console.log($("#hutangkode").val());
                console.log($("#isklien2").val());
                console.log($("#hutangnol").val());*/
                }
        </script>
        <script>
        var c_date = "";

            $(".in").click(function(){
                $(this).css("background", "#dbdbdb").siblings().css("background", "");
            })

            $('#tgl_mulai').focus(function() {
                $('#tgl_mulai').daterangepicker();
            });

            function tgl_batal(){
                $('#tgl_mulai').daterangepicker("destroy");
                $('#tgl_mulai').val(null);
            }

            $(document).ready(function() {
                $("#kontak2, #kontak1, #kontak").show();
                $("#aruskas, #neraca, #perubahanmodal, #labarugi, #bukubesar, #hutangperkontak, #piutangperkontak, #klien2, #klien1, #klien").hide();
            });

            function jurnaltransaksi()
            {
             $("#jurnaltransaksi").show();
             $("#aruskas, #neraca, #perubahanmodal, #labarugi, #bukubesar, #hutangperkontak, #piutangperkontak").hide();
            }

            function piutangperkontak()
            {
             $("#piutangperkontak").show();
             $("#aruskas, #neraca, #perubahanmodal, #labarugi, #bukubesar, #hutangperkontak, #jurnaltransaksi").hide();
            }

            function hutangperkontak()
            {
             $("#hutangperkontak").show();
             $("#aruskas, #neraca, #perubahanmodal, #labarugi, #bukubesar, #piutangperkontak, #jurnaltransaksi").hide();
            }

            function bukubesar()
            {
             $("#bukubesar").show();
             $("#aruskas, #neraca, #perubahanmodal, #labarugi, #hutangperkontak, #piutangperkontak, #jurnaltransaksi").hide();
            }

            function labarugi()
            {
             $("#labarugi").show();
             $("#aruskas, #neraca, #perubahanmodal, #bukubesar, #hutangperkontak, #piutangperkontak, #jurnaltransaksi").hide();
            }

            function perubahanmodal()
            {
             $("#perubahanmodal").show();
             $("#aruskas, #neraca, #labarugi, #bukubesar, #hutangperkontak, #piutangperkontak, #jurnaltransaksi").hide();
            }

            function neraca()
            {
             $("#neraca").show();
             $("#aruskas, #perubahanmodal, #labarugi, #bukubesar, #hutangperkontak, #piutangperkontak, #jurnaltransaksi").hide();
            }

            function aruskas()
            {
             $("#aruskas").show();
             $("#neraca, #jurnaltransaksi, #piutangperkontak, #hutangperkontak, #bukubesar, #labarugi, #perubahanmodal").hide();
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
        //fungsi menekan search modal
            function ref_notrans()
            {
                get_modal_data("", "" , "laporankeuangan/datanotrans", "#list-notrans");
            }

            function ref_kontak()
            {
                get_modal_data("", "" , "laporankeuangan/datakontak", "#list-kontak");
            }

            function ref_klien()
            {
                get_modal_data("", "" , "laporankeuangan/dataklien", "#list-klien");
            }

            function ref_kontak1()
            {
                get_modal_data("", "" , "laporankeuangan/datakontak1", "#list-kontak1");
            }

            function ref_klien1()
            {
                get_modal_data("", "" , "laporankeuangan/dataklien1", "#list-klien1");
            }

            function ref_kontak2()
            {
                get_modal_data("", "" , "laporankeuangan/datakontak2", "#list-kontak2");
            }

            function ref_klien2()
            {
                get_modal_data("", "" , "laporankeuangan/dataklien2", "#list-klien2");
            }

        </script>
        <script>
        var kywd= "", hal = 1;
        var m_kywd="" , m_utama ="", m_table="";

             $("#frmnotrans").submit(function() {
                search_data = $("#s_notrans").val();
                get_modal_data(search_data, "" , "laporankeuangan/datanotrans", "#list-notrans");   
                return false;
                
             })

             $("#frmkontak").submit(function() {
                search_data = $("#s_kontak").val();
                get_modal_data(search_data, "" , "laporankeuangan/datakontak", "#list-kontak");   
                return false;
                
             })

             $("#frmklien").submit(function() {
                search_data = $("#s_klien").val();
                get_modal_data(search_data, "" , "laporankeuangan/dataklien", "#list-klien");   
                return false;
                
             })

             $("#frmkontak1").submit(function() {
                search_data = $("#s_kontak1").val();
                get_modal_data(search_data, "" , "laporankeuangan/datakontak1", "#list-kontak1");   
                return false;
                
             })

             $("#frmklien1").submit(function() {
                search_data = $("#s_klien1").val();
                get_modal_data(search_data, "" , "laporankeuangan/dataklien1", "#list-klien1");   
                return false;
                
             })

             $("#frmkontak2").submit(function() {
                search_data = $("#s_kontak2").val();
                get_modal_data(search_data, "" , "laporankeuangan/datakontak2", "#list-kontak2");   
                return false;
                
             })

             $("#frmklien2").submit(function() {
                search_data = $("#s_klien2").val();
                get_modal_data(search_data, "" , "laporankeuangan/dataklien2", "#list-klien2");   
                return false;
                
             })

            function get_notrans(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>laporankeuangan/datanotrans",
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



                        $("#list-notrans").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function get_kontak(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>laporankeuangan/datakontak",
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



                        $("#list-kontak").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function get_klien(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>laporankeuangan/dataklien",
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



                        $("#list-klien").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function get_kontak1(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>laporankeuangan/datakontak1",
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



                        $("#list-kontak1").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function get_klien1(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>laporankeuangan/dataklien1",
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



                        $("#list-klien1").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function get_kontak2(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>laporankeuangan/datakontak2",
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



                        $("#list-kontak2").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function get_klien2(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>laporankeuangan/dataklien2",
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



                        $("#list-klien2").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function set_notrans(selector){
                nomor = $(selector).attr("data-nomor");
                id = $(selector).attr("data-id");

                $("#notrans").val(nomor);
                $("#id_notrans").val(id);
                $('#mnotrans').modal('hide');
            }

            function set_kontak(selector){
                nama = $(selector).attr("data-nama");
                id = $(selector).attr("data-id");

                $("#inkontak").val(nama);
                $("#id_kontak").val(id);
                $('#mkontak').modal('hide');
            }

            function set_klien(selector){
                nama = $(selector).attr("data-nama");
                id = $(selector).attr("data-id");

                $("#inklien").val(nama);
                $("#id_klien").val(id);
                $('#mklien').modal('hide');
            }

            function set_kontak1(selector){
                nama = $(selector).attr("data-nama");
                id = $(selector).attr("data-id");

                $("#inkontak1").val(nama);
                $("#id_kontak1").val(id);
                $('#mkontak1').modal('hide');
            }

            function set_klien1(selector){
                nama = $(selector).attr("data-nama");
                id = $(selector).attr("data-id");

                $("#inklien1").val(nama);
                $("#id_klien1").val(id);
                $('#mklien1').modal('hide');
            }

            function set_kontak2(selector){
                nama = $(selector).attr("data-nama");
                id = $(selector).attr("data-id");

                $("#inkontak2").val(nama);
                $("#id_kontak2").val(id);
                $('#mkontak2').modal('hide');
            }

            function set_klien2(selector){
                nama = $(selector).attr("data-nama");
                id = $(selector).attr("data-id");

                $("#inklien2").val(nama);
                $("#id_klien2").val(id);
                $('#mklien2').modal('hide');
            }

        </script>
        <script>

             $("#jenis").change( function(){
                var jenis = $( "#jenis option:selected").val();
                    if (jenis=="1"){
                        $( "#inklien").val("");
                        $( "#kontak").show();
                        $( "#klien").hide();
                    }else if (jenis=="0"){
                        $( "#inkontak").val("");
                        $( "#kontak").hide();
                        $( "#klien").show();
                    }
                });

             $("#jenis1").change( function(){
                var jenis1 = $( "#jenis1 option:selected").val();
                    if (jenis1=="1"){
                        $( "#inklien1").val("");
                        $( "#kontak1").show();
                        $( "#klien1").hide();
                    }else if (jenis1=="0"){
                        $( "#inkontak1").val("");
                        $( "#kontak1").hide();
                        $( "#klien1").show();
                    }
                });

             $("#jenis2").change( function(){
                var jenis2 = $( "#jenis2 option:selected").val();
                    if (jenis2=="1"){
                        $( "#inklien2").val("");
                        $( "#kontak2").show();
                        $( "#klien2").hide();
                    }else if (jenis2=="0"){
                        $( "#inkontak2").val("");
                        $( "#kontak2").hide();
                        $( "#klien2").show();
                    }
                });
        </script>
        <script>
            $("#btnresetnotrans").click(function(){
                $("#notrans").val("");
                $('#mnotrans').modal('hide');
            });

            $("#btnresetkontak").click(function(){
                $("#inkontak").val("");
                $("#id_kontak").val("");
                $('#mkontak').modal('hide');
            });

            $("#btnresetkontak1").click(function(){
                $("#inkontak1").val("");
                $("#id_kontak1").val("");
                $('#mkontak1').modal('hide');
            });

            $("#btnresetkontak2").click(function(){
                $("#inkontak2").val("");
                $("#id_kontak2").val("");
                $('#mkontak2').modal('hide');
            });

            $("#btnresetklien").click(function(){
                $("#inklien").val("");
                $("#id_klien").val("");
                $('#mklien').modal('hide');
            });

            $("#btnresetklien1").click(function(){
                $("#inklien1").val("");
                $("#id_klien1").val("");
                $('#mklien1').modal('hide');
            });

            $("#btnresetklien2").click(function(){
                $("#inklien2").val("");
                $("#id_klien2").val("");
                $('#mklien2').modal('hide');
            });
        </script>
        <script>
            function cetakatas(){
                if ($("#jurnaltransaksi").is(':visible')){
                    cetakjurnaltransaksi();
                }else if ($("#piutangperkontak").is(':visible')){
                    cetakpiutangperkontak();
                }else if ($("#hutangperkontak").is(':visible')){
                    cetakhutangperkontak();
                }else if ($("#bukubesar").is(':visible')){
                    cetakbukubesar();
                }else if ($("#labarugi").is(':visible')){
                    cetaklabarugi();
                }else if ($("#perubahanmodal").is(':visible')){
                    cetakperubahanmodal();
                }else if ($("#neraca").is(':visible')){
                    cetakneraca();
                }else if ($("#aruskas").is(':visible')){
                    cetakaruskas();
                }
            }
        </script>
    </body>
</html>