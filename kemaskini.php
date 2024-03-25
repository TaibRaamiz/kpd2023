<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rekod Suhu Pelajar</title>
</head>
<style type="text/css">
    h2 {
        text-align: center;
        padding-top: 20px;
    }
    body {
        background-color: white;
    }
</style>
<body>
    <center>
        <h2>BORANG MARKAH PENILAIAN BERTERUSAN KOHORT 2019</h2>

        <table border="0" cellpadding="5" cellspacing="1" bgcolor="white" style="
        padding: 20px; border-top: 1px solid black; border-left: 2px solid black; border-right: 2px solid black; border-bottom: 1px solid black; border-radius: 10px;">

        <form action="" method="post">
            <tr>
                <td>Angka Giliran</td><td>:</td><td> <input type="text" name="angkagiliran" required>
                    <br><br></td>
            </tr>

            <tr>
                <td>Markah Teori</td><td>:</td><td> <input type="text" name="markah_teori">
                    <br><br></td>
            </tr>

            <tr>
                <td>Gred Teori</td><td>:</td><td> <select name="gred_teori">
                    <option value="A+">A+</option>
                    <option value="A">A</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B">B</option>
                    <option value="B-">B-</option>
                    </select><br><br></td>
                    <br><br></td>
            </tr>

            <tr>
                <td>Markah Amali</td><td>:</td><td> <input type="text" name="markah_amali">
                    <br><br></td>
            </tr>

            <tr>
                <td>Gred Amali</td><td>:</td><td> <select name="gred_amali">
                    <option value="A+">A+</option>
                    <option value="A">A</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B">B</option>
                    <option value="B-">B-</option>
                    </select><br><br></td>
                    <br><br></td>
            </tr>

            <tr>
                <td colspan="3">
                    <center><input type="Submit" name="update" name="Update"><br></center>
                </td>
            </tr>
    </center>

</body>

<?php
 include('pros_kemaskini.php')
 ?>
</html>