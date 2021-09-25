<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.html';
require_once 'https://php-postgre-studi.herokuapp.com/include.php'?>

<body class='yellow'>

    <?php

    
    
    
    if (isset($_POST['cancel'])) {
        $choix = $_POST['cancel'];
        $statement = $conn->prepare("DELETE FROM admins WHERE id = '$choix' ");
        if ($statement->execute()) {
            echo 'L\'administrateur' . '<br>' . 'a été supprimé';
        } else {
            echo 'Impossible de supprimer l\'administrateur';
        }
    } else {
        echo 'Vous n\'êtes pas autorisé';
    }
    
    ?>
    
</body>