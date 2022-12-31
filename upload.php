<?php
    include_once ("index.php");
    include_once("function/koneksi.php");
?>

<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

    $notif = isset($_POST['notif']) ? $_POST['notif'] : false;
    $author = isset($_POST['author']) ? $_POST['author'] : false;
    $judul = isset($_POST['judul']) ? $_POST['judul'] : false;
    $isi = isset($_POST['isi']) ? $_POST['isi'] : false;
    $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : false;
    $create_at = isset($_POST['create_at']) ? $_POST['create_at'] : false;

    if($notif == "require") {
    echo "<div class='notif'>Maaf, kamu harus melengkapi form dibawah ini</div>";
    } 

?>
    <form style=" margin: auto; margin-top: 80px; width: 900px;" action="setupload.php" method="POST" enctype="multipart/form-data">
        <h3>Upload Artikel</h3>
        
        <div class="form-group">
            <label for="exampleFormControlInput1">Author</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="author">
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlInput1">Judul</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="judul">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Isi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi"></textarea>
        </div>

        <div class="custom-file">
            <input type="file" name="gambar" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>

        <button style="margin-top: 20px; width: 90px;" type="submit" class="btn btn-primary btn-block mb-4" name="submit" value="Submit">Upload</button>
    </form>
</body>
</html>