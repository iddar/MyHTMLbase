<?php
	include("src/view/render.php");
/**
* URI controlles
*/

class conf_uri{

	 protected $conf = array(
		'default_index' => "home",
		'path_level' => 1
	);
}

class URI extends conf_uri
{

	function file_ok($name_file){
		$path = 'src/view/';
		$i = new RecursiveDirectoryIterator($path);
		$Iterator = new RecursiveIteratorIterator($i);
		$Regex = new RegexIterator($Iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);
		foreach($Regex as $fileInfo) {
			$i = explode("/", $fileInfo[0]);
			$i = explode(".", $i[2]);
			$docs[] = $i[0];
		}
		//$this->algo;
		//print_r($docs);

		if(in_array($name_file, $docs)) return true;
		return false;
	}

	function get_url() {
		$parametros = array();
		$url = parse_url($_SERVER['REQUEST_URI']);
		foreach(explode("/", $url['path']) as $p)
			if ($p!='') $parametros[] = $p;
		if(sizeof($parametros)==$this->conf["path_level"]){
			$parametros[$this->conf["path_level"]]=$this->conf["default_index"];
		}
		//echo $conf["default_index"];
		return $parametros[$this->conf["path_level"]];
	}
}
	$uri = new URI;
	$view = new Render;
	$temp = $uri->get_url();

	//print_r($temp);

	if($uri->file_ok($temp)){
		$view->renderView($temp, ucwords($temp)." :: Sacitec");
	}else{

	}

?>
