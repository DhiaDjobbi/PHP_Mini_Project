<?php
	include_once 'Connect.php';

class Compte extends Banka  {
private $numCpt;
private $idCli;
private $soldeCpt;
function __construct($num="",$id="",$solde="")
 	{
        $this->numCpt=$num;
        $this->idCli=$id;
        $this->soldeCpt=$solde;	
        parent::__construct();
	}
function show()
{
		$query = "select numCpt,nomCli, prenomCli,soldeCpt from compte,client where client.idCli = compte.idCli ";
		$x=$this->pdo->query($query);
		return $x;
}

function mawjoud($numCpt)
{
	$query = "select * from compte where numCpt =$numCpt ";
	$x=$this->pdo->query($query);
	$nb=$x->rowCount();
	if($nb==0)
		return false;
	else 
		return true;

}
}

 ?>