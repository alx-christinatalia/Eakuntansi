<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <title>Cetak</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
        	.garis {border: 1px solid black; border-collapse: collapse;}
        	.garisatas {	border-bottom: 1px solid #8c8b8b;}
        </style>
	</head>
	<body style="font-size: 10">
		<table  width="720px">
			<tr>
				<td><h2>Eno Tari S.H M.Kn</h2></td>
				<td colspan="2" align="right"><img width="150" src="assets/img/logo/print.png"/></td>
			</tr>
			<tr>
				<td colspan="3"><div class="garisatas"></div></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><h2>Data Kontak</h2></td>
			</tr>
			<tr>
				<td colspan="3">
					<table height="250" width="535" border="1" class="garis">
						<tr class="garis">
							<td>No</td>
							<td>Nama Kontak</td>
							<td>Catatan</td>
							<td>Status</td>
						</tr>
							<?php $no =0; ?>
							<?php foreach ($datakontak->Data as $result) { 
								$a = ($result->aktif == "1" ? "Aktif" : "Tidak Aktif");
							?>
							<?php $no++; ?>
						<tr class="garis">
							<td><?php echo $no; ?></td>
							<td><?php echo $result->nama; ?></td>
							<td><?php echo $result->catatan; ?></td>
							<td><?php echo $a; ?></td>
						</tr>
							<?php } ?>
					</table>
				</td>
			</tr>
					</table>
				</td>
			</tr>
	</body>
</html>
