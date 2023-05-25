<?php include "../koneksi.php";  ?>
<?php include "menubar.php";  ?>
<h4 class="text-center font-weight-bold m-4"><i>Detail Transaksi</i></h4>
<div class="container">
	<div class="row">
     	<div class="col-lg-12">
        	<div class="bg-white p-5 rounded-lg shadow">
        		<table class="table table-borderless">
				  <thead>
				    <tr class="table-primary">
				      <th scope="col">No</th>
				      <th scope="col">Tanggal Order</th>
				      <th scope="col">Paket Laundry</th>
				      <th scope="col">Berat Cucian</th>
				      <th scope="col">Keterangan</th>
				      <th scope="col">Cetak</th>
				    </tr>
				  </thead>
				  <tbody>
			<?php
				$id 	= $_GET['id'];
				$sql	= "SELECT * FROM tb_detail_transaksi,tb_transaksi,tb_paket WHERE id_transaksi='$id' AND tb_detail_transaksi.id_transaksi = tb_transaksi.id AND tb_detail_transaksi.id_paket = tb_paket.id_paket";
				$query  = mysqli_query($koneksi, $sql);
				$no=1;
				while ($data = mysqli_fetch_array($query)){
			?>
				<tr class="odd gradeX">
					<td><?php echo $no; ?></td>
					<td><?php echo $data['tgl']; ?></td>
					<td><?php echo $data['nama_paket']; ?></td>
					<td><?php echo $data['qty']; ?></td>
					<td><?php echo $data['keterangan']; ?></td>
					<td><a class="btn btn-success" href="detail-cetak.php?id=<?php echo $data['id_detail']; ?>">Cetak</a></td>
			    </tr>
			<?php
				$no++; 
				}
			 ?>
				  </tbody>
				</table>

			</div>
		</div>
	</div>
</div>