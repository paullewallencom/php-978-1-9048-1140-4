<?
include("libs/smarty.class.PHP");
$smarty = new smarty();
$smarty->assign("somevalue", "this is peter's hen");
$smarty->assign("somehtml","<b>This is some bold text </b>");
$smarty->assign("somescript","<script>alert('hello, its javascript');</script>");
$smarty->display("escape.tpl");
?>
