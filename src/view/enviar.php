<?php
require_once("src/class/mail.php");

	/*
	* Esta es una funcion de filtrado para
	* escapar los simbolos peligrosos en un ataque de inyeccion
	*/
	function filtrar ($input) {
	 $malo = array("Ã¡","Ã©","Ã­","Ã³","Ãº",
	  "Ã±","<",">","\"","\'","'");

	 $bueno = array("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&ntilde;","&lt;","&gt;","&quot;","&apos;","&apos;");

	 $wawa = str_replace($malo,$bueno,$input);
	 return $wawa;
	}

	$my_mail = new sendMail;

	if( isset($_POST) ){
		$nombre = filtrar($_POST["nombre"]);
		$empresa = filtrar($_POST["empresa"]);
		$telefono = filtrar($_POST["telefono"]);
		$email = filtrar($_POST["email"]);
		$msj = filtrar($_POST["mensaje"]);
	}

	$my_mail->set_values($nombre,$empresa,$telefono,$email,$msj);

	try {
		$my_mail->send_mail();
		echo "<b>Gracias!.</b><br />Su mensaje se a enviado correctamente.";
	} catch (Exception $e) {
		echo 'Excepción capturada: ',  $e->getMessage(), "\n";
	}

?>