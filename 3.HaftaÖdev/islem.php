<?php
    include("baglan.php");
    $adsoyad = $_POST["adsoyad"];
    $telefon = $_POST["telefon"];
    if(empty($adsoyad && $telefon)){
        echo "<script>
            alert('Lütfen Değerleri Doldurunuz!');
            window.location.href = 'form.php';
        </script>";
    }else{
    $sorgu = $baglan->prepare("insert into bilgi(adsoyad,telefon) values(?,?)");
    $ekle = $sorgu->execute(array($adsoyad,$telefon));
    if($ekle){
        echo "<script>
            alert('Kayıdınız Eklendi');
            window.location.href = 'liste.php';
        </script>";
        
    }else{
        echo "<script>
            alert('Kayıdınız Eklenemedi!');
            window.location.href = 'form.php';
        </script>";
    }
}
    
    
?>