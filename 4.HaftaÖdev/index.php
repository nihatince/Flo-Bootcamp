<?php
require_once("yönetim/sinif.php");
$dogrulama = new dogrula();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<br>
<br>
    <form style="text-align: center;font-size:20px;" method="post" action="yönetim/islem.php">
    <br>
        <b>Ad Soyad:</b><br>
        <input style="width: 300px; height:20px;" type="text" name="adsoyad"><br><br>
        <b>TC Kimlik Numaranız:</b><br>
        <input style="width: 300px; height:20px;" type="text" maxlength="11" name="tckimlik"><br><br>

        <input style="color:white; padding:8px 32px;border-color:white;background-color:cornflowerblue; " type="submit" name="gonder" value="Doğrula ve Kaydet">
    </form>
<br><br><br><hr>

<table border= "1px solid black" align="center" style="width: 100%;font-size:20px">
        <tr>
            <th>İD</th>
            <th>Adı Soyadı</th>
            <th>TC Kimlik</th>
            <th>Durum</th>
        </tr>
        
        <?php
            $dogrulama->liste();
        ?>
    </table>
    
</body>
</html>