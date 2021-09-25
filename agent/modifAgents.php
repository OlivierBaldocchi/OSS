<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.html';
require_once 'https://php-postgre-studi.herokuapp.com/include.php'?>
<body>
    <div class="create">
        <h2 class="yellow">Créer un nouvel agent</h2>
        <form action="createAgent.php" method="post">
            <?php require 'formAgents.php'; ?>
            <div>
                <button type="submit">Créer le nouvel agent</button>
            </div>
        </form>
    </div>

    <div class="cancel">
        <h2>Supprimer un agent</h2>
        <h3>Veuillez choisir dans la liste:</h3>

        <form action="cancelAgent.php" method="post">
            <?php 
                echo "<select name='cancel'>";
                include 'listeAgents.php';
                echo "<select>";?> 
            <p></p>
            <div>
                <button type="submit">Supprimer l'agent</button>
            </div>
        </form>
    </div>

    <div class="infos">
        <h2>Voir les informations de:</h2>

        <form action="infosAgent.php" method="post">
            <?php 
                echo "<select name='infos'>";
                include 'listeAgents.php';
                echo "<select>";?> 
            <p></p>
            <div>
                <button type="submit">Voir</button>
            </div>
        </form>
    </div>

    <div class="modif">
        <h2>Modifier des informations</h2>
        <h3>Quel agent souhaitez-vous modifier?</h3>

        <form action="execModifInfoAgent.php" method="post">
        <?php 
            echo "<select name='modif'>";
            include 'listeAgents.php';
            echo "<select>"; ?> 
    
        <h3>Modifiez les informations souhaitées:</h3>
        <form action="execModifInfoAgent.php" method="post">
            <?php require 'formAgents.php'; ?>
            <div>
                <button type="submit">Modifier les informations de l'agent</button>
            </div>
        </form>
    </div>    
    
</body>
