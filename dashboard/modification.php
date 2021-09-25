<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.html';
require_once 'https://php-postgre-studi.herokuapp.com/include.php'?>
<body>
    <div>

    <?php
    if ($_POST !== array()) {
        switch($_POST['table']) {
            case 'admins':
                header("location:../admin/modifAdmins.php");
                break;
            case 'agents':
                header("location:../agent/modifAgents.php");
                break;
            case 'cibles':
                header("location:../cible/modifCibles.php");
                break;
            case 'contacts':
                header("location:../contact/modifContacts.php");
                break;
            case 'missions':
                header("location:../mission/modifMissions.php");
                break;
            case 'planques':
                header("location:../planque/modifPlanques.php");
                break;    
        } 
    } else {
        echo 'Merci de choisir la table à modifier';
      }

    ?> 
    </div>
</body>