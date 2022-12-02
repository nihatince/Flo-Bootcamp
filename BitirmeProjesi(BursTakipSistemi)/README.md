# Burs Takip Sistemi

## Projenin İçeriği <br/><br/>
### Kullanıcı Giriş Sayfası <br/>
**-Bu sayfa admin giriş sayfasıdır. Admin , Kullanıcı Adını ve Şifresini girdikten sonra panele yönlendirilir.**<br/><br/>
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


