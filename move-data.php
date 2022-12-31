<?php
    include_once("function/koneksi.php");

    $id_artikel = $_POST['id_artikel'];
    $author = $_POST['author'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $gambar = $_POST['gambar'];

    $cekData= "SELECT * FROM artikel WHERE id_artikel='$_POST[id_artikel]'";
    $prosescek= mysqli_query($conn, $cekData);

    if (mysqli_num_rows($prosescek)>0) { 
        echo "<script>alert('DATA SUDAH TERSIMPAN DAN TIDAK DAPAT DISIMPAN KEMBALI.');</script>";
        header("location:index.php?page=artikel");
    }
    else { 
        $simpan =  $conn->query("INSERT INTO artikel (id_artikel, author, judul, isi, gambar) values
        ('$id_artikel', '$author', '$judul', '$isi', '$gambar')");
         echo "<script>alert('Data Berhasil Tersimpan.');</script>";
         header("location:index.php?page=artikel");
    }

?>