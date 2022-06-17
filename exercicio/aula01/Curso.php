<?php

declare(strict_types=1);

class Curso 
{
  private string $nome;
  private string $descricao;
  private int $cargaHoraria;

 
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


  public function getDescricao() : string 
  {
    return $this->descricao;
  }

  public function setDescricao(string $novaDescricao) : void
  {
    if (strlen($novaDescricao) < 3)  {
      die('Nome inválido. Digite um nome acima de três letras.');
    }
    $this->descricao = $novaDescricao;
  }

 
  public function getCargaHoraria() : float 
  {
    return $this->cargaHoraria;
  }

  public function setCargaHoraria(float $novaCargaHoraria) : void
  {
    if ($novaCargaHoraria < 0)  {
      die('Carga horária não pode ser negativa.');
    }
    $this->cargaHoraria = $novaCargaHoraria;
  }
}

