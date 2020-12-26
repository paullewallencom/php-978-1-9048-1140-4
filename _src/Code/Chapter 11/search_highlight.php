<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;

$smarty->load_filter('output', 'search_highlight');
$smarty->display('search_highlight.tpl');
?>
