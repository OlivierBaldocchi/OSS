<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.html'?>

<body class='yellow'>

    <?php

    include '../vue/buttonLogOut.php';
    include '../vue/buttonBack.php';
    require_once '../connect/dsn.php';
    
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