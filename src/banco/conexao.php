<?php

$banco = new mysqli('localhost', 'root', 'root', 'invasao');

if ($banco->connect_errno)
	die('erro ao conectar com o banco de dados');

mysqli_set_charset($banco, 'utf8');