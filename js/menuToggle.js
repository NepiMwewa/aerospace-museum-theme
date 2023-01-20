var menuToggle = false, shopToggle = false, isMobile = false;
 
//toggle menu open or closed
function toggleMenu(){
  let menuDiv = document.getElementById("menu-nav");
  let headerId = document.getElementById("header-id");
  let hamburgerMenu = document.getElementById("menu-toggle");
  if(!menuToggle){
    menuDiv.classList.add("menu-view");
    headerId.classList.remove("header-content");
    hamburgerMenu.ariaExpanded = true;
    menuToggle = true;
  }else{
    menuDiv.classList.remove("menu-view");
    headerId.classList.add("header-content");
    hamburgerMenu.ariaExpanded = false;
    menuToggle = false;
  }
}

function toggleCart(){
  let shoppingId = document.getElementById("shopping-cart-id");
  let hamburgerId = document.getElementById("hamburger-menu");
  let shopMenuId = document.getElementById("shopping-cart-menu");
  let cartMenu = document.getElementById("shopping-toggle");
  if(!shopToggle){
    shoppingId.classList.add("shopping-cart-open");
    hamburgerId.classList.add("hamburger-move");
    shopMenuId.classList.add("menu-move");
    cartMenu.ariaExpanded = true;
    shopToggle = true;
  }else{
    shoppingId.classList.remove("shopping-cart-open");
    hamburgerId.classList.remove("hamburger-move");
    shopMenuId.classList.remove("menu-move");
    cartMenu.ariaExpanded = false;
    shopToggle = false;
  }
  if(menuToggle){
    toggleMenu();
  }
}

function escapeFromMenu(event){
  if(event.key === "Escape" && menuToggle == true)
    {
      toggleMenu();
  }
}

function escapeShoppingCart(event){
  if(event.key === "Escape" && shopToggle == true)
    {
      toggleCart();
    }
}

window.addEventListener("resize", windowChangedSize);


function windowChangedSize(){
  if(window.innerWidth <= 1000){
    isMobile = true;
   
  }else{
    if(menuToggle){
      toggleMenu();
    }
    isMobile = false;
    
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

  let hamburgerMenu = document.getElementById("menu-toggle");
  let mainMenu = document.getElementById("main-menu");
  
  hamburgerMenu.addEventListener('keydown', (event) => escapeFromMenu(event));
  mainMenu.addEventListener('keydown', (event) => escapeFromMenu(event));

  windowChangedSize();

  let navLinks = document.getElementsByClassName("closeTab");
  for (var i = 0; i < navLinks.length; i++) {
    navLinks[i].addEventListener('click', addEventToLink, false);
  }

  let shoppingCartMenu = document.getElementById("shopping-cart-menu");
  let shoppingId = document.getElementById("shopping-cart-id");

  shoppingCartMenu.addEventListener('keydown', (event) => escapeShoppingCart(event));
  shoppingId.addEventListener('keydown', (event) => escapeShoppingCart(event));
}

