<?php

try {
    foreach ($conn->query('SELECT id, titre FROM missions', PDO::FETCH_ASSOC) as $user) {
    $id = $user['id'];
    $nom = $user['titre'];
    echo "<option value=$id> $nom </option>";
    }
} catch (PDOException $e) {
    echo 'Impossible de récupérer la liste des missions';
}