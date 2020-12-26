<?
include("libs/smarty.class.php");
$smarty = new smarty();
$sometext = <<< EOD
The wordwrap modifier simply wraps up text with a given parameters. This modifier takes three optional parameters. The first parameter is after how many character to wrap, by default it is 80. The second optional parameter is the character to use as wrapper. And the third parameter works in the same manner as the third parameter of the truncate modifier, it determines whether to break inside a word of not. 
EOD;
$smarty->assign("sometext",$sometext);
$smarty->display("word_wrap.tpl");
?>
