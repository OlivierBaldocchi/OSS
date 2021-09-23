<?php
require_once '../base.html';
include '../vue/buttonLogOut.php';
include '../vue/buttonBack.php';
require_once '../connect/dsn.php'; ?>

<body>
    
    <div class="create">
        <h2 class="yellow">Créer une nouvelle mission</h2>
        <form action="createMission.php" method="post">
            <?php require 'formMissions.php'; ?>
            <div>
                <button type="submit">Créer la nouvelle mission</button>
            </div>
        </form> 
    </div>

    <div class="cancel">
        <h2>Supprimer une mission</h2>
        <h3>Veuillez choisir dans la liste:</h3>

        <form action="cancelMission.php" method="post">
            <?php 
                echo "<select name='cancel'>";
                include 'listeMissions.php';
                echo "<select>";?> 
            <p></p>
            <div>
                <button type="submit">Supprimer la mission</button>
            </div>
        </form>
    </div>

    <div class="infos">
        <h2>Voir les informations de:</h2>

        <form action="infosMission.php" method="post">
            <?php 
                echo "<select name='infos'>";
                include 'listeMissions.php';
                echo "<select>";?> 
            <p></p>
            <div>
                <button type="submit">Voir</button>
            </div>
        </form>
    </div>

    <div class="modif">
        <h2>Modifier des informations</h2>
        <h3>Quelle mission souhaitez-vous modifier?</h3>

        <form action="execModifInfoMission.php" method="post">
        <?php 
            echo "<select name='modif'>";
            include 'listeMissions.php';
            echo "<select>";?> 
    
        <h3>Modifiez les informations souhaitées:</h3>
        <form action="execModifInfoMission.php" method="post">
            <?php require 'formMissions.php'; ?>
            <div>
                <button type="submit">Modifier les informations de la mission</button>
            </div>
        </form>
    </div>    
 
</body>
