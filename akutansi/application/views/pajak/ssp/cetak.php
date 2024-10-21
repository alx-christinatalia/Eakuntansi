<?php
	$this->load->model('publicmodel');

	setlocale(LC_ALL, "id");
	$tgl = strftime("%#d %B %Y", strtotime($data->tgl_byr)); 

	$strArray = explode(' ',$data->kota_pkp);
	$kota = $strArray[1];

	$a =" &nbsp; &nbsp;";
	$b =" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
	// NO NPWP
	$c = str_split($data->npwp);

	// Alamat Pembayaran
	$d = _enter($data->alamat_wp,96);

	// Uraian Pembayaran
	$uraian = $data->uraian;
	$e = _enter($uraian,60);

	// stp
	$stp = str_split($data->stp);
		
	// akun
	$akun = str_split($data->akun);

	// jenis setoran
	$jenissetoran = str_split($data->setoran);

	// tahun pajak
	$tahunpajak = str_split($data->tahun);
	
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
	<title>SSP</title>
</head>
	<style type="text/css">
		.kertas { padding-top: 75px;
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
	<table class="kertas" width="800">
		<tr>
			<td class="big" style="padding-left: 760px" >
			1
			</td>
		</tr>
		<tr>
			<td class="normal" style="padding-left: 613px; padding-top: 15px " >
			Untuk Arsip WP
			</td>
		</tr>
		<tr>
			<td style="padding-left: 188px; padding-top: 33px " >
			<?php echo "{$c[0]} &nbsp; &nbsp; &nbsp; {$c[1]}{$b}&nbsp;{$c[2]} &nbsp; &nbsp; &nbsp; {$c[3]} &nbsp; &nbsp; &nbsp; {$c[4]}{$b}&nbsp;{$c[5]} &nbsp; &nbsp; &nbsp; {$c[6]} &nbsp; &nbsp; &nbsp; {$c[7]}{$b}&nbsp;&nbsp;{$c[8]}{$b}{$a}&nbsp;{$c[9]} &nbsp; &nbsp; &nbsp; {$c[10]} &nbsp; &nbsp; &nbsp; {$c[11]}{$b}&nbsp;{$c[12]} &nbsp; &nbsp; &nbsp; {$c[13]} &nbsp; &nbsp; &nbsp; {$c[14]}" ?>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 184px; padding-top: 25px " >
				<?php echo $data->nama_wp ?>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 184px; padding-top: 10px;"  >
				<?php echo $d[0] ?>
			</td>
		</tr>
		<tr>
			<td class="small" style="padding-left: 184px; padding-top: 10px; " >
				<?php echo ($d[1] == "" ? "<br>" : $d[1]) ?>
			</td>
		</tr>
		<tr>
			<td  style="padding-top: 100px; ">
				<table>
					<tr>
						<td>
							<table>
								<tr>
									<td style="padding-left: 30px; padding-top: 35px"><?php echo "{$akun[0]}{$a}&nbsp;$akun[1]{$a}&nbsp;$akun[2]{$a}&nbsp;$akun[3]{$a}&nbsp;$akun[4]{$a}&nbsp;$akun[5]&nbsp;{$b}{$b}{$a}{$jenissetoran[0]}{$a}&nbsp;{$jenissetoran[1]}{$a}&nbsp;{$jenissetoran[2]}" ?></td>
								</tr>
							</table>
						</td>
						<td>
							<table>
								<tr>
									<td class="small" style=" padding-top: 25px;padding-left: 85px">
										<?php echo ($e[0] == "" ? "<br>" : $e[0]) ?>
									</td>
								</tr>
								<tr>
									<td class="small" style="padding-left: 85px">
										<?php echo ($e[1] == "" ? "<br>" : $e[1]) ?>
									</td>
								</tr>
								<tr>
									<td class="small" style="padding-left: 85px">
										<?php echo ($e[2] == "" ? "<br>" : $e[2]) ?>
									</td>
								</tr>
							</table>	
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 670px; padding-top: 60px " class="small">
				<?php
					for($i=0;$i<4;$i++){
						echo "{$tahunpajak[$i]}{$a}&nbsp;";
					}
				?>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 215px; padding-top: 38px " class="small">
			<?php echo "{$stp[0]}{$a}&nbsp;{$stp[1]}{$a}&nbsp;&nbsp;{$stp[2]}&nbsp;{$a}{$stp[3]}{$a}&nbsp;&nbsp;{$stp[4]}{$b}&nbsp;&nbsp;&nbsp;{$stp[5]}{$a}&nbsp;{$stp[6]}{$a}&nbsp;{$stp[7]}{$b}&nbsp;&nbsp;&nbsp;{$stp[8]}{$a}{$stp[9]}{$b}{$a}&nbsp;&nbsp;{$stp[10]}{$a}{$stp[11]}{$a}{$stp[12]}{$b}{$a}&nbsp;&nbsp;{$stp[13]}{$a}{$stp[14]}";?>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 215px; padding-top: 40px " class="small"><?php echo "Rp. "; echo number_format($data->jml,0,",","."); ?></td>
		</tr>
		<tr>
			<td style="padding-left: 215px; padding-top: 5px " class="small">
				<?php $uang = $this->publicmodel->terbilang($data->jml); echo $uang; echo "&nbsp;Rupiah";?>	
			</td>
		</tr>
		<tr>
			<td style="text-transform:capitalize; padding-top:75px; padding-left:500px;">
			<?php echo $kota; echo "{$b}{$b}{$b}{$b}"; echo $tgl;?>	
			</td>
		</tr>
		<tr>
			<td style="text-transform:capitalize; padding-top:100px; padding-left:570px;"><?php echo $data->penyetor; ?></td>
		</tr>
	</table>
</body>
</html>