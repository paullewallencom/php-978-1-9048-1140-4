<?php
include_once('include/Smarty.class.php');
$smarty = new Smarty;
$smarty->caching = 1;
$smarty->compile_check = true;

$smarty->display('templates/example4.tpl');
?>