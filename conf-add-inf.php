<?php
    include_once("function/koneksi.php");

    $judul = isset($_POST['judul']) ? $_POST['judul'] : false;
    $keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : false;
    $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : false;

    $cekData= "SELECT * FROM informasi WHERE id_informasi ='$_POST[id_informasi]'";
    $prosescek= mysqli_query($conn, $cekData);

    if (mysqli_num_rows($prosescek)>0) { 
        echo "<script>alert('DATA SUDAH TERSIMPAN DAN TIDAK DAPAT DISIMPAN KEMBALI.');</script>";
        header("location:index.php?page=informasi");
    }
    else { 
        $simpan =  $conn->query("INSERT INTO informasi (judul, keterangan, gambar) values
        ('$judul', '$keterangan', '$gambar')");
         echo "<script>alert('Data Berhasil Tersimpan.');</script>";
         header("location:index.php?page=informasi");
    }

?>