<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="../img/Komprimiert/RateThemLogo.png">
	<link rel="stylesheet" href="../css/style.css">
  	<title>RateThem</title>
    </head>
  <body>
        <?php 

          $servername = "localhost";
          $user = "root";
          $pw = "";
          $db = "meinedatenbank";

          $con = new mysqli($servername, $user, $pw, $db);

           if($con->connect_error) {
              die("Fehler mit der Datenbank".$con->connect_error);
            }
            
          $_email = $_POST["Inputemail"];
          $_passwort = $_POST["Inputpsw"];

          echo "Ihre eingegebenen Daten sind:<br> Email: ";
          echo $_email;
          echo "<br> Passwort: ";
          echo $_passwort;
        ?>
        <br><br>Der Login funktioniert leider noch nicht, daran arbeiten wir noch. Die <br>Registrierung funktioniert jedoch einwandfrei.
        Die Registrierung ist <br><a href="register.php" style="color: #08FDD8;">hier</a> zu finden, falls sie die Registrierung mit der Datenbank abgleichen<br> wollen, können sie das <a href="daten.php" style="color: #08FDD8;">hier</a> tun.
  </body>
</html>