<?php
	class Usuario
	{
		public function __construct(private int $idusuario = 0, private string $nome = "", private string $email = "", private string $senha = "", private string $telefone = ""){}
		
		public function getIdusuario()
		{
			return $this->idusuario;
		}
		public function getNome()
		{
			return $this->nome;
		}
		public function getEmail()
		{
			return $this->email;
		}
		public function getSenha()
		{
			return $this->senha;
		}
		public function getTelefone()
		{
			return $this->telefone;
		}

	}
?>