<?php
require_once '../base.html';?> 

<body class="yellow"> 
    
    <?php
    include '../vue/buttonLogOut.php';
    include '../vue/buttonBack.php';
    require_once '../connect/dsn.php';
    
    $choix = $_POST['modif'];
    foreach($conn->query("SELECT * FROM missions WHERE id = '$choix'", PDO::FETCH_ASSOC) as $user) {
        $title = ($_POST['titre'] === "") ? $user['titre'] : $_POST['titre'];   
        $description = ($_POST['description'] === "") ? $user['description'] : $_POST['description'];
        $code = ($_POST['code'] === "") ? $user['nom_de_code'] : $_POST['code']; 
        $pays = ($_POST['pays'] === "") ? $user['pays'] : $_POST['pays'];
        $agent = ($_POST['agent'] === "") ? $user['agent'] : $_POST['agent'];   
        $contact = ($_POST['contact'] === "") ? $user['contact'] : $_POST['contact'];   
        $type = ($_POST['type'] === "") ? $user['type_mission'] : $_POST['type'];   
        $statut = ($_POST['statut'] === "") ? $user['statut'] : $_POST['statut'];   
        $planque = ($_POST['planque'] === "") ? $user['planque'] : $_POST['planque'];   
        $cible = ($_POST['cible'] === "") ? $user['cible'] : $_POST['cible'];   
        $specialite = ($_POST['specialite'] === "") ? $user['specialite_requise'] : $_POST['specialite'];
        $start = ($_POST['start'] === "") ? $user['date_debut'] : $_POST['start'];
        $end = ($_POST['end'] === "") ? $user['date_fin'] : $_POST['end'];
    }


    $sth = $conn->prepare("SELECT nationalite FROM agents WHERE id = '$agent' ");
    $sth-> execute();
    $resultat1 = $sth->fetch(PDO::FETCH_ASSOC);

    $sth = $conn->prepare("SELECT nationalite FROM cibles WHERE id = '$cible' ");
    $sth-> execute();
    $resultat2 = $sth->fetch(PDO::FETCH_ASSOC);
    
    $sth = $conn->prepare("SELECT nationalite FROM contacts WHERE id = '$contact' ");
    $sth-> execute();
    $resultat3 = $sth->fetch(PDO::FETCH_ASSOC);

    $sth = $conn->prepare("SELECT pays FROM planques WHERE id = '$planque' ");
    $sth-> execute();
    $resultat4 = $sth->fetch(PDO::FETCH_ASSOC);

    $sth = $conn->prepare("SELECT specialite FROM agents WHERE id = '$agent' ");
    $sth-> execute();
    $resultat5 = $sth->fetch(PDO::FETCH_ASSOC);


    if ($resultat1['nationalite'] !== $resultat2['nationalite'] &&
        $resultat3['nationalite'] === $pays && 
        $resultat4['pays'] === $pays &&
        stripos($resultat5['specialite'], $specialite) !== FALSE) {

        $statement = $conn->prepare("UPDATE missions
                                    SET titre = :title, description = :description, nom_de_code = :code, pays = :pays, agent = :agent, 
                                    contact = :contact, type_mission = :type, statut = :statut, planque = :planque, cible = :cible, 
                                    specialite_requise = :specialite, date_debut = :start, date_fin = :end
                                    WHERE id = '$choix' ");

        $statement->bindValue(':title', $title);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':code', $code);
        $statement->bindValue(':pays', $pays);
        $statement->bindValue(':agent', $agent);
        $statement->bindValue(':contact', $contact);
        $statement->bindValue(':type', $type);
        $statement->bindValue(':statut', $statut);
        $statement->bindValue(':planque', $planque);
        $statement->bindValue(':cible', $cible);
        $statement->bindValue(':specialite', $specialite);
        $statement->bindValue(':start', $start);
        $statement->bindValue(':end', $end);
    

        if ($statement->execute()) {
            echo 'Bravo!' . '<br>' . 'La mission ' . '<br>' . $_POST['titre'] . '<br>' . ' a été modifiée';
        } else {
            echo 'Impossible de modifier la mission';
        }       
    } else {
        echo 'Attention! Vous ne respectez pas les règles' .'<br>'. 
            'concernant la nationalité des agents, cibles,' .'<br>'. 
            'contacts et pays de la mission.' .'<br>'. 
            'Veuillez consulter le guide...';
    }
    ?>
    
</body>