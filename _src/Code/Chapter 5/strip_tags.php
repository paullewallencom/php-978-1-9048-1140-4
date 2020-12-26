<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("sometext", "This is some <b>Bold</b> text");
$smarty->display("strip_tags.tpl");
?>
