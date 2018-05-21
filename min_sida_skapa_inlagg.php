<?php
session_start();
if (!isset($_SESSION["loggedin"])) {
    $_SESSION["loggedin"] = false;
} elseif (!$_SESSION["loggedin"]) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>New News</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="modal.css">
</head>
<?php
include '../../config_db/konfig_db_resedagboken.php';

/* Ta emot data från skapa_konto.php och lagra i databasen */
/* Visa medlemssidan */

// Vi försöker öppna en anslutningen mot vår databas
$conn = new mysqli($hostname, $user, $password, $database);

// Gick det bra att ansluta eller blev det fel?
if ($conn->connect_error) {
    die("<p>Ett fel inträffade: " . $conn->connect_error . "</p>");
}

if (isset($_POST["registrera"])) {

    // Tar emot data från formulär och rensar bort oönskade taggar eller kod
    $fnamn = filter_input(INPUT_POST, "fnamn", FILTER_SANITIZE_STRING);
    $enamn = filter_input(INPUT_POST, "enamn", FILTER_SANITIZE_STRING);
    $adress = filter_input(INPUT_POST, "adress", FILTER_SANITIZE_STRING);
    $epost = filter_input(INPUT_POST, "epost", FILTER_SANITIZE_STRING);
    $mobil = filter_input(INPUT_POST, "mobil", FILTER_SANITIZE_STRING);
    $kon = filter_input(INPUT_POST, "kon", FILTER_SANITIZE_STRING);
    $anamn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
    $losen = filter_input(INPUT_POST, "losen", FILTER_SANITIZE_STRING);

    // Om data finns skjut i databasen
    if ($fnamn && $enamn && $epost && $anamn && $losen) {

        $hash = password_hash($losen, PASSWORD_DEFAULT);

        // Registrera en ny användare
        $sql = "INSERT INTO anvandare
        (fnamn, enamn, adress, epost, mobil, kon, anamn, hash) VALUES
        ('$fnamn', '$enamn', '$adress', '$epost', '$mobil', '$kon', '$anamn', '$hash')";

        // Nu kör vi vår SQL
        $result = $conn->query($sql);

        // Gick det bra att köra SQL-kommandot?
        if (!$result) {
            die("<p>Det blev något fel i databasfrågan</p>");
        } else {
            //echo "<p>Användaren är registrerad!</p>";
            $_SESSION["loggedin"] = true;
            $_SESSION["anamn"] = $anamn;
        }

        // Stänger ned anslutningen
        $conn->close();
    }
}
?>
<body>
    <div class="kontainer">
        <header>
            <h1><a href="index.php">Public News</a></h1>
            <nav>
                <ul>
                    <li><a href="index.php" style="margin-left: 420px">Hem</a></li>
                    <li><a href="kultur.php">Kultur</a></li>
                    <li><a href="noje.php">Nöje</a></li>
                    <li><a href="sport.php">Sport</a></li>
                    <li style="float:right; margin-right:50px"><a class="active" href="min_sida.php">Min sida <i class="fas fa-lock-open"></i></a></li>
                    <li>
                        <form>

                        </form>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="kolumner_minsida">
            <nav>
                <h3><?php echo $_SESSION["anamn"] ?></h3>
                <ul>
                    <li><a  href="mina_inlagg.php">Mina Inlägg</a></li>
                    <li><a href="min_sida_skapa_inlagg.php" class="aktuell">Skapa inlägg</a></li>
                    <li><a href="index.php?loggaut=1">Logga ut</a></li>
                </ul>
            </nav>

        </main>
        <footer class="kolumner">
            <div>
                <h4>Info</h4>
                <p>...</p>
            </div>
            <div>
                <h4>Kontakt</h4>
                <p>...</p>
            </div>
        </footer>
    </div>

</body>

</html>
