<?
include("libs/smarty.class.php");
$smarty = new smarty();
$paragraphs = <<< EOD
This is paragraph 1
This is paragraph 2
This is paragraph 3
EOD;

$smarty->assign("somevalue",$paragraphs);
$smarty->display("count_paragraphs.tpl");?>
