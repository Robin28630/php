<?php
namespace App\Controllers;

class  SignIN {

  static public function FormUser () {
  \app\Kernel::viewer("form.php");

	}

  static public function AuthUser () {
  \Models\user::AuthBdd();

	}

}
