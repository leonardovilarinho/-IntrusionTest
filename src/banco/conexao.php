<?php

$banco = new mysqli('127.0.0.1', 'azure', '6#vWHD_$', 'localdb', '53645');

if ($banco->connect_errno)
	die('erro ao conectar com o banco de dados');

mysqli_set_charset($banco, 'utf8');