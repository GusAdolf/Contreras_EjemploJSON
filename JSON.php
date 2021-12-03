<?php


include "db.inc.php";
echo " <h1>Datos en JSON Y PASADOS A UNA TABLA </h1> <br><br>";
$vincular = mysqli_connect ($servername, $username, $password, $dbname) 
or die("Vinculacion con la base de datos fallida");
//Consulta a la tabla de la base de datos donde se registro del form
$sql = "SELECT * FROM MyGuests";
$result = $vincular->query ($sql);



echo "<table>";
echo "<tr>";
echo "<th> Identificador </th>";
echo "<th> Nombre </th>";
echo "<th> Apellido </th>";
echo "<th> Email </th>";
echo "</tr>" ;

// Creacion del bucle para mostrar los datos 
 
while ($row= $result->fetch_array(MYSQLI_ASSOC)){
//se muestra los valores de la tabla en JSON con json_encode
    print_r(json_encode($row));
    echo "<tr> <td>" . $row["id"] ."</td> <td>" . $row["firstname"]. "</td> <td>"
    . $row["lastname"] . "</td> <td>" .  $row["email"] . "</td> </tr><br><br>";

}

echo " </table> ";
echo " <br><br> <a href=' index.html' > <button class='btn btn-dark' onclick=' window.location.href= ' index.html' ' >Formulario</button>  <br><br>";
$result->free ();


?>