<?php include "../koneksi.php";  ?>
<?php include "menubar.php";  ?>

<div class="container">
	<div class="row">
		<form action="outlet-edit.php" method="POST">
		<table class="table table-bordered border-primary">
  			<?php
  				$id = $_GET['id'];  
  				$sql = "SELECT * FROM tb_outlet where id_outlet ='$id' ";
		    	$query = mysqli_query($koneksi,$sql);
		    	$data = mysqli_fetch_array($query);
  			?>
	  				<label>Nama Member</label>
	  				<input type="hidden" name="id_outlet" value="<?php echo $data['id_outlet']; ?>">
	  				<input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" aria-label="Username">
	  				<label>Alamat</label>
	  				<input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>" aria-label="Username">
	  				<label>Telepon</label>
	  				<input type="text" class="form-control" name="tlp" value="<?php echo $data['tlp']; ?>" aria-label="Username">
	  				
		</table>
		<input type="submit" name="update" class="btn btn-primary" value="Edit" />
	</form>
	</div>
</div>

<?php
 
	
	if(isset($_POST['update'])) {

		$id_outlet 			= $_POST['id_outlet'];
		$nama 			= $_POST['nama'];
		$alamat 		= $_POST['alamat'];
		$tlp 			= $_POST['tlp'];
		
		$result = mysqli_query($koneksi, "UPDATE tb_outlet SET nama='$nama',alamat='$alamat',tlp='$tlp' WHERE id_outlet=$id_outlet");
		
		header("location: outlet.php");
	}
	?>
