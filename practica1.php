<--! Ejercicio 1
- Escribir un script en PHP para poder enviar un correo electrónico, 
con formato HTML, a través del servidor.
-->
<?php $destinatario = "xx@gmail.com ";
$asunto = "Ejercicio 1";
$cuerpo = '
<html>
<head>
 <title>Envio de mail</title>
</head>
<body>
<h1>Ejercicio 1</h1>
<p>
<b>Esto es una prueba</b>.
prueba de correo
</p>
</body>
</html>
';
// Para enviar un correo HTML
//debe establecerse la cabecera 
Content-type $headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859- 1\r\n";
//dirección del remitente concatenada con otras direcciones
$headers .= "From: NN
<nn@gmail.com>\r\n";
//dirección de respuesta distinta que la del remitente
$headers .= "Reply-To:
ss@gmail.com\r\n";
mail($destinatario,$asunto,$cue
rpo,$headers)
?>