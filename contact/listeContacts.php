<?php

try {
    foreach ($conn->query('SELECT id, prénom, nom FROM contacts', PDO::FETCH_ASSOC) as $user) {
    $id = $user['id'];
    $nom = $user['nom'];
    $prenom = $user['prenom'];
    echo "<option value=$id> $prenom $nom </option>";
    }
} catch (PDOException $e) {
    echo 'Impossible de récupérer la liste des contacts';
}