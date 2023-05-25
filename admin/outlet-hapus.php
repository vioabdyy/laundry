<?php

include_once("../koneksi.php");
 
$id = $_GET['id'];
 
$result = mysqli_query($koneksi, "DELETE FROM tb_outlet WHERE id_outlet=$id");
 
header("Location: outlet.php");
?>