
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ProMed | Sistema Médico</title>

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
                        <a class="nav-link js-scroll-trigger text-white" href="anotacoesMedicas.php">Fazer anotações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-white" href="index.php"> Sair</a>
                    </li>


                </ul>
            </div>
        </nav>
        <?php
        include 'iniciandoComunicacaoBD.php';


        $email = $_POST['email'];
        $senha = $_POST['senha'];


        $sql = "SELECT Nome, Email, Senha,Funcao FROM funcionario";
        $result = mysqli_query($conn, $sql);
        $nome = '';

        // É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
        if (mysqli_num_rows($result) > 0) {
            // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
            while ($row = mysqli_fetch_assoc($result)) {
                //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
                if ($row["Senha"] == $senha && $row["Email"] == $email) {
                    $nome = $row["Nome"];
                }
            }
        } else {
            echo "A tabela Registro está vazia";
        }
        mysqli_close($conn);
        ?>  

        <div class="container-fluid p-0">

            <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
                <div class="my-auto">
                    <h1 class="mb-0">Olá 
                        <span class="text-success display-2"><?php echo $nome; ?></span>
                    </h1>
                    <p class="lead mb-5">Aqui você poderá ver seus pacientes fazer anotações e verificar os resultados</p>
                    <div class="social-icons">
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
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
