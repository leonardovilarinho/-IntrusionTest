<?php

class UsuarioBanco
{
	public static function logar(array $usuario)
	{
		include __DIR__.'/conexao.php';

		$usuario_query = implode('","', $usuario);

		$execucao = $banco->query('SELECT * FROM usuarios WHERE usuario = "'.$usuario['usuario'].'" AND senha = "'. $usuario['senha'].'"');

		$usuario = $execucao->fetch_assoc();

		return $execucao->num_rows > 0 ? $usuario['id'] : False;
	}
}