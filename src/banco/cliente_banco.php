<?php

class ClienteBanco
{
	public static function listar($id)
	{
		include __DIR__.'/conexao.php';

		$execucao = $banco->query('SELECT * FROM clientes WHERE usuario_id = '.$id);

		$cliente = $execucao->fetch_assoc();

		return $cliente;
	}
}