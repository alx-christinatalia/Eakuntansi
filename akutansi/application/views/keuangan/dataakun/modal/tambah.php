<!-- ModalDelete -->
<div class="modal fade" id="tambah-dataakun" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="titleInUp">Tambah Data Akun</h4>
			</div>
			<form class="save_data" id="save_data">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Kategori</label>
								<select class="form-control" name="id_kategori" id="kategori" required>
                                    <option value="">Pilih Kategori</option>
                                    	<?php foreach($kategori->Data as $data) {
                                			echo "<option value='$data->kategori'>$data->kategori - $data->nama</option>";
                                        } ?>
                                </select>
							</div>
							<div class="form-group">
								<label>Kode</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <div id="kode">-</div>
                                    </span>
                                    <input type="text" class="form-control" id="kodeinput" required> 
                                 </div>
							</div>
							<div class="form-group">
								<label>Nama</label>
                                	<input type="text" class="form-control" id="nama" required>
							</div>
							<div class="form-group">
								<label>Status</label>
								<select class="form-control" name="id_status" id="status" required>
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