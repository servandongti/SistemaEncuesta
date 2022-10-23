<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Encuestas</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
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
	<h1 class="page-header text-center">Posibles respuestas</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
		
			<a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Nueva posiblidad</a>
<?php 
	session_start();
	if(isset($_SESSION['message'])){
		?>
		<div class="alert alert-info text-center" style="margin-top:20px;">
			<?php echo $_SESSION['message']; ?>
		</div>
		<?php

		unset($_SESSION['message']);
	}
?>
<table class="table table-bordered table-striped" style="margin-top:20px;">
	<thead>
		<th>#</th>
		<th>Pregunta</th>
		
		<th>Posible respuesta</th>
	</thead>
	<tbody>
		<?php
			//incluimos el fichero de conexion
			include_once('dbconect.php');

			$database = new Connection();
			$db = $database->open();
			try{	
				$sql = 'SELECT posibles.codpo, posibles.nompo , pregun.codpr, pregun.nompr FROM posibles INNER JOIN pregun ON posibles.codpr=pregun.codpr';
				foreach ($db->query($sql) as $row) {
					?>
					<tr>
						<td><?php echo $row['codpo']; ?></td>
						<td><?php echo $row['nompr']; ?></td>
						<td><?php echo $row['nompo']; ?></td>
						
						
						
					</tr>
					<?php 
				}
			}
			catch(PDOException $e){
				echo "Hubo un problema en la conexión: " . $e->getMessage();
			}

			//Cerrar la Conexion
			$database->close();

		?>
				</tbody>
			</table>
			
			
		</div>
	</div>
</div>
<?php include('nueva_po.php'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/pregunta.js"></script>
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>