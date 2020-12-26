<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("somevalue", "1200");
$smarty->display("string_format.tpl");
?>
