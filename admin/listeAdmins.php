<?php

try {
    foreach ($conn->query('SELECT id, prénom, nom FROM admins', PDO::FETCH_ASSOC) as $user) {
    $id = $user['id'];
    $nom = $user['nom'];
    $prenom = $user['prénom'];
    echo "<option value=$id> $prenom $nom </option>";
    }
} catch (PDOException $e) {
    echo 'Impossible de récupérer la liste des administrateurs';
}