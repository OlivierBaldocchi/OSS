<?php

$host = 'localhost';
        $dbname = 'OSS';
        $username = 'postgres';
        $password = 'bddcinema';
        $dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";

try {
    $conn = new PDO($dsn);

} catch (PDOException $PDOException) {
    echo 'echec de la connexion';
}