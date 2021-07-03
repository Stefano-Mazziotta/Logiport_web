<?php 
$mensaje = "Te han enviado un comentario:

\n";
$mensaje .= "Nombre y Apellido: ". $_POST['nombre'];
$mensaje .= " 

Email: ". $_POST['email'];
$mensaje .= " 

Mensaje: ". $_POST['mensaje'];

mail('oprlogiport@gmail.com', 'Pregunta pagina web', $mensaje); 

if(mail('oprlogiport@gmail.com', 'Pregunta pagina web', $mensaje)){
echo "Mensaje enviado correctamente";
}else{
echo "Ocurrió un error";
} ?>