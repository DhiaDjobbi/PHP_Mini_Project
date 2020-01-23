<?php
	include_once 'Includes/Operation.php';
	include_once 'Includes/Compte.php';

    $num = $_POST['t1'];
    $date = $_POST['t2'];
    $mon =$_POST['t3'];
    $ope = $_POST['Ope'];
	
$op= new Operation();
$cp= new  Compte();
$test=$cp->mawjoud($num);
if ($test==true)
{
	$res=$op->New_Op($num,$ope,$date,$mon);
	if ($res) 
		echo "<h2 style='color:green;'>Operation  Created</h2>";
	else
		echo "<h2 style='color:red;' >Filed to create the Oporeation</h2>";
}
else 
{
 echo "<script  language= javascript type= text/javascript >
				alert('Le compte ne exise pas !  Verifier le Numero du compte');
				window.location.replace('ajoutOpt.php');
        </script>";
	
}


	?> 