<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Jurnal Penyesuaian Edit | eNotaris.com</title>
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
            <?php $this->load->view("template/sidebar", ["active" => "keuangan", "sub" => "jurnalpenyesuaian"]); ?>

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
                                    <h1>Edit Jurnal Penyesuaian</h1>
                                </div>
                            </div>  
                            <div class="col-md-2 col-sm-12 col-xs-12 text-right">
                                <div class="title-action form-inline">
                                    <div class="form-group text-center form-action">                                               
                                        <a class="btn btn-primary btn-simpan" id="_simpan" onclick="_simpan();" title="Simpan Data">
                                            <i class="fa fa-save"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!-- END PAGE TITLE -->
                    </div><div class="base-content">
                        <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-body">
                                    <form class="form-horizontal save_data" onsubmit="return false;" id="save_data">
                                        <input type="hidden" id="urutanDefault" >
                                        <input type="hidden" id="tgl_input" >
                                        <input type="hidden" id="file" >
                                        <div class="form-group">
                                            <label for="inputnama" class="col-md-2 control-label">Kontak<font color="red"> *</font></label>
                                            <div class="col-md-3">
                                                    <select class="form-control kontak" id="kontak">
                                                        <option value="kontak">Kontak</option>
                                                        <option value="klien">Klien</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-3 i-kontak">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="nama_kontak" readonly>
                                                    <input type="hidden" class="form-control" id="id_kontak" readonly>
                                                    <span class="input-group-btn">
                                                        <a class="btn green-turquoise" id="btn-kontak" data-toggle="modal" href="#m_kontak" onclick="ref_kontak();">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 i-klien">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="nama_klien" readonly>
                                                    <input type="hidden" class="form-control" id="id_klien" readonly>
                                                    <span class="input-group-btn">
                                                        <a class="btn green-turquoise" id="btn-klien" data-toggle="modal" href="#m_klien" onclick="ref_klien();">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Tanggal <font color="red"> *</font></label>
                                            <div class="col-md-4">
                                                <div class="input-group input-medium date date-picker" >
                                                    <input type="text" class="form-control" id="tgl" onblur="FormatDateField(this)" onfocus="this.select()" required>
                                                    <span class="input-group-btn">
                                                        <button class="btn default" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label  class="col-md-2 control-label">Uraian<font color="red"> *</font></label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" onfocus="expand(this);" onblur="expandblur(this);" style="height: 34px;" id="uraian" rows="3" required></textarea> </div>
                                        </div>
                                        <div id="f-akun-lawan master">
                                            <div class="form-group" id="control_0" style="height:10px">
                                                <label class="col-md-2 control-label">Akun Lawan <font color="red"> *</font></label>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <select class="form-control akun-lawan unik s2" >
                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="form-control jenisSaldo " >
                                                                <option value="debit">D</option>
                                                                <option value="kredit">K</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                                <input type="text" class="form-control money debit" onkeyup="totalD();" onfocus='toN(this);onlyNumber(this);' onblur='toM(this); totalD();' value="0" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group controls" id="control_1" style="height:10px">
                                                <label class="col-md-2 control-label"></label>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <select class="form-control akun-lawan unik s2" >
                                                            </select>
                                                        </div>
                                                         <div class="col-md-2">
                                                            <select class="form-control jenisSaldo " >
                                                                <option value="debit">D</option>
                                                                <option value="kredit">K</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                                <input type="text" class="form-control money debit" onkeyup="totalD();" onfocus='toN(this);onlyNumber(this);' onblur='toM(this); totalD();' value="0" required>
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
                                                    <select class="form-control" id="refsumber">
                                                        <option value="order">Order</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="nama_order">
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
                                            <div class="col-md-offset-2 col-md-10">
                                                <div class="row">
                                                    
                                                    <div class="hide">
                                                        <input type="submit" id="sub" class="btn btn-primary">
                                                    </div>
                                                    <input type="hidden" class="nomor" value="<?php echo $ssb; ?>">
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
            var selesai = 0

            $(document).ready(function(){
                c = $(".controls").length;
                changekontak();
                $('#tgl').val("<?php echo date("d-M-y") ?>");
                refSelect2();
                $.when(isi_akun_kas(),isi_akun_lawan()).done(function(){
                    loadData();  
                })
                defaultVal()
            })

            function defaultVal()
            {
                 $.ajax({
                    type:'post',
                    url:'<?php echo base_url('jurnalpenyesuaian/isi_akun_lawan') ?>',
                    dataType:'json',
                    success : function (result){
                        $('#control_0').find(".akun-lawan").html(result);
                    }
                })
            }

            function loadData()
            {
                $.ajax({
                    type:'post',
                    url :"<?php echo base_url('jurnalumum/edit_data/'.$_id) ?>",
                    dataType:'json',
                    success : function(data)
                    {
                        console.log(data);
                        var resp = data['data'].Data[0];
                        a = (resp['isklien'] == '0' ? "kontak" : "klien")
                        b = $('#kontak').val(a);
                        changekontak();
                        if (a == "kontak")
                        {
                            $('#nama_kontak').val(resp['nama']) 
                            $('#id_kontak').val(resp['kontak'])
                        }else
                        {
                            $('#nama_klien').val(resp['nama']) 
                            $('#id_klien').val(resp['id_kontak'])
                        }

                        $('#uraian').val(resp['uraian']);
                        len = data['total'];

                        for(i=0; i<len; i++)
                        {
                            m_duit = data['data'].Data[i]['debit'];
                            m_jenisSaldo = "";
                            (m_duit == "0" ? m_jenisSaldo="kredit" : m_jenisSaldo="debit");
                            (m_duit == "0" ? duit=data['data'].Data[i]['kredit'] : duit=data['data'].Data[i]['debit']);
                            _akun = data['data'].Data[i]['akun'];

                            if(($("#control_"+i).length !== 0) == true)
                            {
                                $("#control_"+i).find(".unik").val(_akun).trigger('change');
                                $("#control_"+i).find(".money").val(duit);                  
                                $("#control_"+i).find(".jenisSaldo").val(m_jenisSaldo).trigger('change');              
                            }else{
                                TambahForm();
                                console.log("ke 2")
                                $("#control_"+i).find(".unik").val(_akun).trigger('change');
                                $("#control_"+i).find(".money").val(duit); 
                                $("#control_"+i).find(".jenisSaldo").val(m_jenisSaldo).trigger('change');                                

                            } 
                        }

                        $('#nama_order').val(resp['refinfo'])
                        $('#id_order').val(resp['noref'])
                        $('.nomor').val(resp['nomor'])
                        $('#_id').val(resp['_id'])


                        $("#tgl_input").val(resp['tgl_input'])
                        $("#file").val(resp['file'])
                        $("#urutanDefault").val(data['total']);



                    }

                })

                $('.unik').val('1103')
            }



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
                a = b4simpan()
                if(a == "sukses")
                {
                    $("#sub").trigger('click');
                    $("#simpanmetod").val("0");    
                }
                
            }

            function simpanplus()
            {
                a = b4simpan()
                if(a == "sukses")
                {
                    $("#sub").trigger('click');
                    $("#simpanmetod").val("1");
                }

            }

            $(".save_data").submit(function(){

                $(this).prop("disabled", true);
                $(".btn-simpan").addClass("disabled");
                $(".btn-simpan").html("Sedang Diproses !");
                $("#simpanplus").hide();
               
                 
                simpan();
                         
                return false;
            })

            function b4simpan()
            {
                a = "sukses"
                t = parseInt($(".controls").length);
                for(i=0; i<=t; i++)
                {
                    
                    for(e=i+1; e<=t; e++)
                    {
                        if(a != "gagal")
                        {
                            if($("#control_"+i).find(".unik option:selected").val() == $("#control_"+e).find(".unik option:selected").val())
                            {
                                notifShow("error","Akun baris "+e+" Sama")
                                $("#control_"+e).find(".unik").select2('open');
                                a = "gagal"
                            }else
                            {
                                a = "sukses"
                            }    
                        }
                        
                        console.log(a);
                    }
                }

                if (a == "sukses") 
                {
                     for(i=0; i<=t; i++)
                    {
                        if(a == "sukses")
                        {
                            c = $("#control_"+i).find(".money").val();
                            if(c == "" || c == 0)
                            {
                                $("#control_"+i).find(".money").focus().select();
                                notifShow("error","Akun baris "+i+" belum diisi")
                                a = "gagal";
                            }else
                            {
                                a = "sukses";
                            }
                        }
                    }

                }

                if (a == "sukses") 
                {
                    debit = 0
                    kredit = 0
                     for(i=0; i<=t; i++)
                    {
                        c = $("#control_"+i).find(".jenisSaldo option:selected").val();
                        if(c == "debit")
                        {
                            m_data = c = returntoN($("#control_"+i).find(".money").val());
                            debit += parseInt(m_data);
                        }else
                        {
                            m_data = c = returntoN($("#control_"+i).find(".money").val());
                            kredit += parseInt(m_data);
                        }
                    }

                    (debit == kredit ? a = "sukses" : a = "gagal");

                    if(a != "sukses")
                    {
                        notifShow("error","Kredit dan Debit tidak seimbang")
                    }

                }
               
                if(a == "sukses")
                {
                    isklien = $("#kontak option:selected").val()
                    isklien = (isklien == "kontak" ? "0" : "1");

                    nama = "";
                    kontak = "";
                    if(isklien == "1")
                    {
                        nama = $("#nama_klien").val();
                        (nama == "" ? a="gagal" : a="sukses")
                        if(a == "gagal")
                        {
                            $("#btn-klien").trigger('click');
                        }

                    }else{

                        nama = $("#nama_kontak").val();
                        (nama == "" ? a="gagal" : a="sukses")
                        if(a == "gagal")
                        {
                            $("#btn-kontak").trigger('click');
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
                a += ' <div class="col-md-2">'
                a += '    <select class="form-control jenisSaldo " >'
                a += '        <option value="debit">D</option>'
                a += '        <option value="kredit">K</option>'
                a += '    </select>'
                 a+=            ' </div>'
                 a +=  '            <div class="col-md-4">';
                 a +=  '                    <input type="text" class="form-control money debit" onkeyup="totalD();" onfocus="toN(this);" onblur="toM(this);" value="0">';
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
                 isi_akun_lawan2();
                 refSelect2();

            }

            function isi_akun_lawan2()
            {
                t = parseInt($(".controls").length);
                dataAkun = $('#control_1').find(".unik").html();
                $('#control_'+t).find(".unik").select2();
                $('#control_'+t).find(".unik").html(dataAkun);-1
                console.log("SUdah ke "+c);

                        
            }

            function isi_akun_lawan(c)
            {
                t = $(".controls").length;
                return $.ajax({
                    type:'post',
                    url:'<?php echo base_url('jurnalpenyesuaian/isi_akun_lawan') ?>',
                    dataType:'json',
                    success : function (result){
                        $('#control_1').find(".akun-lawan").select2();
                        $('#control_1').find(".akun-lawan").html(result);
                    
                    }
                })
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
              return  $.ajax({
                    type:'post',
                    url:'<?php echo base_url('jurnalpenyesuaian/isi_akun_kas') ?>',
                    dataType:'json',
                    success : function (result){
                        $('#akun-kas').html(result);
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
            })


            //Hitung
            function totalD()
            {
                var a =0;
                $(".debit").each(function(){
                    m = $(this).val();
                    a += parseInt(returntoN(m));
                    console.log(a);
                  //  a += returntoN();
                }) 

                    $(".kredit").val(returntoM(a));

            }


        </script>

        <script>
            //Simpan
            

            function simpan()
            {
                
                a = $(".controls").length;
                console.log(a);
                param ={}
                for(i = 0; i <= a ; i++)
                {
                    isklien = $("#kontak option:selected").val()
                    isklien = (isklien == "kontak" ? "0" : "1");

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

                     jenisData =  $("#control_"+(parseInt(i))).find('.jenisSaldo option:selected').val();
                     uangData = $("#control_"+(parseInt(i))).find('.money').val();
                     kodeData = $("#control_"+(parseInt(i))).find('.unik option:selected').val()
                     

                    
                    param[i] = {'isklien'  : isklien,
                             'nama'     : nama,
                             'kontak'   : kontak,
                             'tgl'      : $('#tgl').val(),
                             'uraian'   : $('#uraian').val(),
                             'debit'    : (jenisData == "debit" ? returntoN(uangData) : 0 ),
                             'kredit'   : (jenisData == "kredit" ? returntoN(uangData) : 0 ),
                             'refsumber' : $('#refsumber option:selected').val(),
                             'noref'    : $('#id_order').val(),
                             'refinfo'  : $('#nama_order').val(),
                             'jenis'    : 'JA',
                             'akun'     : kodeData,
                             'urutan'   : i,
                             'nomor'   : $(".nomor").val(),
                             }

                }
                console.log(param)
                tleght = parseInt($(".controls").length)+1;
                panjang = $("#urutanDefault").val();
                filter = {'totalbaris'  :tleght,
                          'defbaris'    :panjang,
                           'tgl_input'  :$("#tgl_input").val(),
                           'file'       :$("#file").val(),
                            'nomor'     :$(".nomor").val(),
                            'uraian'    : $('#uraian').val()}
                            
                console.log(filter)

                    $.ajax({
                        type:'post',
                        url : "<?php echo base_url('jurnalpenyesuaian/update') ?>",
                        data : {param : param, id:$('#_id').val(), filter:filter},
                        dataType : 'json',
                        success : function (result)
                        {   
                            ($("#simpanmetod").val() == "1" ? location.reload() : location.href = "<?php echo base_url('datatransaksi') ?>");   
                        }
                    })
            }



            function menyimpan(i,nama_file)
            {
                
            }


            function saveFile(param)
            {

                $.ajax({
                    type:'post',
                    url: base_url+'efiling/simpanFile',
                    data : {param:param},
                    dataType: 'json',
                    success : function (resp)
                    {
                        
                        ($("#simpanmetod").val() == "1" ? location.reload() : location.href = "<?php echo base_url('datatransaksi') ?>");   
                    }
                })
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