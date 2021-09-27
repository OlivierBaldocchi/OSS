<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.html';?> 

<body class="yellow">
    <?php

    require_once 'dsn.php';    

    $statement = $conn->prepare('SELECT * FROM admins WHERE mail = :email');
    $statement->bindValue(':email', $_POST['mail']);
    if ($statement->execute()) {
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        if ($user === false) {
            echo 'Identifiants Invalides!';
        } else {
            if (password_verify($_POST['password'], $user['mot_de_passe'])) {
                session_start();
                $_SESSION['connexion'] = 'ADMIN';
                header("location:../dashboard/dashboard.php");
            } else {
                echo 'Identifiants Invalides!';
            }
        }
    } else {
        echo 'Impossible de récupérer l\'utilisateur';
    }
    
    ?>
</body>    

