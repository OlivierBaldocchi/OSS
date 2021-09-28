<body>
    <div id="description">
        <?php

        require_once '../base.html';
        require_once '../connect/dsn.php';

        try {
            $search = $_GET['mission'].'%';
            $sql = "SELECT * FROM missions WHERE titre LIKE '$search' ";
            
            $pdoStatement = $conn->prepare($sql);
            
            if ($pdoStatement->execute()) {
                
                foreach ($conn->query($sql, PDO::FETCH_ASSOC)as $user) {
                    echo $user['titre'] .'<br>'; ?>
                    <p></p>
                    <?php
                    echo $user['description'];
                }
                
            
            } else {
                echo 'Impossible de récupérer la description';
            }
            
            
        } catch (PDOException $e) {
            echo 'Mission inconnu';
        }

        ?>
    </div>
</body>