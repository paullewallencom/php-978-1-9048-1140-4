<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("sometext", "This is some long text to truncate");
$smarty->display("truncate.tpl");
?>
