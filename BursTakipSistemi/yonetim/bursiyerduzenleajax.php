<?php 
  
  require ("baglan.php");
  include ("sinif.php");
  $sinif = new kasa();
   
   if($_POST){

   	  $id =  $_POST['id'];
      $adsoyad  = $_POST['adsoyad'];
      $telefon  = $_POST['telefon'];
      $email  = $_POST['email'];
      $bursfiyat  = $_POST['bursfiyat'];

      $sorgu = $baglan->query("select * from bursalan where id=$id");
      $cikti = $sorgu->fetch(PDO::FETCH_ASSOC);
      $eskiburs=$cikti["bursfiyat"]; //600
      $toplamkasa = ($sinif->toplambagis()) - ($sinif->toplamburs()); //0
      $bursfark = $eskiburs - $bursfiyat; //600 - 700 = -100
      $toplamkasa = $bursfark + $toplamkasa;
      
      if($toplamkasa<0){
        echo "<script>
            alert('Kasanızda Verceğiniz Burs Kadar Para Bulunmamaktadır!');
            window.location.href = 'burs.php';
            </script>";
      }else{
            $sorgu = $baglan->prepare('update bursalan set 
         adsoyad = :adsoyad,
         telefon = :telefon,
         email = :email, 
         bursfiyat = :bursfiyat where id = :id
      	');

      $sorgu->execute([
          'adsoyad' => $adsoyad,
          'telefon' => $telefon,
          'email' => $email,
          'bursfiyat' => $bursfiyat,
          'id' => $id
      ]);
      }
      
      

          
}

?>