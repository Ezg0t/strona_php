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

$wynik = mysqli_query($mysqli,"SELECT * FROM eventy");
echo "<br><b>Lista eventów:</b>";
?>

<table>
<thead>
<tr>
<th width="35">ID</th>
<th width="100">NAZWA</th>
<th width="100">OPIS</th>
    <th>OBRAZ</th>
  </tr>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_array($wynik))
	{
		
			
		echo "<tr> <td>".$row['event_id']."</td> <td> ".$row['nazwa'] . " </td> <td> ".$row['opis'] . " </td>  <td> ".$row['obrazUrl']."</td><td>&nbsp;<a href='esportAdmin.php?did=".$row['event_id']."'>Usuń</a></td> <td>&nbsp;<a href='esportAdmin.php?edit=".$row['event_id']."'>Edytuj</a></td></tr>"; echo "<br>"; 
		
//{echo "<tr> <td>".$row['region_id']."</td> <td> ".$row['nazwa'] . " </td> <td> " . $row['obrazUrl']." </td> <td> ".$row['ikonaUrl']."</td> <td><a href='regionyAdmin.php?did=".$row['region_id']."'>Usuń</a></td></tr>"; echo "<br>"; }
	}
	
  echo"
</tbody>
</table>";
if(isset($_GET['did'])) {
    $delete_id = mysqli_real_escape_string($mysqli,$_GET['did']);
    $sql = mysqli_query($mysqli,"DELETE FROM eventy WHERE event_id = '".$delete_id."'");
    if($sql) {
        echo "Event usunięty";
		header("Refresh: 1; URL='esportAdmin.php'");
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

if(isset($_GET['edit'])) {
	
    $edit_id = mysqli_real_escape_string($mysqli,$_GET['edit']);
	$_SESSION['edit']=$edit_id;
	$nazwaSql = mysqli_query($mysqli,"SELECT nazwa FROM eventy WHERE event_id = '".$_SESSION['edit']."'");
	while($row = mysqli_fetch_array($nazwaSql))
	{
		$nazwa=$row['nazwa'];
		
	}
	$obrazSql = mysqli_query($mysqli,"SELECT obrazUrl FROM eventy WHERE event_id = '".$_SESSION['edit']."'");
	while($row = mysqli_fetch_array($obrazSql))
	{
		$obraz=$row['obrazUrl'];
		
	}
	$opisSql = mysqli_query($mysqli,"SELECT opis FROM eventy WHERE event_id = '".$_SESSION['edit']."'");
	while($row = mysqli_fetch_array($opisSql))
	{
		$opis=$row['opis'];
		
	}
	

	

	
	echo"
	<form action='esportAdmin.php' method='POST'>
	<label for='nazwa'>Nazwa:</label>
<input type='text' id='nazwa' name='nazwa' value='".$nazwa."'>

  <br> <br>

<label for='opis'>Opis:</label>
<input type='text' id='opis' name='opis' value='".$opis."'><br> <br>

<label for='obraz'>Obraz:</label>
<input type='text' id='obraz' name='obraz' value='".$obraz."'>
<br><br>
<input type='submit' class='button' value='ZAPISZ' name='zapisz'/>
</form>
";


}
if (isset($_POST['nazwa'])){

	$nazwa=$_POST['nazwa'];
	$edytuj=mysqli_query($mysqli,"UPDATE eventy
SET nazwa = '".$nazwa."' WHERE event_id = '".$_SESSION['edit']."'");
	if ($edytuj)
	{
		echo "<br>";
		echo "Nazwa zapisana";
		header("Refresh: 1; URL='esportAdmin.php'");
	}
}
if (isset($_POST['opis'])){

	$opis=$_POST['opis'];
	$edytuj=mysqli_query($mysqli,"UPDATE eventy
SET opis = '".$opis."' WHERE event_id = '".$_SESSION['edit']."'");
	if ($edytuj)
	{
		echo "<br>";
		echo "Opis zapisany";
		header("Refresh: 1; URL='esportAdmin.php'");
	}
}

if (isset($_POST['obraz'])){

	$obraz=$_POST['obraz'];
	$edytuj=mysqli_query($mysqli,"UPDATE eventy
SET obrazUrl = '".$obraz."' WHERE event_id = '".$_SESSION['edit']."'");
	if ($edytuj)
	{
		echo "<br>";
		echo "Obraz zapisany";
		header("Refresh: 1; URL='esportAdmin.php'");
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
if(!isset($_GET['edit'])){
	if ((isset($_POST['nazwaNowa'])) && (isset($_POST['opisNowy']))  && (isset($_POST['obrazNowy']))) {
	$nazwaNowa=$_POST['nazwaNowa'];
	$opisNowy=$_POST['opisNowy'];
	$obrazNowy=$_POST['obrazNowy'];
	
	$Dodaj=mysqli_query($mysqli,"INSERT INTO eventy (nazwa,opis,obrazUrl) VALUES ( '".$nazwaNowa."','".$opisNowy."','".$obrazNowy."')");
	if ($Dodaj)
	{
		echo "<br>";
		echo "Event dodany";
		header("Refresh: 1; URL='esportAdmin.php'");
	}
}
	
	
	
	
	
	
	
	
	
	
echo"
	<form action='esportAdmin.php' method='POST'>
	<label for='nazwa'>Nazwa:</label>
<input type='text' id='nazwaNowa' name='nazwaNowa'>

  <br> <br>

<label for='opis'>Opis:</label>
<input type='text' id='opisNowy' name='opisNowy'><br> <br>

<label for='obraz'>Obraz:</label>
<input type='text' id='obrazNowy' name='obrazNowy' value='Obrazy/esport/'>
<br><br>
<input type='submit' class='button' value='DODAJ' name='zapisz'/>
</form>
";}
?>

<br><br>



<br><br>
<a href="bohaterowieAdmin.php">
<button type="button" class="button" name="login"> ZARZĄDZAJ BOHATERAMI </button>
</a>


<a href="regionyAdmin.php">
<button type="button" class="button" name="login"> ZARZĄDZAJ REGIONAMI </button>
</a>

<a href="admin.php">
<button type="button" class="button" name="login"> ZARZĄDZAJ UŻYTKOWNIKAMI </button>
</a>


<br><br>
<a href="aktualnosci.php">
<button type="button" class="button" name="login"> POWRÓT </button>
</a>
<br><br><br><br><br><br><br><br><br><br>
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