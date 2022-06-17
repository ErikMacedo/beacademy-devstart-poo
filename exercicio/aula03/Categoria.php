<?php

declare(strict_types=1);

class Categoria
{
  //forma mais pratica de definir um construtor sem repetir os atributos
  //so funciona a partir do PHP8
  public function __construct(
    private string $nome,
    private string $descricao
  ){
  }


public function getNome() : string
{
  return $this->nome;
}

public function setNome(string $nome) : void
{
  $this->nome = $nome;
}


}

