<?php
namespace Alexandreo\Services;

use Alexandreo\Soap\AntiFraudeClient;
use StdClass;
use Soapvar;

trait AntiFraudeTransactionService
{

	private $brasPagAntiFraudeClient = null;

	function __construct($envProducation = true)
	{
		$this->brasPagAntiFraudeClient = new AntiFraudeClient([], $envProducation);
	}

}