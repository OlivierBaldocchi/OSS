<?php
require_once '../base.html'?>

<body class='yellow'>

    <?php

    include '../vue/buttonLogOut.php';
    include '../vue/buttonBack.php';
    require_once '../connect/dsn.php';
    
    if (isset($_POST['cancel'])) {
        $choix = $_POST['cancel'];
        $statement = $conn->prepare("DELETE FROM cibles WHERE id = '$choix' ");
        if ($statement->execute()) {
            echo 'La cible' . '<br>' . 'a été supprimée';
        } else {
            echo 'Impossible de supprimer la cible';
        }
    } else {
        echo 'Vous n\'êtes pas autorisé';
    }
    ?>
    
</body>