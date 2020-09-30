<?php
namespace app;

class Kernel {
	static private $url="";

	public function getUrl() {
		return self::$url;
	}

	public function setUrl($url) {
		self::$url=$url;
		return $this;
	}

	static function autoload($class){
			if ( substr($class,0,4) == "app\\" ) {
				$directory=str_replace(__NAMESPACE__.'\\','',$class);
				$tabStr=explode("\\",$class);
				$classStr=end($tabStr);
				$directory=strtolower(str_replace($classStr,'',$directory));
				if ( file_exists(__DIR__."\\".$directory.$classStr.".php") )
					require (__DIR__."\\".$directory.$classStr.".php");
				else throw new \Exception('Impossible de charger la classe:'.$class);
			}

		}


static public function router(){
		$controllerParam="home";
		$actionParam="default";
		$idParam=0;
		if ( isset( $_GET['controller'] ) )
		{
			$controllerParam=strtolower($_GET['controller']);
			if ( isset( $_GET['action'] ) ) {
				$actionParam=strtolower($_GET['action']);
				if ( isset( $_GET['id'] ) ) $idParam=intval($_GET['id']);
			}
		}
		$url=$controllerParam."/".$actionParam;
		spl_autoload_register(__CLASS__."::autoload");
		ob_start();

	switch ( $url ) {

			case "home/default":
				$controllerCall = new Controllers\Home();
				$controllerCall->defaultAction();
				break;

      case "signin/default":
      $controllerCall = new Controllers\SignIN();
      $controllerCall->FormUser();

			break;

			case "signin/send":
      $controllerCall = new Controllers\SignIN();
      $controllerCall->AuthUser();
			break;
		}
	}
	static function viewer($view,$variables=array()){
				extract($variables);
				// foreach ( $variables as $key=>$element) {
					// ${$key}=$element;
				// }
				// var_dump($games);
				if ( file_exists(__DIR__."\\view\\".strtolower($view)) ) {
					require __DIR__."\\view\\".strtolower($view);
				} else throw new \Exception
				("Désolé, La vue $view n'existe pas");
		}
}
