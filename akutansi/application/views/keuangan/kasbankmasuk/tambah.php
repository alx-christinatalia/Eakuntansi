<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Tambah Data | eAkutansi</title>
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
        <link rel="icon" type="image/png" href="<?php echo base_url("asset/img/logo/E.png"); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo base_url("asset/img/logo/E.png"); ?>" sizes="16x16" />

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
            <?php $this->load->view("template/sidebar", ["active" => "kasmasuk"]); ?>

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
                                    <h1>Kas/Bank Masuk</h1>
                                </div>
                            </div>  
                            <div class="col-md-2 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">                                               
                                        <a class="btn btn-primary" onclick="simpan();sub()" title="Simpan Data">
                                            <i class="fa fa-save"></i>
                                        </a>                  
                                        <a class="btn btn-primary" onclick="simpanplus();sub();" title="Simpan Data">
                                            <i class="fa fa-save"> +</i>
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
                                    <form class="form-horizontal save_data" id="save_data" onsubmit="return false">
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-2 control-label">Kontak</label>
                                            <div class="col-md-3">
                                                    <select class="form-control kontak" rel="tooltip" id="kontak">
                                                        <option value="kontak">Kontak</option>
                                                        <option value="klien">Klien</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-3 i-kontak">
                                                <div class="input-group">
                                                    <input type="text" rel="tooltip" class="form-control" id="nama_kontak" readonly>
                                                    <input type="hidden" class="form-control" id="id_kontak" readonly>
                                                    <span class="input-group-btn">
                                                        <a class="btn green-turquoise" data-toggle="modal" id="btn-kontak" href="#m_kontak" onclick="ref_kontak();">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 i-klien">
                                                <div class="input-group">
                                                    <input type="text" rel="tooltip" class="form-control" id="nama_klien" readonly>
                                                    <input type="hidden" class="form-control" id="id_klien" readonly>
                                                    <span class="input-group-btn">
                                                        <a class="btn green-turquoise" data-toggle="modal" id="btn-klien" href="#m_klien" onclick="ref_klien();">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Tanggal</label>
                                            <div class="col-md-4">
                                                <div class="input-group input-medium date date-picker" >
                                                    <input type="text" class="form-control" rel="tooltip" id="tgl" onblur="FormatDateField(this)" onfocus="this.select()" required>
                                                    <span class="input-group-btn">
                                                        <button class="btn default" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label  class="col-md-2 control-label">Uraian</label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" rel="tooltip" onfocus="expand(this);" onblur="expandblur(this);" style="height: 34px;" id="uraian" rows="3" required></textarea> </div>
                                        </div>
                                        <div class="form-group" id="control_0">
                                            <label for="inputnama" class="col-md-2 control-label">Akun Kas/Bank (D)</label>
                                            <div class="col-md-3">
                                                    <select class="form-control unik s2" id="akun-kas" rel="tooltip">
                                                    </select>
                                            </div>
                                            <div class="col-md-3">
                                                    <input type="text" rel="tooltip" class="form-control debit" onfocus='toN(this);' onblur='toM(this);' disabled>
                                            </div>
                                        </div>
                                        <div id="f-akun-lawan master">
                                            <div class="form-group controls" id="control_1" style="height:10px">
                                                <label class="col-md-2 control-label">Akun Lawan (K)</label>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <select class="form-control akun-lawan unik s2" >
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                                <input type="text" rel="tooltip" class="form-control kredit" onkeyup="totalD();" onfocus='toN(this);onlyNumber(this);' onblur='toM(this); totalD();' value="0" required>
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
                                            <label class="col-md-2 control-label">Referensi</label>
                                            <div class="col-md-3">
                                                    <select class="form-control" rel="tooltip" id="refsumber">
                                                        <option value="order">Order</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <input type="text" rel="tooltip" class="form-control" id="nama_order">
                                                    <input type="hidden" class="form-control" id="id_order">
                                                    <span class="input-group-btn">
                                                        <a class="btn green-turquoise" data-toggle="modal" href="#m_order" onclick="ref_order();">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label  class="col-md-2 control-label">File</label>
                                            <div class="col-md-4">
                                                <input type="file" rel="tooltip" id="image_file" name="image_file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-offset-2">
                                                <div class="col-xs-4 col-md-2">
                                                    <input type="submit" onclick="simpan();" value="Simpan" class="btn btn-primary"> 
                                                </div>
                                                <div class="col-xs-4 col-md-2">
                                                    <input type="submit" onclick="simpanplus();" value="Simpan + " class="btn btn-primary"> 
                                                </div>
                                                <div class="col-xs-4 col-md-2">
                                                    <input type="submit" value="Simpan + " class="hidden clickme"> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-offset-2 col-md-10">
                                                <div class="row">
                                                    
                                                    <input type="hidden" class="nomor" value="<?php echo $ssb; ?>">
                                                    <input type="hidden" class="simpanmetod" id="simpanmetod">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="portlet-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
    <?php $this->load->view('template/modal/order') ?>
    <?php $this->load->view('template/modal/klien') ?>
    <?php $this->load->view('template/modal/kontak') ?>
    <?php $this->load->view('keuangan/kasbankmasuk/modal/tambahkontak') ?>


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
            var selesai=0
            function sub(){
                $(".clickme").trigger('click');
            }
            $(document).ready(function(){
                changekontak();
                isi_akun_kas();
                isi_akun_lawan();
                $('#tgl').val("<?php echo date("d-M-y") ?>");
                refSelect2();
            })



            function expand(selector)
            {
                    $(selector).addClass("expanding");
                    $(selector).animate({
                        height: "70px"
                    }, 100);
            }

            function expandblur(selector)
            {
                $(selector).animate({
                        height: "34px"
                    }, 100); 
                    $(selector).removeClass("expanding");   
            }

            function refSelect2()
            {
                $('.s2').select2();
            }

            function _simpan()
            {
                $("#simpanmetod").val("0");    
            }

            function simpanplus()
            {
                $("#simpanmetod").val("1");
            }

            $(".save_data").submit(function(){
                b4 = b4simpan();
                if( b4 == "sukses")
                {
                    $(this).prop("disabled", true);
                    $("#_simpan").addClass("disabled");
                    $("#_simpan").html("Sedang Diproses !");
                    $("#simpanplus").hide();
                    no_id = $(".nomor").val();
                    param = {'jenis'        : "Keuangan",
                             'info'         : "No "+no_id,
                             'ref_sumber'   : "keuangan",
                             'ref_id'       : no_id,
                             'catatan'      : $('#uraian').val(),
                             'diupload'      : hariini()}

                      $(this).ajaxSubmit({
                        url: '<?php echo base_url('efiling/kasmasuk') ?>',
                        type: 'POST',
                        data: {param:param},
                        dataType: 'json',
                        success: function(resp) {
                            if(resp['kondisi'] == 'sukses')
                            {
                                simpan(resp);
                            }
                            
                        }
                    });     
                }else{
                    $("#simpanmetod").val("0");    
                }
                
                return false;
            })

            function b4simpan()
            {
                a = "sukses"
                t = parseInt($(".controls").length);
                dkontak = $("#nama_klien").val(); //data klien
                dklien = $("#nama_kontak").val(); //data kontak
                if(dkontak == "" && dklien == ""){
                    current = $("#kontak option:selected").val();
                    $("#btn-"+current).trigger('click');
                    console.log(current)
                    a = "gagal"
                }else{
                    a = "sukses"
                }

                for(i=0; i<=t; i++)
                {
                    for(e=i+1; e<=t; e++)
                    {
                        if(a != "gagal")
                        {
                            if($("#control_"+i).find(".unik").val() == $("#control_"+e).find(".unik").val())
                            {
                                notifShow("error","Akun baris "+e+" Sama")
                                $("#control_"+e).find(".unik").select2('open');
                                a = "gagal"
                            }else
                            {
                                a = "sukses"
                            }    
                        }
                    }
                }

                if(a != "gagal")
                {
                    for(i=1; i<=t; i++)
                    {
                        c = $("#control_"+i).find(".kredit").val();
                        if(c == "" || c == 0)
                        {
                            $("#control_"+i).find(".kredit").focus().select();
                            notifShow("error","Akun baris "+i+" belum diisi")
                            a = "gagal";
                        }else
                        {
                            a = "sukses";
                        }
                    }

                }
                return a;
            }

            function TambahForm()
            {

                t = $(".controls").length;

                console.log(t);
                b = $("#control_"+t);
                c = parseInt(t)+1;
                 a = "" ;

                 a +=  '<div class="form-group controls" style="height:10px" id="control_'+c+'" >';
                 a +=  '    <label class="col-md-2 control-label"></label>';
                 a +=  '    <div class="col-md-10">';
                 a +=  '        <div class="form-group">';
                 a +=  '            <div class="col-md-4">';
                 a +=  '                <select class="form-control akun-lawan unik s2" >';
                 a +=  '                </select>';
                 a +=  '            </div>';
                 a +=  '            <div class="col-md-4">';
                 a +=  '                    <input type="text" class="form-control kredit" onkeyup="totalD();" onfocus="toN(this);" onblur="toM(this);" value="0">';
                 a +=  '            </div>';
                 a +=  '            <div class="btn-plus col-md-2">';
                 a +=  '                <a  class="btn green" onclick="TambahForm();" >';
                 a +=  '                    <i class="fa fa-plus"></i>';
                 a +=  '                </a>';
                 a +=  '                <a  class="btn default" onclick="KurangiForm()" >';
                 a +=  '                    <i class="fa fa-minus"></i>';
                 a +=  '                </a> ';
                 a +=  '            </div>';
                 a +=  '        </div>';
                 a +=  '    </div>';
                 a +=  '</div>';

                 $( a ).insertAfter(b);
                 hide_plus();
                 isi_akun_lawan();
                 refSelect2();

            }

            function hide_plus()
            {

                t = $(".controls").length;

                $(".btn-plus").hide();
                $("#control_"+t).find('.btn-plus').show();

                


            }

            function KurangiForm()
            {

                t = $(".controls").length;

                $("#control_"+t).remove();
                $("#control_"+(parseInt(t)-1)).find('.btn-plus').show();
                totalD();
            }

            function isi_akun_kas()
            {
                $.ajax({
                    type:'post',
                    url:'<?php echo base_url('kasmasuk/isi_akun_kas') ?>',
                    dataType:'json',
                    success : function (result){
                        $('#akun-kas').html(result);
                    }
                })
            }



            function isi_akun_lawan()
            {
                t = $(".controls").length;
                $.ajax({
                    type:'post',
                    url:'<?php echo base_url('kasmasuk/isi_akun_lawan') ?>',
                    dataType:'json',
                    success : function (result){
                        $('#control_'+t).find(".akun-lawan").html(result);
                    }
                })
            }

            function changekontak()
            {
                    a = $("#kontak option:selected").val();
                    if(a == "kontak")
                    {
                        $(".i-klien").hide();
                        $(".i-kontak").show();
                    }else
                    {

                        $(".i-kontak").hide();
                        $(".i-klien").show();
                    }
            }

            $("#kontak").change(function(){
                changekontak();
                $("#nama_klien").val("");
                $("#id_klien").val("");
                $("#nama_kontak").val("");
                $("#id_klien").val("");
            })


            //Hitung
            function totalD()
            {
                var a =0;
                $(".kredit").each(function(){
                    m = $(this).val();
                    a += parseInt(returntoN(m));
                    console.log(a);
                  //  a += returntoN();
                }) 

                    $(".debit").val(returntoM(a));

            }
            function refPage()
            {
                $.ajax({
                    url:"<?php echo base_url('kasmasuk/updateNomor') ?>",
                    type:"post",
                    dataType:"json",
                    success:function(resp)
                    {
                       ($("#simpanmetod").val() == "1" ? location.reload() : location.href = "<?php echo base_url('datatransaksi') ?>");      
                    }
                })
            }

        </script>

           <script>
            //Simpan
            

            function simpan(nama_file)
            {
                
                a = $(".controls").length;
                console.log(a);
                param = {};
                for(i = 0; i <= a ; i++)
                {
                    
                    console.log("ulang "+i);
                    isklien = $("#kontak option:selected").val()
                    isklien = (isklien == "kontak" ? "0" : "1");

                    //calculated :D
                        //From REpeater
                         console.log("isklien "+isklien)
                            nama = "";
                            kontak = "";
                            if(isklien == "1")
                            {
                                kontak = $("#id_klien").val();
                                nama = $("#nama_klien").val();

                            }else{

                                kontak = $("#id_kontak").val()
                                nama = $("#nama_kontak").val();
                            }

                             jenis = (i == 0 ? "D" : "K" )
                             uang = (i == 0 ? $("#control_"+(parseInt(i))).find('.debit').val() : $("#control_"+(parseInt(i))).find('.kredit').val());
                             kode = (i == 0 ? $("#control_"+(parseInt(i))).find('#akun-kas option:selected').val() : $("#control_"+(parseInt(i))).find('.akun-lawan option:selected').val());

                            //INputan
                        param[i] = {'isklien'  : isklien,
                                 'nama'     : nama,
                                 'kontak'   : kontak,
                                 'tgl'      : formatDate($('#tgl').val()),
                                 'uraian'   : $('#uraian').val(),
                                 'debit'    : (jenis == "D" ? returntoN(uang) : 0 ),
                                 'kredit'   : (jenis == "K" ? returntoN(uang) : 0 ),
                                 'refsumber' : $('#refsumber option:selected').val(),
                                 'noref'    : $('#id_order').val(),
                                 'refinfo'  : $('#nama_order').val(),
                                 'jenis'    : 'KM',
                                 'akun'     : kode,
                                 'nomor'    : $(".nomor").val(),
                                 'urutan'   : i,
                                 'file'     : (nama_file['nama_acak']==null? " ": nama_file['nama_acak'])
                                 }  
                }

                $.ajax({
                    type:'post',
                    url : "<?php echo base_url('kasmasuk/simpan') ?>",
                    data : {param : param},
                    dataType : 'json',
                    success : function (result)
                    {
                        refPage();
                    }
                })
                console.log(param);
            }




            function tambahKontak()
            {
                param = {"nama"     : $("#nama-kontak").val(),
                         "catatan"  : $("#catatan-kontak").val(),
                         "aktif"    : $("#status-kontak option:selected").val()}

                $.ajax({
                    type:'post',
                    url:"<?php echo base_url('datakontak/simpan') ?>",
                    data : {param:param},
                    dataType : 'json',
                    success : function (resp)
                    {
                        console.log(resp)
                        $("#tambah-datakontak").modal('toggle');
                    }
                })
            }

        </script>
    </body>

</html>
