<?php
require 'base.html' ?>

<div>
    <h1 style="margin-left: 300px">Bienvenue au RDV</h1>
    <h1 style="margin-left: 650px">des</h1>
    <h1 style="margin-left: 520px">Espions!</h1>
</div>
<div>
    <h2 class="list"><a style="color: deepskyblue; margin-left: 100px" href="public/missionsList.php">Accéder à la liste des missions</a></h2>
    <form action="public/searchMission.php">
        <div>
            <h2>Rechercher une mission</h2>
            <input type="text" placeholder="nom mission" id="mission" name="mission">
        </div>
    </form>
</div>
<div>
    <h3 class="connect"><a style="color: orangered" href="connect/connexion.php">Connexion</a></h3>
</div>
    