/*
Först så kopplar jag mig till json filen. Sen splittar jag upp de olika objekten så att jag lättare ska kunna hantera datan i dokumentet. Sedan postar jag en textsträng i en paragraf som jag skapat i php filerna, jag har med hjälp av en loop gjort att texten i textsträngen byts för varje gång loopen körs. Jag hämtar då med hjälp av variabeln "x" olika data beroende på vilket varv loopen är på. Är "x" t.ex. 2 så hämtar jag data från objekt[2] i json filen. För att få texten att rulla vänster har jag använt mig av ytterligare en loop. Denna loop körs fram tills att bredden på sidan är uppnåd och när den är uppnådd kollar programmet om "x" är större än antal objekt i json filen. Om den är det så börjar den första loopen om från 0, annars lägger den på 1.
*/

var x = 0;
var start = 1583;
var i = 1;
var element = document.getElementById('info');

function myLoop() {
    setTimeout(function () {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
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

        element.style.left = (start--) + "px";
        i++;
        if (i < 2560) {

        } else {
            start = 1583;
            i = 0;
            x++;
            if (x >= 11) {
                x = 0;
            }





        }
        myLoop();
    }, 1);
}


myLoop();
