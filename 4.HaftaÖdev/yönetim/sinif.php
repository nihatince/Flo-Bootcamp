<?php

    class dogrula{

        public function __construct()
        {
            $baglan = new PDO("mysql:host=localhost;dbname=odev4","root","");
            $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $baglan->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
            $baglan->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $baglan;
        }

        public function tckimlik1($adsoyad,$tckimlik){
            $baglanti = self::__construct();

            if(strlen($tckimlik) == 11){
                $dizi = array();
            for ($i=0 ; $i<=10; $i++){
                $yeni = substr($tckimlik,$i,1);
                $dizi[$i] = $yeni;
            }
                if(!$dizi[0] == 0){
                    $topla1 = 0;
                    $topla2 = 0;
                        for($i=0; $i<9; $i+=2){
                            $topla1 = $topla1 + $dizi[$i];
                        }
                        for($i=1; $i<8; $i+=2){
                            $topla2 = $topla2 + $dizi[$i];
                        }
                        $sonuc = ($topla1 * 7) - $topla2;
                        if($sonuc %10 == $dizi[9]){
                            $topla3 = 0;
                            for($i=0; $i<=9; $i++){
                                $topla3 = $topla3 + $dizi[$i];
                            }
                            if(($topla3 %10) == $dizi[10]){
                                $sorgu = $baglanti->prepare("insert into bilgi values(?,?,?,?)");
                                $sorgu->execute(array(null,$adsoyad,$tckimlik,"TC Kimlik Geçerli"));
                                header("Location:../index.php");
                            }else{
                                $sorgu = $baglanti->prepare("insert into bilgi values(?,?,?,?)");
                                $sorgu->execute(array(null,$adsoyad,$tckimlik,"TC Kimlik Geçersiz"));
                                header("Location:../index.php");
                            }


                        }else{
                            $sorgu = $baglanti->prepare("insert into bilgi values(?,?,?,?)");
                            $sorgu->execute(array(null,$adsoyad,$tckimlik,"TC Kimlik Geçersiz"));
                            header("Location:../index.php");
                        }
                    

                }else{
                            $sorgu = $baglanti->prepare("insert into bilgi values(?,?,?,?)");
                            $sorgu->execute(array(null,$adsoyad,$tckimlik,"TC Kimlik Geçersiz"));
                            header("Location:../index.php"); 
                }
            }
            else{
                $sorgu = $baglanti->prepare("insert into bilgi values(?,?,?,?)");
                $sorgu->execute(array(null,$adsoyad,$tckimlik,"TC Kimlik Geçersiz"));
                header("Location:../index.php"); 
            }
        }

        public function liste(){
            $baglanti = self::__construct();
            $sorgu = $baglanti->query("select * from bilgi");
            foreach($sorgu as $satir){
                echo "<tr> <td>".$satir["id"]."</td>" ; 
                echo "<td>".$satir["adsoyad"]."</td>";
                echo "<td align='center'>".$satir["tckimlik"]."</td>";
                echo "<td align='center'>".$satir["durum"]."</td></tr>";
            }
        }
    }


?>