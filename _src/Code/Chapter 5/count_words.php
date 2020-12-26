<?
include("libs/smarty.class.php");
$smarty = new smarty();
$words = "smarty is a leading template engine for PHP developers. It is easy to use and extremely flexible to manage. Its learning curve is so short.";

$smarty->assign("somevalue",$words);
$smarty->display("count_words.tpl");?>
