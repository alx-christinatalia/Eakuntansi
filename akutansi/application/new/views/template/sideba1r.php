
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
	    <div class="page-sidebar navbar-collapse collapse">
	        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	            <li class="nav-item <?php echo ($active == "dashboard") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("dashboard"); ?>" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                    </a>
                </li> 
                <li class="nav-item <?php echo ($active == "klien") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("klien"); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-users"></i>
                        <span class="title">Klien</span>
                        <span class="selected"></span>
                    </a>
                </li> 
                <li class="nav-item <?php echo ($active == "order") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("order"); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-cubes"></i>
                        <span class="title">Order</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item <?php echo ($active == "akta") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("akta"); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-file"></i>
                        <span class="title">Akta</span>
                        <span class="selected"></span>
                    </a>
                </li>  
                <li class="nav-item <?php echo ($active == "billing") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("billing"); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-money"></i>
                        <span class="title">Billing</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item <?php echo ($active == "efiling") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("efiling"); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-database"></i>
                        <span class="title">e-Filing</span>
                        <span class="selected"></span>
                    </a>
                </li> 
                <li class="nav-item <?php echo ($active == "monitoringBPN") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("monitoringBPN"); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-area-chart"></i>
                        <span class="title">Monitoring BPN</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item <?php echo ($active == "laporan") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("laporan"); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-print"></i>
                        <span class="title">Laporan</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item <?php echo ($active == "kalender") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("kalender"); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-calendar"></i>
                        <span class="title">Kalender</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item <?php echo ($active == "agendasurat") ? 'active' : ''; ?>">
	                <a href="#" class="nav-link nav-toggle">
	                    <i class="fa fa-envelope"></i>
	                    <span class="title">Agenda Surat</span>
	                    <span class="arrow"></span>
	                </a>
	                <ul class="sub-menu">
	                    <li class="nav-item <?php echo ($active == "agendasurat" and $sub == "suratmasuk") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("suratmasuk"); ?>" class="nav-link">
	                            <span class="title">Surat Masuk</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "agendasurat" and $sub == "suratkeluar") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("suratkeluar"); ?>" class="nav-link">
	                            <span class="title">Surat Keluar</span>
	                        </a>
	                    </li>
	                </ul>
	            </li> 
	            <li class="nav-item <?php echo ($active == "keuangan") ? 'active' : ''; ?>">
	                <a href="#" class="nav-link nav-toggle">
	                    <i class="fa fa-bank"></i>
	                    <span class="title">Keuangan</span>
	                    <span class="arrow"></span>
	                </a>
	                <ul class="sub-menu">
	                    <li class="nav-item <?php echo ($active == "keuangan" and $sub == "dashboardkeuangan") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("dashboardkeuangan"); ?>" class="nav-link">
	                            <span class="title">Dashboard Keuangan</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "keuangan" and $sub == "kasmasuk") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("kasmasuk/tambah"); ?>" class="nav-link">
	                            <span class="title">Kas/Bank Masuk</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "keuangan" and $sub == "kaskeluar") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("kaskeluar/tambah"); ?>" class="nav-link">
	                            <span class="title">Kas/Bank Keluar</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "keuangan" and $sub == "jurnalumum") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("jurnalumum/tambah"); ?>" class="nav-link">
	                            <span class="title">Jurnal Umum</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "keuangan" and $sub == "jurnalpenyesuaian") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("jurnalpenyesuaian/tambah"); ?>" class="nav-link">
	                            <span class="title">Jurnal Penyesuaian</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "keuangan" and $sub == "saldoawal") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("saldoawal/tambah"); ?>" class="nav-link">
	                            <span class="title">Saldo Awal</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "keuangan" and $sub == "datatransaksi") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("datatransaksi"); ?>" class="nav-link">
	                            <span class="title">Data Transaksi</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "keuangan" and $sub == "postingjurnal") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("postingjurnal"); ?>" class="nav-link">
	                            <span class="title">Posting Jurnal</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "keuangan" and $sub == "datakontak") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("datakontak"); ?>" class="nav-link">
	                            <span class="title">Data Kontak</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "keuangan" and $sub == "dataakun") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("dataakun"); ?>" class="nav-link">
	                            <span class="title">Data Akun</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "keuangan" and $sub == "laporan") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("laporan"); ?>" class="nav-link">
	                            <span class="title">Laporan</span>
	                        </a>
	                    </li>
	                </ul>
	            </li>
	            <li class="nav-item <?php echo ($active == "pajak") ? 'active' : ''; ?>">
	                <a href="#" class="nav-link nav-toggle">
	                    <i class="fa fa-gavel"></i>
	                    <span class="title">Pajak</span>
	                    <span class="arrow"></span>
	                </a>
	                <ul class="sub-menu">
	                    <li class="nav-item <?php echo ($active == "pajak" and $sub == "SSP") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("ssp"); ?>" class="nav-link">
	                            <span class="title">SSP</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "pajak" and $sub == "SSB") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("ssb"); ?>" class="nav-link">
	                            <span class="title">SSB</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "pajak" and $sub == "kodemapssp") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("kodemapssp"); ?>" class="nav-link">
	                            <span class="title">Kode Map SSP</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "pajak" and $sub == "jenisbphtb") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("jenisbphtb"); ?>" class="nav-link">
	                            <span class="title">Jenis BPHTB</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "pajak" and $sub == "penguranganbphtb") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("penguranganbphtb"); ?>" class="nav-link">
	                            <span class="title">Pengurangan BPHTB</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "pajak" and $sub == "npwp") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("npwp"); ?>" class="nav-link">
	                            <span class="title">NPWP</span>
	                        </a>
	                    </li>

	                </ul>
	            </li>
	            <li class="nav-item <?php echo ($active == "administrator") ? 'active' : ''; ?>">
	                <a href="#" class="nav-link nav-toggle">
	                    <i class="fa fa-user"></i>
	                    <span class="title">Administrator</span>
	                    <span class="arrow"></span>
	                </a>
	                <ul class="sub-menu">
	                    <li class="nav-item <?php echo ($active == "administrator" and $sub == "profil") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("profil"); ?>" class="nav-link">
	                            <span class="title">Profil Notaris/PPAT</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "administrator" and $sub == "layanan") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("layanan"); ?>" class="nav-link">
	                            <span class="title">Layanan</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "administrator" and $sub == "user") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("user"); ?>" class="nav-link">
	                            <span class="title">User</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "administrator" and $sub == "saksi") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("saksi"); ?>" class="nav-link">
	                            <span class="title">Saksi</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "administrator" and $sub == "officer") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("officer"); ?>" class="nav-link">
	                            <span class="title">Officer</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "administrator" and $sub == "notarisrekanan") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("notarisrekanan"); ?>" class="nav-link">
	                            <span class="title">Notaris Rekanan</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "administrator" and $sub == "masternotarisdokumen") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("masternotarisdokumen"); ?>" class="nav-link">
	                            <span class="title">Master Notaris Dokumen</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "administrator" and $sub == "masternotarisproses") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("masternotarisproses"); ?>" class="nav-link">
	                            <span class="title">Master Notaris Proses</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "administrator" and $sub == "templateakta") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("templateakta"); ?>" class="nav-link">
	                            <span class="title">Template Akta</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "administrator" and $sub == "userlog") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("userlog"); ?>" class="nav-link">
	                            <span class="title">User Log</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "administrator" and $sub == "utility") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("utility"); ?>" class="nav-link">
	                            <span class="title">Utility</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "administrator" and $sub == "updatenorepertorium") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("updatenorepertorium"); ?>" class="nav-link">
	                            <span class="title">Update No Repertorium</span>
	                        </a>
	                    </li>
	                </ul>
	            </li> 
	            <li class="nav-item <?php echo ($active == "enotaris") ? 'active' : ''; ?>">
	                <a href="#" class="nav-link nav-toggle">
	                    <i class="icon-layers"></i>
	                    <span class="title">eNotaris.com</span>
	                    <span class="arrow"></span>
	                </a>
	                <ul class="sub-menu">
	                    <li class="nav-item <?php echo ($active == "enotaris" and $sub == "billingenotaris") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("billingenotaris"); ?>" class="nav-link">
	                            <span class="title">Billing eNotaris</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "enotaris" and $sub == "tiketsupport") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("tiketsupport"); ?>" class="nav-link">
	                            <span class="title">Tiket Support</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "enotaris" and $sub == "panduan") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("panduan"); ?>" class="nav-link">
	                            <span class="title">Panduan</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "enotaris" and $sub == "kirimblog") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("kirimblog"); ?>" class="nav-link">
	                            <span class="title">Kirim Blog</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "enotaris" and $sub == "kirimevent") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("kirimevent"); ?>" class="nav-link">
	                            <span class="title">Kirim Event</span>
	                        </a>
	                    </li>
	                </ul>
	            </li>     

	        </ul>
	        <!-- END SIDEBAR MENU -->
	    </div>
	    <!-- END SIDEBAR -->
	</div>
	<!-- END SIDEBAR -->