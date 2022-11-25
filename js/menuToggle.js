var menuToggle = false;
 
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