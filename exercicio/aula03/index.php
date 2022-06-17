<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Calçados', 'Tenis Nike Air Jordan');
$c2 = new Categoria('Roupas', 'Roupas jeans');
$c3 = new Categoria('Roupas', 'Calças');

$p1 = new Produto('Tenis', 299, $c1);
$p1 ->setDescricao('Tenis para Basquete');


$p2 = new Produto('Saia Jeans', 100, $c2);


$p3 = new Produto('Calça branca', 159.78, $c3);
