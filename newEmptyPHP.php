
<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "promedBD";

// Criando a conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Checando a conexão com o banco de dados
if (!$conn) {
    die("A conexão com o BD falhou:" . mysqli_connect_error());
}

$sql = "INSERT INTO funcionario ( Nome, Funcao, Email, Senha) VALUES ('Emilly','medico','emili@123','102030')";

if (mysqli_query($conn, $sql)) {
    echo "Cadastro realizado com sucesso";
} else {
    echo "Erro ao executar o código: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>









