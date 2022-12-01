<?php 
  
  require ("baglan.php");
  include ("sinif.php");
  $sinif = new kasa();
   
   if($_POST){

   	  $id =  $_POST['id'];
      $adsoyad  = $_POST['adsoyad'];
      $telefon  = $_POST['telefon'];
      $email  = $_POST['email'];
      $bagis  = $_POST['bagis'];

      $sorgu = $baglan->query("select * from bursveren where id=$id");
      $cikti = $sorgu->fetch(PDO::FETCH_ASSOC);
      $eskibagis=$cikti["bagis"];
      $toplamkasa = ($sinif->toplambagis()) - ($sinif->toplamburs());
      $bagisfark = $eskibagis - $bagis;
      $toplamkasa = $toplamkasa - $bagisfark;
      
      if($toplamkasa<0){
        echo "<script>
            alert('Kasanızda Verceğiniz Burs Kadar Para Bulunmamaktadır!');
            window.location.href = 'burs.php';
            </script>";
      }else{
            $sorgu = $baglan->prepare('update bursveren set 
         adsoyad = :adsoyad,
         telefon = :telefon,
         email = :email, 
         bagis = :bagis where id = :id
      	');

      $sorgu->execute([
          'adsoyad' => $adsoyad,
          'telefon' => $telefon,
          'email' => $email,
          'bagis' => $bagis,
          'id' => $id
      ]);
      }
      
      

          
}

?>