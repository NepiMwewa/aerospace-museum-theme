/*
window.onload = init;

// onload function
function init() {
   // Get the elements
   var navbar = document.getElementById("navbar");
  
   // Get the offset position of history to display navbar
   var sticky = navbar.offsetTop + 50;
 
   // When the user scrolls the page, execute myFunction
   window.onscroll = function() {checkShouldStick()};
 
   //check if should stick at the start of window load
   checkShouldStick();
   // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
   function checkShouldStick() {
     if (window.pageYOffset >= sticky) {
       navbar.classList.add("sticky");
     } else {
       navbar.classList.remove("sticky");
     }
   } 
 }
 */
 var menuToggle = false;
 
 //toggle menu open or closed
 function toggleMenu(){
   let menuDiv = document.getElementById("menu-nav");
   if(!menuToggle){
     menuDiv.classList.add("menu-view");
     menuToggle = true;
     console.log("called");
   }else{
     menuDiv.classList.remove("menu-view");
     menuToggle = false;
   }
 }