<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'iniciandoComunicacaoBD.php';

$nomePaciente = $_POST['nomePaciente'];
$sobrenomePaciente = $_POST['sobrenomePaciente'];
$numeroPaciente = $_POST['numeroPaciente'];
$cpfPaciente = $_POST['cpfPaciente'];
$emailPaciente = $_POST['emailPaciente'];
$endPaciente = $_POST['endPaciente'];
$anamnesePaciente = $_POST['anamnesePaciente'];

$sql = "INSERT INTO paciente( Nome, Sobrenome, Numero, CPF, Email, Endereco, Anamnese) VALUES ('$nomePaciente','$sobrenomePaciente','$numeroPaciente','$cpfPaciente','$emailPaciente','$endPaciente','$anamnesePaciente')"; 

// Executando o código SQL
if (mysqli_query($conn, $sql)) {
    include 'sucessoCadastro.php';;
} else {
    echo "Erro ao executar o código: " . $sql . "<br>" . mysqli_error($conn);
}
// Fechando a conexão com o banco de dados
mysqli_close($conn);
