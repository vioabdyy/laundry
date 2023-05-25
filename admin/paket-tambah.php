<?php include "../koneksi.php";  ?>
<?php include "menubar.php";  ?>

<div class="container">
	<div class="row">
		<form action="paket-tambah.php" method="POST">
		<table class="table table-bordered border-primary">
  			
	  				<label>Nama Outlet</label>
	  				<select name="id_outlet" class="form-control">
					  	<option>-- Outlet --</option>
					  	<?php  
					  		$data = mysqli_query($koneksi,"SELECT * FROM tb_outlet");
					  		while ($panggil = mysqli_fetch_array($data)) {
					  	?>
					  	<option value="<?php echo $panggil['id_outlet'] ?>"><?php echo $panggil['nama']; ?></option>
					  <?php } ?>
					  </select>
	  				<label>jenis</label>
	  				<select name="jenis" class="form-control">
	  					<option value="kiloan">Kiloan</option>
	  					<option value="selimut">Selimut</option>
	  					<option value="bed_cover">Bed Cover</option>
	  					<option value="kaos">Kaos</option>
	  				</select>
  			
	  				<label>Nama Paket</label>
	  				<input type="text" class="form-control" name="nama_paket" placeholder="Nama Paket" aria-label="Username">
	  				<label>Harga</label>
	  				<input type="number" class="form-control" name="harga" placeholder="Harga" aria-label="Username">
	  				
		</table>
		<input type="submit" name="submit" class="btn btn-primary" value="Tambah" />
	</form>
	</div>
</div>

<?php
 
	
	if(isset($_POST['submit'])) {

		$id_outlet			= $_POST['id_outlet'];
		$jenis 				= $_POST['jenis'];
		$nama_paket 		= $_POST['nama_paket'];
		$harga				= $_POST['harga'];
		
		$result = mysqli_query($koneksi, "INSERT INTO tb_paket(id_outlet,jenis,nama_paket,harga) VALUES('$id_outlet','$jenis','$nama_paket','$harga')");
		
		header("location: paket.php");
	}
	?>
