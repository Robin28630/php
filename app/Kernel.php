<?php
namespace app;

class Kernel {


static public function router(){
		$controllerParam="home";
		$actionParam="default";
		$idParam=0;
    $url;
		if ( isset( $_GET['controller'] ) )
		{
			$controllerParam=strtolower($_GET['controller']);
			if ( isset( $_GET['action'] ) ) {
				$actionParam=strtolower($_GET['action']);
				if ( isset( $_GET['id'] ) ) $idParam=intval($_GET['id']);
			}
		}
		self::$url=$controllerParam."/".$actionParam;

		switch ( self::$url ) {

			case "home/default":
				$controllerCall = new Controllers\Home();
				$controllerCall->defaultAction();
				break;

      case "home/SignIn":
      $controllerCall = new Controllers\Home();
      $controllerCall->defaultAction();


		}
	}
}
