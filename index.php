<?php
require('../MVC/app/Kernel.php');
ob_start();
try {
	\app\Kernel::router();
}
catch (Exception $e) {
	echo $e->getMessage();
}
$content=ob_get_clean();
require('../MVC/app/view/base.php')
?>
