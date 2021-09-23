<?php

try {
    foreach ($conn->query('SELECT id, code, pays FROM planques', PDO::FETCH_ASSOC) as $user) {
    $id = $user['id'];
    $code = $user['code'];
    $pays = $user['pays'];
    echo "<option value=$id> $code $pays </option>";
    }
} catch (PDOException $e) {
    echo 'Impossible de récupérer la liste des planques';
}