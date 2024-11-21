<?php
	function verificar()
	{
		session_start();
		if(isset($_SESSION["perfil"]) && $_SESSION["perfil"] == "Administrador")
		{
			return true;
		}
		else
		{
			return false;
		}
	}
?>