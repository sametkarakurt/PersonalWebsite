<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/CSS Files/index.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Orelega+One&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img class="img-fluid logo" src="/Images/logo.png" />
        </a>

        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="48"
          height="48"
          fill="#EBE7D9"
          class="bi bi-list menu"
          viewBox="0 0 16 16"
        >
          <path
            fill-rule="evenodd"
            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
          />
        </svg>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php"
                >Ana Sayfa</a
              >
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
            <li class="nav-item">
              <a class="nav-link" href="login.php">Giriş Yap</a>
              <div class="line"></div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <h1 class="baslik">Mesaj</h1>
      <div class="w3-card">
        <p>
          <?php

echo "".$_POST['mesaj']." " ;


?>
        </p>
      </div>
    </div>
    <script src="/JS Files/index.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
