<?php include "../koneksi.php";  ?>
<?php include "menubar.php";  ?>

<div class="container">
	<div class="row">
		<?php
			$id = $_GET['id'];  
			$sql = "SELECT * FROM tb_user,tb_outlet where tb_user.id_outlet = tb_outlet.id_outlet AND id ='$id' ";
	    	$query = mysqli_query($koneksi,$sql);
	    	$data = mysqli_fetch_array($query);
  		?>
		<form action="pengguna-edit.php" method="POST">
		<table class="table table-bordered border-primary">
  			<input type="hidden" name="id" value="<?php echo $data['id']; ?>">	
  				<label>Nama User</label>
  				<input type="text" class="form-control" name="nama_user" value="<?php echo $data['nama_user']; ?>" >
  				<label>Username</label>
  				<input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" >
  				<label>Password</label>
  				<input type="text" class="form-control" name="password" value="<?php echo $data['password']; ?>" >
	  			<label>Nama Outlet</label>	
		  			<select class="form-control" name="id_outlet">
						<option value="<?php echo $data['id_outlet']; ?>"><?php echo $data['nama']; ?></option>
						<?php 
							$data_outlet = mysqli_query($koneksi,"SELECT * FROM tb_outlet WHERE id_outlet != '$data[id]' ");
							while($output_data= mysqli_fetch_assoc($data_outlet)){
						 ?>
						<option value="<?php echo $output_data['id_outlet']; ?>"><?php echo $output_data['nama']; ?></option>
						<?php } ?>
					</select>
				<label>Role</label>
				<select class="form-control" name="role">
				<option value="<?php echo $data['role']; ?>"><?php echo $data['role']; ?></option>
				<?php
						if ($data['role'] == "admin" ) {
							echo "<option value='kasir'>Kasir</option>";
							echo "<option value='owner'>Owner</option>";
						}elseif ($data['role'] == "kasir" ){
							echo "<option value='admin'>Admin</option>";
							echo "<option value='owner'>Owner</option>";
						}else{
							echo "<option value='admin'>Admin</option>";
							echo "<option value='kasir'>Kasir</option>";
						}
					?>
					
			</select>
	  			
		</table>
		<input type="submit" name="update" class="btn btn-primary" value="Edit" />
	</form>
	</div>
</div>

<?php
 
	
	if(isset($_POST['update'])) {

		$id 			= $_POST['id'];
		$nama_user 		= $_POST['nama_user'];
		$username 		= $_POST['username'];
		$password 		= $_POST['password'];
		$id_outlet 		= $_POST['id_outlet'];
		$role 			= $_POST['role'];
		
		$result = mysqli_query($koneksi, "UPDATE tb_user SET nama_user='$nama_user',username='$username',password='$password',id_outlet='$id_outlet',role='$role' WHERE id=$id");
		
		header("location: pengguna.php");
	}
	?>
