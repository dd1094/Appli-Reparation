<?php
require('ctrl-coBDD.php'); /* Fichier permettant de se connecter à la base de données*/
$idEtatInc = $_GET['idEtatInc'];
/* Requête permettant de lister les sujet et leurs différentes information*/	
$sql = "SELECT idInc, prenomCli, nomCli, libTypeApp, a.idTypeApp from incident as i INNER join appareil as a on i.idAppar = a.idAppar INNER join client as c on a.idCli = c.idCli inner join typeappareil as ta on a.idTypeApp = ta.idTypeApp where idEtatInc ='$idEtatInc'";
$st = $bd -> prepare( $sql ) ;
$st -> execute() ;
$incident= $st -> fetchall() ;

require('../vue/vue-listeInc.php');
?>

