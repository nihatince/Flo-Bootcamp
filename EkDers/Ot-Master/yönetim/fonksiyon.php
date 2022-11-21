<?php

function otBirimFiyat($miktar,$tür,$fiyat){
    
    switch($tür){

        case "Kekik" : 
        $islemtutar = $miktar * $fiyat;
        return $islemtutar; 
        break;

        case "Nane" :
            $islemtutar = $miktar * $fiyat;
            return $islemtutar;
         break;

        case "Fesleğen" :
            $islemtutar = $miktar * $fiyat;
            return $islemtutar;
        break;

        case "Reyhan" :
            $islemtutar = $miktar * $fiyat;
            return $islemtutar;
        break;

        default: 
        break;
    }
}

function tazelikEtkisi($taze,$tür,$islemtutar){
    if($taze == 0){
        switch($tür){

            case "Kekik" : 
                $tazeliketkisi = ($islemtutar/100)*10;
                return $tazeliketkisi;
            break;
    
            case "Nane" :
                $tazeliketkisi = ($islemtutar/100)*20;
                return $tazeliketkisi;
             break;
    
            case "Fesleğen" :
                $tazeliketkisi = ($islemtutar/100)*10;
                return $tazeliketkisi;
            break;
    
            case "Reyhan" :
                $tazeliketkisi = ($islemtutar/100)*25;
                return $tazeliketkisi;
            break;
    
            default: 
            break;
        }
    }else if($taze == 1){
            $tazeliketkisi = 0;
            return $tazeliketkisi;
    }
}

?>