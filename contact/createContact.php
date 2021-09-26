<?php
require_once '../base.html';?> 

<body class='yellow'>

    <?php
    include '../vue/buttonLogOut.php';
    include '../vue/buttonBack.php';
    require_once '../connect/dsn.php';
    
    $statement = $conn->prepare('INSERT INTO contacts(nom, prénom, date_de_naissance, nom_de_code, nationalité) 
                                    VALUES (:nom, :prenom, :birth, :code, :pays)');
    $statement->bindValue(':nom', $_POST['nom']);
    $statement->bindValue(':prenom', $_POST['prenom']);
    $statement->bindValue(':birth', $_POST['date_de_naissance']);
    $statement->bindValue(':code', $_POST['nom_de_code']);
    $statement->bindValue(':pays', $_POST['pays']);

    if ($statement->execute()) {
        echo 'Bravo!' . '<br>' . 'Le contact ' . '<br>' . $_POST['prenom'] . ' ' . $_POST['nom'] . '<br>' . ' a été créé';
    } else {
        echo 'Impossible de créer le contact';
    }
    ?>   
</body>