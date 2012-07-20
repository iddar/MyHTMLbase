<?php
	include_once( "src/view/render.php" );
/**
* URI controlles
*/

	class conf_uri
	{
		protected $conf = array(
			'default_index' => "home",
			'path_level' => 1
		);
	}

	class URI extends conf_uri
	{

		private $var_uri;

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

		function file_ok( $name_file ) {
			$path = 'src/view/';
			$i = new RecursiveDirectoryIterator( $path );
			$Iterator = new RecursiveIteratorIterator( $i );
			$Regex = new RegexIterator( $Iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH );
			foreach ( $Regex as $fileInfo ) {
				$i = explode( "/", $fileInfo[0] );
				$i = explode( ".", $i[2] ); 
				$docs[] = $i[0];
			}
			if ( in_array( $name_file, $docs ) ) return true;
			return false;
		}

		function get_url() {
			$parametros = array();
			$url = parse_url( $_SERVER['REQUEST_URI'] );
			foreach( explode( "/", $url['path']) as $p )
				if ( $p != '' ) $parametros[] = $p;
			if( sizeof( $parametros ) == $this->conf["path_level"] ){
				$parametros[ $this->conf["path_level"] ] = $this->conf["default_index"];
			}
			$this->var_uri = $parametros[ $this->conf["path_level"]+1 ];
			return $parametros[ $this->conf["path_level"] ];
		}

		function get_vars() {
			return $this->var_uri;
		}

	}

	$uri = URI::singleton();
	$view = Render::singleton();
	$temp = $uri->get_url();

	if ( $uri->file_ok( $temp ) ) {
		$view->renderView( $temp, ucwords( $temp ) . " :: Sacitec" );
	} else {

	}

?>
