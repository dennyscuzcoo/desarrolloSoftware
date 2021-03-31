<?php

//conexion DB
$dbconnNew = new mysqli("localhost", "examen", "+examen123", "proyectoExamen");

mysqli_character_set_name($dbconnNew);

//ingreso de datos
$sql = "INSERT INTO `formulario` (`Name`, `LastName`, `Age`, `CI`, `Country`, `DateRow`) 
		VALUES ('".$_POST['lname']."', '".$_POST['llast']."', '".$_POST['lage']."', '".$_POST['lci']."', '".$_POST['lcountry']."',NOW())";
$resultadoQuery = $dbconnNew->query($sql);

echo json_encode(array('success'=>true));

?>