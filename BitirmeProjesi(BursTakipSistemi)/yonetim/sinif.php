<?php

class kasa{


    public function __construct()
    {
        $baglan = new PDO("mysql:host=localhost;dbname=burs","root","");
        $baglan->query("set character set utf8");
        $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $baglan->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        $baglan->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $baglan;
    }

    public function bagissayisi(){
        $baglan = self::__construct();
        $sorgu = $baglan->query("select * from bursveren");
        $verisayi = $sorgu->rowCount();
        return $verisayi;
    }

    public function burssayisi(){
        $baglan = self::__construct();
        $sorgu = $baglan->query("select * from bursalan");
        $verisayi = $sorgu->rowCount();
        return $verisayi;
    }

    public function toplambagis(){
        $baglan = self::__construct();
        $sorgu = $baglan->query("select * from bursveren where bagis");
        $toplambagis = 0;
        foreach($sorgu as $satir){
        $toplambagis += $satir["bagis"];   
    }
        return $toplambagis;
    }

    public function toplamburs(){
        $baglan = self::__construct();
        $sorgu = $baglan->query("select * from bursalan where bursfiyat");
    $toplamburs = 0;
    foreach($sorgu as $satir){
        $toplamburs += $satir["bursfiyat"];
    }
        return $toplamburs;
    }

}

?>