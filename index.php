<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Senarai Tempahan Bunga</title>
    <style>
        body { background-color: floralwhite; }
        table { width: 75%; margin: 0 auto; border-collapse: collapse; }
        th { background-color: deeppink; color: white; }
        td, th { padding: 8px; border: 1px solid black; }
        a {
            display: inline-block;
            background-color: lightpink;
            padding: 10px 14px;
            text-decoration: none;
            color: black;
        }
        a:hover { background-color: hotpink; color: white; }
    </style>
</head>

<body>

<br><br>
<div style="width:75%; margin:0 auto; text-align:center;">
    <img src="logoflorist.jpg" style="border-radius:20px;">
</div>

<div style="background-color:antiquewhite; width:75%; margin:0 auto;">
    <a href="index.php">HALAMAN UTAMA</a>
    <a href="tempahanbunga.php" style="float:right;">LOG KELUAR</a>
</div>

<h2 style="text-align:center;">SENARAI TEMPAHAN BUNGA CAHAYA FLORIST</h2>

<table>
<tr>
    <th>ID Pembeli</th>
    <th>Nama Pembeli</th>
    <th>Jenis Bunga</th>
    <th>Jenis Penghantaran</th>
</tr>

<?php
require_once 'config.php';

// COMMAND RALAT:
// Jika query SQL gagal, redirect ke error page
$sql = "SELECT * FROM infobunga";  // tukar 'infobunga' ke 'bunga' jika itu nama sebenar jadual
$result = mysqli_query($connect, $sql);

if (!$result) {
    header("Location: errorpage.php");
    exit();
}

// Papar data jika berjaya
while ($res = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$res['idpembeli']}</td>
            <td>{$res['namapembeli']}</td>
            <td>{$res['jenisbunga']}</td>
            <td>{$res['jenispenghantaran']}</td>
          </tr>";
}
?>

</table>

</body>
</html>
