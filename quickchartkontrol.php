<?php
require("quickchartconnection.php");
$eposta=$_POST["inputEmail"];
$sifre=$_POST["inputSifre"];
$sorgula=mysqli_query($baglan,"INSERT INTO kullanicilar(email,password) VALUES ('".$eposta."','".$sifre."')");
if($sorgula===TRUE){

	echo "Hoşgeldiniz";
}
else{
	echo "Hata";

}
?>
