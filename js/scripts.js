function dzialka(){
    var element = document.getElementsByClassName("dzialka")[0];
    element.className = "visible";
    
    var element = document.getElementsByClassName("dzialka")[1];
    element.className = "visible";
}
                                     
function inne(){
    var element = document.getElementsByClassName("visible")[0];
    element.style.display = "none";
    
    var element = document.getElementsByClassName("visible")[1];
    element.style.display = "none";
}


function changeFiltrs(){
  var selectBox = document.getElementById("typ_wyszukiwania");
  var selected = selectBox.options[selectBox.selectedIndex].value;
  if(selected == "działka")
  {
    dzialka();
  } else if(selected != "działka")
  {
    inne();
  }
}
