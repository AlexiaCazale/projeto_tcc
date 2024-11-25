<?php
	class Usuario
	{
		public function __construct(private int $idusuario = 0, private string $nome = "", private string $email = "", private string $senha = "", private string $telefone = "", private string $perfil = "", private string $foto_perfil = '' ){}
		
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
		public function getPerfil()
		{
			return $this->perfil;
		}
		public function getFotoPerfil()
		{
			return $this->foto_perfil;
		}

	}
?>