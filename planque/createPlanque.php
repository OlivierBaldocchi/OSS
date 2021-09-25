<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.html';
require_once 'https://php-postgre-studi.herokuapp.com/include.php'?>
<body class='yellow'>

    <?php
    
    
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
    ?>   
</body>