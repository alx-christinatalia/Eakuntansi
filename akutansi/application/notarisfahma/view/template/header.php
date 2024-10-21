<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url("assets/img/logo/logo-bukopin-white.png") ?>" alt="logo" class="logo-default" />
            </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="#" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
         <div class="page-company top-menu">
            <div>
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown dropdown-extended dropdown-dark">
                        <a href="#" class="dropdown-toggle submit" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <h2 class="hidden-xs hidden-sm company-name notaris"  ></h2>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="page-top">
            <form class="search-form hidden" action="#" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="Search..." name="query">
                    <span class="input-group-btn">
                        <a href="#" class="btn submit">
                            <i class="icon-magnifier"></i>
                        </a>
                    </span>
                </div>
            </form>
            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide"></li>
                    <li class="dropdown dropdown-extended dropdown-dark" id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="fa fa-plus-square" style="font-size: 31px;color: #737a99;"></i>
                        </a>
                        <ul class="dropdown-menu">
                             <li>
                                <ul class="dropdown-menu-list scroller" style="height: 400px;" data-handle-color="#637283">
                                    <li>
                                        <a href="<?php echo base_url() ?>order/tambah">
                                            <span class="details">
                                                <span class="label label-sm">
                                                    
                                                </span> Order. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>klien/tambah">
                                            <span class="details">
                                                <span class="label label-sm">
                                                    
                                                </span> Klien. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="details">
                                                <span class="label label-sm">
                                                    
                                                </span> e-Filing. </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-extended dropdown-user dropdown-notification dropdown-dark" id="header_notification_bar">
                        <a href="<?php echo site_url('reminder'); ?>" class="dropdown-toggle">
                            <i class="icon-bell"></i>
                            <span class="badge badge-success count-badge notifIconBadge" id="jumlah_remind"></span>
                        </a>
                    </li>
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="#" class="dropdown-toggle dropdown-action" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="username username-hide-on-mobile" id="notaris-span"></span>
                            <?php 
                                $profile = $this->session->userdata("user");
                                $photo = base_url("assets/img/default_user.png"); 
                            ?>
                            <img alt="User Photo" class="img-circle" src="<?php echo $photo; ?>" style="width: 32px;height: 32px;"/> 
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="<?php echo base_url("user/profile"); ?>">
                                    <i class="icon-user"></i> My Profile 
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("index.php/user/logout"); ?>">
                                    <i class="icon-key"></i> Log Out 
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->

<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->