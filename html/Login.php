<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="../img/Komprimiert/RateThemLogo.png">
	  <link rel="stylesheet" href="../css/styleLogin.css">
    <script src="../js/script.js"></script>
    <meta http-equiv="refresh" content="2000">
  	<title>RateThem | Login</title>
  </head>
  <body>
    
    <div id="upperBox" class="obereBox">
      <div class="button" id="button1"  onclick="open1()">&#9776;</div>
      <a href="Home.html"><img src="../img/Komprimiert/RateThemLogoMitText1.png" width="203.94" height="45" class="img123"></a>
    </div>
    <div id="leftBox" class="linkeBox">
      <div id="home01" class="haus01"><a href="Home.html" class="id00"><img id="imgid00" src="" height="40px" width="40px" vspace="10px"><br></a></div>
      <div id="home02" class="haus01" style="background-color: #2a2c2f;"><a href="Login.php" class="id01"><img id="imgid01" src="" height="40px" width="40px" vspace="10px"><br></a></div>
      <div id="home03" class="haus01"><a href="Lehrer.html" class="id02"><img id="imgid02" src="" height="40px" width="40px" vspace="10px"><br></a></div>
      <div id="home04" class="haus01"><a href="Tierlist.html" class="id03"><img id="imgid03" src="" height="40px" width="40px" vspace="10px"><br></a></div>
      <div id="home05" class="haus01"><a href="About.html" class="id04"><img id="imgid04" src="" height="40px" width="40px" vspace="10px"><br></a></div>
    </div>

    <div id="main" class="mainClass">     <!--Main Offen-->

      <!--      LOGIN ALLGEMEIN     -->
    	<div id="LoginBox" class="LoginBoxClass"> <!--Login box auf-->
	    	<div class="LoginContent">
		    	<div align=center>
			    	<img src="../img/Komprimiert/RateThemLogoMitText1.png" height="30px">
				  </div>

          <!--      Anmeldung      -->
				  <p><h1>Anmeldung</h1></p>
				  <h4>Mit RateThem-Konto anmelden.</h4>
		    </div>
		    <div class="LoginInput">
          <form action="index1.php" method="POST">
				    <b style="padding-left: 15px;">Email:</b>
<!--email-->  <div align=center><input type="text" placeholder="E-Mail-Adresse" name="Inputemail" required autocomplete="off"></div>
      	    
      			<b style="padding-left: 15px;">Password:</b>
<!--pass-->   <div align=center><input type="password" placeholder="Passwort" name="Inputpsw" required autocomplete="off"></div>
        </div>

				<b><a class="passVerg" href="#Ist nicht mein Problem wenn du dein Passwort vergisst" style="padding-left: 15px;">Passwort vergessen?</a></b>
        
        <div class="flex-container">
          <a href="register.php" class="FlexRegisterButton" style="padding-left: 15px; padding-bottom: 5px;">Registrieren</a>
          <div class="flex-container2">
            <div class="FlexLoginButton"><input type="submit" value="weiter"></div>
          </div>
        </div>  
        </form>
        
	    </div>  <!--Login box zu-->
	  </div>    <!-- Main ZU-->
    
    



    <script>
      if (1 == 1) {
        open1()
        Check()
      }
    </script>
  </body>
</html>