<?php
    include("baglan.php");
?>
<!DOCTYPE html>
<html lang="en">
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

    
    <table border= "1px solid black" align="center" style="width: 100%;font-size:20px">
        <tr>
            
            <th align="left">Adı Soyadı</th>
            <th>Telefon Numarası</th>
            <th>İşlem</th>
        </tr>
        
        <?php
            $sorgu = $baglan->query("select * from bilgi",PDO::FETCH_ASSOC);
            foreach($sorgu as $satir){
                echo "<tr> <td>".$satir["adsoyad"]."</td>";
                echo "<td align='center'>".$satir["telefon"]."</td>";
                echo "<td align='center'><a href='düzenle.php?düzenle=düzenle&id=$satir[id]'>DÜZENLE</a>-<a href='liste.php?sil=sil&id=$satir[id]'>SİL</a></td> </tr>";
            }
            $verisayi = $sorgu->rowCount();
        ?>
        <tr>
            <td align="center" colspan="3">Sistemde Toplam <?=$verisayi?> Kayıt Var</td> 
        </tr>

    </table>
    <?php
    
    if(!empty($_GET["sil"])){
        $sorgu2 = $baglan->prepare("delete from bilgi where id=?");
        $sil = $sorgu2->execute(array($_GET["id"]));
        if($sil){
            echo "<script>
            alert('Kayıdınız Silindi');
            window.location.href = 'liste.php';
        </script>";
        }else{
            echo "<script>
            alert('Kayıdınız Silinemedi!');
            window.location.href = 'liste.php';
        </script>";
        }
    }
?>
    

</body>
</html>