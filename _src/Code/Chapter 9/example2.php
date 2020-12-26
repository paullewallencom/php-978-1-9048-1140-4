<?php
include_once('include/Smarty.class.php');
$smarty = new Smarty;
$smarty->caching = 1;

$smarty->display('templates/example2.tpl');
?>