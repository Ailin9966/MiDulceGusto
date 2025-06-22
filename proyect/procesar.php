<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = htmlspecialchars($_POST['nombre']);
  $correo = htmlspecialchars($_POST['correo']);
  $fecha = htmlspecialchars($_POST['fecha']);
  $pedido = htmlspecialchars($_POST['pedido']);

  $destinatario = "maymaybellest@gmail.com";
  $asunto = "Nuevo pedido de $nombre";

  $contenido = "Nombre: $nombre\n";
  $contenido .= "Correo: $correo\n";
  $contenido .= "Fecha del pedido: $fecha\n\n";
  $contenido .= "Pedido:\n$pedido";

  $cabeceras = "From: $correo";

  if (mail($destinatario, $asunto, $contenido, $cabeceras)) {
    echo "<h2 style='color: green; text-align: center;'>¡Pedido enviado con éxito!</h2>";
  } else {
    echo "<h2 style='color: red; text-align: center;'>Error al enviar el pedido.</h2>";
  }
}
?>
