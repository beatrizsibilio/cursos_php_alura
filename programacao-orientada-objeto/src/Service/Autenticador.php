<?php

namespace Alura\Banco\Service;
use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentarLogin(Autenticavel $autenticavel, string $senha) : void
    {
        if($autenticavel->podeAutenticar($senha)) {
            echo "Ok. Usuário logado no sistema" . PHP_EOL;
        } else {
            echo "Ops. Senha incorreta" . PHP_EOL;
        }
    }
}
