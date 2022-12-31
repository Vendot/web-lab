<?php

//   include_once("index.php");
  include_once("function/koneksi.php");
  $id_artikel = isset($_POST['id_artikel']) ? $_POST['id_artikel'] : false;
  $author = isset($_POST['author']) ? $_POST['author'] : false;
  $judul = isset($_POST['judul']) ? $_POST['judul'] : false;
  $isi = isset($_POST['isi']) ? $_POST['isi'] : false;
  $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : false;

?>


<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    

    <?php
        $id = $_GET['id_artikel'];
        $data =mysqli_query($conn,"SELECT * FROM artikel WHERE id_artikel ='$id' ") or die (mysqli_error($conn));
        $no = 1;
        while($d = mysqli_fetch_array($data)){
    ?>

    <form style=" margin: auto; margin-top: 80px; width: 900px;" action="move-data.php" method="POST">
        <h3>Edit Artikel</h3>
        
        <div class="form-group">
            <label for="exampleFormControlInput1">Author</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="author" value="<?php echo $d['author']; ?>">
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlInput1">Judul</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" value="<?php echo $d['judul']; ?>">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Isi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi" value="<?php echo $d['isi']; ?>"></textarea>
        </div>

        <div class="custom-file">
            <input type="file" name="gambar" class="custom-file-input" id="customFile" value="<?php echo $d['gambar']; ?>">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>

        <button style="margin-top: 20px; width: 90px;" type="submit" class="btn btn-primary btn-block mb-4" name="submit" value="Submit">Upload</button>
    </form>
    <?php } ?>
</body>
</html>