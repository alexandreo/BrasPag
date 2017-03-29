<?php
namespace Alexandreo;

use Alexandreo\Services\{
    PagadorTransactionService,
    AntiFraudeTransactionService
};

/**
 * Class BrasPag
 * @package Alexandreo
 */
class BrasPag
{

	use PagadorTransactionService {
		PagadorTransactionService::__construct as private __PagadorTransactionConstruct;
	}

	use AntiFraudeTransactionService {
		AntiFraudeTransactionService::__construct as private __AntiFraudeTransactionConstruct;
	}

    /**
     * BrasPag constructor.
     * @param bool $envProducation
     */
    public function __construct($envProducation = true)
    {
        $this->__PagadorTransactionConstruct($envProducation);
        $this->__AntiFraudeTransactionConstruct($envProducation);
    }

}
