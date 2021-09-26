<?php
require_once '../base.html'?>

<body class='yellow'>

    <?php

    include '../vue/buttonLogOut.php';
    include '../vue/buttonBack.php';
    require_once '../connect/dsn.php';
    
    if (isset($_POST['cancel'])) {
        $choix = $_POST['cancel'];
        $statement = $conn->prepare("DELETE FROM contacts WHERE id = '$choix' ");
        if ($statement->execute()) {
            echo 'Le contact' . '<br>' . 'a été supprimé';
        } else {
            echo 'Impossible de supprimer le contact';
        }
    } else {
        echo 'Vous n\'êtes pas autorisé';
    }
    ?>
    
</body>