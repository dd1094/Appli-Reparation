<?php
require('ctrl-coBDD.php'); /* Fichier permettant de se connecter à la base de données*/
$idInc = $_GET['idInc'];
$commTech = $_POST['commTech'];
    foreach ($_POST['idTypePanne'] as $key => $value){
            $idTypePanne=$_POST['idTypePanne'][$key];
            echo $_POST['idTypePanne'][$key];
            $ins = $bd->prepare('INSERT INTO `panne` (`idInc`, `idTypePanne`) VALUES (?, ?);');
            $ins->execute(array($idInc,$idTypePanne));


	        //$insertqry="INSERT INTO `product`( `product_name`, `product_price`, `product_quantity`) VALUES ('$prodname','$prod_price','$prod_qty')";
	        //$insertqry=mysqli_query($con,$insertqry);
	    
    };
    
    $sql = "  UPDATE `incident` SET `commTech` = '$commTech' WHERE `incident`.`idInc` = '$idInc'";
    $st = $bd -> prepare( $sql ) ;
    $st -> execute() ;
    $incident= $st -> fetchall() ;

    $sql = " SELECT SUM(prixReparation) from typepanne tp inner join panne as p on tp.idTypePanne = p.idTypePanne where idInc = '$idInc'";
    $st = $bd -> prepare( $sql ) ;
    $st -> execute() ;
    $prix= $st -> fetchall() ;

    $sql = "SELECT libelleidTypePanne from TypePanne as tp INNER JOIN panne as p on tp.idTypePanne = p.idTypePanne where idInc ='$idInc'";
    $st = $bd -> prepare( $sql ) ;
    $st -> execute() ;
    $panne= $st -> fetchall() ;

    $sql = "SELECT libelleidTypePanne from TypePanne as tp INNER JOIN panne as p on tp.idTypePanne = p.idTypePanne where idInc ='$idInc'";
    $st = $bd -> prepare( $sql ) ;
    $st -> execute() ;
    $panne= $st -> fetchall() ;

    $sql = "UPDATE `incident` SET `idEtatInc` = '2' WHERE `incident`.`idInc` = $idInc";
    $st = $bd -> prepare( $sql ) ;
    $st -> execute() ;
    $etat= $st -> fetchall() ;


    

require ('../vue/vue-mess.php');
?>

