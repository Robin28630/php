<?php
namespace App\Controllers;

class  SignIN {

  static public function FormUser () {
  \app\Kernel::viewer("form.php");
  echo "bonjour test";
	}

  static public function AuthUser () {
  app\Models\user::AuthBdd();

	}

}
