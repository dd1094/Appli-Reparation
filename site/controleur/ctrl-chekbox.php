<?php 
require('ctrl-coBDD.php');
if(isset($_POST['submit'])){

    $checked_array=$_POST['prodid'];
    foreach ($_POST['prodid'] as $key => $value){
	    if(in_array($_POST['prodid'][$key], $checked_array)){
	        $prodid=$_POST['prodid'][$key];

            
            
            $ins = $bd->prepare('INSERT INTO `panne` (`idInc`, `idTypePanne`) VALUES (3, ?);');
            $ins->execute(array($prodid));


	        //$insertqry="INSERT INTO `product`( `product_name`, `product_price`, `product_quantity`) VALUES ('$prodname','$prod_price','$prod_qty')";
	        //$insertqry=mysqli_query($con,$insertqry);
	    }
	
	
}
var_dump($_POST);
}
require('../vue/vue-chekbox.php');
?>