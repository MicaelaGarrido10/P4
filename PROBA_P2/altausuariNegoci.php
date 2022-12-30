<?php

require_once ("database.php");


if ($_POST["nom"]!="" && $_POST["cognom"]!=""&& $_POST["email"]!="")
{

  $nom= $_POST["nom"];
  $cognom= $_POST["cognom"];
  $email=$_POST['email'];
  $contra=$_POST['contra'];

  $alta = new Funcions_db("mysql-micaelagarrido10.alwaysdata.net","283017","PRogramacion12345","micaelagarrido10_basedatos");

  $alta->altausuari($nom,$cognom,$email,$contra);
}
else {
  echo "COMPLETA TOTA LA INFORMACIÓ";
}

?>