<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.php';


session_start();
if ($_SESSION['connexion'] === 'ADMIN') { ?>
    <body>
    <div class="conteneur">
        <div class="create">
            <h2 class="yellow">Créer un nouvel administrateur</h2>
            <form action="createAdmin.php" method="post">
                <?php require 'formAdmins.php';?>
                <div>
                    <button type="submit">Créer le nouvel administrateur</button>
                </div>
            </form>
        </div>

        <div class="cancel">
            <h2>Supprimer un administrateur</h2>
            <h3>Veuillez choisir dans la liste:</h3>

            <form action="cancelAdmin.php" method="post">
            <?php 
                echo "<select name='cancel'>";
                include 'listeAdmins.php';
                echo "<select>";?> 
                <p></p>
                <div>
                    <button type="submit">Supprimer l'administrateur</button>
                </div>
            </form>
        </div>

        <div class="infos">
            <h2>Voir les informations de:</h2>

            <form action="infosAdmin.php" method="post">
            <?php 
                echo "<select name='infos'>";
                include 'listeAdmins.php';
                echo "<select>";?> 
                <p></p>
                <div>
                    <button type="submit">Voir</button>
                </div>
            </form>
        </div>

        <div class="modif">
            <h2>Modifier des informations</h2>
            <h3>Quel administrateur souhaitez-vous modifier?</h3>

            <form action="execModifInfoAdmin.php" method="post">
            <?php 
                echo "<select name='modif'>";
                include 'listeAdmins.php';
                echo "<select>";?> 
        
            <h3>Modifiez les informations souhaitées:</h3>
            <form action="execModifInfoAdmin.php" method="post">
                <?php require 'formAdmins.php';?>
                <div>
                    <button type="submit">Modifier les informations de l'administrateur</button>
                </div>
            </form>
        </div>    
    </div>    
</body> <?php
} else {
    echo 'Connectez-vous?';
}
?> 


