<?php
session_start();
include('baglan.php');
$kullanici = $_POST["kullanici"];
$sifre = $_POST["sifre"];

$sorgu = $baglan->query("select * from giris where kullanici='$kullanici' and sifre='$sifre'");


if($sorgu->rowCount()){
    $_SESSION["oturum"] = sha1(md5("var"));
    setcookie("cerez","var",time()+60*60);
    header("Location: panel.php");
}else{
    header("Location: ../kullanici-giris.php");
}


?>