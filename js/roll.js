        var x = 0;
        var start = 1583;
        var i = 1;
        var element = document.getElementById('info');

        function myLoop ()  {
    setTimeout(function() {

                var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        document.getElementById("info").innerHTML =
            "Today: " +
            "<img src=\"" + myObj.Matches[x].Flag_1 + "\" class=\"flag\">" +
            '&nbsp;' +
            myObj.Matches[x].Pais_1 +
            " vs " +
            myObj.Matches[x].Pais_2 +
            '&nbsp;' +
             "<img src=\"" + myObj.Matches[x].Flag_2 + "\" class=\"flag\">" +
            '&nbsp;' +

            myObj.Matches[x].Time +
            '&nbsp;' +
            "<img src=\"pictures/pokal_2.png\" class=\"pokal\">";

        console.log(x);


        }
        };
        xmlhttp.open("GET", "data.json", true);
        xmlhttp.send();

    element.style.left = (start--)+"px";
          i++;
                  if (i < 2560) {

      } else {
          start = 1583;
          i = 0;
          x++;
          if (x >= 11){
              x=0;
          }





      }
        myLoop();
        }, 1);}


myLoop();





