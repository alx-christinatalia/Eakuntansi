<?php
    $loaddata = $this->session->userdata("enotaris") ;
    $kas="";
    $bank="";
    foreach ($data->Data as $resp) {
    	if($resp->kt == 11){
    		
    	}
    }
?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <title>Laporan Arus Kas | eNotaris.com</title>
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
				<td><h2><?php echo $loaddata->nama; ?></h2></td>
				<td colspan="2" align="right"><img width="150" src="assets/img/logo/print.png"/></td>
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
							<?php
								foreach($data->Data as $result){
									if($result->sa != null){
										if($result->kt == 11){

							?>
							<tr>
								<td>$akun[$data->k]->nama</td>
								<td></td>
							</tr>
							<?php
										}else if($result->kt == 12){

										}
									}
								} 
							?>
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

         <?php
            if($ttd == "1"){
               $this->load->view("keuangan/laporankeuangan/kotakttd");
            }
         ?>
		</table>
	</body>
</html>
