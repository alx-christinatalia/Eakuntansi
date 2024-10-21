
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
	    <div class="page-sidebar navbar-collapse collapse">
	        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	            <li class="nav-item <?php echo ($active == "dashboard") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("dashboard"); ?>" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">e-Akutansi</span>
                        <span class="selected"></span>
                    </a>
                </li> 
                
	            <li class="nav-item <?php echo ($active == "keuangan") ? 'active' : ''; ?>">
	                <a href="#" class="nav-link nav-toggle">
	                    <i class="fa fa-bank"></i>
	                    <span class="title">Keuangan</span>
	                    <span class="fa-chevron-right"></span>
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
	            <li class="nav-item <?php echo ($active == "keuangan") ? 'active' : ''; ?>">
	                <a href="#" class="nav-link nav-toggle">
	                    <i class="fa fa-wrench"></i>
	                    <span class="title">Setting</span>
	                    <span class="fa-chevron-right"></span>
	                </a>
	                <ul class="sub-menu">
	                    <li class="nav-item <?php echo ($active == "keuangan" and $sub == "dashboardkeuangan") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("dashboardkeuangan"); ?>" class="nav-link">
	                            <span class="title">Akun</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "keuangan" and $sub == "kasmasuk") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("kasmasuk/tambah"); ?>" class="nav-link">
	                            <span class="title">Administrator</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "keuangan" and $sub == "kaskeluar") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("kaskeluar/tambah"); ?>" class="nav-link">
	                            <span class="title">Master Data</span>
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