<?php

if ($_REQUEST['endpoint'] == 'saludo'){

    header('Content-type: application/json');
    echo json_encode(array('message' => 'Ingrese a saludo'));
    exit();

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = $_POST;

    // Conexión a la base de datos
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'microApi';
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Verificar la conexión
    if (!$conn) {
        header('HTTP/1.1 500 Internal Server Error');
        echo json_encode(array('message' => 'Error al conectar con la base de datos'));
        exit();
    }

    // Insertar los datos en la tabla datos
    $query = "INSERT INTO datos (nombre, email) VALUES ('".$data["nombre"]."', '".$data["email"]."')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        header('HTTP/1.1 500 Internal Server Error');
        echo json_encode(array('message' => 'Error al consultar'));
        exit();
    }

    header('Content-type: application/json');
    echo json_encode(array('message' => 'Datos recibidos y guardados', 'data' => $data));
    exit();
}

header('Content-type: application/json');
echo json_encode(array('message' => 'Bienvenido a mi micro-API'));
