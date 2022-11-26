<?php
include("yönetim/baglan.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sepet Uygulaması</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#"><h2><-NhT-></h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><h5>Ürünler</h5></a>
      </li>   
    </ul>
    
    
   <?php 
      $sorgu = $baglan->query("select * from sepetim",PDO::FETCH_ASSOC);
      $verisayi = $sorgu->rowCount();
      if($verisayi > 0){
        echo "<a href='yönetim/sepetim.php'><button class='btn btn-success my-2 my-sm-0' type='button'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-basket' viewBox='0 0 16 16'>
        <path d='M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z'/>
      </svg> Sepetim ($verisayi)</button></a>";
      }
      else{
        echo "<a href='yönetim/sepetim.php'><button class='btn btn-danger my-2 my-sm-0' type='button'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-basket' viewBox='0 0 16 16'>
        <path d='M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z'/>
      </svg> Sepetim ($verisayi)</button></a>";
      }

   ?>
   
    
    
    
  </div>  
</nav>
<br>

<br><br><<h2 style='text-align:center'><b><u>ÜRÜNLER</u></b></h2>

<section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
            </div>
            <div class="row">

<?php

  $sorgu = $baglan->query("select * from icerik");
  while($satir = $sorgu->fetchObject()){
?>

            <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                            <img src="img/<?=$satir->resim?>" class="card-img-top" style="width: 350px;height:260px" alt="...">
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right"><b><?=$satir->fiyat?> TL</b></li>
                            </ul>
                            <a  class="h2 text-decoration-none text-dark"><?=$satir->baslik?></a>
                        </div>
                        
                        <form action="yönetim/islem.php?hareket=ekle&id=<?=$satir->id?>" method="POST" align="center">

                            <select class="form-control" id="sel1" name="adet<?=$satir->id?>">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                            <input type="submit" class="btn btn-info" value="Sepete Ekle" name="<?=$satir->id?>">
                        
                        </form>
                    </div>
            </div>

<?php
  }
?>
              
                

                
                
            </div>
        </div>
    </section>






</body>
</html>