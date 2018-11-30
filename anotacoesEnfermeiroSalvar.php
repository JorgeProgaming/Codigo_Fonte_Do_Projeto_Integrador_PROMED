<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'iniciandoComunicacaoBD.php';

$nomePaciente = $_POST['nome'];
$anotacaoEnfermeiro = $_POST['anotaçãoEnfermeiro'];
$id = 0;


$sql = "SELECT idPaciente, Nome FROM paciente";
$result = mysqli_query($conn, $sql);
// Executando o código SQL
if (mysqli_num_rows($result) > 0) {


    while ($row = mysqli_fetch_assoc($result)) {
//A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
        if ($row["Nome"] == $nomePaciente) {
            $id = $row["idPaciente"];
            $sql = "UPDATE paciente SET anotaçõesEnfermeiro='$anotacaoEnfermeiro' WHERE idPaciente= $id ";
            if (mysqli_query($conn, $sql)) {
                include 'sucessoCadastro.php';
            } else {
                echo "Erro ao executar o código: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
} else {
    echo "A tabela Registro está vazia";
}



mysqli_close($conn);
