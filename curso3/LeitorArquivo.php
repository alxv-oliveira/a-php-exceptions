<?php

class LeitorArquivo
{   
    private $arquivo;

    public function __construct($arquivo)
    {
        $this->arquivo = $arquivo;
    }

    public function abrirArquivo()
    {
        echo "Abrindo arquivo";
    }

    public function lerArquivo()
    {
        echo "Lendo arquivo";
    }

    public function escreverNoArquivo()
    {
        echo "Escrevendo arquivo";
    }

    public function fecharArquivo()
    {
        echo "Fechando arquivo";
    }
}