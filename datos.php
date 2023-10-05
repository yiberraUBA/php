<?php

$form = $_POST;

if ($form['nombre'] == "Juan"){
    
    $response = new stdClass;
    $response->nombre = "Juan";
    $response->apellido = "Perez";

    $response2 = ['nombre' => 'Juan', 'apellido' => 'Perez'];
    
    $response3 = '{
        "nombre": "Juan",
        "apellido": "Perez",
        "edad": 25,
        "direccion": {
            "calle": "Av. Libertador",
            "numero": 123
        },
        "intereses": {
            "programacion": [
                "html",
                "css",
                "js",
                "php"
            ],
            "musica": [
                "pop",
                "rock"
            ],
            "viajes": [
                "Europa"
            ]
        }
    }';


    http_response_code(200);
    header('Content-type: application/json');
    // echo json_encode($response);
    // echo json_encode($response2);
    echo $response3;

} else {
    http_response_code(401);
    header('Content-type: application/json');
    echo '{ "mensaje": "Acceso denegado" }';
}

// Request ($_REQUEST);
// $request = new Request();
// $file = $request->file('archivo');

// // Response (la respuesta - header - response code - body)
// $response = new Response();
// $response->setContent('HTML');
// $response->send();

