<?php 


        $dizi = array(
            "agilSayisi" => 5 ,
            "agilKapasitesi" => 30 ,
            "toplamKoyun" =>73
        );

        if( $dizi["agilSayisi"] < 0 || $dizi["agilKapasitesi"] < 0 || $dizi["toplamKoyun"] < 0){

            echo "Girdiğiniz Değerlerde Hata Var";

        }
        else{
        
        echo "Toplam Ağıl: ".$dizi["agilSayisi"]."<br>";
        $toplamKapasite= $dizi["agilKapasitesi"] * $dizi["agilSayisi"];
        echo "Toplam Kapasitesi: $toplamKapasite <br>";
        echo "Toplam Koyun: ".$dizi["toplamKoyun"]."<br><br>";
        
        $kalanKoyun = $dizi["toplamKoyun"];
        
        for($i=$dizi["agilSayisi"] ; $i>=1 ; $i--){  
        
            if ($kalanKoyun >= $dizi["agilKapasitesi"]){
                
                echo "$i. Ağıl: ".$dizi["agilKapasitesi"]." Koyun <br>";
                $kalanKoyun -= $dizi["agilKapasitesi"];
            }
            else if($kalanKoyun <= $dizi["agilKapasitesi"] ){
                
                echo "$i. Ağıl: ".$kalanKoyun." Koyun <br>";
                $kalanKoyun -= $kalanKoyun;    
            }
        }
        if ($kalanKoyun<$dizi["toplamKoyun"] && $kalanKoyun>0){
            echo "<br>Dışarıda Kalan: $kalanKoyun Koyun";
        }

        }
 



?>



