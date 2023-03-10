<!DOCTYPE html>
<html>
<body>
<?php
$nombre=$_GET["nombre"];
$puntuacion=$_GET["puntuacion"];
$tabla=$_GET["tabla"];
$rangoInical=$_GET["Rangoinicial"];
$rangoFinal=$_GET["RangoFinal"];
$correo=$_GET["Correo"];

require_once('config.php');


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO `usuario`( nombre, puntuacion, tabla, rangoInicial, rangoFinal, correo) VALUES ('".$nombre."','".$puntuacion."','".$tabla."','".$rangoInical."','".$rangoFinal."','".$correo."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  $conn->close();
  header("location:FormBD.html");
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
</body>
</html>