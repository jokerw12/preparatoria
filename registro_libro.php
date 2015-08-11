<?php 
include('Query.inc');
		$query=new Query();
			$ruta="fondos";
			$archivo=$_FILES['imagen']['tmp_name'];
			$nombreArchivo=$_FILES['imagen']['name'];
			move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
			$ruta=$ruta."/".$nombreArchivo;




		$admin=$query->insert("libro","folio,nombre,autor,editorial,edicion,existencias,imagen
			","'".$_POST['folio']."','".$_POST['nombre']."','".$_POST['autor']."','".$_POST['editorial']."','".$_POST['edicion']."','".$_POST['existencias']."','".$ruta."'");
			if ($admin) {
				$regresar=false;
				echo ' <script language="javascript">alert("Registro Realizado Exitoxamente");</script> ';
				$regresar=true;
				if ($regresar) {
				header("location:libro.php");
				}

			}else{

			echo ' <script language="javascript">alert("Error al registrar alumno");</script> ';
			}
		


 ?>