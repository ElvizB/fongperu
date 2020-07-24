<?php
$nombre         = isset($_POST['nombre'])   ?   $_POST['nombre']    : '';
$celular        = isset($_POST['celular'])  ?   $_POST['celular']   : '';
$email          = isset($_POST['email'])    ?   $_POST['email']     : '';

#32b4ff
if( $nombre === '' || $celular=== '' || $email==='' ) {
  echo json_encode('Llena los campos ctm');
}else{
  echo json_encode('Correcto: <br> Sus Datos son: ');
}
/*
$nombre         = isset($_POST['nombre'])   ?   $_POST['nombre']    : '';
$celular        = isset($_POST['celular'])  ?   $_POST['celular']   : '';
$email          = isset($_POST['email'])    ?   $_POST['email']     : '';
$contenido  = '
                <html>
                    <head>
                        <title>Email con HTML</title>
                    </head>
                    <body>
                        <h2 style="margin-bottom: 0;color: #0081c2">Llego la siguiente información :</h2>
                        <hr>
                        <p>Su nombre es : <strong>'.$nombre.'</strong></p>
                        <p>Su celular es : <strong>'.$celular.'</strong></p>
                        <p>Su email es : <strong>'.$email.'</strong></p>
                        <hr>
                    </body>
                </html>';
$contenido .= "Enviado el : " . date('d-m-Y');
//$contenido .= "Enviado el : " . date('d-m-Y (H:i:s)', time());      

$headers    =   'MIME-Version: 1.0' . "\r\n";
$headers   .=  "Content-type: text/html; charset=UTF-8\r\n";

$destinatario   = 'contacto@rmgol.com';
//$asunto         = 'Consultas sobre los programas';

// Enviar correo
$sendMail   =   mail($destinatario, $asunto , $contenido, $headers);

if ($sendMail)
echo json_encode('Llena los campos ctm');
else
echo json_encode('Correcto: <br> Sus Datos son: ');*/