<?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $header = 'From: ' .$email;
    $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
    $mensaje .= "Su email es: " . $email . "\r\n";

    $para = 'sntwandy@gmail.com';
    $asunto = 'Prueba de correo';

    mail($para, $asunto, utf8_decode($mensaje), $header);

    echo 'Mensaje enviado correctamente';
?>