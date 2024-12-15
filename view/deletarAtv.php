<?php
	if($_GET)
	{
		require_once "../Model/conexao.class.php";
		require_once "../Model/kando.class.php";
		require_once "../Model/DAO/kandoDAO.class.php";
		
		$kando = new KanDO($_GET["idkando"]);
		$kandoDAO = new kandoDAO();
		$retorno = $kandoDAO -> excluir($kando);
		
		header("location:pageKando.php?mensagem=$retorno");
		die();
	}
?>