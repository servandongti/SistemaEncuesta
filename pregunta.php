<?php

$conexion = mysqli_connect("localhost","root","","encues");

$query = $conexion->query("SELECT * FROM pregun");


echo '<option value="0">Seleccione la pregunta</option>';
while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codpr']. '">' . $row['nompr'] . '</option>' . "\n";
}
