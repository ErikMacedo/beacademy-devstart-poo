<?php

declare(strict_types=1);

class Produto 
{ 
 
  private string $nome;
  private float $valor;
  private string $descricao;

  private readonly Categoria $categoria;

  
  public function __construct(string $novoNome, float $novoValor, Categoria $categoria)
  {
    $this->nome = $novoNome;
    $this->valor = $novoValor;
    $this->categoria = $categoria;
  }

 
  public function getNome() : string 
  {
    return $this->nome;
  }

  
  public function setNome(string $novoNome) : void
  {
    if (strlen($novoNome) < 3)  {
      die('Nome inválido. Digite um nome acima de três letras.');
    }
    $this->nome = $novoNome;
  }

  public function getValor() : float
  {
    return $this->valor;
  }
  
  public function setValor(float $novoValor) : void
  { 
    if ($novoValor < 0) {
      die('Valor não pode ser negativo.');
    }
    $this->valor = $novoValor;
  }

  public function getDescricao() : string
  {
    return $this->descricao;
  }

  public function setDescricao(string $novaDescricao): void
  {
    $this->descricao = $novaDescricao;
  }

  public function setCategoria(Categoria $categoria) : void
  {
    $this->categoria = $categoria;
  }
}