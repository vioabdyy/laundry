<?php include "../koneksi.php";  ?>
<?php include "menubar.php";  ?>

<div class="container">
	<div class="row">
		<form action="outlet-tambah.php" method="POST">
		<table class="table table-bordered border-primary">
  			
	  				<label>Nama Outlet</label>
	  				<input type="text" class="form-control" name="nama" placeholder="Nama Member" aria-label="Username">
	  				<label>Alamat</label>
	  				<input type="text" class="form-control" name="alamat" placeholder="Alamat" aria-label="Username">
  			
	  				<label>Telepon</label>
	  				<input type="text" class="form-control" name="tlp" placeholder="Telepon" aria-label="Username">
	  				
		</table>
		<input type="submit" name="submit" class="btn btn-primary" value="Tambah" />
	</form>
	</div>
</div>

<?php
 
	
	if(isset($_POST['submit'])) {

		$nama 			= $_POST['nama'];
		$alamat 		= $_POST['alamat'];
		$tlp 			= $_POST['tlp'];
		
		$result = mysqli_query($koneksi, "INSERT INTO tb_outlet(nama,alamat,tlp) VALUES('$nama','$alamat','$tlp')");
		
		header("location: outlet.php");
	}
	?>
