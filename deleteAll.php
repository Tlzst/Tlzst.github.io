<?php

$db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

$sql = "DELETE from personne";
//echo ($sql);
$statement = $db->prepare($sql);
$statement->execute();

header("Location: index");
