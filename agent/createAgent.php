<?php
require_once '../base.html';?> 

<body class='yellow'> 

    <?php
    include '../vue/buttonLogOut.php';
    include '../vue/buttonBack.php';
    require_once '../connect/dsn.php';

    $nom = $_POST['nom'];   
    $prenom = $_POST['prenom']; 
    $date = $_POST['date_de_naissance'];
    $pays = $_POST['pays'];
    $specialite = $_POST['specialite']; 
    $code = $_POST['nom_de_code']; 
    
    $statement = $conn->prepare('INSERT INTO agents(nom, prenom, date_de_naissance, nationalite, specialite, nom_de_code) 
                                    VALUES (:nom, :prenom, :birth, :pays, :specialite, :code)');
    $statement->bindValue(':nom', $nom);
    $statement->bindValue(':prenom', $prenom);
    $statement->bindValue(':birth', $date);
    $statement->bindValue(':pays', $pays);
    $statement->bindValue(':specialite', $pecialite);
    $statement->bindValue(':code', $code);
    
    if ($statement->execute()) {
        echo 'Bravo!' . '<br>' . 'L\'agent ' . '<br>' . $_POST['prenom'] . ' ' . $_POST['nom'] . '<br>' . ' a été créé';
    } else {
        echo 'Impossible de créer l\'agent';
    }
    ?>   
</body>