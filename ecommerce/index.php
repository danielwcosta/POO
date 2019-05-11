<?php

include 'classes/Produto.php';
include 'classes/Ebook.php';
include 'classes/LivroFisico.php';

$ebook = new Ebook(10.90,'PHP OO', 'Livro mto bom','http://qwe');
$livroFisico = new LivroFisico(21.90,'PHP OO','Livro mto bom',  300);

echo '<pre>';
var_dump($ebook);
var_dump($livroFisico);