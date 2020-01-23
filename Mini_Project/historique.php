<?php
	include_once 'Includes/Operation.php';
  $num=$_POST['id'];

echo " <html> <head><title>Historique</title></head><h2>Liste des operations du compte numero : ".$num."</h2>
<form  name='f' method='post'  action='historique.php' >
<table width='40%' border='1'>
  <tr> 
    <th	width='40%'>Numero d ' operation</th>
    <th>Nature</th>
    <th>Date </th>
    <th>Montant</th>
  </tr>";
  $op= new  Operation();
$res=$op->show($num);
foreach ($res as $row) 
	    	{
				echo 
				"<tr>
				<td>".$row[0]."</th>
					<td>".$row[2]."</th>
				<td>".$row[3]."</th>
				<td>".$row[4]."</th>
				</tr>";
		     }
echo"</table>";
echo " <br> 
<input type='reset' name='retour' value='Retour'>";
echo "</form></html>";
?>