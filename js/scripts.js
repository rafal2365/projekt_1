function dzialka(){
    var element = document.getElementsByClassName("dzialka");
    for(var i=0;i<=element.length;i++)
    {
      element[i].style.visibility = "visible";
      element[i].style.display = "initial";
    }
    
}
                                     
function inne(){
    var element = document.getElementsByClassName("dzialka");
    for(var i=0;i<=element.length;i++)
    {
      element[i].style.visibility = "hidden";
      element[i].style.display = "none";
    }
}

function centrum(){
  var element = document.getElementById("dzielnice");
  element.style.display = "initial";
}

function obrzeze(){
  var element = document.getElementById("dzielnice");
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

function lokalizacja(){
  var selectBox = document.getElementById("lokalizacja_2");
  var selected2 = selectBox.options[selectBox.selectedIndex].value;
  
  if(selected2 == "centrum")
  {
    centrum();
  } else if(selected2 != "centrum")
  {
    obrzeze();
  }
}





