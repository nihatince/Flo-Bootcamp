<?php
require_once("sinif.php");
$dogrulama = new dogrula();

$adsoyad = $_POST["adsoyad"];
$tckimlik = $_POST["tckimlik"];

$dogrulama->tckimlik1($adsoyad,$tckimlik);











?>