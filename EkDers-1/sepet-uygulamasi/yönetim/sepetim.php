<?php
include("baglan.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sepet Uygulaması</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
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
        <a class="nav-link" href="../index.php"><h5>Ürünler</h5></a>
      </li>   
    </ul>
    
    
   <?php 
      $sorgu = $baglan->query("select * from sepetim",PDO::FETCH_ASSOC);
      $verisayi = $sorgu->rowCount();
      if($verisayi > 0){
        echo "<a href='sepetim.php'><button class='btn btn-success my-2 my-sm-0' type='button'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-basket' viewBox='0 0 16 16'>
        <path d='M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z'/>
      </svg> Sepetim ($verisayi)</button></a>";
      }
      else{
        echo "<a href='sepetim.php'><button class='btn btn-danger my-2 my-sm-0' type='button'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-basket' viewBox='0 0 16 16'>
        <path d='M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z'/>
      </svg> Sepetim ($verisayi)</button></a>";
      }

   ?>
   
    
    
    
  </div>  
</nav>
<br>
<?php
$sorgu = $baglan->query("select * from sepetim",PDO::FETCH_ASSOC);
$verisayi = $sorgu->rowCount();
?>

<br><br><h3 style='text-align:center'>Sepetiniz de <?=$verisayi?> Adet Ürün Bulumaktadır</h3>"<br>


<section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
            </div>
            <div class="row">

<?php
    $sepettoplam = 0;
    $sorgu = $baglan->query("select * from sepetim");
    while($satir = $sorgu->fetchObject()){
?>

            <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                            <img src="../img/<?=$satir->resim?>" class="card-img-top" style="width: 350px;height:260px" alt="...">
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right"><b><?=$satir->ürünfiyat?> TL</b></li>
                            </ul>
                            <a  class="h2 text-decoration-none text-dark"><?=$satir->ürünad?></a>
                        </div>
                        
                        <form action="islem.php?hareket=sil&id=<?=$satir->id?>" method="POST" align="center">
                        <div class="container p-3 my-3 bg-yellow text-black">

                        <?php 
                            $fiyattoplam= $satir->ürünfiyat * $satir->ürünadet;
                            $sepettoplam += $fiyattoplam;
                            echo "<b>$fiyattoplam TL</b>";
                        ?>
                        </div>
                            <h6><b><?=$satir->ürünadet?></b> Adet</h6>
                            <input type="submit" class="btn btn-info" value="Sil" name="<?=$satir->id?>">
                        
                        </form>
                       
                        
                    </div>
            </div>

<?php
  }
?>
              
       
              

                
                
            </div>
        </div>
    </section>


    
                    <div class="card h-100">
                            
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right"><b></b></li>
                            </ul>
                            <h4><b>Sepet Özeti:</b></h4>  <h6> <?=$verisayi?> Adet Ürün</h6><br>
                            <h4><b>Toplam Ödenecek Tutar:</b></h4>  <H5><b><?=$sepettoplam?> TL</b></H5>
                        </div>
                        
                        
                       
                        
                    </div>
         




</body>
</html>






