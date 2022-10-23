<?php
session_start();
include_once('dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO encues (nomen,codpr) VALUES (:nomen, :codpr)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':nomen' => $_POST['nomen'], ':codpr' => $_POST['codpr'])) ) ? 'Guardado correctamente' : 'Algo salió mal. No se puede agregar miembro';	
	
	 
		
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

header('location: encuesta.php');
	
?>