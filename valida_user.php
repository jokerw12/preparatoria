<?php 

	
	include('Query.inc');
		$query=new Query();
		if (empty($_POST['user'])) {
			exit("Faltan campos por llenar usuarios");
		}elseif (empty($_POST['password'])) {
			exit("Faltan campos por llenar password");
		}else{

			$admin=$query->select("user","administrativo","user='".$_POST['user']."' and password='".$_POST['password']."'");
			if ($admin) {
			header("Location:inicioAdmin.php");
			}else{

				echo "error";
			}
		}



 ?>