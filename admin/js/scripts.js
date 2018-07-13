function dzialka(){
    budynek();
    
    var element = document.getElementsByClassName("dzialka");
    for(var i=0;i<=element.length;i++)
    {
      element[i].style.visibility = "visible";
      element[i].style.display = "initial";
    }
}

function budynek(){
  
    var element2 = document.getElementsByClassName("budynek");
    for(var j=0;j<element2.length;j++)
    {
      element2[j].style.visibility = "hidden";
      element2[j].style.display = "none";
      element2[j].value = "";
    }
}

function showBudynek(){
  
    var element2 = document.getElementsByClassName("budynek");
    for(var j=0;j<element2.length;j++)
    {
      element2[j].style.visibility = "visible";
      element2[j].style.display = "initial";
    }
}
                                     
function inne(){
    showBudynek();
    var element = document.getElementsByClassName("dzialka");
    
    for(var i=0;i<=element.length;i++)
    {
      element[i].style.visibility = "hidden";
      element[i].style.display = "none";
      element[i].options.value = "";
    }
}

function cleanSelect(className){

  var element = document.getElementsByClassName(className);
  
  while(elemnt.options.length){
    element.options[0] = null;
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
  //$('#add-form').reset();
  var selectBox = document.getElementById("typ_ogloszenia");
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

function selectedOrNotSelected(){
  
}












