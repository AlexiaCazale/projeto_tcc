<?php
	class blocosDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($bloco)
		{
			$sql = "INSERT INTO blocos (nome)VALUES(?)";
			try
			{
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $bloco->getNome());
			$stm->execute();
			$this->db = null;
			return "Bloco inserido com sucesso";
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				die();
			}
		}
		
		public function alterar($bloco)
		{
			$sql = "UPDATE blocos SET nome = ? WHERE idbloco = ?";
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $bloco->getNome());
			$stm->bindValue(2, $bloco->getIdbloco());
			$stm->execute();
			$this->db = null;
		}
		
		public function buscar_todos()
		{
			$sql = "SELECT * FROM blocos";
			$stm = $this->db->prepare($sql);
			$stm->execute();
			$this->db = null;
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		
	}//fim da classe produtoDAO
?>