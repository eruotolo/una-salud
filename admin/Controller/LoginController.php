<?php

try{
    $base=new PDO("mysql:host=localhost;dbname=unasalud","root","root");
	/*$base=new PDO("mysql:host=localhost;dbname=dev-unasalud-01","root","root");*/
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM usuarios WHERE email= :correo AND password=:clave AND is_activo = 1";

	$resultado=$base->prepare($sql);

	$correo=htmlentities(addslashes($_POST["correo"]));
	$clave=htmlentities(addslashes($_POST["clave"]));
	$resultado->bindValue(":correo", $correo);
	$resultado->bindValue(":clave", $clave);
	$resultado->execute();
	$numero_registro=$resultado->rowCount();


	if ($numero_registro!=0 ) {
		
		session_start();
		$_SESSION["usuarios"]=$_POST["correo"];
		$_SESSION["logueado"]="OK";
		header("location: ../Layout/index.php?page=6");
		
	}else{
		$_SESSION["message"]="danger";
		$_SESSION["message_type"]="Error de autenticacion.";
		echo '	<script language="javascript">
					alert("Credenciales Incorrectas");
				</script>
				<script type="text/javascript">
					window.location.href = "../index.php?page=3";
				</script>';
		
	}


	}catch(Exception $e){

		die("Error: " . $e->getMessage());

	}



?>