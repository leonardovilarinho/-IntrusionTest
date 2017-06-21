<?php


class Cliente
{
	public static function listar($id)
	{
		return ClienteBanco::listar($id);
	}
}