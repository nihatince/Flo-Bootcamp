<?php
include_once("sinif.php");
$adsoyad = $_POST["adsoyad"];
$tckimlik = $_POST["tckimlik"];

$dogrulama = new tckimlik($adsoyad,$tckimlik);
$dogrulama->dogrula();
$dogrulama->kaydet();

header("Location:../index.php");


?>