<?php

    include_once("function/koneksi.php");
    include_once("function/helper.php");

    if (isset($_POST['username'])) {
      $username = $_POST['username'];
      $current_password = md5($_POST['current_password']);
      $new_password = md5($_POST['new_password']);
      
      $query = "SELECT password FROM pengguna WHERE username = '$username'";
      $result = mysqli_query($conn, $query);
      
      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $db_password = $row['password'];
        if ($current_password == $db_password) {
          $query = "UPDATE pengguna SET password = '$new_password' WHERE username = '$username'";
          if (mysqli_query($conn, $query)) {
            echo "Your password has been successfully updated.";
            header("location: ".BASE_URL."index.php?page=home");
          } else {
            echo "Error updating password: " . mysqli_error($conn);
          }
        } else {
        echo "The current password you entered is incorrect.";
        }
      } else {
      echo "Error retrieving current password: " . mysqli_error($conn);
      }
    }
    else {
      die ("Error. No ID Selected! ");    
    }

?>