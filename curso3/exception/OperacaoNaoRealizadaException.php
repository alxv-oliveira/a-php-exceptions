<?php

namespace exception;

class OperacaoNaoRealizadaException extends \Exception
{
    public function __construct($mensagem, $codigo = null, $ex = null)
    {
        parent::__construct($mensagem, $codigo, $ex);
    }

    public function __toString()
    {
        return $this->getCode() . ":" . $this->getMessage();
    }
}