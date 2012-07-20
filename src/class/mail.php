<?php

class sendMail {

	private $nombre_user = "Juan perez";
	private $empresa_user = "Esto y el otro";
	private $telfono_user = "123546";
	private $email_user = "algo@esto.com";
	private $mensaje_user = "Esto es solo un mensaje para precticar el en vio de mensajes desde PHP";
	private $email_to = "iddar.olivares.servicios@gmail.com";
	private $headers;
	private $message;
	//creamos un identificador único
	//para indicar que las partes son idénticas
	private static $instance;
	private function __construct() { }

	public static function singleton() {
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }
        return self::$instance;
    }

	public function __clone() {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }

	function gen_msg() {
		$uniqueid= uniqid('np');

		//indicamos las cabeceras del correo
		$this->headers = "MIME-Version: 1.0\r\n";
		$this->headers .= "From: portal-web@sacitec.com \r\n";
		$this->headers .= "Reply-To: ".$this->email_user." \r\n";
		$this->headers .= "Subject: ".$this->empresa_user." [Mensaje desde el formilario de contacto.]\r\n";

		//lo importante es indicarle que el Content-Type
		//es multipart/alternative para indicarle que existirá
		//un contenido alternativo
		$this->headers .= "Content-Type: multipart/alternative;boundary=" . $uniqueid. "\r\n";

		$this->message = "";

		$this->message .= "\r\n\r\n--" . $uniqueid. "\r\n";
			$this->message .= "Content-type: text/plain;charset=utf-8\r\n\r\n";
			$this->message .= "Nombre: ".$this->nombre_user."\n";
			$this->message .= "Empresa: ".$this->empresa_user."\n";
			$this->message .= "Telefono: ".$this->telfono_user."\n";
			$this->message .= "E-mail: ".$this->email_user."\n\n";
			$this->message .= "Mensaje: ".$this->mensaje_user."";
		$this->message .= "\r\n\r\n--" . $uniqueid. "\r\n";
			$this->message .= "Content-type: text/html;charset=utf-8\r\n\r\n";
			$this->message .= "<p><b>Nombre: </b>".$this->nombre_user."</p>";
			$this->message .= "<p><b>Empresa: </b>".$this->empresa_user."</p>";
			$this->message .= "<p><b>Telefono: </b>".$this->telfono_user."</p>";
			$this->message .= "<p><b>E-mail: </b>".$this->email_user."</p>";
			$this->message .= "<p><b>Mensaje: </b></p>";
			$this->message .= "<div>".$this->mensaje_user."</div>";	 
		$this->message .= "\r\n\r\n--" . $uniqueid. "--";
	}

	function set_values( $nombre, $empresa, $telefono, $email, $msj ) {
		$this->nombre_user = $nombre;
		$this->empresa_user = $empresa;
		$this->telfono_user = $telefono;
		$this->email_user = $email;
		$this->mensaje_user = $msj;
	}
	//con la función mail de PHP enviamos el mail.
	function send_mail() {
		$this->gen_msg();
		mail(
			$this->email_to,
			$this->empresa_user . " [Mensaje desde el formilario de contacto.]",
			$this->message, $this->headers
		);
	}
}
?>