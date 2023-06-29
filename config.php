<?php
	/*
	ob_start(); session_start();
	ini_set('session.bug_compat_warn', 0); // erro PHP >= 4.3 [ diferencia variavel de sessao ]
	ini_set('session.bug_compat_42', 0);
	
	require_once("admin/adm_configuracao.php"); // configurações gerais (metatags, loja)
	require_once("admin/adm_funcoes.php"); // repositorio de funções
	*/

	error_reporting(0);
	ini_set('display_errors', 0);
	header("Content-Type: text/html;  charset=utf8",true);

	$agent=$_SERVER['HTTP_USER_AGENT'];
	if( strpos($agent,"Android") !== FALSE 
	 || strpos($agent,"IOS") !== FALSE
	 || strpos($agent,"iPhone") !== FALSE
	 //|| strpos($agent,"iPad") !== FALSE
	 || strpos($agent,"iPod") !== FALSE
	 || strpos($agent,"Symbian") !== FALSE
	 || strpos($agent,"BlackBerry") !== FALSE
	 || strpos($agent,"Opera Mini") !== FALSE
	){
	  $_mobile = 1;
	}else{
	  $_mobile = 0;
	}

	if($_SERVER["HTTP_HOST"] === "www.brqueiroz.com.br"){
		header("location: http://brqueiroz.com.br".$_SERVER["REQUEST_URI"]);
	}

?>
