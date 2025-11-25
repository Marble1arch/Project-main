<?php
$host = 'localhost';
$recipe = 'root';
$img = '';
$description = '';

try {
    // Izveido savienojumu bez datu bāzes
    $pdo = new PDO("mysql:host=$host", $recipe, $img,$description);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Izveido datu bāzi
    $pdo->exec("CREATE DATABASE IF NOT EXISTS photo_app");
    $pdo->exec("USE photo_app");
    
    // Izveido tabulu
    $pdo->exec("CREATE TABLE data (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    recepie VARCHAR(255) NOT NULL,
    img VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL
    )");
    
    echo "Database and table created successfully!";
    
} catch(PDOException $e) {
    die("Error: " . $e->getMessage());
}
$host = 'localhost';
$dbname = 'photo_app';
$recipe = 'root';
$img = '';
$description = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $recipe, $img, $description);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Ja datu bāze neeksistē, mēģina to izveidot
    if ($e->getCode() == 1049) {
        try {
            $pdo = new PDO("mysql:host=$host", $recipe, $img,$description);
            $pdo->exec("CREATE DATABASE $dbname");
            $pdo->exec("USE $dbname");
            $pdo->exec("CREATE TABLE data (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    recepie VARCHAR(255) NOT NULL,
    img VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL
);
            )");
            
            // Pārslēdzas atpakaļ uz izveidoto datu bāzi
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $recipe, $img,$description);
            
        } catch(PDOException $e2) {
            die("Could not create database: " . $e2->getMessage());
        }
    } else {
        die("Connection failed: " . $e->getMessage());
    }
}
//Meklē datus datubāzē
$stmt = $pdo -> prepare("SELECT * FROM data");
$stmt -> exectute();
$results = $stmt -> fetch(PDO::FETCH_ASSOC);
?>