<?php
require_once '../base.html';?> 

<body>
    <div id="description">
        
        <?php
        include '../vue/buttonLogOut.php';
        include '../vue/buttonBack.php';
        require_once '../connect/dsn.php';
            
            try {
                $id = $_POST['infos'];
                foreach ($conn->query("SELECT * FROM agents WHERE id = '$id' ", PDO::FETCH_ASSOC) as $user) {
                    echo $user['id'] . '<br>';
                    echo $user['nom'] . '<br>';
                    echo $user['prenom'] . '<br>';
                    echo $user['date_de_naissance'] . '<br>';
                    echo $user['nationalite'] . '<br>';
                    echo $user['specialite'] . '<br>';
                    echo $user['nom_de_code'] . '<br>';
                }
            } catch (PDOException $e) {
                echo 'Impossible de récupérer les informations';
            }
        ?>
    </div>
</body>