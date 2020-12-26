<?php
include_once('include/Benchmark/Timer.php');
$bench = new Benchmark_Timer;
$bench->start();

include_once('include/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = 'templates/';
$smarty->caching = 0;
$bench->setMarker(__LINE__);

// fully clear the Smarty cache
$smarty->assign('name', 'Joao Prado Maia');

$smarty->display('cache_handler.tpl');

$bench->stop();
var_dump($bench->getProfiling());
?>