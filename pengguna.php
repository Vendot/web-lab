<?php

  include_once("function/koneksi.php");
  include_once("index.php");
  $page = isset($_GET['page']) ? $_GET['page'] : false;

?>


<head>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>

  <div class="box">
    <div class="box-header">
      <h1>Pengguna</h1>
    </div>
  </div>
  <div class="container-cont">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Username</th>
        </tr>
      </thead>

      <tbody>

        <?php  
          if(isset($_GET['cari'])){
            $cari =$_GET['cari'];
            $query7 ="SELECT * FROM pengguna
            where nama
            like '%".$cari."%'
            ";


            $data =mysqli_query($conn,$query7);
            $cek =mysqli_num_rows($data);
            if($cek>0){
                echo "Data ditemukan";
            }else{
                echo "data tidak ditemukan";
            }
          }

          else{
            $data =mysqli_query($conn,"select *from pengguna WHERE level='User'");
          } 

          $no = 1;
          while($d = mysqli_fetch_array($data)){
        ?>

        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <td><?php echo $d['nama']; ?></td>
          <td><?php echo $d['username']; ?></td>
        </tr>

        <?php 
        }
        ?>
      </tbody>
    </table>
  </div>
</body>  
