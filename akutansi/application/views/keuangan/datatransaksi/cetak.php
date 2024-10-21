<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Transaksi || eAkutansi</title>
      <link rel="shortcut icon" href="img/faveicon.png" />

        <link rel="stylesheet" href="<?php echo base_url("assets/css/laporan.css"); ?>">
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo/favicon.ico"); ?>">
        <link rel="icon" type="image/png" href="<?php echo base_url("asset/img/logo/E.png"); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo base_url("asset/img/logo/E.png"); ?>" sizes="16x16" />
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
    <div>
        <table width="100%" style="border-bottom :1px solid black">
            <tbody>
                <tr>
                    <td width="75%">
                        <h3 class="notaris"></h3>
                    </td>
                    <td align="right"><img src="<?php echo base_url('assets/img/logo-light.png'); ?>" alt="" /></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="margin: 10px 5px;">
        <!-- <p style="text-align :center; font-size:20px; font-weight :bold ;"><?php echo $jenis ?></p> -->
    </div><br><br>

    <table class='table-jurnal' width='100%'>
        <thead>
            <tr>
                <th width='130' style='text-align: center;'>No Transaksi</th>
                <th colspan='2'> Uraian dan Jurnal </th>
                <th width='20%' style='text-align:right;'>Debit &nbsp;</th>
                <th width='20%' style='text-align:right;'>Kredit &nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan='<?php echo $col ?>' style='vertical-align:text-top;'> <?php echo $data->Data[0]->nomor ?></td>
                <td colspan='2'> <?php echo $data->Data[0]->tgl ?> &nbsp; <?php echo $data->Data[0]->uraian ?> &nbsp; (<?php echo $data->Data[0]->nama ?>)</td>
            </tr>
            <?php foreach ($data->Data as $resp) { ?>
            <tr class='hidden'>
                <td colspan='2'><?php echo $resp->akun ?> - <?php echo $namaAkun[$resp->akun] ?></td>
                <td style='text-align: right;' class="uang"><?php echo $resp->debit; ?></td>
                <td style='text-align: right;' class="uang"><?php echo $resp->kredit; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>




    <br /><br />
    <div style='margin-bottom :150px;'>
        <table class='table-list' width='60%' align='right'>
            <tbody>
                <tr style='text-align :center;'>
                    <td width='20%'>Kasir</td>
                    <td width='20%'>Accounting</td>
                    <td width='20%'>Direktur</td>
                </tr>
                <tr style='text-align :center;'>
                    <td height='60'><br/><br/><br/><br/><br/><br/>NamaKasir-BelumDiset</td>
                    <td height='60'><br/><br/><br/><br/><br/><br/>NamaAccounting-BelumDiset</td>
                    <td height='60'><br/><br/><br/><br/><br/><br/>NamaDireksi-BelumDiset</td>
                </tr>
            </tbody>
        </table>
    </div><br/><br/><br/><br/>
    <br />
</body>
</html>