<?php
    $data = $data->Data[0];
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Edit File| eNotaris.com</title>
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
        <link href="<?php echo base_url("assets/plugins/bootstrap-toastr/toastr.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/select2/css/select2.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/select2/css/select2-bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url("assets/css/components-rounded.css"); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url("assets/css/plugins.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url("assets/css/layout.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/css/themes/default.css"); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo base_url("assets/css/jquery-ui.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- End Date Picker -->
        <!-- END THEME LAYOUT STYLES -->
        <!-- OpenTip -- >
        <link href="<?php echo base_url("assets/css/opentip.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- EndOpenTip -->

        
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo/favicon.ico"); ?>">
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-32x32.png"); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-16x16.png"); ?>" sizes="16x16" />

        <style type="text/css">
            .select2-container {
                width: 100% !important;
                padding: 0;
            }
            .table-detail tr th {
                width: 250px;
            }
            .nama-profile {
                margin-top: 0px;
                margin-bottom: 15px;
            }
              #tooltip
            {
                text-align: center;
                color: #fff;
                background: #111;
                position: absolute;
                z-index: 100;
                padding: 15px;
            }
             
                #tooltip:after /* triangle decoration */
                {
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
             
                    #tooltip.top:after
                    {
                        border-top-color: transparent;
                        border-bottom: 10px solid #111;
                        top: -20px;
                        bottom: auto;
                    }
             
                    #tooltip.left:after
                    {
                        left: 10px;
                        margin: 0;
                    }
             
                    #tooltip.right:after
                    {
                        right: 10px;
                        left: auto;
                        margin: 0;
                    }
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <?php $this->load->view("template/header"); ?>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view("template/sidebar", ["active" => "efiling"]); ?>

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="row">
                            <div class="col-md-10 col-sm-12 col-xs-12">
                                <div class="page-title">
                                    <h1>Edit File</h1>
                                </div>
                            </div>  
                            <div class="col-md-2 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">                                               
                                        <a class="btn btn-primary" onclick="_simpan();" title="Simpan Data">
                                            <i class="fa fa-save"></i>
                                        </a>             
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="base-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-body">
                                        <form class="save_data" id="save_data" onsubmit="_simpan();return false">
                                            <div class="row">
                                                <div class="col-md-7 col-md-offset-1">
                                                <div id="notifikasi"></div>
                                                    <div class="form-group">
                                                        <label for="inputnama" rel="tooltip" title="* Wajib diisi. <br/>Jenis file yang akan anda upload." class="control-label">Jenis<font color="red">*</font></label>
                                                        <select class="form-control" id="jenis">
                                                            <option value="Order">Order</option>
                                                            <option value="Klien">Klien</option>
                                                            <option value="Akta">Akta</option>
                                                            <option value="Keuangan">Keuangan</option>
                                                            <option value="SSP">SSP</option>
                                                            <option value="SSB">SSB</option>
                                                            <option value="KonfirmasiBayar">Konfirmasi Bayar</option>
                                                            <option value="Lainnya">Lainnya</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class="control-label">Info<font color="red">*</font></label>
                                                        <div class="input-group">
                                                            <input type="text" rel="tooltip" title="* Wajib diisi. <br/>Informasi berdasarkan jenis, dan dipilih dengan melalui tombol disebelah kanan.<br/> Contoh : Order => Info berisi No Ordernya" class="form-control Datainfo" required disabled >
                                                            <input type="hidden" class="ref_sumber" id="" readonly required>
                                                            <input type="hidden" class="ref_id" id="" readonly required>
                                                            <span class="input-group-btn">
                                                                <a data-toggle="modal"  id="btn_m_klien" class="btn green-turquoise btn-info" title="Pilih Klien" onclick="ref_transaksi();" >
                                                                      <i class="fa fa-search"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label rel="tooltip" class="control-label">File<font color="red">*</font></label>
                                                        <div class="input-group">
                                                            <input type="file" name="image_file" title="* Wajib diisi.<br/>Kapasitas maksimum file 4MB. Dalam bentuk jpg, png, gif,doc,xls,pdf,txt, zip, rar<br/>Jika pada waktu edit tidak ada perubahan file, maka file dikosongi saja" class="form-control" id="file_baru">
                                                        </div>
                                                    </div>
                                                    <div class="form-group div-file_lama">
                                                        <label rel="tooltip" class="control-label">File Lama</label>
                                                        <span class="form-control" style="color: green" id="file_lama"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label rel="tooltip" class="control-label">Catatan</label>
                                                            <input type="text" id="catatan" title="* Tidak wajib diisi.<br/>Catatan ringkas tentang files yang diupload" class="form-control" >
                                                    </div>
                                                    <div class="hide">
                                                        <input type="submit" id="sub">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-md-2">
                                                            <a class="btn btn-primary" onclick="_simpan();" title="Simpan Data">
                                                            Simpan
                                                            </a> 
                                                        </div>
                                                        <div class="col-xs-4 col-md-2">
                                                            <a class="btn default" href="<?php echo base_url(); ?>efiling" title="Kembali ke halaman Order"> Batal
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->

        <?php $this->load->view("template/footer"); ?>
        <?php $this->load->view("template/modal/klien") ?>
        <?php $this->load->view("template/modal/order") ?>
        <?php $this->load->view("template/modal/keuangan") ?>
        <?php $this->load->view("template/modal/ssp") ?>
        <?php $this->load->view("template/modal/ssb") ?>
        <?php $this->load->view("template/modal/KonfirmasiBayar") ?>

        <!--[if lt IE 9]>
        <script src="<?php echo base_url("assets/js/ie-script/respond.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/ie-script/excanvas.min.js"); ?>"></script> 
        <script src="<?php echo base_url("assets/js/ie-script/ie8.fix.min.js"); ?>"></script> 
        <![endif]-->

        <script src="<?php echo base_url("assets/js/public.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/metronic.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/jquery-md5/jquery.md5.js"); ?>" type="text/javascript"></script>
        <!-- Date Picker -->
        <script src="<?php echo base_url("assets/plugins/jquery.form.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/jquery-ui.js"); ?>" type="text/javascript"></script>
        <!-- End Date Picker -->
        <script src="<?php echo base_url("assets/js/dashboard.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/layout.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/demo.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/opentip.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/adapter-jquery.js"); ?>" type="text/javascript"></script>
        <script>
            var m_kywd="" , m_utama ="", m_table="";

            $(document).ready(function() {
                JenisDefault();
                setData();
            })

            $("#jenis").change(function(){
                $('.div-file_lama').slideUp("slow")
                $('#file_baru').attr("required","true");

                $("#ref_id").val("");
                $(".Datainfo").val("");
                $("#catatan").val("");
            })

            function setData()
            {
                console.log("<?php echo $data->jenis ?>")
                $('#jenis').val("<?php echo $data->jenis ?>")
                ModalLogic()
                $('.Datainfo').val("<?php echo $data->info ?>")
                $('.ref_sumber').val("<?php echo $data->ref_sumber ?>")
                $('.ref_id').val("<?php echo $data->ref_id ?>")
                $('#catatan').val("<?php echo $data->catatan ?>")
                $('#file_lama').html("<?php echo $data->nama ?>")
            }

            function _simpan()
            {
                if($(".Datainfo").val() != "")
                {
                 $("#sub").trigger('click');
                }else
                {
                  $(".btn-info").trigger('click')
                }
            }

            $(".save_data").submit(function(){

                param = {'jenis'        : $('#jenis option:selected').val(),
                         'ref_sumber'   : $('.ref_sumber').val(),
                         'info'         : $('.Datainfo').val(),
                         'ref_id'       : $('.ref_id').val(),
                         'catatan'      : $('#catatan').val()}
                //alert('here');
                 $(this).ajaxSubmit({
                    type:'post',
                    url:"<?php echo base_url('efiling/update/'.$data->_id) ?>",
                    data:{param:param},
                    dataType:'json',
                    success:function (resp)
                    {
                        location.href = "<?php echo base_url('efiling') ?>";
                    }
                })

                return false;
                
            })



            function JenisDefault()
            {

                a = $(".btn-info");
                b = $(".ref_sumber");
                c = $(".ref_id");
                e = $(".Datainfo");

                    Kosongkan(), 
                    b.val("order"), 
                    a.attr("onclick", "ref_order()"), 
                    e.attr('id', 'nama_order'), 
                    c.attr('id', 'id_order'), 
                    a.attr('href' , '#m_order') ;
            }

            $("#jenis").change(function(){
               ModalLogic()
            })

            function ModalLogic()
            {
                 valJenis = $("#jenis option:selected").val();

                a = $(".btn-info");
                b = $(".ref_sumber");
                c = $(".ref_id");
                e = $(".Datainfo");
                switch(valJenis)
                {
                    case "Klien":
                    Kosongkan(), 
                    b.val("klien"),
                    a.attr("onclick", "ref_klien()"),
                    e.attr('id', 'nama_klien'), 
                    c.attr('id', 'id_klien'), 
                    a.attr('href' , '#m_klien') ;
                    break;

                    case "Order":
                    Kosongkan(), 
                    b.val("order"), 
                    a.attr("onclick", "ref_order()"), 
                    e.attr('id', 'nama_order'), 
                    c.attr('id', 'id_order'), 
                    a.attr('href' , '#m_order') ;
                    break;

                    case "Keuangan":
                    Kosongkan(), 
                    a.attr("onclick", "ref_transaksi()"), 
                    a.attr('href' , '#m_transaksi') ;
                    b.val("keuangan"), 
                    c.attr('id', 'nama_transaksi'), 
                    e.addClass('nama_transaksi') ;
                    break;

                    case "Akta":
                    Kosongkan(), 
                    a.attr("onclick", "ref_order()"), 
                    a.attr('href' , '#m_order') ;
                    b.val("Akta"), 
                    c.attr('id', 'id_order'), 
                    e.attr('id', 'nama_order') ;
                    break;

                    case "SSP":
                    Kosongkan(), 
                    a.attr("onclick", "ref_ssp()"), 
                    a.attr('href' , '#m_ssp') ;
                    b.val("SSP"), 
                    c.attr('id', 'id_ssp'), 
                    e.attr('id', 'nama_ssp') ;
                    break;

                    case "SSB":
                    Kosongkan(), 
                    a.attr("onclick", "ref_ssb()"), 
                    a.attr('href' , '#m_ssb') ;
                    b.val("SSB"), 
                    c.attr('id', 'id_ssb'), 
                    e.attr('id', 'nama_ssb') ;
                    break;

                    case "KonfirmasiBayar":
                    Kosongkan(), 
                    a.attr("onclick", "ref_KonfirmasiBayar()"), 
                    a.attr('href' , '#m_KonfirmasiBayar') ;
                    b.val("KonfirmasiBayar"), 
                    c.attr('id', 'id_KonfirmasiBayar'), 
                    e.attr('id', 'nama_KonfirmasiBayar') ;
                    break;

                    case "Lainnya":
                    Kosongkan(), 
                    b.val("Lainnya"), 
                    a.attr("onclick", "ref_order()"), 
                    e.attr('id', 'nama_order'), 
                    c.attr('id', 'id_order'), 
                    a.attr('href' , '#m_order') ;
                    break;


                    default:
                    Kosongkan(), b.val("order"), a.attr("onclick", "ref_order()"), b.attr('id', 'nama_order'), c.attr('id', 'id_order') , a.attr('href' , '#m_order');
                }
            }

            function Kosongkan()
            {
                $(".ref_sumber").val('');
                $(".ref_id").val('');
            }
        </script>
         
    </body>
</html>