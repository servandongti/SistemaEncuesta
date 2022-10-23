<?php
	
	// Include database connection

	include_once "dbConfig.php";

	// Insert multiple checkbox value in databse

if(isset($_POST['agregar'])){

      $nomen = $_POST['nomen'];
      $codpr = $_POST['codpr'];
	  $codpo = $_POST['codpo'];

      $query = "INSERT INTO encues(nomen,codpr,codpo) VALUES('$nomen', '$codpr', '$codpo')";
	  $query2 = "UPDATE pregun SET stop=stop-1 WHERE codpr = '$codpr'";

      $result = $con->query($query);
	  $result2 = $con->query($query2);

      if ($result) {
          header('location: encuesta.php');
      }else if ($result2){
		  header('location: encuesta.php');
         
      }else{
		  echo 0;
	  }

  }

?>