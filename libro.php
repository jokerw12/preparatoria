<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<meta charset="UTF-8">
	<title>Libro</title>
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
				<li><a href="#" >Profesores</a></li>
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
		<!-- Fin Menu del sidebar -->


<div class="container">
			<br>
	<a href="#ventana1" class="btn btn-success" data-toggle="modal">Registrar Libro</a>	
	<div class="modal fade" id="ventana1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
					<h4>Registro Libro</h1>
				</div>
				<!--Contenido-->
				<div class="modal-body">
					<!--Inicio de Formulario de Registro de Materias-->
				<form  method="post" enctype="multipart/form-data" action="registro_libro.php">
        		 <p>
            <label for="name">Folio Libro</label><input class="form-control" id="name" type="text" name="folio"required="required" placeholder="Folio Libro">
         </p>
       		 <p>
            <label for="name">Nombre Libro</label><input class="form-control" id="name" type="text" name="nombre"required="required" placeholder="Nombre Libro">
         </p>
         <p>
            <label for="name">Autor</label><input class="form-control" id="name" type="text" name="autor"required="required" placeholder="Nombre de Autor">
         </p>
          <p>
            <label for="name">Editorial</label><input class="form-control" id="name" type="text" name="editorial" required="required" placeholder="Editorial">
         </p>
          
        
           <p>
            <label for="name">Edicion</label><input class="form-control" id="name" type="number" name="edicion"required="required" placeholder="No.edicion" min="1">
         </p>
           <p>
            <label for="name">Existencias</label><input class="form-control" id="name" type="number" name="existencias"required="required" placeholder="No.Libros" min="1">
         </p>
         <p>
         <label for="name">Imagen de Libro</label>
         <input class="form-control" type="file" name="imagen" >
         </p>
      <input type="submit" class="btn btn-primary" name="aceptar" value="Registrar">
    <br><br><br>
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