<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.php';?> 

<body>
    <h2>Cliquez sur une des missions:</h2>
    <div class="list_missions"> 
             
        <?php
        
        
        try {
            foreach ($conn->query('SELECT id, titre  FROM missions', PDO::FETCH_ASSOC) as $user) {
                $id = $user['id'];
                echo '<a href = "description.php?id=' . $id . '">' . $user['titre'] . '</a>' . '<br>';
            }
        } catch (PDOException $e) {
            echo 'Impossible de récupérer la liste des missions';
        }
        ?>
    </div>
</body>
    


