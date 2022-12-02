<?php
    include ("baglan.php");
    include ("sinif.php");
    $sinif = new kasa();
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
    <link rel="shortcut icon" type="image/x-icon" href="../img/1.fw.png">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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

            <li class="nav-item active">
                <a class="nav-link" href="panel.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Anasayfa</span></a>
            </li>

            <li class="nav-item">
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
                        <h1 class="h3 mb-0 text-gray-800">Anasayfa</h1>
                        
                    </div>

                    <div class="row" style="text-align: center;">
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xm font-weight-bold text-primary text-uppercase mb-1">
                                                Toplam Bağış</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$sinif->toplambagis()?> TL</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
 

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xm font-weight-bold text-success text-uppercase mb-1">
                                                Toplam Burs</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$sinif->toplamburs()?> TL</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<?php
    $toplamkasa = 0;
    $toplamkasa = ($sinif->toplambagis()) - ($sinif->toplamburs());
?>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xm font-weight-bold text-danger text-uppercase mb-1">
                                                Toplam Kasa</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$toplamkasa?> TL</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
          
                        <div class="col-xl-6 col-md-6">
                            <div class="card border-left-dark shadow h-100 py-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-dark text-uppercase mb-2">
                                                Burs Alan Sayısı
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$sinif->burssayisi()?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-500"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card border-left-info shadow h-100 py-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-info text-uppercase mb-2">
                                                Burs Veren Sayısı
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$sinif->bagissayisi()?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-500"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
             
           

                    </div>

                </div>

            </div>
       
        </div>

    </div>




    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
