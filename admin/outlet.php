<?php include "../koneksi.php";  ?>
<?php include "menubar.php";  ?>

<div class="container">
	<div class="page-header" align="middle">
			<h3>Data Outlet</h3>
	</div>
	<div class="row">
		<a href="outlet-tambah.php" class="btn btn-success btn-block">Tambah</a>
		<br>
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Nama</th>
		      <th scope="col">Alamat</th>
		      <th scope="col">Telepon</th>
		      <th scope="col">Tools</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php 
		    	$sql = "SELECT * FROM tb_outlet";
		    	$query = mysqli_query($koneksi,$sql);
		    	$no=1;
		    	while ($data = mysqli_fetch_array($query)) {
		    ?>
		    <tr>
		    	<td><?php echo $no; ?></td>
		    	<td><?php echo $data['nama']; ?></td>
		    	<td><?php echo $data['alamat']; ?></td>
		    	<td><?php echo $data['tlp']; ?></td>
		    	<td><a href="outlet-edit.php?id=<?php echo $data['id_outlet']; ?>" class="btn btn-warning">Edit</a>
		    	<a href="outlet-hapus.php?id=<?php echo $data['id_outlet']; ?>" class="btn btn-danger">Hapus</a></td>
		    </tr>
		    <?php
			    $no++; 
				} 
			?>
		  </tbody>
		</table>
	</div>
</div>