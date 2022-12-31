<?php

  include_once("function/koneksi.php");
  include_once("function/helper.php");

  $foto = isset($_POST['foto']) ? $_POST['foto'] : false;
  $keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : false;

  $query = "INSERT INTO galeri (foto, keterangan) VALUES('$foto', '$keterangan')";

  $result = mysqli_multi_query($conn, $query);

  header("location:".BASE_URL."index.php?page=galeri");
