<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2.Hafta Ödev</title>
  </head>
  <body style="text-align:center">
    
  <form method="post" action="kontrol.php">

        <b>Ürün Adı:</b><br>
        <input type="text" name="ürünad">
        <br><br>

        <b>Ürün Fiyatı:</b><br>
        <input type="text" name="ürünfiyat">
        <br><br>

        <input type="submit" value="Gönder">
    </form>
<br><hr><br>

<?php
  session_start();
  $satirlar = array();
  $sonuc = 0;
  $_SESSION["sayac"] = 0;
  $dosya = fopen("liste.txt","rb");
  while(!feof($dosya)){
    $satirlar[] = fgets($dosya);
  }
  fclose($dosya);

  echo "<table border='1' width='100%'>
                <tr>       
                    <td><b>Ürün Adı</b></td>
                    <td><b>Ürün Fiyatı</b></td>
                    <td><b>Adet</b></td>
                </tr> ";
      foreach($satirlar as $satir){
        $veriler = explode(" | ",$satir);
        $_SESSION['sayac']++;
        if ($veriler[0] != "")
            {
            echo "
                <tr>
                    <td>$veriler[0]</td>
                    <td>$veriler[1] TL</td>"
                    ?>
                    <td>
                      <form method="post" action="kontrol2.php">
                          <input type="text" name="adet<?=$_SESSION["sayac"]?>" value="0">
                    </td>
          <?php
               echo "</tr> ";
            }

      }
      echo "</table><br>
      ";
?>
<input name="sepet" style='background-color: Blue ; color:white; float:right; font-size:15px; border:none;padding: 10px 15px' type='submit' value='Ürünü Sepete Ekle'>
      </form>
<br>

<br><br><hr><br>

<b>Sepetiniz:</b>

<?php

  $satirlar = array();
  $_SESSION["sayac"] = 0;
  $dosya = fopen("liste.txt","rb");
  while(!feof($dosya)){
    $satirlar[] = fgets($dosya);
  }
  fclose($dosya);

  echo "<table border='1' width='100%'>
                <tr>       
                    <td><b>Ürün Adı</b></td>
                    <td><b>Adet</b></td>
                    <td><b>Toplam</b></td>
                </tr> ";
      foreach($satirlar as $satir){
        $veriler = explode(" | ",$satir);
        $_SESSION['sayac']++;
        if ($veriler[0] != "")
            {
            echo "
                <tr>
                    <td>$veriler[0]</td>
                    <td>";
                    if(!empty($_SESSION["dizi"][$_SESSION['sayac']]))
                    {
                      echo $_SESSION["dizi"][$_SESSION['sayac']];
                    }else{
                      echo "0";
                    }
                   echo "</td>"
                    ?>
                    <td>
                       <?php
                       if(!empty($_SESSION["dizi"][$_SESSION['sayac']])){
                        $toplam = array();
                        $toplam[$_SESSION['sayac']] = $veriler[1] * $_SESSION["dizi"][$_SESSION['sayac']];
                        echo $toplam[$_SESSION['sayac']]." TL";
                        $sonuc += $toplam[$_SESSION['sayac']];
                       }else
                       {
                        echo "0";
                       }
                       
                        
                       ?>
                    </td>
          <?php
               echo "</tr> ";
            

      }
    }
    ?>
      <tr>
        <td colspan="2"><b>Genel Toplam</b></td>

        <td>
        <?php
          echo "<b>$sonuc TL</b>";
        ?>
        </td>
      </tr>

     </table><br>

     <form method="post" action="temizle.php">

      <input style='background-color: red ; color:white; float:right; font-size:15px; border:none;padding: 10px 15px' type='submit' value='Sepeti Temizle'> 

     </form>
     
<br>

  </body>
</html>
