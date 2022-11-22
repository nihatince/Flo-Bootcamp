
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Ot Master</title>
</head>
<body>

<form method="post" action="fatura.php" style="text-align:center">
<b>Müşteri Bilgileri</b><br><hr>
<b>Adı:</b><br>
<input type="text" name="ad">
<br><br>

<b>Soyadı:</b><br>
<input type="text" name="soyad">
<br><br><hr>

<b>Cevher Bilgileri</b><br><hr>
<b>Kodu:</b><br>
<select name="kod">
         <option>DMR</option>
         <option>KRM</option>
         <option>BKR</option>
         <option>KMR</option>
      </select>
<br><br>

<b>Tane Büyüklüğü:</b><br>
<input type="text" name="tane">
<br><br>

<b>Temizlik Oranı:</b><br>
<input type="text" name="temizlik">
<br><br>

<b>Miktar (ton):</b><br>
<input type="text" name="miktar">
<br><br>



<hr>
<input type="submit" value="Gönder">
<hr>
</form>



</body>
</html>