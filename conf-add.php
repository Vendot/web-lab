<?php
    include_once("function/koneksi.php");

    $author = isset($_POST['author']) ? $_POST['author'] : false;
    $judul = isset($_POST['judul']) ? $_POST['judul'] : false;
    $isi = isset($_POST['isi']) ? $_POST['isi'] : false;
    $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : false;

    $cekData= "SELECT * FROM artikel WHERE id_artikel='$_POST[id_artikel]'";
    $prosescek= mysqli_query($conn, $cekData);

    if (mysqli_num_rows($prosescek)>0) { 
        echo "<script>alert('DATA SUDAH TERSIMPAN DAN TIDAK DAPAT DISIMPAN KEMBALI.');</script>";
        header("location:index.php?page=artikel");
    }
    else { 
        $simpan =  $conn->query("INSERT INTO artikel (author, judul, isi, gambar) values
        ('$author', '$judul', '$isi', '$gambar')");
         echo "<script>alert('Data Berhasil Tersimpan.');</script>";
         header("location:index.php?page=artikel");
    }

?>