<?php
    $data = $data->Data[0];
    $loaddata = $this->session->userdata("enotaris") ;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head id="Head1">
      <title>
         Laporan Detil Billing | eNotaris.com
      </title>
      <link rel="shortcut icon" href="img/faveicon.png" />

        <link rel="stylesheet" href="<?php echo base_url("assets/css/laporan.css"); ?>">
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo/favicon.ico"); ?>">
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-32x32.png"); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-16x16.png"); ?>" sizes="16x16" />
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
        <script src="<?php echo base_url("assets/daterange/moment.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/daterange/daterangepicker.js"); ?>" type="text/javascript"></script>
        <script type="text/javascript">
             $(document).ready(function () {
                 $.when(get_notaris()).done(function(){
                    refData()
                     window.focus();
                     window.print();
                 })
             })
             function refData()
             {
                $(".myDate").each(function(){
                    $(this).html(tglIndo($(this).html()))
                })
                $(".uang").each(function(){
                    $(this).html(returntoM($(this).html()))
                })
             }
        </script>
   </head>
<body>
    <div class='kwitansi_bordered'>
        <div>
            <table width='100%' style='border-bottom: 1px solid black'>
                <tbody>
                    <tr valign='top'>
                        <td width='75%'><span class='title_notaris notaris'></span><br/><span class='title_alamat'><?php echo $loaddata->alamat; ?></span><br/><span class='title_telp'>Telp. <?php echo $loaddata->notelp; ?></span></td>
                        <td align='right'><span class='title_kwitansi'>KWITANSI</span><br/><span class='title_nomor'>No : <?php echo $data->id_order; ?></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class='body_kwitansi'>
            <table cellpadding='2' cellspacing='15' border='0' width='100%' id='tbl_kwitansi'><input type='hidden' name='txt_uraian' id='txt_uraian' value='Bayar Kerjasama Perorangan - ' />
                <tr valign='top'>
                    <td width='23%' class='judul'>Sudah Terima Dari </td>
                    <td style='width:2%'>:</td>
                    <td width='75%'><?php echo $namaKlien; ?></td>
                </tr>
                <tr valign='top'>
                    <td width='23%' class='judul'>Uang Sejumlah </td>
                    <td style='width:2%'>:</td>
                    <td width='75%' class='judul_terbilang'><?php echo $terbilang ?></td>
                </tr>
                <tr valign='top'>
                    <td width='23%' class='judul'>Untuk Pembayaran </td>
                    <td style='width:2%'>:</td>
                    <td width='75%' class='uraian' id='uraian'><?php echo $data->uraian ?></td>
                </tr>
            </table>
        </div>
        <div class='footer_bawah'>
            <div id='footer_left'><span class='jumlah '><strong>Rp.&nbsp;&nbsp;&nbsp;<a class="uang"><?php echo $data->jml ?></a></strong></span><br/><br/><br/>
                <div class='footer_note'>
                    <p>Perhatian : <br/> Kwitansi ini adalah sah, apabila cek/giro yang dititipkan dapat dicairkan/diuangkan.
                        <p>
                </div>
            </div>
            <div id='footer_right'>
                <div class='ttd'><span><?php echo $loaddata->nama_kabkota; ?>, <a class="myDate"><?php echo $data->tgl ?></a></span><br /><br /><br /><br /><br /><br /><span class='penerima notaris'></span></div>
            </div>
        </div>
    </div>
</body>
</html>