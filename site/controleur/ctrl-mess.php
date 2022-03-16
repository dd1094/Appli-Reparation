<?php

echo($_GET['idInc']);

$idInc = $_GET['idInc']
    foreach ($_POST['idTypePanne'] as $key => $value){
            $idTypePanne=$_POST['idTypePanne'][$key];
            echo $_POST['idTypePanne'][$key];
            $ins = $bd->prepare('INSERT INTO `panne` (`idInc`, `idTypePanne`) VALUES (?, ?);');
            $ins->execute(array($idInc,$idTypePanne));


	        //$insertqry="INSERT INTO `product`( `product_name`, `product_price`, `product_quantity`) VALUES ('$prodname','$prod_price','$prod_qty')";
	        //$insertqry=mysqli_query($con,$insertqry);
	    
    }
require ('../vue/vue-mess.php');
?>