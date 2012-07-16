<?php

class conf_render{

	 protected $conf = array(
		'default_path' => "src/view/"
	);
}

class Render extends conf_render
{
	/*
	*	@name render
	*	@argummets $content Nombre del contenedor
	*/

	private $title;

	function renderView($content, $title){			
		$this->title = $title;
		include( $this->conf["default_path"] . $content.".php");
	}
	
	function is_pjax(){
		if(!isset($_GET['_pjax'])) return true;
		return false;
	}
	
	function include_tpl($tpl_file){
		if( $this->is_pjax() ) include($tpl_file);
		else include_once("minhead.php");
	}
	
}
?>
