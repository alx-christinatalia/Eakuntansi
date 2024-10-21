<div class="hidden" id="section-paging">
	<div class="row">
		<div class="col-md-6">
			<ul class="pagination pagination-nav">
				<li>
					<a class="btn-nav" role="button" onclick="prevPage(this);" data-page="1" id="btnFirstBwh" title="Tampilkan data halaman pertama">
						<i class="fa fa-step-backward" aria-hidden="true"></i>
					</a>
				</li>
				<li><a class="btn-nav" role="button" onclick="prevPage(this);" data-page="0" id="btnPrevBwh" title="Tampilkan data sebelumnnya"><i class="fa fa-chevron-left"></i></a></li>
				<li>
					<a style="padding: 1px;">
						<form id="jumpPage">
							<input type="text" id="pageNum" class="pageNum" title="<?php echo $this->lang->line("title_page"); ?>">
						</form>
					</a>
				</li>
				<li><a class="btn-nav" role="button" onclick="nextPage(this);" data-page="2" id="btnNextBwh" title="Tampilkan data berikutnya"><i class="fa fa-chevron-right"></i></a></li>
				<li>
					<a class="btn-nav" role="button" onclick="nextPage(this);" data-page="1" id="btnLastBwh" title="Tampilkan data halaman terakhir">
						<i class="fa fa-step-forward" aria-hidden="true"></i>
					</a>
				</li>							
			</ul>
		</div>
		<div class="col-md-6 hidden-xs hidden-sm action-list">
			<div class="col-md-10 text-right" style="margin-top: 7px;padding-right: 0px;">
				<span id="infoPage"></span>
			</div>
			<div class="col-md-2">
				<span>
					<select class="form-control" id="limit">
						<option value="5">5</option>
						<option value="10" selected>10</option>
						<option value="20">20</option>
						<option value="50">50</option>
						<option value="100">100</option>
					</select>
				</span>
			</div>
		</div>
	</div>
</div>
