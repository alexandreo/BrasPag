<?php
if (!defined('BRASPAG_HOMOLOGACAO'))
	define('BRASPAG_HOMOLOGACAO', FALSE);

if (!defined('BRASPAG_HOMOLOGACAO_ENDPOINT'))
	define('BRASPAG_HOMOLOGACAO_ENDPOINT', 'https://homologacao.pagador.com.br/webservice/pagadorTransaction.asmx?WSDL');

if (!defined('BRASPAG_PRODUCAO_ENDPOINT'))
	define('BRASPAG_PRODUCAO_ENDPOINT', 'https://homologacao.pagador.com.br/webservice/pagadorTransaction.asmx?WSDL');

//DEFINE ENDPOINT
if (BRASPAG_HOMOLOGACAO === TRUE)
	define('BRASPAG_ENDPOINT', BRASPAG_HOMOLOGACAO);
else
	define('BRASPAG_ENDPOINT', BRASPAG_PRODUCAO_ENDPOINT);