<!-- ModalDelete -->
<div class="modal fade" id="tambah-modal" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="titleInUp">Tambah Data Proses</h4>
			</div>
			<form  id="tambah-proses" onsubmit="return false;">
			<input type="text" id="tambah-id" class="hide" >
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Layanan</label>
                                	<select class="form-control" id="tambah-layanan">
                                	</select>
							</div>
							<div class="form-group">
								<label>Nama Proses</label>
                                	<input type="text" class="form-control" id="tambah-nama" required="">
							</div>
							<div class="form-group">
								<label>Urutan</label>
                                	<input type="text" class="form-control" id="tambah-urutan" required="">	
							</div>
						</div>
					</div>				
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<!-- /ModalDelete -->