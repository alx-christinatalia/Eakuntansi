<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <title>Laporan Arus Kas | eAkutansi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
        	.garis {border: 1px solid black; border-collapse: collapse;}
        	.garisatas {	border-bottom: 1px solid #8c8b8b;}
        	body {
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
	</head>
	<body style="font-size: 10">
		<table  width="720px">
			<tr>
				<td><h2><?php echo $notaris; ?></h2></td>
				<td colspan="2" align="right"><img width="150" src="assets/img/logo-light.png"/></td>
			</tr>
			<tr>
				<td colspan="3"><div class="garisatas"></div></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><h2>Arus Kas (Cash Flow)</h2></td>
			</tr>
			<tr>
				<td>Periode : <?php echo $bulan; ?> <?php echo $tahun; ?></td>
			</tr>
			<tr>
				<td colspan="3">
					<table height="250" width="535" border="1" class="garis">
							<tr class="garis">
								<td colspan="2">Saldo Awal</td>
							</tr>
							<tr class="garis">
								<td width="80%">Total Saldo Awal</td>
								<td width="20%">0</td>
							</tr>
					</table>
					<br><br><br>
					<table height="250" width="535" border="1" class="garis">
							<tr class="garis">
								<td colspan="2">Pemasukan (Cash Inflow)</td>
							</tr>
							<?php
								$hitung = count($akun);
							?>
							<tr class="garis">
								<td width="80%">Total Saldo Awal</td>
								<td width="20%"><?php echo $hitung; ?></td>
							</tr>
					</table>
					<br><br><br>
				</td>
			</tr>
         <?php
            if($ttd == "1"){
               $this->load->view("keuangan/laporankeuangan/kotakttd");
            }
         ?>
		</table>
	</body>
</html>
