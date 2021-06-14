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
              die("Funktioniert nicht".$con->connect_error);
            }
            
          $email1 = $_POST["email"];
          $name1 = $_POST["fullName"];
          $userName1 = $_POST["userName"];
          $password1 = $_POST["psw"];

          $sql = "INSERT INTO user (email, name, username, password) VALUES ('$email1', '$name1', '$userName1', '$password1')";

          if($con->query($sql) === TRUE) {
            echo "Mit datenbank verbunden <br> Ihre Daten wurden in die Datenbank eingetragen und sind unter 'daten.php' zur Überprüfung zu finden.";
        }
        else {
            echo "Verbindung zu der Datenbank ist fehlgeschlagen" . $con->error;
    
        }          
          $con->close();
        ?>

  </body>
</html>