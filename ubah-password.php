<?php
    include "function/koneksi.php";
    if (isset($_GET['username'])) {
        $username = $_GET['username'];
    }
    else {
        die ("Error. No ID Selected! ");    
    }

?>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>



<form action="update-pass.php" method="POST" name="form-ganti-password" enctype="multipart/form-data" style="margin: auto; margin-top: 80px; width: 400px;">
    <h3>Ganti Password</h3>

    <div class="form-outline mb-4">
        <label class="form-label" for="form2Example1">Username</label>
        <input type="text" id="form2Example1" class="form-control" name="username" value="<?=$username?>" readonly/>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Password Lama</label>
        <input type="password" id="form2Example2" class="form-control" name="current_password" />
    </div>
    
    <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Password Baru</label>
        <input type="password" id="form2Example2" class="form-control" name="new_password" />
    </div>
    
    <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Konfirmasi Password Baru</label>
        <input type="password" id="form2Example2" class="form-control" name="konf_password"/>
    </div>
    

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4" name="ganti" value="Ganti" >Ganti</button>

    <!-- Register buttons -->
    <div class="text-center">
        <a href="index.php?page=home">Halaman Utama</a>
    </div>
</form>