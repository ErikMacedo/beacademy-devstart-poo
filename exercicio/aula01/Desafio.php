<?php

declare(strict_types=1);


class Curso {
  private $nome;
  private $cargaHoraria;
  private $area;
}


class Professor {
  public $nome;
  public $cpf;
  public $disciplina;
}


class Disciplina {
  public $nome;
  public $curso;
  public $professor; 
}