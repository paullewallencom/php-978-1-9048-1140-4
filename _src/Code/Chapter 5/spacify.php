<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("somevalue", "It's raining cats & dogs");
$smarty->display("spacify.tpl");
?>
