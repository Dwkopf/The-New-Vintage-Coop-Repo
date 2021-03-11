
    // function bigger() {
    //   document.body.style.fontSize = larger;
    // }
    function bigger() {
      //alert(document.querySelector("#changeFont1").style.fontSize);
      
      if (document.querySelector("#changeFont1").style.fontSize  == "") 
        {
          document.querySelector("#changeFont1").style.fontSize = "1em";
          document.querySelector("#changeFont2").style.fontSize = "1em";
          document.querySelector("#changeFont3").style.fontSize = "1em";
          document.querySelector("#changeFont4").style.fontSize = "1em";
          document.querySelector("#changeFont5").style.fontSize = "1em";
          document.querySelector("#changeFont6").style.fontSize = "1em";     
        }
      document.querySelector("#changeFont1").style.fontSize = parseFloat(document.querySelector("#changeFont1").style.fontSize) +  0.2 + "em";
      document.querySelector("#changeFont2").style.fontSize = parseFloat(document.querySelector("#changeFont2").style.fontSize) +  0.2 + "em";
      document.querySelector("#changeFont3").style.fontSize = parseFloat(document.querySelector("#changeFont3").style.fontSize) +  0.2 + "em";
      document.querySelector("#changeFont4").style.fontSize = parseFloat(document.querySelector("#changeFont4").style.fontSize) +  0.2 + "em";   
      document.querySelector("#changeFont5").style.fontSize = parseFloat(document.querySelector("#changeFont5").style.fontSize) +  0.2 + "em";
      document.querySelector("#changeFont6").style.fontSize = parseFloat(document.querySelector("#changeFont6").style.fontSize) +  0.2 + "em";  
    }

    function smaller() {
      if (document.querySelector("#changeFont1").style.fontSize == "") {
        document.querySelector("#changeFont1").style.fontSize = "1em";
        document.querySelector("#changeFont2").style.fontSize = "1em";
        document.querySelector("#changeFont3").style.fontSize = "1em";
        document.querySelector("#changeFont4").style.fontSize = "1em";
        document.querySelector("#changeFont5").style.fontSize = "1em";
        document.querySelector("#changeFont6").style.fontSize = "1em"; 
      }
      document.querySelector("#changeFont1").style.fontSize = parseFloat(document.querySelector("#changeFont1").style.fontSize) -  0.2 + "em";
      document.querySelector("#changeFont2").style.fontSize = parseFloat(document.querySelector("#changeFont2").style.fontSize) -  0.2 + "em";
      document.querySelector("#changeFont3").style.fontSize = parseFloat(document.querySelector("#changeFont3").style.fontSize) -  0.2 + "em";
      document.querySelector("#changeFont4").style.fontSize = parseFloat(document.querySelector("#changeFont4").style.fontSize) -  0.2 + "em";
      document.querySelector("#changeFont5").style.fontSize = parseFloat(document.querySelector("#changeFont5").style.fontSize) -  0.2 + "em";
      document.querySelector("#changeFont6").style.fontSize = parseFloat(document.querySelector("#changeFont6").style.fontSize) -  0.2 + "em";  
      
    }


    // function smaller() {
    //   document.body.style.fontSize = smaller;
    // }
 