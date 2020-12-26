<?php
include("libs/smarty.class.php");
$smarty = new smarty();
$sample_name = "Jamil Ahmed";
$smarty->assign("name", $sample_name);
$smarty->assign("greetings", "Good Morning");
$smarty->display("sample.tpl");
?>
