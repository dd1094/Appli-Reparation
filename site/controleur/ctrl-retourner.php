<?php
require('ctrl-coBDD.php'); /* Fichier permettant de se connecter à la base de données*/


$incident = $_GET['idInc'];
$typeApp = $_GET['idTypeApp'];
$idEtatInc = $_GET['idEtatInc'];
	
$sql = "SELECT libelleidTypePanne from typepanne as tp INNER join panne as p on tp.idTypePanne = p.idTypePanne where idInc = '$incident'";
$st = $bd -> prepare( $sql ) ;
$st -> execute() ;
$panne= $st -> fetchall() ;
	
$sql = "SELECT idInc, CommCli, CommTech, i.idAppar, prenomCli from incident as i INNER join appareil as a on a.idAppar = i.idAppar INNER join client as c on a.idCli = c.idCli where idInc = '$incident';";
$st = $bd -> prepare( $sql ) ;
$st -> execute() ;
$infoCli= $st -> fetchall() ;

$sql = "select libTypeApp, tp.idTypeApp from typepanne as tp INNER join typeappareil as ta on tp.idTypeApp = ta.idTypeApp where tp.idTypeApp = '$typeApp' GROUP by tp.idTypeApp;";
$st = $bd -> prepare( $sql ) ;
$st -> execute() ;
$typeApp= $st -> fetchall() ;

$sql = "SELECT SUM(prixReparation) from typepanne as tp INNER join panne as p on tp.idTypePanne = p.idTypePanne where idInc = '$incident'";
$st = $bd -> prepare( $sql ) ;
$st -> execute() ;
$prix= $st -> fetchall() ;

require('../vue/vue-retourner.php');
?>