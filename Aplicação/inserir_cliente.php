<?php
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];


include_once "conexao.php";

$sql = "INSERT into cadastro_clientes(cpf, nome, rua, numero, bairro, cidade, estado, email, telefone, senha)
        VALUES ('$cpf', '$nome', '$rua', '$numero', '$bairro', '$cidade', '$estado', '$email', '$telefone', '$senha')";


mysqli_query($conexao,$sql);
mysqli_close($conexao);
?>