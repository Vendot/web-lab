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
        $foto = isset($_POST['foto']) ? $_POST['foto'] : false;
        $keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : false;

        if($notif == "require") {
        echo "<div class='notif'>Maaf, kamu harus melengkapi form dibawah ini</div>";
        } 

    ?>
    
    <form style=" margin: auto; margin-top: 80px; width: 900px;" action="<?php echo BASE_URL."set-upload-galeri.php"; ?>" method="POST">
        <h3>Upload Galeri</h3>
        
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
        </div>

        <div class="custom-file">
            <input type="file" name="foto"  class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>

        <button style="margin-top: 20px; width: 90px;" type="submit" class="btn btn-primary btn-block mb-4" name="submit" value="Submit">Upload</button>
    </form>
</body>
</html>