<!-- ModalDelete -->
<div class="modal fade" id="tambah-datakontak" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="titleInUp">Tambah Data Kontak</h4>
			</div>
			<form class="save_data" id="save_data">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Nama</label>
                                	<input type="text" class="form-control" id="nama" required>
							</div>
							<div class="form-group">
								<label>Catatan</label>
                                	<textarea class="form-control" id="catatan"></textarea> 
							</div>
							<div class="form-group">
								<label>Status</label>
								<select class="form-control" name="id_status" id="status" required>
                                    <option value = "">Pilih Status</option>
                                    <option value = "1">Aktif</option>
                                    <option value = "0">Tidak Aktif</option>
                                </select>
							</div>
						</div>
					</div>				
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" id="btnTambah" value="Simpan">
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<!-- /ModalDelete -->