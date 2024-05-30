<?php 
defined('CONTROL') or die('Acesso negado!');

//efetuuar o logout
session_destroy();

//voltar para a página inicial
header('location: index.php?rota=login');