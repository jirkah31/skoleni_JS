<?php
	$nazevProduktu = $_GET["nazevProduktu"]; //informace jsou odeslaný metodou GET v URL té stránky

	//vytvoření databázového psojení
	$db = new PDO(
		"mysql:host=localhost;dbname=eshop;charset=utf8",
		"root",
		"", //heslo
		array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		),
	);

	//zjistíme produkt z jeho databáze podle nazvu
	//TOTO je mySQL
	$dotaz = $db->prepare("SELECT * FROM product WHERE nazev = ?");
	$dotaz ->execute([$nazevProduktu]);

	$produkt = $dotaz ->fetch();

	echo json_encode($produkt);

	?>