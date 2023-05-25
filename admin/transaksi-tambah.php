<?php include "../koneksi.php";  ?>
<?php include "menubar.php";  ?>

<div class="container mt-5">
	<div class="page-header mb-5">
		<h3 align="center">Order Laundry</h3>
	</div>
	<form action="transaksi-tambah.php" method="POST">
		<input type="hidden" name="tgl" value="<?php echo date('Y-m-d'); ?>">
		<input type="hidden" name="status" value="baru">
		<table class="table ">
			<tr>
				<td> Kode Invoice</td>
				<td>
					<input class="form-control" type="text" name="kode_invoice" placeholder="Masukan Kode Invoice">
				</td>
			</tr>
			<tr>
				<td> Nama Outlet</td>
				<td>
					<select name="id_outlet" class="form-control">
					  	<option>-- Pilih Nama Outlet --</option>
					  	<?php  
					  		$data = mysqli_query($koneksi,"SELECT * FROM tb_outlet");
					  		while ($panggil = mysqli_fetch_array($data)) {
					  	?>
					  	<option value="<?php echo $panggil['id_outlet'] ?>"><?php echo $panggil['nama']; ?></option>
					  <?php } ?>
					  </select>	
				</td>
			</tr>
			<tr>
				<td> Nama Pelanggan</td>
				<td>
					<select name="id_member" class="form-control">
					  	<option>-- Pilih Nama Pelanggan --</option>
					  	<?php  
					  		$data = mysqli_query($koneksi,"SELECT * FROM tb_member");
					  		while ($panggil = mysqli_fetch_array($data)) {
					  	?>
					  	<option value="<?php echo $panggil['id_member'] ?>"><?php echo $panggil['nama_member']; ?></option>
					  <?php } ?>
					  </select>	
				</td>
			</tr>
			<tr>
				<td> Paket Laundry</td>
				<td>
					<select name="id_paket" class="form-control">
					  	<option>-- Pilih Paket Laundry --</option>
					  	<?php  
					  		$data = mysqli_query($koneksi,"SELECT * FROM tb_paket");
					  		while ($panggil = mysqli_fetch_array($data)) {
					  	?>
					  	<option value="<?php echo $panggil['id_paket'] ?>"><?php echo $panggil['nama_paket']; ?></option>
					  <?php } ?>
					  </select>
				</td>
			</tr>
			<tr>
				<td> Berat(kg)</td>
				<td>
					<input class="form-control" type="number" name="qty" placeholder="Masukan Berat Pakaian">
				</td>
			</tr>
			<tr>
				<td> Tanggal Bayar</td>
				<td>
					<input class="form-control" type="date" name="tgl_bayar" value="<?= date('Y-m-d') ?>">
				</td>
			</tr>
			<tr>
				<td> Status</td>
				<td>
					<select name="dibayar" class="form-control">
						<option>-- Pilih Status Pembayaran --</option>
						<option value="Lunas">Lunas</option>
						<option value="Belum Lunas">Belum Lunas</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" class="btn btn-primary" value="Tambah" />
				</td>
			</tr>
		</table>
	</form>
</div>

<?php
 
	if(isset($_POST['submit'])) {
		
		$id_outlet		= $_POST["id_outlet"];
		$tgl 			= $_POST['tgl'];
		$kode_invoice 	= $_POST['kode_invoice'];
		$id_member 		= $_POST['id_member'];
		$id_paket		= $_POST['id_paket'];
		$qty 			= $_POST['qty'];
		$tgl_bayar		= $_POST['tgl_bayar'];
		$dibayar 		= $_POST['dibayar'];
		$status			= $_POST["status"];
		
		$result = mysqli_query($koneksi, "INSERT INTO tb_transaksi(id_outlet,tgl,kode_invoice,id_member,tgl_bayar,dibayar,status) 
			VALUES('$id_outlet','$tgl','$kode_invoice','$id_member','$tgl_bayar','$dibayar','$status')");

		$id_transaksi = mysqli_insert_id($koneksi);

		$result2 = mysqli_query($koneksi, "INSERT INTO tb_detail_transaksi(id_transaksi,id_paket,qty,keterangan) 
			VALUES('$id_transaksi','$id_paket','$qty','$dibayar')");
		
		 echo "<script type='text/javascript'>document.location.href = 'transaksi.php';</script>";
	}
?>
