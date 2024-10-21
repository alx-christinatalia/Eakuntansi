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
                 <li class="nav-item <?php echo ($active == "kasmasuk") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("kasmasuk/tambah"); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-bank"></i>
                        <span class="title">Kas/Bank Masuk</span>
                        <span class="selected"></span>
                    </a>
                </li> 
                 <li class="nav-item <?php echo ($active == "kaskeluar") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("kaskeluar/tambah"); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-credit-card"></i>
                        <span class="title">Kas/Bank Keluar</span>
                        <span class="selected"></span>
                    </a>
                </li> 
                 <li class="nav-item <?php echo ($active == "saldoawal") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("saldoawal/tambah"); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-inbox"></i>
                        <span class="title">Saldo Awal</span>
                        <span class="selected"></span>
                    </a>
                </li> 
                 <li class="nav-item <?php echo ($active == "datatransaksi") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("datatransaksi"); ?>" class="nav-link nav-toggle">
                        <i class="icon-basket-loaded"></i>
                        <span class="title">Data Transaksi</span>
                        <span class="selected"></span>
                    </a>
                </li> 
                 <li class="nav-item <?php echo ($active == "laporan") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("laporankeuangan"); ?>" class="nav-link nav-toggle">
                        <i class="icon-layers"></i>
                        <span class="title">Laporan</span>
                        <span class="selected"></span>
                    </a>
                </li> 
                <li class="nav-item <?php echo ($active == "postingjurnal") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("postingjurnal"); ?>" class="nav-link nav-toggle">
                        <i class="icon-note"></i>
                        <span class="title">Posting Jurnal</span>
                        <span class="selected"></span>
                    </a>
                </li> 
                <li class="nav-item <?php echo ($active == "jurnalumum") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("jurnalumum/tambah"); ?>" class="nav-link nav-toggle">
                        <i class="icon-notebook"></i>
                        <span class="title">Jurnal Umum</span>
                        <span class="selected"></span>
                    </a>
                </li> 
                <li class="nav-item <?php echo ($active == "jurnalpenyesuaian") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("jurnalpenyesuaian/tambah"); ?>" class="nav-link nav-toggle">
                        <i class="icon-docs"></i>
                        <span class="title">Jurnal Penyesuaian</span>
                        <span class="selected"></span>
                    </a>
                </li> 
                <li class="nav-item <?php echo ($active == "masterdata") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url("masterdata"); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-database"></i>
                        <span class="title">Master Data</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
	                    <li class="nav-item <?php echo ($active == "masterdata" and $sub == "dataakun") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("dataakun"); ?>" class="nav-link">
	                            <span class="title">Akun</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "masterdata" and $sub == "kasmasuk") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("datakontak"); ?>" class="nav-link">
	                            <span class="title">Kontak</span>
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
	                    <li class="nav-item <?php echo ($active == "administrator" and $sub == "user") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("notarisuser"); ?>" class="nav-link">
	                            <span class="title">Managemen User</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "administrator" and $sub == "profil") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("profil"); ?>" class="nav-link">
	                            <span class="title">Profil Notaris</span>
	                        </a>
	                    </li>
	                    <li class="nav-item <?php echo ($active == "administrator" and $sub == "userlog") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("User-log"); ?>" class="nav-link">
	                            <span class="title">Aktivasi User</span>
	                        </a>
	                    </li>
	                </ul>
	            </li>
               <!--  
	            <li class="nav-item <?php echo ($active == "keuangan") ? 'active' : ''; ?>">
	                <a href="#" class="nav-link nav-toggle">
	                    <i class="fa fa-wrench"></i>
	                    <span class="title">Setting</span>
	                    <span class="arrow"></span>
	                </a>
	                <ul class="sub-menu">
	                    <li class="nav-item <?php echo ($active == "keuangan" and $sub == "dashboardkeuangan") ? 'active' : ''; ?>">
	                        <a href="<?php echo base_url("profil"); ?>" class="nav-link">
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
	            </li> -->
                
                
                <!--
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
	            </li>-->  
	        </ul>
	        <!-- END SIDEBAR MENU -->
	    </div>
	    <!-- END SIDEBAR -->
	</div>
	<!-- END SIDEBAR