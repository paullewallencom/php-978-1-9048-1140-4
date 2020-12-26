<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;

// in real life you would do filesize('budget.pdf') here
$smarty->assign('filesize', 123456);

$smarty->display('example_fsize_format.tpl');
?>
