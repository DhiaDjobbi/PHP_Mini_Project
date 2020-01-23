	
<?php

class banka{
	protected $pdo;
	private $servername;
	private $username;
	private $pass;
	private $dbname;


function  __construct() {
	$this->servername="localhost";
	$this->username="root"; 
	$this->pass=""; 
	$this->dbname="banque"; 
	$dsn="mysql:host=".$this->servername.";dbname=".$this->dbname;  
	Try 
	{
		$this->pdo= new PDO($dsn,$this->username,$this->pass="");
		echo '<h5>Succes to connect to the database</h5>';
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
		return $this->pdo;
 
	}
	catch(PDOException $e )
	{
		echo '<h4>Filed to connect  </h4>'.$e->getMessage();
    }
}
}
?> 
