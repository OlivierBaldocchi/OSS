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
                foreach ($conn->query("SELECT * FROM planques WHERE id = '$id' ", PDO::FETCH_ASSOC) as $user) {
                    echo $user['id'] . '<br>';
                    echo $user['code'] . '<br>';
                    echo $user['adresse'] . '<br>';
                    echo $user['pays'] . '<br>';
                    echo $user['type_planque'] . '<br>';
                }
            } catch (PDOException $PDOException) {
                echo 'Impossible de récupérer les informations';
            }
        ?>
    </div>
</body>