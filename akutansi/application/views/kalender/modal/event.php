   <!-- Add Event Modal -->
    <div class="modal fade" id="addEvent" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Cari Kota</h4>
                </div>
                <form method="post" id="formAdd" class="form-horizontal">
                    <div class="modal-body">
                        <input type="hidden" id="id">
                        <div class="form-group">
                            <label for="judul" class="col-md-2 control-label">Judul</label>
                            <div class="col-md-10">
                                <input type="text" name="judul" id="judul" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 pull-right">
                                <div class="md-checkbox">
                                    <input type="checkbox" id="allday" class="md-check" checked>
                                    <label for="allday">
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        Sepanjang Hari
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="time">
                            <label class="col-md-2 control-label">Jam</label>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <input type="text" class="form-control time" name="start_time" id="start_time" value="<?php echo date('h:i A'); ?>">
                                            <span class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" readonly value="S/D" style="border: none; text-align: center">
                                    </div>
                                    <div class="col-md-5 time">
                                        <div class="input-group">
                                            <input type="text" class="form-control time" name="end_time" id="end_time">
                                            <span class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal" class="col-md-2 control-label">Tanggal</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="tanggal" id="tanggal">
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="uraian" class="col-md-2 control-label">Uraian</label>
                            <div class="col-md-10">
                                <textarea name="uraian" class="form-control" id="uraian" style="width: 100%;" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="peserta" class="col-md-2 control-label">Peserta</label>
                            <div class="col-md-10">
                                <select name="peserta" id="peserta" class="form-control" multiple="multiple">
                                    <?php foreach ($users->Data as $user) : ?>
                                        <option value="<?php echo $user->nama; ?>" <?php echo ($this->session->userdata("user")->nama == $user->nama) ? 'selected' : ''; ?>><?php echo $user->nama; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pengingat" class="col-md-2 control-label">Pengingat</label>
                            <div class="col-md-3 pull-left">
                                <div class="md-checkbox">
                                    <input type="checkbox" id="pengingat" class="md-check" checked>
                                    <label for="pengingat">
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        Tidak Perlu
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="reminder">
                            <label for="" class="col-md-2 control-label"> </label>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="num_rem" value="1">
                                </div>
                                <div class="col-md-3">
                                    <select name="remind" id="day_rem" class="form-control">
                                        <option value="hari">Hari</option>
                                        <option value="jam">Jam</option>
                                        <option value="menit">Menit</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="control-label">Sebelumnya</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="progres" class="col-md-2 control-label">Progres</label>
                            <div class="col-md-10">
                                <select name="progres" id="progres" class="form-control">
                                    <option value="#337ab7">Baru</option>
                                    <option value="#f0ad4e">Dikerjakan</option>
                                    <option value="#5cb85c">Selesai</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.Add Event Modal -->

    <!-- Edit Event Modal -->
    <div class="modal fade" id="editEvent" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="titleInUp">Edit Kegiatan</h4>
                </div>
                <form action="#" id="formEdit" class="form-horizontal">
                    <div class="modal-body">
                        <input type="hidden" id="edit_id">
                        <div class="form-group">
                            <label for="edit_judul" class="col-md-2 control-label">Judul</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_judul" id="edit_judul" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 pull-right">
                                <div class="md-checkbox">
                                    <input type="checkbox" id="edit_allday" class="md-check">
                                    <label for="edit_allday">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        Sepanjang Hari
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="edit_time">
                            <label class="col-md-2 control-label">Jam</label>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <input type="text" class="form-control time" id="edit_start_time">
                                            <span class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" readonly value="S/D" style="border: none; text-align: center">
                                    </div>
                                    <div class="col-md-5 time">
                                        <div class="input-group">
                                            <input type="text" class="form-control time" id="edit_end_time">
                                            <span class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit_tanggal" class="col-md-2 control-label">Tanggal</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="edit_tanggal">
                                     <span class="input-group-addon" >
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit_uraian" class="col-md-2 control-label">Uraian</label>
                            <div class="col-md-10">
                                <textarea name="edit_uraian" class="form-control" id="edit_uraian" style="width: 100%;" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit_peserta" class="col-md-2 control-label">Peserta</label>
                            <div class="col-md-10">
                                <select name="edit_peserta" id="edit_peserta" class="form-control" multiple="multiple">
                                    <?php foreach ($users->Data as $user) : ?>
                                        <option value="<?php echo $user->nama; ?>"><?php echo $user->nama; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit_pengingat" class="col-md-2 control-label">Pengingat</label>
                            <div class="col-md-4 pull-left">
                                <div class="md-checkbox">
                                    <input type="checkbox" id="edit_pengingat" class="md-check">
                                    <label for="edit_pengingat">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        Tidak Perlu
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="edit_reminder">
                            <label for="" class="col-md-2 control-label"> </label>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="edit_num_rem">
                                </div>
                                <div class="col-md-3">
                                    <select name="edit_day_rem" id="edit_day_rem" class="form-control">
                                        <option value="hari">Hari</option>
                                        <option value="jam">Jam</option>
                                        <option value="menit">Menit</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="control-label">Sebelumnya</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit_progres" class="col-md-2 control-label">Progres</label>
                            <div class="col-md-10">
                                <select name="edit_progres" id="edit_progres" class="form-control">
                                    <option value="#337ab7">Baru</option>
                                    <option value="#f0ad4e">Dikerjakan</option>
                                    <option value="#5cb85c">Selesai</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.Edit Event Modal -->