<?php include "../koneksi.php";  ?>
<?php include "menubar.php";  ?>

<div class="container">
	<div class="page-header" align="middle">
			<h3>Data Pelanggan</h3>
	</div>
	<div class="row">
		<a href="pelanggan-tambah.php" class="btn btn-success btn-block">Tambah</a>
		<br>
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Nama</th>
		      <th scope="col">Alamat</th>
		      <th scope="col">Jenis Kelamin</th>
		      <th scope="col">Telepon</th>
		      <th scope="col">Tools</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php 
		    	$sql = "SELECT * FROM tb_member";
		    	$query = mysqli_query($koneksi,$sql);
		    	$no=1;
		    	while ($data = mysqli_fetch_array($query)) {
		    ?>
		    <tr>
		    	<td><?php echo $no; ?></td>
		    	<td><?php echo $data['nama_member']; ?></td>
		    	<td><?php echo $data['alamat']; ?></td>
		    	<td><?php echo $data['jenis_kelamin']; ?></td>
		    	<td><?php echo $data['tlp']; ?></td>
		    	<td><a href="pelanggan-edit.php?id=<?php echo $data['id_member']; ?>" class="btn btn-warning">Edit</a>
		    	<a href="pelanggan-hapus.php?id=<?php echo $data['id_member']; ?>" class="btn btn-danger">Hapus</a></td>
		    </tr>
		    <?php
			    $no++; 
				} 
			?>
		  </tbody>
		</table>
	</div>
</div>