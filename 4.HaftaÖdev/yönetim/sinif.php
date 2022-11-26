<?php

class tckimlik{
    private $adsoyad;
    private $tckimlik;
    private $kontrol = false;
    private $durum;
    

    public function __construct($adsoyad,$tckimlik){
        $this->adsoyad = $adsoyad;
        $this->tckimlik = $tckimlik;
    }
    public function dogrula(){

        $tekler = 0;
        $ciftler = 0;
        $toplam = 0;
        for($i=0;$i < 9; $i+=2){
            $tekler += $this->tckimlik[$i];
        }

        for($j=1;$j < 9; $j+=2){
            $ciftler += $this->tckimlik[$j];
        }

        for($k=0;$k < 10; $k++){
            $toplam += $this->tckimlik[$k];
        }

        $dizi = array("11111111110","22222222220","33333333330","44444444440","55555555550","66666666660","77777777770","88888888880","99999999990");
        if (in_array($this->tckimlik,$dizi)){
            $this->kontrol = false;
        }

        else if(mb_strlen($this->tckimlik, "utf-8") != 11 ){
            $this->kontrol = false;
        }

        else if(!ctype_digit($this->tckimlik)){
            $this->kontrol = false;
        }
        
        else if($this->tckimlik[0] == 0){
            $this->kontrol = false;
        }

        else if(($tekler * 7 - $ciftler) % 10 != $this->tckimlik[9]){
            $this->kontrol = false;
        }

        else if(($toplam) % 10 != $this->tckimlik[10]){
            $this->kontrol = false;
        }
        else{
            $this->kontrol = true;
        }
        return $this->kontrol;
    }
    public function kaydet(){
        $baglan = new PDO("mysql:host=localhost;dbname=odev4;charset=utf8", "root", "");
        $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if($this->kontrol == true){
            $this->durum = "TC Kimlik geçerli";
        }else{
            $this->durum = "TC Kimlik geçersiz";
        }

        $sorgu = $baglan->prepare("insert into bilgi values (?,?,?,?)");
        $sonuc = $sorgu->execute(array(null,$this->adsoyad,$this->tckimlik,$this->durum));
        if ($sonuc){
            return true;
        }else{
            return false;
        }
    }

    public function liste(){
        $baglan = new PDO("mysql:host=localhost;dbname=odev4;charset=utf8", "root", "");
        $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sorgu = $baglan->query("select * from bilgi");
        foreach($sorgu as $satir){
            echo "<tr> <td>".$satir["id"]."</td>" ; 
            echo "<td>".$satir["adsoyad"]."</td>";
            echo "<td align='center'>".$satir["tckimlik"]."</td>";
            echo "<td align='center'>".$satir["durum"]."</td></tr>";
        }
    }

}

?>