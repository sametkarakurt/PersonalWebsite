var menu = document.getElementsByClassName("menu")[0];
var menuItems = document.getElementsByClassName("collapse")[0];
var clicked = false;

menu.addEventListener("click",function(){

    
    menuItems.classList.toggle("menuController");
    menuItems.classList.toggle("animationIn"); 

})

