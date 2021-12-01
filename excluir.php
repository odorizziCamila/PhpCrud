<?php

include 'conexao.php';

$nome = $_POST['nome'];

$excluindo_cadastro = "DELETE FROM CLIENTE WHERE NOME ='$nome'";
$query_cadastros = mysqli_query($connx,$excluindo_cadastro);

header('location: listagem.php');//retorna pra pagina de listagem.

?>