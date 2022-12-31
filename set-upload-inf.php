<?php

  include_once("function/koneksi.php");
  include_once("function/helper.php");

  $judul = isset($_POST['judul']) ? $_POST['judul'] : false;
  $keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : false;
  $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : false;

  $query = "INSERT INTO informasi (judul, keterangan, gambar) VALUES('$judul', '$keterangan', '$gambar')";

  $result = mysqli_multi_query($conn, $query);

  header("location:".BASE_URL."index.php?page=informasi");
