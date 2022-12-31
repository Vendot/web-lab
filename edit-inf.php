<?php

//   include_once("index.php");
  include_once("function/koneksi.php");
  $id_informasi = isset($_POST['id_informasi']) ? $_POST['id_informasi'] : false;
  $judul = isset($_POST['judul']) ? $_POST['judul'] : false;
  $keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : false;
  $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : false;


?>


<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
        $id = $_GET['id_informasi'];
        $data =mysqli_query($conn,"SELECT * from informasi where id_informasi='$id'") or die (mysqli_error($conn));
        $no = 1;
        while($d = mysqli_fetch_array($data)){
    ?>
    <form style=" margin: auto; margin-top: 80px; width: 900px;" action="move-data-inf.php" method="POST">
        <h3>Edit Informasi</h3>
        
        <div class="form-group">
            <label for="exampleFormControlInput1">Judul</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" value="<?php echo $d['judul']; ?>">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan" value="<?php echo $d['keterangan']; ?>"></textarea>
        </div>

        <div class="custom-file">
            <input type="file" name="gambar"  class="custom-file-input" id="customFile" value="<?php echo $d['gambar']; ?>">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>

        <button style="margin-top: 20px; width: 90px;" type="submit" class="btn btn-primary btn-block mb-4" name="submit" value="Submit">Upload</button>
    </form>
    <?php } ?>
</body>
</html>