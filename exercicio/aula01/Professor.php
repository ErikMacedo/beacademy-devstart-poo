<?php
 
 declare(strict_types=1);

 class Professor 
 {
   private string $nome;
   private string $cpf;
   private float $salario;

  
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

  
  public function getCPF() : string 
    {
      return $this->cpf;
    }

  public function setCPF(string $novoCPF) : void
  {
    if (strlen($novoCPF) < 11)  {
      die('CPF com número de caracteres insuficiente.');
    }
    $this->cpf = $novoCPF;
  }

  
  public function getSalario() : float 
  {
    return $this->salario;
  }

  public function setSalario(float $novoSalario) : void
  {
    if ($novoSalario < 0)  {
      die('Salário não pode ser negativo.');
    }
    $this->salario = $novoSalario;
  }
 }
