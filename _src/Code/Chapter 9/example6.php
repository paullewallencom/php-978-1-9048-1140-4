<?php
include_once('include/Smarty.class.php');
$smarty = new Smarty;
$smarty->caching = 1;

// remove the cache for this particular template
$smarty->clear_cache('templates/example6.tpl');

$smarty->display('templates/example6.tpl');
?>