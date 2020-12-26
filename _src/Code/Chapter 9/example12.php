<?php
include_once('include/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = 'templates/';
$smarty->caching = 1;
$smarty->use_sub_dirs = TRUE;

if (!$smarty->is_cached('example12.tpl')) {
    $smarty->assign('name', 'Joao Prado Maia');
}

$smarty->display('example12.tpl');
?>