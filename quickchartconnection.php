<?php
$baglan=mysqli_connect("localhost","root","root","chart");

if (!$baglan) {
    echo "Hata: Veritabanına bağlanılamadı."
    .mysqli_connect_error();
    exit;
}
?>
