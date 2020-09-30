<?php
namespace app\Controllers;

class Home {

	static public function defaultAction () {
		\app\Kernel::viewer("accueil.php");
	}

}
