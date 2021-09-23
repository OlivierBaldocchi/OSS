<?php
require_once '../base.html';?> 

<body>
    <div class="yellow">
    <?php
    include '../vue/buttonLogOut.php';
    include '../vue/buttonBack.php';
    require_once '../connect/dsn.php';
    
    $choix = $_POST['modif'];
    foreach($conn->query("SELECT * FROM agents WHERE id = '$choix'", PDO::FETCH_ASSOC) as $user) {
        $nom = ($_POST['nom'] === "") ? $user['nom'] : $_POST['nom'];   
        $prenom = ($_POST['prenom'] === "") ? $user['prénom'] : $_POST['prenom']; 
        $birth = ($_POST['date_de_naissance'] === "") ? $user['date_de_naissance'] : $_POST['date_de_naissance'];
        $pays = ($_POST['pays'] === "") ? $user['nationalité'] : $_POST['pays'];
        $specialite = ($_POST['specialite'] === "") ? $user['spécialité'] : $_POST['specialite'];
        $code = ($_POST['nom_de_code'] === "") ? $user['nom_de_code'] : $_POST['nom_de_code'];
    }            
    $statement = $conn->prepare("UPDATE agents
                                    SET nom = :nom, prénom = :prenom, date_de_naissance = :birth, 
                                    nationalité = :pays, spécialité = :specialite, nom_de_code = :code
                                    WHERE id = '$choix' ");

    $statement->bindValue(':nom', $nom);                       
    $statement->bindValue(':prenom', $prenom);
    $statement->bindValue(':birth', $birth); 
    $statement->bindValue(':pays', $pays); 
    $statement->bindValue(':specialite', $specialite); 
    $statement->bindValue(':code', $code); 
    
                
    if ($statement->execute()) {
        echo 'Bravo! Les modifications ont été faites';                
    } else {
        echo 'Impossible de modifier les informations';
    }
    ?>
    </div>
</body>