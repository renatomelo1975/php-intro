<?php
include "servicos/servicoMensagemsessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicocategoriasCompetidor.php";


$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');