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