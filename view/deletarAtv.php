<?php
	if($_GET)
	{
		require_once "../model/conexao.class.php";
		require_once "../model/kando.class.php";
		require_once "../model/kandoDAO.class.php";
		
		$kando = new KanDO($_GET["id"]);
		$kandoDAO = new kandoDAO();
		$retorno = $kandoDAO -> excluir($kando);
		
		header("location:pageKando.php?mensagem=$retorno");
		die();
	}
?>