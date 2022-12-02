
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap - ntburs</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/rez.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/1.fw.png">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
</head>

<body>

    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                
                <div class="card-body">
        


                    <form action="yonetim/giris.php" method="POST" id="girisformu" style="text-align: center;">
                        <img src="img/logo.fw.png" style="width: 200px;"><br><hr>
                        <div class="input-group form-group">
                            
                            <input type="text" id="kulad" name="kullanici" class="form-control" placeholder="Kullanıcı Adı">

                        </div>
                        <br>
                        <div class="input-group form-group">
                            
                            <input type="password" id="sifre" name="sifre" class="form-control" placeholder="Şifre">
                        </div>
                        <br>
                        <div class="form-group">

                           <center><input type="submit" name="login" value="Giriş Yap" class="btn btn-primary btn-block"></center> 
                        </div>
                    </form>
                    
                   
                </div>
            </div>

        </div>

    </div>
</body>

</html>
