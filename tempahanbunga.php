<!DOCTYPE html>
<html>
<head>
    <title>Amali Sem 4 2022</title>

    <style type="text/css">
        body {
            background-color: floralwhite;
        }
        table {
            width: 75%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        th {
            background-color: deeppink;
            color: white;
        }
        a {
            display: inline-block;
            background-color: lightpink;
            padding: 14px 16px;
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
<br><br>

<div style="width:75%; margin:0 auto; text-align:center;">
    <img src="logoflorist.jpg" style="border-radius:20px;">
</div> 

<div style="background-color:antiquewhite; width:75%; margin:0 auto;">
    <a href="index.php">HALAMAN UTAMA</a>
    <a href="logout.php" style="float:right;">LOG KELUAR</a>
</div>

<h2 style="text-align:center;">
    SENARAI TEMPAHAN BUNGA CAHAYA FLORIST
</h2>

<table border="1" cellpadding="5" cellspacing="0" bgcolor="grey">
    <tr>
        <th>ID Pembeli</th>
        <th>Nama Pembeli</th>
        <th>Jenis Bunga</th>
        <th>Jenis Penghantaran</th>
    </tr>

<?php
include 'config.php';

$result = mysqli_query($connect, "SELECT * FROM infobunga")
          or die(mysqli_error($connect));

while ($res = mysqli_fetch_assoc($result)) {
    echo "
        <tr>
            <td>{$res['idpembeli']}</td>
            <td>{$res['namapembeli']}</td>
            <td>{$res['jenisbunga']}</td>
            <td>{$res['jenispenghantaran']}</td>
        </tr>
    ";
}
?>

</table>

</body>
</html>
