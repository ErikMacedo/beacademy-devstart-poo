<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';


$a1 = new Aluno();
$a1->nome = 'Erik';
$a1->cpf = '123.123.123-44';

$a1->nome .= ' Esperidiao';


$cursoPHP = new Curso();
$cursoPHP->nome = 'Introdução ao PHP';
$cursoPHP->descricao = 88;
$cursoPHP->cargaHoraria = 'Aprender o basico e intermediario do PHP';

echo "<h1>Aluno: {$a1->nome}</h1>";