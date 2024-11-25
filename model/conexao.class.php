<?php
	abstract class Conexao
	{
		public function __construct(protected $db = null)
		{
		
			$parametros = "mysql:host=localhost;port=3306;dbname=dbcorujario;"; //Aléxia
			//$parametros = "mysql:host=localhost;dbname=dbcorujario;"; 
			try
			{
				$this->db = new PDO($parametros, "root", ""); //Aléxia
				//$this->db = new PDO($parametros, "root", ""); 
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
				echo $e->getCode();
				die();
			}
		}
				
	}
?>