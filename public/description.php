<?php
require_once '../base.html';?> 

<body>
    <div id="description">
        <?php
        require_once '../connect/dsn.php';
        
        try {
            $refmovie = $_GET['id'];

            $sth = $conn->prepare("SELECT description, nom_de_code  FROM missions WHERE id = '$refmovie' ");
            $sth-> execute();
            $resultat = $sth->fetch(PDO::FETCH_ASSOC); ?>

            <p class="code"> <?php echo 'Nom de Code: ' . $resultat['nom_de_code'];?> </p>
            <p> <?php echo $resultat['description'];?> </p>
    <?php
        } catch (PDOException $e) {
            echo 'Impossible de récupérer la description';
        }
        ?>
    </div>
</body>