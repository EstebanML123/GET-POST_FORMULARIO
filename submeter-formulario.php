<?php
    $nombre = $_POST ["introducir_nombre"];
    $email = $_POST ["introducir_email"];
    $telefono = $_POST ["introducir_telefono"];
    $website = $_POST ["introducir_website"];
    $asunto = $_POST ["introducir_asunto"];
    $mensaje = $_POST ["introducir_mensaje"];
    echo $nombre. "/" . $email. "/" . $telefono. "/" . $website. "/" . $asunto. "/" . $mensaje;

?>