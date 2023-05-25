<?php include "../koneksi.php";  ?>
<?php include "menubar.php";  ?>

<div class="container">
	<div class="row">
		<form action="pengguna-tambah.php" method="POST">
		<table class="table table-bordered border-primary">
  			
	  				<label>Nama Pengguna</label>
	  				<input type="text" class="form-control" name="nama_user" placeholder="Nama Pengguna" aria-label="Username">
	  				<label>Username</label>
	  				<input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username">
	  				<label>Password</label>
	  				<input type="text" class="form-control" name="password" placeholder="Password" aria-label="Username">
	  				<label>Outlet</label>
	  				<select name="id_outlet" class="form-control">
					  	<option>-- Outlet --</option>
					  	<?php  
					  		$data = mysqli_query($koneksi,"SELECT * FROM tb_outlet");
					  		while ($panggil = mysqli_fetch_array($data)) {
					  	?>
					  	<option value="<?php echo $panggil['id_outlet'] ?>"><?php echo $panggil['nama']; ?></option>
					  <?php } ?>
					  </select>
	  				<label>Role</label>
	  				<select name="role" class="form-control">
	  					<option>-- Role --</option>
	  					<option value="admin">Admin</option>
	  					<option value="kasir">Kasir</option>
	  					<option value="owner">Owner</option>
	  				</select>
	  				
		</table>
		<input type="submit" name="submit" class="btn btn-primary" value="Tambah" />
	</form>
	</div>
</div>

<?php
 
	
	if(isset($_POST['submit'])) {

		$nama_user 		= $_POST['nama_user'];
		$username 		= $_POST['username'];
		$password 		= $_POST['password'];
		$id_outlet 		= $_POST['id_outlet'];
		$role 			= $_POST['role'];
		
		$result = mysqli_query($koneksi, "INSERT INTO tb_user(nama_user,username,password,id_outlet,role) VALUES('$nama_user','$username','$password','$id_outlet','$role')");
		
		header("location: pengguna.php");
	}
	?>
