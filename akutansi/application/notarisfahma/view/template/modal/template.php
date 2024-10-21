<!-- ModalDelete -->
<div class="modal fade" id="template" role="basic" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="delete-title">Deskripsi Template</h4>
			</div>
			<div class="modal-body">
                <div class="portlet light">
                	<div class="row">
	                    <div class="col-md-12">
							<textarea class="form-control" rows="8" id="teks"></textarea>
						</div>
						<input type="hidden" id="idt">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<a role="button" onclick="updatetem();" data-dismiss="modal" class="btn btn-primary">Update</a>
				<a role="button" onclick="pakaitem();" data-dismiss="modal" class="btn btn-primary" id="aket">Ambil</a>
				<a role="button" onclick="pakaitem1();" data-dismiss="modal" class="btn btn-primary hide" id="akuasa">Ambil</a>
				<a role="button" onclick="pakaitem2();" data-dismiss="modal" class="btn btn-primary hide" id="asetuju">Ambil</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>
<!-- /ModalDelete -->
