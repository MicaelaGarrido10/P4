<?php
class Database{
  protected $servername;
  protected $username;
  protected $password;
  protected $dbname;
  protected $conn;


  function __construct($servername,$username, $password, $dbname) {
    $this->servername = $servername;
    $this->username = $username;
    $this->password = $password;
    $this->dbname = $dbname;
    $this->conn = new mysqli($servername, $username, $password, $dbname);
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
  }
}

class Funcions_db extends Database{
  function __construct($servername,$username, $password, $dbname){
    parent:: __construct($servername,$username, $password, $dbname);

  }
  function altausuari($nom,$cognom,$email,$contra){

    $sql = "SELECT nom, cognom, email, contra FROM usuari where email='". $email . "'";
    $result = $this->conn->query($sql);
  
    if ($result->num_rows > 0) { //numero elements (en el nostre cas, usuaris) que ha aconseguit treure. 
  
     //ep! ja està a la BBDD: Com a mínim ha trobat un usuari amb aquest email!
      echo "Aquest mail ja està en ús!";
      }
      else {
  
        //fem registre perquè sabem que no hi ha ningú amb aquest email
  
        $sql = "INSERT INTO usuari (nom, cognom, email, contra) VALUES ('$nom', '$cognom','$email','$contra')";
  
  
        if ($this->conn->query($sql) === TRUE) {
          //header ("Location:formulario.php");
          echo "S'HA FET LA CONNEXIÓ";
        } 
        else {
          //header ("Location:error.php");
          echo "NO S'HA FET LA CONNEXIÓ, HO SENTO";
          }
        }
  }
  
  function validalogin($email,$contra){
    session_start();
  
    $sql = "SELECT nom, cognom, email, contra FROM usuari where email='$email' AND contra='$contra'";
    $result = $this->conn->query($sql);
  
    if ($result->num_rows > 0) { //numero elements (en el nostre cas, usuaris) que ha aconseguit treure.
  
      $row = $result->fetch_assoc(); //treure el registre següent 
  
      $_SESSION['nom']=$row['nom'];
  
      return true;
      }
      else {
  
        //fem registre perquè sabem que no hi ha ningú amb aquest email
  
      return false;
      }
  }
}




?>