var menuToggle = false, shopToggle = false;
 
//toggle menu open or closed
function toggleMenu(){
  let menuDiv = document.getElementById("menu-nav");
  let headerId = document.getElementById("header-id");
  if(!menuToggle){
    menuDiv.classList.add("menu-view");
    headerId.classList.remove("header-content")
    menuToggle = true;
  }else{
    menuDiv.classList.remove("menu-view");
    headerId.classList.add("header-content");
    menuToggle = false;
  }
}

function toggleCart(){
  let shoppingId = document.getElementById("shopping-cart-id");
  let hamburgerId = document.getElementById("hamburger-menu");
  let shopMenuId = document.getElementById("shopping-cart-menu");
  if(!shopToggle){
    shoppingId.classList.add("shopping-cart-open");
    hamburgerId.classList.add("hamburger-move");
    shopMenuId.classList.add("menu-move");
    shopToggle = true;
  }else{
    shoppingId.classList.remove("shopping-cart-open");
    hamburgerId.classList.remove("hamburger-move");
    shopMenuId.classList.remove("menu-move");
    shopToggle = false;
  }
  if(menuToggle){
    toggleMenu();
  }
}

window.onload = init;

// onload function
function init() {
  let isGiftShop = document.getElementsByClassName("woocommerce-page");
  let isCheckOut = document.getElementsByClassName("woocommerce-checkout");
  if(isGiftShop.length > 0 && isCheckOut.length == 0){
    let shoppingMenuId = document.getElementById("shopping-cart-menu");
    shoppingMenuId.classList.add("enable-Menu");
  }
}