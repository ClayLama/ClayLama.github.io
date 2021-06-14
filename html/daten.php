<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="../img/Komprimiert/RateThemLogo.png">
	  <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
  	<title>RateThem | Geheime Daten</title>
  </head>
  <body>
    
    <div id="upperBox" class="obereBox">
      <div class="button" id="button1"  onclick="open1()">&#9776;</div>
      <a href="Home.html"><img src="../img/Komprimiert/RateThemLogoMitText1.png" width="203.94" height="45" class="img123"></a>
    </div>
    <div id="leftBox" class="linkeBox">
      <div id="home01" class="haus01" style="background-color: #2a2c2f;"> <a href="Home.html" class="id00"><img id="imgid00" src="" height="40px" width="40px" vspace="10px"><br></a></div>
      <div id="home02" class="haus01"><a href="Login.php" class="id01"><img id="imgid01" src="" height="40px" width="40px" vspace="10px"><br></a></div>
      <div id="home03" class="haus01"><a href="Lehrer.html" class="id02"><img id="imgid02" src="" height="40px" width="40px" vspace="10px"><br></a></div>
      <div id="home04" class="haus01"><a href="Tierlist.html" class="id03"><img id="imgid03" src="" height="40px" width="40px" vspace="10px"><br></a></div>
      <div id="home05" class="haus01"><a href="About.html" class="id04"><img id="imgid04" src="" height="40px" width="40px" vspace="10px"><br></a></div>
    </div>

    <div id="main" class="mainClass">
      <h1>Alle Daten:</h1>
      <?php 
            $servername = "localhost";
            $user = "root";
            $pw = "";
            $db = "meinedatenbank";

            $con = new mysqli($servername, $user, $pw, $db);

            $sql = "SELECT * FROM user";

            $db_erg = mysqli_query( $con, $sql );
            if ( ! $db_erg ){
              die('Ungültige Abfrage: ' . mysqli_error());
            }

            echo '<table border = "1px solid">';
            while ($zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC))
            {
                  echo "<tr>";
                  echo "<td>". $zeile['ID'] . "</td>";
                  echo "<td>". $zeile['TimeStamp'] . "</td>";
                  echo "<td>". $zeile['email'] . "</td>";
                  echo "<td>". $zeile['name'] . "</td>";
                  echo "<td>". $zeile['username'] . "</td>";
                  echo "<td>". $zeile['password'] . "</td>";
                  echo "</tr>";
              }
              echo "</table>";

              mysqli_free_result( $db_erg );
        ?>
    </div>
    <script>
      if (1 == 1) {
        open1()
        Check()
      }
    </script>
    </body>
</html>