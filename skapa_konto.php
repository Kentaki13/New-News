
<?php
session_start();
if (!isset($_SESSION["loggedin"])) {
    $_SESSION["loggedin"] = false;
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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    </head>

    <body>

            <header>
                <h1><a href="index.php">New News</a></h1>
                <nav>
                    <ul>
                        <li><a href="index.php" style="margin-left: 420px">Hem</a></li>
                        <li><a href="kultur.php"> Kultur</a></li>
                        <li><a href="noje.php">Nöje</a></li>
                        <li><a href="sport.php">Sport</a></li>
                        <li style="float:right;margin-right:50px" ><a href="#myModal" class="trigger-btn" data-toggle="modal">Logga in <i class="fas fa-lock"></i></a></li>
                    </ul>
                </nav>
            </header>
        <div class="kontainer">
            <main>
                <form action="min_sida.php" class="kolumner"  method="post">
                    <div>
                        <label>Förnamn</label>
                        <input class="form-control" type="text" name="fnamn" required>
                        <label>Efternamn</label>
                        <input class="form-control" type="text" name="enamn" required>
                        <label>Adress</label>
                        <input class="form-control" type="text" name="adress">
                        <label>Epost</label>
                        <input class="form-control" type="email" name="epost" required>
                        <label>Mobil</label>
                        <input class="form-control" type="text" name="mobil">
                    </div>
                    <div>
                        <label>Kön</label>
                        <select class="form-control" name="kon">
                            <option value="1">Man</option>
                            <option value="2">Kvinna</option>
                            <option value="3">Annat</option>
                        </select>
                        <label>Användarnamn</label>
                        <input class="form-control" type="text" name="anamn" required>
                        <label>Lösenord</label>
                        <input id="losen" class="form-control" type="password" name="losen" required>
                        <label>Upprepa lösenord</label>
                        <input id="ulosen" class="form-control" type="password" name="ulosen" required>
                        <label></label><button class="btn btn-primary login-btn" name="registrera"
                        >Registrera</button>
                    </div>
                </form>
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

<?php
    include "includes/inloggningsruta.php";
    include "includes/frameworks.php";
?>
        <script src="js/login.js"></script>
    </body>

    </html>
