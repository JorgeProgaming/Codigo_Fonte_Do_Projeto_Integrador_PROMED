
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ProMed | Login Funcionario</title>

    <!-- Bootstrap core CSS -->
    <link href="https://blackrockdigital.github.io/startbootstrap-coming-soon/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://blackrockdigital.github.io/startbootstrap-coming-soon/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="https://blackrockdigital.github.io/startbootstrap-coming-soon/css/coming-soon.min.css" rel="stylesheet">

  </head>

  <body>

    <div class="overlay-transparent "> </div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="video.mp4" type="video/mp4">
    </video>
      
    

    <div class="masthead ">
      <div class="masthead-bg bg-transparent"></div>
        
      <div class="container h-100">
        <div class="row h-100">
            <form action="loginFuncionarioEntrar.php" method="post">    
          <div class="col-12 my-auto">
            <div class="masthead-content text-dark py-5 py-md-0">
                <br>
                                <br>

                                <i class="fas fa-user-md fa-6x" style="color: white;"></i>
               
              <h1 class="mb-3 my-3 text-white">Login ProMed!</h1>
              <p class="mb-5 text-white">Insira suas informações para fazer login
              <div class="input-group input-group-newsletter">
                 
                  <input name="email" type="email" class="form-control" placeholder="Insira seu E-mail" aria-label="Enter email..." aria-describedby="basic-addon">
                <div class="input-group-append">
                </div>
              </div>
            </div>
            <div class="masthead-content text-white py-5 py-md-0">
              
              <div class="input-group input-group-newsletter">
                <input name="senha" type="password" class="form-control" placeholder="Insira sua Senha" aria-label="Enter email..." aria-describedby="basic-addon">
                <div class="input-group-append">
                  <button class="btn btn-success" type="submit">Entrar no Sistema</button>
                </div>
              </div>
            </div>  
          </div>
            </form>
        </div>
      </div>
    </div>

  

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/coming-soon.min.js"></script>

  </body>

</html>
