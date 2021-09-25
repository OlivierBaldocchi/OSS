<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.php';?> 

<body>
    <div id="description">
        
        <?php
       
            try {
                $id = $_POST['infos'];
                foreach ($conn->query("SELECT * FROM missions WHERE id = '$id' ", PDO::FETCH_ASSOC) as $user) {
                    echo $user['id'] . '<br>';
                    echo $user['titre'] . '<br>';
                    echo $user['description'] . '<br>';
                    echo $user['nom_de_code'] . '<br>';
                    echo $user['pays'] . '<br>';
                    echo $user['agent'] . '<br>';
                    echo $user['contact'] . '<br>';
                    echo $user['type_mission'] . '<br>';
                    echo $user['statut'] . '<br>';
                    echo $user['planque'] . '<br>';
                    echo $user['cible'] . '<br>';
                    echo $user['spécialité_requise'] . '<br>';
                    echo $user['date_début'] . '<br>';
                    echo $user['date_fin'] . '<br>';
                }
            } catch (PDOException $e) {
                echo 'Impossible de récupérer les informations';
            }
        ?>
    </div>
</body>