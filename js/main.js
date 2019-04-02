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

  function reviewOn() {
    document.getElementById("reviewOverlay").style.display = "block";
  }
  function reviewOff() {
    document.getElementById("reviewOverlay").style.display = "none";
  }


  function reviewWriteOn() {
    document.getElementById("reviewWriteoverlay").style.display = "block";
  }
  function reviewWriteOff() {
    document.getElementById("reviewWriteoverlay").style.display = "none";
  }

  function navFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }