<?php
$baglan = new PDO("mysql:host=localhost;dbname=odev3","root","");
$baglan->exec("set names utf8");
$baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>