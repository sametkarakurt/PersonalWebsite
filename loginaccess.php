<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS Files/loginaccess.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Orelega+One&display=swap" rel="stylesheet">
        <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">

        <div class="container">

          <a class="navbar-brand" href="index.html">
              <img class="img-fluid logo" src="/Images/logo.png"/>
          </a>

          <svg xmlns="http://www.w3.org/2000/svg" width="48"
            height="48"
            fill="#EBE7D9" 
            class="bi bi-list menu"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Ana Sayfa</a>
                <div class="line"></div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                <div class="line"></div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ilgialanim.html">İlgi Alanlarım</a>
                <div class="line"></div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sehrim.html">Şehrim</a>
                <div class="line"></div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mirasımız.html">Mirasımız</a>
                <div class="line"></div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="iletisim.php">İletişim</a>
                <div class="line"></div>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      <div class="container">

        <div class="overflow-x:auto;">
          
          <form action="mesajlar.php" method="post">
            <div class="table-container">
              <table class="table table-hover table-borderless">
                <thead>
                  <tr>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>Email</th>
                    <th>Konu</th>
                    <th class="icerikbaslik">Mesaj</th>
                    <th>Mesaj</th>
                  </tr>
                  
                </thead>

                <?php
                  session_start();
                  if($_SESSION["user"]==""){
                    echo "<script>window.location.href='cikis.php'</script>";
                  }else{

                    echo "<h3 class='username'>Kullanıcı Adınız : ".$_SESSION['user']."</h3>";
                    echo "<h3 class='password'>Şifreniz : ".$_SESSION['pass']."</h3>";
                    include("baglanti.php");
                    $sec = "Select * From iletisim";
                    $sonuc = $baglan->query($sec);
                    if($sonuc->num_rows>0){
                      while($cek=$sonuc->fetch_assoc()){
                        echo "
                        <tbody>
                          <tr>
                            <td data-label='Ad : '>".$cek['ad']."</td>
                            <td data-label='Soyad : '>".$cek['soyad']."</td>
                            <td data-label='Email : '>".$cek['eposta']."</td>
                            <td data-label='Konu : '>".$cek['konu']."</td>
                            <td style='display:none' class='icerik'><input name='mesaj'  type='text'  class='form-control' value='".$cek['mesaj']."'></td>
                            <td data-label='Mesaj : '><button type='submit' class='buton'>Mesaj</button></td>
                          
                          </tr>
                        </tbody>


                        ";

                      }

                    }else{
                        echo "<script>alert('Veri bulunamadı')</script>";
                    }

                  }

                ?>
    
            
              </table>

            </div>

              
          </form>   
          <button type="button" class="btn btn-danger"><a class="cikis" href='cikis.php'>ÇIKIŞ YAP</a></button>


        </div>


      </div>

      
    <script src="/JS Files/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>





