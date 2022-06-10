<?php
session_start();
$database = include('config.php');
if (isset($_SESSION['zalogowany']))
	{
		header('Location: aktualnosci.php');
		exit();
	}
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
<form action="index.php" method="POST">

<label for="login">Login:</label>
<input type="text" id="login" name="login"> <br> <br>

<label for="haslo">Hasło:</label>
<input type="password" id="haslo" name="haslo">
<br><br>
<input type="submit" class="button" value="ZALOGUJ SIĘ" name="dodaj"/>
</form>
<br><br>
<?php
$mysqli = new mysqli($database['host'], $database['user'], $database['pass'], $database['name']);
if ((isset($_POST['login'])) && (isset($_POST['haslo'])))
{
	$login=$_POST['login'];
	$haslo=$_POST['haslo'];
$logowanie = mysqli_query($mysqli,"SELECT login, haslo FROM uzytkownicy WHERE login = '".$login."' AND haslo = '".$haslo."';");

$zalogowano=mysqli_num_rows($logowanie);
if ($zalogowano==1)
{
	echo "POMYŚLNIE ZALOGOWANO";
	$uprawnienia=mysqli_query($mysqli,"SELECT uprawnienia FROM uzytkownicy WHERE login = '".$login."' AND haslo = '".$haslo."';");
while($row = mysqli_fetch_array($uprawnienia))
{
	$kto=$row['uprawnienia'];
	$_SESSION['uprawnienia']=$kto;
}

	$_SESSION['zalogowany'] = true;
	$_SESSION['uzytkownik']=$login;
	header("Refresh: 1; URL='index.php'");
}
else
{
	echo "NIEPRAWIDŁOWY LOGIN LUB HASŁO";
}

}
?>
<br><br>
Nowy użytkownik ? 
<br>
<a href="zarejestruj.php">
<button type="button" class="button" name="zaloz"> ZAŁÓŻ KONTO </button>
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