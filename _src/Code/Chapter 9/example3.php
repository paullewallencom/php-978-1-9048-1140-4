<?php
include_once('include/Smarty.class.php');
$smarty = new Smarty;

// set the lifetime per cached file
$smarty->caching = 2;

// set the lifetime for 2 hours
$smarty->cache_lifetime = 7200;
$smarty->display('templates/example3.tpl');

// set the lifetime for 1 day
$smarty->cache_lifetime = 24 * 60 * 60;
$smarty->display('templates/daily_favorites.tpl');
?>