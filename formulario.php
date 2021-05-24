<?php
$nombre = $_POST['user_name'];
$mail = $_POST['user_mail'];
$mensaje = $_POST['user_message'];
$destinatario = "bnazareno03@gmail.com"; 
ini_set('sendmail_from','correo@queenvia.com');

if(@mail($destinatario, $mail, $nombre, $mensaje, "correo@queenvia.com")){
    echo "Mail enviado";
}else{
    echo "Ha ocurrido un error";
}
?>




