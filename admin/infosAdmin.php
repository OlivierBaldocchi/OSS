<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.php';?> 

<body>
    <div id="description">
        
        <?php
        
            
            try {
                $id = $_POST['infos'];
                foreach ($conn->query("SELECT * FROM admins WHERE id = '$id' ", PDO::FETCH_ASSOC) as $user) {
                    echo $user['id'] . '<br>';
                    echo $user['nom'] . '<br>';
                    echo $user['prénom'] . '<br>';
                    echo $user['mail'] . '<br>';
                    echo $user['date_création'] . '<br>';
                }
            } catch (PDOException $e) {
                echo 'Impossible de récupérer les informations';
            }
        ?>
    </div>
</body>