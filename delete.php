<?php

if (empty($_GET["prenom"]))
    header("Location: index");

$db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

$sql = "DELETE from personne where prenom = '" . htmlspecialchars($_GET["prenom"]) . "' LIMIT 1";
//echo ($sql);
$statement = $db->prepare($sql);
$statement->execute();

header("Location: index");
