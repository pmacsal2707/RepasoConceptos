<?php
// Siempre indicamos que la respuesta será JSON
header('Content-Type: application/json');

// Seguridad: Verifica token
$headers = getallheaders();
$validToken = '12345abcde'; // Token

if (!isset($headers['Authorization']) || $headers['Authorization'] !== 'Bearer ' . $validToken) {
    http_response_code(401);
    echo json_encode(["error" => "No autorizado. Token inválido o no enviado."]);
    exit;
}

// Detecta método HTTP
$requestMethod = $_SERVER["REQUEST_METHOD"];

switch ($requestMethod) {
    case 'GET':
        // Mensaje de bienvenida
        echo json_encode(["message" => "Bienvenido a mi API"]);
        break;

    case 'POST':
        // Leemos JSON del cuerpo
        $data = json_decode(file_get_contents('php://input'), true);

        // Validación de campos
        if (!isset($data['nombre']) || !isset($data['email'])) {
            http_response_code(422); // Unprocessable Entity
            echo json_encode(["error" => "Faltan campos obligatorios: nombre y/o email"]);
            exit;
        }

        // Validación de email
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            http_response_code(400); // Bad Request
            echo json_encode(["error" => "Email no válido"]);
            exit;
        }

        // Si todo correcto
        echo json_encode([
            "message" => "Datos recibidos correctamente",
            "datos" => [
                "nombre" => $data['nombre'],
                "email" => $data['email']
            ]
        ]);
        break;

    default:
        http_response_code(405); // Method Not Allowed
        echo json_encode(["error" => "Método no permitido"]);
        break;
}
