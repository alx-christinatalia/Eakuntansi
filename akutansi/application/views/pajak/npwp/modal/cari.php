
<!-- cari klien -->
<div class="modal fade" id="cari" tabindex="-1" role="basic"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Cari Kecamatan</h4>
            </div>
            <div class="modal-body">  
                <div class="portlet light">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="form-group text-center">
                            <form id="frmkota">
                            <div class="input-group input-search">
                                <input type="text" placeholder="Cari" id="s_kabkota" class="form-control" autofocus> 
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" title="Pencarian. Ketik keyword lalu tekan [Enter]"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 pull-right">
                        <a role="button" class="btn btn-primary disabled btnPrev" table="#list-kabkota" utama="npwp/datakota" data-page="0" onclick="prevPage(this);" id="btnPrev" title="Tampilkan data sebelumnnya">
                            <i class="fa fa-chevron-left"></i>
                        </a>                                                    
                        <a role="button" class="btn btn-primary disabled btnNext" table="#list-kabkota" utama="npwp/datakota" data-page="0" onclick="nextPage(this);" id="btnNext" title="Tampilkan data berikutnya">
                            <i class="fa fa-chevron-right"></i>
                        </a> 
                    </div>
                    <div class="portlet-body">
                        <table class="table table-hover table-striped table-bordered table-detail">
                            <thead>
                                <tr>
                                    <th>Kecamatan</th>
                                    <th>Kab/Kota</th>
                                    <th>Provinsi</th>
                                </tr>
                            <thead>
                            <tbody id="list-kabkota"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <i>Klik baris untuk memilih Kecamatan</i>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>