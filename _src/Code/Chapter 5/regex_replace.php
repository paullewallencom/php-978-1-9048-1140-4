<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("email","My email address is hasin@somewherein.net");
$smarty->display("regex_replace.tpl");
?>
