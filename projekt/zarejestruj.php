<?php
session_start();
$database = include('config.php');

$mysqli = new mysqli($database['host'], $database['user'], $database['pass'], $database['name']);
$wynik = mysqli_query($mysqli,"SELECT * FROM uzytkownicy");
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="Obrazy/Lol.png">
    <title> League of Legends | Informacje </title>

    <link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="content">

        <img src="Obrazy/obraz.png">
        <div class="menu nav">
            <a href="">Aktualnosci</a>
            <a href="">Bohaterowie</a>
            <a href="">Regiony</a>
            <a href="">Esport</a>
            <div class="podkresl"></div>
        </div>
		<center>
		<br><br>
<form action="zarejestruj.php" method="POST">
Login i hasło muszą zawierać minimum 5 znaków.<br><br>
<label for="login">Login:</label>
<input type="text" id="login" name="login">  <br> <br>

<label for="haslo">Hasło:</label>
<input type="password" id="haslo" name="haslo"><br> <br>

<label for="email">E-mail:</label>
<input type="text" id="email" name="email">

<br><br>
<input type="submit" class="button" value="ZAREJESTRUJ" name="dodaj"/>
</form>
<?php
if ((isset($_POST['login'])) && (isset($_POST['email'])) && (isset($_POST['haslo'])))
{
	if ((($_POST['login']!='') && ($_POST['haslo']!='')) && ($_POST['email']!=''))
	{

		$login=$_POST['login'];
		$haslo=$_POST['haslo'];
		$email=$_POST['email'];
		$rejestracja = mysqli_query($mysqli,"SELECT login, haslo FROM uzytkownicy WHERE login = '".$login."';");
		$czyZajety=mysqli_num_rows($rejestracja);
		$czyWymagania=false;
		
		if ($czyZajety==0)
		{
			if ((strlen($login)>4) && (strlen($haslo) > 4))
		{
			$czyWymagania=true;
		}
		else
		{
			echo "Login lub hasło nie spełniają wymagań";
		}
			if ($czyWymagania==true)
			{
			$dodaj="INSERT INTO uzytkownicy (login,haslo,email) VALUES ( '".$login."','".$haslo."','".$email."')";
			if (mysqli_query($mysqli,$dodaj))
			{
			echo "Konto pomyślnie utworzone.";
			}
			}
		}
		else
		{
			echo "Login zajęty";
		}
		
	}
	else
	{
		echo "WPROWADZONO NIEPRAWIDŁOWE DANE !";
	}
}



?>
<br><br>
<br>
<a href="index.php">
<button type="button" class="button" name="login"> POWRÓT DO LOGOWANIA </button>
</a>

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