<div class="modal fade" id="m_update" tabindex="-1" role="basic"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Update Akta</h4>
            </div>
            <div class="modal-body">  
                <div class="portlet light">
                    <div class="hidden">
                        <label>_id</label>
                        <input type="hidden" class="form-control" name="_id" id="_id" required>
                    </div>
                    <form id="editakta">
                        <div class="form-group">
                            <label>Tanggal Menghadap </label>
                            <input class="form-control" id="tgl_menghadap" onblur="FormatDateField(this)" onfocus="this.select()"/>
                        </div>
                        <div class="form-group">
                            <label>Jam Menghadap </label>
                            <div class="input-group">
                                <input type="text" class="form-control timepicker timepicker-24" id="jam_menghadap">
                                    <span class="input-group-btn">
                                        <button class="btn default" type="button">
                                            <i class="fa fa-clock-o"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Data Menghadap </label>
                            <input type="text" id="data_menghadap" rel="tooltip"  class="form-control" >
                        </div>
                        <div class="form-group form-md-line-input ">
                            <div class="row">
                                <label class="col-md-2  control-label" >Progress </label>
                                <div class="md-checkbox-list col-md-10">
                                    <div class="md-checkbox ">
                                        <input type="checkbox" id="buat" class="md-check">
                                        <label for="buat">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Akta sudah dibuat </label>
                                    </div>
                                    <div class="md-checkbox ">
                                        <input type="checkbox" id="cetak" class="md-check">
                                        <label for="cetak">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Akta Sudah Dicetak </label>
                                    </div>
                                    <div class="md-checkbox ">
                                        <input type="checkbox" id="realisasi" class="md-check">
                                        <label for="realisasi">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Realisasi </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-5 col-sm-12 col-xs-12">
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                    <input type="submit" class="btn btn-primary" value="Simpan" onclick="_update();">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>