<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <title>Laporan Laba Rugi | eAkutansi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
        	.garis {border: 1px solid black; border-collapse: collapse;}
        	.garisatas {	border-bottom: 1px solid #8c8b8b;}
        	body {
	         font-family: verdana, arial, sans-serif;
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
        	}
        </style>
	      <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo/favicon.ico"); ?>">
	      <link rel="icon" type="image/png" href="<?php echo base_url("asset/img/logo/E.png"); ?>" sizes="32x32" />
	      <link rel="icon" type="image/png" href="<?php echo base_url("asset/img/logo/E.png"); ?>" sizes="16x16" />
	</head>
	<body style="font-size: 10">
		<table  width="720px">
			<tr>
				<td><h2><?php echo $notaris; ?></h2></td>
				<td colspan="2" align="right"><img src="<?php echo base_url(); ?>assets/img/logo-light.png"/></td>
			</tr>
			<tr>
				<td colspan="3"><div class="garisatas"></div></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><h2>Laba / Rugi (Ekuitas)</h2></td>
			</tr>
			<tr>
				<td>Periode : <?php echo $bulan; ?> <?php echo $tahun; ?></td>
			</tr>
			<tr>
				<td colspan="3">
					<table width="1000" border="1" class="garis">
							<tr class="garis">
								<td width="80%">Pendapatan</td>
								<td width="20%">Jumlah</td>
							</tr>
							<?php
							if ($nol == "1"){
								foreach($pendapatan->Data as $dapat){
									$jmlpendapatan += $dapat->db - $dapat->kr;
							?>
							<tr>
								<td><?php if($kode == "1") {echo $dapat->k; echo " - ";} ?><?php echo $akun[$dapat->k]->nama; ?></td>
								<td><?php echo number_format($dapat->db - $dapat->kr,0,",","."); ?></td>
							</tr>
							<?php
								}}else{
								foreach($pendapatan->Data as $dapat){
									if(($dapat->db || $dapat->kr) != "0"){
									$jmlpendapatan += $dapat->db - $dapat->kr;
							?>
							<tr>
								<td><?php if($kode == "1") {echo $dapat->k; echo " - ";} ?><?php echo $akun[$dapat->k]->nama; ?></td>
								<td><?php echo number_format($dapat->db - $dapat->kr,0,",","."); ?></td>
							</tr>
							<?php
						}
								}									
								}
							?>
							<tr>
								<td>Total Pendapatan</td>
								<td><?php echo number_format($jmlpendapatan,0,",","."); ?></td>
							</tr>
					</table>
					<br><br><br>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table width="1000" border="1" class="garis">
							<tr class="garis">
								<td width="80%">Beban (Biaya)</td>
								<td width="20%">Jumlah</td>
							</tr>
							<?php
							if ($nol == "1"){
								foreach($biaya->Data as $beban){
									$jmlbeban += $beban->db - $beban->kr;
							?>
							<tr>
								<td><?php if($kode == "1") {echo $beban->k; echo " - ";} ?><?php echo $akun[$beban->k]->nama; ?></td>
								<td><?php echo number_format($beban->db - $beban->kr,0,",","."); ?></td>
							</tr>
							<?php
								}}else{
								foreach($biaya->Data as $beban){
									if(($beban->db || $beban->kr) != "0"){
									$jmlbeban += $beban->db - $beban->kr;
							?>
							<tr>
								<td><?php if($kode == "1") {echo $beban->k; echo " - ";} ?><?php echo $akun[$beban->k]->nama; ?></td>
								<td><?php echo number_format($beban->db - $beban->kr,0,",","."); ?></td>
							</tr>
							<?php
						}
								}									
								}
							?>
							<tr>
								<td>Total Beban (Biaya)</td>
								<td><?php echo number_format($jmlbeban,0,",","."); ?></td>
							</tr>
					</table>
					<br><br><br>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table width="1000" border="1" class="garis">
							<tr class="garis">
								<td width="80%">Laba/Rugi</td>
								<td width="20%"><?php if($jmlpendapatan > $jmlbeban){$labarugi = $jmlpendapatan - $jmlbeban;}else{$labarugi = $jmlbeban - $jmlpendapatan;} echo number_format($labarugi,0,",","."); ?></td>
							</tr>
					</table>
				</td>
			</tr>
		</table>
         <?php
            if($ttd == "1"){
               $this->load->view("keuangan/laporankeuangan/kotakttd");
            }
         ?>
		<script src="<?php echo base_url("assets/js/public.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>
        <script type="text/javascript">
           $(document).ready(function () {
            	window.focus()
            	window.print();
           })
        </script>
	</body>
</html>