<?php 
include('Query.inc');
		$query=new Query();

		$admin=$query->insert("profesor","rfc,nombre,apellidop,apellidom,telefono,password","'".$_POST['rfc']."','".$_POST['nombre']."','".$_POST['apellidop']."','".$_POST['apellidom']."','".$_POST['telefono']."','".$_POST['password']."'");
			if ($admin) {
				$regresar=false;
				echo ' <script language="javascript">alert("Registro Realizado Exitoxamente");</script> ';
				$regresar=true;
				if ($regresar) {
				header("location:profesor.php");
				}

			}else{

			echo ' <script language="javascript">alert("Error al registrar alumno");</script> ';
			}
		


 ?>