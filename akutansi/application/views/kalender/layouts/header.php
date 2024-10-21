<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?> | eNotaris.com </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url("assets/css/font.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/simple-line-icons/simple-line-icons.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PLUGINS STYLES -->
        <link href="<?php echo base_url("assets/plugins/bootstrap-daterangepicker/daterangepicker.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/bootstrap-toastr/toastr.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/select2/css/select2.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/select2/css/select2-bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END PLUGINS STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url("assets/css/components-rounded.css"); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url("assets/css/plugins.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url("assets/css/layout.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/css/themes/default.css"); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->

        <link href="<?php echo base_url("assets/css/jquery-ui.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/daterange/daterangepicker.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/bootstrap-datepicker/css/bootstrap-datetimepicker.min.css"); ?>" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url("assets/plugins/fullcalendar/fullcalendar.css"); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url("assets/plugins/fullcalendar/bootstrap-fullcalendar.css"); ?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/sweetalert/dist/sweetalert.css'); ?>">
        <link href="<?php echo base_url("assets/plugins/fullcalendar/fullcalendar.print.css"); ?>" rel="stylesheet" type="text/css" media="print">
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/php_logo_guid(oid)/favicon.ico"); ?>">
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-32x32.png"); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-16x16.png"); ?>" sizes="16x16" />
        <script src="<?php echo base_url("assets/js/public.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/ifvisible.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/bootstrap/js/bootstrap.min.js"); ?>" type="text/javascript"></script>
        <!-- Date Picker -->
        <script src="<?php echo base_url("assets/plugins/jquery.form.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/jquery-ui.js"); ?>" type="text/javascript"></script>
        <!-- End Date Picker -->
        <script src="<?php echo base_url("assets/js/metronic.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/dashboard.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/layout.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/demo.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/daterange/daterangepicker.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/fullcalendar/fullcalendar.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/fullcalendar/id.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/plugins/sweetalert/dist/sweetalert.min.js'); ?>"></script>

        <style type="text/css">
            .select2-container {
                width: 100% !important;
                padding: 0;
            }
            #tooltip {
                text-align: center;
                color: #fff;
                background: #111;
                position: absolute;
                z-index: 100;
                padding: 15px;
            }
            #tooltip:after {
                width: 0;
                height: 0;
                border-left: 10px solid transparent;
                border-right: 10px solid transparent;
                border-top: 10px solid #111;
                content: '';
                position: absolute;
                left: 50%;
                bottom: -10px;
                margin-left: -10px;
            }
            #tooltip.top:after {
                border-top-color: transparent;
                border-bottom: 10px solid #111;
                top: -20px;
                bottom: auto;
            }
            #tooltip.left:after {
                left: 10px;
                margin: 0;
            }
            #tooltip.right:after {
                right: 10px;
                left: auto;
                margin: 0;
            }
            .fc-header-today {
                float: left;
                width: 150px
            }
            .fc-header-today .date-box {
                color: #333;
            }
            .fc-header-today .date-box > * {
                cursor: pointer
            }
            .fc-header-today .today-day {
                float: left;
                font-size: 3em;
                font-weight: 700;
                line-height: 100%;
            }
            .fc-header-today .today-month {
                font-size: 1.3em;
                font-weight: 700;
                line-height: 100%;
                padding-top: .2em
            }
            .fc-header-today .today-year {
                font-size: 1em;
                line-height: 100%;
                padding-top: .1em
            }
            .fc-state-default {
                color: #333;
                background-color: #fff;
                border-color: #ccc;
            }
            .fc-state-hover {
                color: #333;
                background-color: #e6e6e6;
                border-color: #adadad;
            }
            .fc-state-active {
                color: #333;
                background-color: #e6e6e6;
                border-color: #adadad;
            }
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <?php $this->load->view("template/header"); ?>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view("template/sidebar", ["active" => "kalender"]); ?>

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">