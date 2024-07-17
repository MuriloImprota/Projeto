<?php


// Debug: Verifica o conteúdo da sessão
//var_dump($_SESSION);

// Debug: Verifica o conteúdo das mensagens flash
//($_SESSION['flash']);

function flash($key, $message, $type = 'danger') {

	if (!isset($_SESSION['flash'][$key])) {
		$_SESSION['flash'][$key] = '<span class="alert alert-' . $type . '">' . $message . '</span>';
	}

}

function get($key) {

	if (isset($_SESSION['flash'][$key])) {
		$message = $_SESSION['flash'][$key];

		unset($_SESSION['flash'][$key]);

		return $message ?? '';
	}

}
