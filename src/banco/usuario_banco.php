<?php

class UsuarioBanco
{
	public static function logar(array $usuario)
	{
		include __DIR__.'/conexao.php';

		$execucao = $banco->prepare('SELECT * FROM usuarios WHERE usuario = ? AND senha = ?');

		$execucao->bind_param('ss', $usuario['usuario'], $usuario['senha']);
		$execucao->execute();

		$consulta = $execucao->get_result();

		if(!$consulta)
			return false;

		$usuario = $consulta->fetch_assoc();

		session_start();
		$_SESSION['usuario'] = $usuario;

		return $consulta->num_rows > 0;
	}
}