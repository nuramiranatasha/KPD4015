<?php
$connect = mysqli_connect("localhost", "root", "", "florist");

/* COMMAND RALAT:
   Jika sambungan database gagal, pengguna akan
   dialihkan ke custom error page
*/
if (!$connect) {
    header("Location: errorpage.php");
    exit();
}
?>
