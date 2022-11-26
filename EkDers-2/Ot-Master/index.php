
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

<b>Kekik Fiyat:</b><br>
<input type="text" name="kekik">
<br><br>

<b>Nane Fiyat:</b><br>
<input type="text" name="nane">
<br><br>

<b>Fesleğen Fiyat:</b><br>
<input type="text" name="feslegen">
<br><br>

<b>Reyhan Fiyat:</b><br>
<input type="text" name="reyhan">
<br><br>

<b>Alıcağı Tür:</b><br>
<select name="tür">
         <option>Kekik</option>
         <option>Nane</option>
         <option>Fesleğen</option>
         <option>Reyhan</option>
      </select>
<br><br>

<b>Alıcağı Miktar:</b><br>
<input type="text" name="miktar">
<br><br>

<b>Taze Mi?(0=Taze Değil - 1=Taze)</b><br>
<input type="text" name="taze">
<br><br>



<input type="submit" value="Gönder">
</form>



</body>
</html>