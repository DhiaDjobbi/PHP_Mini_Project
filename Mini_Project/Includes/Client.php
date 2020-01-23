<?php
	include_once 'Connect.php';

class Client extends Banka  {
private $idCli; 
private $nomCli;
private $prenomCli;
private $adrCli;
private $telCli;
function __construct($id="",$nom="",$prenom="",$adress="",$telephone="")
 	{
        $this->idCli=$id;
        $this->nomCli=$nom;
        $this->prenomCli=$prenom;
        $this->adrCli=$adress;
        $this->telCli=$telephone;
        parent::__construct();
	}
	
  function liste()
	{	
        $query = "select * from client";
		$x=$this->pdo->query($query);
		foreach ($x as $row) 
	    	{
				echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]."</br>";
		     }
		return $x->rowCount();

	}		
	function remove ($idCli)	
	{
		$query="delete from client where idCli=$idCli";
		return $this->pdo->exec($query);
	}
	function create($nomCli,$prenomCli,$adrCli,$telCli)	
	{
		$query="insert into client values('','$nomCli','$prenomCli',' $adrCli','$telCli')";
		return $this->pdo->exec($query);
	}
	function update($idCli,$nomCli,$prenomCli,$adrCli,$telCli)	
	{
				$query1 = "select * from client where idCli=$idCli";
				$x=$this->pdo->query($query1);
				$nb=$x->rowCount();
				if($nb==0)
					echo "le client n existe pas !  Verifier le ID<br>";
				else
					echo "<br>le client existe";
					$query = "UPDATE client SET nomCli='$nomCli', prenomCli='$prenomCli', adrCli='$adrCli' , telCli='$telCli' WHERE idCli=$idCli";
					return $this->pdo->exec($query);
			
	}
}	

?> 
	