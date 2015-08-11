<?php 
include('Query.inc');
		$query=new Query();

		$admin=$query->insert("materia","clave,nombre,semestre","'".$_POST['clave']."','".$_POST['nombre']."','".$_POST['semestre']."'");
			if ($admin) {
				$regresar=false;
				echo ' <script language="javascript">alert("Registro Realizado Exitoxamente");</script> ';
				$regresar=true;
				if ($regresar) {
				header("location:materia.php");
				}

			}else{

			echo ' <script language="javascript">alert("Error al registrar alumno");</script> ';
			}
		


 ?>