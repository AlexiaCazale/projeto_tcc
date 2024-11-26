<?php
	class petDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($pet)
		{
			$sql = "INSERT INTO pet (nome) VALUES(?)";
			try
			{
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $pet->getNome());
			$stm->execute();
			$this->db = null;
			return "Pet inserido com sucesso";
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				die();
			}			
		}

		public function alterar($pet)
		{
			$sql = "UPDATE pet SET nome = ? WHERE idpet = ?";
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $pet->getNome());
			$stm->bindValue(2, $pet->getIdpet());
			$stm->execute();
			$this->db = null;
		}
		
		public function buscar_todos()
		{
			$sql = "SELECT * FROM pet";
			$stm = $this->db->prepare($sql);
			$stm->execute();
			$this->db = null;
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		
	}//fim da classe produtoDAO
?>