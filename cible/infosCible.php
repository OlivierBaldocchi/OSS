<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.html';
require_once 'https://php-postgre-studi.herokuapp.com/include.php'?>
<body>
    <div id="description">
        
        <?php
            
            try {
                $id = $_POST['infos'];
                foreach ($conn->query("SELECT * FROM cibles WHERE id = '$id' ", PDO::FETCH_ASSOC) as $user) {
                    echo $user['id'] . '<br>';
                    echo $user['nom'] . '<br>';
                    echo $user['prénom'] . '<br>';
                    echo $user['date_de_naissance'] . '<br>';
                    echo $user['nationalité'] . '<br>';
                }
            } catch (PDOException $e) {
                echo 'Impossible de récupérer les informations';
            }
        ?>
    </div>
</body>