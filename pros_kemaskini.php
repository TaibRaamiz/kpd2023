<?php
include('config.php');
if (isset($_POST['update']))

{
    $angkagiliran = $_POST["angkagiliran"];
    $markah_teori = $_POST["markah_teori"];
    $gred_teori = $_POST["gred_teori"];
    $markah_amali = $_POST["markah_amali"];
    $gred_amali = $_POST["gred_amali"];
    
    $update = mysqli_query($connect, "UPDATE markah_pelajar SET markah_teori='$markah_teori', gred_teori='$gred_teori', markah_amali='$markah_amali', gred_amali='$gred_amali' WHERE angkagiliran='$angkagiliran'");
     header('Location:index.php');
 }
?>