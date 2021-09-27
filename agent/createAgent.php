<?php
require_once '../base.html';?> 

<body class='yellow'>

    <?php
    include '../vue/buttonLogOut.php';
    include '../vue/buttonBack.php';
    require_once '../connect/dsn.php';
    
    $statement = $conn->prepare('INSERT INTO agents(nom, prénom, date_de_naissance, nationalité, spécialité, nom_de_code) 
                                    VALUES (:nom, :prenom, :birth, :pays, :specialite, :code)');
    $statement->bindValue(':nom', $_POST['nom']);
    $statement->bindValue(':prenom', $_POST['prenom']);
    $statement->bindValue(':birth', $_POST['date_de_naissance']);
    $statement->bindValue(':pays', $_POST['pays']);
    $statement->bindValue(':specialite', $_POST['specialite']);
    $statement->bindValue(':code', $_POST['nom_de_code']);
    
    if ($statement->execute()) {
        echo 'Bravo!' . '<br>' . 'L\'agent ' . '<br>' . $_POST['prenom'] . ' ' . $_POST['nom'] . '<br>' . ' a été créé';
    } else {
        echo 'Impossible de créer l\'agent';
    }
    ?>   
</body>