
<!-- cari klien -->
<div class="modal fade" id="m_saksi" tabindex="-1" role="basic"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Cari Nama Saksi</h4>
            </div>
            <div class="modal-body">  
                <div class="portlet light">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="form-group text-center">
                            <form id="form-search-saksi">
                            <div class="input-group input-saksi">
                                <input type="text" placeholder="Cari" id="s-saksi" class="form-control" autofocus> 
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" title="Pencarian. Ketik keyword lalu tekan [Enter]"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 pull-right">
                        <a role="button" class="btn btn-primary disabled btnPrev" table="#list-saksi" utama="order/data_saksi" data-page="0" onclick="prevPageM(this);" id="btnPrev" title="Tampilkan data sebelumnnya">
                            <i class="fa fa-chevron-left"></i>
                        </a>                                                    
                        <a role="button" class="btn btn-primary disabled btnNext" table="#list-saksi" utama="order/data_saksi" data-page="0" onclick="nextPageM(this);" id="btnNext" title="Tampilkan data berikutnya">
                            <i class="fa fa-chevron-right"></i>
                        </a> 
                    </div>
                    <div class="portlet-body">
                        <table class="table table-hover table-striped table-bordered table-detail">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                </tr>
                            <thead>
                            <tbody id="list-saksi"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <i>Klik baris untuk memilih klien</i>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ModalDelete -->
<div class="modal fade" id="delMSaksi" role="basic" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Para Saksi</h4>
            </div>
            <div class="modal-body">
                <h4>Apakah anda yakin ingin menghapus Saksi <span class="text-danger" id="Delete-name"></span> ? </h4>
            </div>
            <div class="hidden" id="delete-id">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                <a role="button" onclick="goDel();" data-dismiss="modal" class="btn btn-danger" id="btnDelete">Ya</a>
            </div>
        </div>
    </div>
</div>
<!-- /ModalDelete -->