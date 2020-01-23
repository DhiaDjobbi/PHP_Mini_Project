<?php
	include_once 'Includes/Client.php';


$ab= new Client();
echo	"<h3>liste des clients :</h3>";
echo"---------------------------------<br>";

$res=$ab->liste();
echo"---------------------------------";
if ($res==0) 
	echo "<br><h2 style='color:red;' >la liste des clients est vide </h2>";
else
	echo "<br><h3> Note : nombre des clients est : ".$res."</h3>";
?> 
	<html>
    <head>
	    <title>List Clients</title>


    </head>
		</html>
