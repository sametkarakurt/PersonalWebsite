var menu = document.getElementsByClassName("menu")[0];
var menuItems = document.getElementsByClassName("collapse")[0];

menu.addEventListener("click", function () {
  menuItems.classList.toggle("menuController");
  menuItems.classList.toggle("animationIn");
});

function loginkontrol() {
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  if (
    username == null ||
    username == "" ||
    password == null ||
    password == ""
  ) {
    alert("Kullanıcı adı veya şifre boş olamaz.");
    return false;
  } else {
    return true;
  }
}
