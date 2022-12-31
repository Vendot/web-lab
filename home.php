<?php

  include_once("index.php");
  $page = isset($_GET['page']) ? $_GET['page'] : false;

?>


<head>
  <link rel="stylesheet" href="style.css">
  <style>
        body {
            background-image: url("asset/labb3.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
    </style>
</head>
  <div class="box">
      <div class="box-header">
          <h1>Dashboard</h1>
      </div>
      <div class="box-body">
          <h3>Selamat Datang </h3>
      </div>
  </div>