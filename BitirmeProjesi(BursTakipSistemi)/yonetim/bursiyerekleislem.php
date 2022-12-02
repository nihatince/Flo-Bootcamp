<?php
include("baglan.php");
include("sinif.php");
$sinif = new kasa();
if($_POST){
    $adsoyad =  $_POST["adsoyad"];
    $telefon = $_POST["telefon"];
    $email = $_POST["email"];
    $burs =$_POST["burs"];
    if($adsoyad==null || $telefon==null || $email==null || $burs==null){
        header("location:bursiyerekle.php");
    }else{
        $toplamkasa = 0;
        $toplamkasa = ($sinif->toplambagis()) - ($sinif->toplamburs());
        $toplamkasa = $toplamkasa - $burs;
        if($toplamkasa<0){
            echo "<script>
            alert('Kasanızda Verceğiniz Burs Kadar Para Bulunmamaktadır!');
            window.location.href = 'bursiyerekle.php';
            </script>";
        }else{
            $sorgu = $baglan->prepare("insert into bursalan values(?,?,?,?,?)");
            $ekle = $sorgu->execute(array(null,$adsoyad,$telefon,$email,$burs));
            if($ekle){
                echo "<script>
                alert('Burs Eklendi');
                window.location.href = 'bursalan.php';
                </script>";
            }
        }
        
    }


}


?>