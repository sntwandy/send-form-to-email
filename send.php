<?php
    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $header = 'From: ' .$email "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $message = "Este mensaje fue enviado por " . $name . "\r\n";
    $message .= "Su email es: " . $email . "\r\n";

    $para = "20161444@miucateci.edu.do";
    $asunto = "Prueba de correo";

    mail($para, $asunto, utf8_decode($message), $header);

    echo 'Mensaje enviado correctamente';
?>