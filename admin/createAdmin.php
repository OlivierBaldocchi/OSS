<?php
require_once '../base.html';?> 

<body class='yellow'>

    <?php
    include '../vue/buttonLogOut.php';
    include '../vue/buttonBack.php';
    require_once '../connect/dsn.php';
    
    $statement = $conn->prepare('INSERT INTO admins(nom, prénom, mail, mot_de_passe, date_création) VALUES (:nom, :prenom, :email, :password, :date_creation)');
    $statement->bindValue(':nom', $_POST['nom']);
    $statement->bindValue(':prenom', $_POST['prenom']);
    $statement->bindValue(':email', $_POST['mail']);
    $statement->bindValue(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));
    $statement->bindValue(':date_creation', $_POST['date_creation']);
    if ($statement->execute()) {
        echo 'Bravo!' . '<br>' . 'L\'administrateur ' . '<br>' . $_POST['prenom'] . ' ' . $_POST['nom'] . '<br>' . ' a été créé';
    } else {
        echo 'Impossible de créer l\'administrateur';
    }
    ?>   
</body>