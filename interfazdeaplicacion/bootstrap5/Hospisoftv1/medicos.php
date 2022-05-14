<!-- inicio del contenido -->
<?php
require_once 'PLANTILLA/cabecera.php'
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <!-- <h1 class="h2">INICIO DE CONTACTOS</h1>  -->
      </div>
        <H5>MANTENIMIENTO DE MÉDICOS</H5>
      <div class="container">
    <div class="row">

      <div class="col-md-6 text-center">
        <marquee behavior="" direction="">
          <!-- <h1>formulario</h1> -->
        </marquee>
        <div class="card" style="width: 30rem;">
          <!-- <H2>registro de contactos</H2> -->
          <img src="./Contra-Returns-780x483.jpg" class="card-img-top" alt="...">
          <div class="card-body"> 
          <!-- para insertar -->
          <form method="POST" action="./app/insertarMedico.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NOMBRE</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">APELLIDO</label>
    <input type="text" class="form-control" id="Apellido" name="Apellido" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">EMAIL</label>
    <input type="text" class="form-control" id="Email" name="Email" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Especialidad</label>
    <input type="text" class="form-control" id="Especialidad" name="Especialidad" aria-describedby="emailHelp">
    
  </div>
  
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
     </div>        </div>




        <!-- fin col -->
      </div>

      <div class="col-md-6">
        <marquee behavior="" direction="">
          <!-- <h1>tabla</h1> -->
        </marquee>

        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th scope="col">ID MÉDICO</th>
              <th scope="col">NOMBRE</th>
              <th scope="col">APELLIDOS</th>
              <th scope="col">Email</th>
              <th scope="col">ESPECIALIDAD</th>
              
            </tr>
          </thead>
          <tbody>
            <?php


            require_once './app/listarMedicos.php';
            //template : blade {{$list}} 
            //javascript: fetch y jsons
            //reac o vuejs o angular
           
            foreach ($result as $datos) {
              ?>
            <tr>
             <td><?php echo $datos-> id ?> </td>
             <td><?php echo $datos-> nombre_medico ?></td>
             <td><?php echo $datos-> apellidos_medico ?> </td>
             <td><?php echo $datos-> email ?> </td>
             <td><?php echo $datos-> especialidad ?> </td>
           
             
             <td> <a href="frmEditar.php?id=<?php echo $datos->id;?>"type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"> </i></a> </td>
             <td> <a type="button" class="btn btn-danger" href="./app/eliminarMedico.php?id=<?php echo $datos->id;?>"><i class="bi bi-trash"></i></a> </td>

             <!-- <a  href="frmEditar.php?id=<?php //echo $datos->id;?>" -->  
            
            
            </tr>
            
            
          <?php  }; ?>


            
          </tbody>
        </table>





        <!-- fin col -->
      </div>

      <!-- fin row -->
    </div>



    <!-- fin container -->
  </div>








<!-- fin del contenido -->
<?php
require_once 'PLANTILLA/footer.php'
?>      