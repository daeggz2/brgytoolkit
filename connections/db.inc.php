<?php
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "sanjose";

    try {
        $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
    catch (PDOException $e) {
        die('Connection Error: ' . $e->getMessage());
    }