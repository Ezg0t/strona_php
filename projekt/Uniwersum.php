<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="Obrazy/Lol.png">
    <title> League of Legends | Bohaterowie </title>

    <link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
</head>

<body>

<?php
session_start();
$database = include('config.php');
$mysqli = new mysqli($database['host'], $database['user'], $database['pass'], $database['name']);
if (!isset($_SESSION['uprawnienia']))
{
	header('Location: index.php');
		exit();
}
 echo "<div class='pasek'><b>Witaj ";
echo $_SESSION['uzytkownik'];
echo "</b><a href='wyloguj.php'> <button type='button'>Wyloguj się</button></a> ";
if ($_SESSION['uprawnienia']=='admin')
{
	echo "<a href='admin.php'> <button type='button'>PANEL ADMINA</button></a> </div>";
	
}
else
{
	echo "</div>";
}

	

	?>
    <div class="content">

        <img src="Obrazy/obraz.png">
        <div class="menu nav">
            <a href="aktualnosci.php">Aktualnosci</a>
            <a href="bohaterowie.php">Bohaterowie</a>
            <a href="Uniwersum.php" class="current">Regiony</a>
            <a href="Esport.php">Esport</a>
            <div class="podkresl"></div>
        </div>


    </div>
<?php
   echo "<div class=center align='center'>";
			echo "<table class='avatary'>";
			echo "<ul>";
   $wynik = mysqli_query($mysqli,"SELECT * FROM regiony");
	while($row = mysqli_fetch_array($wynik))
		{
			/*echo "<img src='Obrazy/rainbow.jpg' height='6'>";
			echo"<div class='obraz2'><img src='";
			echo $row['obrazUrl'];
			echo "'></div>";
			echo "<h1>".$row['nazwa']; echo "</h1><br>";
			echo $row['opis'];echo"<BR><BR><BR><BR><BR>";*/
			
            
            echo " <li style='margin:20px;'>";
				
			echo "<div class='container1'>";
                        echo "<img src='";
						echo $row['obrazUrl'];
						
						echo "' alt='Avatar' class='image1'>";
						echo "
                        <div class='overlay1'>
                            <div class='text1'>
                                <img src='";
								echo $row['ikonaUrl'];
								echo "' alt='Avatar' class='image1'>
                                <h2 class='naglowek'>";
								echo $row['nazwa'];
								
								
								echo"</h2>
                            </div>
                        </div>
                    </div>
					</li>"
					
					
					
					;
					
					
			}
			echo "</ul>";
			echo "</table";
			echo "</div>";
			
/*
   <div class=center align="center">


        <table class="avatary">
            <ul>
                <li style="margin:20px;">

                    <div class="container1">
                        <img src="Obrazy/Uniwersum/BandleCity.jpg" alt="Avatar" class="image1">
                        <div class="overlay1">
                            <div class="text1">
                                <img src="Obrazy/Uniwersum/Bandle_City_Crest_icon.png" alt="Avatar" class="image1">
                                <h2 class="naglowek">Bandle City</h2>
                            </div>
                        </div>
                    </div>


                </li>

                <li style="margin:20px;">
                    <div class="container1">
                        <img src="Obrazy/Uniwersum/Bilgewater.jpg" alt="Avatar" class="image1">
                        <div class="overlay1">
                            <div class="text1"><img src="Obrazy/Uniwersum/Bilgewater_Crest_icon.png" alt="Avatar" class="image1">
                                <h2 class="naglowek">Bilgewater</h2>
                            </div>
                        </div>
                    </div>

                </li>
                <li style="margin:20px;">
                    <div class="container1">
                        <img src="Obrazy/Uniwersum/Demacia.jpg" alt="Avatar" class="image1">
                        <div class="overlay1">
                            <div class="text1"><img src="Obrazy/Uniwersum/Demacia_Crest_icon.png" alt="Avatar" class="image1">
                                <h2 class="naglowek">Demacia</h2>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul>
                <li style="margin:20px;">
                    <div class="container1">
                        <img src="Obrazy/Uniwersum/Freljord.jpg" alt="Avatar" class="image1">
                        <div class="overlay1">
                            <div class="text1"><img src="Obrazy/Uniwersum/Freljord_Crest_icon.png" alt="Avatar" class="image1">
                                <h2 class="naglowek">Frejlord</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="margin:20px;">
                    <div class="container1">
                        <img src="Obrazy/Uniwersum/mounttargon.jpg" alt="Avatar" class="image1">
                        <div class="overlay1">
                            <div class="text1"><img src="Obrazy/Uniwersum/Mount_Targon_Crest_icon.png" alt="Avatar" class="image1">
                                <h2 class="naglowek">Góra Targon</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="margin:20px;">
                    <div class="container1">
                        <img src="Obrazy/Uniwersum/Ionia.jpg" alt="Avatar" class="image1">
                        <div class="overlay1">
                            <div class="text1"><img src="Obrazy/Uniwersum/Ionia_Crest_icon.png" alt="Avatar" class="image1">
                                <h2 class="naglowek">Ionia</h2>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul>
                <li style="margin:20px;">
                    <div class="container1">
                        <img src="Obrazy/Uniwersum/Noxus.jpg" alt="Avatar" class="image1">
                        <div class="overlay1">
                            <div class="text1"><img src="Obrazy/Uniwersum/Noxus_Crest_icon.png" alt="Avatar" class="image1">
                                <h2 class="naglowek">Noxus</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="margin:20px;">
                    <div class="container1">
                        <img src="Obrazy/Uniwersum/Piltover.jpg" alt="Avatar" class="image1">
                        <div class="overlay1">
                            <div class="text1"><img src="Obrazy/Uniwersum/Piltover_Crest_icon.png" alt="Avatar" class="image1">
                                <h2 class="naglowek">Piltover</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="margin:20px;">
                    <div class="container1">
                        <img src="Obrazy/Uniwersum/pustka.jpg" alt="Avatar" class="image1">
                        <div class="overlay1">
                            <div class="text1"><img src="Obrazy/Uniwersum/Void_Crest_icon.png" alt="Avatar" class="image1">
                                <h2 class="naglowek">Pustka</h2>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul>
                <li style="margin:20px;">
                    <div class="container1">
                        <img src="Obrazy/Uniwersum/Shurima.jpg" alt="Avatar" class="image1">
                        <div class="overlay1">
                            <div class="text1"><img src="Obrazy/Uniwersum/shurima_crest_icon.png" alt="Avatar" class="image1">
                                <h2 class="naglowek">Shurima</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="margin:20px;">
                    <div class="container1">
                        <img src="Obrazy/Uniwersum/ShadowIsles.jpg" alt="Avatar" class="image1">
                        <div class="overlay1">
                            <div class="text1"><img src="Obrazy/Uniwersum/shadowisles.png" alt="Avatar" class="image1">
                                <h2 class="naglowek">Wyspy Cienia</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="margin:20px;">
                    <div class="container1">
                        <img src="Obrazy/Uniwersum/Zaun.jpg" alt="Avatar" class="image1">
                        <div class="overlay1">
                            <div class="text1"><img src="Obrazy/Uniwersum/zaun.png" alt="Avatar" class="image1">
                                <h2 class="naglowek">Zaun</h2>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </table>
    </div>
	*/
	?>
    <br><br><br>
    <footer>
        <a href="https://www.facebook.com/leagueoflegendspolska/" class="icon">
            <img src="Obrazy/Ikony/facebook.png">
        </a>
        <a href="https://www.instagram.com/leagueoflegends/?hl=pl" class="icon">
            <img src="Obrazy/Ikony/insta1.png">
        </a>
        <a href="https://signup.eune.leagueoflegends.com/pl/signup/redownload" class="icon">
            <img src="Obrazy/Ikony/down.png">
        </a>

    </footer>


</body>

</html>