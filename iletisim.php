<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Orelega+One&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="CSS Files/iletisim.css" />

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
      <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path
          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"
        />
      </symbol>
      <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path
          d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"
        />
      </symbol>
      <symbol
        id="exclamation-triangle-fill"
        fill="currentColor"
        viewBox="0 0 16 16"
      >
        <path
          d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
        />
      </symbol>
    </svg>
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
              <a class="nav-link" aria-current="page" href="index.html"
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
      <h1 class="baslik">İletişim</h1>
      <hr />
      <div class="absolute">
        <form
          class="form"
          action="iletisim.php"
          method="post"
          name="Form"
          onsubmit="return kontrol()"
        >
          <div
            id="uyari"
            class="alert alert-danger align-items-center"
            role="alert"
            style="display: none"
          >
            <svg
              class="bi flex-shrink-0 me-2"
              width="24"
              height="24"
              role="img"
              aria-label="Danger:"
            >
              <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <div id="uyariText"></div>
          </div>

          <div class="row">
            <div class="col">
              <input
                name="isim"
                id="nameText"
                type="text"
                class="form-control"
                placeholder="İsim"
              />
            </div>

            <div class="col">
              <input
                name="soyisim"
                id="surnameText"
                type="text"
                class="form-control"
                placeholder="Soyisim"
              />
            </div>
          </div>

          <div class="form-row">
            <div class="col">
              <input
                name="email"
                id="emailText"
                type="text"
                class="form-control"
                placeholder="Email"
              />
            </div>
            <div class="col">
              <select
                name="konu"
                class="form-select"
                aria-label="Default select example"
                id="konu"
              >
                <option selected>Konu</option>
                <option value="Genel">Genel</option>
                <option value="Yazılım">Yazılım</option>
                <option value="Sponsorluk">Sponsorluk</option>
                <option value="Reklam & Tanıtım">Reklam & Tanıtım</option>
              </select>
            </div>

            <div class="col">
              <textarea
                name="mesaj"
                id="messageText"
                class="form-control"
                placeholder="Mesaj"
                rows="4"
              ></textarea>
            </div>

            <div class="col">
              <div class="form-check">
                <input
                  name="onayButonu"
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault"
                />
                <label class="form-check-label" for="flexCheckDefault">
                  Form aracılığıyla sağladığım verilerimin Gizlilik ve Kişisel
                  Verilerin Korunması Politikası kapsamında formda yer alan konu
                  ile ilgili olarak tarafımla iletişime geçilmesi amacı ile
                  işlenmesini kabul ediyorum.
                </label>
              </div>
            </div>
          </div>

          <input
            id="btnTemizle"
            type="button"
            class="btn btn-danger btn-lg"
            value="Temizle"
          />
          <input
            type="submit"
            class="btn btn-success btn-lg float-end"
            value="Gönder"
          />
        </form>
      </div>
    </div>
    <script src="/JS Files/iletisim.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

<?php



  include("baglanti.php");

  if(isset($_POST["isim"] , $_POST["soyisim"] , $_POST["email"] , $_POST["konu"] , $_POST["mesaj"])){

  
      $ad = $_POST["isim"];
      $soyad = $_POST["soyisim"];
      $eposta = $_POST["email"];
      $konu =  $_POST["konu"];
      $mesaj = $_POST["mesaj"];
 

      $ekle = "INSERT INTO iletisim (ad , soyad , eposta , konu , mesaj) VALUES 
      ('".$ad."' , '".$soyad."' , '".$eposta."' , '".$konu."' , '".$mesaj."')";

      if($baglan->query($ekle) === TRUE) { echo "
<script>
  alert('Mesajınız başarılı bir şekilde gönderilmiştir.');
</script>
"; } else{ echo "
<script>
  alert('Mesajınız gönderilemedi.');
</script>
"; } } ?>
