 <?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    include_once("function/helper.php");

    $page = isset($_GET['page']) ? $_GET['page'] : false;

    $id = isset($_SESSION['id']) ? $_SESSION['id'] : false;
    $level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
    $password = isset($_SESSION['password']) ? $_SESSION['password'] : false;
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : 'username tidak di temukan';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
        <div class="navbar">
            <div class="container-navbar">
                <!-- navbar -->
                <h2 class="nav-brand float-left"><a href="index.php">Manajemen Mekanisasi Pertanian</a></h2>


                <?php
					if($id){
						echo "
                        <ul class='nav-menu float-left'>
                            <li> <a href='".BASE_URL."index.php?page=home'>Dashboard</a></li>
                            <li> <a href='".BASE_URL."index.php?page=pengguna'>Pengguna</a></li>
                            <li> <a href='".BASE_URL."index.php?page=jurusan'>Jurusan</a></li>
                            <li> <a href='".BASE_URL."index.php?page=galeri'>Galeri</a></li>
                            <li> <a href='".BASE_URL."index.php?page=informasi'>Informasi</a></li>
                            <li> <a href='".BASE_URL."index.php?page=artikel'>Artikel</a></li>
                            <li> <a hreaf='#'>Pengaturan <i class='fa fa-caret-down'></a></i>
                                <ul class='dropdown'>
                                    <li><a href='".BASE_URL."index.php?page=identitas-smmp'>Identitas</a></li>
                                    <li><a href='".BASE_URL."index.php?page=tentang-smmp'>Tentang SMMP</a></li>
                                    <li><a href='".BASE_URL."index.php?page=Kepala-Lab'>Kepala Lab</a></li>
                                </ul>
                            </li>
                        <li>
                         <a href='#'>Akun <i class='fa fa-caret-down'></i></a>
     
                         <ul class='dropdown'>
                             <li><a href='http://localhost/testTA/ubah-password.php?username=$username'>Ubah Password</a></li>
                             <li><a href='".BASE_URL."index.php?page=logout'>keluar</a></li>
                         </ul>
                        </li>
                    ";
					} else{
						echo "
                        <ul class='nav-menu float-left'>
                        <li
                        class='dropdown'><a href='".BASE_URL."index.php?page=register'>REGISTER</a>
                        </li>
                        <li
                        class='dropdown'><a href='".BASE_URL."index.php?page=login'>LOGIN</a>
                        </li>
                    ";
					}  
				?>

                <div class="clearfix"></div>
            
            </div>
            
        </div>
        <!--content-->
     <div class="content">
        <?php
            $filename = "$page.php";
            
            if(file_exists($filename)) {
                include_once($filename);
            } else {
                echo "Maaf, file tersebut tidak ada di dalam sistem";
            }
        ?>
    
    </div>       
</body>
</html>
