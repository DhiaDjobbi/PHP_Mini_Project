<?php
	include_once 'Includes/Client.php';

    $nomCli = $_POST['t2'];
    $prenomCli =$_POST['t3'];
    $adrCli = $_POST['t4'];
    $telCli = $_POST['t5'];
	
$ab= new Client();
$res=$ab->create($nomCli,$prenomCli,$adrCli,$telCli);
if ($res) 
	echo "<h2 style='color:green;'>Client Created</h2>";
else
	echo "<h2 style='color:red;' >Filed to create the client</h2>";
	?> 