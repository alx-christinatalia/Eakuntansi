<!DOCTYPE html>
<html>
<head>
   <title>Laporan Neraca | eAkutansi</title>
   <style type="text/css">
         body {
         width: 1000px;
         margin-left: auto;
         margin-right: auto;
         font-family: verdana, arial, sans-serif;
         }
         h3 {
         font-size: 20px;
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
    <link rel="icon" type="image/png" href="<?php echo base_url("asset/img/logo/E.png"); ?>" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo base_url("asset/img/logo/E.png"); ?>" sizes="16x16" />
</head>
 <body>

      <div>
         <table width ="100%" style ="border-bottom :1px solid black">
            <tbody>
               <tr>
                  <td width ="75%" >
                     <h3 class="notaris"></h3>
                  </td>
                  <td align ="right"><img width="150" src="assets/img/logo-light.png"/ alt=""/></td>
               </tr>
            </tbody>
         </table>
      </div>
      <div style ="margin: 10px 5px;">
         <p style ="text-align :center; font-size:20px; font-weight :bold ;">Neraca (Posisi Keuangan) </p>
      </div>
      <div>
         <table width ='60%'>
            <tbody>
               <tr>
                  <td width='100'> Periode </td>
                  <td width='20'>:</td>
                  <td><?php echo $bulan; ?> <?php echo $tahun; ?></td>
               </tr>
            </tbody>
         </table>
      </div>
      <br/>
      <table class ='table-list' width ='100%'>
         <thead>
            <tr>
               <th style='font-weight: bold;' colspan='2'>Aktiva</th>
            </tr>
         </thead>
         <tbody>
            <?php
               for($i=0;$i< count($kategori['Total']);$i++)
            {
               $b = $kategori['Nomor'][$i];
               if($kategori['tersedia'][$i] == "tersedia" && ($b == "11" || $b == "12"|| $b == "13" || $b == "14" || $b == "15" || $b == "16" || $b == "17"))
               {
            ?>    

                  <tr style='background-color: #dedbdb;'>
                     <td width='80%'><?php echo $kategori['Nama'][$i] ?></td>
                     <td width='20%' style='text-align: right;' class="changemoney AktivaKategori"><?php echo $kategori['Total'][$i] ?></td>
                  </tr> 

         <?php       
                  for($a=0;$a< count($kategori['akun'][$i]['uang'][$kategori['Nomor'][$i]]);$a++){
                     $kode = $kategori['akun'][$i]['nomor'][$a];
                     if ($nol == "1"){
                     ?>
                           <tr>
                              <td><?php if($kodeakun == "1"){echo $kode." - ".$kategori['akun'][$i]['nama'][$kategori['Nomor'][$i]][$kode];}else{echo $kategori['akun'][$i]['nama'][$kategori['Nomor'][$i]][$kode];} ?></td>
                              <td style='text-align: right;' class="changemoney"><?php echo $kategori['akun'][$i]['uang'][$kategori['Nomor'][$i]][$kode] ?></td>
                           </tr>
                     <?php
                     }else{
                     if ($kategori['akun'][$i]['uang'][$kategori['Nomor'][$i]][$kode] != "0"){
         ?>
                           <tr>
                              <td><?php if($kodeakun == "1"){echo $kode." - ".$kategori['akun'][$i]['nama'][$kategori['Nomor'][$i]][$kode];}else{echo $kategori['akun'][$i]['nama'][$kategori['Nomor'][$i]][$kode];} ?></td>
                              <td style='text-align: right;' class="changemoney"><?php echo $kategori['akun'][$i]['uang'][$kategori['Nomor'][$i]][$kode] ?></td>
                           </tr>     
         <?php
                        }
                     }
                  }
               }
            } ?>
            <tr style='background-color :#c7c6c6; font-weight: bold;'>
               <td>Total Aktiva </td>
               <td style='text-align: right;' class="totalAktiva changemoney">1</td>
            </tr>
         </tbody>
      </table>
      <br/><br/><br/>
      <table class ='table-list' width ='100%'>
         <thead>
            <tr>
               <th style='font-weight: bold;' colspan='2'>Pasiva</th>
            </tr>
         </thead>
         <tbody>
            <tr style='font-weight: bold; background-color: #dedbdb;'>
               <td>Hutang</td>
               <td style='text-align: right;'></td>
            </tr>
            <?php
               for($i=0;$i< count($kategori['Total']);$i++)
            {
               $b = $kategori['Nomor'][$i];
               if($kategori['tersedia'][$i] == "tersedia" && ($b == "21" || $b == "22"|| $b == "31"))
               {
            ?>    

                  <tr style='background-color: #dedbdb;'>
                     <td width='80%'><?php echo $kategori['Nama'][$i] ?></td>
                     <td width='20%' style='text-align: right;' class="changemoney PasivaKategori"><?php echo $kategori['Total'][$i] ?></td>
                  </tr> 

         <?php       
                  for($a=0;$a< count($kategori['akun'][$i]['uang'][$kategori['Nomor'][$i]]);$a++){
                     $kode = $kategori['akun'][$i]['nomor'][$a];
                     ?>
                           <tr>
                              <td><?php if($kodeakun == "1"){echo $kode." - ".$kategori['akun'][$i]['nama'][$kategori['Nomor'][$i]][$kode];}else{echo $kategori['akun'][$i]['nama'][$kategori['Nomor'][$i]][$kode];} ?></td>
                              <td style='text-align: right;' class="changemoney"><?php echo $kategori['akun'][$i]['uang'][$kategori['Nomor'][$i]][$kode] ?></td>
                           </tr>
                     <?php
                  }
               }
            } ?>
            <tr style='background-color :#c7c6c6; font-weight: bold;'>
               <td>Total Passiva</td>
               <td style='text-align: right;' class="TotalPasiva changemoney"></td>
            </tr>
         </tbody>
      </table>
         <?php
            if($ttd == "1"){
               $this->load->view("keuangan/laporankeuangan/neracattd");
            }
         ?>
        <script src="<?php echo base_url("assets/js/public.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>
        <script type="text/javascript">
           $(document).ready(function () {
            hitung()
            refMoney()
            window.focus()
            window.print();

           })

           function refMoney()
           {
             $(".changemoney").each(function(){
                   moneyVal =  $(this).html();
                   console.log(moneyVal)
                   $(this).html(returntoM(moneyVal));
                })
           }

           function hitung()
           {

            total = 0;
            $(".AktivaKategori").each(function()
            {
               total = total + parseInt($(this).html());
               console.log(total)
            })
            $(".totalAktiva").html(total);

            total = 0;
            $(".PasivaKategori").each(function()
            {
               total = total + parseInt($(this).html());
               console.log(total)
            })
            $(".TotalPasiva").html(total);
           }
      </script>  
   </body>
</html>