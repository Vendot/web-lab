<?php

  include_once("index.php");
  include_once("function/koneksi.php");

?>

<head>
  <link rel="stylesheet" href="style.css">
</head>

<div class="container-informasi">
  <div class="add-artikel">
    <a href="<?php echo BASE_URL."index.php?page=upload-inf"; ?>">
    <button class="btn btn-sm btn-green" style="background-color: #4CAF50; width: 120px; height: 50px; border: none; border-radius:10px;">Upload</button>
    </a>
  </div>

  <?php  
    $data =mysqli_query($conn,"select *from informasi order by id_informasi desc");
    while($d = mysqli_fetch_array($data)){
      ?>
  <div class="nav-informasi">
    <div class="container">
      <div class="informasi">
        <img src="./asset/lab3.jpeg" style="width: 250px; height: 200px; float: left; margin-right:20px;">
        <div class="detail">
          <?php
            $count = 0;
            $level = mysqli_query($conn, "SELECT level FROM pengguna WHERE username = '". $username."'"); 
            while($lvl = mysqli_fetch_array($level)){
              if($lvl['level'] == "Admin" || $lvl['level'] == "Super Admin") {
                if($count > 0) {
                  continue;
                } else {
                    ++$count;
                      echo "
                        <div class='action'>
                          <a href='http://localhost/testTA/edit-inf.php?id_informasi={$d['id_informasi']};'>
                            <button style='background-color: #008CBA; width: 50px; height: 25px; border: none; border-radius:10px;'>Edit</button>
                          </a>
                          <a href='http://localhost/testTA/hapus-inf.php?id_informasi={$d['id_informasi']};'>
                            <button style='background-color: #f44336; width: 50px; height: 25px; border: none; border-radius:10px;'>Hapus</button>
                          </a>
                        </div>
                      ";
                }
              }
            }
          ?>

          <h2><?php echo $d['judul']; ?></h2>
          <div class="isi">
            <p><?php echo $d['keterangan']; ?></p>
          </div>
        </div>
      </div> 
    </div>
  </div>
  <?php
      }
    ?>
    
</div>