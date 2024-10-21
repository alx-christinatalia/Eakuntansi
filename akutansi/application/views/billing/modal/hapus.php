<!-- ModalDelete -->
<div class="modal fade" id="delete-modal" role="basic" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="j-hapus">Hapus Billing</h4>
			</div>
			<div class="modal-body">
				<h4 id="ket-hapus">Yakin hapus data ? <span id="ket-hapus2"></span> </h4>
			</div>
			<div class="hidden" id="delete-id">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
				<a role="button" onclick="delete_now();" data-dismiss="modal" class="btn btn-danger">Ya</a>
			</div>
		</div>
	</div>
</div>
<!-- /ModalDelete -->