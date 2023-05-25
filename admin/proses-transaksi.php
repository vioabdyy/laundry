<?php
 
	if(isset($_POST['Submit'])) {
		
		$id_outlet		= $_POST["id_outlet"];
		$tgl 			= $_POST['tgl'];
		$kode_invoice 	= $_POST['kode_invoice'];
		$id_member 		= $_POST['id_member'];
		$id_paket		= $_POST['id_paket'];
		$qty 			= $_POST['qty'];
		$tgl_bayar		= $_POST['tgl_bayar'];
		$dibayar 		= $_POST['dibayar'];
		$status			= $_POST["status"];
		
		$result = mysqli_query($koneksi, "INSERT INTO tb_transaksi(id_outlet,tgl,kode_invoice,id_member,tgl_bayar,dibayar,status) VALUES('$id_outlet','$tgl','$kode_invoice','$id_member','$tgl_bayar','$dibayar','$status')");

		$id_transaksi = mysqli_insert_id($koneksi);

		$result2 = mysqli_query($koneksi, "INSERT INTO tb_detail_transaksi(id_transaksi,id_paket,qty,keterangan)VALUES('$id_transaksi','$id_paket','$qty','$dibayar')");
		
		 echo "<script type='text/javascript'>document.location.href = 'transaksi.php';</script>";
	}
?>