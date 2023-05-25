<?php 

session_start();

include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];

	$login = mysqli_query($koneksi,"select * from tb_user where username='$username' and password='$password'");
	$cek = mysqli_num_rows($login);
	 
	if($cek > 0){
	 
		$data = mysqli_fetch_assoc($login);
	 
		if($data['role']=="admin"){
	 

			$_SESSION['username'] = $username;
			$_SESSION['role'] = "admin";

			header("location:admin/admin.php");
	 
		}else if($data['role']=="kasir"){

			$_SESSION['username'] = $username;
			$_SESSION['role'] = "kasir";

			header("location:kasir/kasir.php");
	 
		}else if($data['role']=="owner"){

			$_SESSION['username'] = $username;
			$_SESSION['role'] = "owner";

			header("location:owner/owner.php");
	 
		}else{
	 
			header("location:index.php?pesan=gagal");
		}	
	}else{
		header("location:index.php?pesan=gagal");
	}



 
?>