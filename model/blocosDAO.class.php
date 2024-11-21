<?php
	class blocosDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($bloco)
		{
			$sql = "INSERT INTO blocos (nome, imagem) VALUES(?,?)";
			try
			{
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $produto->getNome());
			$stm->bindValue(2, $produto->getImagem());
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
			$sql = "UPDATE blocos SET nome = ?, imagem = ? WHERE idbloco = ?";
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $produto->getNome());
			$stm->bindValue(2, $produto->getImagem());
			$stm->bindValue(3, $produto->getIdbloco());
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