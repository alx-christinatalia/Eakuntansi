<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <title>Laporan Klapper | eNotaris.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo/favicon.ico"); ?>">
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-32x32.png"); ?>" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-16x16.png"); ?>" sizes="16x16">
        <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">
	</head>
	<body onload="window.print()">
		<div>
			<table width ="100%" style ="border-bottom :1px solid black">
				<tbody>
					<tr>
						<td width ="75%" >
							<h3><?php echo $this->session->userdata("user")->nama ; ?></h3>
						</td>
						<td align ="right">
							<img src ="<?php echo base_url('assets/img/logo/print.png'); ?>" alt="">
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div>
			<table width ='60%'>
				<tbody>
					<tr>
						<td width='100'>Periode</td>
						<td width='20'>:</td>
						<td><?php echo $bulan." ".$tahun; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<br/>
		<?php
			if (!empty($data)) :
				foreach ($data as $key => $value) :
		?>
		<div><h4>Buku Klapper Akta (<?php echo strtoupper($key); ?>)</h4></div>
		<table class='table table-bordered'>
		<?php if ($value['_id'] != "") : ?>
			<thead>
				<tr>
					<th class='center'>No</th>
					<th class='center'>Nama Penghadap/Yang diwakilinya</th>
					<th class='center'>Sifat Akta</th>
					<th class='center'>Tgl. Akta</th>
					<th class='center'>No. Akta</th>
					<th class='center'>No. Repertorium</th>
				</tr>
			</thead>
			<tbody class="tbody<?php echo $key ?>">
			<?php for ($i=0; $i < sizeof($value['_id']); $i++): ?>
				<tr>
					<td class='center'><?php echo $value['_id'][$i]; ?></td>
					<td><?php echo $value['nama_klien'][$i]; ?></td>
					<td><?php echo $value['sifat_akta'][$i]; ?></td>
					<td><?php echo date('d-m-Y', strtotime($value['tgl_menghadap'][$i]) ); ?></td>
					<td><?php echo $value['no_akta'][$i]; ?></td>
					<td><?php echo $value['no_repertorium'][$i]; ?></td>
				</tr>
			<?php endfor; ?>
			</tbody>
		</table>
		<?php else : ?>
		NIHIL
		<?php
				endif;
			endforeach;
		else :
		?>
		<b>Warning</b> : Data kosong. Silahkan cek ulang filter pencarian datanya
		<?php endif; ?>
		<br><br><br>
	</body>
</html>
