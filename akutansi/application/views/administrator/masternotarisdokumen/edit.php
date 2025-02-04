<!DOCTYPE html>
<?php
    $data = $data->Data[0];

?>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Master Dokumen | eNotaris.com</title>
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
            <?php $this->load->view("template/sidebar", ["active" => "administrator" , "sub" => "masternotarisdokumen"]); ?>
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
                                    <h1>Master Dokumen Edit</h1>
                                </div>
                            </div>  
                            <div class="col-md-2 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">                                               
                                        <a class="btn btn-primary _simpan" onclick="_simpan();" title="Simpan Data">
                                            <i class="fa fa-save"></i>
                                        </a>  
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <div class="base-content">
                        <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-body">
                                    <form class="form-horizontal save_data" id="save_data">
                                    <input type="hidden" id="nama">
                                    <input type="hidden" id="_id" value="<?php echo $data->_id ?>">
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-2 control-label">Layanan<font color="red"> *</font></label>
                                            <div class="col-md-3">
                                                <select class="form-control s2" id="layanan">
                                                </select>
                                            </div>
                                        </div>
                                        <div id="f-akun-lawan master">
                                            <div class="form-group" id="control_0" style="height:10px">
                                                <label class="col-md-2 control-label">Dokumen <font color="red"> *</font></label>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control dokumen-val" required>
                                                        </div>
                                                        <div class="btn-plus col-md-2">
                                                            <a  class="btn green" onclick="TambahForm();" >
                                                                <i class="fa fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-offset-2 col-md-10">
                                                <div class="row">
                                                    <div class="hide">
                                                        <input type="submit" id="sub" class="btn btn-primary">
                                                    </div>
                                                    <input type="hidden" class="simpanmetod">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="portlet-footer">
                                    <div class="row">
                                        <div class="col-md-offset-2">
                                            <div class="col-xs-4 col-md-2">
                                                <a class="btn btn-primary _simpan"  onclick="_simpan();" title="Simpan Data">
                                                Simpan
                                                </a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>


        <!-- BEGIN FOOTER -->
        <?php $this->load->view("template/footer"); ?>

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
            var PernahSimpanFile = "belum";

            $(document).ready(function(){
                refSelect2();
                getLayanan();
                getDataNama();
                LoadDokumen();
            })

            function LoadDokumen()
            {
                data = "<?php echo $data->dokumen ?>";
                var items = data.split(' ~ ');
                totalLeght = items.length;
                for(i=0; i< totalLeght ; i++ )
                {

                    if(($("#control_"+i).length !== 0) == true)
                    {
                        //console.log("No Tambah "+items[i]);
                        console.log("Total length"+i+"currentLength "+totalLeght)
                        $("#control_"+i).find('.dokumen-val').val(items[i]);    
                    }else{
                        console.log("Total length"+i+"currentLength "+totalLeght)
                        //console.log("Tambah "+items[i]);
                        TambahForm();
                        $("#control_"+i).find('.dokumen-val').val(items[i]);    

                    }
                        

                }
                    
                


            }

            function getDataNama()
            {
                $.ajax({
                    url:"<?php echo base_url('masternotarisdokumen/getDataNama') ?>",
                    dataType:'json',
                    success:function(resp)
                    {
                        $("#nama").val(resp["nama"]);
                    }
                })
            }

            function getLayanan()
            {
                $.ajax({
                    url:"<?php echo base_url('masternotarisdokumen/getLayanan') ?>",
                    dataType:'json',
                    success:function(resp)
                    {
                        $("#layanan").html(resp);
                        $("#layanan").val("<?php echo $data->layanan ?>").change();
                    }
                })
            }
            function refSelect2()
            {
                $('.s2').select2();
            }

            function _simpan()
            {
                    $("#sub").trigger('click');
                    $("#simpanmetod").val("0");    
                
            }

            function simpanplus()
            {
                    $("#sub").trigger('click');
                    $("#simpanmetod").val("1");
            }

            $(".save_data").submit(function(){

                $(this).prop("disabled", true);
                $("._simpan").addClass("disabled");
                $("._simpan").html("Sedang Diproses !");
                $("#simpanplus").hide();
                
                panjDokumen = parseInt($(".controls").length);
                dokumenVal =""
                for(i=0;i<=panjDokumen;i++)
                {
                    dokumenVal += $("#control_"+i).find('.dokumen-val').val()+(i == panjDokumen ? '' : " ~ ");
                }

                param = {'layanan'  : $("#layanan option:selected").val(),
                         'dokumen'  : dokumenVal,
                         'nama'     : $("#nama").val()}
                id = $("#_id").val();
                  $.ajax({
                    url: '<?php echo base_url('masternotarisdokumen/updateDokumen') ?>/'+id,
                    type: 'POST',
                    data: {param:param},
                    dataType: 'json',
                    success: function(resp) 
                    {
                        ($("#simpanmetod").val() == "1" ? location.reload() : location.href = "<?php echo base_url('masternotarisdokumen') ?>");   
                        
                    }
                });     
                

                return false;
            })





            function TambahForm()
            {

                t = $(".controls").length;

                console.log(t);
                b = $("#control_"+t);
                c = parseInt(t)+1;
                 a = "" ;

                    a += ' <div class="form-group controls" id="control_'+c+'" style="height:10px">'
                    a += '     <label class="col-md-2 control-label"> <font color="red"> </font></label>'
                    a += '     <div class="col-md-10">'
                    a += '         <div class="form-group">'
                    a += '             <div class="col-md-4">'
                    a += '                 <input type="text" class="form-control dokumen-val" required>'
                    a += '             </div>'
                    a += '             <div class="btn-plus col-md-2">'
                    a += '                 <a  class="btn green" onclick="TambahForm();" >'
                    a += '                     <i class="fa fa-plus"></i>'
                    a += '                 </a>'
                    a += '                 <a  class="btn green" onclick="KurangiForm();" >'
                    a += '                     <i class="fa fa-minus"></i>'
                    a += '                 </a>'
                    a += '             </div>'
                    a += '         </div>'
                    a += '     </div>'
                    a += ' </div>'

                $( a ).insertAfter(b);
                hide_plus();
                $("#control_"+c).find('.dokumen-val').focus();


            }

            function hide_plus()
            {

                t = parseInt($(".controls").length);

                $(".btn-plus").hide();
                $("#control_"+t).find('.btn-plus').show();
            }

            function KurangiForm()
            {

                t = parseInt($(".controls").length);

                $("#control_"+t).remove();
                $("#control_"+(parseInt(t)-1)).find('.btn-plus').show();
            }


        </script>

    </body>

</html>