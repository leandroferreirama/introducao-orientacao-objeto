<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Curitiba','Bacacheri','Estados Unidos', '182');

echo $umEndereco->rua;
echo $umEndereco->numero;
