<?php

include 'iniciandoComunicacaoBD.php';


$email = $_POST['email'];
$senha = $_POST['senha'];
$nomeExibir = '';
$nooe = '';


$sql = "SELECT Nome, Email, Senha,Funcao FROM funcionario";
$result = mysqli_query($conn, $sql);

// É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
if (mysqli_num_rows($result) > 0) {
    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
    while ($row = mysqli_fetch_assoc($result)) {
        //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
        if ($row["Senha"] == $senha && $row["Email"] == $email) {

            if ($row["Funcao"] == 'medico') {
                include 'sistemaMedico.php';
            }
            if ($row["Funcao"] == 'enfermeiro') {
                include 'sistemaEnfermeiro.php';
            }
            if ($row["Funcao"] == 'recepcionista') {
                include 'sistemaSecretaria.php';
            }
        } 
            
    
    }
     include 'falha.php';   

} else {
    echo "A tabela Registro está vazia";
}

mysqli_close($conn);
?>


