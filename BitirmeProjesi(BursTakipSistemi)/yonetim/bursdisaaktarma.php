<?php
include ("baglan.php");

$sorgu = $baglan->query("select * from bursalan order by id asc");

    $sinir = "-";
    $dosyaadi = "bursiyer-verileri_".date('Y-m-d').".csv";

    $ac = fopen('php://memory','w');
    $alanlar = array('ID','AD SOYAD','TELEFON','EMAIL','BURS');
    fputcsv($ac,$alanlar,$sinir);
    while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)){

        $satirverisi = array($satir['id'],$satir['adsoyad'],$satir['telefon'],$satir['email'],$satir['bursfiyat']);
        fputcsv($ac,$satirverisi,$sinir);

    }
    fseek($ac,0);
    header('Content-Encoding: UTF-8');
    header('Content-type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename="'.$dosyaadi.'";');
    fpassthru($ac);
    fclose($ac);

?>