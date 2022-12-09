var menuToggle = false, shopToggle = false;
 
//toggle menu open or closed
function toggleMenu(){
  let menuDiv = document.getElementById("menu-nav");
  let headerID = document.getElementById("header-id");
  if(!menuToggle){
    menuDiv.classList.add("menu-view");
    headerID.classList.remove("header-content")
    menuToggle = true;
  }else{
    menuDiv.classList.remove("menu-view");
    headerID.classList.add("header-content");
    menuToggle = false;
  }
}

function toggleCart(){
  let shoppingID = document.getElementsByClassName("widget_shopping_cart_content")[0];
  if(!shopToggle){
    shoppingID.classList.add("shopping-cart-open");
    shopToggle = true;
  }else{
    shoppingID.classList.remove("shopping-cart-open");
    shopToggle = false;
  }
}

window.onload = init;

// onload function
function init() {
  let isGiftShop = document.getElementsByClassName("woocommerce-page");
  let isCheckOut = document.getElementsByClassName("woocommerce-checkout");
  if(isGiftShop.length > 0 && isCheckOut.length == 0){
    let shoppingMenuID = document.getElementById("shopping-cart-menu");
    shoppingMenuID.classList.add("enable-Menu");
  }
}