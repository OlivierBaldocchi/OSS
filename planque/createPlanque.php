<?php
require_once '../base.html';?>  

<body class='yellow'>

    <?php
    include '../vue/buttonLogOut.php';
    include '../vue/buttonBack.php';
    require_once '../connect/dsn.php';
    
    try {
        $statement = $conn->prepare('INSERT INTO planques(code, adresse, pays, type_planque) 
                                    VALUES (:code, :adress, :pays, :type)');
        $statement->bindValue(':code', $_POST['code']);
        $statement->bindValue(':adress', $_POST['adress']);
        $statement->bindValue(':pays', $_POST['pays']);
        $statement->bindValue(':type', $_POST['type']);

        if ($statement->execute()) {
            echo 'Bravo!' . '<br>' . 'La planque ' . '<br>' . $_POST['code'] . '<br>' . ' a été créée';
        } else {
            echo 'Impossible de créer la planque';
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    
    ?>   
</body> 