"use strict";

function bigger() {
  var x = document.querySelectorAll("p");
  var i = 0;

  if (document.querySelector("p").style.fontSize == "") {
    for (i = 0; i < x.length; i++) {
      x[i].style.fontSize = "1em";
    }
  }

  for (i = 0; i < x.length; i++) {
    x[i].style.fontSize = parseFloat(x[i].style.fontSize) + 0.2 + "em";
  }
}

function smaller() {
  var x = document.querySelectorAll("p");
  var i = 0;

  if (document.querySelector("p").style.fontSize == "") {
    for (i = 0; i < x.length; i++) {
      x[i].style.fontSize = "1em";
    }
  }

  for (i = 0; i < x.length; i++) {
    x[i].style.fontSize = parseFloat(x[i].style.fontSize) - 0.2 + "em";
  }
}