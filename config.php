<?php
session_start();
include "connection.php";

//Essa sessão vem do sistema de login (Vide Curso Sistema de Login Completo PHP)
$_SESSION['user'] = 'Jeferson Souza'; 

/*DATE TIME*/
date_default_timezone_set("America/Sao_Paulo");

/*INFORMATION SITE*/
define ("URL", "http://localhost/fluxo-caixa/");
define ("TITLE_SITE", "Sistema de Fluxo de Caixa");
define ("FONT_GOOGLE", "Ubuntu");

/*DATA BASES*/
define("PAGAR", "contas_pagar"); //Contas a Pagar
define("RECEBER", "contas_receber"); //Contas a Receber
define("CAIXA", "abertura_caixa"); //Abertura de Caixa
define("PAGAMENTO", "caixa_pagamento"); //Caixa de Pagamentos

?>