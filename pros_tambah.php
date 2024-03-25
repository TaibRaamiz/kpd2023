<?php
    include('config.php');
    if (isset($_POST ['hantar']))

    {
        $angkagiliran=$_POST["angkagiliran"];
        $nama_pelajar=$_POST["nama_pelajar"];
        $markah_teori=$_POST["markah_teori"];
        $gred_teori=$_POST["gred_teori"];
        $markah_amali=$_POST["markah_amali"];
        $gred_amali=$_POST["gred_amali"];

        $add=mysqli_query($connect, "INSERT INTO markah_pelajar values ('$angkagiliran','$nama_pelajar','$markah_teori','$gred_teori','$markah_amali','$gred_amali')");
        header('Location:index.php');
    }
?>