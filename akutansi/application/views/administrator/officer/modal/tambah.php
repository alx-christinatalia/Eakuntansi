<!-- ModalDelete -->
<div class="modal fade" id="tambah" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="titleInUp">Tambah Data Officer</h4>
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
								<label>Keterangan</label>
                                	<textarea class="form-control" id="ket" required=""></textarea>
							</div>
							<div class="form-group">
								<label>Catatan</label>
                                	<textarea class="form-control" id="catatan" required=""></textarea>
							</div>
							<div class="form-group">
								<label>Aktif</label>
                                    <div class="md-checkbox-list">
                                        <div class="md-checkbox">
                                    	    <input type="checkbox" id="checkbox9" class="md-check">
                                        	    <label for="checkbox9">
                                                    <span></span>
                                            	    <span class="check"></span>
                                                    <span class="box"></span> Ya </label>
                                        </div>
                                    </div>
							</div>
						</div>
					</div>				
				</div>
				<div class="modal-footer">
					<input type="hidden"  value="<?php echo date("Y-m-d"); ?>" id="date">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" id="btnTambah" value="Simpan">
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<!-- /ModalDelete -->