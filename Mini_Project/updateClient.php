<?php
	include_once 'Includes/Client.php';

  	$idCli = $_POST['t1'];
    $nomCli = $_POST['t2'];
    $prenomCli =$_POST['t3'];
    $adrCli = $_POST['t4'];
    $telCli = $_POST['t5'];
	
$ab= new Client();
$res=$ab->update($idCli,$nomCli,$prenomCli,$adrCli,$telCli);
if ($res) 
	echo "<br><h2 style='color:green;'>Client updated</h2>";
else
	echo "<br><h2 style='color:red ;' >Filed to update the client</h2>";
	?> 
	