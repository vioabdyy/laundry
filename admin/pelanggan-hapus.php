<?php

include_once("../koneksi.php");
 
$id = $_GET['id'];
 
$result = mysqli_query($koneksi, "DELETE FROM tb_member WHERE id_member=$id");
 
header("Location: pelanggan.php");
?>