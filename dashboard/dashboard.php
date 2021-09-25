<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.php';?> 

<body>
    <?php include 'https://php-postgre-studi.herokuapp.com/vue/buttonLogOut.php';
    session_start();

    if (isset($_SESSION['connexion'])) {
        ?>
        <div class='welcome'>
            <p>Bienvenue dans la base de données OSS</p>
            <p></p>
            <p>A quelle entrée souhaitez-vous accéder?</p>
            <form method="post" action="modification.php">
                <div>
                    <input type="radio" id="admins" name="table" value="admins">
                    <label for="admins">Administrateurs</label> 
                </div>
                <div>
                    <input type="radio" id="agents" name="table" value="agents">
                    <label for="agents">Agents</label>
                </div>
                <div>
                    <input type="radio" id="cibles" name="table" value="cibles">
                    <label for="cibles">Cibles</label>
                </div>
                <div>
                    <input type="radio" id="contacts" name="table" value="contacts">
                    <label for="contacts">Contacts</label>
                </div>
                <div>
                    <input type="radio" id="missions" name="table" value="missions">
                    <label for="missions">Missions</label>
                </div>
                <div>
                    <input type="radio" id="planques" name="table" value="planques">
                    <label for="planques">Planques</label>
                </div>
                <p></p>
                <div>
                    <button type="submit">Envoyer</button>
                </div>
            <form>
        </div> <?php
        
    } else {
        echo 'Vous n\'êtes pas autorisé!';
        }
    ?>
</body>    

