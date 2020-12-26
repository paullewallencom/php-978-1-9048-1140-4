<?
include("libs/smarty.class.php");
$smarty = new smarty();
$born = strtotime("08/28/1979");
$smarty->assign("born", $born);
$smarty->display("date_format.tpl");
?>
