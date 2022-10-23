<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Encuestas</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style>
	.pregresp {
border: 1px solid #7DA5E0;
padding: 10px;
margin: 10px;
font-family: Arial, Verdana, Helvetica, sans-serif;
font-size: 15px;
font-weight: bold;
}

.pregunta {
color: #7DA5E0;
}

.respuestas {
color: #000000;
}
	</style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
     
	  
	  
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="./">Preguntas <span class="sr-only">(current)</span></a></li>
		 <li ><a href="posibles.php">Posibles respuestas <span class="sr-only">(current)</span></a></li>
		 <li ><a href="encuesta.php">Encuesta <span class="sr-only">(current)</span></a></li>
		 <li ><a href="respuestas.php">Respuestas <span class="sr-only">(current)</span></a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<div class="container">
	<h1 class="page-header text-center">Respuestas</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
		
		<?php
			//incluimos el fichero de conexion
			include_once('dbconect.php');

			$database = new Connection();
			$db = $database->open();
			try{	
				$sql = 'SELECT encues.nomen, pregun.codpr, pregun.nompr, posibles.codpo, posibles.nompo, posibles.codpo FROM encues INNER JOIN pregun ON encues.codpr=pregun.codpr INNER JOIN posibles ON encues.codpo=posibles.codpo';
				foreach ($db->query($sql) as $row) {
					?>
					<!-- -->
		<div class="pregresp">
		  <div class="pregunta"><?php echo $row['nompr']; ?><br />
		  </div>
		  <div class="respuestas">
			<textarea disabled name="nomen" rows="2" cols="30"><?php echo $row['nomen']; ?></textarea>
			
		  </div>
		  <div class="pregunta">Posible respuesta<br />
		  <textarea name="nompo" disabled rows="2" cols="30"><?php echo $row['nompo']; ?></textarea>
		  </div>
		</div>
					<?php 
				}
			}
			catch(PDOException $e){
				echo "Hubo un problema en la conexión: " . $e->getMessage();
			}

			//Cerrar la Conexion
			$database->close();

		?>
		
		
			
		</div>
	</div>
</div>


<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>