<?php
require_once '../base.html';?> 

<body>
    <div class="yellow">
    <?php
    include '../vue/buttonLogOut.php';
    include '../vue/buttonBack.php';
    require_once '../connect/dsn.php';
    
    $choix = $_POST['modif'];
    foreach($conn->query("SELECT * FROM cibles WHERE id = '$choix'", PDO::FETCH_ASSOC) as $user) {
        $nom = ($_POST['nom'] === "") ? $user['nom'] : $_POST['nom'];   
        $prenom = ($_POST['prenom'] === "") ? $user['prenom'] : $_POST['prenom']; 
        $birth = ($_POST['date_de_naissance'] === "") ? $user['date_de_naissance'] : $_POST['date_de_naissance'];
        $pays = ($_POST['pays'] === "") ? $user['nationalite'] : $_POST['pays'];
    }            
    $statement = $conn->prepare("UPDATE cibles
                                    SET nom = :nom, prenom = :prenom, date_de_naissance = :birth, nationalite = :pays
                                    WHERE id = '$choix' ");

    $statement->bindValue(':nom', $nom);                       
    $statement->bindValue(':prenom', $prenom);
    $statement->bindValue(':birth', $birth); 
    $statement->bindValue(':pays', $pays); 
      
                
    if ($statement->execute()) {
        echo 'Bravo! Les modifications ont été faites';                
    } else {
        echo 'Impossible de modifier les informations';
    }
    ?>
    </div>
</body>