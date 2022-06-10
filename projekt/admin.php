<?php
session_start();
$database = include('config.php');

$mysqli = new mysqli($database['host'], $database['user'], $database['pass'], $database['name']);
if (isset($_SESSION['uprawnienia']))
	{
		if ($_SESSION['uprawnienia']!='admin'){
			
		header('Location: aktualnosci.php');
		exit();
		}
	}
	else
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
<?php


 echo "<div class='pasek'><b>Witaj ";
echo $_SESSION['uzytkownik'];
echo "</b><a href='wyloguj.php'> <button type='button'>Wyloguj się</button></a> ";
if ($_SESSION['uprawnienia']=='admin')
{
	echo "<a href='admin.php'> <button type='button'>PANEL ADMINA</button></a> </div>";
	
}

	

	?>
    <div class="content">

        <img src="Obrazy/obraz.png">
        <div class="menu nav">
            <a href="aktualnosci.php">Aktualnosci</a>
            <a href="bohaterowie.php">Bohaterowie</a>
            <a href="uniwersum.php">Regiony</a>
            <a href="esport.php">Esport</a>
            <div class="podkresl"></div>
        </div>
		<center>
<?php
if (isset($_POST['usun']))
{
	$usun=$_POST['usun'];
	$usuwanie=mysqli_query($mysqli,"DELETE FROM uzytkownicy WHERE id_uzytkownika='$usun';");
}
if (isset($_POST['awans']))
{
	$awans=$_POST['awans'];
	$awansowanie=mysqli_query($mysqli,"UPDATE uzytkownicy SET uprawnienia='admin' WHERE id_uzytkownika='$awans';");
	
}

$wynik = mysqli_query($mysqli,"SELECT * FROM uzytkownicy");
echo "<br><b>Lista zarejestrowanych użytkowników:</b>";?>

<table>
<thead>
<tr>
<th width="35">ID</th>
<th width="100">NAZWA</th>
<th width="200">EMAIL</th>
    <th>UPRAWNIENIA</th>
  </tr>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_array($wynik))
	{echo "<tr> <td>".$row['id_uzytkownika']."</td> <td> ".$row['login'] . " </td> <td> " . $row['email']." </td> <td> ".$row['uprawnienia']." </td> <td><a href='admin.php?did=".$row['id_uzytkownika']."'>Usuń</a></td> <td>&nbsp;</td><td><a href='admin.php?promo=".$row['id_uzytkownika']."'> Awansuj</a></td> <td>&nbsp;</td><td><a href='admin.php?deg=".$row['id_uzytkownika']."'> Degraduj</a></td></tr>"; echo "<br>"; }

  echo"
</tbody>
</table>";
if(isset($_GET['did'])) {
    $delete_id = mysqli_real_escape_string($mysqli,$_GET['did']);
    $sql = mysqli_query($mysqli,"DELETE FROM uzytkownicy WHERE id_uzytkownika = '".$delete_id."'");
    if($sql) {
        echo "Użytkownik usunięty";
		header("Refresh: 1; URL='admin.php'");
    } else {
        echo "ERROR";
    }
}
if(isset($_GET['promo'])) {
    $awans_id = mysqli_real_escape_string($mysqli,$_GET['promo']);
    $sql = mysqli_query($mysqli,"UPDATE uzytkownicy SET uprawnienia='admin' WHERE id_uzytkownika = '".$awans_id."'");
    if($sql) {
        echo "Użytkownik awansowany";
		header("Refresh: 1; URL='admin.php'");
    } else {
        echo "ERROR";
    }
}

if(isset($_GET['deg'])) {
    $degraduj_id = mysqli_real_escape_string($mysqli,$_GET['deg']);
    $sql = mysqli_query($mysqli,"UPDATE uzytkownicy SET uprawnienia='uzytkownik' WHERE id_uzytkownika = '".$degraduj_id."'");
    if($sql) {
        echo "Użytkownik zdegradowany";
		header("Refresh: 1; URL='admin.php'");
    } else {
        echo "ERROR";
    }
}


?>

<br><br>

<br>

<a href="bohaterowieAdmin.php">
<button type="button" class="button" name="login"> ZARZĄDZAJ BOHATERAMI </button>
</a>

<a href="regionyAdmin.php">
<button type="button" class="button" name="login"> ZARZĄDZAJ REGIONAMI </button>
</a>

<a href="esportAdmin.php">
<button type="button" class="button" name="login"> ZARZĄDZAJ E-SPORTEM </button>
</a>


<br><br>
<a href="aktualnosci.php">
<button type="button" class="button" name="login"> POWRÓT </button>
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