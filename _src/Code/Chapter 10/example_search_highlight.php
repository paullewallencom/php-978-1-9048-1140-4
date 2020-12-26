<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;
$departments = array(
    'Marketing Department',
    'Sales Department',
    'Customer Service Department'
);
$smarty->assign('departments', $departments);
$smarty->load_filter('output', search_highlight');
$smarty->display('example_search_highlight.tpl');
?>