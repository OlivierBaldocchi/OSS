<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.php';?> 

<body class='yellow'>

    <?php
   
    
    $statement = $conn->prepare('INSERT INTO cibles(nom, prénom, date_de_naissance, nationalité) 
                                    VALUES (:nom, :prenom, :birth, :pays)');
    $statement->bindValue(':nom', $_POST['nom']);
    $statement->bindValue(':prenom', $_POST['prenom']);
    $statement->bindValue(':birth', $_POST['date_de_naissance']);
    $statement->bindValue(':pays', $_POST['pays']);

    if ($statement->execute()) {
        echo 'Bravo!' . '<br>' . 'La cible ' . '<br>' . $_POST['prenom'] . ' ' . $_POST['nom'] . '<br>' . ' a été créée';
    } else {
        echo 'Impossible de créer la cible';
    }
    ?>   
</body>