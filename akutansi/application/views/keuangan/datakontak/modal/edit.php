<!-- ModalDelete -->
<div class="modal fade" id="datakontak-edit" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="titleInUp">Edit Data Kontak</h4>
			</div>
			<form class="save_data" id="edit_data">
				<div class="modal-body">
					<div class="row">
							<div class="hidden">
								<label>_id</label>
								<input type="hidden" class="form-control" name="_id" id="_id-edit" required>
							</div>
						<div class="col-md-12">
							<div class="form-group">
								<label>Nama</label>
                                	<input type="text" class="form-control" name="nama" id="nama-edit" required>
							</div>
							<div class="form-group">
								<label>Catatan</label>
                                	<textarea class="form-control" name="catatan" id="catatan-edit"></textarea>
							</div>
							<div class="form-group">
								<label>Status</label>
								<select class="form-control" name="status" id="status-edit" required>
                                    <option value="">Pilih Status</option>
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