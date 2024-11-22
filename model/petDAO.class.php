<?php
	class petDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($pet)
		{
			$sql = "INSERT INTO pet (nome, imagem) VALUES(?,?)";
			try
			{
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $pet->getNome());
			$stm->bindValue(2, $pet->getImagem());
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
		public function alterar($pet)
		{
			$sql = "UPDATE pet SET nome = ?, imagem = ? WHERE idpet = ?";
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $pet->getNome());
			$stm->bindValue(2, $pet->getImagem());
			$stm->bindValue(3, $pet->getIdpet());
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

		// public function buscar_um($produto)
		// {
		// 	$sql = "SELECT * FROM produtos WHERE idproduto = ?";
			
		// 	$stm = $this->db->prepare($sql);
		// 	$stm->bindValue(1,$produto->getIdproduto());
		// 	$stm->execute();
		// 	$this->db = null;
		// 	return $stm->fetchAll(PDO::FETCH_OBJ);
		// }
		
	}//fim da classe produtoDAO
?>