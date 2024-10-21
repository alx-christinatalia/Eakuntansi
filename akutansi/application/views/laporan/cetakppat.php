<?php
    $loaddata = $this->session->userdata("enotaris") ;
?>
<!DOCTYPE html>
<html>
<head>
   <title>Laporan Bulanan Pembuatan Akta Oleh PPAT | eNotaris.com</title>
   <style type="text/css">
         body {
         width: 1000px;
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
         .garisatas {   border-bottom: 1px solid #8c8b8b;}
         .tengah {text-align: center;}
         @page {size: landscape;}
    </style>
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo/favicon.ico"); ?>">
    <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-32x32.png"); ?>" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-16x16.png"); ?>" sizes="16x16" />
</head>
<body>
		<table  width="100%">
			<tr>
				<td><h2><?php echo $loaddata->nama; ?></h2></td>
				<td colspan="2" align="right"><img width="150" src="<?php echo base_url("assets/img/logo/print.png"); ?>"/></td>
			</tr>       <tr>
            <td colspan="3"><div class="garisatas"></div></td>
         </tr>
         <tr>
            <td colspan="3" align="center"><h2>Laporan Bulanan Pembuatan Akta Oleh PPAT</h2></td>
         </tr>
         <tr>
            <td>Periode : <?php echo $nama; ?> <?php echo $tahun; ?></td>
         </tr>
         <tr>
            <td colspan="3">
               <table class="table-list" width="100%">
					<tr class="garis tengah">
						<td rowspan="2">No</td>
						<td colspan="2">Akta</td>
						<td rowspan="2">Perbuatan Hukum</td>
						<td colspan="2">Nama</td>
						<td rowspan="2">Jenis dan Nomor Hak</td>
						<td rowspan="2">Letak Tanah dan Bangunan</td>
						<td colspan="2">Luas</td>
						<td rowspan="2">Harga Transaksi Perolehan / Pengalihan</td>
						<td colspan="2">SPPT PBB</td>
						<td colspan="2">SSP</td>
						<td colspan="2">SSB</td>
						<td rowspan="2">Keterangan</td>
					</tr>
					<tr class="garis tengah">
						<td>Nomor</td>
						<td>Tanggal</td>
						<td>Yang Mengalihkan</td>
						<td>Yang Menerima</td>
						<td>Tanah</td>
						<td>BGN</td>
						<td>NOP Tahun</td>
						<td>NJOP</td>
						<td>Tgl</td>
						<td>(Rp)</td>
						<td>Tgl</td>
						<td>(Rp)</td>
					</tr>
					<tr>
					<?php for($i=1;$i<19;$i++) { ?>
						<td><?php echo $i; ?></td>
					<?php } ?>
					</tr>
					<?php 
						$no=0;
						foreach($ppat->Data as $list) 
						{ 
							$kr1 = array();
							$kr2 = array();
							$pp1 = array();
							$pp2 = array();
							$no++; 
						echo "<tr>";
							echo "<td>".$no."</td>";
							echo "<td>".$list->no_akta."</td>";
							if ($list->tgl_closed == '0000-00-00') { 
								echo "<td></td>"; 
							} else { 
								echo "<td>".date("d-M-Y", strtotime($list->tgl_closed))."</td>"; 
							}
							echo "<td>".$list->nama_layanan."</td>";

							if (($list->layanan == '23')||($list->layanan == '24')){
								foreach($kreditpihak1[$list->_id]->Data as $term){
									$kr1[] = $term->nama;
								}
							echo "<td>".implode('; ', $kr1)."</td>";
							}else{
								foreach($ppatpihak1[$list->_id]->Data as $term){
									$pp1[] = $term->nama;
								}
							echo "<td>".implode('; ', $pp1)."</td>";
							}
							if (($list->layanan == '23')||($list->layanan == '24')){
								foreach($kreditpihak2[$list->_id]->Data as $term){
									$kr2[] = $term->nama;
								}
							echo "<td>".implode('; ', $kr2)."</td>";
							}else{
								foreach($ppatpihak2[$list->_id]->Data as $term){
									$pp2[] = $term->nama;
								}
							echo "<td>".implode('; ', $pp2)."</td>";
							}
							
							if ($list->layanan == "24"){ 
								echo "<td>".$kreditumum[$list->_id]->jenis_no_hak."</td>"; 
							} else { 
								echo "<td>".$umum[$list->_id]->status_tanah."</td>";
							}
							
							if ($list->layanan == "24"){ 
								echo "<td>".$kreditumum[$list->_id]->desa_kel."</td>";
							} else { 
								echo "<td>".$umum[$list->_id]->desa."</td>";
							}

							echo  "<td>".$umum[$list->_id]->luas_tanah."</td>";
							echo  "<td>".$umum[$list->_id]->luas_bangunan."</td>";

							if ($list->layanan == "24"){ 
								echo  "<td>".$kreditumum[$list->_id]->nominal_tanggungan."</td>";
							} else { 
								echo  "<td>".$umum[$list->_id]->harga."</td>";
							}

							echo  "<td>".$umum[$list->_id]->no_nop."</td>";
							echo  "<td>".$umum[$list->_id]->njop."</td>";
							echo  "<td>".date("d-M-Y", strtotime($umum[$list->_id]->ssp_tgl))."</td>";
							echo  "<td>".$umum[$list->_id]->ssp_rp."</td>";
							echo  "<td>".date("d-M-Y", strtotime($umum[$list->_id]->sspd_tgl))."</td>";
							echo  "<td>".$umum[$list->_id]->sspd_rp."</td>";
							echo  "<td>".$umum[$list->_id]->keterangan."</td>";
						echo "</tr>";
					} ?>
               </table>
            </td>
         </tr>
		</table>
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
