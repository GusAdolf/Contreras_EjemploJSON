<?php
include "db.inc.php";
// creacion de variables para obtener los valores ingresados en el form
$nombre = $_POST['name'];
$apellido = $_POST['lastname'];
$correo = $_POST['mail'];
echo " <br><br> <a href=' index.html' > <button class='btn btn-dark' onclick=' window.location.href= ' index.html' ' >Formulario</button>  <br><br>";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('$nombre', '$apellido', '$correo')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  

  echo "<h1>Registro exitoso</h1> <br> ";
 
  $conn = null;
?>

  









  