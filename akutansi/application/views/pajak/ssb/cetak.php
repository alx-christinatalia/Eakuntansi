<?php
	$this->load->model('publicmodel');

	$a =" &nbsp; &nbsp;";
	$a1 =" &nbsp;";
	$b =" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
	$c =" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
	$g =" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
	$h =" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
	
	// nama wajib pajak
	$wpnama = str_split($data->wp_nama);
	$jmlwpnama = strlen($data->wp_nama);

	// kode pos wajib pajak
	$wpkodepos = str_split($data->wp_kodepos);
	$jmlwpkodepos = strlen($data->wp_kodepos);

	// nop pbb
	$onop = str_split($data->o_nop);

	// nop pbb
	$njjenisperoleh = str_split($data->nj_jenisperoleh);

	// Alamat Pembayaran
	$d = _enter($data->alamat_wp,96);
	// Uraian Pembayaran
	$uraian = $data->uraian." ".$data->ket;
	$e = _enter($uraian,60);
		

	function _enter($text,$long)
	{
		intval($long);
		$output = "";
		$current= 0;
		$currentLane = 0;
		$split = str_split($text);
		for($i=0;$i<count($split);$i++)
		{
			if($current < $long )
			{
				$output[$currentLane] .= $split[$i];
				$current++;
			}else if($current >= $long && $split[$i]== " "){
				$current = 0 ;
				$currentLane++;
			}else
			{
				$output[$currentLane] .= $split[$i];
				$current++;
			}

		}
		return $output;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>SSB</title>
</head>
	<style type="text/css">
		.kertas { padding-top: 80px;
				   padding-left: 0px;
		}
		.small { font-size: 12px;
				 font-family: "Times New Roman";

		}

		.big { font-size: 20px;
				 font-family: "Times New Roman";

		}

		.normal { font-size: 14px;
				 font-family: "Times New Roman";

		}
	</style>
<body>
	<table width="800" height="1000">
		<tr>
			<td style="padding-left: 740px; padding-top: 5px;"></td>
		</tr>
		<tr>
			<td style="padding-left: 740px; margin-top: 0px;" class="big" >1</td>
		</tr>
		<tr>
			<td style="padding-left: 690px; padding-top: 6px " class="normal" >
			Untuk Wajib Pajak sebagai bukti pembayaran 
			</td>
		</tr>
		<tr>
			<td style="padding-left: 200px; padding-top: 40px " >
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 143px; padding-top: 34px; text-transform:uppercase; " >
			<?php 
			for ($i=0;$i<30;$i++){

			echo "{$wpnama[$i]}{$a}";

			}
			?>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 145px; padding-top: 14px; text-transform:capitalize;"  ><?php echo $data->wp_alamat; ?></td>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<td class="small" style="padding-left: 140px; padding-top: 8px; text-transform:capitalize;"><?php echo $data->wp_kelurahan; ?></td>
						<td class="small" style="padding-left: 390px; padding-top: 8px; text-transform:capitalize;"><?php echo $data->wp_kec; ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="small">
				<table>
					<tr>
						<td class="small" style="padding-left: 140px; padding-top: 4px; text-transform:capitalize;"><?php echo $data->wp_kabkota; ?></td>
						<td class="small" style="padding-left: 388px; padding-top: 3px; text-transform:capitalize;">
						<?php 			
							for ($i=0;$i<5;$i++){
								echo "{$wpkodepos[$i]}{$a}";

							} ?>	
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 215px; padding-top: 25px; text-transform:uppercase; " >
			<?php echo "{$onop[0]}{$a}{$onop[1]}{$b}{$onop[2]}{$a}{$onop[3]}{$b}{$onop[4]}{$a}{$onop[5]}{$a}{$onop[6]}{$b}{$onop[7]}{$a}{$onop[8]}{$a}{$onop[9]}{$b}{$onop[10]}{$a}{$onop[11]}{$a}{$onop[12]}{$b}{$onop[13]}{$a}{$onop[14]}{$a}{$onop[15]}{$a}{$onop[16]}{$b}{$onop[17]}";?>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 214px; padding-top: 13px; text-transform:capitalize;"  ><?php echo $data->o_letak; ?></td>
		</tr>
		<tr>
			<td class="small">
				<table>
					<tr>
						<td class="small" style="padding-left: 140px; padding-top: 7px; text-transform:capitalize;"><?php echo $data->o_kelurahan; ?></td>
						<td class="small" style="padding-left: 350px; padding-top: 7px; text-transform:capitalize;">
						<?php echo $data->o_rtrw; ?>	
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="small">
				<table>
					<tr>
						<td class="small" style="padding-left: 140px; padding-top: 5px; text-transform:capitalize;"><?php echo $data->o_kec; ?></td>
						<td class="small" style="padding-left: 320px; padding-top: 5px; text-transform:capitalize;">
						<?php echo $data->o_kabkota; ?>	
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="small">
				<table>
					<tr>
						<td class="small" style="padding-left: 335px; padding-top: 78px; text-transform:uppercase; "><?php echo $data->nj_luastanah; ?></td>
						<td class="small" style="padding-left: 100px; padding-top: 78px; text-transform:uppercase; "><?php echo number_format($data->nj_pbbtanahpermtr,0,",","."); ?>	
						</td>
						<td class="small" style="padding-left: 108px; padding-top: 78px; text-transform:uppercase; "><?php echo number_format($data->nj_luastanahxpbb,0,",","."); ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="small">
				<table>
					<tr>
						<td class="small" style="padding-left: 335px; padding-top: 10px; text-transform:uppercase; "><?php echo $data->nj_luasbangunan; ?></td>
						<td class="small" style="padding-left: 100px; padding-top: 10px; text-transform:uppercase; "><?php echo number_format($data->nj_pbbbangunanpermtr,0,",","."); ?>	
						</td>
						<td class="small" style="padding-left: 108px; padding-top: 10px; text-transform:uppercase; "><?php echo number_format($data->nj_luasbangunanxpbb,0,",","."); ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 255px; padding-top: 15px; text-transform:uppercase; " >
				<?php echo "{$h}{$h}{$b}{$a}"; echo number_format($data->nj_totalnjoppbb,0,",","."); ?>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 300px; padding-top: 18px; text-transform:uppercase; " >
				<?php echo "{$njjenisperoleh[0]}{$a}{$njjenisperoleh[1]}{$h}{$b}{$b}{$b}{$b}";  echo number_format($data->nj_harga,0,",","."); ?>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 145px; padding-top: 15px; text-transform:uppercase; " >
				<?php echo $data->nj_nosertifikat;?>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 345px; padding-top: 47px; text-transform:uppercase; " >
				<?php echo "{$h}{$h}{$b}{$a}"; echo number_format($data->npop,0,",","."); ?>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 345px; padding-top: 12px; text-transform:uppercase; " >
				<?php echo "{$h}{$h}{$b}{$a}"; echo number_format($data->npoptkp,0,",","."); ?>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 345px; padding-top: 10px; text-transform:uppercase; " >
				<?php echo "{$h}{$h}{$b}{$a}"; echo number_format($data->npopkp,0,",","."); ?>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 345px; padding-top: 10px; text-transform:uppercase; " >
				<?php echo "{$h}{$h}{$b}{$a}"; echo number_format($data->beaperolehan,0,",","."); ?>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 345px; padding-top: 8px; text-transform:uppercase; " >
				<?php echo "{$h}{$h}{$b}{$a}"; echo number_format($data->pengenaankarenahibahdkk,0,",","."); ?>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 345px; padding-top: 8px; text-transform:uppercase; " >
				<?php echo "{$h}{$h}{$b}{$a}"; echo number_format($data->beaperolehanygdibayar,0,",","."); ?>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 4px; padding-top: 37px; text-transform:uppercase; " >
				X
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 4px; padding-top: 7px; text-transform:uppercase; " >
				x
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 4px; padding-top: 7px; text-transform:uppercase; " >
				x
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 4px; padding-top: 6px; text-transform:uppercase; " >
				x
			</td>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<td class="small" style="padding-left: 70px; padding-top: 26px; text-transform:uppercase; "><?php echo number_format($data->beaperolehanygdibayar,0,",","."); ?></td>
						<td class="small" style="padding-left: 180px; padding-top: 26px; text-transform:uppercase; ">
						<?php $uang = $this->publicmodel->terbilang($data->beaperolehanygdibayar); echo $uang; echo "{$a1}RUPIAH";?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 420px; padding-top: 118px; text-transform:uppercase; "><?php echo date("d-m-Y", strtotime($data->tgl_byr)); ?></td>
		</tr>
		<tr>
			<td class="small">
				<table>
					<tr>
						<td class="small" style="padding-left: 70px; padding-top: 39px;"><?php echo $data->nama_notaris; ?></td>
						<td class="small" style="padding-left: 185px; padding-top: 39px; text-transform:capitalize;"><?php echo $data->lokasibyr; ?>	
						</td>
						<td class="small" style="padding-left: 177px; padding-top: 39px;"><?php echo $data->nama_wp; ?></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>