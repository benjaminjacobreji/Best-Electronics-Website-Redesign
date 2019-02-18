function returnMenu() {
    document.getElementById("overlay").style.display = "block";
  }
  
  function returnMenuoff() {
    document.getElementById("overlay").style.display = "none";
  }
  
  function on() {
    document.getElementById("overlay1").style.display = "block";
  }
  
  function off() {
    document.getElementById("overlay1").style.display = "none";
  }

  function navFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }