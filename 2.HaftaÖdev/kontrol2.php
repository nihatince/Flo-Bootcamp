<?php
session_start();
$adet=$_SESSION["dizi"];

if(empty($_SESSION["dizi"])){
    $adet = array();
    for($i=1; $i < $_SESSION["sayac"]; $i++){
        
        $adet[$i] = $_POST["adet".$i];
    }
}
else{
    for($i=1; $i < $_SESSION["sayac"]; $i++){
        
        $adet[$i] += $_POST["adet".$i];
    }
}
  
$_SESSION["dizi"]=$adet;
header("Location: ödev2.php");



    
 


?>