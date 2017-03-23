<?php

namespace Alexandreo\Contracts\AntiFraudRequest;


/**
 * Interface DocumentDataContracts
 * @package Alexandreo\Contracts\AntiFraudRequest
 */
interface DocumentDataContracts
{

    /**
     * @param $cpf
     * @return mixed
     */
    public function setCpf($cpf);

    /**
     * @param $cnpj
     * @return mixed
     */
    public function setCnpj($cnpj);

    /**
     * @param $other
     * @return mixed
     */
    public function setOther($other);

    /**
     * @return mixed
     */
    public function getCpf();

    /**
     * @return mixed
     */
    public function getCnpj();

    /**
     * @return mixed
     */
    public function getOther();

}