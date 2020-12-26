<?php
include_once('include/Smarty.class.php');
$smarty = new Smarty;
$smarty->caching = 1;

// fully clear the Smarty cache
$smarty->clear_all_cache();

$smarty->display('templates/example7.tpl');
?>