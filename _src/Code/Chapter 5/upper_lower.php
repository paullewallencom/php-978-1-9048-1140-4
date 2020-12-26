<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("uppertext","THESE WERE UPPERCASE");
$smarty->assign("lowertext","these were lowercase");
$smarty->display("upper_lower.tpl");
?>
