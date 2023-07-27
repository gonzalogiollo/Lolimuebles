<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $data = json_decode(file_get_contents('php://input'), true);

  // Configura los datos del correo
  $to = "gonzalogiollo@gmail.com"; // Coloca tu dirección de correo aquí
  $subject = "Nuevo mensaje de Loli Muebles Infantiles";
  $message = "Correo o teléfono: " . $data['email'];
  $headers = "From: Loli Muebles Infantiles <no-reply@example.com>";

  // Envía el correo
  $success = mail($to, $subject, $message, $headers);

  // Devuelve una respuesta JSON al cliente
  header("Content-Type: application/json");
  echo json_encode(array('success' => $success));
}
?>