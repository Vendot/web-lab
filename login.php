<?php
    if($id) {
        // header("location:" .BASE_URL);
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
                    aria-controls="pills-login" aria-selected="true">Login</a>
                </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                    <form  action="<?php echo BASE_URL."proses_login.php"; ?>" method="POST">

                        <?php

                            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

                            if($notif == true){
                                echo "<div class='notif'>Maaf, email atau password yang kamu masukan tidak cocok</div>";
                            }

                        ?>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="loginName">Username</label>
                            <input name="username" type="username" id="loginName" class="form-control" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="loginPassword">Password</label>
                            <input name="password" type="password" id="loginPassword" class="form-control" />
                        </div>

                        <!-- 2 column grid layout -->
                        <div class="row mb-4">
                            <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4" name="login" value="Login">Sign in</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Belum memiliki akun? <a href="<?php echo BASE_URL."index.php?page=register"; ?>">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>