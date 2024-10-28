<?php
    $servername = "127.0.0.1";
    $username = "prueba";
    $password  = "1234";
    $dbname = "prueba";

    /* Crear una conexión con la base de datos */
    $conn = new mysqli($servername, $username, $password, $dbname);

    /* Comprobar la conexión */
    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    /* Comprobar si se ha enviado el formulario */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $sql = "INSERT INTO personas (nombre, edad) VALUES ('$nombre', $edad)";

        if ($conn->query($sql) === TRUE) {
            echo "Datos insertados correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>