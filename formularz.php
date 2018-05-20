<html>
<head>
	<meta charset="UTF-8">
	<meta name="Sklep muzyczny">
	<link rel="stylesheet" href="muzyka.css">
 </head>
 
 <body>
 <div id="main">
	<div id="baner">
		<h1>SKLEP MUZYCZNY</h1>
	</div>
	<div id="leftpanel">
		<h2>NASZA OFERTA</h2>
		<ol>
			<li>Instrumenty muzyczne</ul>
			<li>Sprzęt audio</ul>
			<li>Płyty CD</ul>
		<ol>	
	</div>
</div>
 </body>
 </html>
<?php

$db = mysqli_connect('localhost', 'root', '', 'sklep');

$imie = $_POST["firstname"];
$nazwisko = $_POST["lastname"];
$adres = $_POST["adress"];
$telefon = $_POST["phone"];
$login = $_POST["username"];
$haslo = $_POST["password"];	

  	$osobowe = "INSERT INTO uzytkownicy (imie, nazwisko, adres, telefon) VALUES ('$imie', '$nazwisko', '$adres', '$telefon')";
	$logowania = "INSERT INTO konta (login, haslo) VALUES ('$login', '$haslo')";
  	mysqli_query($db, $osobowe);
  	mysqli_query($db, $logowania);

  	mysqli_close($db);

  	echo "Konto ", $imie, " ", $nazwisko, " zostało zarejestrowane w sklepie muzycznym";
?>