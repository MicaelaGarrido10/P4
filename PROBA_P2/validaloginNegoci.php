<?php

require_once ("database.php"); 


if ($_POST["email"]!="" && $_POST["contra"]!="")
{
  $email=$_POST['email'];
  $contra=$_POST['contra'];


  $valida = new Funcions_db("mysql-micaelagarrido10.alwaysdata.net","283017","PRogramacion12345","micaelagarrido10_basedatos");


	if ($valida->validalogin($email,$contra) === true) {
		
		header('Location: css-grid/cv.php');
	}
	else{
		header('Location: error.php');

	}
}
else{
	echo "T'has deixat algun camp per omplir.";
}


?>