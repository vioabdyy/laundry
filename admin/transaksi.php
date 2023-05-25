<?php include "../koneksi.php";  ?>
<?php include "menubar.php";  ?>

<div class="container">
	<div class="page-header" align="middle">
			<h3>Data Transaksi</h3>
	</div>
	<div class="row">	
		<form action="" method="GET">
		 	<table class="table table-borderless">
		 		<tr>
		 			<td>
		 				<select class="form-control" name="nama">
		 				<option>-- Outlet --</option>
							<?php
								$sql		= "SELECT * FROM tb_outlet ORDER BY nama ASC";
								$query  	= mysqli_query($koneksi, $sql);
								while($data = mysqli_fetch_array($query)){
							?>
								<option value="<?php echo $data["nama"]; ?>"><?php echo $data["nama"]; ?></option>
							<?php } ?>
							</select>
		 			</td>
		 			<td>
		 				<button class="btn btn-success" type="submit" name="cari">Cari</button>
		 			</td>
		 		</tr>
		 	</table>
	 	</form>
	 	<?php 
			if (isset($_GET['nama']) && $_GET['nama'] != ''){
				$data = $koneksi->query("SELECT * FROM tb_outlet WHERE nama = '$_GET[nama]'");
				$dta = mysqli_fetch_assoc($data);
				$nama = $dta['nama'];

		?>
		<a href="transaksi-tambah.php" class="btn btn-info btn-block">Tambah Transaksi</a>
		<br>
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Tanggal Transaksi</th>
		      <th scope="col">Kode Invoice</th>
		      <th scope="col">Nama Pelanggan</th>
		      <th scope="col">Tanggal Bayar</th>
		      <th scope="col">Status</th>
		      <th scope="col">Pembayaran</th>
		      <th scope="col">Aksi</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php 
		    	$sql = "SELECT * FROM tb_transaksi,tb_member where id_outlet= '$dta[id_outlet]' AND tb_transaksi.id_member = tb_member.id_member";
		    	$query = mysqli_query($koneksi,$sql);
		    	$no=1;
		    	while ($data = mysqli_fetch_array($query)) {
		    ?>
		    <tr>
		    	<td><?php echo $no; ?></td>
		    	<td><?php echo $data['tgl']; ?></td>
		    	<td><?php echo $data['kode_invoice']; ?></td>
		    	<td><?php echo $data['nama_member']; ?></td>
		    	<td><?php echo $data['tgl_bayar']; ?></td>
		    	<td><?php echo $data['status']; ?></td>
		    	<td><?php echo $data['dibayar']; ?></td>
		    	<td><a href="detail.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">Detail</a>
		    </tr>
		    <?php
			    $no++; 
				} 
			?>
		  </tbody>
		</table>

		<?php  
			}
		?>
	</div>
</div>