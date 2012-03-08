<?php
define( 'BASEPATH', 'lib/' );
require_once BASEPATH.'config.php';
require_once BASEPATH.'constants.php';

$prepType = MAINFILE.EXT;
if ( $_POST['sType'] === 'ajaxReturn' ) {
	$prepType = 'logic/ajaxReturn'.EXT ;
} elseif ( $_POST['sType'] === 'ajaxSubmit' ) {
	$prepType = 'logic/ajaxSubmit'.EXT ;
}
require_once BASEPATH.'build'.EXT;