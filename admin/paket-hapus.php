<?php

include_once("../koneksi.php");
 
$id = $_GET['id'];
 
$result = mysqli_query($koneksi, "DELETE FROM tb_paket WHERE id_paket=$id");
 
header("location: paket.php");
?>