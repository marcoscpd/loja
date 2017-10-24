<?php

/**
* ---------------------------------------------------------------------------
* config.php
* Script para centralizar includes e facilitar a manutenção do sistema.
* ---------------------------------------------------------------------------
**/

/**
* INICIANDO A SESSÃO PHP
**/
//session_start();

/**
* ===========================================================================
* helpers/helpers.php
* Script com funções criadas pelo programador
* para auxiliar no tratamento dos dados do sistema (datas, moedas, etc).
* ===========================================================================
**/

require_once("helpers/helpers.php");

/**
* ===========================================================================
* conexao/conexao.php
* Script com funções que realiza a comunicação entre o PHP e o Banco de Dados,
* em nosso caso o MySQL.
* Todos os arquivos que precisam realizar alguma consulta no banco de dados,
* precisaram acessar esse recurso.
* ===========================================================================
**/

require_once("conexao/conexao.php");

/**
* ===========================================================================
* logicaDeAutenticacao/verifica-se-usuario-esta-logado.php
* Script que verifica se existe uma sessão e se o usuário está logado.
* ===========================================================================
**/

require_once("logicaDeAutenticacao/verifica-se-usuario-esta-logado.php");
