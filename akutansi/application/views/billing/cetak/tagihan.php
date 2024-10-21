<?php
$data = $data->Data[0];
$loaddata = $this->session->userdata("enotaris") ;
?>
<!DOCTYPE html>
<html>   
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
                $(".m_today").each(function(){
                    $(this).html(tglIndo2(hariini()))
                })
             }
        </script>
   </head><body>
    <div id='page-wrap'>
        <div>
            <table id='tbl-header'>
                <tbody>
                    <tr>
                        <td style='width:75%'><span class='title_notaris notaris'></span><br /><span class='title_alamat'><?php echo $loaddata->alamat; ?></span><br /><span class='title_telp'>Telp. <?php echo $loaddata->notelp; ?></span></td>
                        <td><span class='title_kwitansi'>INVOICE</span><br /><span class='title_nomor'><span class='span_no'>No : </span><?php echo $data->id_order ?></span><br /><span class='title_nomor'><span class='span_tgl'>Tgl : </span><a class="myDate"><?php echo $data->tgl ?></a></span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style='clear:both'></div>
        <div id='customer'>
            <div id='customer-title'><strong>Klien :</strong><br /><?php echo $namaKlien ?></div>
        </div>
        <table id='items'>
            <tr>
                <th style='width:5%'>No</th>
                <th style='width:65%'>Catatan</th>
                <th style='width:30%'>Biaya</th>
            </tr>
            <tr class='item-row'>
                <td>1</td>
                <td class='description'><?php echo $data->uraian ?> </td>
                <td style='text-align:right'><span class='price'>Rp . <a class="uang"><?php echo $data->jml ?></a></span></td>
            </tr>
            <tr>
                <td colspan='2' class='blank'>Total</td>
                <td class='total-value'>
                    <div id='subtotal'>Rp. <a class="uang"><?php echo $data->jml ?></div>
                </td>
            </tr>
        </table>
        <div>
            <table style='width:100%; margin-top:40px;'>
                <tr>
                    <td rowspan='2' style='width:60%; vertical-align:top; border:0; padding-right:25px'>Catatan : <br />Kwitansi ini adalah sah, apabila cek/giro yang dititipkan dapat dicairkan/diuangkan.</td>
                </tr>
                <tr>
                    <td style='width:40%; text-align:center; height:100px; border:0; vertical-align:top'><?php echo $loaddata->nama_kabkota; ?>, <a class="m_today"></a><br /><br /><br /><br /><br /><br /><strong style='text-decoration:underline' class="notaris"></strong></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>