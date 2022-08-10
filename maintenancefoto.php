<?php

    include "koneksi.php";

    $jmlh=mysqli_query($conn, "SELECT * FROM maintenance WHERE 1");
    $num=mysqli_num_rows($jmlh);
    $id=$num;

    $myimage = 'Maintenance('.$id.')';
    define('UPLOAD_DIR', 'cam/Maintenance/');
    $image_parts = explode(";base64,", $_POST['imagedata']);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file = UPLOAD_DIR . $myimage . '.jpg';
    file_put_contents($file, $image_base64);
    

    $update=mysqli_query($conn, "UPDATE maintenance SET foto='$file' WHERE id=$id");


?>