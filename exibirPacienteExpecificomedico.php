
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ProMed | Exibir Pacientes</title>

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
            <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h2> pesquisar paciente</h2>
            <p class="lead">Insira as informações abaixo pedidas para pesquisar o paciente seja cadastrado</p>
          </div>

          <div class="row">
            
            <div class="col-md-8 order-md-1">
              <h4 class="mb-3">Informe </h4>
              <form class="needs-validation" novalidate action="exibirPacienteEspecificoDadosMedico.php" method="post">
                
                  <div class=" mb-4">
                    <label for="primeiroNome">Nome</label>
                    <input name="nome"type="text" class="form-control" id="primeiroNome" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      É obrigatório inserir um nome válido.
                    </div>
                  </div>
     
          
              
                  
                  

         



                

                <div class="row">
                  
                  
                
                </div>
                <hr class="mb-4">
                
              
                <hr class="mb-4">

               

               
                
                
                <hr class="mb-4">
                <button class="btn btn-success btn-lg btn-block" type="submit">Pesquisar Paciente</button>
              </form>
            </div>
          </div>

          <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017-2018 Grey-Sloan Memorial Hospital</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#">Privacidade</a></li>
              <li class="list-inline-item"><a href="#">Termos</a></li>
              <li class="list-inline-item"><a href="#">Suporte</a></li>
            </ul>
          </footer>
        </div>
      </section>

   

     

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
