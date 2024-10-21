<?php
	foreach ($anggaran->Data as $resp){
		$db += intval($resp->db);
		$kr += intval($resp->kr);
		$s += intval($resp->s);
	}
?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <title>Laporan Buku Besar | eAkutansi</title>
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
				<td colspan="3" align="center"><h2>Buku Besar</h2></td>
			</tr>
			<tr>
				<td>Akun : <?php echo $akun; ?></td>
			</tr>
			<tr>
				<td>Periode : <?php echo $bulan; ?> <?php echo $tahun; ?></td>
			</tr>
			<tr>
				<td colspan="3">
					<table width="1000" border="1" class="garis">
							<tr class="garis">
								<td>Tgl</td>
								<td>Uraian</td>
								<td>No Transaksi</td>
								<td>Debit</td>
								<td>Kredit</td>
								<td>Saldo</td>
							</tr>
							<tr>
								<td colspan="3">Saldo Awal</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
						<?php
						 $saldo = $s ;
						 foreach ($transaksi->Data as $result) { ?>
							<tr class="garis"> 
								<td><?php $date = DateTime::createFromFormat("Y-m-d", $result->tgl); echo $date->format("d"); ?></td>
								<td>
								<?php if($kode == "1") {echo $result->akun; echo " - "; echo $data[$result->akun]->nama;}?>
								<?php echo "&nbsp;"; echo $result->uraian; ?>(<?php echo $result->nama; ?>)
								</td>
								<td><?php echo $result->nomor; ?></td>
								<td><?php $deb = $deb+intval($result->debit); echo $result->debit ?></td>
								<td><?php $kre = $kre+intval($result->kredit); echo $result->kredit?></td>
								<td><?php $saldo += intval($result->debit); echo $saldo; ?></td>
							</tr>
						<?php } ?>
							<tr>
								<td colspan="3">Saldo Akhir</td>
								<td><?php echo $deb; ?></td>
								<td><?php echo $kre; ?></td>
								<td><?php echo $saldo; ?></td>
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
