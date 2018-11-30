
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ProMed | Exibir Dados Especificos </title>

        <!-- Bootstrap core CSS -->
        <link href="https://blackrockdigital.github.io/startbootstrap-resume/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
        <link href="https://blackrockdigital.github.io/startbootstrap-resume/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="https://blackrockdigital.github.io/startbootstrap-resume/css/resume.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <nav class="navbar navbar-expand-lg navbar-light bg-success  fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block">
                    <i class="fas fa-user-md fa-7x" style="color: white ; padding-bottom: 50px;"></i>
                </span>
            </a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-success" >
                <ul class="navbar-nav bg-success">

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-white" href="exibirPacientesMedico.php">Exibir Pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-white" href="#education">Adicionar Tarefas</a>
                    </li>
              
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-white" href="index.php"> Sair</a>
                    </li>


                </ul>
            </div>
        </nav>
        <div class="container-fluid p-0">

            <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
                <div class="container">
                    <div class="py-5 text-center">
                        <i class="fas fa-user-alt fa-7x" style="color: black;"></i>
                        <br>
                        <br>
                        <br>
                        <h2>Informações Específicas do Paciente</h2>

                    </div>

                    <div class="row">
                        <?php
                        /*
                         * To change this license header, choose License Headers in Project Properties.
                         * To change this template file, choose Tools | Templates
                         * and open the template in the editor.
                         */
                        include 'iniciandoComunicacaoBD.php';




                        $nome = $_POST["nome"];
                        

                        $sql = "SELECT idPaciente, Nome, Sobrenome, Numero, CPF, Email, Endereco, Anamnese,anotacoesMedicas, anotacoesEnfermeiro FROM paciente";
                        $result = mysqli_query($conn, $sql);
                        $nome2 = '';
                        $sobrenome = '';
                        $cpf = '';
                        $email = '';
                        $numero = '';
                        $endereco = '';
                        $anamnese = '';
                        $anotacoesMedico = '';
                        $anotacoesEnfermeiro = '';






                        // É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
                        if (mysqli_num_rows($result) > 0) {


                            while ($row = mysqli_fetch_assoc($result)) {
                                //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
                                if ($row["Nome"] == $nome) {
                                    $nome2 = $row["Nome"];
                                    $sobrenome = $row["Sobrenome"];
                                    $cpf = $row["CPF"];
                                    $email = $row["Email"];
                                    $numero = $row["Numero"];
                                    $endereco = $row["Endereco"];
                                    $anamnese = $row["Anamnese"];
                                    $anotacoesMedico = $row["anotacoesMedicas"];
                                    $anotacoesEnfermeiro = $row["anotacoesEnfermeiro"];
                                    ;
                                }
                            }
                        } else {
                            echo "A tabela Registro está vazia";
                        }
                        mysqli_close($conn);
                        ?>   


                        <div class="col-md-8 order-md-1">



                            <div class="col-md-6 mb-3">
                                <h4 class="mb-3"> Nome</h4>
                                <label for="sobrenome"><?php echo $nome; ?></label>

                            </div>
                            <div class="col-md-6 mb-3">
                                <h4 class="mb-3"> Sobrenome</h4>
                                <label for="sobrenome"><?php echo $sobrenome; ?></label>

                            </div>
                            <div class="col-md-6 mb-3">
                                <h4 class="mb-3"> Numero</h4>
                                <label for="sobrenome"><?php echo $numero; ?></label>

                            </div>

                            <div class="col-md-6 mb-3">
                                <h4 class="mb-3"> CPF</h4>
                                <label for="sobrenome"><?php echo $cpf; ?></label>

                            </div>
                            <div class="col-md-6 mb-3">
                                <h4 class="mb-3"> E-mail</h4>
                                <label for="sobrenome"><?php echo $email; ?></label>

                            </div>
                            <div class="col-md-6 mb-3">
                                <h4 class="mb-3"> Endereço</h4>
                                <label for="sobrenome"><?php echo $endereco; ?></label>

                            </div>
                            <div class="col-md-6 mb-3">
                                <h4 class="mb-3"> Anamnese</h4>
                                <label for="sobrenome"><?php echo $anamnese; ?></label>

                            </div>
                            <div class="col-md-6 mb-3">
                                <h4 class="mb-3"> Anotações Médicas</h4>
                                <label for="sobrenome"><?php echo $anotacoesMedico; ?></label>

                            </div>
                            <div class="col-md-6 mb-3">
                                <h4 class="mb-3"> Anotações do Enfermeiro</h4>
                                <label for="sobrenome"><?php echo $anotacoesEnfermeiro; ?></label>

                            </div>
                        </div>

















                        </section>

                        <hr class="m-0">


                        <hr class="m-0">



                        <hr class="m-0">



                    </div>

                    <!-- Bootstrap core JavaScript -->
                    <script src="vendor/jquery/jquery.min.js"></script>
                    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Plugin JavaScript -->
                    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for this template -->
                    <script src="js/resume.min.js"></script>

                    </body>

                    </html>
