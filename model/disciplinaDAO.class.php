<?php
	class disciplinaDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function buscar_todos()
		{
			$sql = "SELECT * FROM disciplina";
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

		public function inserir($disciplina)
		{
			$sql = "INSERT INTO disciplina (nome, descricao, idcurso) VALUES(?, ?, ?)";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $disciplina->getNome());
				$stm->bindValue(2, $disciplina->getDescricao());
				$stm->bindValue(3, $disciplina->getCurso()->getIdcurso());
				$stm->execute();
				$this->db = null;
				return "Disciplina inserido com sucesso";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				echo $e->getMessage();
				echo $e->getCode();
				die();
			}
		}

		public function alterar($disciplina)
		{
			$sql = "UPDATE disciplina SET nome = ?, descricao = ?WHERE idcurso = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $disciplina->getNome());
				$stm->bindValue(2, $disciplina->getDescricao());
				$stm->execute();
				$this->db = null;
				return "Disciplina alterada com sucesso";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				echo $e->getMessage();
				echo $e->getCode();
				die();
			}
		}

		public function excluir($disciplina)
		{
			$sql = "DELETE FROM disciplina WHERE iddisciplina = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $curso->getIddisciplina());
				$stm->execute();
				$this->db = null;
				return "Disciplina excluida com sucesso";
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

		public function buscar_uma_disciplina($disciplina)
		{
			$sql = "SELECT * FROM disciplina WHERE iddisciplina = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $disciplina->getIddisciplina());
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				echo $e->getMessage();
				echo $e->getCode();
				die();
			}
		}

        // public function buscar_um($kando)
		// {
		// 	$sql = "SELECT * FROM kando WHERE statusAtv = ?";
			
		// 	$stm = $this->db->prepare($sql);
		// 	$stm->bindValue(1,$kando->getStatus());
		// 	$stm->execute();
		// 	$this->db = null;
		// 	return $stm->fetchAll(PDO::FETCH_OBJ);
		// }

	}//fim da classe
?>