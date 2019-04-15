<?php

/*
Site:Banda Malakhi Adonai
Autor: Hugo Leone de Araújo Souza
Data: 13/04/2019
*/

/* Define a página atual pela URL */
$pagina = 'home';

if(isset($_GET['i'])){
	$pagina = addslashes($_GET['i']);
}

/* Carrega o header.php */
include 'header.php';

/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
	case 'home':
		include 'home.php';
		break;
	
	case 'sobre':
		include 'sobre.php';
		break;

	case 'musica':
		include 'musica.php';
		break;

	case 'contato':
		include 'contato.php';
		break;

	default:
		include 'home.php';
		break;			
}

/* Carrega o footer.php */
include 'footer.php';