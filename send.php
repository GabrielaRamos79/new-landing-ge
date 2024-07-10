<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Aquí puedes agregar el código para enviar el correo electrónico o guardar los datos en una base de datos.
    // Por ahora, solo mostraremos los datos recibidos.

    echo "<h1>Gracias por contactarnos, $name!</h1>";
    echo "<p>Hemos recibido tu mensaje:</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Mensaje:</strong> $message</p>";
}
?>