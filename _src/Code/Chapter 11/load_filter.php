<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->load_filter('output','append_benchmark_data');
$smarty->display('/example1.tpl');
?>