<?php

    if($id){
        header("location: ".BASE_URL);
    }

?>

<head>
  <link rel="stylesheet" href="style.css">
</head>
    <div class="container-akses">
        <div class="container-user" style="width: 500px !important;
        margin: auto;">
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist" style="margin-top: 70px;">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="<?php echo BASE_URL."index.php?page=login"; ?>" role="tab"
                    aria-controls="pills-login" aria-selected="true">Register</a>
                </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                    <form  action="<?php echo BASE_URL."proses_register.php"; ?>" method="POST">

                        <?php
                            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
                            $nama = isset($_GET['nama']) ? $_GET['nama'] : false;
                            $username = isset($_GET['username']) ? $_GET['username'] : false;

                            if($notif == "require") {
                                echo "<div class='notif'>Maaf, kamu harus melengkapi form dibawah ini</div>";
                            } elseif($notif == "password") {
                                echo "<div class='notif'>Maaf, password yang kamu masukkan tidak sama</div>";
                            } elseif($notif == "username") {
                                echo "<div class='notif'>Maaf, username yang kamu masukkan sudah terdaftar</div>";
                            }
                        ?>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="loginName">Nama Lengkap</label>
                            <input name="nama" type="text" id="loginName" class="form-control" value="<?php echo $nama ?>"/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="loginName">Username</label>
                            <input name="username" type="text" id="loginName" class="form-control" value="<?php echo $username ?>"/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="loginPassword">Password</label>
                            <input name="password" type="password" id="loginPassword" class="form-control" />
                        </div>
                        
                        <div class="form-outline mb-4">
                            <label class="form-label" for="loginPassword">Re-Type Password</label>
                            <input name="re_password" type="password" id="loginPassword" class="form-control" />
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4" name="register" value="Register">Sign up</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Sudah memiliki akun? <a href="<?php echo BASE_URL."index.php?page=login"; ?>">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>