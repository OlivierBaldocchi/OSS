<?php
require_once '../base.html';?> 

<body class='yellow'>

    <?php
    include '../vue/buttonLogOut.php';
    include '../vue/buttonBack.php';
    require_once '../connect/dsn.php';
    
    $statement = $conn->prepare('INSERT INTO cibles(nom, prenom, date_de_naissance, nationalite) 
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