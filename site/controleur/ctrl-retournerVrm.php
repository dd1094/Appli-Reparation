<?php
require('ctrl-coBDD.php'); /* Fichier permettant de se connecter à la base de données*/
$idInc = $_GET['idInc'];
$sql = "UPDATE `incident` SET `idEtatInc` = '3' WHERE `incident`.`idInc` = $idInc";
    $st = $bd -> prepare( $sql ) ;
    $st -> execute() ;
    $etat= $st -> fetchall() ;

    require ('../vue/vue-messRet.php');
?>