<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;

$departments = array(
    'marketing' => 'Marketing Department',
    'sales'     => 'Sales Department',
    'support'   => 'Customer Service Department'
);
$smarty->assign('departments', $departments);

$smarty->display('index.tpl');
?>
