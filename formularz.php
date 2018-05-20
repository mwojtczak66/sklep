<?php

$db = mysqli_connect('localhost', 'root', '', 'sklep');

$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
$adres = $_POST["adres"];
$telefon = $_POST["telefon"];
$login = $_POST["login"];
$haslo = $_POST["haslo"];	

  	$query = "INSERT INTO uzytkownicy (imie, nazwisko, adres, telefon) VALUES ('$imie', '$nazwisko', '$adres', 'telefon')";
	$query_second = "INSERT INTO konta (login, haslo) VALUES ('$login', '$haslo')";
  	mysqli_query($db, $query);
  	mysqli_query($db, $query_second);

echo $adres;
?>