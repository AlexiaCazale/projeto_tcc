<?php
	class usuarioDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function login($usuario)
		{
			$sql = "SELECT * FROM usuario WHERE email = ? AND senha = ?";

            //perfil enum('professor', 'aluno')
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $usuario -> getEmail());
				$stm->bindValue(2, $usuario -> getSenha());
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

		public function cadastrar($usuario){
            $sql = "INSERT INTO usuario (nome, telefone, email, senha, perfil) VALUES(?, ?, ?, ?, ?)";
            try{
                $stm = $this -> db -> prepare($sql);
                $stm -> bindValue(1, $usuario -> getNome());
                $stm -> bindValue(2, $usuario -> getTelefone());
                $stm -> bindValue(3, $usuario -> getEmail());
                $stm -> bindValue(4, $usuario -> getSenha());
                $stm -> bindValue(5, $usuario -> getPerfil());

                $stm -> execute();
                $this -> db = null;

                $_SESSION['mensagem'] = 'Usuário cadastrado com sucesso!';
                header('Location: /index.php');

            }catch(PDOException $e){
                $this -> db = null;
                echo $e -> getMessage();
                echo $e -> getCode();
                $_SESSION['mensagem'] = 'Erro ao registrar: ' . htmlspecialchars($e -> getMessage());
                die();
            }
        }    

	
		public function buscar_usuario(){
			$sql = "SELECT * FROM usuario WHERE id = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1,$usuario->getIdusuario());
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
	
	
	// public function alterar($kando)
	// {
	// 	$sql = "UPDATE kando SET nome = ?, descricao = ?, data_entrega = ?, statusAtv = ?, disciplina = ? WHERE idkando = ?";
	// 	try
	// 	{
	// 		$stm = $this->db->prepare($sql);
	// 		$stm->bindValue(1, $kando->getNome());
	// 		$stm->bindValue(2, $kando->getDescricao());
	// 		$stm->bindValue(3, $kando->getDataEntrega());
	// 		$stm->bindValue(4, $kando->getStatus());
	// 		$stm->bindValue(5, $kando->getDisciplina());
	// 		$stm->bindValue(6, $kando->getIdkando());
	// 		$stm->execute();
	// 		$this->db = null;
	// 		return "Atividade alterada com sucesso";
	// 	}
	// 	catch(PDOException $e)
	// 	{
	// 		$this->db = null;
	// 		echo $e->getMessage();
	// 		echo $e->getCode();
	// 		die();
	// 	}
	//}

}
?>