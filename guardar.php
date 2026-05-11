<?php
include("conexion.php");

if (isset($_POST['btn_guardar'])) {
    // Recibir datos y limpiar para evitar errores
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
    $tel_res = mysqli_real_escape_string($conexion, $_POST['telefono_residencial']);
    $celular = mysqli_real_escape_string($conexion, $_POST['celular']);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);

    // Consulta SQL para insertar
    $consulta = "INSERT INTO proveedores (nombre, direccion, telefono_residencial, celular, email) 
                 VALUES ('$nombre', '$direccion', '$tel_res', '$celular', '$email')";

    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "<script>alert('¡Datos guardados con éxito!'); window.location='index.php';</script>";
    } else {
        echo "Error al guardar: " . mysqli_error($conexion);
    }
}
?>