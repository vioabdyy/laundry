<?php include "../koneksi.php";  ?>
<?php include "menubar.php";  ?>

<div class="container">
	<div class="row">
		<form action="pelanggan-tambah.php" method="POST">
		<table class="table table-bordered border-primary">
  			
	  				<label>Nama Member</label>
	  				<input type="text" class="form-control" name="nama_member" placeholder="Nama Member" aria-label="Username">
	  				<label>Alamat</label>
	  				<input type="text" class="form-control" name="alamat" placeholder="Alamat" aria-label="Username">
  			
	  				<label>Jenis Kelamin</label>
	  				<select name="jenis_kelamin" class="form-control">
	  					<option value="L">Laki-Laki</option>
	  					<option value="P">Perempuan</option>
	  				</select>
	  				<label>Telepon</label>
	  				<input type="text" class="form-control" name="tlp" placeholder="Telepon" aria-label="Username">
	  				
		</table>
		<input type="submit" name="submit" class="btn btn-primary" value="Tambah" />
	</form>
	</div>
</div>

<?php
 
	
	if(isset($_POST['submit'])) {

		$nama_member 	= $_POST['nama_member'];
		$alamat 		= $_POST['alamat'];
		$jenis_kelamin 	= $_POST['jenis_kelamin'];
		$tlp 			= $_POST['tlp'];
		
		$result = mysqli_query($koneksi, "INSERT INTO tb_member(nama_member,alamat,jenis_kelamin,tlp) VALUES('$nama_member','$alamat','$jenis_kelamin','$tlp')");
		
		header("location: pelanggan.php");
	}
	?>
