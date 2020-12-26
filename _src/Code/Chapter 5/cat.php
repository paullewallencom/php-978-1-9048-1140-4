<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("somevalue","bought a shirt yesterday");
$smarty->display("cat.tpl");
?>
