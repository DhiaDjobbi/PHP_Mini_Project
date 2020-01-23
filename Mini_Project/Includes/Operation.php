<?php
	include_once 'Connect.php';
class Operation extends Banka  {
private $numOp; 
private $numCpt;
private $natureOp;
private $dateOp;
private $montant;
function __construct($numop="",$numcp="",$nature="",$date="",$mon="")
 	{
        $this->numOp=$numop;
        $this->numCpt=$numcp;
        $this->natureOp=$nature;
        $this->dateOp=$date;
        $this->montant=$mon;
        parent::__construct();
	}
	
 function New_Op($numCpt,$natureOp,$dateOp,$montant)
 {
	 if ($natureOp=="R")
		$montant=$montant * (-1);
	$query="insert into operation (numCpt,natureOp,dateOp,montant) values('$numCpt','$natureOp',' $dateOp','$montant')";
	$res= $this->pdo->exec($query);
	$query1= "select soldeCpt from compte where numCpt = $numCpt";
	$x=$this->pdo->query($query1);
	foreach ($x as $row) 
	    	{
				$current_cash=$row['soldeCpt'];
		     }
	$new_cash = $current_cash + $montant;//(a-b==a+(-b))
	  
	$query2= "update compte set soldeCpt = $new_cash where numCpt = $numCpt";
	return $this->pdo->exec($query2);		 
 }
 function show($numCpt)
 {
	$query= "select * from operation where numCpt = $numCpt";
		$x=$this->pdo->query($query);
		return $x;
 }
 
 }
?> 
	