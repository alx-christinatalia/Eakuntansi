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
        <title>Berkas SKMHT | eNotaris.com</title>
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
                                    <h1>Berkas SKMHT</h1>
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
                                                        <label>Jenis Perjanjian </label><font color="red">*</font>
                                                        <input type="text" id="DU-jenis_perjanjian" class="form-control" rel="tooltip" title="*Wajib Diisi <br /> Diisi jenis perjanjian yang dilakukan sebelumnya. <br /> Contoh: Perjanjian Hutang atau Perjanjian Kredit">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nomor Perjanjian </label><font color="red">*</font>
                                                        <input type="text" id="DU-nomor_perjanjian" class="form-control" rel="tooltip" title="*Wajib Diisi <br /> Diisi nomor surat perjanjian hutang atau perjanjian kredit. <br> Contoh : 30.13.xx.xx.000xx">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tgl Perjanjian </label><font color="red"> *</font>
                                                        <div class="input-group">
                                                            <input type="text" id="DU-tgl_perjanjian" class="form-control myDate" rel="tooltip" title="* Wajib diisi.<br/>*) Gunakan 2, 4, atau 6 digit angka.<br/> Contoh : <strong>10</strong> maka akan menjadi 10-{month}-{year}.<br/> <strong>1010</strong> maka akan menjadi 10-10-{year}. <br/><strong>101014</strong> maka akan menjadi 10-10-2014.">
                                                            <span class="input-group-addon ">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis & Nomor Hak </label><font color="red">*</font>
                                                        <input type="text" id="DU-jenis_no_hak" class="form-control" rel="tooltip" title="* Wajib Diisi <br/> Jenis dan nomor hak. <br/> Contoh: Hak Milik No:528.">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No Surat Ukur </label><font color="red">*</font>
                                                        <input type="text" id="DU-no_surat" class="form-control" rel="tooltip" title="* Wajib Diisi <br/> Nomor surat ukur. <br/> Contoh : 35x / Lowokwaru /2002">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tgl Surat Ukur </label><font color="red"> *</font>
                                                        <div class="input-group">
                                                            <input type="text" id="DU-tgl_surat" class="form-control myDate" rel="tooltip" title="* Wajib diisi<br/> Tanggal surat ukur. <br />Format dd-mm-yyyy<br/> Contoh : 12-02-2014">
                                                            <span class="input-group-addon ">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>NIB </label>
                                                        <input type="text" id="DU-nib" class="form-control" rel="tooltip" title="*Tidak Wajib Diisi. <br/> No NOB. <br/> Contoh : 11.19.08.03.00xxx">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No. NOP</label>
                                                        <input type="text" id="DU-no_nop" class="form-control" rel="tooltip" title="No. NOP. <br/> Contoh : 33.10.710.003.001-0xxx.0">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tahun NOP</label>
                                                        <input type="text" id="DU-thn_nop" class="form-control" rel="tooltip" title="Tahun NOP. <br/> Contoh : 2011">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-11">
                                                                <label>Luas Tanah</label><font color="red"> *</font>
                                                                <input type="text" id="DU-luas_tanah" class="form-control" rel="tooltip" title="*Wajib Diisi. <br/> Luas tanah. <br/> Contoh : 140">
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
                                                                <input type="text" id="DU-luas_bangunan" class="form-control" rel="tooltip" title="Luas bangunan. <br/> Contoh : 140">
                                                            </div>
                                                            <div class="col-md-1" style="margin-top: 30px">
                                                                 m<sup>2</sup>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nominal Hutang</label><font color="red"> *</font>
                                                        <input type="text" id="DU-nominal_hutang" class="form-control myMoney" rel="tooltip" title="* Wajib diisi. <br/>Nilai Hutang dalam perjanjian <br/>Format penulisan tanpa titik(.)<br/> Contoh : 100000000, akan terformat 100.000.000">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nominal Tanggungan</label><font color="red"> *</font>
                                                        <input type="text" id="DU-nominal_tanggung" class="form-control myMoney" rel="tooltip" title="* Wajib diisi. <br/>Nilai Tanggungan dalam perjanjian <br/>Format penulisan tanpa titik(.)<br/> Contoh : 100000000, akan terformat 100.000.000">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Obyek Berupa</label><font color="red"> *</font>
                                                        <input type="text" id="DU-jenis_obyek" class="form-control" rel="tooltip" title="* Wajib Diisi <br/> Bentuk obyek dalam perjanjian. <br/> Contoh : 1 hak atas tanah">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Provinsi</label><font color="red"> *</font>
                                                        <select type="text" id="DU-provinsi" class="form-control mySelect2 prov" rel="tooltip" title="* Wajib Diisi <br/> Pilih Provinsi kedudukan obyek.">
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kab / Kota</label><font color="red"> *</font>
                                                        <select type="text" id="DU-Kota" class="form-control mySelect2 kota" rel="tooltip" title="* Wajib Diisi <br/> Pilih Kabupaten / Kota kedudukan obyek.">
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kecamatan</label><font color="red"> *</font>
                                                        <input type="text" id="DU-kec" class="form-control" rel="tooltip" title="* Wajib Diisi <br/> Pilih Kecamatan kedudukan obyek.">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Desa/Kelurahan</label><font color="red"> *</font>
                                                        <input type="text" id="DU-desa_kel" class="form-control" rel="tooltip" title="* Wajib Diisi <br/> Pilih Desa / Kelurahan kedudukan obyek.">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Obyek Meliputi</label>
                                                        <input type="text" id="DU-obyek_meliputi" class="form-control" rel="tooltip" title="Jika terdapat benda atau apapun yang ikut dalam obyek tersebut. <br> Contoh : Segala sesuatu yang berdiri dan/atau dikemudian hari akan didirikan atau yang lekat diatas tanah tersebut yang menurut sifat,guna dan peruntukannya berdasarkan Undang-undang dan peraturan-peraturan yang berlaku dapat dianggap sebagai barang tidak bergerak.">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Keterangan</label>
                                                        <textarea type="text" id="DU-desk_obyek" class="form-control area" rel="tooltip" title="Diisi dengan keterangan yang dibutuhkan. <br/> (Akan tampil pada kolom keterangan di laporan PPAT)"></textarea>
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
                                                        <th style="width: 10%">Aksi</th>
                                                        <th style="width: 20%">Nama</th>
                                                        <th style="width: 25%">Pihak Alias</th>
                                                        <th style="width: 25%">Identitas</th>
                                                        <th style="width: 20%">Jenis Pihak</th>
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
                                                        <select id="TP-pihak_ke" class="form-control" rel="tooltip" title="* Wajib Diisi <br/> Urutan Pihak ke- berapa">
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
                                                        <select id="TP-pihak" class="form-control" rel="tooltip" title="* Wajib Diisi <br/> Isi sesuai status pihak dalam akta.">
                                                            <option value="1">Pihak Pemberi Hak Tanggungan</option>
                                                            <option value="2">Pihak Penerima Hak Tanggungan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label>Nama </label><font color="red">*</font>
                                                        <div class="input-group">
                                                            <div class="input-group-control">
                                                                <input type="text" id="TP-nama" class="form-control" rel="tooltip" title="* Wajib diisi.<br/>Nama pihak.<br/>Contoh : Bagus Abdurrahman, ST">
                                                            </div>
                                                            <span class="input-group-btn btn-right">
                                                            <button class="btn default" type="button" style="height: 35px;">
                                                                <div class="md-checkbox">
                                                                    <input type="checkbox" id="TP-isdebitur_1" class="md-check">
                                                                    <label for="TP-isdebitur_1">
                                                                        <span class="inc"></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span> Debitur </label>
                                                                </div>
                                                            </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <label>Identitas Pihak </label><font color="red">*</font>
                                                            <textarea type="text"  rel="tooltip"  class="form-control" id="TP-identitas" title="* Wajib Diisi <br/> Diisi dengan identitas pihak. Contoh : Lahir di Malang, pada tanggal 28(dua puluh delapan) SEPTEMBER 1988 (seribu sembilan ratus delapan puluh delapan), Warga Negara Indonesia, Karyawan Swasta, bertempat tinggal di Malang, Jalan Pasir Luhur 28, Rukun Tetangga 007, Rukun Warga 002, Desa Jenggolo, Kecamatan Kepanjen, Pemegang Kartu Tanda Penduduk dengan Nomor Induk Kependudukan 3507132809880001;"></textarea>
                                                                <span class="input-group-btn" style="padding-top: 7px;">
                                                                    <a data-toggle="modal" href="#template" onclick="ambiltem(this);" class="btn green-turquoise" title="Pilih Template" id="iket">
                                                                      <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Pihak </label><font color="red">*</font>
                                                        <select id="TP-jenis_pihak" class="form-control" rel="tooltip" title="* Wajib Diisi <br/> Jenis pihak yang melakukan perjanjian." onchange="getjenis(this);">
                                                            <option value="1">Perorangan</option>
                                                            <option value="2">Perseroan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-title perorangan">
                                            <div class="caption">
                                                <span class="caption-subject font-dark bold uppercase">Pihak Menyetujui</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body perorangan">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group ">
                                                        <label>Nama </label>
                                                        <div class="input-group">
                                                            <div class="input-group-control">
                                                                <input type="text" id="TP-nama_menyetujui" class="form-control" rel="tooltip" title="Nama pihak.<br/>Contoh : Bagus Abdurrahman, ST">
                                                            </div>
                                                            <span class="input-group-btn btn-right">
                                                            <button class="btn default" type="button" style="height: 35px;">
                                                                <div class="md-checkbox">
                                                                    <input type="checkbox" id="TP-isdebitur_2" class="md-check">
                                                                    <label for="TP-isdebitur_2">
                                                                        <span class="inc"></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span> Debitur </label>
                                                                </div>
                                                            </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <label>Identitas </label>
                                                            <textarea type="text"  rel="tooltip"  class="form-control" id="TP-identitas_menyetujui" title="Diisi dengan identitas pihak. Contoh : Lahir di Malang, pada tanggal 28(dua puluh delapan) SEPTEMBER 1988 (seribu sembilan ratus delapan puluh delapan), Warga Negara Indonesia, Karyawan Swasta, bertempat tinggal di Malang, Jalan Pasir Luhur 28, Rukun Tetangga 007, Rukun Warga 002, Desa Jenggolo, Kecamatan Kepanjen, Pemegang Kartu Tanda Penduduk dengan Nomor Induk Kependudukan 3507132809880001;"></textarea>
                                                                <span class="input-group-btn" style="padding-top: 7px;">
                                                                    <a data-toggle="modal" href="#template" onclick="ambiltem(this);" class="btn green-turquoise" title="Pilih Template" id="ikuasa">
                                                                      <i class="fa fa-search"></i>
                                                                    </a>
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Hubungan Pihak </label>
                                                        <input type="text"  rel="tooltip"  class="form-control" id="TP-stt_pihak_menyetujui" rel="tooltip" title="Hubungan pihak yang menyetujui dengan pihak pemberi/penerima hak tanggungan.">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-md-2">
                                                            <input type="submit" class="btn btn-primary" value="Simpan"> 
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-title perseroan hide">
                                            <div class="caption">
                                                <span class="caption-subject font-dark bold uppercase">Data Perseroan</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body perseroan hide">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                    <div class="form-group ">
                                                        <label>Nama Perseroan</label>
                                                        <input type="text"  rel="tooltip"  class="form-control" id="TP-nama_pt" rel="tooltip" title="Nama perusahaan yang diwakili oleh pihak.">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <label>Kedudukan Perseroan</label>
                                                            <textarea type="text" id="TP-kedudukan_pt" class="form-control area" rel="tooltip" title="Keterangan kedudukan/alamat perusahaan. "></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jabatan </label>
                                                        <input type="text"  rel="tooltip"  class="form-control" id="TP-jabatan_pt" rel="tooltip" title="Jabatan pihak yang mewakili perusahaan.">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <label>SK Dari Perseroan</label>
                                                            <textarea type="text" id="TP-ketskpt" class="form-control area" rel="tooltip" title="Jika terdapat surat SK dari perusahaan yang diwakili."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-md-2">
                                                            <input type="submit" class="btn btn-primary" value="Simpan"> 
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
                $("#TP-identitas").val($("#teks").val());
            }
            //menguasakan
            function pakaitem1(){
                $("#TP-identitas_menyetujui").val($("#teks").val());
            }

        </script>
        <script>
                function getjenis(sel)
                {
                    var jenis = sel.value;
                    if (jenis == "1"){
                        $('#TP-nama_pt').val("");
                        $('#TP-kedudukan_pt').val("");
                        $('#TP-jabatan_pt').val("");
                        $('#TP-ketskpt').val("");

                        $('.perorangan').removeClass('hide');
                        $('.perseroan').addClass('hide');
                    }else if (jenis == "2"){
                        $('#TP-nama_menyetujui').val("");
                        $('#TP-identitas_menyetujui').val("");
                        $('#TP-stt_pihak_menyetujui').val("");
                        $('#TP-isdebitur_2').prop("checked",false);

                        $('.perseroan').removeClass('hide');
                        $('.perorangan').addClass('hide');                 
                    }
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

                    tbl     = "orderkreditumum";
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
                                $("#DU-jenis_perjanjian").val(resp['jenis_perjanjian'])
                                $("#DU-nomor_perjanjian").val(resp['nomor_perjanjian'])
                                $("#DU-tgl_perjanjian").val(resp['tgl_perjanjian'])
                                $("#DU-jenis_no_hak").val(resp['jenis_no_hak'])
                                $("#DU-no_surat").val(resp['no_surat'])
                                $("#DU-tgl_surat").val(tglIndo(resp['tgl_surat']))
                                $("#DU-nib").val(resp['nib'])
                                $("#DU-no_nop").val(resp['no_nop'])
                                $("#DU-thn_nop").val(resp['thn_nop'])
                                $("#DU-luas_tanah").val(resp['luas_tanah'])
                                $("#DU-luas_bangunan").val(resp['luas_bangunan'])
                                $("#DU-nominal_hutang").val(resp['nominal_hutang'])
                                $("#DU-nominal_tanggung").val(resp['nominal_tanggungan'])
                                $("#DU-jenis_obyek").val(resp['jenis_obyek'])
                                $("#DU-desa_kel").val(resp['desa_kel'])
                                $("#DU-kec").val(resp['kec'])
                                $("#DU-provinsi option:selected").val()
                                $("#DU-Kota option:selected").val()
                                $("#DU-obyek_meliputi").val(resp['obyek_meliputi'])
                                $("#DU-desk_obyek").val(resp['desk_obyek'])
                                     $.when(myProvKot()).done(function(){
                                        $("#DU-provinsi").val(resp['id_prov'])
                                            myKabKota();
                                            $.when(myKabKota()).done(function(){
                                                $("#DU-Kota").val(resp['kab_kota']).change()
                                            })
                                     }) 
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

                    tbl     = "orderkreditpihak";
                    method  = "TPtable";
                    sort    = "";
                    limit   = "";
                    filter  = "id_order = '<?php echo $id_order ?>'";
                    where   = {}

                    $.ajax({
                        type:'post',
                        url:"<?php echo base_url('berkasorder/skmht/doSome') ?>",
                        data:{param:param, tbl:tbl , method:method , sort:sort, limit:limit, filter:filter, where:where},
                        dataType:'json',
                        success: function (resp)
                        {
                            $("#tb-TP").html(resp);
                            //fixed
                                $(".tp-pihak").each(function(){
                                    switch($(this).html())
                                    {
                                        case "1":
                                            $(this).html("Pihak Pemberi Hak Tanggung");
                                            break;
                                        case "2":
                                            $(this).html("Pihak Penerima Hak Tanggung");
                                            break;
                                    }
                                })
                                $(".tp-jenis_pihak").each(function(){
                                    switch($(this).html())
                                    {
                                        case "1":
                                            $(this).html("Perorangan");
                                            break;
                                        case "2":
                                            $(this).html("Perseroan");
                                            break;
                                    }
                                })
                        }
                    })
                    return false;
                }

            //insert

                $("#DU").submit(function(){
                        var cek = before_simpan_du();
                        if (cek == "sukses"){
                            param = {'id_order'         : "<?php echo $id_order ?>",
                                     'jenis_perjanjian' : $("#DU-jenis_perjanjian").val(),
                                     'nomor_perjanjian' : $("#DU-nomor_perjanjian").val(),
                                     'tgl_perjanjian'   : formatDate($("#DU-tgl_perjanjian").val()),
                                     'jenis_no_hak'     : $("#DU-jenis_no_hak").val(),
                                     'no_surat'         : $("#DU-no_surat").val(),
                                     'tgl_surat'        : formatDate($("#DU-tgl_surat").val()),
                                     'nib'              : $("#DU-nib").val(),
                                     'no_nop'           : $("#DU-no_nop").val(),
                                     'thn_nop'          : $("#DU-thn_nop").val(),
                                     'luas_tanah'       : $("#DU-luas_tanah").val(),
                                     'luas_bangunan'    : $("#DU-luas_bangunan").val(),
                                     'nominal_hutang'   : returntoN($("#DU-nominal_hutang").val()),
                                     'nominal_tanggungan' : returntoN($("#DU-nominal_tanggung").val()),
                                     'jenis_obyek'      : $("#DU-jenis_obyek").val(),
                                     'desa_kel'         : $("#DU-desa_kel").val(),
                                     'kec'              : $("#DU-kec").val(),
                                     'id_prov'          : $("#DU-provinsi option:selected").val(),
                                     'kab_kota'         : $("#DU-Kota option:selected").val(),
                                     'obyek_meliputi'   : $("#DU-obyek_meliputi").val(),
                                     'desk_obyek'       : $("#DU-desk_obyek").val(),
                                     'layanan'          : p_id_layanan,
                                     }

                            tbl     = "orderkreditumum";
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
                });

                function before_simpan_du()
                {
                        jenisperjanjian = $("#DU-jenis_perjanjian ").val();
                        noperjanjian = $("#DU-nomor_perjanjian").val();
                        tglperjanjian = $("#DU-tgl_perjanjian").val();
                        jenisnohak = $("#DU-jenis_no_hak").val();
                        nosuratukur = $("#DU-no_surat").val();
                        tglsuratukur = $("#DU-tgl_surat").val();
                        luastanah = $("#DU-luas_tanah").val();
                        nominalhutang = $("#DU-nominal_hutang").val();
                        nominaltanggungan = $("#DU-nominal_tanggung").val();
                        obyekberupa = $("#DU-jenis_obyek").val();
                        provinsi = $("#DU-provinsi option:selected").val();
                        kabkota = $("#DU-Kota option:selected").val();
                        kec = $("#DU-kec").val();
                        desa = $("#DU-desa_kel").val();

                        kondisi = "";
                        if((jenisperjanjian != "") && (noperjanjian != "") && (tglperjanjian != "") && (jenisnohak != "") && (nosuratukur != "") && (tglsuratukur != "") && (luastanah != "") && (nominalhutang != "") && (nominaltanggungan != "") && (obyekberupa != "") && (provinsi != "") && (kabkota != "") && (kec != "") && (desa != ""))
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
                    if($("#DU-jenis_perjanjian").val() == ""){
                        $("#DU-jenis_perjanjian").focus();
                    }else if($("#DU-nomor_perjanjian").val() == ""){
                        $("#DU-nomor_perjanjian").focus();
                    }else if ($("#DU-tgl_perjanjian").val() == ""){
                        $("#DU-tgl_perjanjian").focus();
                    }else if($("#DU-jenis_no_hak").val() == ""){
                        $("#DU-jenis_no_hak").focus();
                    }else if($("#DU-no_surat").val() == ""){
                        $("#DU-no_surat").focus();
                    }else if ($("#DU-tgl_surat").val() == ""){
                        $("#DU-tgl_surat").focus();
                    }else if($("#DU-luas_tanah").val() == ""){
                        $("#DU-luas_tanah").focus();
                    }else if($("#DU-nominal_hutang").val() == ""){
                        $("#DU-nominal_hutang").focus();
                    }else if ($("#DU-nominal_tanggung").val() == ""){
                        $("#DU-nominal_tanggung").focus();
                    }else if($("#DU-jenis_obyek").val() == ""){
                        $("#DU-jenis_obyek").focus();
                    }else if($("#DU-provinsi option:selected").val() == ""){
                        $("#DU-provinsi").focus();
                    }else if ($("#DU-Kota option:selected").val() == ""){
                        $("#DU-Kota").focus();
                    }else if($("#DU-kec").val() == ""){
                        $("#DU-kec").focus();
                    }else if($("#DU-desa_kel").val() == ""){
                        $("#DU-desa_kel").focus();
                    }

                }

                $("#TP").submit(function(){
                        var cek = before_simpan_tp();
                        if (cek == "sukses"){
                            param = {'id_order'             : "<?php echo $id_order ?>",
                                     'pihak_ke'             : $("#TP-pihak_ke option:selected").val(),
                                     'pihak'                : $("#TP-pihak option:selected").val(),
                                     'nama'                 : $("#TP-nama").val(),
                                     'isdebitur_1'          : ($('#TP-isdebitur_1').is(":checked") ? "1" : "0"),
                                     'jenis_pihak'          : $("#TP-jenis_pihak option:selected").val(),
                                     'identitas'            : $("#TP-identitas").val(),
                                     'nama_menyetujui'      : $("#TP-nama_menyetujui").val(),
                                     'isdebitur_2'          : ($('#TP-isdebitur_2').is(":checked") ? "1" : "0"),
                                     'identitas_menyetujui' : $("#TP-identitas_menyetujui").val(),
                                     'stt_pihak_menyetujui' : $("#TP-stt_pihak_menyetujui").val(),
                                     'nama_pt' : $("#TP-nama_pt").val(),
                                     'kedudukan_pt' : $("#TP-kedudukan_pt").val(),
                                     'jabatan_pt' : $("#TP-jabatan_pt").val(),
                                     'keterangan_sk_pt' : $("#TP-ketskpt").val(),
                                     'layanan'          : p_id_layanan,
                                     'tgl_input'          : hariini()
                                 };

                            tbl     = "orderkreditpihak";
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
                                        TPData(param,tbl,method,sort,limit,filter,where);
                                    }
                                    
                                    }
                                });
                            }else{
                                TPData(param,tbl,method,sort,limit,filter,where);
                            }   
                        }
                    return false;
                });

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

                    pihak = $("#TP-pihak_ke option:selected").val()
                    pihakalias = $("#TP-pihak").val()
                    nama = $("#TP-nama").val() 
                    identitaspihak = $("#TP-identitas").val()
                    jenispihak = $("#TP-jenis_pihak").val()

                    if ((nama != "") && (identitaspihak != "") && (pihak != "") && (pihakalias != "") && (jenispihak != "")){
                        kondisi = "sukses";
                    }else{
                        notifShow("error", "Masukkan data formulir dengan benar");
                        kondisi = "gagal";
                        cekfocus_tp();
                    }
                    return kondisi;
                }

                function cekfocus_tp(){
                    if ($("#TP-pihak_ke option:selected").val() == ""){
                        $("#TP-pihak_ke").focus()
                    }else if($("#TP-pihak").val() == ""){
                        $("#TP-pihak").focus()
                    }else if ($("#TP-nama").val() == ""){
                        $("#TP-nama").focus()
                    }else if($("#TP-identitas").val() == ""){
                        $("#TP-identitas").focus()
                    }else if ($("#TP-jenis_pihak").val() == ""){
                        $("#TP-jenis_pihak").focus()
                    }
                }

            //Edit


                function TPedit(selector)
                {
                    _id = $(selector).attr('data-id');
                    $("#TP-_id").val(_id);
                    param = {};
                    tbl     = "orderkreditpihak";
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

                                $("#TP-pihak_ke").val(resp['pihak_ke'])
                                $("#TP-pihak").val(resp['pihak'])
                                console.log(resp['pihak'])
                                $('#TP-isdebitur_1').prop("checked",(resp['isdebitur_1'] == "0" ? false : true))
                                $("#TP-jenis_pihak").val(resp['jenis_pihak'])
                                $("#TP-identitas").val(resp['identitas'])
                                $('#TP-isdebitur_2').prop("checked",(resp['isdebitur_2'] == "0" ? false : true))
                                $("#TP-nama").val(resp['nama'])

                                if(resp['jenis_pihak'] == "1"){
                                    $('.perorangan').removeClass('hide');
                                    $('.perseroan').addClass('hide');

                                    $("#TP-nama_menyetujui").val(resp['nama_menyetujui'])
                                    $("#TP-identitas_menyetujui").val(resp['identitas_menyetujui'])
                                    $("#TP-stt_pihak_menyetujui").val(resp['stt_pihak_menyetujui'])
                                }else{
                                    $('.perseroan').removeClass('hide');
                                    $('.perorangan').addClass('hide');

                                    $("#TP-nama_pt").val(resp['nama_pt'])
                                    $("#TP-kedudukan_pt").val(resp['kedudukan_pt'])
                                    $("#TP-jabatan_pt").val(resp['jabatan_pt'])
                                    $("#TP-ketskpt").val(resp['keterangan_sk_pt'])
                                }

                             
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
