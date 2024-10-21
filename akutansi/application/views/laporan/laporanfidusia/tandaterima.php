<?php
    $loaddata = $this->session->userdata("enotaris") ;
?>
<!DOCTYPE html>
<html>
<head>
   <title>Tanda Terima | eNotaris.com</title>
   <style type="text/css">
         body {
         width: 1000px;
         font-family: verdana, arial, sans-serif;
         }
         table.table-list {
         border-width: 1px;
         border-color: #000;
         border-collapse: collapse;
         }
         table.table-list th {
         background-color: #c7c6c6;
         border-width: 1px;
         border-style: solid;
         border-color: #000;
         line-height: 25px;
         font-size: 12px;
         text-align: left;
         padding-left: 5px;
         font-weight: 500;
         }
         table.table-list td {
         font-size: 12px;
         border-width: 1px;
         padding: 8px;
         border-style: solid;
         border-color: #000;
         }
         table.table-jurnal {
         border-bottom: 1px solid #000;
         border-collapse: collapse;
         }
         table.table-jurnal tr {
         border-top: 1px solid #000;
         }
         table.table-jurnal th {
         background-color: #c7c6c6;
         line-height: 25px;
         font-size: 14px;
         text-align: left;
         padding-left: 5px;
         font-weight: 700;
         border-bottom: 1px solid #000;
         border-top: 1px solid #000;
         border-right: 0;
         }
         table.table-jurnal td {
         font-size: 12px;
         padding: 8px;
         }
         table.table-jurnal tr.hidden {
         font-size: 12px;
         padding: 8px;
         border-bottom: 0;
         border-top: 0;
         }
         table.table-laporankeluar {
         width: 30%;
         float: right;
         border-width: 0;
         border-collapse: collapse;
         }
         table.table-laporankeluar td {
         font-size: 12px;
         border-width: 0;
         padding: 8px;
         }
         .baris {
         margin: 30px 0;
         }
         .kwitansi_bordered {
         border: 1px solid #000;
         min-height: 470px;
         padding: 10px;
         }
         .kwitansi_nobordered {
         min-height: 470px;
         padding: 10px;
         }
         .title_notaris {
         text-transform: uppercase;
         font-weight: bolder;
         font-size: 20px;
         }
         .title_alamat, .title_telp {
         font-weight: 400;
         font-size: 14px;
         }
         .title_kwitansi {
         text-transform: uppercase;
         font-weight: bolder;
         font-size: 20px;
         }
         .title_nomor {
         font-weight: 400;
         font-size: 14px;
         }
         .title_nomor .span_no {
         letter-spacing: 2px;
         }
         .title_nomor .span_tgl {
         letter-spacing: 1px;
         }
         .judul_terbilang {
         background-color: #c7c6c6;
         border-top: 2px dotted gray;
         border-bottom: 2px dotted gray;
         height: 25px;
         text-transform: capitalize;
         }
         .judul {
         padding-left: 15px;
         font-weight: bolder;
         }
         .body_kwitansi {
         min-height: 200px;
         padding: 10px;
         margin: 10px 10px 10px -30px;
         }
         .footer_bawah {
         height: 170px;
         padding: 10px;
         margin: 10px 0;
         }
         #footer_left {
         float: left;
         margin: 10px 0;
         }
         #footer_left .jumlah {
         text-align: left;
         min-width: 330px;
         background-color: #c7c6c6;
         height: 20px;
         padding: 5px 50px 5px 25px;
         border-top: 5px double #000;
         border-bottom: 5px double #000;
         margin-bottom: 10px;
         }
         .footer_note {
         float: left;
         font-size: 13px;
         max-width: 460px;
         }
         #footer_right {
         float: right;
         margin: 10px 0;
         }
         #footer_right .ttd {
         padding: 5px 10px;
         text-align: center;
         }
         #footer_right .ttd .penerima {
         text-decoration: underline;
         }
         table.table-ttd2 {
         padding: 2px;
         font-size: 12px;
         max-width: 560px;
         border: 1px solid #000;
         border-collapse: collapse;
         }
         table.table-ttd2 th {
         border: 1px solid #000;
         width: 120px;
         }
         table.table-ttd2 td {
         font-size: 11px;
         border: 1px solid #000;
         height: 130px;
         vertical-align: bottom;
         }
         #page-wrap {
         width: 800px;
         margin: 0 auto;
         }
         #header {
         height: 15px;
         width: 100%;
         margin: 20px 0;
         text-align: center;
         color: #000;
         font: 700 28px Helvetica, Sans-Serif;
         text-transform: uppercase;
         letter-spacing: 2px;
         padding: 8px 0;
         }
         #address {
         height: 150px;
         float: left;
         }
         #customer {
         overflow: hidden;
         width: 100%}
         #detail {
         margin-top: 10px;
         padding: 5px;
         border: 1px solid #000;
         border-radius: 7px;
         -moz-border-radius: 7px;
         -webkit-border-radius: 7px;
         }
         #logo {
         text-align: left;
         position: relative;
         margin-top: 5px;
         font-weight: bolder;
         font-size: 18px;
         }
         #customer-title {
         font-size: 18px;
         float: left;
         left: 0;
         border: 1px solid #000;
         border-radius: 7px;
         -moz-border-radius: 7px;
         -webkit-border-radius: 7px;
         padding: 15px;
         max-width: 50%}
         #meta {
         margin-top: 1px;
         width: 352px;
         float: right;
         }
         #meta td {
         text-align: right;
         }
         #meta td.meta-head {
         text-align: left;
         background: #eee;
         width: 100px;
         }
         #items {
         clear: both;
         width: 100%;
         margin: 20px 0 0;
         border-collapse: collapse;
         }
         #items th {
         background: #eee;
         border: 1px solid #000;
         }
         #items td {
         border: 1px solid #000;
         }
         #items tr.item-row {
         border-bottom: 1px solid #000;
         }
         #items tr.item-row td {
         border: 1px solid #000;
         vertical-align: top;
         height: 200px;
         }
         #items td.description {
         width: 300px;
         }
         #items td.item-name {
         width: 175px;
         }
         #items td.total-line {
         font-weight: bolder;
         }
         #items td.total-value {
         padding: 10px;
         text-align: right;
         font-weight: bolder;
         font-size: 16px;
         }
         #items td.balance {
         background: #eee;
         }
         #items td.blank {
         padding: 11px;
         border: 0;
         vertical-align: top;
         text-align: right;
         font-weight: bolder;
         font-size: 16px;
         }
         #tbl-header {
         border: 0;
         width: 100%;
         margin-bottom: 20px;
         border-bottom: 1px solid #000;
         }
         #tbl-header td {
         border: 0;
         }
         #tbl-header tr {
         vertical-align: top;
         }
         .table {
         margin-bottom: 20px;
         width: 100%;
         border-spacing: 0;
         padding: 5px;
         }
         .table-bordered {
         border-collapse: collapse;
         }
         .table-bordered th {
         background-color: #c7c6c6;
         font-size: 13px;
         border: 1px solid #000;
         height: 22px;
         border-collapse: collapse;
         padding: 5px;
         text-align:left;
         }
         .table-bordered td {
         font-size: 12px;
         border: 1px solid #000;
         height: 18px;
         border-collapse: collapse;
         padding: 5px;
         }
         .table th.left, .table td.left {
         text-align:left;
         }
         .table th.center, .table td.center {
         text-align:center;
         }
         .table th.right, .table td.right {
         text-align:right;
         }
    </style>
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo/favicon.ico"); ?>">
    <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-32x32.png"); ?>" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-16x16.png"); ?>" sizes="16x16" />
</head>
<body>
    <div>
        <table width ="100%">
            <tbody>
                <tr>
                    <td>
                        <font size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kantor Notaris</font><br/><br/>
                        <font size="5"><?php echo $loaddata->nama; ?></font><br/>
                        <font size="3"><?php echo $loaddata->alamat; ?></font><br/>
                        <font size="3"><?php echo $loaddata->nama_kabkota; ?>, <?php echo $loaddata->nama_prov; ?></font><br/>
                        <font size="3">Telp : <?php echo $loaddata->notelp; ?></font><br/>
                    </td>
                </tr>
            </tbody>
         </table>
      </div>
      <div>
         <table width="100%">
            <tr>
               <td align="center">
                  <font style="text-decoration: underline;">TANDA TERIMA</font><br/>
                  Nomor : 47/TD/August/2017<br/>
               </td>
            </tr>
         </table>
      </div>
      <div>
         <table width="100%">
            <tr>
               <td>
                  &nbsp;&nbsp;Telah terima dari Kantor <?php echo $loaddata->jabatan; ?> <?php echo $loaddata->nama; ?> berupa :<br/>
                  &nbsp;&nbsp;Sertifikat AKTA JAMINAN FIDUSIA.<br/><br/>
               </td>
            </tr>
         </table>
      </div>
      <div>
         <table width="100%" class="table-list">
            <thead>
               <tr>
                  <td>No</td>
                  <td>Tanggal Akta</td>
                  <td>No Akta</td>
                  <td>Nama Customer</td>
               </tr>
            </thead>
            <tbody>
                  <?php
                     $n=0;
                     $total=0;
                     foreach($list->Data as $result) { 
                     $n++;
                  ?>
                     <tr> 
                        <td><?php echo $n; ?></td>
                        <td><?php echo date("d M Y", strtotime($result->tgl)); ?></td>
                        <td><?php echo $result->nomor; ?></td>
                        <td><?php echo $result->pelanggan; ?></td>
                     </tr>
                  <?php
                     } 
                  ?>
            </tbody>
         </table>
      </div>
      <div>
         <br/>
         <table width="100%">
            <tr>
               <td valign="top" align="center">Hormat Kami,</td>
               <td width="50%" rowspan="3"></td>
               <td align="center">
                  <?php echo $loaddata->nama_kabkota; ?>, <?php echo date("d M Y") ?><br/>
                  Diterima Oleh
               </td>
            </tr>
            <tr>
               <td height="130"></td>
            </tr>
            <tr>
               <td align="center">(.........................)</td>
               <td align="center">(.........................)</td>
            </tr>
         </table>
      </div>
         <script src="<?php echo base_url("assets/js/public.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>
      <script type="text/javascript">
           $(document).ready(function () {
	            window.focus();
	            window.print();
           });
      </script>  
   </body>
</html>