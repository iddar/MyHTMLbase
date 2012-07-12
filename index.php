<?php

include("src/view/render.php");

function get_url() {
  $parametros = array();
  $url = parse_url($_SERVER['REQUEST_URI']);
  foreach(explode("/", $url['path']) as $p)
    if ($p!='') $parametros[] = $p;
  return $parametros;
}

$uri = get_url();

if(!sizeof($uri)){
	render("index.php","SACITEC - Networking for all");
}
else if($uri[0] == "contacto"){
	render("contacto.php","Contacto :: SACITEC");
}
else if($uri[0] == "servicios"){
	render("servicios.php","Servicios :: SACITEC");
}
else if($uri[0] == "empresa"){
	render("empresa.php","Empresa :: SACITEC");
}else{
	echo "<pre>";
	var_dump($uri);
	echo "</pre>";
}





?>