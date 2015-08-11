<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<title>Materias</title>
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
     </ul><ul>
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
	<a href="#ventana1" class="btn btn-success" data-toggle="modal">Registrar Materia</a>	
	<div class="modal fade" id="ventana1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
					<h4>Registro Materia</h1>
				</div>
				<!--Contenido-->
				<div class="modal-body">
					<!--Inicio de Formulario de Registro de Materias-->
					<form method="post" action="registro_materia.php">
					<p>
		            <label for="name"> Clave de Materia  </label><input class="form-control" id="name" type="text" name="clave"required="required" placeholder="Ingresa Clave de Materia">
		        	</p>
		         	<p>
            		<label for="name"> Nombre de Materia  </label><input class="form-control" id="name" type="text" name="nombre"required="required" placeholder="Nombre de materia">
         			</p>
         			<p> Selecciona Semestre
		           	<select class="form-control" name="semestre"> 
		                  <option value="primer Semestre">1er. Semestre</option>
		                  <option value="segundo semestre">2do. Semestre</option>
		                  <option value="tercer semestre">3er. Semestre</option>
		                  <option value="cuarto semestre">4to. Semestre</option>
		                  <option value="quinto semestre">5to. Semestre</option>
		                  <option value="sexto semestre">6to. Semestre</option>
		            </select>
		         	</p>
		        	 <p>
		         	<input type="Submit" class="btn btn-success" value="Registrar">
		         	</p> 

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