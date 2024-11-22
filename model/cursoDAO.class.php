<?php
	class cursoDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function buscar_todos()
		{
			$sql = "SELECT * FROM curso";
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

		public function inserir($curso)
		{
			$sql = "INSERT INTO curso (nome, descricao) VALUES(?, ?)";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $curso->getNomeCurso());
				$stm->bindValue(2, $curso->getDescricaoCurso());
				$stm->execute();
				$this->db = null;
				return "Curso inserido com sucesso";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				echo $e->getMessage();
				echo $e->getCode();
				die();
			}
		}

		public function alterar($curso)
		{
			$sql = "UPDATE curso SET nome = ?, descricao = ?WHERE idcurso = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $curso->getNomeCurso());
				$stm->bindValue(2, $curso->getDescricaoCurso());
				$stm->execute();
				$this->db = null;
				return "Categoria alterada com sucesso";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				echo $e->getMessage();
				echo $e->getCode();
				die();
			}
		}

		public function excluir($curso)
		{
			$sql = "DELETE FROM curso WHERE idcurso = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $curso->getIdcurso());
				$stm->execute();
				$this->db = null;
				return "Curso excluido com sucesso";
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

		public function buscar_um_curso($curso)
		{
			$sql = "SELECT * FROM curso WHERE idcurso = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $curso->getIdcurso());
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