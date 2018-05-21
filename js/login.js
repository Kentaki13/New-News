$(document).ready(function () {

    $('#logga_in').on('click', function (event) {

        if ($("#login")[0].checkValidity()) {

            event.preventDefault();

            var user = $("#user").val();
            var password = $("#password").val();

            //console.log(user + "__" + password);

            $.ajax({
                url: "login.php",
                method: "POST",
                data: {
                    anamn: user,
                    losen: password
                },
                success: function (data) {
                    //console.log(data);
                    if (data == "Ja") {
                        $("#fel").text("Rätt inloggning");
                        window.location = "min_sida.php";
                    } else {
                        $("#fel").text("Fel användarnamn eller lösenord!");
                    }
                }
            });
        }

    });
});
