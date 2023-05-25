<?php include "../koneksi.php";  ?>
<?php include "menubar.php";  ?>

<div class="container">
	<div class="row">
		<form action="pelanggan-edit.php" method="POST">
		<table class="table table-bordered border-primary">
  			<?php
  				$id = $_GET['id'];  
  				$sql = "SELECT * FROM tb_member where id_member ='$id' ";
		    	$query = mysqli_query($koneksi,$sql);
		    	$data = mysqli_fetch_array($query);
  			?>
	  				<label>Nama Member</label>
	  				<input type="hidden" name="id_member" value="<?php echo $data['id_member']; ?>">
	  				<input type="text" class="form-control" name="nama_member" value="<?php echo $data['nama_member']; ?>" aria-label="Username">
	  				<label>Alamat</label>
	  				<input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>" aria-label="Username">
  			
	  				<label>Jenis Kelamin</label>
	  				<select class="form-control" name="jenis_kelamin">
						<option value="<?php echo $data['jenis_kelamin']; ?>"><?php echo $data['jenis_kelamin']; ?></option>
							<?php
								if ($data['jenis_kelamin'] == "L" ) {
									echo "<option value='P'>P</option>";
								}else{
									echo "<option value='L'>L</option>";
								}
							?>
					</select>
	  				<label>Telepon</label>
	  				<input type="text" class="form-control" name="tlp" value="<?php echo $data['tlp']; ?>" aria-label="Username">
	  				
		</table>
		<input type="submit" name="update" class="btn btn-primary" value="Edit" />
	</form>
	</div>
</div>

<?php
 
	
	if(isset($_POST['update'])) {

		$id_member 		= $_POST['id_member'];
		$nama_member 	= $_POST['nama_member'];
		$alamat 		= $_POST['alamat'];
		$jenis_kelamin 	= $_POST['jenis_kelamin'];
		$tlp 			= $_POST['tlp'];
		
		$result = mysqli_query($koneksi, "UPDATE tb_member SET nama_member='$nama_member',alamat='$alamat',jenis_kelamin='$jenis_kelamin',tlp='$tlp' WHERE id_member=$id_member");
		
		header("location: pelanggan.php");
	}
	?>
