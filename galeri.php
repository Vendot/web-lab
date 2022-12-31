<?php

  include_once("index.php");
  include_once("function/koneksi.php");

?>

<head>
  <link rel="stylesheet" href="style.css">
</head>

<div class="container-galeri">
  <div class="add-artikel">
    <a href="<?php echo BASE_URL."index.php?page=upload-galeri"; ?>">
    <button class="btn btn-sm btn-green" style="background-color: #4CAF50; width: 120px; height: 50px; border: none; border-radius:10px;">Upload</button>
    </a>
  </div>

  <?php  
    $data =mysqli_query($conn,"select *from galeri order by id_galeri desc");
    while($d = mysqli_fetch_array($data)){
  ?>
    
  <div class="nav-galeri">
    <div class="container">
      <div class="galeri">
        <img src="./asset/lab3.jpeg" style="width: 250px; height: 200px;  margin: auto; padding-left: 30px; margin-bottom: 10px !important;">
        <div class="detail">
          <p><?php echo $d['keterangan']; ?></p>
        </div>
      </div>
    </div>
  </div>

  <?php
    }
  ?>
    
</div>