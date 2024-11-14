<?php
	function verificar()
	{
		session_start();
		if(isset($_SESSION["perfil"]) && $_SESSION["perfil"] == "Professor")
		{
			return true;
		}
		else
		{
			return false;
		}
	}
?>