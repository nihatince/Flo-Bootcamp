<?php
include("baglan.php");
$islem = $_GET["hareket"];
$id = $_GET["id"];
$adet = $_POST["adet$id"];



if($islem == "ekle"){
    $sorgu = $baglan->query("select * from icerik where id=$id");
    $satir = $sorgu->fetchObject();

    $sorgu2 = $baglan->query("select * from sepetim where ürünad='$satir->baslik'");
    $satir2 = $sorgu2->fetchObject();
    if($adet > 0){
        
        if($satir2->ürünad == $satir->baslik && $satir2->ürünfiyat == $satir->fiyat){
            $toplamadet = $satir2->ürünadet + $adet;
            $sorgu = $baglan->query("update sepetim SET ürünadet= $toplamadet where ürünad='$satir->baslik'");
            header("Location:../index.php");
        }else{
            $sorgu = $baglan->query("insert into sepetim(ürünad,ürünadet,ürünfiyat,resim) values('$satir->baslik','$adet','$satir->fiyat','$satir->resim')");
            header("Location:../index.php");
        }     
    }
}

if($islem == "sil"){
    $sorgu = $baglan->query("delete from sepetim where id=$id");
    header("location:sepetim.php");
}




?>