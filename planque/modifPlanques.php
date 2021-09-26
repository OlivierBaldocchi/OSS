<?php
require_once '../base.html';
include '../vue/buttonLogOut.php';
include '../vue/buttonBack.php';
require_once '../connect/dsn.php'; ?>

<div class="conteneur">
    <div class="create">
        <h2 class="yellow">Créer une nouvelle planque</h2>
        <form action="createPlanque.php" method="post">
            <?php require 'formPlanques.php'; ?>
            <div>
                <button type="submit">Créer la nouvelle planque</button>
            </div>
        </form> 
    </div>

    <div class="cancel">
        <h2>Supprimer une planque</h2>
        <h3>Veuillez choisir dans la liste:</h3>

        <form action="cancelPlanque.php" method="post">
            <?php 
                echo "<select name='cancel'>";
                include 'listePlanques.php';
                echo "<select>";?> 
            <p></p>
            <div>
                <button type="submit">Supprimer la planque</button>
            </div>
        </form>
    </div>

    <div class="infos">
        <h2>Voir les informations de:</h2>

        <form action="infosPlanque.php" method="post">
            <?php 
                echo "<select name='infos'>";
                include 'listePlanques.php';
                echo "<select>";?> 
            <p></p>
            <div>
                <button type="submit">Voir</button>
            </div>
        </form>
    </div>

    <div class="modif">
        <h2>Modifier des informations</h2>
        <h3>Quelle planque souhaitez-vous modifier?</h3>

        <form action="execModifInfoPlanque.php" method="post">
        <?php 
            echo "<select name='modif'>";
            include 'listePlanques.php';
            echo "<select>";?> 
    
        <h3>Modifiez les informations souhaitées:</h3>
        <form action="execModifInfoPlanque.php" method="post">
            <?php require 'formPlanques.php'; ?>
            <div>
                <button type="submit">Modifier les informations de la planque</button>
            </div>
        </form>
    </div>    
</div>    