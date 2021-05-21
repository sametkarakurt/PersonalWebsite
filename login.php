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
    <link rel="stylesheet" href="/CSS Files/login-style.css" />
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
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
  </head>
  <body>
    <div class="flex-container">
      <div class="flex-item">
        <form action="login.php" class="login-form" method="post">
          <img class="img-fluid logo" src="/Images/logo.png" />
          <div class="textb">
            <input
              name="username"
              type="text"
              placeholder="Kullanıcı Adı"
              required
            />
          </div>
          <div class="textb">
            <input
              name="password"
              type="password"
              placeholder="Şifre"
              required
            />
          </div>
          <button class="btnCenter btn">
            <i class="fas fa-arrow-right"></i>
          </button>
        </form>
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

<?php

ob_start();

session_start();

if(isset($_POST["username"] , $_POST["password"]))
{
  if($_POST["username"]=="admin" && $_POST["password"] == "1234"){

    $_SESSION["user"]=$_POST["username"];
    $_SESSION["pass"]=$_POST["password"];
    header("location:loginaccess.php");

  }
  else{
    echo "<script>alert('Kullanıcı adı veya şifre yanlış')</script>";
  }
}

?>
