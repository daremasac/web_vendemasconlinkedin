<?php

if ($_POST) {

    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
        $arrResponse = array('status' => false, 'msg' => 'No se ha enviado el mensaje');
    } else {
        $nombre = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $asunto = htmlspecialchars($_POST['subject']);
        $mensaje = htmlspecialchars($_POST['message']);
        
        // Condición
        switch ($asunto) {
            case "1":
                $curso = "Marca Personal para Negocios";
                $descripcion = "El curso Marca Personal para Negocios enseña a profesionales y emprendedores cómo desarrollar y promover su marca personal para destacar en el mercado, atrayendo clientes y oportunidades de negocio a través de estrategias de comunicación y presencia digital.";
                break;
                
            case "2":
                $curso = "Cómo vender en LinkedIn";
                $descripcion = "El curso “Como vender en LinkedIn” se enfocara en proporcionar a los participantes las habilidades y estrategias necesarias para utilizar efectivamente la plataforma profesional LinkedIn como una herramienta para generar prospectos, establecer relaciones comerciales y cerrar ventas.";
                break;
                
            case "3":
                $curso = "Marca Personal y Empleabilidad";
                $descripcion = "El curso Marca Personal y Empleabilidad enseña a desarrollar una marca personal efectiva para mejorar tus oportunidades de empleo y avanzar en tu carrera profesional. Aprenderás a destacar tus habilidades, mejorar tu presencia en línea y fortalecer tu red de contactos para alcanzar el éxito laboral.";
                break;
            
            default:
                $curso = "Título no encontrado";
                $descripcion = "";
                break;
        }
        
        $link = urlencode("Estoy interesado en el curso de " . $curso);
        
        // Datos para el correo
        $destinatario = $email;

        // Encabezados del correo
        $header = "From: ventas@vendemasconlinkedin.com.pe\r\n";
        $header .= "Reply-To: " . $email . "\r\n";
        $header .= "Cc: ventas@vendemasconlinkedin.com.pe\r\n";
        $header .= "Content-Type: text/html; charset=UTF-8\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();

        // Cuerpo del mensaje en HTML
        $mensajeHTML = "
        <html>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <style>
                body { font-family: Arial, sans-serif; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; }
                .header { background-color: #f4f4f4; padding: 10px; text-align: center; }
                .content { padding: 20px; }
                .footer { text-align: center; padding: 10px; background-color: #f4f4f4; }
                .whatsapp-button { display: inline-block; padding: 10px 20px; color: white; background-color: #25D366; text-decoration: none; border-radius: 5px; }
                .whatsapp-button img { vertical-align: middle; margin-right: 8px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>Vende más con LinkedIn</h2>
                </div>
                <div class='content'>
                    <p>Estimado $nombre,</p>
                    <p>Me alegro mucho que estés interesado en tomar el curso de $curso:</p>
                    <p>$descripcion</p>
                    <p>Saludos,<br>Martin Cerro<br>CEO de Vende más con LinkedIn</p>
                    <div class='button-container'>
                        <a href='https://wa.me/51934994471?text=$link' class='whatsapp-button'>
                            Más información
                        </a>
                    </div>
                </div>
                <div class='footer'>
                    <p>&copy; " . date('Y') . " Vende más con LinkedIn</p>
                </div>
            </div>
        </body>
        </html>";

        // Enviar mensaje
        $mail = @mail($destinatario, $curso, $mensajeHTML, $header);

        if ($mail) {
            $arrResponse = array('status' => true, 'msg' => 'Se envió correctamente el mensaje');
        } else {
            $arrResponse = array('status' => false, 'msg' => 'No se ha enviado el mensaje');
        }
    }

    echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);

} else {
    $arrResponse = array('status' => false, 'msg' => 'No se ha enviado el mensaje');
    echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
}
die();
?>
