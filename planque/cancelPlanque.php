<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.php';?> 

<body class='yellow'>

    <?php

   
    if (isset($_POST['cancel'])) {
        $choix = $_POST['cancel'];
        $statement = $conn->prepare("DELETE FROM planques WHERE id = '$choix' ");
        if ($statement->execute()) {
            echo 'La planque' . '<br>' . 'a été supprimée';
        } else {
            echo 'Impossible de supprimer la planque';
        }
    } else {
        echo 'Vous n\'êtes pas autorisé';
    }
    ?>
    
</body>