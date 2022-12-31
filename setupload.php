<?php

  include_once("function/koneksi.php");
  include_once("function/helper.php");

  $author = isset($_POST['author']) ? $_POST['author'] : false;
  $judul = isset($_POST['judul']) ? $_POST['judul'] : false;
  $isi = isset($_POST['isi']) ? $_POST['isi'] : false;
  $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : false;
  
  $query = "INSERT INTO artikel (author, judul, isi, gambar) VALUES('$author', '$judul', '$isi', '$gambar')"; 

  $result = mysqli_multi_query($conn, $query);

  header("location:".BASE_URL."index.php?page=artikel");


