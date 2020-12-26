<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("somevalue","bangladesh is a small country in south asia");
$smarty->display("count_characters.tpl");
?>

