<?php 
include_once("function/koneksi.php");
 
$id = $_GET['id_informasi'];
 
mysqli_query($conn,"DELETE FROM informasi WHERE id_informasi='$id'");
 
header("location:index.php?page=informasi");
?>