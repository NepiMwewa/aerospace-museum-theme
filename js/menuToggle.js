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

//Grabs an HTML element and sets the first class as classToAdd
function setElementAsFirstChild(domElement, classToAdd){
  //split the classNames in domElement
  let classList = domElement.className.split(' ');
  let outputString = "";

  //add the classToAdd as the first element
  classList.unshift(classToAdd ? classToAdd: "");

  //iterates through the classList and combines the class name strings
  //to output to the domElement.classList 
  classList.forEach((item, index, arr) => {
    if(!arr[index + 1]){
      outputString += item;
      return;
    }
    outputString += item + ' ';
  });
  domElement.classList = outputString;
}