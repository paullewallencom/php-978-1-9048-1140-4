<?
include("libs/smarty.class.PHP");
$smarty = new smarty();
$smarty->assign("somevalue","bangladesh is a small country in south asia");
$smarty->display("capitalize.tpl");
?>
