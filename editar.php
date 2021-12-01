<?php

include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$alterando_cadastro = " UPDATE cliente set nome ='$nome', telefone = '$telefone' where id ='$id'";

$query_cadastros = mysqli_query($connx,$alterando_cadastro);

header('location: listagem.php');//retorna pra pagina de listagem.

?>