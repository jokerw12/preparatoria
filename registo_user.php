<?php 
include('Query.inc');
		$query=new Query();

		$admin=$query->insert("alumno","curp,nombre,apellidop,apellidom,telefono,password,direccion,turno","'".$_POST['curp']."','".$_POST['nombre']."','".$_POST['apellidop']."','".$_POST['apellidom']."','".$_POST['telefono']."','".$_POST['password']."','".$_POST['direccion']."','".$_POST['turno']."'");
			if ($admin) {
				$regresar=false;
				echo ' <script language="javascript">alert("Registro Realizado Exitoxamente");</script> ';
				$regresar=true;
				if ($regresar) {
				header("location:Registrousuarios.php");
				}

			}else{

			echo ' <script language="javascript">alert("Error al registrar alumno");</script> ';
			}
		


 ?>