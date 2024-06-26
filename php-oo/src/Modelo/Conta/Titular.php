<?php

namespace Modelo\Conta;

class titular extends Pessoa
{  
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    } 
    
    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }
}