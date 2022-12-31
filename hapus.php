<?php 
include_once("function/koneksi.php");
 
$id = $_GET['id_artikel'];
 
mysqli_query($conn,"DELETE FROM artikel WHERE id_artikel='$id'");
 
header("location:index.php?page=artikel");
?>