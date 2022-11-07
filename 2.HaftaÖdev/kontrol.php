<?php

$ürünad = $_POST["ürünad"];
$ürünfiyat = $_POST["ürünfiyat"];

if ($ürünad=='' || $ürünfiyat==''){
    echo "<script>
        alert(' Ürün Ad Ve Ürün Fiyat Hatalı!');
        window.top.location = 'ödev2.php';
    </script>";
    die();
}

$dosya = fopen("liste.txt","abt");
$sonuc = fwrite($dosya,"$ürünad | $ürünfiyat \n");
fclose($dosya);
if ($sonuc){
    echo "<script>
    alert('Başarılı: $ürünad Kayıt Edildi');
    window.top.location = 'ödev2.php';
</script>";
}else{
    echo "<script>
    alert('Hata: $ürünad Kayıt Edilemedi');
    window.top.location = 'ödev2.php';
</script>";
}


?>