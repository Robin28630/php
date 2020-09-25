<?php
require('../app/Kernel.php');
ob_start();
try {
	\app\Kernel::router();
}
catch (Exception $e) {
	echo $e->getMessage();
}
$content=ob_get_clean();
require('../view/base.php')
?>
