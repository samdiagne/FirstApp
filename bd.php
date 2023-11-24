<?php

$serveur="localhost";
$user="root";
$pwd="";
$dbname="atelier1_dev_web";
//true or false
$connexion=mysqli_connect($serveur,$user,$pwd,$dbname);

if(!$connexion){
    echo "Erreur de connexion";
}else{
    //echo "Connexion avec succes";
}

?>