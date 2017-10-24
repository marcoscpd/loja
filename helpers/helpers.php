<?php

if (!function_exists('dataMysqlParaPtBr')) {
  function dataMysqlParaPtBr($data) {
		return date('d/m/Y', strtotime($data));
	}
}

if (!function_exists('mysql_to_ptBR_hora')) {
	function mysql_to_ptBR_hora($data) 	{
		return date('H:i:s', strtotime($data));
	}
}

if(! function_exists('dataPtBrParaMysql')){
	function dataPtBrParaMysql($dataPtBr=null){
		$partes = explode("/", $dataPtBr);
		return "{$partes[2]}-{$partes[1]}-{$partes[0]}";
	}
}

if(! function_exists('moedaEmReais')){
	function moedaEmReais($numero){
		return "R$ " . number_format($numero, 2, ",", "." );
	}
}

if(! function_exists('moedaSemReais')){
	function moedaSemReais($valor){
		return number_format($valor, 2, ',', '.');
	}
}

/**
* Recebe um valor como parâmetro.
* Cria uma array ($caracteresQueSeraoSubstituidos)
* com uma lista de caracteres que serão substituídos na variável $valor.
* Cria um outro array ($caracteresQueIraoSubstitur)
* com uma lista de caracteres que irão substituir os declarados anteriormente.
* a função str_replace compara os índices dos arrays e realiza a substituição
* dos caracteres na variável $valor.
**/
if(! function_exists('moedaParaMySql')){
	function moedaParaMySql($valor){
		$caracteresQueSeraoSubstituidos = array('.', ',');
		$caracteresQueIraoSubstitur 		= array('', '.');
		$resultado = str_replace($caracteresQueSeraoSubstituidos, $caracteresQueIraoSubstitur, $valor);
		return $resultado;
	}
}
