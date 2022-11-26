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
        $kekik = $_POST["kekik"];
        $nane = $_POST["nane"];
        $feslegen = $_POST["feslegen"];
        $reyhan = $_POST["reyhan"];
        $tür = $_POST["tür"];
        $miktar = $_POST["miktar"];
        $taze = $_POST["taze"];
  
?>


    <div id="deneme">
        ** Ot Master v1.0 ***<br><br>
        Kg başı ot fiyatları giriniz:<br><br>
            <?php
                echo "Kekik : $kekik <br><br>";
                echo "Nane : $nane <br><br>";
                echo "Fesleğen : $feslegen <br><br>";
                echo "Reyhan : $reyhan <br><br>";
               
            ?>
        *************************<br><br>
        <?php
            echo "Tür: $tür <br><br>";
            echo "-$tür- miktar (kg): $miktar<br><br>";
            echo "Taze mi?(1=taze): $taze <br><br>";
            if($tür == "Kekik"){
                $islemtutar = otBirimFiyat($miktar,$tür,$kekik);
            }else if($tür == "Nane"){
                $islemtutar = otBirimFiyat($miktar,$tür,$nane);
            }else if($tür == "Fesleğen"){
                $islemtutar = otBirimFiyat($miktar,$tür,$feslegen);
            }else if($tür == "Reyhan"){
                $islemtutar = otBirimFiyat($miktar,$tür,$reyhan);
            }
            
            echo "İşlem Tutar: $islemtutar TL <br><br>";
            $tazeliketkisi = tazelikEtkisi($taze,$tür,$islemtutar);
            echo "Tazelik etkisi: -$tazeliketkisi <br><br>";
            $tutar = $islemtutar - $tazeliketkisi;
            echo "Tutar: $tutar TL<br><br>";
            $kdv = ($tutar/100)*18;
            echo "KDV (%18): $kdv TL <br><br>";
        ?>
        *************************<br><br>
        Fatura: <br><br>
        ---------------------------------------<br><br>
        OT A.Ş.<br><br>
        <?php
            $kactl = $tutar / $miktar;
            echo "* $tür: ".$miktar."kg x ".$kactl."TL = ".$tutar."<br><br>";
            if($taze == 0){
                echo "Taze Değil.<br><br>";
            }else if($taze == 1){
                echo "Taze.<br><br>";
            }
            echo "KDV(%18): $kdv TL <br><br>";
            $geneltoplam = $tutar + $kdv;
            echo "Genel Toplam: $geneltoplam TL";

        ?>

    </div>

<?php
  }
  ?>

</body>
</html>