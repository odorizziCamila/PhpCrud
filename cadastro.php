<?php

include 'conexao.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$recebendo_cadastro = "INSERT INTO cliente VALUES ('$nome','$telefone')";
$query_cadastros = mysqli_query($connx,$recebendo_cadastro);

header('location: listagem.php');//retorna pra pagina de listagem.

?>