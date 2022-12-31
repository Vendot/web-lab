<?php

    session_start();

    unset($_SESSION['status_login']);
    unset($_SESSION['nama']);
    unset($_SESSION['id']);
    unset($_SESSION['username']);

    header("location:index.php?page=login");

?>