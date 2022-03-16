<?php
require('ctrl-coBDD.php'); /* Fichier permettant de se connecter à la base de données*/


$incident = $_GET['idInc'];
$typeApp = $_GET['idTypeApp'];
/* Requête permettant de lister les sujet et leurs différentes information*/	
$sql = "select libelleidTypePanne, libTypeApp, idTypePanne from typepanne as tp INNER join typeappareil as ta  on tp.idTypeApp = ta.idTypeApp where tp.idTypeApp = '$typeApp';";
$st = $bd -> prepare( $sql ) ;
$st -> execute() ;
$checkBox= $st -> fetchall() ;

/* Requête permettant de lister les sujet et leurs différentes information*/	
$sql = "SELECT idInc, CommCli, i.idAppar, prenomCli from incident as i INNER join appareil as a on a.idAppar = i.idAppar INNER join client as c on a.idCli = c.idCli where idInc = '$incident';";
$st = $bd -> prepare( $sql ) ;
$st -> execute() ;
$infoCli= $st -> fetchall() ;


/* Requête permettant de lister les sujet et leurs différentes information*/	
$sql = "select libTypeApp, tp.idTypeApp from typepanne as tp INNER join typeappareil as ta on tp.idTypeApp = ta.idTypeApp where tp.idTypeApp = '$typeApp' GROUP by tp.idTypeApp;";
$st = $bd -> prepare( $sql ) ;
$st -> execute() ;
$typeApp= $st -> fetchall() ;

require('../vue/vue-Inc.php');
?>

