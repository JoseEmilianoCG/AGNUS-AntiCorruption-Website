<?php

//Llamado al input del formulario
$lugar = $_POST["lugar"];
$fecha = $_POST["fecha"];
$nombre = $_POST["nombre"];
$sexo = $_POST["sexo"];
$edad = $_POST["edad"];
$ocupacion = $_POST["ocupacion"];
$escuela = $_POST["escuela"];
$nomb_den = $_POST["nomb_den"];
$ocup_den = $_POST["ocup_den"];
$descripcion = $_POST["descripcion"];
$correo = $_POST["correo"];
//EVIDENCIA $nombre = $_POST["nombre"];

//Conexion a DB
$conn = new mysqli('localhost', 'root', '', 'testagnus');

// INSERT en la BD de MySQL
if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into registration(lugar, fecha, nombre, sexo, edad, ocupacion, escuela, nomb_den, ocup_den, descripcion, correo) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssissssss", $lugar,$fecha,$nombre,$sexo,$edad,$ocupacion,$escuela,$nomb_den,$ocup_den,$descripcion,$correo);
  $stmt->execute();
  echo "Registration Successfully...";
  $stmt->close();
  $conn->close();
}
?>
