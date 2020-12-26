<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("somevalue", "It's raining cats & mice");
$smarty->display("replace.tpl");
?>
