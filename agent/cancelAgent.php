<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.php'?>

<body class='yellow'>

    <?php

    
    if (isset($_POST['cancel'])) {
        $choix = $_POST['cancel'];
        $statement = $conn->prepare("DELETE FROM agents WHERE id = '$choix' ");
        if ($statement->execute()) {
            echo 'L\'agent' . '<br>' . 'a été supprimé';
        } else {
            echo 'Impossible de supprimer l\'agent';
        }
    } else {
        echo 'Vous n\'êtes pas autorisé';
    }
    ?>
    
</body>