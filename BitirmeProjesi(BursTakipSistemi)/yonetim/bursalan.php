<?php
    include ("baglan.php");

    session_start();
    if (!($_SESSION["oturum"] == sha1(md5("var")) && $_COOKIE["cerez"] =="var")){
        header("Location: ../kullanici-giris.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NTBURS</title>


    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../img/1.fw.png">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="panel.php">
                <div class="sidebar-brand-icon" >
                    <img style="width: 150px;height:60px" src="../img/logo.fw.png">
                </div>
                <div class="sidebar-brand-text mx-3"></div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="panel.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Anasayfa</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="bursalan.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Bursiyerler</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="burs.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Burs Verenler</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            
        </ul>


        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <button onclick="window.location.href = 'cikis.php'" type="button" class="btn btn-danger">Çıkış</button>

                    </ul>
                </nav>


                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Bursiyerler</h1>
                        
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Burs Alanlar</h6>
                            
                        </div>
                        
                        <div class="card-body">
                        <button onclick="window.location.href = 'bursiyerekle.php'" type="button" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i>Bursiyer Ekle</button>
                        <button  style="float:right;"onclick="window.location.href = 'bursdisaaktarma.php'" type="button" class="btn btn-success"><i style="font-size: 20px;" class="fas fa-fw fa-download"></i> İçeriği İndir</button>
                        <a style="float:right;margin-right:20px;" type="button" class="btn btn-dark"  href="burspdf.php" target="_blank"><i style="font-size: 20px;" class="fas fa-fw fa-file-pdf"></i> PDF Dönüştür</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <br>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>İsim</th>
                                            <th>Telefon</th>
                                            <th>E-mail</th>
                                            <th>Aldığı Burs</th>
                                            <th>Düzenle</th>
                                            <th>Sil</th>
                                            
                                        </tr>
                                    </thead>
        
                                    <tbody>
<?php
    $sorgu = $baglan->query("select * from bursalan");
    $sayfano = 0;
    foreach($sorgu as $satir){ 
    $sayfano++;
?>
                                        <tr id="<?=$satir["id"]?>">
                                            <td><?=$sayfano?></td>
                                            <td data-target="adsoyad"><?=$satir["adsoyad"]?></td>
                                            <td data-target="telefon"><?=$satir["telefon"]?></td>
                                            <td data-target="email"><?=$satir["email"]?></td>
                                            <td data-target="bursfiyat"><?=$satir["bursfiyat"]?> TL</td>
                                            <td style="text-align: center;"><a data-role="update" data-id="<?=$satir['id']?>" href="#"><i class="fas fa-fw fa-pen" style="color: #2A52BE;"></i></a></td>
                                            <td style="text-align: center;"><a href='bursalan.php?sil=<?=$satir["id"]; ?>' role='button'><i class="fas fa-fw fa-trash" style="color: red;"></i></a></td>
                                        </tr>

                                        <?php
    }

    if ($_GET) {
        $id = $_GET["sil"];
        $sil = $baglan->prepare("DELETE FROM bursalan WHERE id=?");
        $sil->execute(array($id));
        if ($sil) {
            echo "<script>
            window.location.href = 'bursalan.php';
            </script>";
        } else {
            echo "hata oluştu";
        }
        echo "Silme İşlemi Başarı ile Gerçekleşti";
        echo "<script>
        window.location.href = 'burs.php';
        </script>";
    }


?>

                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
       
        </div>

    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bursiyer Düzenle</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: red;">x</button>
      </div>
      <div class="modal-body">
        <form>
            
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Ad Soyad:</label>
            <input id="adsoyad" type="text" class="form-control" id="recipient-name">
          </div>
            
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Telefon:</label>
            <input id="telefon" type="text" class="form-control" id="recipient-name">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">E-Mail:</label>
            <input id="email" type="text" class="form-control" id="recipient-name">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Aldığı Burs:</label>
            <input id="bursfiyat" type="text" class="form-control" id="recipient-name">
          </div>

          <input type="hidden" id="konu_id" name="">
            
        </form>
      </div>
      <div class="modal-footer">
      	<a href="" id="save" class="btn btn-primary pull-right">Güncelle</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
   	  
   	  $(function(){

      
   
      $(document).on('click','a[data-role=update]',function(e){
       
       var id = $(this).data('id');  
       var adsoyad   = $('#'+id).children('td[data-target=adsoyad]').text();
       var telefon = $('#'+id).children('td[data-target=telefon]').text();
       var email   = $('#'+id).children('td[data-target=email]').text();
       var bursfiyat = $('#'+id).children('td[data-target=bursfiyat]').text();
       
       $('#adsoyad').val(adsoyad);
       $('#telefon').val(telefon);
       $('#email').val(email);
       $('#bursfiyat').val(bursfiyat);
       
      
       $('#konu_id').val(id);
       $('.modal').modal('toggle');
     
       
     e.preventDefault();

      });
  
     $('#save').click(function(e){

       // burda kayıt ederken value değerlerini alıyoruz..	
      
      var id       =  $('#konu_id').val();  
      
      var adsoyad =  $('#adsoyad').val();
      var telefon =  $('#telefon').val();
      var email =  $('#email').val();
      var bursfiyat =  $('#bursfiyat').val();
      
        
        // ajax ile değerleri gönderiyoruz..
   
       $.ajax({
        
         url    : 'bursiyerduzenleajax.php',
         method : 'post',
         data   : {adsoyad : adsoyad, telefon : telefon, email : email, bursfiyat : bursfiyat, id : 
         	id},
         success: function(e){

         	// işlemi başarılıysa list ekranında değerlerin değişmiş hali gözükmesi aşağıdaki kodları yazıyoruz idsi eşit olan değeri düzenleme işlemi yapıyoruz..

         	$('#'+id).children('td[data-target=adsoyad]').text(adsoyad);
             
         	$('#'+id).children('td[data-target=telefon]').text(telefon);

            $('#'+id).children('td[data-target=email]').text(email);
             
         	$('#'+id).children('td[data-target=bursfiyat]').text(bursfiyat);
             
             
         	 $('.modal').modal('toggle');

         }
        
       });
    // burda da aynı şekilde sayfa yenilenmeyi engelledik
    
    e.preventDefault();

      
     });


   	  });

   </script>



    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
