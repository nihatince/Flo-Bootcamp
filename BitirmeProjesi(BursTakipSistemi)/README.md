# Burs Takip Sistemi

## Projenin İçeriği <br/><br/>
### Kullanıcı Giriş Sayfası <br/>
**-Bu sayfa admin giriş sayfasıdır. Admin , Kullanıcı Adını ve Şifresini girdikten sonra panele yönlendirilir.**<br/><br/>
**Kullanıcı Adı: Admin**<br/><br/>
**Şifre: 1234**<br/><br/>
![giris fw](https://user-images.githubusercontent.com/116922039/205171262-e627c788-0714-4447-bff1-199170fb2a27.png)<br/><br/>
### Panel Ana Sayfası <br/>
**-Admin Panelinde 5 tane değerimiz mevcuttur. Bunlar *TOPLAM BAĞIŞ , TOPLAM BURS , TOPLAM KASA , BURS ALAN SAYISI ve BURS VEREN SAYISI*'dır.**<br/><br/>
**-Burdaki verileri sinif.php den çekmekdeyiz.**<br/><br/>
![anaekran fw](https://user-images.githubusercontent.com/116922039/205172646-9a78200a-7195-4480-a436-18d8a4bb453f.png)<br/><br/>
### Burs Alanlar Sayfası
**-Bu sayfada burs alanların bilgileri mevcudtur.**<br/><br/>
**-Burdaki bilgileri düzenleyebilir ve silebiliriz.**<br/><br/>
**-Tablonun sol tarafında gördüğünüz *BURSİYER EKLE* butonu ile Bursiyer Ekleyebiliriz.**<br/><br/>
**-Tablonun Sağındaki butonlardan ise listedeki verileri *PDF VE CSV* dosyası olarak bilgisayarımıza sunacaktır.**<br/><br/>
![bursiyerliste fw](https://user-images.githubusercontent.com/116922039/205174051-8d16e2df-f099-446c-ab2a-a8dd21fee07f.png)<br/><br/>
### Bursiyer Düzenle
**-Bursiyerlerin Düzenle sutünunda bulunan icona tıklayarak seçtiğiniz bursiyerin verilerini düzenleyebilirsiniz.**<br/><br/>
***ÖNEMLİ*: Bursiyer aldığı bursu düzenlerken toplam kasa fiyatı dikkate alınmalıdır. Örneğin bursiyerin aldığı bursu 5000 TL yaparsanız ve kasanızda o miktarda para bulunmazsa size uyarı mesajı verir ve verinizi düzenlemez. Sizi düzenle sayfasına tekrar yönlendirir.**<br/><br/> 
**-Buradaki kodlar *AJAX* ile yazıldığı için başka sayfaya gitmeden aynı sayfa içinde düzenleme işlemi yapabilirsiniz.**<br/><br/>
![bursiyerduzenle fw](https://user-images.githubusercontent.com/116922039/205179378-979b3234-8e53-4e29-8202-ac93ad54db19.png)<br/><br/>
### Bursiyer Sil
**-Bursiyerlerin Sil sutünunda bulunan icona tıklayarak seçtiğiniz bursiyerin verilerini silebiliriz.**<br/><br/>
### Bursiyer Ekle Sayfası
**-Bu sayfada bursiyer bilgilerini ve ne kadar burs alacağını girdikten sonra *Bursiyer Ekle* butonuna bastıktan sonra veri eklenecektir**<br/><br/>
***ÖNEMLİ*: Bursiyer eklerken dikkat edeceğimiz şey sayfanın sağ tarafındada bulunan *Kullanılabilir Burs* un içindeki veridir. Eğer ordaki paradan fazla burs verirseniz size uyarı mesajı vererek , sizi Bursiyer Ekle sayfasına yönlendirecek ve veriniz *EKLENMEMİŞ* olucak.**<br/><br/>
![bursiyerekle fw](https://user-images.githubusercontent.com/116922039/205174509-bca387ab-d8c9-47de-8ae6-d56467d44545.png)<br/><br/>
### PDF Dönüştür Butonu
![pdf fw](https://user-images.githubusercontent.com/116922039/205175808-b1eb4e12-51bb-4e25-a342-bee4c9612dcf.png)<br/><br/>
### İçeriği İndir Butonu
![csv fw](https://user-images.githubusercontent.com/116922039/205177121-9e1ba80d-3bf2-410b-a4be-affe2c8c9234.png)<br/><br/>
### Bağış Yapanlar Sayfası
**-Bu sayfada bağış yapanların bilgileri mevcuttur.**<br/><br/>
**-Burdaki bilgileri düzenleyebilir ve silebiliriz.**<br/><br/>
**-Tablonun sol tarafında gördüğünüz *BAĞIŞÇI EKLE* butonu ile Bağışçı Ekleyebiliriz.**<br/><br/>
**-Tablonun Sağındaki butonlardan ise listedeki verileri *PDF VE CSV* dosyası olarak bilgisayarımıza sunacaktır.**<br/><br/>
![bagisciliste fw](https://user-images.githubusercontent.com/116922039/205177913-823a4303-989d-4b9f-a3ce-340b5f9e1731.png)<br/><br/>
### Bağışçı Düzenle
**-Bağışçıların Düzenle sutünunda bulunan icona tıklayarak seçtiğiniz bağışçının verilerini düzenleyebilirsiniz.**<br/><br/>
**-Buradaki kodlar *AJAX* ile yazıldığı için başka sayfaya gitmeden aynı sayfa içinde düzenleme işlemi yapabilirsiniz.**<br/><br/>
![bagisciduzenle fw](https://user-images.githubusercontent.com/116922039/205180112-95a3955c-5580-4290-bd8d-b8ad36bdab36.png)<br/><br/>
### Bağışçı Sil
**-Bursiyerlerin Sil sutünunda bulunan icona tıklayarak seçtiğiniz bursiyerin verilerini silebiliriz.**<br/><br/>
***ÖNEMLİ*: Bağışçıyı silerken kasanızdaki paraya dikkat etmek gerekiyor. Eğer siz kasanızda 0TL den aşağı olucaksa o veriyi silememektedir. Çünkü o zaman kasada açık olmuş oluyor.**<br/><br/>
### Bağışçı Ekle Sayfası
**-Bu sayfada bağışçı bilgilerini ve ne kadar burs verceğini girdikten sonra *Bağışçı Ekle* butonuna bastıktan sonra veri eklenecektir**<br/><br/>
![bagisciekle fw](https://user-images.githubusercontent.com/116922039/205178251-856fd723-f17c-4cd3-b273-e2fa638bd6da.png)<br/><br/>
### PDF Dönüştür Butonu
![pdf2 fw](https://user-images.githubusercontent.com/116922039/205178510-440c7e6e-0089-46dc-a9f9-3f358bab10a2.png)<br/><br/>
### İçeriği İndir Butonu
![csv2 fw](https://user-images.githubusercontent.com/116922039/205178829-e03e906a-9df3-44ae-857d-4b506b5d8cf3.png)<br/><br/>
### Çıkış Butonu 
**-Çıkış butonu ile panel sayfasından çıkış yapılmaktadır.**<br/><br/>
**-Sizi admin giriş sayfasına yönlendirecektir.**<br/><br/>

## KOD İçeriği (Önemli Sayfalar) <br/><br/>
### baglan.php<br/><br/>
**-Bu sayfada php dosyamıza veritabanı bağlantısı yapıyoruz.**
````
<?php

    $baglan = new PDO("mysql:host=localhost;dbname=burs;charset=utf8","root","");
    $baglan->query("set character set utf8");
    $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $baglan->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $baglan->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

?>
````
### giriş.php
**-Bu sayfada admin girişindeki sayfadan aldığımız değerleri çekip kontrol ediyoruz.**<br/>
**-Eğer girdiği değerler veritabanında varsa session oluşturup onu şifreliyoruz ve çerez oluşturuyoruz.Sonrada admin paneline yönlendiriyoruz**<br/>
**-Eğer girdiği değerler veritabanında yoksa yani yanlış kullanıcı adı ve şifreyle giriş yapamaya çalışırsa onu tekrardan giriş sayfasına yönlendiriyoruz.**<br/>

````
<?php
session_start();
include('baglan.php');
$kullanici = $_POST["kullanici"];
$sifre = $_POST["sifre"];

$sorgu = $baglan->query("select * from giris where kullanici='$kullanici' and sifre='$sifre'");


if($sorgu->rowCount()){
    $_SESSION["oturum"] = sha1(md5("var"));
    setcookie("cerez","var",time()+60*60);
    header("Location: panel.php");
}else{
    header("Location: ../kullanici-giris.php");
}


?>
````

### panel.php
**-Bu sayfada ilk başta baglan.php ve sinif.php mizi sayfamıza çağırıyoruz.**<br/>
**-Sonra if ile giriş.php de tanımladığımız session ve çerez varmı diye kontrol ettiriyoruz.Eğer yoksa admin girişine yönlendiriyoruz. Varsa ise sitemizin içine yani panel.php kodları çalışıyor.**<br/>
**-Burada sinif.php de oluşturduğumuz sınıfı ve metotları çağırıyoruz.**<br/>
**-En sonda da toplam kasa değeri için iki metotun değerini birbirinden çıkarıp ekrana yazdırıyoruz.**<br/>

````
<?php
    include ("baglan.php");
    include ("sinif.php");
    $sinif = new kasa();
    session_start();
    if (!($_SESSION["oturum"] == sha1(md5("var")) && $_COOKIE["cerez"] =="var")){
        header("Location: ../kullanici-giris.php");
    }
    
?>
<?=$sinif->toplambagis()?>
<?=$sinif->toplamburs()?>
<?php
    $toplamkasa = 0;
    $toplamkasa = ($sinif->toplambagis()) - ($sinif->toplamburs());
?>
<?=$toplamkasa?>
````

### bursalan.php
**-Burada veritabanımızdan çektiğimiz verileri foreach döngüsü ile sayfamıza listeletiyoruz.**
````
<?php
    $sorgu = $baglan->query("select * from bursalan");
    $sayfano = 0;
    foreach($sorgu as $satir){ 
    $sayfano++;
?>
                <tr id="<?=$satir["id"]?>">
                    <td><?=$sayfano?></td>
                    <td data-target="adsoyad"><?=$satir["adsoyad"]?></td>
                    <td data-target="telefon"><?=$satir["telefon"]?></td>
                    <td data-target="email"><?=$satir["email"]?></td>
                    <td data-target="bursfiyat"><?=$satir["bursfiyat"]?> TL</td>
                    <td style="text-align: center;"><a data-role="update" data-id="<?=$satir['id']?>" href="#"><i class="fas fa-fw fa-pen" style="color: #2A52BE;"></i></a></td>
                    <td style="text-align: center;"><a href='bursalan.php?sil=<?=$satir["id"]; ?>' role='button'><i class="fas fa-fw fa-trash" style="color: red;"></i></a></td>
                </tr>

        <?php
    }
?>
````
<br/><br/>

**-Bu kod satırında listelenen verimizin yanındaki sil butouna tıkladıktan sonra o verinin id sini GET Metodu ile alıp veriyi siliyoruz.**<br/>
````
<?php
if ($_GET) {
        $id = $_GET["sil"];
        $sil = $baglan->prepare("DELETE FROM bursalan WHERE id=?");
        $sil->execute(array($id));
        if ($sil) {
            echo "<script>
            window.location.href = 'bursalan.php';
            </script>";
        } else {
            echo "hata oluştu";
        }
        echo "Silme İşlemi Başarı ile Gerçekleşti";
        echo "<script>
        window.location.href = 'burs.php';
        </script>";
    }


?>
````

### bursekleislem.php
**-Bu kod satırında bursiyer ekleden gelen verileri Post metodu ile çekip boş mu , dolu mu olduklarını kontrol ediyoruz.Eğer boşsa bursiyer ekle sayfasına yönelendiriyoruz.**<br/>
**-Eğer veriler dolu ise tekrar bir kontrolden geçiyoruz verdiğimiz burs kasadaki paradan fazla ise uyarı mesajı verdirip tekrar bursiyer ekle sayfasına yönelendiriyoruz.**<br/>
**-Eğer verdiğimiz burs kasadaki paradan fazla değil ise gelen verileri veritabanımıza kaydetip. Burs alan sayfasına yönlendiriyoruz.**<br/>
````
<?php
include("baglan.php");
include("sinif.php");
$sinif = new kasa();
if($_POST){
    $adsoyad =  $_POST["adsoyad"];
    $telefon = $_POST["telefon"];
    $email = $_POST["email"];
    $burs =$_POST["burs"];
    if($adsoyad==null || $telefon==null || $email==null || $burs==null){
        header("location:bursiyerekle.php");
    }else{
        $toplamkasa = 0;
        $toplamkasa = ($sinif->toplambagis()) - ($sinif->toplamburs());
        $toplamkasa = $toplamkasa - $burs;
        if($toplamkasa<0){
            echo "<script>
            alert('Kasanızda Verceğiniz Burs Kadar Para Bulunmamaktadır!');
            window.location.href = 'bursiyerekle.php';
            </script>";
        }else{
            $sorgu = $baglan->prepare("insert into bursalan values(?,?,?,?,?)");
            $ekle = $sorgu->execute(array(null,$adsoyad,$telefon,$email,$burs));
            if($ekle){
                echo "<script>
                alert('Burs Eklendi');
                window.location.href = 'bursalan.php';
                </script>";
            }
        }
        
    }


}


?>
````
### bursdisaaktarma.php
**-Bu kod satırında ilk başta veritabanımızdan verileri çekiyoruz.**<br/>
**-Aldığımız verileri while döngüsü ile CSV dosyasının içine aktarıyoruz.**<br/>
**-En sondada oluşan CSV dosyasını bilgisayarımıza indirme işlemi yapıyoruz.**<br/>
````
<?php
include ("baglan.php");

$sorgu = $baglan->query("select * from bursalan order by id asc");

    $sinir = "-";
    $dosyaadi = "bursiyer-verileri_".date('Y-m-d').".csv";

    $ac = fopen('php://memory','w');
    $alanlar = array('ID','AD SOYAD','TELEFON','EMAIL','BURS');
    fputcsv($ac,$alanlar,$sinir);
    while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)){

        $satirverisi = array($satir['id'],$satir['adsoyad'],$satir['telefon'],$satir['email'],$satir['bursfiyat']);
        fputcsv($ac,$satirverisi,$sinir);

    }
    fseek($ac,0);
    header('Content-Encoding: UTF-8');
    header('Content-type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename="'.$dosyaadi.'";');
    fpassthru($ac);
    fclose($ac);

?>
````
## Ajax ile Aynı sayfa içinde verileri düzenleme
**-Bu kod JavaScript kodları ile verileri çekiyoruz.** <br/>
**-Save butonuna tıklayınca güncellemesi için value değerlerini alıyoruz.**<br/>
**-En sonda ise Ajax kodları ile verileri yolluyoruz.**<br/>
**-İşlem başarılıysa Liste sayfasında değerlerin güncellenmiş hali gözükmesi için kodları yazıyoruz. İd si eşit olan değere düzenleme işlemi yapıyoruz.**<br/>
````
<script>
   	  
   	  $(function(){

      
   
      $(document).on('click','a[data-role=update]',function(e){
       
       var id = $(this).data('id');  
       var adsoyad   = $('#'+id).children('td[data-target=adsoyad]').text();
       var telefon = $('#'+id).children('td[data-target=telefon]').text();
       var email   = $('#'+id).children('td[data-target=email]').text();
       var bursfiyat = $('#'+id).children('td[data-target=bursfiyat]').text();
       
       $('#adsoyad').val(adsoyad);
       $('#telefon').val(telefon);
       $('#email').val(email);
       $('#bursfiyat').val(bursfiyat);
       
      
       $('#konu_id').val(id);
       $('.modal').modal('toggle');
     
       
     e.preventDefault();

      });
  
     $('#save').click(function(e){
 
      var id       =  $('#konu_id').val();  
      var adsoyad =  $('#adsoyad').val();
      var telefon =  $('#telefon').val();
      var email =  $('#email').val();
      var bursfiyat =  $('#bursfiyat').val();
   
       $.ajax({
        
         url    : 'bursiyerduzenleajax.php',
         method : 'post',
         data   : {adsoyad : adsoyad, telefon : telefon, email : email, bursfiyat : bursfiyat, id : 
         	id},
         success: function(e){

            window.location.reload();
         	$('#'+id).children('td[data-target=adsoyad]').text(adsoyad);
             
         	$('#'+id).children('td[data-target=telefon]').text(telefon);

            $('#'+id).children('td[data-target=email]').text(email);
             
         	$('#'+id).children('td[data-target=bursfiyat]').text(bursfiyat);
             
             
         	 $('.modal').modal('toggle');

         }
        
       });
    
    e.preventDefault();

      
     });


   	  });

   </script>
   ````
### bursiyerduzenleajax.php
**-Bu kod satırında ajax ile aldığımız değerleri bir değişkene atıyoruz.**<br/>
**-Veritabanımızdan eski burs verisini çekiyoruz. Eski burs değeri ile yeni burs değerini birbirinden çıkarıyoruz. Sonrada bu farkla toplam kasa değerini toplayıp kasada açık olup olmadığını kontrol ediyoruz.**<br/>
**-Eğer açık varsa bir uyarı mesajı verip burs alan sayfasına yönlendiriyoruz.**<br/>
**-Eğer açık yoksa yeni aldığımız değerleri veritabanımızda güncelliyoruz.**<br/>
````
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
            window.location.href = 'bursalan.php';
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
````
## cikis.php
**-Bu kod satırında Sessionları ve çerez dosyasını silip admin giriş sayfasına yönlendiriyoruz.**
````
<?php
session_start();

session_destroy();
    setcookie("cerez","", time()-1); 
    header("Location: ../kullanici-giris.php");
?>
````
