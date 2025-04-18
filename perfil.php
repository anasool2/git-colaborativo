<?php
// Recibe JSON del frontend
$data = json_decode(file_get_contents("php://input"), true);

if ($data["usuario"] && $data["clave"]) {
    // Simulación de validación
    echo "OK";
} else {
    echo "Error: Datos incompletos";
}
?>
