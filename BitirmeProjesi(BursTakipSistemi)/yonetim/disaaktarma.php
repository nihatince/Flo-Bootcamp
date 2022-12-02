<?php
include ("baglan.php");

$sorgu = $baglan->query("select * from bursveren order by id asc");

    $sinir = "-";
    $dosyaadi = "bagisci-verileri_".date('Y-m-d').".csv";

    $ac = fopen('php://memory','w');
    $alanlar = array('ID','AD SOYAD','TELEFON','EMAIL','BAGIS');
    fputcsv($ac,$alanlar,$sinir);
    while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)){

        $satirverisi = array($satir['id'],$satir['adsoyad'],$satir['telefon'],$satir['email'],$satir['bagis']);
        fputcsv($ac,$satirverisi,$sinir);

    }
    fseek($ac,0);
    header('Content-Encoding: UTF-8');
    header('Content-type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename="'.$dosyaadi.'";');
    fpassthru($ac);
    fclose($ac);

?>