<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <title>Alumnos</title>
</head>
<body>
<div id="sidebar">
  <a href="#" id="icono"><i class="fa fa-bars"></i></a>
  <div id="logo">
    <a href="index.php">Cerrar</a>
  </div>
    <!-- Menu del sidebar -->
  <div id="menu">
    <ul>
        <h1></h1>
        <li><a href="profesor.php" >Profesores</a></li>
        <li><a href="materia.php" >Materias</a></li>
        <li><a href="Registrousuarios.php" >Alumnos</a></li>
        <li><a href="libro.php" >Libros</a></li>
     </ul>
    <ul>
      <h1>Actividades</h1>
      <li><a href="#">Eventos</a></li>
      <li><a href="">Galeria</a></li>
    </ul>
  </div>
  
</div>
<div class="container">
  <br>
  <a href="#ventana1" class="btn btn-success" data-toggle="modal">Registrar Alumno</a> 
  <div class="modal fade" id="ventana1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
          <h4>Registro Materia</h1>
        </div>
        <!--Contenido-->
        <div class="modal-body">
          <!--Inicio de Formulario de Registro de Alumno-->
          <form action="registo_user.php" method="post">
      
            <p>
              <label for="name">Nombre; </label>
                   <input class="form-control" type="text" id="name" name="nombre" placeholder="Ingresa tu Nombre" required="required">
            </p>
            <p>
              <label for="name">Apellido Paterno</label>
                   <input class="form-control" id="name" type="text" name="apellidop" required="required" placeholder="Ingresa Apellido Paterno">
            </p>
           <p>
              <label  for="name">Apellido Materno</label>
                   <input class="form-control" id="name" type="text" name="apellidom"required="required" placeholder="Ingresa Apellido Materno">
           </p>    
           <p>
              <label for="name">Curp</label>
                   <input class="form-control" id="name" type="text" name="curp" required="required" placeholder="Ingresa Curp">
            </p>
           <p>
              <label for="name">Direccion</label>
                   <input class="form-control" id="name" type="text" name="direccion"required="required" placeholder="Ingresa Direccion">
           </p>
           <p>
              <label for="name">Telefono</label>
                   <input class="form-control" id="name" type="number" name="telefono" required="required" placeholder="Ingresa telefono">
            </p>
            <p>
              <label for="name">password</label>
                   <input class="form-control" id="name" type="text" name="password" required="required" placeholder="Ingresa password">
            </p>
           <p> Selecciona Turno
              <select name="turno" class="form-control"> 
                     <option value="matutino">matutino</option>
                     <option value="vespertino">vespertino</option>
              </select>
           </p>
            <input class="btn btn-primary" type="Submit" value="Registrar">
    </form>
        </div>
      </div>
    </div>
  </div>
</div>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>