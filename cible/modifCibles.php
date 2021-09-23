<?php
require_once '../base.html';
include '../vue/buttonLogOut.php';
include '../vue/buttonBack.php';
require_once '../connect/dsn.php';?>

<body>    
    <div class="create">
        <h2 class="yellow">Créer une nouvelle cible</h2>
        <form action="createCible.php" method="post">
            <?php require 'formCibles.php';?>
            <div>
                <button type="submit">Créer le nouvel agent</button>
            </div>
        </form>
    </div>

    <div class="cancel">
        <h2>Supprimer une cible</h2>
        <h3>Veuillez choisir dans la liste:</h3>

        <form action="cancelCible.php" method="post">
            <?php 
                echo "<select name='cancel'>";
                include 'listeCibles.php';
                echo "<select>";?> 
            <p></p>
            <div>
                <button type="submit">Supprimer la cible</button>
            </div>
        </form>
    </div>

    <div class="infos">
        <h2>Voir les informations de:</h2>

        <form action="infosCible.php" method="post">
            <?php 
                echo "<select name='infos'>";
                include 'listeCibles.php';
                echo "<select>";?> 
            <p></p>
            <div>
                <button type="submit">Voir</button>
            </div>
        </form>
    </div>

    <div class="modif">
        <h2>Modifier des informations</h2>
        <h3>Quelle cible souhaitez-vous modifier?</h3>

        <form action="execModifInfoCible.php" method="post">
        <?php 
            echo "<select name='modif'>";
            include 'listeCibles.php';
            echo "<select>";?> 
    
        <h3>Modifiez les informations souhaitées:</h3>
        <form action="execModifInfoCible.php" method="post">
            <?php require 'formCibles.php';?>
            <div>
                <button type="submit">Modifier les informations de la cible</button>
            </div>
        </form>
    </div>    
 
</body>
