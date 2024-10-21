<div class="tab-pane active" id="tab_1">
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <span class="badge badge-success">1</span>
                <span class="caption-subject font-dark bold uppercase">Order</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="akta-order">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tgl Masuk</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="akta-order-tglmasuk" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Pelanggan</label>
                        <div class="col-md-6">
                            <select class="form-control" id="akta-order-pelanggan">
                                <?php foreach ($akta_order->Data as $resp) { ?>
                                    <option value="<?php echo $resp->nama ?>"><?php echo $resp->nama." | ".$resp->pimpinan_nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >No Batch (Request)</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="akta-order-nobatch" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >No Kontrak (PK)</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="akta-order-nokontrak" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tgl Kontrak</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="akta-order-tglkontrak" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tgl Surat Kuasa</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="akta-order-tglsuratkuasa" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Jenis Pembiayaan</label>
                        <div class="col-md-6">
                            <select class="form-control" id="akta-order-jenispembiayaan">
                                <option value="Pembiayaan">Pembiayaan</option>
                                <option value="Murabahah">Murabahah</option>
                            </select>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <span class="badge badge-success">2</span>
                <span class="caption-subject font-dark bold uppercase">Akta</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="akta-order">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >No Akta</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="akta-akta-noakta" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tgl Akta</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="akta-akta-tglakta" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Jam Menghadap</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control timepicker timepicker-24" id="akta-akta-jammenghadap">
                                    <span class="input-group-btn">
                                        <button class="btn default" type="button">
                                            <i class="fa fa-clock-o"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Jam Selesai</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control timepicker timepicker-24" id="akta-akta-jamselesai">
                                    <span class="input-group-btn">
                                        <button class="btn default" type="button">
                                            <i class="fa fa-clock-o"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Biaya Akta</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="akta-akta-biayaakta" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Biaya PNBP</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="akta-akta-biayapnbp" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <span class="badge badge-success">3</span>
                <span class="caption-subject font-dark bold uppercase">Fidusia Online</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="akta-order">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tgl Daftar AHU</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="akta-fidon-tgldaftarahu" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >No Voucher</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="akta-fidon-novoucher" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tgl Sertifikat</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="akta-fidon-tglsertifikat" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >No Sertifikat</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="akta-fidon-nosertifikat" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <span class="badge badge-success">4</span>
                <span class="caption-subject font-dark bold uppercase">Progress</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="akta-order">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Progress</label>
                        <div class="col-md-6">
                            <select class="form-control" id="akta-progress-progress">
                                <?php foreach ($akta_progres->Data as $resp) { ?>
                                    <option value="<?php echo $resp->progres; ?>"><?php echo $resp->progres; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Catatan</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rel="tooltip" id="akta-progress-catatan" rel="tooltip" title="* Wajib diisi. <br>Alamat sesuai alamat si wajib pajak." rows="2"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tgl Selesai</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="akta-progress-tglselesai" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Sudah Selesai?</label>
                        <div class="col-md-6">
                                <div class="md-checkbox-list col-md-10">
                                    <div class="md-checkbox ">
                                        <input type="checkbox" id="akta-progress-selesai" class="md-check">
                                        <label for="akta-progress-selesai">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Sudah Selesai </label>
                                    </div>
                                    <div class="md-checkbox ">
                                        <input type="checkbox" id="akta-progress-belum" class="md-check">
                                        <label for="akta-progress-belum">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Belum Selesai </label>
                                    </div>
                                </div>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-1">
            <input type="submit" class="btn btn-primary" value="Simpan" onclick="simpantabakta();"> 
        </div>
    </div>
</div>
<div class="tab-pane" id="tab_2">
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-bars "></i>
                <span class="caption-subject font-dark bold uppercase">Data Umum</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="akta-order">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Pemberi Fidusia</label>
                        <div class="col-md-6">
                            <select class="form-control" id="pemberi-dataumum-pemberi">
                                    <option value="">Tidak Diset</option>
                                    <option value="1">Badan Usaha</option>
                                    <option value="2">Perorangan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Badan Usaha - Jenis Usaha</label>
                        <div class="col-md-6">
                            <select class="form-control" id="pemberi-dataumum-bjenis">
                                    <option value="">Tidak Diset</option>
                                    <option value="1">Usaha Mikro</option>
                                    <option value="2">Usaha Makro</option>
                                    <option value="3">Usaha Menengah</option>
                                    <option value="4">Usaha Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Perorangan - Jenis Kelamin</label>
                        <div class="col-md-6">
                            <select class="form-control" id="pemberi-dataumum-pjk">
                                    <option value="">Tidak Diset</option>
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Perorangan - Penggunaan</label>
                        <div class="col-md-6">
                            <select class="form-control" id="pemberi-dataumum-ppenggunaan">
                                    <option value="">Tidak Diset</option>
                                    <option value="1">Produktif</option>
                                    <option value="2">Konsumtif</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Perorangan - Produktif</label>
                        <div class="col-md-6">
                            <select class="form-control" id="pemberi-dataumum-pjenis">
                                    <option value="">Tidak Diset</option>
                                    <option value="1">Usaha Kecil</option>
                                    <option value="2">Usaha Mikro</option>
                                    <option value="3">Usaha Menengah</option>
                                    <option value="4">Usaha Lainnya</option>
                            </select>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-bars "></i>
                <span class="caption-subject font-dark bold uppercase">Pemberi Fidusia</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="akta-order">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Panggilan</label>
                        <div class="col-md-6">
                            <select class="form-control" id="pemberi-pemberi-panggilan">
                                    <option value="">Tidak Diset</option>
                                    <option value="Tuan">Tuan</option>
                                    <option value="Nyonya">Nyonya</option>
                                    <option value="Nona">Nona</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Nama</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="pemberi-pemberi-nama" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Pekerjaan</label>
                        <div class="col-md-6">
                            <select class="form-control" id="pemberi-pemberi-pekerjaan">
                                <?php foreach ($pf->Data as $resp) { ?>
                                    <option value="<?php echo $resp->nama ?>"><?php echo $resp->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tempat Lahir</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" placeholder="Pilih Kota" class="form-control" rel="tooltip" id="pemberi-pemberi-tl" rel="tooltip" title="* Wajib diisi. <br>NPWP sesuai NPWP si wajib pajak." disabled> 
                                <span class="input-group-btn">
                                    <a data-toggle="modal" href="#cari" onclick="ref_kota();" class="btn green-turquoise" title="Pilih Kota">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tanggal Lahir</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="pemberi-pemberi-tgll" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Alamat</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="pemberi-pemberi-alamat" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >RT</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="pemberi-pemberi-rt" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >RW</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="pemberi-pemberi-rw" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Desa/Kelurahan</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" placeholder="Pilih Desa" class="form-control" rel="tooltip" id="pemberi-pemberi-desa" rel="tooltip" title="* Wajib diisi. <br>NPWP sesuai NPWP si wajib pajak." disabled> 
                                <span class="input-group-btn">
                                    <a data-toggle="modal" href="#desa" onclick="ref_desa();" class="btn green-turquoise" title="Pilih Kota">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Kecamatan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="pemberi-pemberi-kec" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Kabupaten</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="pemberi-pemberi-kab" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                            <input type="hidden" id="pemberi-pemberi-idkab">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Provinsi</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="pemberi-pemberi-provinsi" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                            <input type="hidden" id="pemberi-pemberi-idprov">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Kode Pos</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="pemberi-pemberi-kodepos" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Identitas</label>
                        <div class="col-md-6">
                            <select class="form-control" id="pemberi-pemberi-identitas">
                                    <option value="KTP">KTP</option>
                                    <option value="NPWP">NPWP</option>
                                    <option value="No SK">No SK</option>
                                    <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >No KTP/Identitas</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="pemberi-pemberi-noidentitas" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >No Handphone</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="pemberi-pemberi-nohp" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Nama Debitur</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="pemberi-pemberi-namadeb" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-1">
            <input type="submit" class="btn btn-primary" value="Simpan" onclick="simpantabpemberi();"> 
        </div>
    </div>
</div>
<div class="tab-pane" id="tab_3">
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-bars "></i>
                <span class="caption-subject font-dark bold uppercase">Data Umum</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="akta-order">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Persetujuan Oleh</label>
                        <div class="col-md-6">
                            <select class="form-control" id="persetujuan-dataumum-persetujuanoleh">
                                    <option value="Tidak Ada Persetujuan">Tidak Ada Persetujuan</option>
                                    <option value="Istri">Istri</option>
                                    <option value="Suami">Suami</option>
                                    <option value="Kedua Orang Tua">Kedua Orang Tua</option>
                                    <option value="Anak">Anak</option>
                                    <option value="Ayah">Ayah</option>
                                    <option value="Ibu">Ibu</option>
                                    <option value="Kakak">Kakak</option>
                                    <option value="Adik">Adik</option>
                                    <option value="Family Lain">Family Lain</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Menikah (Tanpa Persetujuan)">Menikah (Tanpa Persetujuan)</option>
                                    <option value="Duda, Janda">Duda, Janda</option>
                            </select>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-bars "></i>
                <span class="caption-subject font-dark bold uppercase">Persetujuan Oleh</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="frm">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Panggilan</label>
                        <div class="col-md-6">
                            <select class="form-control" id="persetujuan-po-panggilan">
                                    <option value="">Tidak Diset</option>
                                    <option value="Tuan">Tuan</option>
                                    <option value="Nyonya">Nyonya</option>
                                    <option value="Nona">Nona</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Nama</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="persetujuan-po-nama" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Pekerjaan</label>
                        <div class="col-md-6">
                            <select class="form-control" id="persetujuan-po-pekerjaan">
                                <?php foreach ($pf->Data as $resp) { ?>
                                    <option value="<?php echo $resp->nama ?>"><?php echo $resp->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tempat Lahir</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" placeholder="Pilih Kota" class="form-control" rel="tooltip" id="persetujuan-po-tl" rel="tooltip" title="* Wajib diisi. <br>NPWP sesuai NPWP si wajib pajak." disabled> 
                                <span class="input-group-btn">
                                    <a data-toggle="modal" href="#cari1" onclick="ref_kota1();" class="btn green-turquoise" title="Pilih Kota">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tanggal Lahir</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="persetujuan-po-tgll" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Alamat</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="persetujuan-po-alamat" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >RT</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="persetujuan-po-rt" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >RW</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="persetujuan-po-rw" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Desa/Kelurahan</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" placeholder="Pilih Desa" class="form-control" rel="tooltip" id="persetujuan-po-desa" rel="tooltip" title="* Wajib diisi. <br>NPWP sesuai NPWP si wajib pajak." disabled> 
                                <span class="input-group-btn">
                                    <a data-toggle="modal" href="#desa1" onclick="ref_desa1();" class="btn green-turquoise" title="Pilih Kota">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Kecamatan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="persetujuan-po-kec" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Kabupaten</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="persetujuan-po-kab" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                            <input type="hidden" id="persetujuan-po-idkab">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Provinsi</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="persetujuan-po-provinsi" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                            <input type="hidden" id="persetujuan-po-idprov">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Kode Pos</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="persetujuan-po-kodepos" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Identitas</label>
                        <div class="col-md-6">
                            <select class="form-control" id="persetujuan-po-identitas">
                                    <option value="KTP">KTP</option>
                                    <option value="NPWP">NPWP</option>
                                    <option value="No SK">No SK</option>
                                    <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >No Identitas</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="persetujuan-po-noidentitas" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-bars "></i>
                <span class="caption-subject font-dark bold uppercase">Info Tambahan (Isi jika duda atau janda)</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="akta-order">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Dikeluarkan Oleh</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="persetujuan-it-dikeluarkanoleh" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tgl Dikeluarkan</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="persetujuan-it-tgldikeluarkan" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >No Surat</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="persetujuan-it-nosurat" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-1">
            <input type="submit" class="btn btn-primary" value="Simpan" onclick="simpantabpersetujuan();"> 
        </div>
    </div>
</div>
<div class="tab-pane" id="tab_4">
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-bars "></i>
                <span class="caption-subject font-dark bold uppercase">Data Umum</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="akta-order">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Penerima</label>
                        <div class="col-md-6">
                            <select class="form-control" id="penerima-dataumum-penerima">
                                    <option value="0">Tidak Di Set</option>
                                    <option value="1">Badan Usaha</option>
                                    <option value="2">Perorangan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Badan Usaha - Jenis Usaha</label>
                        <div class="col-md-6">
                            <select class="form-control" id="penerima-dataumum-bjenisusaha">
                                    <option value="0">Tidak Di Set</option>
                                    <option value="1">Bank</option>
                                    <option value="2">Lembaga Keuangan Bukan Bank</option>
                                    <option value="9">Lainnya</option>
                            </select>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-bars "></i>
                <span class="caption-subject font-dark bold uppercase">Penerima Fidusia</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="frm">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Panggilan</label>
                        <div class="col-md-6">
                            <select class="form-control" id="penerima-pf-panggilan">
                                    <option value="">Tidak Diset</option>
                                    <option value="Tuan">Tuan</option>
                                    <option value="Nyonya">Nyonya</option>
                                    <option value="Nona">Nona</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Nama</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="penerima-pf-nama" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Pekerjaan</label>
                        <div class="col-md-6">
                            <select class="form-control" id="penerima-pf-pekerjaan">
                                <?php foreach ($pf->Data as $resp) { ?>
                                    <option value="<?php echo $resp->nama ?>"><?php echo $resp->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tempat Lahir</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" placeholder="Pilih Kota" class="form-control" rel="tooltip" id="penerima-pf-tl" rel="tooltip" title="* Wajib diisi. <br>NPWP sesuai NPWP si wajib pajak." disabled> 
                                <span class="input-group-btn">
                                    <a data-toggle="modal" href="#cari2" onclick="ref_kota2();" class="btn green-turquoise" title="Pilih Kota">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tanggal Lahir</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="penerima-pf-tgll" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Alamat</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="penerima-pf-alamat" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >RT</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="penerima-pf-rt" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >RW</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="penerima-pf-rw" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Desa/Kelurahan</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" placeholder="Pilih Desa" class="form-control" rel="tooltip" id="penerima-pf-desa" rel="tooltip" title="* Wajib diisi. <br>NPWP sesuai NPWP si wajib pajak." disabled> 
                                <span class="input-group-btn">
                                    <a data-toggle="modal" href="#desa2" onclick="ref_desa2();" class="btn green-turquoise" title="Pilih Kota">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Kecamatan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="penerima-pf-kec" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Kabupaten</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="penerima-pf-kab" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                            <input type="hidden" id="penerima-pf-idkab">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Provinsi</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="penerima-pf-provinsi" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                            <input type="hidden" id="penerima-pf-idprov">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Kode Pos</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="penerima-pf-kodepos" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Identitas</label>
                        <div class="col-md-6">
                            <select class="form-control" id="penerima-pf-identitas">
                                    <option value="KTP">KTP</option>
                                    <option value="NPWP">NPWP</option>
                                    <option value="No SK">No SK</option>
                                    <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >No KTP/Identitas</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="penerima-pf-noidentitas" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >No Handphone</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="penerima-pf-nohp" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-1">
            <input type="submit" class="btn btn-primary" value="Simpan" onclick="simpantabpenerima();"> 
        </div>
    </div>
</div>
<div class="tab-pane" id="tab_5">
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-bars "></i>
                <span class="caption-subject font-dark bold uppercase">Obyek Fidusia</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="akta-order">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Kategori</label>
                        <div class="col-md-6">
                            <select class="form-control" id="obyek-of-kategori">
                                    <option value="0">Tidak Di Set</option>
                                    <option value="1">Obyek Berserial Nomor</option>
                                    <option value="2">Obyek Tidak Berserial Nomor</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Obyek Berseri</label>
                        <div class="col-md-6">
                            <select class="form-control" id="obyek-of-obyekberseri">
                                <?php foreach ($tojb->Data as $resp) { ?>
                                    <option value="<?php echo $resp->kode ?>"><?php echo $resp->nama ?> | <?php echo $resp->kode ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Obyek Tidak Berseri</label>
                        <div class="col-md-6">
                            <select class="form-control" id="obyek-of-obyektidakberseri">
                                <?php foreach ($tojtb->Data as $resp) { ?>
                                    <option value="<?php echo $resp->kode ?>"><?php echo $resp->nama ?> | <?php echo $resp->kode ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-bars "></i>
                <span class="caption-subject font-dark bold uppercase">Obyek Fidusia</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="frm">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Merk</label>
                        <div class="col-md-6">
                            <select class="form-control" id="obyek-of-merk">
                                <?php foreach ($tom->Data as $resp) { ?>
                                    <option value="<?php echo $resp->nama ?>"><?php echo $resp->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tipe</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="obyek-of-tipe" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >No Rangka</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="obyek-of-norangka" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >No Mesin</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="obyek-of-nomesin" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Warna</label>
                        <div class="col-md-6">
                            <select class="form-control" id="obyek-of-warna">
                                <?php foreach ($tow->Data as $resp) { ?>
                                    <option value="<?php echo $resp->nama ?>"><?php echo $resp->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Bukti</label>
                        <div class="col-md-6">
                            <select class="form-control" id="obyek-of-bukti">
                                <?php foreach ($tob->Data as $resp) { ?>
                                    <option value="<?php echo $resp->nama ?>"><?php echo $resp->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Mata Uang</label>
                        <div class="col-md-6">
                            <select class="form-control" id="obyek-of-matauang">
                                <?php foreach ($tmu->Data as $resp) { ?>
                                    <option value="<?php echo $resp->kode ?>"><?php echo $resp->kode ?> | <?php echo $resp->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Nilai Obyek</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="obyek-of-nilaiobyek" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Keterangan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="obyek-of-keterangan" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-bars "></i>
                <span class="caption-subject font-dark bold uppercase">Info Obyek ++</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="akta-order">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Model (Jenis)</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="obyek-io-model" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tahun Dibuat</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="obyek-io-tahundibuat" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tahun Dirakit</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="obyek-io-tahundirakit" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >No BPKB</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="obyek-io-nobpkb" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >BPKB Atas Nama</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="obyek-io-bpkbatasnama" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >No Polisi</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="obyek-io-nopol" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >No Seri</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="obyek-io-noseri" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Info Tambahan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="obyek-io-infoplus" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >(jika jml obyek > 1)</label>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-bars "></i>
                <span class="caption-subject font-dark bold uppercase">Info Bukti ++</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="akta-order">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Dikeluarkan Oleh</label>
                        <div class="col-md-6">
                            <select class="form-control" id="obyek-ib-dikeluarkanoleh">
                                <?php foreach ($tobd->Data as $resp) { ?>
                                    <option value="<?php echo $resp->nama ?>"><?php echo $resp->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tgl Dikeluarkan</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="obyek-ib-tgldikeluarkan" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Info No Bukti</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="obyek-ib-nobukti" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-1">
            <input type="submit" class="btn btn-primary" value="Simpan" onclick="simpantabobyek();"> 
        </div>
    </div>
</div>
<div class="tab-pane" id="tab_6">
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <span class="badge badge-success">1</span>
                <span class="caption-subject font-dark bold uppercase">Data Umum</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="akta-order">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Jenis Perjanjian</label>
                        <div class="col-md-6">
                            <select class="form-control" id="perjanjian-jenis">
                                    <option value="">Tidak Di Set</option>
                                    <option value="Perjanjian Pembiayaan Dengan Jaminan Fidusia">Perjanjian Pembiayaan Dengan Jaminan Fidusia</option>
                                    <option value="Perjanjian Sewa Guna Usaha">Perjanjian Sewa Guna Usaha</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Jml Item</label>
                        <div class="col-md-6">
                            <select class="form-control" id="perjanjian-jmlitem">
                                    <option value="0">Tidak Di Set</option>
                                    <option value="1">Satuan</option>
                                    <option value="2">Lebih dari 1</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Nilai Hutang</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="perjanjian-nilaihutang" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Berdasarkan</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="5" rel="tooltip" id="perjanjian-berdasarkan" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."></textarea>
                        </div>
                        <a onclick="set();" class="btn green-turquoise" title="Tambah NPWP">
                            <span>Set</span>
                        </a>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tgl Mulai</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="perjanjian-tglmulai" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Tgl Berakhir</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="perjanjian-tglberakhir" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Nilai Penjaminan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="perjanjian-nilaipenjaminan" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Kategori</label>
                        <div class="col-md-6">
                            <select class="form-control" id="perjanjian-kategori">
                                <?php foreach ($kt->Data as $resp) { ?>
                                    <option value="<?php echo $resp->kode ?>"><?php echo $resp->nama ?> | <?php echo $resp->kode ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Pengadilan Negeri</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="perjanjian-pengadilan" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-1">
            <input type="submit" class="btn btn-primary" value="Simpan" onclick="simpantabperjanjian();"> 
        </div>
    </div>
</div>
<div class="tab-pane" id="tab_7">
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <span class="badge badge-success">1</span>
                <span class="caption-subject font-dark bold uppercase">Data Umum</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="akta-order">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >tgl_tahun</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-tgltahun" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >tgl_bulan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-tglbulan" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >tgl_hari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-tglhari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >tgl_terbilangtahun</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-tglterbilangtahun" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >tgl_tglpanjang</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-tglpanjang" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >tgl_terbilanghari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-tglterbilanghari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >tgl_namahari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-tglnamahari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >tgl_namabulan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-tglnamabulan" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >jam_menghadap_terbilang</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-jammenghadapterbilang" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >jam_selesai_terbilang</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-jamselesaiterbilang" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >obyek_nilai_terbilang</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-obyeknilaiterbilang" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >nilai_penjaminan_terbilang</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-nilaipenjaminanterbilang" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >janji_nilai_hutang_terbilang</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-janjinilaihutangterbilang" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >janji_tgl_pk_tahun</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-janjitglpktahun" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >janji_tgl_pk_terbilangtahun</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-janjitglpkterbilangtahun" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >janji_tgl_pk_tglpanjang</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-janjitglpktglpanjang" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >janji_tgl_pk_terbilanghari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-janjitglpkterbilanghari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >janji_tgl_pk_namahari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-janjitglpknamahari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >janji_tgl_pk_namabulan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-janjitglpknamabulan" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >janji_tgl_pk_hari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-janjitglpkhari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >janji_tgl_pk_bulan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-janjitglpkbulan" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >setuju_tgl_lahir_tahun</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-setujutgllahirtahun" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >setuju_tgl_lahir_terbilangtahun</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-setujutgllahirterbilangtahun" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >setuju_tgl_lahir_tglpanjang</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-setujutgllahirtglpanjang" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >setuju_tgl_lahir_terbilanghari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-setujutgllahirterbilanghari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >setuju_tgl_lahir_namahari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-setujutgllahirnamahari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >setuju_tgl_lahir_namabulan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-setujutgllahirnamabulan" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >setuju_tgl_lahir_hari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-setujutgllahirhari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >setuju_tgl_lahir_bulan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-setujutgllahirbulan" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >pemberi_kab_kota_nama</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-pemberikabkotanama" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >penerima_kab_kota_nama</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-penerimakabkotanama" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >setuju_kab_kota_nama</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set1-setujukabkotanama" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-1">
            <input type="submit" class="btn btn-primary" value="Simpan" onclick="simpantabset1();"> 
        </div>
    </div>
</div>
<div class="tab-pane" id="tab_8">
    <div class="portlet light bordered table-list">
        <div class="portlet-title">
            <div class="caption">
                <span class="badge badge-success">1</span>
                <span class="caption-subject font-dark bold uppercase">Data Umum</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="portlet-body">
                <form class="form-horizontal save_data" role="form" id="akta-order">
                    <div class="form-group">
                        <label class="col-md-3 control-label" >pemberi_tgl_lahir_tahun</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-pemberitgllahirtahun" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >pemberi_tgl_lahir_terbilangtahun</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-pemberitgllahirterbilangtahun" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >pemberi_tgl_lahir_tglpanjang</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-pemberitgllahirtglpanjang" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >pemberi_tgl_lahir_terbilanghari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-pemberitgllahirterbilanghari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >pemberi_tgl_lahir_namahari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-pemberitgllahirnamahari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >pemberi_tgl_lahir_namabulan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-pemberitgllahirnamabulan" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >pemberi_tgl_lahir_hari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-pemberitgllahirhari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >pemberi_tgl_lahir_bulan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-pemberitgllahirbulan" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >obyek_tahun</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-obyektahun" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >obyek_bulan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-obyekbulan" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >obyek_hari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-obyekhari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >obyek_terbilangtahun</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-obyekterbilangtahun" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >penerima_tgl_lahir_tahun</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-penerimatgllahirtahun" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >penerima_tgl_lahir_terbilangtahun</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-penerimatgllahirterbilangtahun" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >penerima_tgl_lahir_tglpanjang</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-penerimatglpanjang" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >penerima_tgl_lahir_terbilanghari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-penerimatgllahirterbilanghari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >penerima_tgl_lahir_namahari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-penerimatgllahirnamahari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >penerima_tgl_lahir_namabulan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-penerimatgllahirnamabulan" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >penerima_tgl_lahir_hari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-penerimatgllahirhari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >penerima_tgl_lahir_bulan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-penerimatgllahirbulan" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >obyek_tglpanjang</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-obyektglpanjang" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >obyek_terbilanghari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-obyekterbilanghari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >obyek_namahari</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-obyeknamahari" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >obyek_namabulan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" rel="tooltip" id="set2-obyeknamabulan" rel="tooltip" title="* Wajib diisi. <br>Nama sesuai nama si wajib pajak."> 
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-1">
            <input type="submit" class="btn btn-primary" value="Simpan" onclick="simpantabset2();"> 
        </div>
    </div>
</div>