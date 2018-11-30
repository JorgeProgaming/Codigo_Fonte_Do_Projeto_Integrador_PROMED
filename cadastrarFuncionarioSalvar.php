<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'iniciandoComunicacaoBD.php';

$nome = $_POST['nome'];

$email = $_POST['email'];
$senha = $_POST['senha'];
$cargo = $_POST['cargo'];


$sql = "INSERT INTO funcionario( Nome, Funcao, Email, Senha) VALUES ('$nome','$cargo','$email','$senha')"; 

// Executando o código SQL
if (mysqli_query($conn, $sql)) {
    include 'sucessoCadastro.php';
} else {
    echo "Erro ao executar o código: " . $sql . "<br>" . mysqli_error($conn);
}
// Fechando a conexão com o banco de dados
mysqli_close($conn);