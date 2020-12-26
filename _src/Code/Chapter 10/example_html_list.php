<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;
$departments = array(
    'Marketing Department',
    'Sales Department',
    'Customer Service Department'
);
$smarty->assign('departments', $departments);
$smarty->display('example_html_list.tpl');
?>