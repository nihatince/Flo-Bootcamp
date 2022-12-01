<?php
include("baglan.php");
if($_POST){
    $adsoyad =  $_POST["adsoyad"];
    $telefon = $_POST["telefon"];
    $email = $_POST["email"];
    $bagis =$_POST["bagis"];
    if($adsoyad==null || $telefon==null || $email==null || $bagis==null){
        header("location:bagisekle.php");
    }else{
        $sorgu = $baglan->prepare("insert into bursveren values(?,?,?,?,?)");
        $ekle = $sorgu->execute(array(null,$adsoyad,$telefon,$email,$bagis));
        if($ekle){
            echo "<script>
            alert('Bağış Eklendi');
            window.location.href = 'burs.php';
            </script>";
        }
    }


}


?>