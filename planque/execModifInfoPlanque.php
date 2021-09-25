<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.php';?> 

<body>
    <div class="yellow">
    <?php
    
    $choix = $_POST['modif'];
    foreach($conn->query("SELECT * FROM planques WHERE id = '$choix'", PDO::FETCH_ASSOC) as $user) {
        $code = ($_POST['code'] === "") ? $user['code'] : $_POST['code'];   
        $adress = ($_POST['adress'] === "") ? $user['adresse'] : $_POST['adress']; 
        $pays = ($_POST['pays'] === "") ? $user['pays'] : $_POST['pays'];
        $type = ($_POST['type'] === "") ? $user['type_planque'] : $_POST['type'];
    }            
    $statement = $conn->prepare("UPDATE planques
                                    SET code = :code, adresse = :adress, pays = :pays, type_planque = :type
                                    WHERE id = '$choix' ");

    $statement->bindValue(':code', $code);                       
    $statement->bindValue(':adress', $adress);
    $statement->bindValue(':pays', $pays); 
    $statement->bindValue(':type', $type); 
      
                
    if ($statement->execute()) {
        echo 'Bravo! Les modifications ont été faites';                
    } else {
        echo 'Impossible de modifier les informations';
    }
    ?>
    </div>
</body>