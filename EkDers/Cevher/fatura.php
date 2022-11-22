<?php
include_once 'yönetim/fonksiyon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Fatura</title>
</head>
<body>
    
<?php
    if($_POST){
        $ad = $_POST["ad"];
        $soyad = $_POST["soyad"];
        $kod = $_POST["kod"];
        $tane = $_POST["tane"];
        $temizlik = $_POST["temizlik"];
        $miktar = $_POST["miktar"];

?>


    <div id="deneme">
        ** Cevher v1.0 ***<br><br>
        * Müşteri'nin<br><br>
        <?php
        echo "Adı : $ad <br><br>";
        echo "Soyadı: $soyad <br><br>";
        echo "* Cevher'in <br><br>";
        echo "Kodu: $kod <br><br>";
        echo "Tane büyüklüğü: $tane <br><br>";
        echo "Temizlik oranı: $temizlik <br><br>";
        echo "Miktar (ton): $miktar <br><br>";
        echo "<b style='color:black'>**************************</b><br><br><br>";
        echo "*******Fatura*******<br><br>";
        echo "Alıcı: $ad $soyad <br><br><br>";
        if($kod == "DMR"){
            echo "Cevher türü: Demir <br><br>";
        }else if($kod == "KRM"){
            echo "Cevher türü: Krom <br><br>";
        }
        else if($kod == "BKR"){
            echo "Cevher türü: Bakır <br><br>";
        }else if($kod == "KMR"){
            echo "Cevher türü: Kömür <br><br>";
        }

        echo "Normal Birim Fiyat: ".cevherFiyat($kod)."TON/TL <br><br>";

        if($tane == "1"){
            echo "Tane: Erik (-%15) <br><br>";
        }else if($tane == "2"){
            echo "Tane: Portakal (-%10) <br><br>";
        }
        else if($tane == "3"){
            echo "Tane: Karpuz (-%0) <br><br>";
        }
        $fiyat = cevherFiyat($kod);

        if($tane == 1){
            echo "Erik Fiyat: ".taneEtkisi($tane,$fiyat)."<br><br>";
        }else if($tane == 2){
            echo "Poırtakal Fiyat: ".taneEtkisi($tane,$fiyat)."<br><br>";
    
        }else if($tane == 3){
            echo "Karpuz Fiyat: ".taneEtkisi($tane,$fiyat)."<br><br>";
        }
        $taneetkisi =taneEtkisi($tane,$fiyat);
        echo "Temizlik: %$temizlik , Etkisi:  - ".temizlikEtkisi($temizlik,$taneetkisi)."<br><br>";
        echo "Temizlik Etkisi Sonrası <br><br>";

        $birimfiyat = $taneetkisi - temizlikEtkisi($temizlik,$taneetkisi);
        echo "Birim fiyat: $birimfiyat TON/TL<br><br>";

        $toplam = $birimfiyat * $miktar;
        echo "Toplam: $toplam <br><br>";

        $kdv = ($toplam /100) * 8;
        echo "KDV (%8) : $kdv <br><br>"; 

        $geneltoplam = $toplam + $kdv;
        echo "Genel Toplam: $geneltoplam <br><br><br>";

        echo "Mega Madencilik, 2022 <br><br>";
        echo "***********************";

        ?>

    </div>

<?php
  }
  ?>

</body>
</html>