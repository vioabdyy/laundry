<!doctype>
<html>
	<?php 
		session_start();
		require("../koneksi.php");
		$username 	= $_SESSION ['username'];
		$role		= $_SESSION ['role'];
		if(!isset($role)){
			echo "<script>window.location='../index.php'</script>";
		}
	 ?>
	<head>
		<title>Badron Site</title>
		<link href="../css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 navbar navbar-default">
					<div class="navbar-brand">
						Badron Site
					</div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="admin.php"> Home</a></li>
						<li><a href="pelanggan.php"> Pelanggan</a></li>
						<li><a href="outlet.php"> Outlet</a></li>
						<li><a href="paket.php"> Paket Cucian</a></li>
						<li><a href="pengguna.php"> Pengguna</a></li>
						<li><a href="transaksi.php"> Transaksi</a></li>
						<li><a href="laporan.php"> Laporan</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>