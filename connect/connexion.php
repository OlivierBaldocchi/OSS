<?php
require_once 'https://php-postgre-studi.herokuapp.com/base.html';
require_once 'https://php-postgre-studi.herokuapp.com/include.php'?>
<body>
    <div class="form">
        <form action="connectAdmin.php" method="post">
            <div>
                <input type="text" placeholder="email" id="mail" name="mail">
            </div>
            <div>
                <input type="text" placeholder="mot de passe" id="password" name="password">
            </div>
            <div class="button">
                <button type="submit">Se connecter</button>
            </div>
        </form>
    </div>
</body>
