<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="shortcut icon" href="./images/nurse.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <title>CENTRO MEDICO</title>
</head>

<body>

  <div class="container-fluid">
    <div class="row">

      <div class="col-md-8">

        <img src="./images/LOGO.png" class="img-fluid" alt="...">
        <!-- fin col -->
      </div>
      <div class="col-md-2">
        cra 100 con 98 <br>
        edificio la ceiba <br>
        cali-valle

        <!-- fin col -->
      </div>
      <div class="col-md-2">
        email:mikero034@gmail.com <br>
        citas Medicas: 55558965
        <!-- fin col -->
      </div>

      <!-- fin row -->
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">::::</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-heart-fill"> INICIO</i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-journal-medical">ACERCA DE</i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-journal-plus"> CITAS</i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-people-fill"> CONTACTO </i></a>
            </li>
            <li class="nav-item">
              <a type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#FrmLogin">
              <i class="bi bi-key">LOGIN</i>
              </a>
              <!-- <a class="nav-link" href="./Panel.php"><i class="bi bi-key">LOGIN</i></a> -->
            </li>


          </ul>

        </div>
      </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/hms.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-dark">
            <h5>Médicos especialistas </h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./images/hms2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-dark">
            <h5>Laboratorios de ultimá tecnologia</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./images/hms3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-dark">
            <h5>Atención personalizada</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="row mt-5">
      <div class="col-md-4">

        <div class="card">
          <img src="./images/especialista.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Médicos especialistas</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary"> ver más</a>
          </div>
        </div>
        <!-- fin col -->
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="./images/hospitaliza.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Hospitalización</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary"> ver más</a>
          </div>
        </div>
        <!-- fin col -->
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="./images/Microscopio.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Laboratorio</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary"> ver más</a>
          </div>
        </div>
        <!-- fin col -->
      </div>
    </div>

    <div class="row mt-5 p-5 bg-dark text-light">
      <div class="col-md-6 ">
        <i class="bi bi-hospital-fill"></i><br>
        cra 100 con 98 <br>
        edificio la ceiba <br>
        cali-valle


        <!-- fin col -->

      </div>
      <div class="col-md-6 ">

        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- fin col -->
      </div>

      <!-- fin row -->
    </div>



    <!-- modal del login -->

    <!-- Button trigger modal -->


    <!-- Modal -->

    <div class="modal fade" id="FrmLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login del Sistema</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="Usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="Usuario" name="Usuario" aria-describedby="UsuarioHelp">
                            <div id="UsuarioHelp" class="form-text">Ingrese su usuario registrada en el sistema</div>
                        </div>
                        <div class="mb-3">
                            <label for="PassWord" class="form-label">Password</label>
                            <input type="PassWord" class="form-control" name="PassWord" id="PassWord">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Mostrar la contraseña</label>
                        </div>

                        ¿aun no tiene cuenta? <a href="frmRegistroPaciente.php">registrese aqui</a>

                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>


    <!-- cierre modal del login -->






    <!-- fin container -->
  </div>








  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>