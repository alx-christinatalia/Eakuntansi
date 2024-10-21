<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Edit Data | eNotaris.com</title>
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

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <?php $this->load->view("template/header"); ?>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view("template/sidebar", ["active" => "pajak", "sub" => "SSB"]); ?>

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
                                    <h1>Pajak SSB</h1>
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
                        <!-- END PAGE TITLE -->
                    </div>
                    <div class="base-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="base-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light bordered table-list">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <span class="badge badge-success">1</span>
                                            <span class="caption-subject font-dark bold uppercase">Informasi Wajib Pajak</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                    <form class="form-horizontal save_data" role="form" id="save_data">
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">NPWP <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" placeholder="Nomor Pokok Wajib Pajak" class="form-control" rel="tooltip" name="pnpwp" id="pnpwp" rel="tooltip" title="* Wajib diisi. <br>NPWP sesuai NPWP si wajib pajak."  value="<?php echo $ssb->Data[0]->npwp; ?>" disabled> 
                                                    <span class="input-group-btn">
                                                        <a data-toggle="modal" href="#mnpwp" onclick="ref_npwp();" class="btn green-turquoise" title="Pilih NPWP">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                                <a href="<?php echo base_url(); ?>npwp/tambah" class="btn green-turquoise" title="Tambah NPWP">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Nama <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" name="nama" id="nama" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak." value="<?php echo $ssb->Data[0]->wp_nama; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Alamat <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" rel="tooltip" name="alamat" id="alamat" rel="tooltip" title="* Wajib diisi. <br>Alamat sesuai alamat si wajib pajak." rows="2"><?php echo $ssb->Data[0]->wp_alamat; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">Desa/Kelurahan <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" name="desa" id="desa" rel="tooltip" title="* Wajib diisi. <br>Desa/Kelurahan sesuai Desa/Kelurahan si wajib pajak." value="<?php echo $ssb->Data[0]->wp_kelurahan; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Kecamatan <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" placeholder="Kecamatan" class="form-control" rel="tooltip" name="kec" id="kec" rel="tooltip"  class="form-control" title="* Wajib diisi. <br>Silahkan pilih kecamatan." disabled  value="<?php echo $ssb->Data[0]->wp_kec; ?>"> 
                                                            <span class="input-group-btn">
                                                                <a data-toggle="modal" href="#cari1" onclick="ref_kota1();" class="btn green-turquoise" title="Pilih kota">
                                                                  <i class="fa fa-search"></i>
                                                                </a>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Kab/Kota <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" name="kota" id="kota" rel="tooltip" title="* Wajib diisi. <br>Kota sesuai Kota si wajib pajak." value="<?php echo $ssb->Data[0]->wp_kabkota; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Kode Pos</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" name="kodepos" id="kodepos" rel="tooltip" title="* Tidak wajib diisi. <br>Diisi Kode Pos." value="<?php echo $ssb->Data[0]->wp_kodepos; ?>"> 
                                            </div>
                                        </div>
                                    </form> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="portlet light bordered table-list">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <span class="badge badge-success">2</span>
                                            <span class="caption-subject font-dark bold uppercase">Informasi Tanah dan Bangunan</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                    <form class="form-horizontal save_data" role="form" id="save_data">
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">No Objek Pajak (NOP) <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control" rel="tooltip" name="nop" id="nop" rel="tooltip" title="* Wajib diisi. <br>Nomor Objek Pajak (NOP)." value="<?php echo $ssb->Data[0]->o_nop; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Ltk Tanah dan Bangunan <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" rel="tooltip" name="ltktb" id="ltktb" rel="tooltip" title="* Wajib diisi. <br>Letak Tanah dan Bangunan." rows="2"><?php echo $ssb->Data[0]->o_letak; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">Desa/Kelurahan <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" name="desab" id="desab" rel="tooltip" title="* Wajib diisi. <br>Desa/Kelurahan sesuai Desa/Kelurahan si wajib pajak." value="<?php echo $ssb->Data[0]->o_kelurahan; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">RT/RW <font color="red">*</font></label>
                                            <div class="col-md-6">                                                
                                              <input type="text" class="form-control" rel="tooltip" name="rtrw" id="rtrw" rel="tooltip" title="* Wajib diisi. <br>RT/RW sesuai RT/RW si wajib pajak." value="<?php echo $ssb->Data[0]->o_rtrw; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Kecamatan <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" placeholder="Kecamatan" class="form-control" rel="tooltip" name="kecb" id="kecb" rel="tooltip"  class="form-control" title="* Wajib diisi. <br>Silahkan pilih kecamatan." value="<?php echo $ssb->Data[0]->o_kec; ?>" disabled> 
                                                            <span class="input-group-btn">
                                                                <a data-toggle="modal" href="#cari2" onclick="ref_kota2();" class="btn green-turquoise" title="Pilih kota">
                                                                  <i class="fa fa-search"></i>
                                                                </a>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Kab/Kota <font color="red">*</font></label>
                                            <div class="col-md-6">                                                
                                              <input type="text" class="form-control" rel="tooltip" name="kotab" id="kotab" rel="tooltip" title="* Wajib diisi. <br>Kab/Kota sesuai Kab/Kota si wajib pajak." value="<?php echo $ssb->Data[0]->o_kabkota; ?>"> 
                                            </div>
                                        </div>
                                    </form> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="portlet light bordered table-list">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <span class="badge badge-success">3</span>
                                            <span class="caption-subject font-dark bold uppercase">Perhitungan NJOP PBB</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                    <form class="form-horizontal save_data" role="form" id="save_data">
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">Luas Tanah <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="0" rel="tooltip" name="lt" id="lt" rel="tooltip" title="* Wajib diisi. <br>Diisi luas tanah." value="<?php echo $ssb->Data[0]->nj_luastanah; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">NJOP PBB / M2 <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="0" rel="tooltip" name="njoppbb" id="njoppbb" rel="tooltip" title="* Wajib diisi. <br>Diisi nilai NJOP pada saat terjadinya perolehan hak." value="<?php echo $ssb->Data[0]->nj_pbbtanahpermtr; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Luas x NJOP</label>
                                            <div class="col-md-6">                                                
                                              <input type="text" class="form-control" rel="tooltip" placeholder="0" name="luasxnjop" id="luasxnjop" rel="tooltip" title="*Perhitungan otomatis." disabled value="<?php echo $ssb->Data[0]->nj_luastanahxpbb; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Luas Bangunan <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="0" rel="tooltip" name="lb" id="lb" rel="tooltip" title="* Wajib diisi. <br>Diisi luas bangunan." value="<?php echo $ssb->Data[0]->nj_luasbangunan; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">PBB Bangunan / M2 <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="0" rel="tooltip" name="pbbb" id="pbbb" rel="tooltip" title="* Wajib diisi. <br>Diisi nilai NJOP pada saat terjadinya perolehan hak." value="<?php echo $ssb->Data[0]->nj_pbbbangunanpermtr; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Luas x PBB</label>
                                            <div class="col-md-6">                                                
                                              <input type="text" class="form-control" rel="tooltip" placeholder="0" name="luasxpbb" id="luasxpbb" rel="tooltip" title="*Perhitungan otomatis." disabled="" value="<?php echo $ssb->Data[0]->nj_luasbangunanxpbb; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Total NJOP PBB</label>
                                            <div class="col-md-6">                                                
                                              <input type="text" class="form-control" rel="tooltip" placeholder="0" name="totalnjoppbb" id="totalnjoppbb" rel="tooltip" title="*Perhitungan otomatis." disabled="" value="<?php echo $ssb->Data[0]->nj_totalnjoppbb; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">Harga Transaksi <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="0" rel="tooltip" name="ht" id="ht" rel="tooltip" title="* Wajib diisi. <br>Diisi nilai perolehan / harga jual." value="<?php echo $ssb->Data[0]->nj_harga; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">Jenis Perolehan <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                    <select class="form-control" rel="tooltip" name="jp" id="jp" rel="tooltip" title="* Wajib diisi. <br>Silahkan pilih jenis pada data yang tersedia."> 
                                                        <option value="11" >Jual beli</option>
                                                        <option value="12">Tukar menukar</option>
                                                        <option value="13">Hibah</option>
                                                        <option value="14">Hibah wasiat</option>
                                                        <option value="15">Pemasukan dalam perseroan / badan hukum lainnya</option>
                                                        <option value="16">Pemisahan hak yang mengakibatkan peralihan</option>
                                                        <option value="17">Penunjukkan pembeli dalam lelang</option>
                                                        <option value="18">Pelaksanaan putusan hakim yang mempunyai kekuatan hukum tetap</option>
                                                        <option value="19">Hadiah</option>
                                                        <option value="21">Pemberian hak baru sebagai kelanjutan pelepasan hak</option>
                                                        <option value="22">Pemberian hak baru diluar pelepasan hak</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">No Sertifikat <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control" rel="tooltip" name="ns" id="ns" rel="tooltip" title="* Wajib diisi. <br>Diisi no sertifikat tanah / bangunan." value="<?php echo $ssb->Data[0]->nj_nosertifikat; ?>"> 
                                            </div>
                                        </div>
                                    </form> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="portlet light bordered table-list">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <span class="badge badge-success">4</span>
                                            <span class="caption-subject font-dark bold uppercase">Perhitungan BPHTB</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                    <form class="form-horizontal save_data" role="form" id="save_data">
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">NPOP <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="0" rel="tooltip" name="npop" id="npop" rel="tooltip" title="* Wajib diisi. <br>Nilai perolehan objek pajak. Jika NJOP > NPOP maka yang digunakan adalah NJOP (berlaku mana yang nilainya lebih besar)." value="<?php echo $ssb->Data[0]->npop; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">Jenis Transaksi <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <select class="form-control" rel="tooltip" name="jt" id="jt" rel="tooltip" title="* Wajib diisi. <br>Silahkan pilih jenis pada data yang tersedia.">
                                                    <option value="1">Jual Beli</option>
                                                    <option value="2">Waris</option>
                                                    <option value="3">Hibah</option>
                                                    <option value="4">Pemberian hak pengelolaan</option> 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">NPOPTKP <font color="red">*</font></label>
                                            <div class="col-md-6">                                                
                                              <input type="text" class="form-control" rel="tooltip" placeholder="0" name="npoptkp" id="npoptkp" rel="tooltip" title="* Wajib diisi. <br>Nilai perolehan objek pajak tidak kena pajak . Tarif masing-masing wilayah berbeda. Nilai maksimal 60jt dan 300jt untuk NPOPTKP waris / hibah ." value="<?php echo $ssb->Data[0]->npoptkp; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">Jumlah Setoran <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <select class="form-control" rel="tooltip" name="js" id="js" rel="tooltip" title="* Wajib diisi. <br>Jumlah setoran berdasarkan.">
                                                    <option value="1">Perhitungan wajib pajak</option>
                                                    <option value="2">STPD / SKPDKB / SKPDKBT</option>
                                                    <option value="3">Ambil kode pengurang BPHTB</option>
                                                    <option value="4">Lain-lain</option> 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">jumlah Pembayaran <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="0" rel="tooltip" name="jp1" id="jp1" rel="tooltip" title="* Wajib diisi. <br>Jumlah pembayaran." value="<?php echo $ssb->Data[0]->jmlbyr; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Lokasi Pembayaran <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" placeholder="Kabupaten/Kota" class="form-control" rel="tooltip" name="lp" id="lp" rel="tooltip"  class="form-control" title="* Wajib diisi. <br>Kota tempat pembayaran." disabled=""  value="<?php echo $ssb->Data[0]->lokasibyr; ?>"> 
                                                        <input type="hidden" id="id_kota">
                                                            <span class="input-group-btn">
                                                                <a data-toggle="modal" href="#cari3" onclick="ref_kota3();" class="btn green-turquoise" title="Pilih kota">
                                                                  <i class="fa fa-search"></i>
                                                                </a>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Tgl Bayar <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" id="date" name="date" rel="tooltip" title="* Masukkan tanggal bayar" class="form-control" required="" value="<?php echo $ssb->Data[0]->tgl_byr; ?>">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">Nama Notaris / PPAT <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" name="naman" id="naman" rel="tooltip" title="* Wajib diisi. <br>Nama notaris / PPAT." value="<?php echo $ssb->Data[0]->nama_notaris; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">Nama Wajib Pajak <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" rel="tooltip" name="namaw" id="namaw" rel="tooltip" title="* Wajib diisi. <br>Nama wajib pajak." value="<?php echo $ssb->Data[0]->nama_wp; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-3 control-label">Jml Setoran Berd <font color="red">*</font></label>
                                            <div class="col-md-6">
                                                <div class="md-radio-list">
                                                    <div class="md-radio">
                                                        <input type="radio" id="radio1" name="radio1" onclick="refreshradio();" class="md-radiobtn" checked="" value="1">
                                                        <label for="radio1">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Penghitungan Wajib Pajak </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="radio2" name="radio1" onclick="stb();" class="md-radiobtn" value="2">
                                                        <label for="radio2">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> STB / SKBKB / SKBKBT  </label>
                                                    </div>
                                                    <div class="form-group hide" id="in2">
                                                        <div class="col-md-6">
                                                            <input type="text" id="nmr" name="nmr" class="form-control" placeholder="Nomor" value="<?php echo $ssb->Data[0]->ntpn; ?>">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <input type="text" id="tglnmr" name="tglnmr" class="form-control" required=""  value="<?php echo $ssb->Data[0]->tgl_byr; ?>">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="radio3" name="radio1" onclick="hitung()" class="md-radiobtn" value="3">
                                                        <label for="radio3">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Penghitungan diisi sendiri karena </label>
                                                    </div>
                                                    <div class="form-group hide" id="in3">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <input type="text" placeholder="Pengurangan BPHTB" class="form-control" name="inbphtb" id="inbphtb" class="form-control" disabled=""  value="<?php echo $ssb->Data[0]->nj_jenisperoleh; ?>"> 
                                                                        <span class="input-group-btn">
                                                                            <a data-toggle="modal" href="#pbphtb" onclick="ref_pbphtb();" class="btn green-turquoise" title="Pilih kota">
                                                                              <i class="fa fa-search"></i>
                                                                            </a>
                                                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="radio5" name="radio1" onclick="lain()" class="md-radiobtn" value="4">
                                                        <label for="radio5">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Contoh isian lainnya </label>
                                                    </div>
                                                    <div class="form-group hide" id="in4">
                                                        <div class="col-md-12">
                                                                <input type="text" placeholder="Sebutkan" class="form-control" name="isi" id="isi" class="form-control" required="" value="<?php echo $ssb->Data[0]->catatan; ?>"> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">NPOPKP</label>
                                            <div class="col-md-6">                                                
                                              <input type="text" class="form-control" rel="tooltip" placeholder="0" name="npopkp" id="npopkp" rel="tooltip" title="*Perhitungan otomatis." disabled=""  value="<?php echo $ssb->Data[0]->npopkp; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">BPHTB</label>
                                            <div class="col-md-6">                                                
                                              <input type="text" class="form-control" rel="tooltip" placeholder="0" name="bphtb" id="bphtb" rel="tooltip" title="*Perhitungan otomatis." disabled="" value="<?php echo $ssb->Data[0]->beaperolehan; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Pengenaan 50%</label>
                                            <div class="col-md-6">                                                
                                              <input type="text" class="form-control" rel="tooltip" placeholder="0" name="p50" id="p50" rel="tooltip" title="*Perhitungan otomatis." disabled="" value="<?php echo $ssb->Data[0]->pengenaankarenahibahdkk; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnotelp" class="col-md-3 control-label">Bea Perolehan</label>
                                            <div class="col-md-6">                                                
                                              <input type="text" class="form-control" rel="tooltip" placeholder="0" name="bp" id="bp" rel="tooltip" title="*Perhitungan otomatis." disabled="" value="<?php echo $ssb->Data[0]->beaperolehanygdibayar; ?>"> 
                                            </div>
                                        </div>
                                    </form> 
                                    </div>
                                </div>
                            </div>
                                        <div class="row">
                                            <input type="hidden" value="<?php echo date("Y-m-d"); ?>" id="in">
                                            <div class="col-md-offset-2 col-md-1">
                                                <a class="btn btn-primary" onclick="simpan1();" title="Simpan Data">Simpan</a> 
                                            </div>
                                            <div class="col-md-1" style="padding-left: 25px;">
                                                <a class="btn default" href="<?php echo base_url(); ?>ssb">Batal</a>
                                            </div>
                                        </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->

        <?php $this->load->view("pajak/ssb/modal/npwp"); ?>
        <?php $this->load->view("pajak/ssb/modal/cari"); ?>
        <?php $this->load->view("pajak/ssb/modal/carikota"); ?>
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
            $( "#jt").val("<?php echo $ssb->Data[0]->jenis; ?>");
            $( "#jp").val("<?php echo $ssb->Data[0]->nj_jenisperoleh; ?>");
            $( "#js").val("<?php echo $ssb->Data[0]->jmlsetoranberdasar; ?>");

             $("#js").change( function(){
                setradio();
             });

             function setradio(){

                var radio = $( "#js").val();
                console.log(radio);

                    if (radio=="1"){
                        $("#radio1").prop("checked",true);
                    }else if (radio=="2"){
                        refreshradio();
                        $("#radio2").prop("checked",true);
                        $( "#in2").removeClass("hide");
                    }else if (radio=="3"){
                        refreshradio();
                        $("#radio3").prop("checked",true);
                        $( "#in3").removeClass("hide");
                    }else if (radio=="4"){
                        refreshradio();
                        $("#radio5").prop("checked",true);
                        $( "#in4").removeClass("hide");
                    }

             }

        </script>

        <script>
            $(document).ready(function() {
                set_notaris();
                setradio();
            });

            function set_notaris(){
                $.ajax({
                    type: "post",
                    url: base_url+"user/get_notaris",
                    dataType: "json",
                    success : function(result){ 
                            $("#naman").val(result);  
                    }
                }) 
            }
        </script>

        <script>
            var c_date="";
             $(function() {

                $( "#date").datepicker('setDate', new Date());
                $( "#tglnmr").datepicker('setDate', new Date());

              });

                $('#date').datepicker({ dateFormat: 'dd-mm-yy' }).val();
                $('#tglnmr').datepicker({ dateFormat: 'dd-mm-yy' }).val();
        </script>

        <script>
            //radio button
            function stb(){
                refreshradio();
                console.log("stb");
                $( "#in2").removeClass("hide");
            }

            function hitung(){
                refreshradio();
                $( "#in3").removeClass("hide");
            }

            function lain(){
                refreshradio();
                $( "#in4").removeClass("hide");
            }

            function refreshradio(){
                $( "#in2").addClass("hide");
                $( "#in3").addClass("hide");
                $( "#in4").addClass("hide");
            }

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
            function ref_npwp()
            {
                get_modal_data("", "" , "ssb/datanpwp", "#list-npwp");
            }

            function ref_kota1()
            {
                get_modal_data("", "" , "ssb/datakota1", "#list-kabkota1");
            }

            function ref_kota2()
            {
                get_modal_data("", "" , "ssb/datakota2", "#list-kabkota2");
            }
            function ref_kota3()
            {
                get_modal_data("", "" , "ssb/datakota3", "#list-kabkota3");
            }

            function ref_pbphtb()
            {
                get_modal_data("", "" , "ssb/bphtb", "#list-bphtb");
            }
        </script>

        <script>
        //geng modal
        var kywd= "", hal = 1;
        var m_kywd="" , m_utama ="", m_table="";

             $("#frmnpwp").submit(function() {
                search_data = $("#s_npwp").val();
                get_modal_data(search_data, "" , "ssb/datanpwp", "#list-npwp");   
                return false;
                
             }) 

             $("#frmkota1").submit(function() {
                search_data = $("#s_kabkota1").val();
                get_modal_data(search_data, "" , "ssb/datakota1", "#list-kabkota1");   
                return false;
                
             }) 

             $("#frmkota2").submit(function() {
                search_data = $("#s_kabkota2").val();
                get_modal_data(search_data, "" , "ssb/datakota2", "#list-kabkota2");   
                return false;
                
             }) 

             $("#frmkota3").submit(function() {
                search_data = $("#s_kabkota3").val();
                get_modal_data(search_data, "" , "ssb/datakota3", "#list-kabkota3");   
                return false;
                
             }) 

             $("#frmbphtb").submit(function() {
                search_data = $("#s_bphtb").val();
                get_modal_data(search_data, "" , "ssb/bphtb", "#list-bphtb");   
                return false;
                
             }) 

            function get_bphtb(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ssb/bphtb",
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



                        $("#list-bphtb").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function get_npwp(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ssb/datanpwp",
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



                        $("#list-npwp").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function get_kota1(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ssb/datakota1",
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



                        $("#list-kabkota1").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function get_kota2(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ssb/datakota2",
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



                        $("#list-kabkota2").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function get_kota3(kywd, hal )
            {
                hal = (hal < 1) ? "1" : hal; 
                console.log("hal: "+hal+" kywd: "+kywd);
                   $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ssb/datakota3",
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



                        $("#list-kabkota3").html(result["list_result"]);
                        }
                   });

                   return false;
            }

            function set_kota1(selector){
                kota = $(selector).attr("data-kota");
                kec = $(selector).attr("data-kec");
                $("#kota").val(kota);
                $("#kec").val(kec);
                $('#cari1').modal('hide');
            }

            function set_kota2(selector){
                kota = $(selector).attr("data-kota");
                kec = $(selector).attr("data-kec");
                $("#kotab").val(kota);
                $("#kecb").val(kec);
                $('#cari2').modal('hide');
            }

            function set_pbphtb(selector){
                kode = $(selector).attr("data-kode");
                $("#inbphtb").val(kode);
                $('#pbphtb').modal('hide');
            }

            function set_lp(selector){
                kota = $(selector).attr("data-kota");
                id = $(selector).attr("data-id");
                $("#lp").val(kota);
                $('#cari3').modal('hide');
            }

            function set_npwp(selector){
                npwp = $(selector).attr("data-npwp");
                id = $(selector).attr("data-id");
                alamat = $(selector).attr("data-alamat");
                desa = $(selector).attr("data-desa");
                kec = $(selector).attr("data-kec");
                kota = $(selector).attr("data-kota");
                kodepos = $(selector).attr("data-kp");
                nama = $(selector).attr("data-nama");
                $("#pnpwp").val(npwp);
                $("#nama").val(nama);
                $("#namaw").val(nama);
                $("#id_npwp").val(id);
                $("#alamat").val(alamat);
                $("#desa").val(desa);
                $("#kec").val(kec);
                $("#kota").val(kota);
                $("#kodepos").val(kodepos);
                $('#mnpwp').modal('hide');
            }

        </script>

        <script>
            //PERHITUNGAN NJOP PBB
             $("#njoppbb").keyup( function(){
                luasxnjop();
             });

             $("#lt").keyup( function(){
                luasxnjop();
             });

             $("#pbbb").keyup( function(){
                luasxpbb();
             });

             $("#lb").keyup( function(){
                luasxpbb();
             });

             function luasxnjop(){
                 lt = $("#lt").val();
                 njoppbb = $("#njoppbb").val();
                 hasil = lt*njoppbb;
                 $("#luasxnjop").val(hasil);
                 totalnjoppbb()
             }

             function luasxpbb(){
                 lb = $("#lb").val();
                 pbbb = $("#pbbb").val();
                 hasil = lb * pbbb;
                 $("#luasxpbb").val(hasil);
                 totalnjoppbb()
             }

             function totalnjoppbb(){
                 h1=parseInt($("#luasxnjop").val());
                 h2=parseInt($("#luasxpbb").val());
                 hasil = h1 + h2;
                 hasil=(isNaN(hasil) ? 0 : hasil)
                 $("#totalnjoppbb").val(hasil);
             }

             //PERHITUNGAN BPHTB

             $("#npop").keyup( function(){
                jenistransaksi()
             });

             $("#npoptkp").keyup( function(){
                jenistransaksi()
             });

             $("#jt").change( function(){
                jenistransaksi()
             });

             function jenistransaksi(){

                 if($("#jt option:selected").val()=="1"){
                    npop=$("#npop").val();
                    npoptkp=$("#npoptkp").val();

                    npopkp=npop-npoptkp;
                    jumlahpembayaran=(5*npopkp)/100;
                    bphtb=(5*npopkp)/100;

                    $("#jp1").val(jumlahpembayaran);
                    $("#npopkp").val(npopkp);
                    $("#bphtb").val(bphtb);
                    $("#p50").val("0");
                    $("#bp").val("0");

                 } else {
                    npop=$("#npop").val();
                    npoptkp=$("#npoptkp").val();

                    npopkp=npop-npoptkp;
                    jumlahpembayaran=(5*npopkp)/100;
                    bphtb=(5*npopkp)/100;
                    tot=(50*bphtb)/100;

                    $("#jp1").val(jumlahpembayaran);
                    $("#npopkp").val(npopkp);
                    $("#bphtb").val(bphtb);
                    $("#p50").val(tot);
                    $("#bp").val(tot);

                 }

             }


        </script>

        <script>
            //Simpan Data
                //Jenis simpan
                    $("#save_data").submit(function(){

                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>ssb";
                        }
                        return false;
                    })

                    function simpanatas()
                    {
                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>ssb";
                        }

                        return false;
                    }

                    function simpan1()
                    {
                        var kondisi = before_simpan();
                        if(kondisi == "sukses"){
                            simpan();
                            window.location.href = "<?php echo base_url(); ?>ssb";
                        }

                        return false;
                    }

                function simpan()
                {
                    var param = {
                             "npwp" : $("#pnpwp").val(),
                             "wp_nama" : $("#nama").val(),
                             "wp_alamat" : $("#alamat").val(),
                             "wp_kelurahan" : $("#desa").val(),
                             "wp_kec" : $("#kec").val(),
                             "wp_kabkota" : $("#kota").val(),
                             "wp_kodepos" : $("#kodepos").val(),
                             "o_nop" : $("#nop").val(),
                             "o_letak" : $("#ltktb").val(),
                             "o_kelurahan" : $("#desab").val(),
                             "o_rtrw"  : $("#rtrw").val(),
                             "o_kec"  : $("#kecb").val(),
                             "o_kabkota"  : $("#kotab").val(),
                             "nj_luastanah"  : $("#lt").val(),
                             "nj_pbbtanahpermtr"  : $("#njoppbb").val(),
                             "nj_luastanahxpbb"  : $("#luasxnjop").val(),
                             "nj_luasbangunan"  : $("#lb").val(),
                             "nj_pbbbangunanpermtr"  : $("#pbbb").val(),
                             "nj_luasbangunanxpbb"  : $("#luasxpbb").val(),
                             "nj_totalnjoppbb"  : $("#totalnjoppbb").val(),
                             "nj_harga"  : $("#ht").val(),
                             "nj_jenisperoleh" : $("#jp option:selected").val(),
                             "nj_nosertifikat" : $("#ns").val(),
                             "npop" : $("#npop").val(),
                             "jenis" : $("#jt option:selected").val(),
                             "npoptkp" : $("#npoptkp").val(),
                             "npopkp" : $("#npopkp").val(),
                             "beaperolehan" : $("#bphtb").val(),
                             "pengenaankarenahibahdkk" : $("#p50").val(),
                             "beaperolehanygdibayar" : $("#p50").val(),
                             "jmlsetoranberdasar" : $("#js option:selected").val(),
                             "jmlbyr" : $("#bphtb").val(),
                             "lokasibyr" : $("#lp").val(),
                             "tgl_byr" : $("#date").val(),
                             "nama_notaris" : $("#naman").val(),
                             "nama_wp" : $("#namaw").val(),
                             "catatan" : $("#isi").val(),
                             "ntpn" : $("#nmr").val(),
                             "tgl_update"  : $("#in").val()
                         }     
                    $.ajax({
                        type : "post",
                        url : "<?php echo base_url(); ?>ssb/edit",
                        data : {param : param , id : "<?php echo $ssb->Data[0]->_id;  ?>"},
                        dataType: 'json',
                        success : function (result){

                        }

                    });
                }

                function before_simpan()
                {
                             npwp = $("#pnpwp").val();
                             wp_nama = $("#nama").val();
                             wp_alamat = $("#alamat").val();
                             wp_kelurahan = $("#desa").val();
                             wp_kec = $("#kec").val();
                             wp_kabkota = $("#kota").val();
                             wp_kodepos = $("#kodepos").val();
                             o_nop = $("#nop").val();
                             o_letak = $("#ltktb").val();
                             o_kelurahan = $("#desab").val();
                             o_rtrw = $("#rtrw").val();
                             o_kec = $("#kecb").val();
                             o_kabkota = $("#kotab").val();
                             nj_luastanah = $("#lt").val();
                             nj_pbbtanahpermtr = $("#njoppbb").val();
                             nj_luastanahxpbb = $("#luasxnjop").val();
                             nj_luasbangunan = $("#lb").val();
                             nj_pbbbangunanpermtr = $("#pbbb").val();
                             nj_luasbangunanxpbb = $("#luasxpbb").val();
                             nj_totalnjoppbb = $("#totalnjoppbb").val();
                             nj_harga = $("#ht").val();
                             nj_jenisperoleh = $("#jp option:selected").val();
                             nj_nosertifikat = $("#ns").val();
                             npop = $("#npop").val();
                             jenis = $("#jt option:selected").val();
                             npoptkp = $("#npoptkp").val();
                             npopkp = $("#npopkp").val();
                             beaperolehan = $("#bphtb").val();
                             pengenaankarenahibahdkk = $("#p50").val();
                             beaperolehanygdibayar = $("#p50").val();
                             jmlsetoranberdasar = $("#js option:selected").val();
                             jmlbyr = $("#jp1").val();
                             lokasibyr = $("#lp").val();
                             tgl_byr = $("#date").val();
                             nama_notaris = $("#naman").val();
                             nama_wp = $("#namaw").val();
                             tgl_input = $("#in").val();


                    kondisi = "";

                    if((npwp != "") && (wp_nama != "") && (wp_alamat != "") && (wp_kelurahan != "") && (wp_kec != "") && (wp_kabkota != "") && (wp_kodepos != "") && (o_nop != "") && (o_letak != "") && (o_kelurahan != "") && (o_rtrw != "") && (o_kec != "") && (o_kabkota != "") && (nj_luastanah != "") && (nj_pbbtanahpermtr != "") && (nj_luastanahxpbb != "") && (nj_luasbangunan != "") && (nj_pbbbangunanpermtr != "") && (nj_luasbangunanxpbb != "") && (nj_totalnjoppbb != "") && (nj_harga != "") && (nj_jenisperoleh != "") && (nj_nosertifikat != "") && (npop != "") && (jenis != "") && (npoptkp != "") && (npopkp != "") && (jmlbyr != "") && (lokasibyr != "") && (tgl_byr != "") && (nama_notaris != "") && (nama_wp != "") && (tgl_input != "") && (beaperolehan != "") && (pengenaankarenahibahdkk != "") && (beaperolehanygdibayar != "") && (jmlsetoranberdasar != ""))
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
                    if($("#pnpwp").val() == "")
                    {
                     $('#pnpwp').focus();  
                    }else if ($("#nama").val() == "")
                    {
                     $('#nama').focus();   
                    }else if ($("#alamat").val() == "")
                    {
                     $('#alamat').focus();   
                    }else if ($("#desa").val() == "")
                    {
                     $('#desa').focus();   
                    }else if ($("#kec").val() == "")
                    {
                     $('#kec').focus();   
                    }else if ($("#kota").val() == "")
                    {
                     $('#kota').focus();   
                    }else if ($("#kodepos").val() == "")
                    {
                     $('#kodepos').focus();   
                    }else if ($("#nop").val() == "")
                    {
                     $('#nop').focus();  
                    }else if ($("#ltktb").val() == "")
                    {
                     $('#ltktb').focus(); 
                    }else if ($("#desab").val() == "")
                    {
                     $('#desab').focus();  
                    }else if ($("#rtrw").val() == "")
                    {
                     $('#rtrw').focus();   
                    }else if ($("#kecb").val() == "")
                    {
                     $('#kecb').focus();   
                    }else if ($("#kotab").val() == "")
                    {
                     $('#kotab').focus();   
                    }else if ($("#lt").val() == "")
                    {
                     $('#lt').focus();   
                    }else if ($("#njoppbb").val() == "")
                    {
                     $('#njoppbb').focus();   
                    }else if ($("#luasxnjop").val() == "")
                    {
                     $('#luasxnjop').focus();   
                    }else if ($("#lb").val() == "")
                    {
                     $('#lb').focus();   
                    }else if ($("#pbbb").val() == "")
                    {
                     $('#pbbb').focus();   
                    }else if ($("#luasxpbb").val() == "")
                    {
                     $('#luasxpbb').focus();   
                    }else if ($("#totalnjoppbb").val() == "")
                    {
                     $('#totalnjoppbb').focus();   
                    }else if ($("#ht").val() == "")
                    {
                     $('#ht').focus();   
                    }else if ($("#ns").val() == "")
                    {
                     $('#ns').focus();   
                    }else if ($("#npop").val() == "")
                    {
                     $('#npop').focus();   
                    }else if ($("#npoptkp").val() == "")
                    {
                     $('#npoptkp').focus();   
                    }else if ($("#npopkp").val() == "")
                    {
                     $('#npopkp').focus();   
                    }else if ($("#p50").val() == "")
                    {
                     $('#p50').focus();   
                    }else if ($("#jp1").val() == "")
                    {
                     $('#jp1').focus();   
                    }else if ($("beaperolehan").val() == "")
                    {
                     $('beaperolehan').focus();   
                    }else if ($("#pengenaankarenahibahdkk").val() == "")
                    {
                     $('#pengenaankarenahibahdkk').focus();   
                    }else if ($("#namaw").val() == "")
                    {
                     $('#namaw').focus();   
                    }else if ($("#namaw").val() == "")
                    {
                     $('#namaw').focus();   
                    }else if ($("#namaw").val() == "")
                    {
                     $('#namaw').focus();   
                    }
                }
            //End Simpan Data
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

    </body>
</html>