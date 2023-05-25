<?php include "../koneksi.php";  ?>
<?php include "menubar.php";  ?>

<div class="container">
	<div class="page-header" align="middle">
			<h3>Data Paket Cucian</h3>
	</div>
	<div class="row">
		<a href="paket-tambah.php" class="btn btn-success btn-block">Tambah</a>
		<br>
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Nama Outlet</th>
		      <th scope="col">Jenis</th>
		      <th scope="col">Nama Paket</th>
		      <th scope="col">Harga</th>
		      <th scope="col">Tools</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php 
		    	$sql = "SELECT * FROM tb_paket,tb_outlet where tb_paket.id_outlet = tb_outlet.id_outlet";
		    	$query = mysqli_query($koneksi,$sql);
		    	$no=1;
		    	while ($data = mysqli_fetch_array($query)) {
		    ?>
		    <tr>
		    	<td><?php echo $no; ?></td>
		    	<td><?php echo $data['nama']; ?></td>
		    	<td><?php echo $data['jenis']; ?></td>
		    	<td><?php echo $data['nama_paket']; ?></td>
		    	<td><?php echo $data['harga']; ?></td>
		    	<td><a href="paket-edit.php?id=<?php echo $data['id_paket']; ?>" class="btn btn-warning">Edit</a>
		    	<a href="paket-hapus.php?id=<?php echo $data['id_paket']; ?>" class="btn btn-danger">Hapus</a></td>
		    </tr>
		    <?php
			    $no++; 
				} 
			?>
		  </tbody>
		</table>
	</div>
</div>