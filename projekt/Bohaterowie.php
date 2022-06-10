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
            <a href="bohaterowie.php" class="current">Bohaterowie</a>
            <a href="Uniwersum.php">Regiony</a>
            <a href="Esport.php">Esport</a>
            <div class="podkresl"></div>
        </div>


    </div>
    <br><br>
	
    <div style="text-align:center;">
	<table class="avatary" align="center">
	<ul>
       <?php
	   $licznik=0;
	    $wynik = mysqli_query($mysqli,"SELECT * FROM bohaterowie");
	while($row = mysqli_fetch_array($wynik))
	{
		echo "<li>
                <a class='img' >
                        <div class='img__overlay'>";
						echo $row['nazwa'];
						echo "</div><img src='";
						echo $row['avatarUrl'];
						echo"' class='obrazAv' style='width:170px;height:170px;border:0' /></a>
                </li>";
	}
				
				
				 



/*	   <table class="avatary" align="center">
            <ul>
                <li>

                    <a class="img" href="">
                        <div class="img__overlay">AAtrox</div><img src="Obrazy/avatary/Aatrox.png" class="obrazAv" style="width:170px;height:170px;border:0" /></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Akali</div><img src="Obrazy/avatary/Akali.png" class="obrazAv" style="width:170px;height:170px;border:0" /></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Ahri</div><img src="Obrazy/avatary/Ahri.png" class="obrazAv" style="width:170px;height:170px;border:0" /></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Alistar</div><img src="Obrazy/avatary/Alistar.png" class="obrazAv" style="width:170px;height:170px;border:0" /></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Amumu</div><img src="Obrazy/avatary/Amumu.png" class="obrazAv" style="width:170px;height:170px;border:0" /></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Anivia</div><img src="Obrazy/avatary/Anivia.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Annie</div><img src="Obrazy/avatary/Annie.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
             
                    <a class="img" href="">
                        <div class="img__overlay">Ashe</div><img src="Obrazy/avatary/Ashe.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>

            </ul>
            <ul>

                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Aurelion Sol</div><img src="Obrazy/avatary/AurelionSol.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Azir</div><img src="Obrazy/avatary/Azir.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Bard</div><img src="Obrazy/avatary/Bard.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Blitzcrank</div><img src="Obrazy/avatary/Blitzcrank.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Brand</div> <img src="Obrazy/avatary/Brand.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Braum</div><img src="Obrazy/avatary/Braum.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Caitlyn</div><img src="Obrazy/avatary/Caitlyn.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Camille</div><img src="Obrazy/avatary/Camille.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
            </ul>
            <ul>

                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Cassiopeia</div><img src="Obrazy/avatary/Cassiopeia.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Cho'Gath</div><img src="Obrazy/avatary/ChoGath.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Corki</div><img src="Obrazy/avatary/Corki.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Darius</div><img src="Obrazy/avatary/Darius.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Diana</div><img src="Obrazy/avatary/Diana.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Dr Mundo</div><img src="Obrazy/avatary/DrMundo.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Draven</div><img src="Obrazy/avatary/Draven.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Ekko</div><img src="Obrazy/avatary/Ekko.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
            </ul>
            <ul>

                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Elise</div><img src="Obrazy/avatary/Elise.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Evelynn</div><img src="Obrazy/avatary/Evelynn.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Ezreal</div><img src="Obrazy/avatary/Ezreal.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Fiddlesticks</div><img src="Obrazy/avatary/Fiddlesticks.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Fiora</div><img src="Obrazy/avatary/Fiora.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Fizz</div><img src="Obrazy/avatary/Fizz.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Galio</div><img src="Obrazy/avatary/Galio.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Gangplank</div><img src="Obrazy/avatary/Gangplank.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
            </ul>
			 <ul>

                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Garen</div><img src="Obrazy/avatary/Garen.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Gnar</div><img src="Obrazy/avatary/Gnar.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Gragas</div><img src="Obrazy/avatary/Gragas.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Graves</div><img src="Obrazy/avatary/Graves.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Hecarim</div><img src="Obrazy/avatary/Hecarim.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Heimerdinger</div><img src="Obrazy/avatary/Heimerdinger.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Illaoi</div><img src="Obrazy/avatary/Illaoi.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Irelia</div><img src="Obrazy/avatary/Irelia.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
            </ul>
            <ul>

                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Ivern</div><img src="Obrazy/avatary/Ivern.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Janna</div> <img src="Obrazy/avatary/Janna.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Jarvan IV</div> <img src="Obrazy/avatary/JarvanIV.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Jax</div> <img src="Obrazy/avatary/Jax.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Jayce</div> <img src="Obrazy/avatary/Jayce.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Jhin</div><img src="Obrazy/avatary/Jhin.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Jinx</div><img src="Obrazy/avatary/Jinx.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Kai'Sa</div><img src="Obrazy/avatary/KaiSa.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
            </ul>
            <ul>

                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Kalista</div><img src="Obrazy/avatary/Kalista.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Karma</div><img src="Obrazy/avatary/Karma.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Karthus</div><img src="Obrazy/avatary/Karthus.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Kassadin</div> <img src="Obrazy/avatary/Kassadin.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Katarina</div><img src="Obrazy/avatary/Katarina.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Kayle</div><img src="Obrazy/avatary/Kayle.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Kayn</div><img src="Obrazy/avatary/Kayn.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Kennen</div><img src="Obrazy/avatary/Kennen.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
            </ul>
            <ul>

                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Kha'Zix</div><img src="Obrazy/avatary/KhaZix.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Kindred</div> <img src="Obrazy/avatary/Kindred.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Kled</div><img src="Obrazy/avatary/Kled.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Kog'Maw</div> <img src="Obrazy/avatary/KogMaw.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="LeBlanc.html">
                        <div class="img__overlay">Le Blanc</div><img src="Obrazy/avatary/LeBlanc.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Lee Sin</div> <img src="Obrazy/avatary/LeeSin.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Leona</div><img src="Obrazy/avatary/Leona.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Lissandra</div> <img src="Obrazy/avatary/Lissandra.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
            </ul>
            <ul>

                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Lucian</div> <img src="Obrazy/avatary/Lucian.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Lulu</div> <img src="Obrazy/avatary/Lulu.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Lux</div> <img src="Obrazy/avatary/Lux.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Maplhite</div> <img src="Obrazy/avatary/Malphite.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Malzahar</div> <img src="Obrazy/avatary/Malzahar.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Maokai</div><img src="Obrazy/avatary/Maokai.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Master Yi</div><img src="Obrazy/avatary/MasterYi.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Miss Fortune</div> <img src="Obrazy/avatary/MissFortune.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
            </ul>
            <ul>

                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Mordekaiser</div><img src="Obrazy/avatary/Mordekaiser.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Morgana</div><img src="Obrazy/avatary/Morgana.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Nami</div> <img src="Obrazy/avatary/Nami.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Nasus</div> <img src="Obrazy/avatary/Nasus.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Nautilus</div><img src="Obrazy/avatary/Nautilus.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>

                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Neeko</div><img src="Obrazy/avatary/Neeko.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Nidalee</div><img src="Obrazy/avatary/Nidalee.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Nocturne</div><img src="Obrazy/avatary/Nocturne.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
            </ul>
            <ul>

                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Nunu i Willump</div><img src="Obrazy/avatary/NunuiWillump.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Olaf</div><img src="Obrazy/avatary/Olaf.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Orianna</div><img src="Obrazy/avatary/Orianna.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Ornn</div><img src="Obrazy/avatary/Ornn.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Pantheon</div> <img src="Obrazy/avatary/Pantheon.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>

                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Poppy</div><img src="Obrazy/avatary/Poppy.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Pyke</div><img src="Obrazy/avatary/Pyke.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
                <li>
                    <a class="img" href="">
                        <div class="img__overlay">Quinn</div><img src="Obrazy/avatary/Quinn.png" class="obrazAv" style="width:170px;height:170px;border:0"></a>
                </li>
            </ul>


        </table>
		
		*/?>
		
		</ul>
		</table>
    </div>
	
	<br><br><br><br>


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

</html