
<!-- cari klien -->
<div class="modal fade" id="m_NotarisRekanan" tabindex="-1" role="basic"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Cari NotarisRekanan</h4>
            </div>
            <div class="modal-body">  
                <div class="portlet light">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="form-group text-center">
                            <form id="form-search-NotarisRekanan">
                            <div class="input-group input-search">
                                <input type="text" placeholder="Cari" id="s-NotarisRekanan" class="form-control"> 
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" title="Pencarian. Ketik keyword lalu tekan [Enter]"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 pull-right">
                        <a role="button" class="btn btn-primary disabled btnPrev" table="#list-NotarisRekanan" utama="umum/data_NotarisRekanan" data-page="0" onclick="prevPageM(this);" id="btnPrev" title="Tampilkan data sebelumnnya">
                            <i class="fa fa-chevron-left"></i>
                        </a>                                                    
                        <a role="button" class="btn btn-primary disabled btnNext" table="#list-NotarisRekanan" utama="umum/data_NotarisRekanan" data-page="0" onclick="nextPageM(this);" id="btnNext" title="Tampilkan data berikutnya">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                        <a role="button" data-dismiss="modal" class="btn btn-success" data-toggle="modal" href="#tambah-dataNotarisRekanan">
                            <i class="fa fa-plus"></i>
                        </a> 
                    </div>
                    <div class="portlet-body">
                        <table class="table table-hover table-striped table-bordered table-detail">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Wilayah Kerja</th>
                                    <th>Status</th>
                                </tr>
                            <thead>
                            <tbody id="list-NotarisRekanan"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <i>Klik baris untuk memilih notaris rekanan</i>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>