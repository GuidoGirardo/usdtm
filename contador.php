<?php

// Verifica si se ha recibido una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $json = file_get_contents("php://input"); // obtenemos el contenido json
    $data = json_decode($json, true); // lo decodificamos

    if ($data === null) {
        http_response_code(400);
        echo json_encode(['error' => 'Error en el formato JSON']);
    } else {
        $title = $data['title'];
        $content = $data['content'];
        $nombre = $data['nombre'];

        // hacer algo con los datos XD
        $con = new mysqli("localhost", "root", "", "usdtmining");

        if ($con->connect_error) die("Error de conexión: " . $con->connect_error);

        $sql = "SELECT contador FROM participantes WHERE usuario = '$nombre'";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
        $contador = $row["contador"];
        $contador++;

        $sql = "UPDATE participantes SET contador = '$contador'";
        $result = $con->query($sql);

        $con->close();
        
        echo $row["contador"]; // devolver respuesta
    }
} else {
    http_response_code(405); // Método no permitido
    echo json_encode(['error' => 'Método no permitido']);
}
?>