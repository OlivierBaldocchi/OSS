<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.php';?> 

<body class='yellow'>

    <?php

   
    
    if (isset($_POST['cancel'])) {
        $choix = $_POST['cancel'];
        $statement = $conn->prepare("DELETE FROM missions WHERE id = '$choix' ");
        if ($statement->execute()) {
            echo 'La mission' . '<br>' . 'a été supprimé';
        } else {
            echo 'Impossible de supprimer la mission';
        }
    } else {
        echo 'Vous n\'êtes pas autorisé';
    }
    ?>
    
</body>