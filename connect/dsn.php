<?php

$host = 'ec2-18-209-153-180.compute-1.amazonaws.com';
$dbname = 'd364clio7jt1g6';
$username = 'efdekfahnguxsi';
$password = '2dd8040f754fea14b9f4ffb6a6c1af2f24e4a69a8939defbbd5a0c5ddbddce53';

$dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";

try {
    $conn = new PDO($dsn);

} catch (PDOException $PDOException) {
    echo 'echec de la connexion';
}