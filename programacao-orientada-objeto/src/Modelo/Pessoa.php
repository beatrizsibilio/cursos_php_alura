<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropriedades;

    protected string $nome;
    protected Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function getCpf() : string
    {
        return $this->cpf->getNumero();
    }

    final protected function validarNome($nomePessoa)
    {
        if(strlen($nomePessoa) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres" . PHP_EOL;
            exit();
        }
    }
}