<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'imagesdata');

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
//Vérifier la connexion

if(mysqli_connect_errno()){

    echo "Échec de la connexion à MySQL : " .mysqli_connect_error();
}

?>
