<?php

session_start();
session_destroy();
session_unset();
header("location:https://php-postgre-studi.herokuapp.com");