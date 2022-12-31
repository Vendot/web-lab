<?php
    include_once("function/koneksi.php");

    $id_informasi = $_POST['id_informasi'];
    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];
    $gambar = $_POST['gambar'];

    $cekData= "SELECT * FROM informasi WHERE id_informasi='$_POST[id_informasi]'";
    $prosescek= mysqli_query($conn, $cekData);

    if (mysqli_num_rows($prosescek)>0) { 
        echo "<script>alert('DATA SUDAH TERSIMPAN DAN TIDAK DAPAT DISIMPAN KEMBALI.');</script>";
        header("location:index.php?page=informasi");
    }
    else { 
        $simpan =  $conn->query("INSERT INTO informasi (id_informasi, judul, keterangan, gambar) values
        ('$id_informasi', '$judul', '$keterangan', '$gambar')");
         echo "<script>alert('Data Berhasil Tersimpan.');</script>";
         header("location:index.php?page=informasi");
    }

?>