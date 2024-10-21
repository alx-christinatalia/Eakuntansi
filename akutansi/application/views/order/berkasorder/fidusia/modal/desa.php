<!-- cari klien -->
<div class="modal fade" id="desa" tabindex="-1" role="basic"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Cari Desa</h4>
            </div>
            <div class="modal-body">  
                <div class="portlet light">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="form-group text-center">
                            <form id="frmdesa">
                            <div class="input-group input-search">
                                <input type="text" placeholder="Cari Desa/Kecamatan" id="s_desa" class="form-control" autofocus> 
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" title="Pencarian. Ketik keyword lalu tekan [Enter]"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 pull-right">
                        <a role="button" class="btn btn-primary disabled btnPrev" table="#list-desa" utama="berkasorder/fidusia_perorangan/datadesa" data-page="0" onclick="prevPage(this);" id="btnPrev" title="Tampilkan data sebelumnnya">
                            <i class="fa fa-chevron-left"></i>
                        </a>                                                    
                        <a role="button" class="btn btn-primary disabled btnNext" table="#list-desa" utama="berkasorder/fidusia_perorangan/datadesa" data-page="0" onclick="nextPage(this);" id="btnNext" title="Tampilkan data berikutnya">
                            <i class="fa fa-chevron-right"></i>
                        </a> 
                    </div>
                    <div class="portlet-body">
                        <table class="table table-hover table-striped table-bordered table-detail">
                            <thead>
                                <tr>
                                    <th>Desa</th>
                                    <th>Kecamatan</th>
                                    <th>Kab/Kota</th>
                                </tr>
                            <thead>
                            <tbody id="list-desa"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <i>Klik baris untuk memilih Desa</i>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="desa1" tabindex="-1" role="basic"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Cari Desa</h4>
            </div>
            <div class="modal-body">  
                <div class="portlet light">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="form-group text-center">
                            <form id="frmdesa1">
                            <div class="input-group input-search">
                                <input type="text" placeholder="Cari Desa/Kecamatan" id="s_desa1" class="form-control" autofocus> 
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" title="Pencarian. Ketik keyword lalu tekan [Enter]"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 pull-right">
                        <a role="button" class="btn btn-primary disabled btnPrev" table="#list-desa1" utama="berkasorder/fidusia_perorangan/datadesa1" data-page="0" onclick="prevPage(this);" id="btnPrev" title="Tampilkan data sebelumnnya">
                            <i class="fa fa-chevron-left"></i>
                        </a>                                                    
                        <a role="button" class="btn btn-primary disabled btnNext" table="#list-desa1" utama="berkasorder/fidusia_perorangan/datadesa1" data-page="0" onclick="nextPage(this);" id="btnNext" title="Tampilkan data berikutnya">
                            <i class="fa fa-chevron-right"></i>
                        </a> 
                    </div>
                    <div class="portlet-body">
                        <table class="table table-hover table-striped table-bordered table-detail">
                            <thead>
                                <tr>
                                    <th>Desa</th>
                                    <th>Kecamatan</th>
                                    <th>Kab/Kota</th>
                                </tr>
                            <thead>
                            <tbody id="list-desa1"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <i>Klik baris untuk memilih Desa</i>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="desa2" tabindex="-1" role="basic"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Cari Desa</h4>
            </div>
            <div class="modal-body">  
                <div class="portlet light">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="form-group text-center">
                            <form id="frmdesa2">
                            <div class="input-group input-search">
                                <input type="text" placeholder="Cari Desa/Kecamatan" id="s_desa2" class="form-control" autofocus> 
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" title="Pencarian. Ketik keyword lalu tekan [Enter]"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 pull-right">
                        <a role="button" class="btn btn-primary disabled btnPrev" table="#list-desa2" utama="berkasorder/fidusia_perorangan/datadesa2" data-page="0" onclick="prevPage(this);" id="btnPrev" title="Tampilkan data sebelumnnya">
                            <i class="fa fa-chevron-left"></i>
                        </a>                                                    
                        <a role="button" class="btn btn-primary disabled btnNext" table="#list-desa2" utama="berkasorder/fidusia_perorangan/datadesa2" data-page="0" onclick="nextPage(this);" id="btnNext" title="Tampilkan data berikutnya">
                            <i class="fa fa-chevron-right"></i>
                        </a> 
                    </div>
                    <div class="portlet-body">
                        <table class="table table-hover table-striped table-bordered table-detail">
                            <thead>
                                <tr>
                                    <th>Desa</th>
                                    <th>Kecamatan</th>
                                    <th>Kab/Kota</th>
                                </tr>
                            <thead>
                            <tbody id="list-desa2"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <i>Klik baris untuk memilih Desa</i>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>