<!-- ModalDelete -->
<div class="modal fade" id="dataakun-edit" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="titleInUp">Edit Data Akun</h4>
			</div>
			<form class="save_data" id="save_data">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="hidden">
								<label>_id</label>
								<input type="hidden" class="form-control" name="_id" id="_id" required>
							</div>
							<div class="form-group">
								<label>Kategori</label>
								<select class="form-control" name="id_kategori" id="kategori-edit" disabled="">
                                    <option value="">Pilih Kategori</option>
                                </select>
							</div>
							<div class="form-group">
								<label>Kode</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <div id="kode-edit">-</div>
                                    </span>
                                    <input type="text" class="form-control" id="kodeinput-edit" disabled> 
                                 </div>
							</div>
							<div class="form-group">
								<label>Nama</label>
                                	<input type="text" class="form-control" id="nama-edit" required>
							</div>
							<div class="form-group">
								<label>Status</label>
								<select class="form-control" name="id_status" id="status-edit" required>
                                    <option value = "1">Aktif</option>
                                    <option value = "0">Tidak Aktif</option>
                                </select>
							</div>
						</div>
					</div>				
				</div>
				<div class="modal-footer">
					<input type="hidden" value="" id="id-edit">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" id="btnTambah" value="Simpan">
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<!-- /ModalDelete -->