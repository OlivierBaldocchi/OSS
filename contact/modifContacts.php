<?php
require_once '../base.html';
include '../vue/buttonLogOut.php';
include '../vue/buttonBack.php';
require_once '../connect/dsn.php'; ?>

<body>
<div class="create">
    <h2 class="yellow">Créer un nouveau contact</h2>
    <form action="createContact.php" method="post">
        <?php require 'formContacts.php'; ?>
        <div>
            <button type="submit">Créer le nouvel agent</button>
        </div>
    </form> 
</div>

<div class="cancel">
    <h2>Supprimer un contact</h2>
    <h3>Veuillez choisir dans la liste:</h3>

    <form action="cancelContact.php" method="post">
        <?php 
            echo "<select name='cancel'>";
            include 'listeContacts.php';
            echo "<select>";?> 
        <p></p>
        <div>
            <button type="submit">Supprimer le contact</button>
        </div>
    </form>
</div>

<div class="infos">
    <h2>Voir les informations de:</h2>

    <form action="infosContact.php" method="post">
        <?php 
            echo "<select name='infos'>";
            include 'listeContacts.php';
            echo "<select>";?> 
        <p></p>
        <div>
            <button type="submit">Voir</button>
        </div>
    </form>
</div>

<div class="modif">
    <h2>Modifier des informations</h2>
    <h3>Quel contact souhaitez-vous modifier?</h3>

    <form action="execModifInfoContact.php" method="post">
    <?php 
        echo "<select name='modif'>";
        include 'listeContacts.php';
        echo "<select>";?> 

    <h3>Modifiez les informations souhaitées:</h3>
    <form action="execModifInfoContact.php" method="post">
        <?php require 'formContacts.php'; ?>
        <div>
            <button type="submit">Modifier les informations de l'agent</button>
        </div>
    </form>
</div>    
</body>    