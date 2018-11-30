<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'iniciandoComunicacaoBD.php';


$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "SELECT idPaciente, Nome, Sobrenome, Numero, CPF, Email, Endereco, Anamnese FROM paciente";
$result = mysqli_query($conn, $sql);
$nome='';
$sobreNome='';
$anaminese='';
$endereço='';
        
    


// É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
if (mysqli_num_rows($result) > 0) {
    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
    while($row = mysqli_fetch_assoc($result)) {
        //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
        $nome = $row["Nome"];
        $sobreNome = $row["Sobrenome"];
        $anaminese = $row["Anamnese"];
        $endereço = $row["Endereco"];
            
        }
      
     
 }
	
   
 else {
    echo "A tabela Registro está vazia";
}
mysqli_close($conn);
