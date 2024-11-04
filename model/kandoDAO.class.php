<?php
	class kandoDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function buscar_todas()
		{
			$sql = "SELECT * FROM kando";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
				echo $e->getCode();
				die();
			}
		}

		public function inserir($kando)
		{
			$sql = "INSERT INTO kando (nome, descricao, data_entrega, statusAtv, disciplina) VALUES(?, ?, ?, ?, ?)";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $kando->getNome());
				$stm->bindValue(2, $kando->getDescricao());
				$stm->bindValue(3, $kando->getDataEntrega());
				$stm->bindValue(4, $kando->getStatus());
				$stm->bindValue(5, $kando->getDisciplina());
				$stm->execute();
				$this->db = null;
				return "Atividade inserida com sucesso";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				echo $e->getMessage();
				echo $e->getCode();
				die();
			}
		}

		public function alterar($kando)
		{
			$sql = "UPDATE kando SET nome = ?, descricao = ?, data_entrega = ?, statusAtv = ?, disciplina = ? WHERE idkando = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $kando->getNome());
				$stm->bindValue(2, $kando->getDescricao());
				$stm->bindValue(3, $kando->getDataEntrega());
				$stm->bindValue(4, $kando->getStatus());
				$stm->bindValue(5, $kando->getDisciplina());
				$stm->execute();
				$this->db = null;
				return "Atividade alterada com sucesso";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				echo $e->getMessage();
				echo $e->getCode();
				die();
			}
		}

		public function excluir($kando)
		{
			$sql = "DELETE FROM kando WHERE idkando = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $kando -> getIdkando());
				$stm->execute();
				$this->db = null;
				return "Atividade excluída com sucesso";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				echo $e->getMessage();
				echo $e->getCode();
				die();
			}
			
		}

		// public function alterar_situacao($categoria)
		// {
		// 	$sql = "UPDATE categorias SET situacao = ? WHERE idcategoria = ?";
		// 	try
		// 	{
		// 		$stm = $this->db->prepare($sql);
		// 		$stm->bindValue(1, $categoria->getSituacao());
		// 		$stm->bindValue(2, $categoria->getIdcategoria());
		// 		$stm->execute();
		// 		$this->db = null;
		// 		return "Situação alterada com sucesso";
		// 	}
		// 	catch(PDOException $e)
		// 	{
		// 		$this->db = null;
		// 		echo $e->getMessage();
		// 		echo $e->getCode();
		// 		die();
		// 	}
		// }

		// public function buscar_uma_categoria($categoria)
		// {
		// 	$sql = "SELECT * FROM categorias WHERE idcategoria = ?";
		// 	try
		// 	{
		// 		$stm = $this->db->prepare($sql);
		// 		$stm->bindValue(1,$categoria->getIdcategoria());
		// 		$stm->execute();
		// 		$this->db = null;
		// 		return $stm->fetchAll(PDO::FETCH_OBJ);
		// 	}
		// 	catch(PDOException $e)
		// 	{
		// 		$this->db = null;
		// 		echo $e->getMessage();
		// 		echo $e->getCode();
		// 		die();
		// 	}
		// }

        public function buscar_um($kando)
		{
			$sql = "SELECT * FROM kando WHERE statusAtv = ?";
			
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1,$kando->getStatus());
			$stm->execute();
			$this->db = null;
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

	}//fim da classe
?>