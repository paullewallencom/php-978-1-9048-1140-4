<?
//initialize smarty
include("libs/smarty.class.php");
$smarty = new smarty();
$sentences = <<< EOD
smarty is a leading template engine for PHP developers. It is easy to use and extremely flexible to manage. Its learning curve is so short.
EOD;

$smarty->assign("somevalue",$paragraphs);
$smarty->display("count_sentences.tpl");
?>
