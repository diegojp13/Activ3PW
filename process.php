<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empleados";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$formData = $_POST["formData"];
$first = $_POST["formData"][0];
$second = $_POST["formData"][1];
$third = $_POST["formData"][2];
$errors = 0;
foreach($formData as $form) {
  $name = $form['name'];
  $lastname = $form['lastname'];
  $salary = $form['salary'];
  $workplace = $form['workplace'];
  $department = $form['department'];
  $cedula = $form['cedulaFull'];
  $sql =  "INSERT INTO empleados (nombre, apellido, sueldo, workplace, department, cedula)
  VALUES ('$name', '$lastname', '$salary', '$workplace', '$department', '$cedula')";

  $conn->query($sql);
}
if ($errors === 0) {
  echo "¡Empleados registrados exitosamente! ";
} else {
  echo "Errors";
}
?>