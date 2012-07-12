<?php
	/*
		@name render
		@argummets $content Nombre del contenedor
	*/
	function render($content, $title){
		include("src/view/" . $content);
	}

?>