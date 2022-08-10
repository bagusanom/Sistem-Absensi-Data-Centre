<?php

    include "koneksi.php";    

    $waktu = date("Y-m-d H:i:s");
    $id=$_GET['id'];

    $update=mysqli_query($conn, "UPDATE maintenance SET status=FALSE, waktu_keluar='$waktu' WHERE id='$id'");

    header("Location: visitor.php");

?>