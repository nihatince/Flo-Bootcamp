<?php
session_start();

session_destroy();
// unset($_SESSION["oturum"]);
    setcookie("cerez","", time()-1); //çerez silme
    header("Location: ../kullanici-giris.php");
?>