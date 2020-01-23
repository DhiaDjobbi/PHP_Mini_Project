<?php
	include_once 'Includes/Client.php';

  	$idCli = $_POST['t1'];
	
$ab= new Client();
$res=$ab->remove($idCli);
if ($res!=0) 
	echo "<br><h2 style='color:green;'>Client removed</h2>";
else
{
	echo "le client n existe pas, verifier le ID";
	echo "<br><h2 style='color:red ;' >Filed to remove the client</h2>";
}
	?> 
	