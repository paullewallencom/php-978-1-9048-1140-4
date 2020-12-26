<?php
include_once('include/Smarty.class.php');
include_once('db_cache_handler.php');
$smarty = new Smarty;
$smarty->template_dir = 'templates/';
$smarty->caching = 1;
$smarty->compile_check = false;
$smarty->cache_handler_func = 'db_cache_handler';

if (!$smarty->is_cached('cache_handler.tpl')) {
    $smarty->assign('name', 'Joao Prado Maia');
}

$smarty->display('cache_handler.tpl');
?>