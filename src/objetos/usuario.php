<?php


class Usuario
{
	public function logar()
	{
		$id =UsuarioBanco::logar($_POST);
		if($id > 0)
			header('Location:../cliente.php?usuario_id='.$id);
		else
			header('Location:../index.php?mensagem=Erro ao logar!');
	}
}