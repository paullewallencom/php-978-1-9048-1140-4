<?
include("libs/smarty.class.PHP");
$smarty = new smarty();
$smarty->assign("sometext","This is some text to indent");
$smarty->display("indent.tpl");
?>
