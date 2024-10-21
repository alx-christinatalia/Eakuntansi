<!-- ModalDelete -->
<div class="modal fade" id="insup" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="titleInUp">Tambah Kegiatan</h4>
			</div>
			<form class="f-insup" onsubmit="return false;">
			<input type="text" id="_id" class="hide">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Judul</label>
                                	<input type="text" class="form-control" id="judul" required>
							</div>
							<div class="form-group form-md-checkboxes">
                                <div class="md-checkbox-inline">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="allday" class="md-check">
                                        <label for="allday">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Sepanjang Hari </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Daftar</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="tgl">
                                     <span class="input-group-addon" >
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group form-jam">
                                <label>Jam</label>
                                <div class="row" >
                                    <div class="col-md-5">
                                        <input type="text" class="form-control jam" id="jam_mulai" >
                                    </div>
                                    <div class="col-md-1">
                                        S/D
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control jam" id="jam_akhir">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
								<label>Uraian</label>
                                	<input type="text" class="form-control" id="uraian" required>
							</div>
							<div class="form-group ">
								<label>Pengingat</label>
                                <div class="md-checkbox-inline">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="reminder" class="md-check">
                                        <label for="reminder">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Tidak perlu </label>
                                    </div>
                                </div>
                            </div>
							<div class="form-group">
								<label>Status</label>
								<select class="form-control" name="id_status" id="status" required>
                                    <option value = "0">Baru</option>
                                    <option value = "1">Dikerjakan</option>
                                    <option value = "2">Selesai</option>
                                </select>
							</div>
						</div>
					</div>				
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" id="_simp" value="Simpan" >
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<!-- /ModalDelete -->