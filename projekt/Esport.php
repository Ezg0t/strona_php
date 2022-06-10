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
            <a href="Uniwersum.php">Regiony</a>
            <a href="Esport.php" class="current">Esport</a>
            <div class="podkresl"></div>
        </div>


    </div>
    <div class="srodek">

        <div>
		
		
			<div id="twitch-embed"></div>

    <!-- Load the Twitch embed script -->
    <script src="https://embed.twitch.tv/embed/v1.js"></script>

    <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
    <script type="text/javascript">
      new Twitch.Embed("twitch-embed", {
        width: 1320,
        height: 480,
        channel: "riotgames",
        // only needed if your site is also embedded on embed.example.com and othersite.example.com 
      });
    </script>
	
	<?php
	$wynik = mysqli_query($mysqli,"SELECT * FROM eventy");
	while($row = mysqli_fetch_array($wynik))
		{
			echo "<img src='Obrazy/rainbow.jpg' height='6'>";
			echo"<div class='obraz2'><img src='";
			echo $row['obrazUrl'];
			echo "'></div>";
			echo "<h1>".$row['nazwa']; echo "</h1><br>";
			echo $row['opis'];echo"<BR><BR><BR><BR><BR>";
			
			
			}
	

?>

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