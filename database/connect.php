<?php
    $host   = 'localhost';
    $user   = 'root';
    $password   = '';
    $dbName     = 'test';

    //stockage
    $db = mysqli_connect($host, $user, $password, $dbName)  or die('Si n arrive pas conecter sur bdd');

    // objet qui appartient a php et qui me permet ma connexion 

    // $pdo = new PDO("mysql:host=$host;port=3307;dbname=$dbName", $user,$password);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // // Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
    // $pdo->exec('SET NAMES UTF8');

    echo 'Great you are connected successfully into the db';