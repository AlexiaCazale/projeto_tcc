<?php
	class usuarioDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function login($usuario)
		{
			$sql = "SELECT idusuario, nome, perfil FROM usuario WHERE email = ? AND senha = ?";

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
                $stm -> bindValue(2, $usuario -> getNome());
                $stm -> bindValue(3, $usuario -> getEmail());
                $stm -> bindValue(4, $usuario -> getSenha());

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

	}
?>