<?php
    $destinatario = 'franco_cosci@hotmail.com';
    $tecnotox = $_POST['user'];
    $email = $_POST['email'];
    $message = $_POST['menssage'];

    $header = "\n";
    $mensajeCompleto =  $message . "\n\nNombre: " . $tecnotox  . "\n" . "Correo: " . $email ;

    mail($destinatario,'Mensaje enviado desde la pagina TecnoteX: ',$mensajeCompleto,$header);
    echo "<script>alert('Correo  Enviado Exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>