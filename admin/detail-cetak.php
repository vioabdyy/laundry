<?php include "../koneksi.php";  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Nota Pembayaran Laundry</title>
	
	<style >
		body{
			font-family: arial;
		}
		.print{
			margin-top: 10px;
		}
		@media print{
			.print{
				display: none;
			}
		}
		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<h3>Badron Site<b><br/>LAPORAN TRANSAKSI LAUNDRY</b></h3>
	<br/>
	<hr/>
	<table border="1" cellspacing="" cellpadding="4" width="100%">
	<tr>
		<th>NO</th>
		<th>Tanggal Order</th>
		<th>Paket Laundry</th>
		<th>Berat Cucian</th>
		<th>Keterangan</th>
	</tr>
	<?php
	$id 	= $_GET['id'];
	$cetak = $koneksi -> query("SELECT * FROM tb_detail_transaksi,tb_transaksi,tb_paket WHERE id_detail='$id' AND tb_detail_transaksi.id_transaksi = tb_transaksi.id AND tb_detail_transaksi.id_paket = tb_paket.id_paket");
	$i=1;
	while($dta = mysqli_fetch_array($cetak)){
	 ?>
	
	<tr>
		<td align="center"><?= $i ?></td>
		<td align="center"><?= $dta['tgl'] ?></td>
		<td align="center"><?= $dta['nama_paket'] ?></td>
		<td align="center"><?= $dta['qty'] ?></td>
		<td align="center"><?= $dta['keterangan'] ?></td>
	</tr>
	<?php $i++; ?>
	

<?php } ?>

	</table>
<table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<BR/>
			<p>Badron , <?= date('d/m/y') ?> <br/>
				Operator,
			<br/>
			<br/>
			<br/>
		<p>__________________________</p>
		</td>
	</tr>
</table>


	<a  href="#" onclick="window.print();"><button class="print">CETAK</button></a>
</body>
</html>
