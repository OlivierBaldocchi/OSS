<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.php';?> 

<body class='yellow'>

    <?php
    

    $choixAgent = $_POST['agent'];
    $choixCible = $_POST['cible'];
    $choixContact = $_POST['contact'];
    $choixPaysMission = $_POST['pays'];
    $choixPlanque = $_POST['planque'];
    $specialite = $_POST['specialite'];
    
    
    $sth = $conn->prepare("SELECT nationalité FROM agents WHERE id = '$choixAgent' ");
    $sth-> execute();
    $resultat1 = $sth->fetch(PDO::FETCH_ASSOC);

    $sth = $conn->prepare("SELECT nationalité FROM cibles WHERE id = '$choixCible' ");
    $sth-> execute();
    $resultat2 = $sth->fetch(PDO::FETCH_ASSOC);
    
    $sth = $conn->prepare("SELECT nationalité FROM contacts WHERE id = '$choixContact' ");
    $sth-> execute();
    $resultat3 = $sth->fetch(PDO::FETCH_ASSOC);

    $sth = $conn->prepare("SELECT pays FROM planques WHERE id = '$choixPlanque' ");
    $sth-> execute();
    $resultat4 = $sth->fetch(PDO::FETCH_ASSOC);

    $sth = $conn->prepare("SELECT spécialité FROM agents WHERE id = '$choixAgent' ");
    $sth-> execute();
    $resultat5 = $sth->fetch(PDO::FETCH_ASSOC);


    if ($resultat1['nationalité'] !== $resultat2['nationalité'] &&
        $resultat3['nationalité'] === $choixPaysMission && 
        $resultat4['pays'] === $choixPaysMission &&
        stripos($resultat5['spécialité'], $specialite) !== FALSE) {
        
        $statement = $conn->prepare('INSERT INTO missions(titre, description, nom_de_code, pays, agent, contact, type_mission, 
                                                    statut, planque, cible, spécialité_requise, date_début, date_fin) 
                                    VALUES (:title, :description, :code, :pays, :agent, :contact, :type, 
                                            :statut, :planque, :cible, :specialite, :start, :end)');

        $statement->bindValue(':title', $_POST['titre']);
        $statement->bindValue(':description', $_POST['description']);
        $statement->bindValue(':code', $_POST['code']);
        $statement->bindValue(':pays', $_POST['pays']);
        $statement->bindValue(':agent', $_POST['agent']);
        $statement->bindValue(':contact', $_POST['contact']);
        $statement->bindValue(':type', $_POST['type']);
        $statement->bindValue(':statut', $_POST['statut']);
        $statement->bindValue(':planque', $_POST['planque']);
        $statement->bindValue(':cible', $_POST['cible']);
        $statement->bindValue(':specialite', $_POST['specialite']);
        $statement->bindValue(':start', $_POST['start']);
        $statement->bindValue(':end', $_POST['end']);
    

        if ($statement->execute()) {
            echo 'Bravo!' . '<br>' . 'La mission ' . '<br>' . $_POST['titre'] . '<br>' . ' a été créé';
        } else {
            echo 'Impossible de créer la mission';
        }
    } else {
        echo 'Attention! Vous ne respectez pas les règles' .'<br>'. 
            'concernant la nationalité des agents, cibles,' .'<br>'. 
            'contacts et pays de la mission.' .'<br>'. 
            'Veuillez consulter le guide...';
    }
    
    ?>   
</body>