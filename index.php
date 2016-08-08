<?php

include $_SERVER['DOCUMENT_ROOT'].'/functions.php';

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=procedural', 'root', '');
} catch (PDOException $e) {
    die('Could not connect to database.');
}

$statement = $pdo->prepare('select * from users');

$statement->execute();

$users = $statement->fetchAll(PDO::FETCH_OBJ);

require 'index.view.php';
