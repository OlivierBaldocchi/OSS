<?php
require_once '../base.html';?> 

<body>
    <div class="yellow">
    <?php
    include '../vue/buttonLogOut.php';
    include '../vue/buttonBack.php';
    require_once '../connect/dsn.php';
    
    $choix = $_POST['modif'];
    foreach($conn->query("SELECT * FROM admins WHERE id = '$choix'", PDO::FETCH_ASSOC) as $user) {
        $nom = ($_POST['nom'] === "") ? $user['nom'] : $_POST['nom'];   
        $prenom = ($_POST['prenom'] === "") ? $user['prénom'] : $_POST['prenom']; 
        $mail = ($_POST['mail'] === "") ? $user['mail'] : $_POST['mail']; 
        $password = ($_POST['password'] === "") ? $user['mot_de_passe'] : $_POST['password'];     
    }            
    $statement = $conn->prepare("UPDATE admins
                                    SET nom = :nom, prénom = :prenom, mail = :email, mot_de_passe = :password
                                    WHERE id = '$choix' ");

    $statement->bindValue(':nom', $nom);                       
    $statement->bindValue(':prenom', $prenom);
    $statement->bindValue(':email', $mail);
    $statement->bindValue(':password', password_hash($password, PASSWORD_BCRYPT));
                
    if ($statement->execute()) {
        echo 'Bravo! Les modifications ont été faites';                
    } else {
        echo 'Impossible de modifier les informations';
    }
    ?>
    </div>
</body>