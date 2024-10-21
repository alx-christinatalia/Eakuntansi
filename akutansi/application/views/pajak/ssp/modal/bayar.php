                                    <div class="modal fade" id="bayar" tabindex="-1" role="basic" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Bayar Pajak SSP</h4>
                                                </div>
                                                <div class="modal-body"> 
                                    <form class="form-horizontal" role="form" class="save_data" id="edit_data">
                                        <div class="form-body">
                                        <div class="hidden">
                                            <label>_id</label>
                                            <input type="hidden" class="form-control" name="_id" id="_id-edit" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputcatatan" class="col-md-2 control-label">Jumlah</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="jumlahbayar" name="jumlahbayar"> </div>
                                        </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-2">Tgl Bayar</label>
                                                <div class="col-md-4">
                                                <div class="input-group">
                                                    <input type="text" id="tglbayar" name="tglbayar" rel="tooltip" title="* Masukkan tanggal bayar" class="form-control" required>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                </div>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                            <label for="inputcatatan" class="col-md-2 control-label">NTPN</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="kdntpn" id="kdntpn"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputcatatan" class="col-md-2 control-label">Catatan</label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" rows="3" name="cat" id="cat"></textarea> </div>
                                        </div>
                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden"  value="<?php echo date("Y-m-d"); ?>" id="tgl_update">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                    <input type="submit" class="btn btn-primary" id="btnTambah" value="Simpan">
                                                    
                                                </div>
                                        </form>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>