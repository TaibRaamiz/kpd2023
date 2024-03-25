<!DOCTYPE html>

<?php
    include('config.php');
?>

<html>
<head>
    <title>Senarai Markah Pelajar</title>
</head>
    <style>
        h2 {
            text-align: center;
            padding-top: 20px;
        }
        body {
            background-color: white;
        }
    </style>
<body>
    <h2>SENARAI MARKAH PENILAIAN BERTERUSAN KOHORT 2019</h2>
    <center>
        <table border=1 cellpadding=1 cellspacing=0 bgcolor=white>
            <tr>
                <th>Angka Giliran</th>
                <th>Nama Pelajar</th>
                <th>Markah Teori</th>
                <th>Gred Teori</th>
                <th>Markah Amali</th>
                <th>Gred Amali</th>
                <th>Tindakan</th>
            </tr>
<?php
    $papar=mysqli_query($connect, "SELECT * FROM markah_pelajar");
    while($row=mysqli_fetch_array($papar)){
        echo "
            <tr>
                <td>".$row['angkagiliran']."</td>
                <td>".$row['nama_pelajar']."</td> 
                <td>".$row['markah_teori']."</td>
                <td>".$row['gred_teori']."</td>
                <td>".$row['markah_amali']."</td>
                <td>".$row['gred_amali']."</td>
                <td>","<a href=\"kemaskini.php?angkagiliran=".$row['angkagiliran']."
                \" Onclick=>
                Kemaskini</td>
            </tr>
        ";
    }
?>
        </table>
        <p><a href="tambah.php"><button name='tambah' type="submit">&#43;
        TAMBAH REKOD BARU</button></a></p>
    </center>
</body>
</html>