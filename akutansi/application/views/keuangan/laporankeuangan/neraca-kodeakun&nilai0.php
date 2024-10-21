      <div>
         <table width ="100%" style ="border-bottom :1px solid black">
            <tbody>
               <tr>
                  <td width ="75%" >
                     <h3 class="notaris"></h3>
                  </td>
                  <td align ="right"><img width="150" src="assets/img/logo/print.png"/ alt=""/></td>
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
                  <td>April 2017</td>
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
		 					?>
					            <tr>
					               <td><?php echo $kode." - ".$kategori['akun'][$i]['nama'][$kategori['Nomor'][$i]][$kode] ?></td>
					               <td style='text-align: right;' class="changemoney"><?php echo $kategori['akun'][$i]['uang'][$kategori['Nomor'][$i]][$kode] ?></td>
					            </tr>
		 					<?php
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
               <td style='text-align: right;'>0</td>
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
					               <td><?php echo $kode." - ".$kategori['akun'][$i]['nama'][$kategori['Nomor'][$i]][$kode] ?></td>
					               <td style='text-align: right;' class="changemoney"><?php echo $kategori['akun'][$i]['uang'][$kategori['Nomor'][$i]][$kode] ?></td>
					            </tr>
		 					<?php
		 				}
	 				}
	 			} ?>
            <tr style='background-color :#c7c6c6; font-weight: bold;'>
               <td>Total Passiva</td>
               <td style='text-align: right;' class="TotalPasiva">0</td>
            </tr>
         </tbody>
      </table>
      <br /><br />