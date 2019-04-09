<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

<meta name="description" content=" " />

<title>LIMA | Gracias</title>
<link href="styles.css" rel="stylesheet" type="text/css">




<?php


if (strlen($_POST['nombre']) > 3){

	$message = "Nombre: ".$_POST['nombre']."\r\n";
	$message .= "Empresa: ".$_POST['empresa']."\r\n";
	$message .= "Email: ".$_POST['correo']."\r\n";
	$message .= "Telefono: ".$_POST['telefono']."\r\n"; 
	$message .= "Comentarios: ".$_POST['comentarios']."\r\n";
	
	





	mail('l_d-n-a-@hotmail.com','Solicitud de Informacion WEB LIMA', $message, "From: \"Solicitud de Informacion WEB LIMA\" <l_d-n-a-@hotmail.com> \r\nMIME-Version: 1.0\r\nContent-Type: text/plain; charset=utf-8\r\nContent-Transfer-Encoding: quoted-printable\r\nContent-Disposition: inline\r\nReply-To: l_d-n-a-@hotmail.com\r\nCc: l_d-n-a-@hotmail.com");
	
	mail($_POST['l_d-n-a-@hotmail.com'], "Solicitud de Informacion WEB LIMA", "\r\nGracias por contactarnos. En breve nos comunicaremos\r\n\r\n".$message."\r\n\r\n\r\nWEB LIMA", "From: \"WEB LIMA\" <l_d-n-a-@hotmail.com> \r\nMIME-Version: 1.0\r\nContent-Type: text/plain; charset=utf-8\r\nContent-Transfer-Encoding: quoted-printable\r\nContent-Disposition: inline\r\n\r\n");
	



}	



?>



</head>





<body>

<!-- COMIENZA DIV PRINCIPAL -->
<div style="width: 1000px; height:1100px; margin:0 auto 0 auto; margin-top:0px; position:relative"><!-- BUTS --><!-- politica --><!-- MENUo --><!-- GAlleria -->
<!-- footer -->
<div style="left: 350px; top:221px; width: 325px; position: absolute; color:#000000; text-align:center; font-size:15px; height: 113px;"> <strong>Gracias por escribirnos, en breve nos comunicaremos con usted</strong><br><br>
  <br><br>
</div>

<div style="left: 442px; top:388px; width: 145px; position: absolute; color:#000000; text-align:center; font-size:15px; height: 43px;"> <a href="index.PHP"><strong><span style="color:#000">Regresar</span></strong></a><br>
</div>

<!-- FOTOS-->
</div>

<!--CARTE -->
<!-- plus gros -->
<!-- Carros abajo -->
<!-- TERMINA DIV PRINCIPAL -->
</div>







</body>
</html>