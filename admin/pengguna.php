<?php include "../koneksi.php";  ?>
<?php include "menubar.php";  ?>

<div class="container">
	<div class="page-header" align="middle">
			<h3>Data Pengguna</h3>
	</div>
	<div class="row">
		<a href="pengguna-tambah.php" class="btn btn-success btn-block">Tambah</a>
		<br>
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Nama</th>
		      <th scope="col">Username</th>
		      <th scope="col">Password</th>
		      <th scope="col">Outlet</th>
		      <th scope="col">Role</th>
		      <th scope="col">Tools</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php 
		    	$sql = "SELECT * FROM tb_user,tb_outlet where tb_user.id_outlet = tb_outlet.id_outlet";
		    	$query = mysqli_query($koneksi,$sql);
		    	$no=1;
		    	while ($data = mysqli_fetch_array($query)) {
		    ?>
		    <tr>
		    	<td><?php echo $no; ?></td>
		    	<td><?php echo $data['nama_user']; ?></td>
		    	<td><?php echo $data['username']; ?></td>
		    	<td><?php echo $data['password']; ?></td>
		    	<td><?php echo $data['nama']; ?></td>
		    	<td><?php echo $data['role']; ?></td>
		    	<td><a href="pengguna-edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
		    	<a href="pengguna-hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a></td>
		    </tr>
		    <?php
			    $no++; 
				} 
			?>
		  </tbody>
		</table>
	</div>
</div>