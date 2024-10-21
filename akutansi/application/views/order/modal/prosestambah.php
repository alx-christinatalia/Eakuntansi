<!-- TambahProses -->
<div class="modal fade" id="proses-tambah" role="basic" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah Proses</h4>
			</div>
			<div class="modal-body">
				<form id="f-tambah-proses">
                    <div class="form-group">
                        <label>Nama Proses</label><font color="red">*</font>
                        <input type="text" id="nama" rel="tooltip"  class="form-control" title="* Wajib . <br> Isi dengan nama proses" >
                    </div>
					<input type="hidden" id="id-order">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<a role="button" onclick="tambahproses();" data-dismiss="modal" class="btn btn-primary">Simpan</a>
			</div>
		</div>
	</div>
</div>
<!-- /TambahProses -->

<!-- ModalDelete -->
<div class="modal fade" id="delete-proses" role="basic" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Hapus Proses</h4>
			</div>
			<div class="modal-body">
				<h4>Apakah anda yakin ingin menghapus data <span class="text-danger" id="delete-name"></span> ? </h4>
				<div class="hidden" id="delete-id"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
				<a role="button" onclick="delete_now();" data-dismiss="modal" class="btn btn-danger" id="btnDelete">Ya</a>
			</div>
		</div>
	</div>
</div>
<!-- /ModalDelete -->