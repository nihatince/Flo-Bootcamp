<?php

function cevherFiyat($kod){
    $fiyat = 0;
    if($kod == "DMR"){
        return $fiyat = 1500;
    }else if($kod == "KRM"){
        return  $fiyat = 5000;
    }else if($kod == "BKR"){
        return $fiyat = 3000;

    }else if($kod == "KMR"){
        return $fiyat = 500;
    }
}

function taneEtkisi($tane,$fiyat){

    if($tane == 1){
        $sonuc = ($fiyat /100) * 15;
        $sonuc = $fiyat - $sonuc;
        return $sonuc;
    }else if($tane == 2){
        $sonuc = ($fiyat /100) * 10;
        $sonuc = $fiyat - $sonuc;
        return $sonuc;

    }else if($tane == 3){
        $sonuc = $fiyat;
        return $sonuc;
    }
}

function temizlikEtkisi($temizlik,$tanefiyat){
    $sonuc = ($tanefiyat / 100 ) * $temizlik;
    $sonuc = $tanefiyat - $sonuc;
    return $sonuc;
}

?>