<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>Dashboard | eAkutansi</title>
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
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url("assets/plugins/bootstrap-daterangepicker/daterangepicker.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/morris/morris.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url("assets/css/components-rounded.css"); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url("assets/css/plugins.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url("assets/css/layout.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/css/themes/default.css"); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo/favicon.ico"); ?>">
        <link rel="icon" type="image/png" href="<?php echo base_url("asset/img/logo/E.png"); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo base_url("asset/img/logo/E.png"); ?>" sizes="16x16" />
        <style type="text/css">
            #divdata {
              width: 100%;
              height: 250px;
            }#divdata2 {
              width: 100%;
              height: 500px;
            }
        </style>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <?php $this->load->view("template/header"); ?>

        <div class="page-container">
            <?php $this->load->view("template/sidebar", ["active" => "keuangan", "sub" => "dashboardkeuangan"]); ?>

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="page-title">
                                    <h1>Keuangan <a data-date="" id="m_bulan" style="text-decoration: none;"></a></h1>
                                </div>
                            </div>  
                            <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">                                               
                                        <a class="btn btn-primary" onclick="location.reload();" title="Refresh Data (Reload Halaman)">
                                            <i class="fa fa-refresh"></i>
                                        </a>       
                                        <a role="button" class="btn btn-primary" onclick="prevWeek();" data-date="" id="btnPrev" title="Tampilkan data sebelumnnya">
                                            <i class="fa fa-chevron-left"></i>
                                        </a>                                                    
                                        <a role="button" class="btn btn-primary" onclick="nextWeek();" data-date="" id="btnNext" title="Tampilkan data berikutnya">
                                            <i class="fa fa-chevron-right"></i>
                                        </a>            
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD--><div class="base-content">
                        <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                <div class="visual">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span id="count1" class="uang">0</span>
                                    </div>
                                    <div class="desc">Saldo Kas Bank</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                <div class="visual">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span id="count2" class="uang" >0</span>
                                    </div>
                                    <div class="desc">Saldo Piutang</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                                <div class="visual">
                                    <i class="fa fa-desktop"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span id="count3" class="uang">0</span>
                                    </div>
                                    <div class="desc">Saldo Hutang</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                                <div class="visual">
                                    <i class="fa fa-tags"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span id="count4" class="uang">0</span>
                                    </div>
                                    <div class="desc">Laba/Rugi</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-red-sunglo hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Kas/Bank</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <table class="table table-responsive table-striped" style="margin-bottom: 0px;" style="text-align: left;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10%;">No</th>
                                                    <th style="width: 80%;">Akun</th>
                                                    <th style="width: 10%;" style="text-align: right;">Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody id="list-kas"></tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-red-sunglo hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Top 10 Piutang</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <table class="table table-responsive table-striped" style="margin-bottom: 0px;" style="text-align: left;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10%;">No</th>
                                                    <th style="width: 80%;">Akun</th>
                                                    <th style="width: 10%;" style="text-align: right;">Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody id="list-piutang"></tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-red-sunglo hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Top 10 pendapatan</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <table class="table table-responsive table-striped" style="margin-bottom: 0px;" style="text-align: left;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10%;">No</th>
                                                    <th style="width: 80%;">Akun</th>
                                                    <th style="width: 10%;" style="text-align: right;">Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody id="list-pendapatan"></tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                            <!-- END PORTLET-->
                        </div>
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-red-sunglo hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Pendapatan Dan Beban</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                        <div id="divdata">
                                        </div>  
                                    </div>
                                    <div class="row">
                                        <div class=" bg-default bg-font-default " style="height: 75px; text-align: center;">
                                            <a id="link_open" href="" class="col-md-6" style="padding-top: 10px;text-decoration: none;">
                                                <div class="tengah" style="color: black;" >Beban  </div>
                                                <div class="tengah uangz" id="beban" style="padding-top: 10px;font-size: 15px;color: black;" >0  </div>
                                            </a>
                                            <a id="link_close" href="" class="col-md-6" style="padding-top: 10px;text-decoration: none;">
                                                <div class="tengah" style="color: rgb(124, 181, 236); " >Pendapatan  </div>
                                                <div class="tengah uangz" id="pendapatan" style="padding-top: 10px;font-size: 15px;color: rgb(124, 181, 236);" >0  </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-red-sunglo hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Top 10 Hutang</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <table class="table table-responsive table-striped" style="margin-bottom: 0px;" style="text-align: left;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10%;">No</th>
                                                    <th style="width: 80%;">Akun</th>
                                                    <th style="width: 10%;" style="text-align: right;">Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody id="list-hutang"></tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-red-sunglo hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Top 10 Beban</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <table class="table table-responsive table-striped" style="margin-bottom: 0px;" style="text-align: left;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10%;">No</th>
                                                    <th style="width: 80%;">Akun</th>
                                                    <th style="width: 10%;" style="text-align: right;">Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody id="list-beban"></tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                            <!-- END PORTLET-->
                        </div>
                    </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->

        <?php $this->load->view("template/footer"); ?>

        <!--[if lt IE 9]>
        <script src="<?php echo base_url("assets/js/ie-script/respond.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/ie-script/excanvas.min.js"); ?>"></script> 
        <script src="<?php echo base_url("assets/js/ie-script/ie8.fix.min.js"); ?>"></script> 
        <![endif]-->

        <script src="<?php echo base_url("assets/js/public.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/counterup/jquery.waypoints.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/counterup/jquery.counterup.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/amcharts/amcharts/amcharts.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/amcharts/amcharts/themes/light.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/amcharts/amcharts/themes/patterns.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/amcharts/amcharts/themes/chalk.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/amcharts/amcharts/pie.js")?>" type="text/javascript" ></script>
        <script src="<?php echo base_url("assets/plugins/amcharts/amcharts/serial.js")?>" type="text/javascript" ></script>
        <script src="<?php echo base_url("assets/plugins/highchart/highcharts.js")?>" type="text/javascript" ></script>
        <script src="<?php echo base_url("assets/plugins/highchart/exporting.js")?>" type="text/javascript" ></script>
        <script src="<?php echo base_url("assets/plugins/flot/jquery.flot.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/flot/jquery.flot.resize.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/flot/jquery.flot.categories.min.js"); ?>" type="text/javascript"></script> 
        <script src="<?php echo base_url("assets/plugins/jquery.sparkline.min.js"); ?>" type="text/javascript"></script>    

        <script src="<?php echo base_url("assets/js/metronic.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/dashboard.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/layout.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/demo.js"); ?>" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                
                prevWeek()
                refData()
                //stat1()
            })
            function refData()
            {
             stat1().done(function(){
                
                kas().done(function(){
                    piutang().done(function(){
                        pendapatan().done(function(){
                            hutang().done(function(){
                                beban().done(function(){
                                    pendapatanbeban().done(function(){
                                       uang()
                                    })
                                })
                            })
                        })
                    })
                })
             })
            }
            function pendapatanbeban()
            {
                var jml_peng1;
                var start = $("#m_bulan").attr("data-date");
                return $.ajax({
                    type: 'POST',
                    url: base_url + "dashboardkeuangan/stat2",
                    data: { param: {"start": start}},
                    dataType:'json',
                    success: function (data) {
                        jml_peng1 = data;
                        $("#pendapatan").html(jml_peng1[0]['y']);
                        $("#beban").html(jml_peng1[1]['y']);
                        console.log(jml_peng1)
                            $('#site_statistics_loading').hide();
                            $('#site_statistics_content').show();
                             Highcharts.chart('divdata', {
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: null,
                                    plotShadow: false,
                                    type: 'pie'
                                },
                                exporting: {
                                 enabled: false 
                                },
                                credits: {
                                    enabled: false
                                },
                                title: {
                                    text: ''
                                },
                                tooltip: {
                                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: 'pointer',
                                        dataLabels: {
                                            enabled: true,
                                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                            style: {
                                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                            }
                                        }
                                    }
                                },
                                series: [{
                                    name: 'Brands',
                                    colorByPoint: true,
                                    data: jml_peng1
                                }]
                            });
                    }
                });
            }
            function stat1()
            {
             
                var start = $("#m_bulan").attr("data-date")
                return $.ajax({
                    type: 'POST',
                    url: base_url + "dashboardkeuangan/stat1",
                    data: { param: {"start": start}},
                    dataType:'json',
                    success:function(data)
                    {
                        console.log(data)
                        
                        $('#count1').html(data['0']);
                        $('#count2').html(data['1']);
                        $('#count3').html(data['2']);
                        $('#count4').html(data['3']);
                    }
                })
            }

            function kas()
            {
                var start = $("#m_bulan").attr("data-date")
                return  $.ajax({
                    type: 'POST',
                    url: base_url + "dashboardkeuangan/kas",
                    data: { param: {"start": start}},
                    dataType:'json',
                    success:function(data)
                    {
                        console.log(data)
                        $("#list-kas").html(data);
                        
                    }
                })
            }

            function piutang()
            {
                var start = $("#m_bulan").attr("data-date")
                return $.ajax({
                    type: 'POST',
                    url: base_url + "dashboardkeuangan/piutang",
                    data: { param: {"start": start}},
                    dataType:'json',
                    success:function(data)
                    {
                        $("#list-piutang").html(data);
                        
                    }
                })
            }

            function pendapatan()
            {
                var start = $("#m_bulan").attr("data-date")
                return $.ajax({
                    type: 'POST',
                    url: base_url + "dashboardkeuangan/pendapatan",
                    data: { param: {"start": start}},
                    dataType:'json',
                    success:function(data)
                    {
                        $("#list-pendapatan").html(data);
                        
                    }
                })
            }

            function hutang()
            {
                var start = $("#m_bulan").attr("data-date")
                return  $.ajax({
                    type: 'POST',
                    url: base_url + "dashboardkeuangan/hutang",
                    data: { param: {"start": start}},
                    dataType:'json',
                    success:function(data)
                    {
                        console.log(data)
                        $("#list-hutang").html(data);
                        
                    }
                })
            }
            
            function beban()
            {
                var start = $("#m_bulan").attr("data-date")
                return $.ajax({
                    type: 'POST',
                    url: base_url + "dashboardkeuangan/beban",
                    data: { param: {"start": start}},
                    dataType:'json',
                    success:function(data)
                    {
                        $("#list-beban").html(data);
                        
                    }
                })
            }

            function uang()
            {
                $(".uangz").each(function(){
                    $(this).html("Rp. "+returntoM($(this).html()))
                })
            }
            function prevWeek() {
                var selector1 = $("#m_bulan"), selector2 = $("#m_tahun");
                if(selector1.attr("data-date") == "" || selector1.attr("data-date") == undefined) {
                    date1 = moment().startOf("month").format("YYYY-MM-DD");
                    selector1.attr("data-date", date1);
                } else {
                    date  = selector1.attr("data-date");
                    date  = moment(date).subtract(1, "days").format("YYYY-MM-DD");
                    date1 = moment(date).startOf("month").format("YYYY-MM-DD");
                    selector1.attr("data-date", date1);

                    date2 = moment(date).endOf("week").format("YYYY-MM-DD");
                    selector2.attr("data-date", date2);
                    refData()
                    selector2.html(moment(date2).format("DD MMM YYYY"));
                }
                selector1.html(moment(date1).format("MMM YYYY"));   
            }

            function nextWeek() {
                var selector1 = $("#m_bulan"), selector2 = $("#m_tahun");
                if(selector1.attr("data-date") == "" || selector1.attr("data-date") == undefined) {
                    date1 = moment().startOf("month").format("YYYY-MM-DD");
                    selector1.attr("data-date", date1);
                } else {
                    date  = selector1.attr("data-date");
                    date  = moment(date).add(1, "month").format("YYYY-MM-DD");
                    date1 = moment(date).startOf("month").format("YYYY-MM-DD");
                    selector1.attr("data-date", date1);

                    date2 = moment(date).endOf("week").format("YYYY-MM-DD");
                    selector2.attr("data-date", date2);
                    refData()
                    selector2.html(moment(date2).format("DD MMM YYYY"));
                }
                selector1.html(moment(date1).format("MMM YYYY"));   
            }
        </script>
    </body>
</html>