<?php
namespace App\Controllers;

class  SignIN {

  static public function AuthUser () {
  \Models\user::AuthBdd();

	}

}
