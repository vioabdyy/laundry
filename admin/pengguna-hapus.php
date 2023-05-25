<?php

include_once("../koneksi.php");
 
$id = $_GET['id'];
 
$result = mysqli_query($koneksi, "DELETE FROM tb_user WHERE id=$id");
 
header("Location: pengguna.php");
?>