<?php

    include_once("function/koneksi.php");
    include_once("function/helper.php");

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    $level = "user";

    unset($_POST['password']);
    unset($_POST['re_password']);
    $dataFrom = http_build_query($_POST);
    echo "SELECT * FROM `pengguna` WHERE username='$username'";

    $query = mysqli_query($conn, "SELECT * FROM `pengguna` WHERE username='$username'");

    if(empty($nama) || empty($username) || empty($password)) {
        header("location:".BASE_URL."index.php?page=register&notif=require&$dataFrom");
    } elseif($password != $re_password) {
        header("location:".BASE_URL."index.php?page=register&notif=password&$dataFrom");
    } elseif(mysqli_num_rows($query) == 1) {
        header("location:".BASE_URL."index.php?page=register&notif=email&$dataFrom");
    } else {
        $password = md5($password);
        mysqli_query($conn, "INSERT INTO  pengguna (nama, username, password, level)
                                        VALUES ('$nama', '$username', '$password', '$level')");
        header("location:".BASE_URL."index.php?page=login");
    };
