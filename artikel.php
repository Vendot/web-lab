<?php

  include_once ("index.php");
  include_once("function/koneksi.php");

?>

<head>
  <link rel="stylesheet" href="style.css">
</head>

<div class="container-artikel">
  <div class="add-artikel">
    <a href="<?php echo BASE_URL."index.php?page=upload"; ?>">
    <button class="btn btn-sm btn-green" style="background-color: #4CAF50; width: 120px; height: 50px; border: none; border-radius:10px;">Upload</button>
    </a>
  </div>

  <?php  
    $data =mysqli_query($conn,"select *from artikel order by id_artikel desc");
    while($d = mysqli_fetch_array($data)){
      ?>
  <div class="nav-artikel">
    <div class="container2">
      <div class="artikel">
        <img src="./asset/lab3.jpeg" style="width: 250px; height: 200px; float: left; margin-right:20px;">
        <div class="detail">
          <div class="author">
            <p><?php echo $d['author']; ?></p>
          </div>

          <div class='action'>
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
                          <a href='http://localhost/testTA/hapus.php?id_artikel={$d['id_artikel']};'>
                            <button style='background-color: #f44336; width: 50px; height: 25px; border: none; border-radius:10px;'>Hapus</button>
                          </a> 
                      "; 
                  }
              }
            }
          ?>
                          <a href="http://localhost/testTA/edit.php?id_artikel=<?php echo $d['id_artikel']; ?>">
                            <button style="background-color: #008CBA; width: 50px; height: 25px; border: none; border-radius:10px;">Edit</button>
                          </a>
          </div>
          <h2><?php echo $d['judul']; ?></h2>
          <p><?php echo $d['create_at']; ?></p>
          <div class="isi">
            <p><?php echo $d['isi']; ?></p>
          </div>
        </div>
      </div>

      
      
    </div>
  </div>
  <?php
      }
    ?>
   
</div>