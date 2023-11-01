<?php
include 'index.php';
include 'conexin.php';

$codigo = $_POST['codigo_fac'];
$nombre = $_POST['Nombre_fac'];


$sql = "INSERT INTO facultad(codigo_fac, Nombre_fac) VALUES ('$codigo', '$nombre')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>