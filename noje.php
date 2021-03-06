

<?php
session_start();
if (!isset($_SESSION["loggedin"]) || isset($_GET["loggaut"])) {
    $_SESSION["loggedin"] = false;
}
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1><a href="index.php">Public News</a></h1>
        <nav>
            <ul>
                <li><a href="index.php"  style="margin-left: 420px">Hem</a></li>
                <li><a href="kultur.php" >Kultur</a></li>
                <li><a href="#" class="active">Nöje</a></li>
                <li><a href="sport.php">Sport</a></li>
                <?php
if (!$_SESSION["loggedin"]) {
    echo "<li style=\"float:right;margin-right:50px\"><a href=\"#myModal\" class=\"trigger-btn\" data-toggle=\"modal\">Logga in <i class=\"fas fa-lock\"></i></a></li>";
} else {
    echo "<li style=\"float:right;margin-right:50px\"><a class=\"aktuell\" href=\"min_sida.php\">Min sida <i class=\"fas fa-lock-open\"></i></a></li>";
}
?>
            </ul>
        </nav>
            </header>

        <main>
            <!-- Slideshow reklam container -->
            <div class="slideshow-container">
                <div class="mySlides">
                    <div class="numbertext">1 / 3</div>
                    <img src="pictures/elgiganten.jpg">
                </div>
                <div class="mySlides">
                    <div class="numbertext">2 / 3</div>
                    <img src="pictures/linas-matkasse.jpg" >
                </div>
                <div class="mySlides">
                    <div class="numbertext">3 / 3</div>
                    <img src="pictures/coop_reklam.gif">
                </div>
            </div>
            <br>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            <script src="js/slideshow.js"></script>
            <div class="nyheter">
                  <?php

include '../../config_db/konfig_db_new_news.php';

                /* Connect to the database */
                $conn = new mysqli($hostname, $user, $password, $database);

                /* Display an error if connection failed */
                if ($conn->connect_error) {
                    die("<p>An error occurred: " . $conn->connect_error . "</p>");
                }

                // Search the table tb_projects for projects linked to the user
                $sql = "SELECT * FROM nyheter WHERE typ = 'noje'";

                // Run SQL
                $query = mysqli_query($conn, $sql);

                // Display an error if SQL failed
                if (!$query) {
	               die ('SQL Error: ' . mysqli_error($conn));
                }

                ?>
                <div>

                            <?php

                            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){


            echo  "<div class=\"nyhet\">
            <h2>" .$row['rubrik'] . "</h2>
                <p>" .$row['text'] . "</p>
            </div>";


                            }
                            // Shut down connection
                            $conn->close();
                            ?></div>
                </div>

            </main>
            <footer id="roll">
    <div class="roll">
        <p id="info"></p>
        </div>
    </footer>


    <script src="js/roll.js">
    </script>

<?php
    include "includes/inloggningsruta.php";
    include "includes/frameworks.php";
?>
        <script src="js/login.js"></script>

</body>

</html>
