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
		<title>Belajar Bootstrap</title>
		<link href="../css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 navbar navbar-default">
					<div class="navbar-brand">
						JUDUL
					</div>
					<ul class="nav navbar-nav">
						<li class="active"><a href=""><span class="glyphicon glyphicon-list"></span> Home</a></li>
						<li><a href=""><span class="glyphicon glyphicon-list"></span> Pelanggan</a></li>
						<li><a href=""><span class="glyphicon glyphicon-list"></span> Transaksi</a></li>
						<li><a href=""><span class="glyphicon glyphicon-list"></span> Laporan</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
					</ul>
				</div>
				<div class="col-lg-2">
					<div class="col-lg-12 well">
						<img class="img-circle" src="../gambar/mhs.jfif" width="160px">
						<hr>
						<ul class="nav">
							<li class="active"><a href=""><span class="glyphicon glyphicon-list"></span> Menu 1</a></li>
							<li><a href=""><span class="glyphicon glyphicon-list"></span> Menu 2</a></li>
							<li><a href=""><span class="glyphicon glyphicon-list"></span> Menu 3</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-10">
					<div class="col-lg-4 well">
						<img class="img-circle" src="../gambar/mhs.jfif" width="160px">
					</div>
					<div class="col-lg-4 well">
						<img class="img-rounded" src="../gambar/mhs.jfif" width="160px">
					</div>
					<div class="col-lg-4 well">
						<img class="img-thumbnail" src="../gambar/mhs.jfif" width="160px">
					</div>
					<div class="col-lg-12">
						<table class="table table-bordered table-striped table-hover">
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Kelas</th>
							</tr>
							<tr>
								<td>1</td>
								<td>Dia</td>
								<td>XII RPL</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Anda</td>
								<td>XI RPL</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>