<?php
	include_once 'Includes/Compte.php';

echo " <html> <head><title>Liste des comptes</title></head><h2>Liste des comptes</h2>
<form  name='f' method='post'  action='historique.php' >
<table width='40%' border='1'>
  <tr>
    <th width='10%'></th>
    <th>Numero</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Solde</th>
  </tr>";
$cp= new  Compte();
$res=$cp->show();
foreach ($res as $row) 
	    	{
				echo 
				"<tr>
				<td width='10%'><input type='radio' name='id' value=".$row[0]."></th>
				<td>".$row[0]."</th>
				<td>".$row[1]."</th>
				<td>".$row[2]."</th>
				<td>".$row[3]."</th>
				</tr>";
		     }
echo"</table>";
echo " <br> <input type='submit' name='affiche' value='Afficher les operations'>
</form></html>"
;

	
?>