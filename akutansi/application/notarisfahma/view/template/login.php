<?php
    $form = "";

    function create($nama,$id,$type,$tambahan)
    {
        $output ="";
        $output .= '<div class="form-group">' ;
            $output .= '<label class="control-label visible-ie8 -ie9">'.$nama.'</label>';
            $output .= '<input style=" background-color: white; color: black;" name="'.$id.'" class="form-control form-control-solid placeholder-no-fix" type="'.$type.'" autocomplete="off" autofocus placeholder="'.$nama.'" id="'.$id.'" '.$tambahan.' />';
        $output .= '</div>';
        return $output;
    }

    function wilayah($id1,$id2)
    {

        $output ="";
            $output .= '<div class="form-group">' ;
                $output .= '<label class="control-label visible-ie8 -ie9">Pilih Propinsi</label>';
                $output .= '<select class="form-control form-control-solid placeholder-no-fix prov mySelect2" autocomplete="off" name="'.$id1.'"   id="'.$id1.'"/></select>';
            $output .= '</div>';

            $output .= '<div class="form-group">' ;
            $output .= '<label class="control-label visible-ie8 -ie9">Pilih Propinsi</label>';
            $output .= '<select class="form-control form-control-solid placeholder-no-fix kota mySelect2" autocomplete="off"  name="'.$id2.'" id="'.$id2.'"/></select>';
            $output .= '</div>';
        return $output;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login | eNotaris.com</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="author" />
         <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url("assets/css/font.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/simple-line-icons/simple-line-icons.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css"); ?>" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url("assets/plugins/select2/css/select2.min.css"); ?>" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url("assets/plugins/select2/css/select2-bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url("assets/css/components-rounded.css"); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url("assets/css/plugins.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url("assets/css/login.min.css") ?>" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url("assets/plugins/bootstrap-toastr/toastr.min.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo/favicon.ico"); ?>">
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-32x32.png"); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-16x16.png"); ?>" sizes="16x16" />
        <style>
            .login .content .form-actions {
                padding-top: 0px;
            }
            .select2-container {
                width: 100% !important;
                padding: 0;
            }
        </style>
    </head>

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <img src="<?php echo base_url("assets/img/logo/logo-bukopin-login.png") ?>" alt="" />
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content" id="login">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="" id="formLogin">
                <h3 class="form-title font-green">Login eNotaris</h3>
                <div id="notifikasi"></div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control  form-control-solid placeholder-no-fix" type="text" autocomplete="off" autofocus placeholder="User ID" id="username"/>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" id="password"/>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn green btnLogin">Masuk</button>
                </div>
                <div class="create-account">
                    <p>
                        <a href="javascript:;" id="register-btn" class="uppercase">Buat Akun</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
        </div>
        <div class="content" id="some" style="width: 700px;">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" id="daftar" onsubmit="return false" novalidate>
                <h3 class="form-title font-green">Daftar eNotaris</h3>
                <div id="notifikasi"></div>

                <div class="form-group">
                   <label class="control-label visible-ie8 -ie9">Pilih Propinsi</label>
                   <select class="form-control form-control-solid placeholder-no-fix" name="pejabat" id="pejabat" style=" background-color: white; color: black;" autocomplete="off" autofocus.'"/>
                        <option value="Notaris">Notaris</option>   
                        <option value="Notaris">PPAT</option>  
                        <option value="Notaris">Notaris/PPAT</option>  
                   </select>
                </div>
                <?php 
                        echo create('Nama Notaris','nama','text','required');
                        echo create('Notaris Tersebut','tersebut','text','required');
                        echo create('Alamat','alamat','textarea','required');
                        echo wilayah('id_prov','id_kabkota');
                        echo create('Email','email','text','required');
                        echo create('No tel','notelp','text','required');
                        echo create('No Fax','nofax','text');
                ?>
                <div class="form-actions">
                    <button type="submit" class="btn green btnLogin">Daftar</button>
                </div>
                <div class="create-account">
                    <p>
                        <a onclick="location.reload();" id="back" class="uppercase">Back</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
        </div>

        <div class="content" id="admin" style="width: 700px;">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" id="daftar-admin" onsubmit="return false" novalidate>
                <h3 class="form-title font-green">Daftar Administrator</h3>
                <div id="notifikasi"></div>

                <?php 
                        echo create('Nama User','nama-admin','text');
                        echo create('Email User','email-admin','email');
                        echo create('No Handphone','nohp-admin','text');
                        echo create('Password','pwd','password');
                        echo create('Ulangi Password','pwd1','password');
                        echo create('isadmin','is_admin','hidden','value="1"');
                ?>
                <div class="form-actions">
                    <button type="submit" class="btn green btnLogin">Daftar</button>
                </div>
                <div class="create-account">
                    <p>
                        <a onclick="location.reload();" id="back" class="uppercase">Back</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
        </div>
        <div class="copyright"> 2016 © eNotaris</div>
        <!--[if lt IE 9]>
        <script src="<?php echo base_url("assets/js/ie-script/respond.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/ie-script/excanvas.min.js"); ?>"></script> 
        <script src="<?php echo base_url("assets/js/ie-script/ie8.fix.min.js"); ?>"></script> 
        <![endif]-->

        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url("assets/js/public.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/jquery-validation/js/jquery.validate.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/jquery-validation/js/additional-methods.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/jquery-md5/jquery.md5.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/metronic.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>
        <script>
        //var base_url   = "http://localhost:6060/project/";

        $(document).ready(function()
        {
            $("#some").hide()
            $("#admin").hide()
            cek_login();
            cek_akun();

        })
        function cek_akun()
        {
            $.ajax({
                type:'post',
                url:'<?php echo base_url(); ?>login/getData',
                dataType:'json',
                success:function(resp)
                {
                    if(resp=="ada")
                    {
                        $("#register-btn").html("Lupa Password");
                    }else{

                        $("#register-btn").html("Buat Akun")
                        $("#register-btn").attr('data-me','login');
                        $("#register-btn").attr('data-id','some');
                        $("#register-btn").attr('data-toggle','show');
                        $("#register-btn").attr('onclick','logic(this)')
                    }
                    
                }
            })
        }

        function logic(selector)
        {
            me = $(selector).attr('data-me');
            id = $(selector).attr('data-id');
            $("#"+me+"").hide();
            $("#"+id+"").show()

        }

        function mlogic()
        {
            $("#some").hide();
            $("#admin").show();

        }

        function cek_login(){
                $.ajax({
                    type: "post",
                    url: '<?php echo base_url(); ?>user',
                    dataType: "json",
                    success : function(result){
                        if(result == "sukses")   {
                           window.location.href = '<?php echo base_url(); ?>dashboard';

                        }
                    }
                }) 
        }

        $("#daftar-admin").submit(function(){
            var kondisi =  beforeadmin();
            if(kondisi == "sukses"){
                pass = $.md5($("#pwd").val());
                pass1 = $.md5($("#pwd1").val());
                if(pass == pass1)
                {
                    param = {
                        nama : $("#nama-admin").val(),
                        email : $("#email-admin").val(),
                        nohp : $("#nohp-admin").val(),
                        pwd : pass,
                        is_admin : $("#is_admin").val(),
                    }
                    $.ajax({
                    type:'post',
                    url:'<?php echo base_url(); ?>login/daftar_admin',
                    data:{param:param},
                    dataType:'json',
                    success:function(resp){
                        if(resp == "sukses")
                        {
                            location.reload()
                        }else{
                            notifShow("error", "Anda Telah Terdaftar Sebelumnya");
                        }
                    }
                })
                }
                else{
                    $("#pwd").focus()
                    notifShow("error", "Password pertama dan kedua tidak sama");
                }
            }
            return false;
        })
        
        $("#daftar").submit(function(){
            var kondisi =  beforedaftar();
            if(kondisi == "sukses"){
                param = {pejabat : $("#pejabat").val(),
                         nama   : $("#nama").val(),
                         tersebut   : $("#tersebut").val(),
                         alamat : $("#alamat").val(),
                         id_prov    : $("#id_prov option:selected").val(),
                         id_kabkota : $("#id_kabkota option:selected").val(),
                         nama_prov : $("#id_prov option:selected").html(),
                         nama_kabkota : $("#id_kabkota option:selected").html(),
                         email : $("#email").val(),
                         notelp : $("#notelp").val(),
                         nofax : $("#nofax").val()}

                $.ajax({
                    type:'post',
                    url:'<?php echo base_url(); ?>login/daftar',
                    data:{param:param},
                    dataType:'json',
                    success:function(resp){
                        if(resp == "sukses")
                        {
                            mlogic();
                        }else{
                            notifShow("error", "Anda Telah Terdaftar Sebelumnya");
                        }
                    }
                })
            }
            return false;
        })

        $("#formLogin").submit(function(){
            $("#username, #password").prop("disabled", true);
            $(".btnLogin").addClass("disabled");
            $(".btnLogin").html("Sedang Diproses !");
            mypass = $.md5($("#password").val())
            var param = {"username" : $("#username").val(), "password" : mypass}

            if(param["username"] != "" && param["password"] != ""){
               $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>login/mLogin",
                    data: {param : param},
                    dataType: "json",
                    success: function (result) {
                        if(result == "berhasil"){
                            window.location.href = "<?php echo base_url(); ?>login/dashboard";     
                        }else{
                            alertError();
                        }
                    }
               })
            }else {
                alertError();
            }
            
            return false;
        });

        function alertError(){
            $("#username, #password").removeAttr("disabled");
            $(".btnLogin").removeClass("disabled");
            $(".btnLogin").html("Masuk");
            $("#username").focus();
            $("#notifikasi").html(alertShow("alert-danger", "Username atau Password anda salah"));
        }
        </script>
        <script>
        //cek input
                function beforedaftar()
                {

                    pejabat = $("#pejabat").val();
                    nama = $("#nama").val();
                    tersebut = $("#tersebut").val();
                    alamat = $("#alamat").val();
                    id_prov = $("#id_prov option:selected").val();
                    id_kabkota = $("#id_kabkota option:selected").val();
                    nama_prov = $("#id_prov option:selected").html();
                    nama_kabkota = $("#id_kabkota option:selected").html();
                    email = $("#email").val();
                    notelp = $("#notelp").val();

                    kondisi = "";

                    if((pejabat != "") && (nama != "") && (tersebut != "") && (alamat != "") && (id_prov != "") && (id_kabkota != "") && (nama_prov != "") && (nama_kabkota != "") && (email != "") && (notelp != ""))
                    {
                        kondisi = "sukses";
                    }else
                    {
                        notifShow("error", "Masukkan data formulir dengan benar");
                        kondisi = "gagal";
                        cekdaftar();
                    }
                    return kondisi;
                }
                function cekdaftar()
                {
                    if($("#pejabat").val() == "")
                    {
                        $("#pejabat").focus();  
                    }else if ($("#nama").val() == "")
                    {
                        $("#nama").focus();   
                    }else if ($("#tersebut").val() == "")
                    {
                        $("#tersebut").focus();   
                    }else if ($("#alamat").val() == "")
                    {
                        $("#alamat").focus();   
                    }else if ($("#id_prov option:selected").val() == "")
                    {
                        $("#id_prov option:selected").focus();   
                    }else if ($("#id_kabkota option:selected").val() == "")
                    {
                        $("#id_kabkota option:selected").focus();   
                    }else if ($("#id_prov option:selected").html() == "")
                    {
                        $("#id_prov option:selected").focus();   
                    }else if ($("#id_kabkota option:selected").html() == "")
                    {
                        $("#id_kabkota option:selected").focus();  
                    }else if ($("#email").val() == "")
                    {
                        $("#email").focus(); 
                    }else if ($("#notelp").val() == "")
                    {
                        $("#notelp").focus();  
                    } 
                }

                function beforeadmin()
                {
                    nama = $("#nama-admin").val();
                    email = $("#email-admin").val();
                    nohp = $("#nohp-admin").val();
                    pwd = $("#pwd").val();
                    pwd1 = $("#pwd1").val();

                    kondisi = "";

                    if((nama != "") && (email != "") && (nohp != "") && (pwd != "") && (pwd1 != ""))
                    {
                        kondisi = "sukses";
                    }else
                    {
                        notifShow("error", "Masukkan data formulir dengan benar");
                        kondisi = "gagal";
                        cekadmin();
                    }
                    return kondisi;
                }
                function cekadmin()
                {
                    if($("#nama-admin").val() == "")
                    {
                        $("#nama-admin").focus();  
                    }else if ($("#email-admin").val() == "")
                    {
                        $("#email-admin").focus();   
                    }else if ($("#nohp-admin").val() == "")
                    {
                        $("#nohp-admin").focus();   
                    }else if ($("#pwd").val() == "")
                    {
                        $("#pwd").focus();   
                    }else if ($("#pwd1").val() == "")
                    {
                        $("#pwd1").focus();   
                    } 
                }
        </script>
    </body>
</html>