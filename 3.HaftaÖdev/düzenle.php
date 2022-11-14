<?php
    include("baglan.php");
    $düzenle = $_GET["düzenle"];
    $id = $_GET["id"];
    $sorgu = $baglan->query("select * from bilgi where id='$id'");
    $satir = $sorgu->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.Hafta Ödevi</title>
</head>
<body>

    <br>
    <div align="center">
        <a href="form.php">Form</a>-<a href="liste.php">Liste</a>
    </div>
    <br>
    <hr>
    <br>

    <form style="text-align: center;font-size:20px;" method="post" action="">
    <br>
        <b>Adınız Soyadınız:</b><br>
        <input style="width: 300px; height:20px;" type="text" name="adsoyad" value="<?= $satir["adsoyad"] ?>"><br><br>
        <b>Telefon Numaranız:</b><br>
        <input style="width: 300px; height:20px;" type="text" name="telefon" value="<?= $satir["telefon"] ?>"><br><br>

        <input style="color:white; padding:8px 32px;border-color:white;background-color:cornflowerblue; " type="submit" name="gonder" value="Bilgileri Kaydet">
    </form>

    <?php


if($_POST){
    $adsoyad = $_POST["adsoyad"];
    $telefon = $_POST["telefon"];

    $sorgu = $baglan->prepare("update bilgi set adsoyad=?,telefon=? where id='$id'");
    $düzenle = $sorgu->execute(array($adsoyad,$telefon));
    if($düzenle){
        echo "<script>
            alert('Kayıdınız Düzenlendi');
            window.location.href = 'liste.php';
        </script>";
        
    }
}

    
    

    ?>
    
</body>
</html>