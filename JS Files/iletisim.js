var menu = document.getElementsByClassName("menu")[0];
var menuItems = document.getElementsByClassName("collapse")[0];

menu.addEventListener("click", function () {
  menuItems.classList.toggle("menuController");
  menuItems.classList.toggle("animationIn");
});

let uyarı = document.querySelector("#uyari");
let temizleButonu = document.querySelector("#btnTemizle");

let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

temizleButonu.addEventListener("click", () => {
  uyarı.classList.remove("d-flex");

  document.forms["Form"]["isim"].value = null;
  document.forms["Form"]["soyisim"].value = null;
  document.forms["Form"]["email"].value = null;
  document.forms["Form"]["mesaj"].value = null;
  document.forms["Form"]["konu"].value = "Konu";
});

function kontrol() {
  let uyarı = document.querySelector("#uyari");
  let uyarıText = document.querySelector("#uyariText");
  let isim = document.forms["Form"]["isim"].value;
  let soyisim = document.forms["Form"]["soyisim"].value;
  let email = document.forms["Form"]["email"].value;
  let mesaj = document.forms["Form"]["mesaj"].value;
  let konu = document.forms["Form"]["konu"].value;
  let onayButonu = document.forms["Form"]["onayButonu"];

  if (
    isim == null ||
    isim == "" ||
    soyisim == null ||
    soyisim == "" ||
    email == null ||
    email == "" ||
    mesaj == null ||
    mesaj == "" ||
    konu == "Konu" ||
    onayButonu.checked == false
  ) {
    uyarıText.innerHTML =
      "Bir veya daha fazla alanda hata bulundu. Lütfen kontrol edin ve tekrar deneyin.";
    uyarı.classList.add("d-flex");

    return false;
  } else if (reg.test(email) == false) {
    uyarı.classList.add("d-flex");
    uyarıText.innerHTML = "Lütfen geçerli bir mail adresi girin";
    return false;
  } else {
    return true;
  }
}
